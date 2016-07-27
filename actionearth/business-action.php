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

$logo = 'office.jpg';
$logo_alt = 'Business Office';
$stylesheet[] = 'green.css';
$parent_page = 'actions-pledge.php';


$title = "Business Action";

$content =<<<HTML

<h3 class='first'>Greening Your Workplace</h3>

<p>Some of the most wasteful energy consumptive practices happen in corporate environments.
Every time we say or do nothing when we see wasteful practices, we become part of the problem. Our silence is consent.</p>


<h3>Starting A Green Group </h3>

<p>One effective way to formalise and add momentum to your actions is start a Green Group. Just start with yourself and a name, you may be surprised at the amount of interest you get!</p>

<p>Networking with others in organisations already active with similar issues can be helpful. Considering ideas, approaches and policies already working elsewhere speed  progress immensely.  </p>


<h3>Individual Actions In A Corporate Environment</h3>

<p>Many of the same actions and choices advocated for our personal lives apply equally to our work environments.</p>

<ul>
<li>Challenge the necessity for air travel</li>
<li>Publish lists of fuel efficiencies and emissions for vehicles on the options list and in the car pool.</li>
<li>Get Hybrid options in the car pool and on the company car options list</li>
<li>Integrate transport options to include rail, coach, buses and taxis</li>
<li>Turning off lights, computers, monitors, fax machines, copiers, printers, etc when not in use and especially overnight. Use energy-saver mode between short periods of inactivity</li>
<li>Switching the photocopier on 1 hour later in the day</li>
<li>Reduce thermostat levels</li>
<li>Switch off air conditioning / reduce thermostat levels</li>
<li>Pre-measure water to be boiled for coffee/tea making</li>
<li>Print only essential information and at the time of use</li>
<li>Set up recycling facilities</li>
<li>Use recycled paper within the company as a whole</li>
</ul>

<h3>Corporate Environmental Policy</h3>

<p>Does your organisation have an Environmental Policy? If not this is an excellent way of formalising some of the environmental activities you are getting underway. A simplified <a href='specimen-enviromental-policy.php'>specimen Environmental Policy</a> is available to consider.</p>


<h3>Environmental Management Systems</h3>

<p>Writing an environmental policy is a valuable first step. The challenge comes in getting people to adhere to it! With formal agreement at management level and green groups promoting its implementation on the ground you have a solid start.</p>

<p>Increasingly, larger organisations are being required to substantiate their environmental standing. This requires a whole new level of activity. Environmental Management Systems (<acronym title='Environmental Management Systems'>EMS</acronym>) is the accepted mechanism to ensure that standards set can be achieved and tested with periodic auditing to ensure they are met.</p>


<h3>ISO 14000 & 14001</h3>

<p>1SO 14000 is the series of standards on environmental management which provides the framework for both the environmental management system and the audit programme.</p>

<p>ISO 14001 is the main pillar of the 14000 series and specifies the actual requirement for an environmental management system which the organisation has control over and over which it is expected to influence.</p>

<p>This standard has particular value if your organisation intends to:</p>
<ul class='first'>
<li>Implement, maintain and improve an <acronym title='Environmental Management Systems'>EMS</acronym></li>
<li>Ensure conformance with stated environmental policy</li>
<li>Ensure compliance with environmental laws and regulations</li>
</ul>

<h3>Corporate Social Responsibility</h3>

<p>The Government's vision for <a href='http://www.csr.gov.uk'>Corporate Social Responsibility (CSR)</a> is <em>"for UK businesses to consider the economic, social and environmental impacts of their activities wherever they operate in the world"</em>.</p>

<p>The significant response of businesses to the Asian Tsunami in December 04 / January 05 has made <acronym title='Corporate Social Responsibility'>CSR</acronym> more meaningful.</p>

HTML;

// $sidebox_title[] = "";
// $sidebox[] =<<<HTML
// <h3>Losing Biodiversity</h3><hr />
// <p>The Earth is currently losing biodiversity at a rate of 100 species per day, mostly in tropical forests because of the Developed World's rapacious appetite for timber, soya, palm oil and beef.</p>
// HTML;

$menus[] = 'Climate Facts';


include_once('templates/actionearth.php');

?>
