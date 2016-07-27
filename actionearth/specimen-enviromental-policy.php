<?php
  // $doctitle
  // $title
  // $content
  // $sidebox_title[]
  // $sidebox[]

include_once('inc/html-functions.php');

$title = "Specimen Environmental Policy";

$content =<<<HTML

<h2 class='first'>Specimen Environmental Policy</h2>

<p class='summary'>Our primary objective is to harmonise the business activities of our organisation with sound environmental practice in keeping with all applicable environmental regulations</p>

<strong>Such harmonisation shall be achieved by:</strong>
<ul>
<li>Integrating environmental considerations and where possible recognised best practice into all aspects of business operation</li>
<li>Ensuring that all assessments and decisions are made with consideration to the environment</li>
<li>Training and supporting our staff in behaving in an environmentally responsible manner</li>
<li>Recognising the need to conduct internal environmental reviews on a periodic basis</li>
<li>Encouraging open dialogue relating to environmental management and sustainable development with our clients whenever appropriate</li>
<li>Requesting suppliers and contractors to focus on and where possible evidence their own efforts to improve environmental performance</li>
</ul>

<h2>Specific Actions</h2>

<h3>Photocopying and Course Manuals:</h3>
<ul>
<li>Return of unused photocopies and manuals to the Bristol office where they will be reused or recycled</li>
<li>To reduce the volume of lesser used handouts prepared and not used, 1 copy only will go with handout pack, to be copied as and when necessary by the tutor rather than as a matter of course</li>
<li>Office to create as many two-sided copies of materials as possible (tutors to advise when not appropriate)</li>
</ul>

<h3>Recycling and Waste:</h3>
<ul>
<li>Recycling bins accessibly placed in all rooms where there is a workspace or where waste paper may be produced.  Bins if possible to be supplied by a local company who also collects and reuses the waste</li>
<li>Shredding of waste which is energy consumptive to be limited to confidential documents only</li>
<li>Office to make a first choice purchase of recycled materials</li>
</ul>


<h3>Energy Consumption:</h3>
<ul>
<li>Lights and heaters to be turned off in unoccupied rooms</li>
<li>Computers to be powered down if they are to be left unused for a period exceeding one hour</li>
<li>Photocopier to be switched on as late in the day as possible and as with computers to be switched off at the end of the day</li>
</ul>

<h3>Equipment And Furniture:</h3>
<ul>
<li>Equipment to be purchased from suppliers with a validated Environmental Policy and track record of environmental awareness wherever possible</li>
<li>Furniture to be procured from manufacturers who utilise sustainable sources of raw materials</li>
</ul>

<h3>Transport:</h3>
<ul>
<li>For all journeys car sharing should be considered and implemented in all possible cases</li>
<li>Encouragement is given for the use of public transport where possible, in particular for day trips</li>
<li>Overnight accommodation should be arranged where long commutes would be the alternative</li>
<li>Appropriate sequencing of clients should be considered to promote reduced business mileage</li>
</ul>

<h3>Awareness:</h3>
<ul>
<li>Priority to be given to environmental awareness meetings and training for all staff</li>
<li>There should be a general raising of awareness with clients and delegates on courses where appropriate</li>
</ul>

<p class='summary'>We seek to constantly improve our environmental management and be alert to potential problems, taking action and up-dating our stated policy whenever necessary in keeping with the ethos of our organisation</p>

<table class='signature'><tr>
  <td>Name</td>
  <td class='blank'>&nbsp;</td>
  <td>Signature</td>
  <td class='blank'>&nbsp;</td>
  <td>Date</td>
</tr></table>

<div class='line-up-right'>
<p><strong>Issue Date:</strong></p>
<p><strong>Last Reviewed:</strong></p>
<p><strong>Next Review Date:</strong></p>
</div>
HTML;

// $sidebox_title[] = "";
// $sidebox[] =<<<HTML
// <h3>Losing Biodiversity</h3><hr />
// <p>The Earth is currently losing biodiversity at a rate of 100 species per day, mostly in tropical forests because of the Developed World's rapacious appetite for timber, soya, palm oil and beef.</p>
// HTML;

$menus[] = 'Climate Facts';


include_once('templates/actionearth.php');

?>
