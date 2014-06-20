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
$pagename="Home Page";

// Page Content (HTML OKAY, NO PHP), <br> is enter, you cannot simply line break.
$content='Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer scelerisque orci non nisl varius pharetra. Ut bibendum accumsan arcu, quis aliquam mauris pulvinar quis. Etiam molestie, nisl ultrices lobortis lacinia, urna quam ultrices metus, id suscipit massa risus nec tellus. In tempor neque eget adipiscing sollicitudin. Aliquam erat volutpat. Aenean a ipsum at dolor cursus sodales. Cras dignissim risus et rhoncus dictum. Pellentesque aliquet ut augue id dictum. Cras consequat malesuada velit, vitae adipiscing diam tristique quis. Vestibulum vitae pulvinar elit, eu bibendum augue. Donec eu orci quis nibh rhoncus aliquet. Sed lorem neque, imperdiet sed egestas sed, adipiscing eget neque. Nunc sagittis luctus odio a varius. Duis tempus cursus hendrerit. Etiam aliquet lorem eros, eu dictum augue viverra vitae. <br><br> OSTCMS stands for Open Source Tinii Content Management System, designed and written completely by Ethan A. (Tiniibiz CEO) in 2014.';

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