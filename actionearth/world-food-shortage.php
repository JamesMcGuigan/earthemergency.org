<?php
  // $doctitle
  // $title
  // $content
  // $sidebox_title[]
  // $sidebox[]


$title = "World Food Shortages";

$logo = 'cracked-earth.jpg';
$logo_alt = 'Cracked Earth';
$stylesheet[] = 'green.css';
$parent_page = 'climate-facts.php';

$content = "
<p class='first'>
Bill Hare of the Potsdam Institute for Climate Impact Research (Germany) predicts that with a 2C increase in warming above pre-industrial levels as many as 5.5 billion people will be exposed to crop losses resulting from climatic changes.
</p><p>
At around a 3C increase the changes could be catastrophic with whole regions becoming unsuitable for producing food and water stress exacerbated.
</p><p>
With a third of the worlds' population living in low lying areas less than 50 miles of the sea, sea level rises will cause massive displacement of peoples.
</p>
";

$sidebox_title[] = "";
$sidebox[] = "
<h3>Clock Already Ticking</h3><hr />
<p>The world food shortage and species extinction clocks may already be ticking.</p>

<h3>Evaportaion</h3><hr />
<p>Reduced evaporation rates effect cloud formation and rain patterns and so far <a href='global-dimming.php'>global dimming</a> is thought to have been responsible for at least the Ethiopian famines of the 1980s</p>
";

$menus[] = 'Climate Facts';


include_once('templates/actionearth.php');

?>
