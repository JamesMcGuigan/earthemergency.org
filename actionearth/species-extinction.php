<?php
  // $doctitle
  // $title
  // $content
  // $sidebox_title[]
  // $sidebox[]

$title = "Species Extinction";

$logo = 'polar-bear.jpg';
$logo_alt = 'Polar Bear';
$stylesheet[] = 'white.css';
$parent_page = 'climate-facts.php';

$content = "
<p class='first'>
Professor Stephen Schneider, climatologist at Stanford University points to the <em>\"inertia\"</em> in the Earth's climate system causing a lag between the greenhouse gases already in the atmosphere and the time it takes to make a corresponding warming of the oceans.
</p><p>
There may already be enough greenhouse gas in the atmosphere to ensure that in years to come polar bears at the N Pole and Penguins at the S Pole will be unable to make their seasonal migrations on pack ice in pursuit of food. The extinction time bomb may already be ticking.
</p><p>
Bill Hare of the Potsdam Institute for Climate Impact Research (Germany) has predicted a number of damaging effects on biodiversity linked to the level of temperature rise. Around 2C above pre-industrial levels these effects include...
</p>
<ul>
  <li><em>\"Bleaching\"</em> of coral reefs - the visual result of animals being forced out by high temperatures and the reef dying.</li>

  <li>Mediterranean regions will be hit by more forest fires and insect pests.</li>

  <li>The Fynbos in South Africa - the richest floral ecosystem on Earth will start to lose its species.</li>

  <li>The broadleaved forests of China will start to die.</li>
</ul>

<p>At around 3C above pre-industrial temperatures which may occur around the year 2070 the effects would be catastrophic with species extinction commonplace.</p>

";

$sidebox_title[] = "";
$sidebox[] = "
<h3>Clocks Already Ticking</h3><hr />
<p>The world food shortage and species extinction clocks may already be ticking.</p>

<h3>Forest Fires</h3><hr />
<p>Alaskan fires consumed over one million acres of forest in 2004.</p>
";

$menus[] = 'Climate Facts';


include_once('templates/actionearth.php');

?>
