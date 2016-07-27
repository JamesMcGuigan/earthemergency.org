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

include_once('inc/html-functions.php');
$parent_page = 'carbon-footprint.php';

$logo = 'plane.jpg';
$logo_alt = 'Jumbo Jet';
$stylesheet[] = 'white.css';

$title = "Carbon Footprint Calculator";

if($_POST != null) {
  $chart = array();
  $subtotal = 0.0;
  foreach($_POST as $key => $value) {
    // item_coeff = <hidden value - ie 0.16>
    // item_emmissions <display>
    // item_usage <user input>
    // $total_kilograms_emissions <display>
    // $total_tonnes_emissions <display> = kg / 1000
    // $message

    $type = substr(strrchr($key, '_'),1);
    if($type === 'coeff') {
      $item  = substr($key, 0, (strlen($key)-6));
      $coeff = $value;
      $usage = $_POST[$item.'_usage'];
      $emissions = $coeff * (float)$usage;
      ${$item.'_emissions'} = round($emissions,2);
      $subtotal += $emissions;
    }
  }

  $total_emissions_kg      = number_format(round($subtotal));
  $total_emissions_tonnes  = number_format(round($subtotal/1000,1),1);
  $total_emissions_tonnes2 = number_format(round($subtotal/1000,1),1)*2;

  $averge_kg = 5420;

  $footprint  = "Your individual CO2 emissions are $total_emissions_tonnes tonnes per annum<br/>";
  $footprint .= "Your total share of CO2 emissions is $total_emissions_tonnes2 tonnes per annum";
  if($subtotal < 0) {
    $message_title = '<h2 class="error">Error</h2>';
    $message = 'Either you are a tree or you made an error filling in the form, try again!';
  }
  elseif($subtotal == 0) {
    $message_title = '<h2 class="error">Error</h2>';
    $message = 'Either you live in the forest or you forgot to fill in the form, try again!';
  }
  elseif($subtotal < 1000) {
    $message_title = '<h2 class="success">Congratulations</h2>';
    $message = ' Your total CO2 emmissions are under a tonne, if everybody lived like you then solving the global warming issue would be easy!.';
  }
  elseif($subtotal < 1600) {
    $message_title = '<h2 class="success">Congratulations</h2>';
    $message = ' You are using no more than your fair share of CO2 emmissions for a sustainable world, keep up the good work!';
  }
  elseif($subtotal < $averge_kg/2) {
    $message_title = '<h2 class="success">Congratulations</h2>';
    $message = ' Your carbon footprint is less than half the UK average, while still not truly sustainable in the long term, you can give yourself a pat on the back for getting this far; keep up the good work!';
  }
  elseif($subtotal < $averge_kg*(3/4)) {
    $message_title = '<h2 class="notbad">Not Bad</h2> ';
    $message = 'While your carbon footprint is less than the UK average, there is still plenty of room for improvement! The <a href="actions-pledge.php">Actions Pledge</a> offers 13 ideas for actions which could make a real difference.';
  }
  elseif($subtotal < $averge_kg*(5/4)) {
    $message_title = '<h2 class="notbad">Average</h2>';
    $message = 'Your carbon footprint is above the UK average. This is far from sustainable. The <a href="actions-pledge.php">Actions Pledge</a> offers 13 ideas for actions which would make a real difference.';
  }
  elseif($subtotal < $averge_kg*2) {
    $message_title = '<h2 class="warning">Warning</h2>';
    $message = 'Your carbon footprint is significantly above the UK average. Your lifestyle is very seriously damaging the planet. Please read the <a href="climate-facts.php">Climate Change Facts</a>. The <a href="actions-pledge.php">Actions Pledge</a> offers 13 ideas for actions which would make a real difference.';
  }
  else {
    $message_title = '<h2 class="warning">Danger</h2>';
    $message = 'Your carbon footprint is more than double the UK average. Your high carbon lifestyle is a very seriously endangering the planet. Please read the <a href="climate-facts.php">Climate Change Facts</a>. The <a href="actions-pledge.php">Actions Pledge</a> offers 13 ideas for actions which would make a real difference.';
  }
} else {
  foreach( array(
    'total_kilograms_emissions',
    'total_tonnes_emissions',
    'total_emissions_tonnes',
    'electricity_emissions',
    'gas_emissions',
    'heating_oil_emissions',
    'petrol_car_emissions',
    'diesel_car_emissions',
    'rail_intercity_emissions',
    'rail_other_services_emissions',
    'rail_underground_emissions',
    'bus_london_emissions',
    'bus_outside_london_emissions',
    'express_coach_emissions',
    'bicycle_emissions',
    'walking_emissions',
    'airplane_europe_emissions',
    'airplane_outside_europe_emissions',
    'total_emissions_kg',
    'total_emissions_tonnes',
  ) as $var )
  {
//    if(!isset($$var)) $$var = '???';
  }
}
if($total_emissions_tonnes) $total_emissions_tonnes .= "<a href='#notes'>***</a>";


