<?php
  // $doctitle
  // $title
  // $content
  // $sidebox_title[]
  // $sidebox[]

include_once('inc/html-functions.php');

$title = "Sponsor Rainforests";

$parent_page = 'actions-pledge.php';

$content =<<<HTML

<p>At this time of accelerating Global Warming, deforestation of tropical forests defies comprehension. It constitutes a crime against the Earth and future generations.</p>

<p><strong>In 2003 tropical forests were destroyed at an incomprehensible 1 acre every two seconds. Today destruction continues unabated.</strong></p>

<p><strong>Forest felling to date has caused 1/5 of Global Warming.</strong></p>
<p>&nbsp;</p>

<dl>
<dt class='action'>Action</dt>
<dt>Rainforest Concern</dt>
<dd><a href='http://www.rainforestconcern.org'>Rainforest Concern</a> are actively involved in purchasing and replanting threatened rainforest habitat in the Choco-Andean rainforest corridor in North-West Ecuador, one of the world's biodiversity "hotspots" You can sponsor the purchase of 1 acre for just £25.</dd>

<dt>Focus Conservation</dt>
<dd><a href='http://www.focusconservation.org'>Focus Conservation</a> are similarly active in purchasing threatened Jaguar forest habitat in the Pantanal, Brazil. You can sponsor an acre of land for just £20.</dd>

</dl>
<dl>
<dt class='action'>Action</dt>
<dt>Sustainable Farms Replacing Tropical Forest Slash &amp; Burn in Costa Rica.</dt>
<dd>Tropical ecologist Mike Hands has pioneered "Inga Alley-Cropping" as a way of sustainably farming deforested areas. Over 4000 farmers are awaiting seed support before they can abandon their slash and burn practices. When they do thousands of hectares of tropical forest will be saved every year. To find out more or to make a donation contact <a href='mailto:{${$email=email_encode('mikehands@uk2.net')}}$email'>Mike Hands</a> or visit <a href='http://www.theecologist.org'>The Ecologist</a></dd>

</dl><dl>
<dt class='action'>Action</dt>
<dt>World Bank Alert</dt>
<dd>The World Bank have been aggressively negotiating with the Congolese Government to log 1/3 of the Congo rainforest this year. The Congo Basin is home to the largest and most bio-diverse rainforest in Africa. Felling will accelerate Global Warming, cause untold species loss and displace Pigmy tribes into shanty towns.

<p>Please <a href='http://www.rainforestfoundationuk.org/s-Petition%20the%20World%20Bank%20on%20Congo%20Forests'>sign the Rainforest Foundation petition</a> and add your signature against the World Bank and pass this information on to others.</p></dd>
</dl>

HTML;

$sidebox_title[] = "World Forest Facts";
$sidebox[] =<<<HTML

<h3 class='date'>Highest loss of Biodiversity</h3><hr/>

<p>The Earth is currently losing biodiversity at a rate of 100 species per day, mostly in tropical forests, because of the Developed World's rapacious appetite for timber, soya, palm oil and beef.</p>


<h3 class='date'>Forests are essential carbon sinks</h3><hr/>

<p>Global forests which act as repositories for carbon store approximately 80% of the carbon stored in land vegetation, of which 60% is stored in tropical forests.</p>


<h3 class='date'>Deforestation is a double negative for climate change</h3><hr/>

<p>Stored carbon is released into the atmosphere at the very same time as the means of removing further CO2 from the atmosphere is lost. </p>


<h3 class='date'>Protecting Rainforests is a key conservation action </h3><hr/>

<p>Simultaneously you help prevent Global Warming, protect indigenous forest peoples and reduce the rate of species extinction on the planet. </p>

HTML;

//$menus[] = 'Climate Facts';


include_once('templates/actionearth.php');

?>
