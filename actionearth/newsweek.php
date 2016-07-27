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
include_once('inc/newsweek-functions.php');

$logo = 'earth-map.jpg';
$logo_alt = 'Planet Earth';
$stylesheet[] = 'green.css';
$title = "Climate News and Reports";


$content =<<<HTML
<h3 class='first bigger'>Key Reports</h3>

<h3><a href='http://www.spiritofmaat.com/announce/ann_dryice.htm'>Dry/Ice: Global Warming Revealed</a></h3>
<div class='by'>by Drunvalo Melchizedek</div>
<div class='blockquote'>What you are about to read is going to change your world forever...</div>

<h3><a href='http://www.gci.org.uk/articles/Tablet.pdf'>Slouching towards Disaster [pdf]</a></h3>
<div class='by'>by Michael Mccarthy - The Tablet 12/02/2005</div>

<h3><a href='http://news.bbc.co.uk/1/hi/sci/tech/4210629.stm'>Alarm At New Climate Warning</a></h3>
<div class='by'>by Richard Black - BBC 26/01/2005</div>
<div class='blockquote'>Temperatures around the world could rise by as much as 11C, according to one of the largest climate prediction projects ever run.</div>

<h3><a href='apocalypse-now.php'>Apocalypse Now: How Mankind is Sleepwalking to the End of the Earth</a></h3>
<div class='by'>by Geoffrey Lean - Independant 06/02/2005</div>
<div class='blockquote'>Floods, storms and droughts. Melting Arctic ice, shrinking glaciers, oceans turning to acid. The world's top scientists warned last week that dangerous climate change is taking place today, not the day after tomorrow. You don't believe it? Then, says Geoffrey Lean, read this...</div>

<h3><a href='http://www.newscientist.com/article.ns?id=dn7295'>Antarctic Peninsula Glaciers in Major Retreat</a></h3>
<div class='by'>by Fred Pearce - New Scientist 21/04/2005</div>
<div class='blockquote'>Researchers' worst fears over the melting of Antarctica have been realised. The first comprehensive survey of glaciers on the Antarctic Peninsula shows a widespread retreat that investigators from the British Antarctic Survey believe may be further evidence of global warming.</div>

<h3><a href='http://www.sci-tech-today.com/story.xhtml?story_id=33512'>Researchers Develop Oxygen-Free Microbial Fuel Cell</a></h3>
<div class='by'>Sci Tech Today 23/04/2005</div>
<div class='blockquote'>US Researchers said Friday that they have developed a new electrically assisted microbial fuel cell that does not require oxygen, enabling bacteria to produce four times as much hydrogen directly out of biomass than can be generated typically by fermentation alone.</div>

HTML;
// <br/><br/><hr/>
// <h3 class='bigger'>News Articles</h3><br/><br/>



// http://uk2.php.net/ma$deletednual/en/function.strftime.php
$date_format = '%A, %e %B %Y'; // Monday, 3 December 1982
$newsweek_file = 'newsweek-events.txt';

//$events   = read_newsweek_file($newsweek_file);
//$content .= display_newsweek_file($events,$date_format);

$sidebox_title[] = "Related Websites";
$sidebox[] =<<<HTML
<ul class='first'>
<li><a href='http://www.worldviewofglobalwarming.org'>World View of Global Warming</a></li>
<li><a href='http://www.realclimate.org'>Real Climate</a></li>
</ul>
HTML;

//$menus[] = 'Climate Facts';


include_once('templates/actionearth.php');

?>