if($message) {
$results_text .=<<<MESSAGE
<a name='results'></a>
<hr/>
<div class='message' id='carbon-chart-spacer'>
  $message_title
  <p><strong>$footprint</strong></p>
  <p>$message</p>
</div><br/>
MESSAGE;
}



$content =<<<HTML

<a name='calculate'></a>
<!-- <h3 class='first'>Calculate Your Carbon Footprint</h3> -->

<p>To calculate your individual carbon footprint use the Carbon Footprint Calculator. You will need the following information:</p>
<ul class='first'>
<li><strong>Your estimated annual travel distance (car, train, bus and air)</strong></li>
<li><strong>Your last 4 energy utility bills (gas, electricity and oil) </strong><br/>
<em>Seasonal variations mean that multipling your last bill by 4 will not give an accurate picture of usage.</em></li>
</ul>

<p><em>(Source: <a href='http://www.amazon.co.uk/exec/obidos/tg/sim-explorer/explore-items/-/0141016922/0/ref=pd_simmore_dp_1/026-0216365-1349266'>How We Can Save the Planet</a>, Mayer Hillman)</em></p>
</p>
HTML;


include_once('inc/distance.php');

$pre_footer =<<<HTML
<form action='${_SERVER[PHP_SELF]}#results' method='post'>
<table id='carbon_table' valign='top' width='100%'>

<col class="type" />
<col class="coefficient" />
<col class="individual" />
<col class="your_emmissions" />
<col class="your_usage" />

<tr><th>&nbsp;</th>
<th colspan='3' class='unit'>
  Annual carbon dioxide emissions (<acronym title='Kilograms of Carbon Dioxide'>kgCO<sub>2</sub></acronym>)
</th><th>&nbsp;</th></tr>
<tr class='row_header'>
  <td>&nbsp;</td>
  <td>Kilograms <br />co-efficient</td>
  <td>Your<br/>usage</td>
  <td>Your<br/>emissions</td>
  <td>Average <br />individual</td>
</tr>

<tr class='topic'><th colspan='5'>In the household <em>(for each kilowatt hour)</em><hr /></th></tr>
<tr><th>Electricity <a href='#notes'>*</a></th>
  <td>x 0.45 <input type="hidden" name="electricity_coeff" value='0.45' /></td>
  <td><input type="text" name="electricity_usage" value="$_POST[electricity_usage]" /> kw/h</td>
  <td>$electricity_emissions</td>
  <td class='multirow1'><span>870</span></td>
</tr>
<tr><th>Gas</th>
  <td>x 0.19 <input type="hidden" name="gas_coeff" value='0.19' /></td>
  <td><input type="text" name="gas_usage" value="$_POST[gas_usage]" /> kw/h</td>
  <td>$gas_emissions</td>
  <td class='multirow1'><span>1,480</span></td>
