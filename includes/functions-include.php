<?php
$unite = "";

$page_name = "/" . substr($_SERVER['REQUEST_URI'], strrpos($_SERVER['REQUEST_URI'], '/') + 1);
// echo "THIS IS PAGENAME : " . $page_name;
// echo "<pre>";
// print_r($_SERVER);
// exit;
if(empty($page_name)){
    $page_name = "/";
}
$init_page_details = init_page_details($page_name);
$result = mysqli_fetch_assoc($init_page_details);
// echo "<pre>";
// print_r($result);
// exit;
$isMain = '';
?>