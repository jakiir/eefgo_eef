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
<?php $this->setGenerator('www.eef.gov.bd'); ?>
	<?php if($_REQUEST['option']=='com_reviews') { ?>
	<style>
	.error{
		display:none;	
	}
	</style>
	
	<?php } 
	
	?>
	
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
	
	<?php if($this->language == 'bn-bd') { ?>
		<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/bscic/stylebd.css" />
	<?php } else { ?>
		<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/bscic/style.css" />
	<?php } ?>
	
	 
	
</head>
<body>
<div id="tmpText" style="height:0; width:0; visibility:hidden; position:absolute; left:-9999px;"></div>
<div id="wrap">
	<div id="header" style="position:relative;">
		<!--<span style="position:absolute; left:13px; top:5px; color:#FFF; font-weight:bold;">
		<?php echo date("l, M d, Y"); ?>
		</span>-->
		
		<div id="language">
		<jdoc:include type="modules" name="user3" />
		</div>
		
		
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
		
		<?php if($this->language == 'bn-bd') { ?>
					<?php } else { ?>
			<a href="<?php echo $this->baseurl ?>/index.php?option=com_career&Itemid=129"><img src="<?php echo $this->baseurl ?>/templates/bscic/images/career.jpg" alt="" /></a>
			<a href="#" onclick="window.open('http://webmail.bscic.gov.bd/index.php');"><img style="margin-top:4px;" src="<?php echo $this->baseurl ?>/templates/bscic/images/webmail.jpg" alt="" /></a>
		<?php } ?>			
		
		
			<div id="implink">
				<!--<h2>Important links</h2>-->
				<jdoc:include type="modules" name="user2" style="xhtml" />				
			</div>
			
			<br />
		</div>
		<div class="leftbottom">
		</div>		
	</div>
	
	
	<?php if(($_REQUEST['id']==4 || $_REQUEST['id']==30) && ($_REQUEST['Itemid']==4 || $_REQUEST['Itemid']==7)) { ?>
	<div id="expand">
	<?php } else { ?>
	<div id="container">
	<?php } ?>	
		<div id="breadcrumb">
			<jdoc:include type="modules" name="breadcrumb" />
		</div>
		
		<?php if ($_REQUEST['option']=="com_industrial" && $_REQUEST['id']==''  && $_REQUEST['istates_id']=='') : ?>
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
	
	
	<?php if(($_REQUEST['id']==4 || $_REQUEST['id']==30) && ($_REQUEST['Itemid']==4 || $_REQUEST['Itemid']==7)) { ?>
	<?php } else { ?>
	<div id="right">
		
		</div>
		<div class="rightmid">
			
		<div id="banner">
		<jdoc:include type="modules" name="banner" />
		</div>			
			
			<?php if($this->countModules('isearch')) : ?>
			<div id="asearch">
				<h3>Advanced search</h3>
				
				<jdoc:include type="modules" name="isearch" />				
			</div>
			<?php endif; ?>
			
			<div id="newnevent">				
				<jdoc:include type="modules" name="user1" style="xhtml" />
			</div>	
			
			<div id="commingsoon">
				<jdoc:include type="modules" name="user4" style="xhtml" />
			</div>	
			
		</div>
		<div class="rightbottom">
		</div>		
	</div>
	<? } ?>

  <div id="footer">
  	<jdoc:include type="modules" name="footerMenu" />
  </div>
</div>	
</body>
</html>