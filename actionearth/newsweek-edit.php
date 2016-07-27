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
$title = "Add News Week Entry";

// http://uk2.php.net/ma$deletednual/en/function.strftime.php
$date_format = '%A, %e %B %Y'; // Monday, 3 December 1982
$newsweek_file = 'newsweek-events.txt';

$events  = read_newsweek_file($newsweek_file);

if($_POST) $message = "Add New Newsweek Entry";
else {
  $found = false;
  foreach($_POST as $key => $value) $_POST[$key] = stripslashes($_POST[$key]);

  foreach($events as $event) {

  }

}




$content = display_newsweek_file($events,$date_format);

$sidebox_title[] = "";
$sidebox[] =<<<HTML
HTML;

$menus[] = 'Climate Facts';

include_once('templates/actionearth.php');


?>
