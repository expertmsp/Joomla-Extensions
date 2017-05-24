<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_latest
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;?>
<style>
.sppb-form-group {
    margin-bottom: 15px;
}
.sppb-form-control {
    background-color: #ffffff;
    background-image: none;
    border: 1px solid #cccccc;
    border-radius: 4px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
    color: #555555;
    display: block;
    font-size: 14px;
    height: 34px;
    line-height: 1.42857;
    padding: 6px 12px;
    transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
    width: 100%;
}
.sppb-btn.sppb-btn-default {
    background: #da2a28 none repeat scroll 0 0;
    border: 1px solid #c62422;
    border-radius: 3px;
    box-shadow: none;
    color: #fff;
    font-family: PT Sans;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: normal;
    padding: 10px 24px;
    text-shadow: 0 1px 1px rgba(0, 0, 0, 0.5);
    text-transform: uppercase;
}
.text-area{z-index: auto; transition: none 0s ease 0s ; position: relative; line-height: 20px; font-size: 14px; background: transparent none repeat scroll 0px 0px; height:100px;}

.file-field-label input[type="file"] {
    height: 40px;
    margin-left: -10px;
    margin-top: -10px;
    opacity: 0;
    overflow: hidden;
    position: absolute;
    width: 180px;
}

input[type="submit"] {
    font-family: "Montserrat","Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 14px;
    font-weight: bold;
    line-height: 1.3;
	padding: 10px;
}

.file-field-label {
    background-color: silver;
    color: #fff;
    font-weight: bold;
    padding: 10px;
	text-align: center;
    width: 170px;
}
.file-field-label:hover {
    background-color: red;
}
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
<script src="http://malsup.github.com/jquery.form.js"></script> 
<script>
 jQuery(document).ready(function(){
	  var options = { 
        target:        '#output1',  
        clearForm: true      
    }; 
	jQuery('#myForm').ajaxForm(options);
});
</script>
<div class="sppb-addon-content">
	<form enctype='multipart/form-data'  id="myForm" action="<?php echo JURI::getInstance() ?>?submit=1" method="POST">
		<div class="sppb-form-group">
			<input name="name" id="name" class="sppb-form-control" placeholder="<?php echo JText::_('MOD_CAREER_NAME')?>" 		required="required" type="text">
		</div>
		<div class="sppb-form-group">
			<input name="email" id="email"  class="sppb-form-control" placeholder="<?php echo JText::_('MOD_CAREER_EMAIL')?>" 	required="required" type="email">
		</div>
		<div class="sppb-form-group">
			<input name="subject" class="sppb-form-control" placeholder="<?php echo JText::_('MOD_CAREER_SUBJECT')?>" 
				required="required" type="text">
		</div>
		<div class="sppb-form-group">
			<textarea name="message" rows="5" class="sppb-form-control text-area" placeholder="<?php echo JText::_('MOD_CAREER_MESSAGE')?>" required="required"></textarea>
		</div>
		<div class="sppb-form-group">
			<label for="profile_pic" class="file-field-label">
					<div class="job-manager-uploaded-files"></div>
					<input name="uploadlogo" class="sppb-form-control" accept="image/gif, image/jpeg, image/png,application/pdf,text/plain" required="required" type="file">
					<span class="button button--size-medium">Choose File</span>
			</label>
		</div>
		<button type="submit" id="career-form" class="sppb-btn sppb-btn-default" > 
			<?php echo JText::_('MOD_CAREER_SUBMIT')?><i class="fa fa-arrow-circle-right"></i>
		</button>
	</form>
	<div style="margin-top:10px;" class="sppb-ajax-contact-status" id="output1"></div>
</div>