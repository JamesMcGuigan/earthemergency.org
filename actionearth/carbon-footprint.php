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


$title = "Know Your Carbon Footprint";

$logo = 'factory-smoke.jpg';
$logo_alt = 'Factory Smoke';
$stylesheet[] = 'green.css';


$content =<<<HTML

<h3 class='first'>Carbon Footprint - What Is It?</h3>

<p>Carbon dioxide (CO2), the most prolific greenhouse gas is emitted from a variety of sources, the most high-impact of which is the burning of fossil fuels. The amount of energy we consume is based upon the lifestyle we lead and is a direct measure of our individual contribution to CO2 emissions in the atmosphere. This is known as our Carbon Footprint. It is most commonly measured in tonnes of CO2 per year.</p>

<p>If all the CO2 we emit is reabsorbed by the Earth's natural systems, such as forests then it is possible to have a carbon neutral lifestyle.</p>

<p>Global Warming is a direct result of the massive fossil fuel burning which began 250 years ago at the start of the industrial revolution. Today our lifestyles are so dependent on fossil fuels that we can't even switch on a light bulb without adding to the problem.</p>

<p>If we are all part of the problem then potentially we can also, all be part of the solution. Two factors are required, <em>awareness</em> and <em>action</em>. Begin by becoming aware of your Carbon Footprint and then decide where you can make changes in your lifestyle to reduce your emissions.</p>


<h3><a href='carbon-footprint-chart.php'>Calculate Your Carbon Footprint</a></h3>

<p>The average CO2 emissions for a resident of the U.K is 10 tonnes/year. In the US, the average emmissions are more than double this! We might feel virtuous comparing our average Carbon Footprint with the Americans but our emissions still exceed the sustainable level tenfold!</p>
<p>
The maximum emissions each person on the planet can emit if we are to become carbon neutral (all emissions reabsorbed) and thereby stabilise climate is in the region of 1 tonne per person per year. This is based upon stabilisation to within a global temperature rise of 2C.
</p>
<p>See <a href='climate-facts.php'>Climate Change Facts</a>.</p>

<br />

<p>This model which proposes equitable distribution of emissions amongst all the Earth's peoples was proposed by the Global Commons Institute in 1990 and has since gained wide acceptance. </p>

<p>See <a href='contraction-and-convergence.php'>Contraction and Convergence</a>.</p>

<br />

<p>To calculate your <a href='carbon-footprint-chart.php'>carbon footprint</a> use the carbon budgeting chart. <em>(Source: <a href='http://www.amazon.co.uk/exec/obidos/tg/sim-explorer/explore-items/-/0141016922/0/ref=pd_simmore_dp_1/026-0216365-1349266'>How We Can Save the Planet</a>, Mayer Hillman)</em> You will need information about your annual car mileage and household gas/oil and electricity bills.</p>

<p>See <a href='carbon-footprint-chart.php'>Carbon Footprint Calculator</a>.</p>

HTML;


$sidebox_title[] = "";
$sidebox[] = <<<HTML
<h3>Clock Already Ticking</h3><hr />
<p>The world food shortage and species extinction clocks may already be ticking.</p>

<h3>Evaporation</h3><hr />
<p>Reduced evaporation rates effect cloud formation and rain patterns and so far <a href='global-dimming.php'>global dimming</a> is thought to have been responsible for at least the Ethiopian famines of the 1980s</p>
HTML;

$menus[] = 'Climate Facts';


include_once('templates/actionearth.php');

?>
