<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" ></script>
<?php 
$b=$_GET["section"];
$fullheader=true;
$rest="Hip-Hop Dance Classes in Limerick";
switch ($b) {
	case "contact" : $title="Contact "; $fullheader=false; break;
	case "bio" : $title="About "; $fullheader=false; break;
	case "bookings" : $title="Book "; break;
}
if ($fullheader) $title.=$rest." by ";
$title.="Bazzy B &amp; Limerockers Cru";
if ($fullheader===false) $title.=" ".$rest;
?>
<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $title; ?>" />
<link href="baz.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="scripts/jquery.cycle.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('#slideShow').cycle();
});
</script>
</head>

<body class="<?php echo $_GET["section"]; ?>">
<div id="centreContent">
	<div id="header">
		<img src="background_images/combo_header.jpg" style="height:183px;width:942px"/>	</div>
	<div id="menu">
		<a href="index.php">HOME</a><a href="index.php?section=classes">CLASSES</a><a href="index.php?section=bookings">BOOKINGS</a><a href="index.php?section=bio">BIO</a><a href="index.php?section=contact">CONTACT</a>	</div>
	<div id="content">
	<?php include("includes/readcontent.php"); ?>
	<br style="clear:both" />
	</div>
	<br style="clear:both" />
</div>

<div id="footer">
	<div class="col">
		<p style="font-style:italic">Supported by</p>
		<img src="background_images/oconnors_cameras.jpg" />	
	</div>
	<div class="col">
		<img src="background_images/make_a_move.jpg" />
	</div>
</div>

<div id="subfooter">
	<div class="col">
		<p><a href="http://www.limerockerscru.com" target="_blank">www.limerockerscru.com</a></p>
		<p>Contact BAZ on<br />087 2032792</p>
	</div>
	<div class="col">&nbsp;	</div>
	<div class="col">&nbsp;	</div>
	<div class="col">
		<p><a href="https://www.facebook.com/pages/Limerockers-Cru/265071210191675?fref=ts" target="_blank">facebook/limerockers cru</a></p>
		<p><a href="https://www.facebook.com/barry.burke.988?fref=ts" target="_blank">facebook/Barry Burke</a></p>
	</div>
</div>

</body>
</html>
