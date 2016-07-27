<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
    <head>
        <title>Firefox Bug</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    </head>
<body>


<strong>Expected:</strong><br />
TD top left css background, with border-collapse should position itself inside the border and thus align with the image tag<br />

Screenshot from opera:<br />
<img src='expected.png' /><br /><br />


<strong>Actual:</strong><br />
css background image is positioned relative to the outside of the border<br />
I'm not sure what the specs say, but every other broswer (IE, KHTML, Opera) renders the two images as aligned <br /><br />

<strong>Reproduceable:</strong>  Always<br /><br />
<strong>Tested On: </strong> Mozilla/5.0 (X11; U; Linux i686; en-GB; rv:1.8.0.4) Gecko/20060608 Ubuntu/dapper-security Firefox/1.5.0.4<br /><br /><br />

<strong>Test Case:</strong><br /><br />
<? ob_start(); ?>
<style>
    table  { border:5px solid green; border-collapse:collapse; }
    td     { height:50px; width:100px; vertical-align:top; margin:0; padding:0;  }
    td.css { background:url(green_bar.gif) top left no-repeat;  }
</style>

<table>
    <tr>
        <td class='css'   ></td>
        <td class='inline'><img src='green_bar.gif'/></td>
    </tr>
</table>

<? $html = ob_get_contents(); echo "<pre>", htmlspecialchars($html), "</pre>"; ?>

</body>
</html>