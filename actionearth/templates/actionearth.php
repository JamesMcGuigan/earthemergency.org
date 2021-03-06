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

  ob_start("ob_gzhandler");

  if($_SERVER['QUERY_STRING'] == "popup") {
    include('actionearth-popup.php');
    exit;
  }

  include_once('menu.php');
  include_once('inc/inc.login.php');

  if(!$logo)     { $logo = 'frog.jpg'; }
  if(!$logo_alt) { $logo_alt = 'Amazon Frog'; }
  if(!$doctitle) { $doctitle = $title; }
  if(!$title)    { $title = $doctitle; }
  $doctitle = 'Action Earth' . (($title) ? ": $title" : '');

  if(!$stylesheet)              { $stylesheet    = 'green.css'; }
  if(!is_array($stylesheet))    { $stylesheet    = ($stylesheet)    ? array($stylesheet)    : array(); }
  if(!is_array($sidebox))       { $sidebox       = ($sidebox)       ? array($sidebox)       : array(); }
  if(!is_array($sidebox_title)) { $sidebox_title = ($sidebox_title) ? array($sidebox_title) : array(); }
  if(!is_array($javascript))    { $javascript    = ($javascript)    ? array($javascript)    : array(); }
  if(!is_array($menus))         { $menus         = ($menus)         ? array($menus)         : array(); }
  if(!in_array("Menu", $menus)) { array_unshift($menus,"Menu"); }
  if(!in_array("Admin", $menus)
  &&  $admin_mode === true)     { array_unshift($menus,"Admin"); }


  function add_metadata(&$data) {
    $start  = '%(\s[\*_/><\.,-]*)';
    $end    =    "([\*_/><\.,-]*\s)%Us";
    $middle = "((?![^\S]).*(?![^\S]))";

    $data = str_replace(' CO2',  ' <abbr title=\'Carbon Dioxide\'>CO<sub>2</sub></abbr>',$data);
    $data = str_replace('(CO2)',' (<abbr title=\'Carbon Dioxide\'>CO<sub>2</sub></abbr>)',$data);
    $data = preg_replace('/([ ,.!>-])(\d+)C([ <,.!-])/','$1$2&#176;C$3',$data); // add degree sign after 2C

    $data = str_replace('"<','" <',$data);  // add a space to allow regexp to match
    $data = preg_replace($start.'"'.$middle.'"'.$end,'$1<em>&quot;$2&quot;</em>$3',$data); // italics
    return $data;
  }
  add_metadata($content);
  add_metadata($pre_footer);
  add_metadata($footer);
  foreach($sidebox as $key => $value) { add_metadata($sidebox[$key]); }




?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
         "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
  <title><?php echo $doctitle; ?></title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<?php
  array_unshift($stylesheet,'actionearth.css');
  foreach($stylesheet as $css) {
    $ie_only_css = str_replace(".css", "-ie-only.css", $css);
    echo "<link href='templates/$css' rel='stylesheet' type='text/css' media='all' />\n";
    echo "<!--[if IE]><link href='templates/$ie_only_css' rel='stylesheet' type='text/css' media='all' /><![endif]-->\n";
  }

  foreach($javascript as $js) {
    echo "<script language='JavaScript' src='inc/$js'></script>\n";
  }
?>

</head>
<body>
<div id='wrapper'>
<div id='header'><a href="index.htm"><img id='logo' src="images/actionearth-logo.jpg" alt="ActionEarth Logo" /></a></div>
<div id='menubar'>

  <?php
  // if(false) foreach($menu as $m) echo $m;
  echo '<div>&nbsp;</div>';
  ?>

</div> <!-- end menubar -->
<div id='content-wrapper'>
  <div id='title'>
    <?php echo "<img src='images/$logo' alt='$logo_alt' />"; ?>
    <div>
      <table><tr><td valign="middle" align="center">
      <h2><?php echo $title; ?></h2>
      </td></tr></table>
    </div>
  </div> <!-- end header -->
  <div class='content'>

  <?php echo $content; ?>

  </div> <!-- end content -->
</div> <!-- end content-wrapper -->

<?php

// foreach($menu_title as $title) array_unshift($sidebox_title, $title);
// foreach($menu as       $m)     array_unshift($sidebox, $m);

foreach(array_reverse($menus) as $menu) {
  array_unshift($sidebox_title, get_menu_title($menu));
  array_unshift($sidebox,       get_menu($menu));
}

foreach($sidebox as $box) {
$box_title = array_shift($sidebox_title);
if(!$box) continue;
echo "
  <div class='sidebox'><div class='sidebox-inner'>
    <div class='sidebox-header'><div><h3>$box_title</h3></div></div>
    <div class='sidebox-spacer'></div>
    <div class='sidebox-body'><div>

    $box

    </div></div> <!-- end sidebox-body -->
  </div></div><!-- end sidebox-->
";
}
?>

<div id='content_footer' class='content'>
  <?php echo $pre_footer; ?>
</div>


<div id='footer'>
  <?php echo $footer; ?>
</div>

</div> <!-- end wrapper -->

</body></html>