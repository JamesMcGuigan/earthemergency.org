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

$logo = 'lightbulbs.jpg';
$logo_alt = 'Low Energy Lightbulbs';
$stylesheet[] = 'white.css';
$parent_page = 'actions-pledge.php';

$title = "Save Energy";

// for changes to Change To Green (Renewable) Electricity
// also update renewable-electricity-supplier.php

$content =<<<HTML
<h3 class='first'>Change To Green (Renewable) Electricity</h3>

<p>Changing your provider to a company producing clean (effectively emission-free) energy from renewable energy sources such as wind/wave/solar reduces your carbon footprint as well as providing much needed support for the renewables industry.</p>

<p>Friends of the Earth offer an <a href='http://www.foe.co.uk/campaigns/transport/press_for_change/'>assessment of green-energy suppliers.</a> The highest ratings go to:</p>
<ul>
<li><a href='http://www.good-energy.co.uk'>Good Energy</a></li>
<li><a href='http://www.greenenergy.uk.com'>Green Energy</a></li>
<li><a href='http://www.ecotricity.co.uk'>Ecotricity</a> (<em>"Old Energy"</em> Tariff only)</li>
</ul>

<h3>Install Low-Energy Light Bulbs</h3>

<p>Low energy fluorescent light bulbs consume 1/5 of the energy of conventional bulbs and last over 10 times as long.  </p>


<h3>Reduce Thermostat Settings</h3>

<p>Every 1 degree rise in temperature uses almost 10% extra fuel. We recommend wearing a jumper and turning the thermostat down 2C or 3C.
Turn down the hot water temperature to 49C.</p>


<h3>Boil Only The Water You Intend To Use!</h3>

<p>It's unusual for people to boil just what they need. Mostly people boil 2 ? 4 times their requirement and remain completely unaware that they have done so.  If in doubt measure out your water needs before you boil. Just this practice alone would save the UK £1 million per week.</p>


<h3>Switch Off Lights, Chargers, TV'S, Music Systems etc When Not In Use.</h3>

<p>We all know that leaving lights turned on when not in use is wasteful. If you need to leave a light on for security reasons then use a timing device.</p>

<p>TV's, computers, music systems etc all consume energy when left on standby. Even leaving electrical items connected to the mains after they are fully charged (e.g. overnight) needlessly consumes energy. Mobile phone are one of the worst offenders; 95% of the energy used to charge mobile phones is completely wasted by not unplugging</p>

<h3>Insulate Your Home</h3>
<ul>
<li>Does your loft have at least 10cm insulation?</li>
<li>Are your cavity walls insulated?</li>
<li>Could draft-excluders reduce cooling around windows and entrance doors?</li>
<li>Have you thought about surface-insulating solid (non-cavity) outer walls?</li>
<li>Could your floors be better insulated?</li>
</ul>

<p>You could <a href='http://www.foe.co.uk/climate_challenge/'>apply for a grant</a> to improve your energy efficiency at home</p>


<h3>Buy Locally Produced Food & Goods</h3>
<p>See <a href='food-miles.php'>Food Miles</a></p>


<h3>Save Energy At Work/College/School</h3>
<p>See <a href='business-action.php'>Green Your Workplace</a></p>


<h3>Consider Installing Solar Paneling</h3>
Solar panelling can generate more than 3/4 of the electricity needs of your home and grants are available for 50% of your installation costs. If your roof needs replacing this becomes an even more viable option to consider. For grant information visit <a href='http://www.clear-skies.org'>Clear Skies</a>


<h3>Recycle Waste</h3>

<p>We can thank the EU for its directives regarding the recycling of biodegradable waste, namely paper and organics. This plays an important role in reducing methane production at landfill sites. </p>

<p>We need however to go much further and recycle all plastics and metal waste. </p>

<h3>Aaaaaagh... And Say No To a Patio Heater!!</h3>
<p>The <a href='http://www.foe.co.uk/resource/media_briefing/xposeawards.pdf'> Xpose Awards 2004 </a>at the Labour Party Conference nominated patio heaters as the most ingeniously injurious yet commonplace product!</p>




HTML;

$sidebox_title[] = "";
$sidebox[] =<<<HTML
HTML;

$menus[] = 'Climate Facts';


include_once('templates/actionearth.php');

?>
