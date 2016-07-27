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

$parent_page = 'actions-pledge.php';

$logo = 'esso-tiger.jpg';
$logo_alt = 'Demonstrating Against the System';
$stylesheet[] = 'green.css';

$title = "Support Key Campaigns";

$content = <<<HTML
<!--
<h3 class='first'>Historic demonstrations have included:</h3>
<ul>
<li>CND marches which raised mass awareness of the implications of nuclear war.</li>

<li>American Civil Rights marches which resulted in the end of segregation in 1960's America.</li>

<li>The Suffragette movement finally resulted in the women's vote.</li>

<li>The anti-apartheid movement finally ending segregation in South Africa.</li>

<li>Stop the War marches of 2003 which, although weren't successful in stopping Britain joining the US in invading Iraq, did raise massive awareness of the issue; one which has dogged the Labour Government ever since.</li>
</ul>
//-->

<!--<h3 class='first'>Supporting Campaigns against Government Policies</h3>//-->

<p class='first'>Supporting campaigns against government policies which turn a blind eye or even support Global Warming is the most important action of our time. In 10 years scientists predict that with increasing emission levels we will reach the tipping point, triggering a runaway greenhouse effect over which we will have no control.</p>

<!--<a name='demonstration'></a>
<div class='event'>
<h3>The Next Climate Demonstration</h3><br />
<ul>
<li><strong>Date:</strong> Saturday 12 February 2005 from 11.30am</li>
<li><strong>Location:</strong> Meet at <a href="http://www.streetmap.co.uk/newmap.srf?x=530709&amp;y=181361&amp;z=1&amp;sv=Lincoln's+Inn+Field&amp;st=6&amp;tl=Lincoln'S+Inn+Fields,+London,+WC2a&amp;searchp=newsearch.srf&amp;mapp=newmap.srf">Lincoln's Inn Field</a>.<br /></li>
<li><strong>Nearest Tube:</strong> Holborn<br /></li>
<li><strong>Organised by:</strong> <a href='http://www.campaignagainstclimatechange.net' >Campaign against Climate Change</a></li>
</ul>
<span>Protest is against the US and Australia's boycott of the Kyoto agreement which becomes law for 35 countries on February 16th.</span>
</div>//-->

<a name='vigil'></a>
<div class='event'>
<h3>Weekly "Climate Vigil" At The US Embassy</h3><br />
<ul>
<li><strong>Date:</strong> Every Monday from 5.00 to 7.00pm</li>
<li><strong>Location:</strong> US Embassy,
<a title='Streetmap' href='http://www.streetmap.co.uk/newmap.srf?x=528259&amp;y=180778&amp;z=1&amp;sv=528250,180750&amp;st=4&amp;ar=Y&amp;mapp=newmap.srf&amp;searchp=newsearch.srf'>
Grosvenor Square</a></li>
<li><strong>Nearest Tube:</strong> Marble Arch</li>
<li><strong>Organised by:</strong> <a href='http://www.campaignagainstclimatechange.net'>Campaign against Climate Change</a></li>
</ul>
</div>



<a name='campaigns'></a>
<div class='event'>
<h3>Other Campaigns</h3><br />
<dl>

<dt>Sustainable Farms Replacing Tropical Forest Slash &amp; Burn in Costa Rica.</dt>
<dd>Tropical ecologist Mike Hands has pioneered "Inga Alley-Cropping" as a way of sustainably farming deforested areas. Over 4000 farmers are awaiting seed support before they can abandon their slash and burn practices. When they do thousands of hectares of tropical forest will be saved every year. To find out more visit <a href='http://www.theecologist.org'>The Ecologist</a> or to make a donation email <a href='mailto:{${$email = email_encode('mikehands@uk2.net')}}$email'>Mike Hands</a></dd>

