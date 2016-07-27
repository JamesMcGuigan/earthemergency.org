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

$javascript[] = 'actionearth.js';

$logo = 'eagle.jpg';
$logo_alt = 'Eagle';
$stylesheet[] = 'white.css';

$title = "Take the Actions Pledge";

$content =<<<HTML

<div class='quote' id='aaa'>
"If action to reduce emissions is delayed by 20 yrs, rates of emission reduction may need to be 3 to 7 times greater to meet the same temp target". <div class='author'>Summary of International Panel on Climate Change Conference, 3 February 2005</div>
</div>

<a name='stop-air-travel'></a>
<h3>Stop Or Drastically Reduce Air Travel</h3>

<p id='stop-air-travel'>Air travel is the single greatest contributor to greenhouse emissions. One transatlantic return flight to LA causes per passenger emissions equal to that of driving an average family car 12,000 miles. That's equivalent to 6 tonnes of CO2. Where's the glamour in that luxury trip?! Click on stop air travel for web links to emissions calculator and air alternatives.</p>

<p>Aeroplane emissions occur at an atmospheric level where they contribute three times more to Global Warming than the same pollution at ground level. </p>

<p><a href='http://www.chooseclimate.org'>"Flying off to a Warmer Climate"</a> is a site which allows you to calculate your own emissions from particular flights and offers suggestions for alternative travel.</p>

Interestingly named, <a href='http://www.seat61.com'>"The Man In Seat Sixty-One"</a> website is well-researched offering information on travel arrangements by train and by ship, with links to sites where tickets can be purchased.

Sign the <a href='http://www.airportpledge.org.uk'>pledge against airport expansion</a> and also <a href='demos-campaigns.php'>support demonstrations and campaigns</a>


<h3>Reduce Or Eliminate Car Mileage</h3>

<p>Car travel is for the average family the second greatest contributor to greenhouse gas emissions after air flights. </p>

<p>Almost as much energy is consumed in building a vehicle as will be consumed in the entire life of the vehicle. So choosing not to own a car makes a double contribution to reduced emissions.</p>
</a>
<p>Click on choosing a fuel-efficient vehicle to find out about efficiency and low-emission fuels.</p>

<p>Click on other car use options and alternatives to find out about Car Pooling, Sharing, Hiring, Public Transport, Cycling & Walking.</p>

<!--
<p>Other ways of saving energy...</p>
<ul>
  <li><a href='#stop-air-travel'>Stop  Air Travel</a></li>
  <li><a href='#buy-fuel-efficient-car'>Choose A Fuel-Efficient Vehicle</a></li>
  <li><a href='#car-alternatives'>Other Car Use Options & Alternatives</a></li>
  <li><a href='#renewable_electricity'>Change To Green (Renewable) Electricity</a></li>
  <li><a href='#low-energy-lightbulbs'>Install Low-Energy Light Bulbs</a></li>
  <li><a href='#boil-only-what-you-need'>Boil Only The Water You Intend To Use!</a></li>
  <li><a href='#switch-off-lights'>Switch Off Lights, Chargers, Tv'S, Music Systems Etc When Not In Use.</a></li>
  <li><a href='#insulate-your-home'>Insulate Your Home</a></li>
  <li><a href='#buy-local-organic-food'>Buy Locally Grown Organic Foods</a></li>
  <li><a href='#save-energy-at-work'>Save Energy At Work/College/School</a></li>
  <li><a href='#install-solar-panels'>Consider Installing Solar Paneling</a></li>
  <li><a href='#recycle-waste'>Recycle Waste</a></li>
</ul>
-->

<p>The Actions Pledge is a way of helping us to stay focused on the urgent need to change our lifestyles and to keep spreading this message.</p>

<p>The Pledge consists of 13 actions which we would like you to sign up to. They are not easy to do when society and the media bombard us with exactly the opposite messages.</p>

<p>However, meaningful action is not just essential for the planet. It's also helpful for reinstating our own faith in humanity and the earth future. The alternative is that which we see all around us: societal complacency, denial and disempowerment regarding the threat of climate change. </p>


<a name='buy-fuel-efficient-car'></a>
<h3>Choose A Fuel-Efficient Vehicle</h3>


<p>Fuel Efficiency varies widely but generally small - engined cars give better miles per gallon (mpg) ratings; for petrol vehicles typically 30-45mpg.</p>


<p>The most consumptive private vehicles tend to be 4x4's and large-engined sports cars delivering just 12-18mpg for petrol vehicles. </p>

<p>Hybrid vehicles running on a combination of either petrol or LPG and self-generated electricity are now increasingly available. For example the new Toyota "Prius" (winner of eco-car of the year award 2004) is a mid-sized car which averages 65mpg with either of the above fuels.
</p>

<p>Keeping your speed down on fast roads also reduces fuel consumption. A car consumes 20% -30% less fuel at speeds of 55mph compared to 75mph.</p>

<p>Liquid Petroleum Gas (LPG) vehicles have a lower impact on air quality and climate change and enjoy cheaper car tax and exemption from the London Congestion Charge. There is also a Government grant available for conversion of petrol vehicles to LPG. </p>

For information on hybrids, LPG and grants visit <a href='http://www.transportenergy.org.uk'>Transport Energy's</a> <a href='http://www.powershift.org.uk'>Power Shift programme</a>

<p>If you run a car consider joining the <a href='http://www.eta.co.uk'>Environmental Transport Association</a> (ETA) which offers breakdown and travel insurance services and campaigns for a sustainable transport system. Tel: 0800 212 810. Friends of the Earth members also get a discount on all ETA services.</p>

<a name='car-alternatives'></a>
<h3>Other Car Use Options & Alternatives</h3>

