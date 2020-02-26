<?php
    # Title panel
    echo $HTML->title_panel_start();
    echo $HTML->heading1('Forms / Response');
    echo $HTML->title_panel_end();
    
    
    # Side panel
    echo $HTML->side_panel_start();
    echo $HTML->heading3('Delete response');
    echo $HTML->para('%sDelete this response%s', '<a href="'.$API->app_path().'/responses/delete/?id='.$Response->id().'">', '</a>');
    
    if ($Response->responseSpam()) {
        echo $HTML->heading3('This is spam');
        echo $HTML->para('This response was automatically flagged as spam.');
        echo $Form->form_start();
    		echo $Form->submit_field('btnSubmit', 'This is not spam');
        echo $Form->form_end();
    }else{
        echo $HTML->heading3('Is this spam?');
        echo $HTML->para('Is this a junk message?');
        echo $Form->form_start();
    		echo $Form->submit_field('btnSubmit', 'Mark as spam');
        echo $Form->form_end();
    }
    
    
    echo $HTML->heading3('More actions');
    echo $HTML->para('%sView form listing%s', '<a href="'.$HTML->encode(PERCH_LOGINPATH.'/apps/perch_forms/').'">', '</a>');
    echo $HTML->para('%sView more responses for this form%s', '<a href="'.$HTML->encode(PERCH_LOGINPATH.'/apps/perch_forms/responses/?id='.$Response->formID()).'">', '</a>');
    echo $HTML->side_panel_end();
    
    
    # Main panel
    echo $HTML->main_panel_start(); 

    if ($message) echo $message;

    echo $HTML->heading2('Response');
    
    echo '<table class="d factsheet">';

    echo '<tr>';
        echo '<th>'.$Lang->get('Received').'</th>';
        echo '<td>'.$HTML->encode(strftime('%e %b %Y %H:%M', strtotime($Response->responseCreated()))).'</td>';
    echo '</tr>';
    
    foreach($Response->fields() as $name=>$details) {
        
        echo '<tr>';
            if (isset($details->attributes->label)) $name = $details->attributes->label;
            echo '<th>'.$HTML->encode($name).'</th>';
            echo '<td>'.nl2br($HTML->encode($details->value)).'&nbsp;</td>';
        echo '</tr>';
    }

    foreach($Response->files() as $name=>$details) {
        
        echo '<tr>';
            $displayname = $name;
            if (isset($details->attributes->label)) $displayname = $details->attributes->label;
            echo '<th>'.$HTML->encode($displayname).'</th>';
            if (file_exists($details->path)) {
                echo '<td><span class="file"></span><a href="'.$API->app_path().'/responses/detail/?id='.$Response->id().'&file='.$name.'">'.$HTML->encode($details->name).'</a></td>';
            }else{
                echo '<td><span class="file"></span>'.$HTML->encode($details->name).' '.$Lang->get('(File not available to download)').'</td>';
            }
            
        echo '</tr>';
    }
    
    echo '</table>';


    echo $HTML->main_panel_end();

?>