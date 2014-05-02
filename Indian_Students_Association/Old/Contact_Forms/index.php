<?php
	//start session
	session_start();
	
	//set a key, checked in mailer, prevents against spammers trying to hijack the mailer.
	$security_token = $_SESSION['security_token'] = uniqid(rand());
	
	if(!isset($_SESSION['formMessage'])) $_SESSION['formMessage'] = 'Fill in the form below to send me an email.';
	if(!isset($_SESSION['formFooter'])) $_SESSION['formFooter'] = '';
	
	if(!isset($_SESSION['form'])) $_SESSION['form'] = array();
	
	function check($field, $type = "", $value = "") {
		$string = "";
		if(isset($_SESSION['form'][$field])) {
			switch($type) {
				case "checkbox":
					$string = 'checked="checked"';
					break;
				case "radio":
					if($_SESSION['form'][$field] == $value) $string = 'checked="checked"';
					break;
				case "select":
					if($_SESSION['form'][$field] == $value) $string = 'selected="selected"';
					break;
				default:
					$string = unescape_string($_SESSION['form'][$field]);
			}
		}
		return $string;
	}
	
	function unescape_string($string) {
		return stripslashes(@ html_entity_decode($string, ENT_QUOTES));
	}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="robots" content="all" />
		<meta name="generator" content="RapidWeaver" />
		
		<title>Contact Us</title>
		<link rel="stylesheet" type="text/css" media="screen" href="rw_common/themes/magnesium/styles.css"  />
		<link rel="stylesheet" type="text/css" media="print" href="rw_common/themes/magnesium/print.css"  />
		<link rel="stylesheet" type="text/css" media="handheld" href="rw_common/themes/magnesium/handheld.css"  />
		<link rel="stylesheet" type="text/css" media="screen" href="rw_common/themes/magnesium/css/styles/electric.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="rw_common/themes/magnesium/css/width/width_default.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="rw_common/themes/magnesium/css/sidebar/sidebar_hide.css" />
		
		
		
		
		<script type="text/javascript" src="rw_common/themes/magnesium/javascript.js"></script>
		
		
		
	</head>
<body>
<div id="container"><!-- Start container -->
	
	<div id="pageHeader"><!-- Start page header -->
		
		<h1>ISA @ UMASS, AMHERST</h1>
		<h2></h2>
	</div><!-- End page header -->
	
	<div id="sidebarContainer"><!-- Start Sidebar wrapper -->
		<div id="navcontainer"><!-- Start Navigation -->
			<ul><li><a href="index.php" rel="self" id="current">Contact Us</a></li></ul>
		</div><!-- End navigation --> 
		
		<div id="sidebar"><!-- Start sidebar content -->
			<h1 class="sideHeader"></h1><!-- Sidebar header -->
			 <br /><!-- sidebar content you enter in the page inspector -->
			 <!-- sidebar content such as the blog archive links -->
		</div><!-- End sidebar content -->
	</div><!-- End sidebar wrapper -->
	
	<div id="contentContainer"><!-- Start main content wrapper -->
		<div id="content"><!-- Start content -->
			<div id="breadcrumbcontainer"><!-- Start the breadcrumb wrapper -->
				
			</div><!-- End breadcrumb -->
			
<div class="message-text"><?php echo $_SESSION['formMessage']; unset($_SESSION['formMessage']); ?></div><br />

<form action="./files/mailer.php" method="post" enctype="multipart/form-data">
	 <div>
		<label>Your Name:</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element0'); ?>" name="form[element0]" size="40"/><br /><br />

		<label>Your Email:</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element1'); ?>" name="form[element1]" size="40"/><br /><br />

		<label>Subject:</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element2'); ?>" name="form[element2]" size="40"/><br /><br />

		<label>Message:</label> *<br />
		<textarea class="form-input-field" name="form[element3]" rows="8" cols="38"><?php echo check('element3'); ?></textarea><br /><br />

		<div style="display: none;">
			<label>Spam Protection: Please don't fill this in:</label>
			<textarea name="comment" rows="1" cols="1"></textarea>
		</div>
		<input type="hidden" name="form_token" value="<?php echo $security_token; ?>" />
		<input class="form-input-button" type="reset" name="resetButton" value="Reset" />
		<input class="form-input-button" type="submit" name="submitButton" value="Submit" />
	</div>
</form>

<br />
<div class="form-footer"><?php echo $_SESSION['formFooter']; unset($_SESSION['formFooter']); ?></div><br />

<?php unset($_SESSION['form']); ?>
		</div><!-- End content -->
	</div><!-- End main content wrapper -->
	<div class="clearer"></div>
	<div id="footer"><!-- Start Footer -->
		<p>&copy; 2009 ISA <a href="#" id="rw_email_contact">Contact Me</a><script type="text/javascript">var _rwObsfuscatedHref0 = "mai";var _rwObsfuscatedHref1 = "lto";var _rwObsfuscatedHref2 = ":ad";var _rwObsfuscatedHref3 = "war";var _rwObsfuscatedHref4 = "aki";var _rwObsfuscatedHref5 = "@en";var _rwObsfuscatedHref6 = "gin";var _rwObsfuscatedHref7 = ".um";var _rwObsfuscatedHref8 = "ass";var _rwObsfuscatedHref9 = ".ed";var _rwObsfuscatedHref10 = "u";var _rwObsfuscatedHref = _rwObsfuscatedHref0+_rwObsfuscatedHref1+_rwObsfuscatedHref2+_rwObsfuscatedHref3+_rwObsfuscatedHref4+_rwObsfuscatedHref5+_rwObsfuscatedHref6+_rwObsfuscatedHref7+_rwObsfuscatedHref8+_rwObsfuscatedHref9+_rwObsfuscatedHref10; document.getElementById('rw_email_contact').href = _rwObsfuscatedHref;</script></p>
	</div><!-- End Footer -->

</div><!-- End container -->
</body>
</html>
