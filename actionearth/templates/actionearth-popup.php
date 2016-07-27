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

  if(!$logo)     { $logo = 'frog.jpg'; }
  if(!$logo_alt) { $logo_alt = 'Amazon Frog'; }
  if(!$doctitle) { $doctitle = $title; }
  if(!$title)    { $title = $doctitle; }
  $doctitle = "Action Earth" . (($title) ? ": $title" : '');

//   if(!$stylesheet)              { $stylesheet = 'green.css'; }
  if(!is_array($stylesheet))    { $stylesheet    = array($stylesheet); }
  if(!is_array($sidebox))       { $sidebox       = array($sidebox); }
  if(!is_array($sidebox_title)) { $sidebox_title = array($sidebox_title); }
  if(!is_array($javascript))    { $javascript    = array($javascript); }

  include_once('menu.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
         "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
  <title><?php echo $doctitle; ?></title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <link href="templates/actionearth.css" rel="stylesheet" type="text/css" media='all' />
  <?php foreach($stylesheet as $css) {
    echo "<link href='templates/$css' rel='stylesheet' type='text/css' media='all' />";
  } ?>
  <?php foreach($javascript as $js) {
    echo "<script language='JavaScript' src='inc/$js'></script>";
  } ?>
  <!--[if IE]><link href="templates/actionearth-ie-only.css" rel="stylesheet" type="text/css" media='all' /><![endif]-->
</head>
<body>

<div class="content popup">
  <?php echo $content; ?>
  <?php echo $pre_footer; ?>
</div>

</div> <!-- end wrapper -->

</body></html>