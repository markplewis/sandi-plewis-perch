<?php
    $this->register_app('perch_forms', 'Forms', 1, 'Process data from web forms', 1.0);
    $this->require_version('perch_forms', '1.7');
    $this->add_setting('perch_forms_editorMayConfigure', 'Editors may configure', 'checkbox', false);
    $this->add_setting('perch_forms_editorMayDelete', 'Editors may delete forms', 'checkbox', false);
?>
