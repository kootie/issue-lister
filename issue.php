<?php
include_once 'config/init.php';

$issue = new Issue;

$template = new Template('templates/issue-single.php'); //takes a path

//check value of find id
$issue_id = isset($_GET['id']) ? $_GET['id'] : null;

$template->issue = $issue->getIssue($issue_id);

echo $template;

?>