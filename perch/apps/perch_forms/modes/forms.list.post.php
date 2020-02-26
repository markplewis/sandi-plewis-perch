<?php
    # Title panel
    echo $HTML->title_panel_start();
    echo $HTML->heading1('Forms');
    echo $HTML->title_panel_end();
    
    
    # Side panel
    echo $HTML->side_panel_start();
    echo $HTML->heading3('Help');
    echo $HTML->para('The forms in your site are listed here. If a form is configured to store data, you can click through to view the responses.');
    echo $HTML->side_panel_end();
    
    
    # Main panel
    echo $HTML->main_panel_start();
    
    if (PerchUtil::count($forms)) {
?>
    <table class="d">
        <thead>
            <tr>
                <th class="first"><?php echo $Lang->get('Form'); ?></th>
                <th><?php echo $Lang->get('Responses'); ?></th>
                <th><?php echo $Lang->get('Most recent'); ?></th>
                <?php if ($CurrentUser->userRole() == 'Admin' || ($CurrentUser->userRole() == 'Editor' && $Settings->get('perch_forms_editorMayConfigure')->settingValue())) { ?>
                <th><?php echo $Lang->get('Settings'); ?></th>
                <?php } ?>
                <th class="action last"></th>
            </tr>
        </thead>
        <tbody>
<?php
    foreach($forms as $Form) {
?>
            <tr>
                <td><a href="<?php echo $HTML->encode(PERCH_LOGINPATH); ?>/apps/perch_forms/responses/?id=<?php echo $HTML->encode(urlencode($Form->id())); ?>"><?php echo $HTML->encode($Form->formTitle()); ?></a></td>
                <td><a href="<?php echo $HTML->encode(PERCH_LOGINPATH); ?>/apps/perch_forms/responses/?id=<?php echo $HTML->encode(urlencode($Form->id())); ?>"><?php echo $HTML->encode($Form->number_of_responses());?></a></td>
                <td><?php echo $HTML->encode(strftime('%e %b %Y %H:%M', strtotime($Form->most_recent_response_date())));?></td>
                
                <?php if ($CurrentUser->userRole() == 'Admin' || ($CurrentUser->userRole() == 'Editor' && $Settings->get('perch_forms_editorMayConfigure')->settingValue())) { ?>
                <td><a href="<?php echo $HTML->encode(PERCH_LOGINPATH); ?>/apps/perch_forms/settings/?id=<?php echo $HTML->encode(urlencode($Form->id())); ?>"><?php echo $Lang->get('Configure');?></a></td>
                <?php } ?>
                
                <td>
                    <?php if ($CurrentUser->userRole() == 'Admin' || ($CurrentUser->userRole() == 'Editor' && $Settings->get('perch_forms_editorMayDelete')->settingValue())) { ?>
                    <a href="<?php echo $HTML->encode(PERCH_LOGINPATH); ?>/apps/perch_forms/delete/?id=<?php echo $HTML->encode(urlencode($Form->id())); ?>" class="delete"><?php echo $Lang->get('Delete'); ?></a>
                    <?php } ?>
                </td>
            </tr>

<?php   
    }
?>
        </tbody>
    </table>


    
<?php    
    } // if pages
    
     
    echo $HTML->main_panel_end();


?>