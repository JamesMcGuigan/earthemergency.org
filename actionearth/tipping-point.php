<?php
  // $doctitle
  // $title
  // $content
  // $sidebox_title[]
  // $sidebox[]


$title = "The Tipping Point";

$logo = 'facing-the-facts.jpg';
$logo_alt = 'Facing The Facts';
$stylesheet[] = 'green.css';
$parent_page = 'climate-facts.php';



$content =<<<HTML
<p class='first'>
Up until the end of 2004 it was still considered in scientific circles that we had until the year 2030 to significantly reduce emissions and stabilise Carbon Dioxide (CO2) in the atmosphere. Beyond this date failure to control greenhouse gas emissions would trigger in a runaway increase in emissions resulting from breakdown in the earth's natural systems. Reductions in CO2 emissions beyond this Tipping Point would be meaningless.  In January 2005 scientists made the general public aware of the much more advanced state of greenhouse gas emissions masked by the related phenomenon of Global Dimming. This has brought the date by which scientists now estimate emissions need to be brought under control to just 10 years. This is the most alarming news the world could face. Mayer Hillman - author of 30 books including the 2004 publication <em>How We Can Save the Planet</em>, described GW as a much greater threat to mankind today than the Holocaust was in 1939.
</p><p>
Societal infrastructure - industry, cars, public transport, housing etc will take up to a generation (25 years) to change to more sustainable, low energy technology. We do not have 25 years, we have just 10 years. Mankind will have to make the transition to a low carbon economy largely with the existing infrastructure. The world over, humanity will have to drastically cut emissions with only incremental help from modern technology as it becomes available. This will require a radical change in our lifestyle and habits of energy consumption.
</p><p>
Even if politicians, corporations and citizens the world over respond to the climatic evidence, the existing greenhouse gases in the atmosphere will still bring another 0.6C rise in temperature. This coupled with the time it will take to create low carbon emission societies brings us dangerously close to the 2C maximum temperature rise considered to be the Tipping Point.
</p>
HTML;

$sidebox_title[] = "";
$sidebox[] = "
<h3>Point of no return</h3><hr />
<p>A 2C rise in temperature is considered to be the tipping point beyond which a runaway greenhouse effect would ensue. Humankind would have no control beyond this point.</p>
";

$menus[] = 'Climate Facts';


include_once('templates/actionearth.php');

?>
