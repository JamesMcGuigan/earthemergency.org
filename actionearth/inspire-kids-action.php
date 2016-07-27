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

$logo = 'girl-with-bird.jpg';
$logo_alt = 'Girl with Bird';
$stylesheet[] = 'green.css';

$title = "Inspire a Child to Action";

$content =<<<HTML
<p>Young people have a hugely important role to play in helping to prevent climate change. They are also the ones who will still be around to face the longer-term impact of humanity's actions today.</p>
<p>Fortunately children love to be part of the action and their enthusiasm is infectious!</p>
<p>Positive action is also empowering and builds confidence in their future.</p>

<a name='action'></a>
<h3>Kids Action</h3>

<p>OK kids this part of the website is just for you! </p>

<p>Why not have a browse through the links in the Action Box and see what actions grab you. Then have a chat with Mum, Dad or a teacher and decide what you might like to do to help protect against climate change. You might have ideas of your own so include these too.</p>

<a name='challenge'></a>
<h3>Kids Challenge</h3>

<p>Here's a challenge for some of you out there. We'd like to create an Actions Pledge for kids. It's a simple idea really. If you'd like to take part then just put together a list of actions you think you could do and send it to us. We'll reply to all of you and the best ones we'll publish on the site!  Good luck!
</p><p>
Send entries to <a href='mailto:{${$email=email_encode('info@actionearth.org')}}$email'>$email</a>
</p>

<a name='walking'></a>
<h3>Freedom! Walking &amp; Busing To School</h3>
<p>Get your mum and dad to walk you to school instead of getting in the car.  This will help to get them fit as well as you. You could arrange to meet your friends on the way so that your parents don't have to come right to the school.</p>

<p>If you live a distance from school then explore going by bus or train rather than by car and again, arrange to meet friends on the way.
If there is no public transport then walk or cycle to a friend's house and share cars on the school run and for other activities.
With more people walking around, the streets become safer.</p>

<p><a href='http://www.walktoschool.org.uk' >Walk To School Week</a> is 23 -27 May 05</p>
<p>And there's another Walk to School week in October. Find out more on our <a href='demos-campaigns.php'>demonstrations and campaigns</a> page.</p>

<a name='electricity'></a>
<h3>Electricity: Magic That Costs The Earth!</h3>
<p>Did you know that when you put on a light bulb or play a computer game, a power station is quite likely to be burning coal, oil or gas to make the electricity needed. These are known as fossil fuels and all of them pollute the air.
</p>
<p>Insist that all your battery operated toys have rechargeable batteries and remember to unplug the charger as soon as the battery is recharged so as not to waste electricity.</p>

<p>Switch off lights, chargers and other electrical items when not in use and especially overnight and encourage your family to do the same.</p>

<a name='food'></a>
<h3>Food Glorious Food!</h3>
<p>Ask Mum or Dad to work with you in planting and tending an organic vegetable garden. Or you have own patch of garden and learn to grow organic vegetables for family meals.
</p>
<p>When shopping with mum or dad offer to check the food labels to ensure that they are only buying local produce which is much better for the planet than food flown in from <a href='actions-pledge.php#buy-local-organic-food'>around the world</a>. Also, encourage them to buy foods which have less packaging.
</p>

<a name='toys'></a>
<h3>Old Toys That Make Money </h3>
<p>Have regular toy and clothes sales so that your old toys and clothes are reused rather than thrown away or left in the toy cupboard. You might find some interesting things to buy too. This could be done with a group of friends or you could ask your teachers at school or your local cub scouts or girl guides group. This will help to reduce the number of new toys which <!-- <a href='consumerism.php'> -->need to be made <!--</a>-->. The money you make could be extra pocket money or you might like to raise the money for helping to <a href='sponsor-rainforests.php'>plant new forests</a>.
</p>

<a name='recycling'></a>
<h3>The Fun Of Recycling </h3>
<p>Become your family's "recycling officer" by offering to collect all the recyclable items - it can be great fun putting all the stuff in the right bins at your local recycling centre. </p>

<p>Choose drinks from glass bottles as a much higher percentage of glass gets recycled then cans or plastic bottles. And if you do buy cans or plastic bottle take your waste home with you. That way you can make sure it's recycled! If you don't it's likely to end up in a rubbish dump polluting the soil and waterways for many years to come.</p>


<a name='write'></a>
<h3>Let The People In Charge Know What You Think</h3>
<p>Write to your local Councillors and Member of Parliament. <a href='http://www.writetothem.com'>You can even do it online.</a></p>

<p>Even though you can't vote yet, you are still part of the community and that means you have the right to be heard by your local Councillors, your Member of Parliament (MP), your Member of the European Parliament (MEP) and even the Prime Minister (PM).</p>

<strong>Three Simple Rules when writing to politicians.</strong>
<ol>
<li>Explain clearly how you feel about this issue</li>
<li>Ask them to tell you if they think this issue is important/how they feel</li>
<li>Close letter with "I look forward to your reply" </li>
</ol>

<a name='ecogames'></a>
<h3>Ecogames</h3>

<p>Play "<a href='http://www.rainforestfoundationuk.org/s-Games'>Raiders of the Lost Bark</a>" on-line.</p>

HTML;


$sidebox_title[] = "Action Box";
$sidebox[] =<<<HTML
<h3>What You Can Do</h3><hr />
<ul>
<li><a href='#action'>Kids Action</a></li>
<li><a href='#challenge'>Kids Challenge</a></li>
<li><a href='#walking'>Freedom! Walking &amp; Busing To School</a></li>
<li><a href='#electricity'>Electricity: Magic That Costs The Earth!</a></li>
<li><a href='#food'>Food Glorious Food!</a></li>
<li><a href='#toys'>Old Toys That Make Money</a></li>
<li><a href='#recycling'>The Fun Of Recycling</a></li>
<li><a href='#write'>Let The People In Charge Know What You Think</a></li>
<li><a href='#ecogames'>Ecogames</a></li>
</ul>
HTML;

$link_showbox = 'inspire-action';


include_once('templates/actionearth.php');

?>
