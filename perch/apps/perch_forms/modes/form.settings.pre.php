<?php
    
    if ($CurrentUser->userRole() == 'Editor' && $Settings->get('perch_forms_editorMayConfigure')->settingValue()==false) exit;
    
    $Forms = new PerchForms_Forms($API);

    $HTML = $API->get('HTML');
    $Form = $API->get('Form');
	
    $message = false;
    
    
    if (isset($_GET['id']) && $_GET['id']!='') {
        $formID = (int) $_GET['id'];    
        $ThisForm = $Forms->find($formID);
        $details = $ThisForm->to_array();
        $settings = $ThisForm->get_settings();
    }else{
        $message = $HTML->failure_message('Sorry, that form could not be updated.');
    }


    $Form->require_field('formTitle', 'Required');
    $Form->require_field('formTemplate', 'Required');

    if ($Form->submitted()) {
		$postvars = array('formTitle','formTemplate');
    	$data = $Form->receive($postvars);
    	
    	$settingvars = array('store','fileLocation', 'email', 'emailAddress', 'adminEmailMessage', 'adminEmailSubject', 'akismet', 'akismetAPIKey');
    	$settingdata = $Form->receive($settingvars);
    	
    	$data['formOptions'] = PerchUtil::json_safe_encode($settingdata);
    	
        $ThisForm->update($data);
    	
    	
    	
        if (is_object($ThisForm)) {
            $message = $HTML->success_message('Your form has been successfully edited. Return to %sform listing%s', '<a href="'.$API->app_path() .'">', '</a>');
        }else{
            $message = $HTML->failure_message('Sorry, that form could not be edited.');
        }
        
        if (isset($settingdata['akismet']) && $settingdata['akismet']=='1' && isset($settingdata['akismetAPIKey']) && $settingdata['akismetAPIKey']!='') {
    	    if (!PerchForms_Akismet::verify_key($settingdata['akismetAPIKey'])) {
    	        $message .= $HTML->failure_message('Sorry, Akismet API key does not appear to be correct.');
    	    }
    	}
        
        $details = $ThisForm->to_array();
        $settings = $ThisForm->get_settings();
    }

?>