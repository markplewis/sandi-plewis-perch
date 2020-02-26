<?php
    # Title panel
    echo $HTML->title_panel_start();
    if ($spam) {
        echo $HTML->heading1('Form Spam Responses');
    }else{
        echo $HTML->heading1('Form Responses');
    }
    
    
    echo $HTML->title_panel_end();
    
    
    # Side panel
    echo $HTML->side_panel_start();
    echo $HTML->heading3('Export responses');
    echo $HTML->para('You can download the responses to this form as a CVS file. This can be opened in Microsoft Excel or a similar application.');
    echo $HTML->para('%sDownload CSV%s', '<a class="button" href="'.$HTML->encode(PERCH_LOGINPATH.'/apps/perch_forms/responses/export/?id='.$Form->id()).'">', '</a>');    
    
    echo $HTML->heading4('More actions');
    echo $HTML->para('%sView spam responses%s', '<a href="'.$HTML->encode(PERCH_LOGINPATH.'/apps/perch_forms/responses/?id='.$Form->id().'&spam=1').'">', '</a>');
    echo $HTML->para('%sView form listing%s', '<a href="'.$HTML->encode(PERCH_LOGINPATH.'/apps/perch_forms/').'">', '</a>');


    echo $HTML->side_panel_end();
    
    
    # Main panel
    echo $HTML->main_panel_start();
    
    if (PerchUtil::count($responses)) {
?>
    <table class="d">
        <thead>
            <tr>
                <th class="first"><?php echo $Lang->get('Date'); ?></th>
                <th><?php echo $Lang->get('IP Address'); ?></th>
                <th><?php echo $Lang->get('Detail'); ?></th>
                <th class="action last"></th>
            </tr>
        </thead>
        <tbody>
<?php
    foreach($responses as $Response) {
?>
            <tr>
                <td><a href="<?php echo $HTML->encode(PERCH_LOGINPATH); ?>/apps/perch_forms/responses/detail/?id=<?php echo $HTML->encode(urlencode($Response->id())); ?>"><?php echo $HTML->encode(strftime('%e %b %Y %H:%M', strtotime($Response->responseCreated()))); ?></a></td>
                <td><?php echo $HTML->encode($Response->responseIP()); ?></td>
                <td><a href="<?php echo $HTML->encode(PERCH_LOGINPATH); ?>/apps/perch_forms/responses/detail/?id=<?php echo $HTML->encode(urlencode($Response->id())); ?>"><?php echo $Lang->get('View details');?></a></td>
                <td><a href="<?php echo $HTML->encode(PERCH_LOGINPATH); ?>/apps/perch_forms/responses/delete/?id=<?php echo $HTML->encode(urlencode($Response->id())); ?>" class="delete"><?php echo $Lang->get('Delete'); ?></a></td>
            </tr>

<?php   
    }
?>
        </tbody>
    </table>


    
<?php    
        if ($Paging->enabled()) {
            echo $HTML->paging($Paging);
        }


    } // if responses
    
     
    echo $HTML->main_panel_end();


?>