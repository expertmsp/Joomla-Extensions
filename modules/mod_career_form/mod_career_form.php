<?php
/**
 * @copyright	@copyright	Copyright (c) 2017. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */
// no direct access
defined('_JEXEC') or die;
// include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';
if(isset($_REQUEST['name'])){
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$subject = $_REQUEST['subject']."- Career Form";
	$message = $_REQUEST['message'];
	$attachment = false;
	$target_dir = "images/";
	$target_file = $target_dir . time().basename($_FILES["uploadlogo"]["name"]);
	if(move_uploaded_file($_FILES["uploadlogo"]["tmp_name"], $target_file)){
		$attachment = true;
	}
	//Site configuration
	$config = JFactory::getConfig();
	$sitename = $config->get( 'sitename' );
	$mailfrom = $config->get( 'mailfrom' );
	//Send email module configuration
	$admin_email = $params->get('admin_email');
	$from = $mailfrom;
	$fromname = $sitename;
	$mail =& JFactory::getMailer();
	$mail->setSender(array($from, $fromname));
	$mail->setSubject($subject);
	$recipient = array($admin_email);
	// Are we sending the email as HTML?
	$mail->IsHTML(true);
	$mail->addRecipient($recipient);
	if($attachment){
		$mail->addAttachment($target_file);
	}
	$body   .= '<h2>'.JText::_('MOD_CAREER_EMAIL_WELCOME_MESSAGE').'</h2>';
    $body   .= '<p><strong>Name-: </strong>'.$name.'</p>';
    $body   .= '<p><strong>Email-: </strong>'.$email.'</p>';
    $body   .= '<p><strong>Subject-: </strong>'.$subject.'</p>';
    $body   .= '<p><strong>Message-: </strong>'.$message.'</p>';
    $body   .= '</br>';
    $body   .= '<h3>'.JText::_('MOD_CAREER_EMAIL_THANKYOU_MESSAGE').'</h3>';
	$mail->Encoding = 'base64';
	$mail->setBody($body);
	$send = $mail->Send();
	if ( $send !== true ) {
		echo JText::_('MOD_CAREER_ERROR_MESSAGE');
	} else {
		echo JText::_('MOD_CAREER_SUCCESS_MESSAGE');
	}
	die;
}
require(JModuleHelper::getLayoutPath('mod_career_form', $params->get('layout', 'default')));