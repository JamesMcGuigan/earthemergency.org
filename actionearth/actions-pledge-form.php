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

$logo = 'eagle.jpg';
$logo_alt = 'Eagle';
$stylesheet[] = 'white.css';

$title = "Actions Pledge Form";

$content =<<<HTML

<h2 class='first'>Climate Change Actions Pledge</h2>

<p class='summary'>I recognise the urgency of climate change and agree to take a lead role by cutting my own greenhouse emissions. I commit to the following personal actions (tick boxes as appropriate)</p>

<form action='#'>
<ol class='action-pledge'>
<li><input type='checkbox' name='reduce_air_travel' /> STOP or drastically reduce my air travel <br />
<em>( A return flight from the UK to Los Angeles contributes per person the greenhouse equivalent of driving a family car 12,000 miles )</em></li>
<li><input type='checkbox' name='reduce_car_usage' /> Reorganise my life so I can either live without owning a car or significantly cut my car mileage </li>
<li><input type='checkbox' name='write_to_my_mp' /> Write to my local Councillors, MP and the PM about my climate change concerns before the end of March.  <em>(Elections are on 5th May)</em> </li>
<li><input type='checkbox' name='sign_petitions' /> Sign the <a href='sign-petitions.php'>Key Climate Petitions</a> on line </li>
<li><input type='checkbox' name='support_demonstrations' /> Support climate change <a href='demos-campaigns.php'>demonstrations and campaigns</a></li>
<li><input type='checkbox' name='replace_lightbulbs' /> Replace domestic lighting with low-energy bulbs and turn the thermostat down 1 or 2 degrees </li>
<li><input type='checkbox' name='buy_local_food' /> Commit to purchasing 80% locally grown food <br /><em>(To reduce food miles)</em> </li>
<li><input type='checkbox' name='sponsor_rainforest' /> Sponsor the purchase of threatened rainforest for �25/acre with <a href='http://www.rainforestconcern.org'>Rainforest Concern</a> </li>
<li><input type='checkbox' name='teach_a_child' /> Teach a child (if you're a child, teach an adult!) about the threat of Global Warming and respond where possible to his/her ideas </li>
<li><input type='checkbox' name='talk_to_friends' /> Talk to three friends who are not so aware of the threat of  climate change and encourage them to take action </li>
<li><input type='checkbox' name='create_green_group' /> Create a "<a href='business-action.php'>Green Group</a>" at my workplace/college/school to promote awareness and action </li>
<li><input type='checkbox' name='assess_carbon_footprint' /> Assess my <a href='carbon-footprint.php'>Carbon Footprint</a> </li>
<li><input type='checkbox' name='visit_website' checked='checked' /> Visit <a href='http://www.actionearth.org'>www.actionearth.org</a> and inform myself of the facts and actions needed to control Global Warming, whilst linking up to a host of organisations who are making change happen. </li>
</ol>

</form>

HTML;

// $sidebox_title[] = "";
// $sidebox[] =<<<HTML
// <h3>Losing Biodiversity</h3><hr />
// <p>The Earth is currently losing biodiversity at a rate of 100 species per day, mostly in tropical forests because of the Developed World's rapacious appetite for timber, soya, palm oil and beef.</p>
// HTML;

$link_showbox = 'climate-facts';
include_once('templates/linkbox.php');

include_once('templates/actionearth.php');

?>
