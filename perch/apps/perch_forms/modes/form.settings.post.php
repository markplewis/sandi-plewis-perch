<?php
    # Title panel
    echo $HTML->title_panel_start();
    echo $HTML->heading1('Forms / Form Settings');
    echo $HTML->title_panel_end();
    
    
    # Side panel
    echo $HTML->side_panel_start();
    echo $HTML->heading3('Personal data');
    echo $HTML->para('If storing personal data, you must pay attention to any legal requirements for how that data is treated.');

    echo $HTML->heading3('Uploading files');
    echo $HTML->warning_message('Set the file upload path to a folder %soutside of your website%s.', '<strong>', '</strong>');
    echo $HTML->para('It is critical that you do not allow site visitors up upload files directly into your website.');
    echo $HTML->para('Path must be a full system path. For reference, your path to Perch is:');
    echo '<p><code>', str_replace('/', '<span></span>/', $HTML->encode(PERCH_PATH)), '</code></p>';
    echo $HTML->para('The path you give should be above your website and must be writable by PHP.');
    
    echo $HTML->heading3('Spam prevention');
    echo $HTML->para('Akismet is an excellent third-party service for filtering spam. %sFind out more or get an API key,%s', '<a href="http://akismet.com/">', '</a>');
    echo $HTML->side_panel_end();
    
    
    # Main panel
    echo $HTML->main_panel_start(); 
    
    if ($message) echo $message;
    
    
    if (isset($settings['fileLocation']) && trim($settings['fileLocation'])!='' && !is_writable($settings['fileLocation'])) {
        echo $HTML->warning_message('The file path %s is not writable by PHP.', '<code>'.$settings['fileLocation'].'</code>');
    }
    
    echo $HTML->heading2('Form settings');
        
    echo $Form->form_start();
    
        echo $Form->text_field('formTitle', 'Title', $details['formTitle']);
        $Form->last = true;
        echo $Form->text_field('formTemplate', 'Template', $details['formTemplate']);

        echo $HTML->heading2('Storing responses');
        
        echo $Form->checkbox_field('store', 'Store responses', '1', @$settings['store']);
        $Form->last = true;
        echo $Form->hint('Must be absolute system path outside site - see sidebar');
        echo $Form->text_field('fileLocation', 'File upload path', @$settings['fileLocation']);

        echo $HTML->heading2('Sending email');
        echo $Form->checkbox_field('email', 'Send response via email', '1', @$settings['email']);
        
        echo $Form->hint('Separate multiple addresses with commas.');
        echo $Form->text_field('emailAddress', 'Email address(es)', @$settings['emailAddress']);
        
        echo $Form->text_field('adminEmailSubject', 'Email subject line', @$settings['adminEmailSubject']);
        $Form->last = true;
        echo $Form->textarea_field('adminEmailMessage', 'Email introduction text', @$settings['adminEmailMessage'], 's', false);
        
        echo $HTML->heading2('Spam prevention');
        

        
        echo $Form->checkbox_field('akismet', 'Use Akismet', '1', @$settings['akismet']);
        echo $Form->text_field('akismetAPIKey', 'Akismet API key', @$settings['akismetAPIKey']);

        echo $Form->submit_field('btnSubmit', 'Save', $API->app_path());

    
    echo $Form->form_end();
    
    echo $HTML->main_panel_end();

?>