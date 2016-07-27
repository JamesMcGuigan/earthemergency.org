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

$logo = 'traffic-jam.jpg';
$logo_alt = 'Traffic Jam';
$stylesheet[] = 'green.css';

$parent_page = 'actions-pledge.php';

$title = "Reduce Car Travel";

include_once('inc/html-functions.php');

$content =<<<HTML

<h3>Reduce Car Mileage</h3>

<p>Car travel is for the average family the second greatest contributor to greenhouse gas emissions after air flights. </p>

<p>Almost as much energy is consumed in building a vehicle as will be consumed in the entire life of the vehicle. So choosing not to own a car makes a double contribution to reduced emissions.</p>
</a>
<p>Click on choosing a fuel-efficient vehicle to find out about efficiency and low-emission fuels.</p>

<p>Click on other car use options and alternatives to find out about Car Pooling, Sharing, Hiring, Public Transport, Cycling & Walking.</p>


<a name='buy-fuel-efficient-car'></a>
<h3>Choose A Fuel-Efficient Vehicle</h3>

<p>Fuel Efficiency varies widely but generally small - engined cars give better miles per gallon (mpg) ratings; for petrol vehicles typically 30-45mpg.</p>


<p>The most consumptive private vehicles tend to be 4x4's and large-engined sports cars delivering just 12-25mpg for petrol vehicles. </p>

<p>Hybrid vehicles running on a combination of either petrol or LPG and self-generated electricity are now increasingly available. For example the new <a href='http://www.toyota.com/prius/'>Toyota "Prius"</a> (winner of eco-car of the year award 2004) is a mid-sized car which averages 65mpg with either of the above fuels.
</p>

You can also read Toyota's <a href='http://www.toyota.com/toyota/html/hybridsynergyview/handraiser.jsp'>Hybrid Synergy View Newsletter</a>

<p>Keeping your speed down on fast roads also reduces fuel consumption. A car consumes 20% -30% less fuel at speeds of 55mph compared to 75mph.</p>

<p><strong>Liquid Petroleum Gas (LPG)</strong>
vehicles contribute lower CO2 emissions and benefit from cheaper car tax and exemption from the London Congestion Charge. There is also a Government grant available for part of the conversion costs from petrol to LPG.  </p>
For information on hybrids, LPG and grants visit www.transportenergy.org.uk and www.powershift.org.uk
For information on hybrids, LPG and grants visit <a href='http://www.transportenergy.org.uk'>Transport Energy</a> and their <a href='http://www.powershift.org.uk'>Power Shift programme</a>

<p>If you run a car consider joining the <a href='http://www.eta.co.uk'>Environmental Transport Association</a> (ETA) which offers breakdown and travel insurance services and campaigns for a sustainable transport system. Tel: 0800 212 810. Friends of the Earth members also get a discount on all ETA services.</p>

<a name='car-alternatives'></a>
<h3>Other Car Use Options & Alternatives</h3>

<p><strong>Car pooling</strong>
Is one of the fastest growing alternatives to traditional vehicle ownership.  <a href='http://www.mystreetcar.co.uk'>My Streetcar</a> charge £100 for one-off membership. You can check car availability on line, collect from 15 sites around London 24hrs a day and pay just £4.95per hour.
</p>
<p>Nicola Baird co author of Save Cash & Save the Planet estimates that joining a car club can save you up to £3,470. </p>

<p>If a car pool group is not running in your area, how about setting one up?</p>
</dd>

<p><strong>Car sharing</strong>
For long journeys or regular journeys. <a href='http://www.nationalcarshare.co.uk'>National CarShare </a>matches you with other sharers or <a href='mailto:{${$email = email_encode('enquiries@nationalcarshare.co.uk')}}$email'>email them</a>.</p>

<p><strong>Hiring a vehicle</strong>
for occasional use (preferably a hybrid).</p>

<p><strong>Public Transport</strong>
Train, Coach, Bus, Tram and Ferry.</p>

<p><strong>Cycling &amp; Walking</strong>
The new breed of folding bicycles such as the "Brompton" can be easily carried on trains or buses.</p>

<p><strong>Local councils</strong>
often have initiatives on environmentally friendly forms of travel.
Visit: <br /><a href='http://www.direct.gov.uk/QuickFind/LocalCouncils/fs/en'>www.&lt;YourTown&gt;.gov.uk</a>
or <a href='http://www.direct.gov.uk/QuickFind/LocalCouncils/fs/en'>www.&lt;YourCounty&gt;.gov.uk</a>
</p>

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

