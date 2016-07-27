<?php
  // $logo = frog.jpg
  // $logo_alt = "Amazon Frog"
  // $stylesheet[] = green.css
  // $doctitle
  // $title
  // $content
  // $sidebox
  // $sidebox_title[]
  // $sidebox[]
  // $show_linkbox = ["climate-facts"|""]

include_once('inc/inc.login.php');

$logo = 'earth-map.jpg';
$logo_alt = 'Planet Earth';
$stylesheet[] = 'green.css';
#$parent_page = 'actions-pledge.php';

$title = "Login Page";

$content = return_login_screen();

$sidebox_title[] = "";
$sidebox[] =<<<HTML
HTML;

$menus[] = "Admin";
$menus[] = "Menu";

include_once('templates/actionearth.php');

?>