</tr>
<tr><th>Heating Oil (per litre)</th>
  <td>x 2.975 <input type="hidden" name="heating_oil_coeff" value='2.975' /></td>
  <td><input type="text" name="heating_oil_usage" value="$_POST[heating_oil_usage]"/> litres</td>
  <td>$heating_oil_emissions</td>
  <td class='multirow1'><span></span></td>
</tr>
<tr class='topic'><td colspan='5' class='spacer'><hr /></td></tr>

<tr class='topic'><th colspan='5'>In Travel <em>(for each kilometre)</em><hr /></th></tr>

<tr><th>Petrol Car (as driver)</th>
  <td>x 0.20 <input type="hidden" name="petrol_car_coeff" value='2.975' /></td>
  <td><input type="text" name="petrol_car_usage" value="$_POST[petrol_car_usage]" /> km</td>
  <td>$petrol_car_emissions</td>
  <td rowspan='2' class='multirow2'><strong>{</strong><span> 1,050 </span></td>
</tr>
<tr><th>Diesel Car (as driver)</th>
  <td>x 0.14 <input type="hidden" name="diesel_car_coeff" value='2.975' /></td>
  <td><input type="text" name="diesel_car_usage" value="$_POST[diesel_car_usage]" /> km</td>
  <td>$diesel_car_emissions</td>
</tr>

<tr class='topic'><td colspan='5' class='spacer'><hr /></td></tr>

<tr><th>Rail (Intercity)</th>
  <td>x 0.11 <input type="hidden" name="rail_intercity_coeff" value='0.11' /></td>
  <td><input type="text" name="rail_intercity_usage" value="$_POST[rail_intercity_usage]" /> km</td>
  <td>$rail_intercity_emissions</td>
  <td rowspan='3' class='multirow3'><strong>{</strong><span> 90 </span></td>
</tr>
<tr><th>Rail (Other Services)</th>
  <td>x 0.16 <input type="hidden" name="rail_other_services_coeff" value='0.16' /></td>
  <td><input type="text" name="rail_other_services_usage" value="$_POST[rail_other_services_usage]" /> km</td>
  <td>$rail_other_services_emissions</td>
</tr>
<tr><th>Rail (Underground)</th>
  <td>x 0.07 <input type="hidden" name="rail_underground_coeff" value='0.07' /></td>
  <td><input type="text" name="rail_underground_usage" value="$_POST[rail_underground_usage]" /> km</td>
  <td>$rail_underground_emissions</td>
</tr>

<tr class='topic'><td colspan='5' class='spacer'><hr /></td></tr>

<tr><th>Bus (London)</th>
  <td>x 0.09 <input type="hidden" name="bus_london_coeff" value='0.09' /></td>
  <td><input type="text" name="bus_london_usage" value="$_POST[bus_london_usage]" /> km</td>
  <td>$bus_london_emissions</td>
  <td rowspan='3' class='multirow3'><strong>{</strong> <span> 100 </span></td>
</tr>
<tr><th>Bus (Outside London)</th>
  <td>x 0.17 <input type="hidden" name="bus_outside_london_coeff" value='0.17' /></td>
  <td><input type="text" name="bus_outside_london_usage" value="$_POST[bus_outside_london_usage]" /> km</td>
  <td>$bus_outside_london_emissions</td>
</tr>
<tr><th>Express Coach</th>
  <td>x 0.08 <input type="hidden" name="express_coach_coeff" value='0.16' /></td>
  <td><input type="text" name="express_coach_london_usage" value="$_POST[express_coach_london_usage]" /> km</td>
  <td>$express_coach_emissions</td>
</tr>

<tr class='topic'><td colspan='5' class='spacer'><hr /></td></tr>

<tr><th>Bicycle</th>
  <td>x 0 <input type="hidden" name="bicycle_coeff" value='0' /></td>
  <td><input type="text" name="bicycle_usage" value="$_POST[bicycle_usage]" /> km</td>
  <td>$bicycle_emissions</td>
  <td rowspan='2' class='multirow2'><strong>{</strong> <span> 0 </span></td>
</tr>
<tr><th>Walking</th>
  <td>x 0 <input type="hidden" name="walking_coeff" value='0' /></td>
  <td><input type="text" name="walking_usage" value="$_POST[walking_usage]" /> km</td>
  <td>${walking_emissions}</td>
</tr>

<tr class='topic'><td colspan='5' class='spacer'><hr /></td></tr>

<tr class='distance-calc'>
  <td>&nbsp;</td>
  <td colspan='4' class='right'>Convert Miles to Kilometres &nbsp;&nbsp;
  <input type="text" id='distance-km'    onChange="calcmiles()" onKeyUp="calcmiles()" value=""/> km =
  <input type="text" id='distance-miles' onChange="calckm()"    onKeyUp="calckm()" value=""/> miles
  </td>
</tr>


<tr class='topic'><td colspan='5' class='spacer'><hr /></td></tr>

<tr><th>Airplane: Within Europe<a href='#notes'>**</a></th>
  <td>x.0.51 <input type="hidden" name="airplane_europe_coeff" value='0.51' /></td>
  <td><input type="text" name="airplane_europe_usage" value="$_POST[airplane_europe_usage]" /> km</td>
  <td>$airplane_europe_emissions</td>
  <td rowspan='2' class='multirow2'><strong>{</strong> <span> 1,830 </span> </td>
</tr>
<tr><th>Airplane: Outside Europe</th>
  <td>x 0.32 <input type="hidden" name="airplane_outside_europe_coeff" value='0.32' /></td>
  <td><input type="text" name="airplane_outside_europe_usage" value="$_POST[airplane_outside_europe_usage]" /> km</td>
  <td>$airplane_outside_europe_emissions</td>
</tr>
<tr class='topic'><td colspan='5' class='spacer'><hr /></td></tr>

<tr class='distance-calc'><td colspan='3' align='right'>
  <table><tr>
    <td>Distance From:</td>
      <td><select id="city1" name="city1" onChange="caldist()"> $city_list </select></td>
    </tr><tr>
    <td>Distance To:</td>
      <td><select id="city2" name="city2" onChange="caldist()"> $city_list </select>
  </tr></table>
</div>
</td>
<td colspan='2' class='right'>
  one-way <input type="text" id='distance-oneway' value=""/> km <br/>
  return  <input type="text" id='distance-return' value=""/> km <br/>
</td>
</tr>
<tr class='topic'><td colspan='5' class='spacer'><hr /></td></tr>


<tr class='topic'><th colspan='5'>Totals<hr /></th></tr>

<tr class='totals'><th>Kilograms CO2 </th>
  <td>&nbsp;</td>
  <td rowspan='2'><div><input type='submit' class='center' value='Calculate'/></div></td>
  <td>$total_emissions_kg</td>
  <td>5,420</td>
</tr>
<tr class='totals'><th>Tonnes CO2 </th>
  <td>&nbsp;</td>
  <td>$total_emissions_tonnes</td>
  <td>5.4<a href='#notes'>***</a></td>
</tr>
</table>
</form>

HTML;

$pre_footer .=<<<HTML
<div class='carbon-footprint-notes'>
<a name='results'></a>
$results_text

<hr />

<a name='notes'></a>

<p>* The calculation of the carbon dioxide emission co-efficient is based on the current fuel mix for electricity generation.</p>

<p>** Although varying by region and by altitude, these carbon dioxide emissions have been multiplied by an average factor of three to take account of the warming effect equivalent of other greenhouse gases in the upper atmosphere.</p>

<p>*** Multiply by 2 to take account of the per-capita share of emissions from industrial, commercial, agricultural and public sectors, which create our goods and services</p>
</div>

<!--</div>//-->
HTML;

// $menus[] = 'Climate Facts';
//

include_once('templates/actionearth.php');

?>
