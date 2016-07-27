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

include_once('inc/html-functions.php');
include_once('inc/newsweek-functions.php');

$logo = 'earth-map.jpg';
$logo_alt = 'Planet Earth';
$stylesheet[] = 'green.css';
$title = "Key Articles";


$content = "

";

$menus[] = 'Climate Facts';

include_once('templates/actionearth.php');

?>
