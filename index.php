<?php
include_once 'config/init.php';

$issue = new Issue;

$template = new Template('templates/frontpage.php'); //takes a path

//check value of find id
$category = isset($_GET['category']) ? $_GET['category'] : null;

if($category){

    $template->issues = $issue->getByCategory($category);

    $template->title = 'Issues in '.$issue->getCategory($category)->name;

} else {

    $template->title = 'Latest Issues';

    $template->issues = $issue->getAllIssues();

}



$template->categories = $issue->getCategories();

echo $template;

?>