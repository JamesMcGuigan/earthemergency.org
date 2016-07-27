<?php


$root_url = '';

$menu_to_print_title = array();
$menu_to_print_array = array();

$menu_to_print_title['Menu'] = 'Menu';
$menu_to_print_array['Menu'] = array(
    'index.htm' => 'Home',
    'climate-facts.php' => 'Climate Facts',
    'carbon-footprint.php' => 'Carbon Footprint',
    'actions-pledge.php' => 'Actions Pledge',
    'inspire-kids-action.php' => 'Kids Actions',
    'inspire-action.php' => 'Inspire Others',
    'newsweek.php' => 'News and Reports',
);

$menu_to_print_title['Climate Facts'] = 'Climate Facts';
$menu_to_print_array['Climate Facts'] = array(
  'gulf-stream.php' => 'Gulf Stream Slowing Down',
  'positive-feedback-loops.php' => 'Positive Feedback Loops',
  'global-dimming.php' => 'Global Dimming',
  'species-extinction.php' => 'Species Extinction',
  'world-food-shortage.php' => 'World Food Shortages',
  'tipping-point.php' => 'The Tipping Point',
  'kyoto-protocol.php' => 'Kyoto Protocol',
  'regional-greenhouse-gas-initiative.php' => 'Regional Greenhouse Gas Initiative',
);

$menu_to_print_title['Admin'] = 'Admin' . (($username) ? " - $username" : '');
$menu_to_print_array['Admin'] = array(
  'login.php'         => 'Log In',
  'login.php?logout'  => 'Log Out',
  'newsweek-edit.php' => 'Add Newsweek Entry'
);

$highlight[] = 'actions-pledge.php';
$this_page  = substr($_SERVER['REQUEST_URI'], strrpos($_SERVER['PHP_SELF'], '/')+1);


function get_menu_title($menu_to_print) {
  global $menu_to_print_title;
  return $menu_to_print_title[$menu_to_print];
}

function get_menu($menu_to_print) {
  global $menu_to_print_array, $highlight, $this_page, $parent_page;
  $menu_array = $menu_to_print_array[$menu_to_print];
  if($menu_array == null || $menu_array == array()) return;

  $menu_html .= "<ul class='menu first'>\n";
  foreach($menu_array as $link => $menu_text) {
    $class=array();
    if($parent_page === $this_page)  $parent_page = ''; // link cannot be both link and parent
    if($link === $this_page  )       $class[] = 'uberlink';
    if($link === $parent_page)       $class[] = 'uberparent';
    if(in_array($link,$highlight,1)) {
      foreach(array_merge($class, array('')) as $uber) $class[] = $uber.'highlight';
    }
    $class = implode(' ',$class);

    if($class != '') { $class = " class='$class'"; }
    $menu_html .=  "<li$class><a href='$root_url$link'>$menu_text</a></li>\n";
  }
  $menu_html .= "</ul>\n";
  return $menu_html;
}

?>