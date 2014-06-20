<?php
/*
//================================================================================
* This is Just a Regular Cascading Style Sheet (CSS) inside of a PhP File *
//================================================================================
*/

// Website Background
$bg="/images/site_bg.jpg";

// Style of the Website - If You are new to CSS, or don't know how, search for OSTCMS Themes MAKE SURE YOU DON'T FORGET THE QUOTES AND COLEN! ( " ";)
$css="		
		img.bg {
			/* Set rules to fill background */
			min-height: 100%;
			min-width: 1024px;
			
			/* Set up proportionate scaling */
			width: 100%;
			height: auto;
			
			/* Set up positioning */
			position: fixed;
			top: 0;
			left: 0;
		}
		
		@media screen and (max-width: 1024px){
			img.bg {
				left: 50%;
				margin-left: -512px; }
		}
		
		#page-wrap { position: relative; width: 700px; margin: 50px auto; padding: 20px; background: white; -moz-box-shadow: 0 0 20px black; -webkit-box-shadow: 0 0 20px black; box-shadow: 0 0 20px black; }
		p { font: 15px/2 Georgia, Serif; margin: 0 0 30px 0; text-indent: 40px; }
		#header { position: relative; width: 700px; margin: auto; padding: 20px; background: white; -moz-box-shadow: 0 0 20px black; -webkit-box-shadow: 0 0 20px black; box-shadow: 0 0 20px black; }
		p { font: 15px/2 Georgia, Serif; margin: 0 0 00px 0; text-indent: 00px; }";

?>