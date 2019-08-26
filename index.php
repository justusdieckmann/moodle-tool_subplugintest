<?php
require_once('../../../config.php');
require_login();
$PAGE->set_context(context_system::instance());
$PAGE->set_url(new moodle_url('/admin/tool/subplugintest/index.php'));

$PAGE->requires->js_call_amd('tool_subplugintest/test', 'init');

echo $OUTPUT->header();
echo '<span id="javascriptworking">Javascript is NOT working</span>';
echo $OUTPUT->footer();