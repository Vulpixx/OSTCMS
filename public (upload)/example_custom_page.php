<?php
	include('config.php');
	include('header.php');
	include('style.php');
/*
//================================================================================
* Page Variables *
//================================================================================
*/

// Page Title
$pagename="Page Name Here";

// Page Content (HTML OKAY, NO PHP), <br> is enter, you cannot simply line break.
$content='<b>Example Content</b> ';

/*
//================================================================================
* Do Not Modify Below This Line *
//================================================================================
*/
?>

<head>
<title><?php echo "$title";?> - <?php echo $pagename?></title>

<style>
<?php echo $css;?>
	</style>

</head>
<body>
<img src="<?php echo $bg;?>" class="bg">

<div id="header">
	<center><h3><b><a href="/">Home</a> | <a href="<?php echo $link1;?>"><?php echo $link1text;?></a> | <a href="<?php echo $link2;?>"><?php echo $link2text;?></a> | <a href="<?php echo $link3;?>"><?php echo $link3text;?></a> | <a href="<?php echo $link4;?>"><?php echo $link4text;?></a><h3></b></center>
	</div>
<div id="page-wrap">
<h1><center><?php echo $pagename;?></center></h1>
<?php echo $content;?><br>
<br><br><b><?php echo $footer;?></b>
	</div>
</body>
</html>