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

$title = "Inspire Others To The Call";

$content = <<<HTML

<h3 class='first'>Climate Change is the most important issue of our time.</h3>

<p>Our urgent request to you is to not stop at your own life changes but to explore ways to inspire others to the call.</p>

<div class='quote'>85% of the British public would be prepared to change the way they live in order to lessen the impact on the environment <div class='author'>Source: BBC National Poll July 2004</div></div>
<p>&nbsp;</p>
<ul>
<li>Challenging environmentally unsound behaviour (e.g. unnecessary energy consumption) and advocating alternatives is an effective way of raising the climate-change issue whilst making others aware of their part in both the problem and the solution.</li>

<li>Recommending or emailing this website [<a href='http://www.actionearth.org'>www.actionearth.org</a>] to others supports this process with accessible information about climate change and individual actions we can all take.</li>

<li>Putting your own Actions Pledge in a prominent place at home and at work is a useful first step in getting agreement from your family and colleagues at work. </li>

<li>Could you download the <a href='actions-pledge.php'>Actions Pledge flyer</a> and post it on notice boards?</li>

<li>Put environmental concerns as a regular feature on the meetings agenda at work and with groups you're involved in. This keeps the issue at the forefront of discussions and action. Challenge people. Make environmentally unsound behaviour non-PC!</li>

<li>Recommend books and news articles. There are several links in the Climate Facts and Climate Newsweek pages. A transcript of the BBC 1 Horizon documentary on Global Dimming is available online.</li>

<li>Download or send off for the short climate documentaries from <a href='http://www.risingide.org.uk'>Rising Tide</a> </li>
HTML;

/*
<li>Organise a "Light Party". An Action Earth participant in Norwich is getting hold of free or low cost low-energy bulbs through her local Friends of the Earth (British Gas are also doing a free offer) and organising evenings with groups of friends. During the evening she intends to get them to calculate their carbon footprint online, watch a climate-related documentary, have a group discussion about climate change and actions, sell a few low energy bulbs and have lots of fun in the process.  If you'd like to arrange a similar event please contact {${$email=email_encode('christine@innerspacenorwich.co.uk')}}<a href='mailto:$email'>$email</a> or on 01603-614460</li>
*/

$content .=<<<HTML
<li>Could your children be more involved? What about their friends? See Kids Action. And if you're a child, what about your parents and their friends? How about encouraging them to begin by calculating their Carbon Footprint?</li>

<li>Is there a Green Group at work or college? If not how about creating one? All it takes is you and a name!</li>
</ul>

<p>If you have further ideas of ways to inspire action please let us know! {${$email=email_encode('info@actionearth.org')}}<a href='mailto:$email'>$email</a></p>

HTML;


$sidebox_title[] = "Why your help is so critical";
$sidebox[] = <<<HTML
<h3 class='date'>History shows the way</h3><hr/>

<p>No one could have predicted in the 1930's that Gandhi's non-violent protest would bring independence to India</p>

<p>...nor in the 1980's that the international anti-apartheid movement would end discrimination in South Africa</p>

<h3 class='date'>Today...</h3><hr/>
<p>...a international movement to combat climate change is growing. But so far action is happening at a tiny fraction of the pace needed to keep us from crossing the tipping point.</p>



<h3 class='date'>"But will we wake for pity's sake?"</h3><hr/>
<p>Humankind needs to end its fossil fuel dependency and make significant progress in reforesting the earth in just ten years.</p>

<p>We are currently heading in exactly the opposite direction!</p>

<p><a href='javascript:popup("sleep-of-prisoners.php")'>A Sleep Of Prisoners</a></p>

<h3 class='date'>The call to action</h3><hr/>
<p>...is to each one of us alive today. To add weight to the climate awareness movement,
or join it reluctantly and belatedly, impoverishing the planet by our delay.</p>
HTML;


$link_showbox = 'inspire-action';


include_once('templates/actionearth.php');

?>
