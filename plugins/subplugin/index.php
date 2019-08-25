<?php
require_once('../../../../../config.php');
require_login();
$PAGE->set_context(context_system::instance());
$PAGE->set_url(new moodle_url('/admin/tool/subplugintest/plugins/subplugin/index.php'));

$PAGE->requires->js_call_amd('testsubplugin_subplugin/test', 'init');

echo $OUTPUT->header();
echo $OUTPUT->footer();