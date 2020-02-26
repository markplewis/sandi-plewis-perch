<?php
    
    if ($CurrentUser->userRole() == 'Editor' && $Settings->get('perch_forms_editorMayDelete')->settingValue()==false) exit;
    
    $Forms = new PerchForms_Forms($API);

    $HTML = $API->get('HTML');
    $Form = $API->get('Form');
	$Form->require_field('formID', 'Required');
	
	$message = false;
	
	if (isset($_GET['id']) && $_GET['id']!='') {
	    $ThisForm = $Forms->find($_GET['id'], true);
	}else{
	    PerchUtil::redirect($API->app_path());
	}
	

    if ($Form->submitted()) {
    	if (is_object($ThisForm)) {
    	    $ThisForm->delete();
            PerchUtil::redirect($API->app_path());
        }else{
            $message = $HTML->failure_message('Sorry, that form could not be deleted.');
        }
    }

    
    
    $details = $ThisForm->to_array();



?>