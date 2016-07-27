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

$logo = 'cheetahs.jpg';
$logo_alt = 'Big Cats';
$stylesheet[] = 'green.css';
$javascript[] = 'popup.js';

$title = "Home Page";

$content = <<<HTML

<h3 class='first'>Action Earth is a call to people everywhere to...</h3>

<ul>
<li>Get Informed</li>
<li>Taking Action</li>
<li>Inspire Others</li>
</ul>


<h3>Our Mission</h3>

<p>To create a movement of raised awareness and inspired individual action to help combat the threat of irreversible climate change.</p>

<h3>Our Vision</h3>

<p>That such a movement will bring forward the date when governments and corporations meaningfully legislate for climate protection.</p>


<p>James Lovelock predicts that up to 1 billion people will die from the impact of changing weather brought on by Global Warming.</p>

HTML;


$sidebox_title[] = "Predictions";
$sidebox[] = <<<HTML
<p>A BBC National Poll (July 2004) indicates that 85% of the British Public would be prepared to change the way they live in order to lessen the impact on the environment.
</p>

<p>James Lovelock predicts that up to 1 billion people will die from the impact of changing weather brought on by Global Warming.</p>

<p><strong>Scientists predict
we have just
10 years to
the Tipping Point
of runaway
Global Warming...</strong></p>

HTML;


$link_showbox = 'inspire-action';


include_once('templates/actionearth.php');

?>
