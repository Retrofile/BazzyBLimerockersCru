<?php
if (isset($_GET["section"])) {
?><div style="float:left;width:600px" id="mainContent"><?php
	echo "<h1>".ucwords(basename($_GET["section"]))."</h1>";
	$f="content/".basename($_GET["section"]).".html";
	if (is_file($f)) {

	readfile($f); 
	$f=str_replace(".html",".jpg",$f);
	if (is_file($f)) {
	
	}
	?>
</div>
<?php
	} else {
	}
} else {
?>
<div id="slideShow" style="margin-top:40px;width:600px;height:400px;overflow:hidden;box-sizing:border-box;float:left">
<img src="content/home.jpg" class="cornerImage"/>
<?php for ($x=1;$x<=5;$x++) { ?>
<img src="content/slides/image<?php echo $x; ?>.jpg" class="cornerImage"/>
<?php } ?>
</div>
<?php
	}
?>

<div id="sidebar">
<?php @readfile("content/events.html"); ?>
</div>