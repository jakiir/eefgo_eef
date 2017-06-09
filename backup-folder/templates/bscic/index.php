<?php
/**
 * @copyright	Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */

defined('_JEXEC') or die('Restricted access');

$url = clone(JURI::getInstance());
$showRightColumn = $this->countModules('user1 or user2 or right or top');
$showRightColumn &= JRequest::getCmd('layout') != 'form';
$showRightColumn &= JRequest::getCmd('task') != 'edit'
?>
<?php echo '<?xml version="1.0" encoding="utf-8"?'.'>'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>
	<jdoc:include type="head" />
	<?php if(@$_REQUEST['option']=='com_reviews') { ?>
	<style>
	.error{
		display:none;	
	}
	</style>
	
	<?php } ?>
	
	<?php 
	$pge = $_SERVER['QUERY_STRING']; 
	
	if ($pge == "/index.php" || $pge == "" || $pge == "lang=bn" || $pge == "lang=en") { ?>
	<style>
	.contentheading,.componentheading,#breadcrumb{
		display:none;	
	}
	</style>	
	<?php } ?>
	
	

	<script language="javascript" type="text/javascript" src="<?php echo $this->baseurl ?>/templates/bscic/menu.js"></script>
	<script language="javascript" type="text/javascript" src="<?php echo $this->baseurl ?>/templates/bscic/dd_delated.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/bscic/style.css" />
</head>
<body>
<div id="tmpText" style="height:0; width:0; visibility:hidden; position:absolute; left:-9999px;"></div>
<div id="wrap">
	<div id="header" style="position:relative;">
		<span style="position:absolute; left:13px; top:5px; color:#FFF; font-weight:bold;">
		<?php echo date("l, M d, Y"); ?>
		</span>
		
		<div id="language">
		<jdoc:include type="modules" name="user3" />
		</div>
		
		<a href="index.php"><img src="<?php echo $this->baseurl ?>/templates/bscic/images/logo.png" class="logo" alt="" id="logoimage" /></a>
	</div>
	<div id="htextcont">
		<div id="allsearch">
			<jdoc:include type="modules" name="search" />
		</div>
		<div id="htext" style="text-align:center;">
			<div style="position:absolute; left:-9999px; visibility:hidden;">
				<jdoc:include type="modules" name="rotateText" />
			</div>
		</div>
		<div id="rightmenu" style="float:right; padding-right:10px; ">
		<jdoc:include type="modules" name="syndicate" />
		
		</div>
	</div>
	
<div id="wraper">	
	<div id="left">
		<div class="lefttop">
		</div>
		<div class="leftmid">
			<div class="sidebarmenu">
			<jdoc:include type="modules" name="left" />
			</div>
					<br /><br /><br />
					
		<a href="#"><img src="<?php echo $this->baseurl ?>/templates/bscic/images/career.jpg" alt="" /></a>
		<a href="http://webmail.bscic.gov.bd/index.php"><img style="margin-top:4px;" src="<?php echo $this->baseurl ?>/templates/bscic/images/webmail.jpg" alt="" /></a>
		
			<div id="implink">
				<h2>Important links</h2>
				<jdoc:include type="modules" name="user2" />				
			</div>
			
			<br />
<br />
<br />
<br />

		</div>
		<div class="leftbottom">
		</div>		
	</div>
	
	
	
	<div id="container">
		<div id="breadcrumb">
			<jdoc:include type="modules" name="breadcrumb" />
		</div>
		
		<?php if (@$_REQUEST['option']=="com_industrial" && @$_REQUEST['id']=='') : ?>
		<jdoc:include type="modules" name="industrialText" />
		<?php endif; ?>
		
		<?php if ($this->getBuffer('message')) : ?>
		<div class="error">
			<h2>
				<?php echo JText::_('Message'); ?>
			</h2>
			<jdoc:include type="message" />
		</div>
		<?php endif; ?>

		<jdoc:include type="component" />
	</div>
	
	
	
	<div id="right">
		<div class="righttop"><br clear="all" style="height:1%;" />

		</div>
		<div class="rightmid">
			
		<div id="banner">
		<jdoc:include type="modules" name="banner" />
		</div>
			
			<div id="asearch">
				<h3>Advanced search</h3>
				<br />
				
				<div id="acont">
					<form name="asearchform" method="post" action="#">
						<select name="ind"><option value="">Industry</option></select>
						<select name="ind"><option value="">District</option></select>
						<select name="ind"><option value="">Plot</option></select>
						<input type="submit" name="submit" value="SUBMIT" class="submit" />
					</form>
				</div>
			</div>
			
			
			<div id="newnevent">
				<h2>News &amp; Events</h2><br />
				<jdoc:include type="modules" name="user1" />
			</div>
			
			
			<div id="commingsoon">
				<h2><a href="index.php?option=com_reviews">Upcomming Program</a></h2><br />
				<jdoc:include type="modules" name="right" />
			</div>
		</div>
		<div class="rightbottom">
		</div>		
	</div>
	
</div>	

  <div id="footer">
	<jdoc:include type="modules" name="footerMenu" />
	
	<span class="copyright">    &nbsp;Copyright &copy; 2007-2009 BSCIC. All  rights reserved. Developed &amp; Maintained by: <u><a href="http://www.batworld.com" target="_blank">Business Automation Ltd</a></u></span>	</div>
	
</div><br />
<br />

</body>
</html>