<dt>Enforcing the Law on Climate Change</dt>
<dd>Peter Roderick, Director of Climate Justice Programme (hosted by Friends of the Earth International) is a lawyer working closely with scientists, campaigners and legal experts to enforce laws to combat climate change. To get involved in campaigns visit <a href='http://www.climatelaw.org'>Climate Justice</a> or email <a href='mailto:{${$email = email_encode('pererroderick@cjp.demon.co.uk')}}$email'>Peter Roderick</a></dd>
</dl>
</div>


<a name='events'></a>
<div class='event'>
<h3>Other Events</h3><br />
<dl>
<dt>Walk To School Week is 23 to 27 May</dt>
<dd>Visit: <a href='http://www.walktoschool.org.uk/'>I Walk To School</a></dd>

<dt>World Environment Day is 5 June</dt>
<dd>Visit: <a href='http://www.unep.org/wed/2005/english/About_WED_2005/'>United Nations Environment Programme</a></dd>

<dt>Bike Week is 11 to 19 June</dt>
<dd>Visit: <a href='http://www.bikeweek.org.uk'>Bike Week</a></dd>

<dt>Green Transport Week is 11 to 19 June</dt>
<dd>Visit: <a href='http://www.eta.co.uk/news/newsview.asp?n=193'>Environmental Transport Association</a></dd>

<dt>European Car-Free Day is 22 September</dt>
<dd>Visit: <a href='http://www.22september.org/'>European Mobility Week</a></dd>

<dt>Walk To School Week is 3 to 7 October</dt>
<dd>Visit: <a href='http://www.walktoschool.org.uk/'>I Walk To School</a></dd>
</dl>
</div>



<a name='gatherings'></a>
<div class='event'>
<h3>Other Gatherings</h3><br />
<p><em>Enjoy a summer break with likeminded others</em></p>
<dl>
<dt><a href='http://www.big-green-gathering.com'>The Big Green Gathering</a></dt>
<dd>The Big Green Gathering is an annual event. This year from 3rd to 7th August</dd>

<dt><a href='http://www.greenandaway.org/page.cfm?pageid=ga-bookingforms' >The Resurgence Summer Camp</a></dt>
<dd>The Resurgence Summer Camp is an annual event. This year from 28th to 31st July at Green and Away (Europe's only tented conference centre) in Gloucestershire.</dd>
</dl>
</div>

HTML;

$sidebox_title[] = "";
$sidebox[] = "
<h3>What If I Support Demonstrations &amp; Campaigns?</h3><hr />
<p>...You will be adding your presence and energy whist linking up with likeminded people and organisations. </p>
";

/*
$sidebox_title[] = "Events";
$sidebox[] =<<<HTML
<h3>Main Events</h3><hr />
<ul>
<!--<li><a href='#demonstration'>The Next Climate Demonstration</a></li>//-->
<li><a href='#vigil'>Weekly "Climate Vigil" At The US Embassy</a></li>
</ul>
<h3>Other Campaigns</h3><hr />
<ul>
<li><a href='#campaigns'>Waste Monsters</a></li>
<li><a href='#campaigns'>Sustainable Farms Replacing Tropical Forest Slash &amp; Burn in Costa Rica</a></li>
<li><a href='#campaigns'>Enforcing the Law on Climate Change</a></li>
</ul>
<h3>Other Events</h3><hr />
<ul>
<li><a href='#events'>Walk To School Week</a></li>
<li><a href='#events'>World Environment Day</a></li>
<li><a href='#events'>Bike Week</a></li>
<li><a href='#events'>Green Transport Week</a></li>
<li><a href='#events'>European Car-Free Day</a></li>
<li><a href='#events'>Walk To School Week</a></li>
</ul>
<h3>Other Gatherings</h3><hr />
<ul>
<li><a href='#gatherings'>The Big Green Gathering</a></li>
<li><a href='#gatherings'>The Resurgence Summer Camp</a></li>
</ul>
HTML;
*/

$link_showbox = 'demos-campaigns';


include_once('templates/actionearth.php');

?>
