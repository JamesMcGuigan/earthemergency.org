<?php
  // $doctitle
  // $title
  // $content
  // $sidebox_title[]
  // $sidebox[]

$title = "Positive Feedback Loops";
$parent_page = 'climate-facts.php';
$logo = 'carbon_cycle.jpg';
$logo_alt = 'The Carbon Cycle';
$stylesheet[] = 'white.css';

$content =<<<HTML
<p>
A positive feedback loop in the climate-change context, is any natural phenomenon which if triggered by rising temperatures would itself reinforce global warming. Some positive feedback loops are already occurring.
</p>

<dl>
<dt>Forest Fires</dt>
<dd>The increased incidence of forest fires associated with warmer temperatures further removes the natural capacity of the earth system to absorb CO2 as well as releasing the already stored CO2 in the tree mass.</dd>

<dt>Storms &amp; Hurricanes</dt>
<dd>Wind damage to trees also cause further global warming for the reasons described above. Rebuilding of human settlements requires raw materials and energy both of which leave a carbon footprint.</dd>

<dt>Warming Of The Seas</dt>
<dd>As the seas warm they release more CO2 into the atmosphere.</dd>

<dt>Release Of Methane Hydrate</dt>
<dd>Methane Hydrate stored under great pressure in semisolid form beneath the Tundra will be released as a gas as the tundra melts. Methane Hydrate is 8x more potent a greenhouse gas than CO2 and the quantities involved run into billions to tonnes.</dd>
</dl>
HTML;

$sidebox_title[] = "";
$sidebox[] =<<<HTML
<h3>Runaway Greenhouse Effect</h3><hr />
<p>A runaway greenhouse effect could be caused by a number of natural phenomena creating positive feedback loops in the earth climate system. The effect of any of these natural phenomena is to amplify global warming.</p>
HTML;

$menus[] = 'Climate Facts';

include_once('templates/actionearth.php');

?>
