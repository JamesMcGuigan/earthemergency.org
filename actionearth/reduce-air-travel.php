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

$logo = 'plane.jpg';
$logo_alt = 'Jumbo Jet';
$stylesheet[] = 'white.css';

$parent_page = 'actions-pledge.php';

$title = "Reduce Air Travel";


$content =<<<HTML

<a name='stop-air-travel'></a>
<h3 class='first'>Reduce Air Travel To A Minimum</h3>

<p id='stop-air-travel'>Air travel is the single greatest contributor to greenhouse emissions. One transatlantic return flight to LA causes per passenger emissions equal to that of driving an average family car 12,000 miles. That's equivalent to 6 tonnes of CO2. One return trip to Athens causes equivalent per passenger emissions of 1.5 tonnes CO2. Our individual sustainable quota of CO2 for all our energy needs is about 1.5 tonnes per person per year!</p>

<blockquote>Aeroplane emissions occur at an atmospheric level where they contribute three times more to Global Warming than the same pollution at ground level.</blockquote>

<p><a href='http://www.chooseclimate.org'>"Flying off to a Warmer Climate"</a> is a site which also allows you to calculate your own emissions from particular flights and offers suggestions for alternative travel.</p>

<p>Interestingly named, <a href='http://www.seat61.com'>"The Man In Seat Sixty-One"</a> website is well-researched offering information on travel arrangements by train and by ship, with links to sites where tickets can be purchased.</p>

<p><strong><em>If flying is a necessity</em></strong> then sponsoring the purchase of threatened rainforest, or sponsoring similar acreage of reforestation makes a meaningful contribution. We recommend <a href='http://www.rainforestconcern.org'>sponsoring an extra acre</a> per person per flight which adds just £25 to the cost of each ticket.</p>

<blockquote>We do not recommend most of the carbon emission compensation schemes available which are based on the planting of just one or a few saplings. CO2 sequestration figures used to sell this concept usually pertain to tree growth at maturity - which, assuming they survive still delays the offset by 50 years!</blockquote>

Sign the <a href='http://www.airportpledge.org.uk'>pledge against airport expansion</a>



HTML;


// $sidebox_title[] = "";
// $sidebox[] = <<<HTML
// <h3>Clock Already Ticking</h3><hr />
// <p>The world food shortage and species extinction clocks may already be ticking.</p>
//
// <h3>Evaporation</h3><hr />
// <p>Reduced evaporation rates effect cloud formation and rain patterns and so far <a href='global-dimming.php'>global dimming</a> is thought to have been responsible for at least the Ethiopian famines of the 1980s</p>
// HTML;

$menus[] = 'Climate Facts';


include_once('templates/actionearth.php');

?>
