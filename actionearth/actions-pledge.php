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

$javascript[] = 'popup.js';

$logo = 'eagle.jpg';
$logo_alt = 'Eagle';
$stylesheet[] = 'white.css';

$title = "Take The Actions Pledge";

$content =<<<HTML

<div class='quote'>"The point of no return may be reached in 10 years leading to droughts, agricultural failure and water shortages"
<div class='author'> The Independent, cover story 24 January 05</div></div>

<h4>The Key Question is...</h4>
<p class='indent'><em>"How can I modify my lifestyle to bring my CO2 emissions to a climate-sustainable level?"</em></p>


<!--
<h4>Two Questions To Ask Ourselves:</h4>

<ul class='questionlist'>
<li><strong>Q</strong> "Are my current lifestyle choices and day-to-day activities helping to advance or reduce the problem of Global Warming?"</li>
<li><strong>Q</strong> "How can I modify my lifestyle to bring my CO2 emissions to a climate-sustainable level?"</li>
<li><strong>Q</strong> "How can I help to spread the message that urgent action is needed?</li>
</ul>
//-->


<h3>Actions Pledge</h3>

<!--<p class='actionpledgesummary'>I recognise the urgency of climate change and agree to take a lead role by cutting my own greenhouse emissions. I commit to the following personal actions (tick boxes as appropriate)</p>//-->



<form action='#'>
<ol class='action-pledge'>

<li><input type='checkbox' name='assess_carbon_footprint' /> Calculate my <a href='carbon-footprint.php'>Carbon Footprint</a> </li>

<li><input type='checkbox' name='reduce_car_usage' /> Reduce my <a href='reduce-car-travel.php'>Car Travel</a> and/or consider lower-impact car options </li>

<li><input type='checkbox' name='reduce_air_travel' />Reduce my <a href='reduce-air-travel.php'>Air Travel</a></em></li>

<li><input type='checkbox' name='save_energy' /> Reduce my electricity and <a href='save-energy.php'>Domestic Energy Consumption</a> </li>

<li><input type='checkbox' name='buy_local_food' /> Buy a high proportion of locally produced food to reduce <a href='javascript:popup("food-miles.php")'>Food Miles</a></li>

<li><input type='checkbox' name='use_ethical_business_services' />
Use <a href='javascript:popup("ethical-business.php")'>Ethical Business Services</a></li>

<li><input type='checkbox' name='sponsor_rainforest' /> Sponsor the <a href='sponsor-rainforests.php'>acquisition of threatened rainforest</a> for £25/acre with Rainforest Concern </li>

<li><input type='checkbox' name='teach_a_child' /> <a href='inspire-kids-action.php'>Teach a child</a> (or if you're a child teach an adult!) about how fuel consumption increases Global Warming. Respond to their ideas where possible </li>

<li><input type='checkbox' name='talk_to_friends' /> <a href='inspire-action.php'>Speak to family, friends, colleagues and the community</a> about the threat of Global Warming and the need for individual and collective action. </li>

<li><input type='checkbox' name='start_green_group' /> Start a <a href='business-action.php'>Green Group</a> at my place of work / college / school to promote awareness and action </li>

<li><input type='checkbox' name='sign_petitions' /> Sign the <a href='sign-petitions.php'>Key Petitions</a> on line </li>

<li><input type='checkbox' name='write_to_my_mp' /> Write to my <a href='http://www.writetothem.com/'>Local Councillors and MP</a> about the need for urgent action on climate change.</li>

<li><input type='checkbox' name='renewable_electricity_supplier' /> Change my electricity supplier to one that provides <a href='javascript:popup("renewable-electricity-supplier.php")'>Renewable Energy</a></li>

<li><input type='checkbox' name='support_key_campaigns' />
Support other <a href='demos-campaigns.php'>Key Campaigns</a> to protect the environment</li>

<!--
<li><input type='checkbox' name='visit_website' checked='checked' /> Visit <a href='http://www.actionearth.org'>www.actionearth.org</a> and inform myself of the facts and actions needed to control Global Warming, whilst linking up to a host of organisations who are making change happen. </li>//-->

</ol>

<p class='quote indent'>Your actions make a significant difference measurable in tonnes of CO2 emissions per year.</p>

</form>

HTML;

// $sidebox_title[] = "";
// $sidebox[] =<<<HTML
// <h3>Losing Biodiversity</h3><hr />
// <p>The Earth is currently losing biodiversity at a rate of 100 species per day, mostly in tropical forests because of the Developed World's rapacious appetite for timber, soya, palm oil and beef.</p>
// HTML;

$menus[] = 'Climate Facts';


include_once('templates/actionearth.php');

?>