<p><strong>Car pooling</strong>
Is one of the fastest growing alternatives to traditional vehicle ownership.  <a href='http://www.mystreetcar.co.uk'>My Streetcar</a> charge £100 for one-off membership. You can check car availability on line, collect from 15 sites around London 24hrs a day and pay just £4.95per hour.
</p>

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

<a name='renewable_electricity'></a>
<h3>Change To Green (Renewable) Electricity</h3>

<p>Changing your provider to a company producing clean (effectively emission-free) energy from renewable energy sources such as wind/wave/solar reduces your carbon footprint as well as providing much needed support for the renewables industry.</p>

<p>Friends of the Earth offer an assessment of <a href='http://www.foe.co.uk/campaigns/transport/press_for_change/'>green-energy suppliers</a> </p>


<a name='low-energy-lightbulbs'></a>
<h3>Install Low-Energy Light Bulbs</h3>

<p>Low energy fluorescent light bulbs consume 1/5 of the energy of conventional bulbs and last over 10 times as long.  </p>

<a name='lower-thermostat'></a>
<h3>Reduce Thermostat Settings</h3>

<p>Every 1 degree rise in temperature uses on average an extra 10% more fuel. We recommend wearing a jumper and turning the thermostat down 2C or 3C.</p>


<a name='boil-only-what-you-need'></a>
<h3>Boil Only The Water You Intend To Use!</h3>

<p>It's unusual for people to boil just what they need. Mostly people boil 2 - 4 times their requirement and remain completely unaware that they have done so.  If in doubt measure out your water needs before you boil. Just this practice alone would save the UK £1 million per week.</p>


<a name='switch-off-lights'></a>
<h3>Switch Off Lights, Chargers, Tv'S, Music Systems Etc When Not In Use.</h3>

<p>We all know that leaving lights turned on when not in use is wasteful. If you need to leave a light on for security reasons then use a timing device.</p>

<p>TV's, computers, music systems etc all consume energy when left on standby. Even leaving electrical items connected to the mains after they are fully charged (e.g. overnight) needlessly consumes energy. Mobile phone are one of the worst offenders; 95% of the energy used to charge mobile phones is completely wasted by not unplugging.</p>

<a name='insulate-your-home'></a>
<h3>Insulate Your Home</h3>

<ul>
<li>Does your loft have at least 10cm insulation?</li>
<li>Are your cavity walls insulated?</li>
<li>Could draft-excluders reduce cooling around windows and entrance doors?</li>
<li>Have you thought about surface-insulating solid (non-cavity) outer walls?</li>
<li>Could your floors be better insulated?</li>
</ul>

<p>You could apply for a grant to improve your <a href='http://www.foe.co.uk/climate_challenge/'>energy efficiency at home</a>
</p>



<a name='buy-local-organic-food'></a>
<h3>Buy Locally Grown Organic Foods</h3>

<p>A major source of emissions result from imported foods transported by air. The distance a food item has travelled between farmer and food store is known as its "food miles". Supermarkets are required now to make information regarding the country of origin of fresh foods available to the consumer. However a way around this is to refer shoppers to a website - not very useful when you're out shopping!</p>

<p>One way to reduce food miles is to take part in a "box scheme". Available now in many parts of the country, such schemes offers organic, locally produced fruits and vegetables delivered to your door. It's well worthwhile supporting these sustainable initiatives such as <a href='http://www.abel-cole.co.uk'>Able &amp; Cole</a> in the UK.</p>


<a name='save-energy-at-work'></a>
<h3>Save Energy At Work/College/School</h3>
<p>See <a href='business-action.php'>Green Your Workplace</a></p>


<a name='install-solar-panels'></a>
<h3>Consider Installing Solar Paneling</h3>

<p>Solar panelling can generate more than 3/4 of the electricity needs of your home and grants are available for 50% of your installation costs. If your roof needs replacing this becomes an even more viable option to consider. <a href='http://www.clear-skies.org'>Clear Skies</a> has infomation of renewable energy grants</p>


<a name='recycle-waste'></a>
<h3>Recycle Waste</h3>

<p>We can thank the EU for its directives regarding the recycling of biodegradable waste, namely paper and organics. This plays an important role in reducing methane production at landfill sites.</p>

<p>We need however to go much further and recycle all plastics and metal waste.</p>

HTML;

$sidebox_title[] = "Energy Saving Ideas";
$sidebox[] =<<<HTML
<ul class='first'>
  <li><a href='#stop-air-travel'>Stop  Air Travel</a></li>
  <li><a href='#buy-fuel-efficient-car'>Choose A Fuel-Efficient Vehicle</a></li>
  <li><a href='#car-alternatives'>Other Car Use Options & Alternatives</a></li>
  <li><a href='#renewable_electricity'>Change To Green (Renewable) Electricity</a></li>
  <li><a href='#low-energy-lightbulbs'>Install Low-Energy Light Bulbs</a></li>
  <li><a href='#boil-only-what-you-need'>Boil Only The Water You Intend To Use!</a></li>
  <li><a href='#switch-off-lights'>Switch Off Lights, Chargers, Tv'S, Music Systems Etc When Not In Use.</a></li>
  <li><a href='#insulate-your-home'>Insulate Your Home</a></li>
  <li><a href='#buy-local-organic-food'>Buy Locally Grown Organic Foods</a></li>
  <li><a href='#save-energy-at-work'>Save Energy At Work/College/School</a></li>
  <li><a href='#install-solar-panels'>Consider Installing Solar Paneling</a></li>
  <li><a href='#recycle-waste'>Recycle Waste</a></li>
</ul>
<h3>Sign Up</h3><hr />
<ul>
  <li><a href='actions-pledge-form.php'>Take the Action Pledge</a></li>
</ul>

HTML;

// $menus[] = 'Climate Facts';
// 

include_once('templates/actionearth.php');

?>
