<?php

include_once('inc/html-functions.php');

function read_newsweek_file($filename) {
  global $admin_mode;
  $events = array();
  $events_file = fopen($filename,'r');
  if($events_file == null) { if($admin_mode) echo "invalid filename - $filename - for read_newsweek_file()"; return array(); }
  $date  = '';
  $text  = '';
  $title = '';
  $link  = '';
  $deleted = false;
  while (!feof($events_file)) {
    $line = fgets($events_file, 4096);
    // if we have got to the end of the current section - add to array
    if($date != '' && substr($line,0,4) === 'DATE' || feof($events_file)) {
      $events[] = array('date' => $date, 'text' => $text, 'title' => $title, 'link' => $link, 'deleted' => $deleted );
      $date  = '';
      $text  = '';
      $title = '';
      $link  = '';
      $deleted = false;
    }

    if(substr($line,0,4) === 'DATE') {
      $bad_date_elements = array('.','.','-',',');//,'Monday','Tuesday','Wednesday','Thursday','Friday','Saterday','Sunday');
      $line = str_replace($bad_date_elements,' ',$line);
      $date = strtotime(substr($line,5));
    } else
    if(substr($line,0,4) === 'LINK') {
      $link = substr($line,5);
    } else
    if(substr($line,0,5) === 'TITLE') {
      $title = substr($line,6);
    } else
    if(substr($line,0,7) === 'DELETED') {
      $deleted = true;
    } else {
      $text .= $line.' ';
    }
  }
  fclose($events_file);
  return $events;
}

function sortbydate($a, $b) { return ($a["date"] < $b["date"]); }

function display_newsweek_file($events, $date_format='%A, %e %B %Y') {
  usort($events, "sortbydate");
  $events_html = '';
  $first = " class='first'";
  $events_html .= '<div class="newsweek">';
  foreach($events as $event) {
    if($event['deleted'] === true) { continue; }

    $date = strftime($date_format,$event['date']);
    $text = text_format($event['text']);
    $events_html .= "<h3$first>$date</h3>\n<div>$text</div>\n\n";

    if($admin_mode) {
      $text_encode = urlencode($text);
      $events_html .= "<div><form method='post'><div>"
                    . "<input type='hidden' name='date' value='$event[date]'>"
                    . "<input type='hidden' name='text' value='$event[text]'>"
                    . "<input type='hidden' name='deleted' value='$event[deleted]'>"
                    . "<input type='submit' value='Edit Link'>"
                    . "</div><form></div>";
    }
    $first = '';
  }
  $events_html .= "</div>";
  return $events_html;
}


function display_newsweek_headers($events, $date_format='%A, %e %B %Y') {
  usort($events, "sortbydate");
  $events_html = '';
  $first = " class='first'";
  $events_html .= '<ul class="newsweek">';
  foreach($events as $event) {
    if($event['deleted'] === true) { continue; }

    $date = strftime($date_format,$event['date']);
    $text = text_format($event['text']);
    $events_html .= "<li$first>$date\n<div>$text</div>\n\n";

    if($admin_mode) {
      $text_encode = urlencode($text);
      $events_html .= "<div><form method='post'><div>"
                    . "<input type='hidden' name='date' value='$event[date]'>"
                    . "<input type='hidden' name='text' value='$event[text]'>"
                    . "<input type='hidden' name='deleted' value='$event[deleted]'>"
                    . "<input type='submit' value='Edit Link'>"
                    . "</div><form></div>";
    }
    $first = '';
  }
  $events_html .= "</div>";
  return $events_html;
}



?>
