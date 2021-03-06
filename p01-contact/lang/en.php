<?php
/**
 * English language file
 * @author Nicolas Liautaud
 * @package p01-contact
 */
$p01contact_lang = array(
// fields
'name'    => 'Name',
'email'   => 'Email',
'address' => 'Postal address',
'tel'   => 'Phone number',
'url' => 'Website',
'subject' => 'Subject',
'message' => 'Message',
'file'    => 'Attachment',
'captcha' => 'Captcha',
'reload'  => 'Reload',
'askcopy' => 'Send me a copy of this email',
'send'    => 'Send',

// email words
'askedcopy'=> 'A copy of this email have been requested',
'anonymous'   => 'Anonymous',
'nosubject'=> '(No subject)',
'email_title' => 'Mail sent from',

// status messages
'sent'    => 'Email sent.',
'sent_debug' => 'Email virtually sent (debug mode enabled).',
'sent_copy' => 'Email sent. A copy have been sent to the specified address.',
'sent_copy_error'   => 'Email sent, but there was an issue when sending you the copy.',
'sent_already'   => 'The message have already been sent.',
'error'   => 'Error : no message was sent.',
'disable' => 'Contact forms are disable.',
'target'  => 'This contact form has no recipient.',
'honeypot' => 'Blip. Blop. Blup. You felt in the honeypot for robots.',
'wait_load' => 'Blip. Blop. Blup. You\'re as fast as a robot. Please wait a few seconds.',
'wait_post' => 'You submitted just recently. Please wait a bit.',
'wait_hour' => 'You submitted too much times this hour.',

// fields errors
'field_required'=> 'This field is required',
'field_email'   => 'Please use a valid email address',
'field_tel'   => 'Please use a valid phone number',
'field_url' => 'Please write a valid web address',
'field_message' => 'Please write a longer message',
'field_captcha' => 'Please answer correctly the following captcha',
'field_password' => 'Wrong password',
'field_blacklist' => 'This field contains prohibited terms',
'field_whitelist' => 'An expected value is missing',

// configuration panel

'config_title' => 'p01contact configuration',
'config_updated' => 'Your changes were saved successfully.',
'config_error_open' => '<b>Unable to open config file.</b> Check if the file exists and its permissions :',
'config_error_modify' =>'<b>Unable to modify config file.</b> Check the file permissions :',

'new_release' => 'There is a new release!',
'download' => 'Download the last version',

'repo' => 'Github',
'wiki' => 'Documentation / Wiki',
'issues' => 'Help / report a bug',

// Parameters
'disable'     => 'Disable all forms',
'disable_sub' => 'Disable mail sending, without hiding the contact forms.',

'default_email'     => 'Default emails',
'default_email_sub' => 'One ore more email addresses, separated by commas, that will receive mails from every forms.',

'lang'     => 'Language',
'lang_sub' => 'Default language is set to',

'message_len'     => 'Messages minimum length',
'message_len_sub' => 'Minimum number of characters for message fields.',

'default_params'     => 'Default parameters',
'default_params_sub' => 'Default form structure. Use syntax described in documentation.',

'separator'     => 'Separator',
'separator_sub' => 'Parameters separator in forms markup. Ex: comma, semicolon, double-pipe...',

'logs_count'     => 'Logs number',
'logs_count_sub' => 'Maximum number of entries to keep on logs.',

'checklists'     => 'Fields checklists',
'blacklist'      => 'Blacklist',
'whitelist'      => 'Whitelist',
'checklists_sub' => 'A blacklist is a list of prohibited values in the given field type, and a whitelist is a list of the only possible values for the given field type. Each term should be separated by commas.',

'use_honeypot' => 'Use hidden honeypot field',
'use_honeypot_sub' => 'Add to every forms a hidden field that should not be filled. Humans won\'t see it, but most spam bots will fell in the trap.',
'min_sec_after_load' => 'Minimum time after page load',
'min_sec_after_load_sub' => 'Minimum number of seconds between a page load and a form submission. Fellow humans need at least a few seconds to read, fill and submit a form. Robots don\'t.',
'min_sec_between_posts' => 'Minimum time between two submissions',
'min_sec_between_posts_sub' => 'Minimum number of seconds between two form submissions.',
'max_posts_by_hour' => 'Maximum submissions by hour',
'max_posts_by_hour_sub' => 'Maximum number of submissions every hour.',
'captcha_info' => 'The native anti-spam and anti-error mechanisms should prevent all undesirable submissions. If you need a higher level of security you can create a custom captcha by adding a field with a required answer. Finally, you can insert a Google reCaptcha by using a <em>captcha</em> field with the below settings.',

'recaptcha_public_key' => 'reCaptcha public key',
'recaptcha_public_key_sub' => 'Google reCaptcha public key. See <a href="https://www.google.com/recaptcha/admin">reCaptcha admin</a>.',
'recaptcha_secret_key' => 'reCaptcha secret key',
'recaptcha_secret_key_sub' => 'Google reCaptcha secret key. See <a href="https://www.google.com/recaptcha/admin">reCaptcha admin</a>.',

'debug'     => 'Debug mode',
'debug_sub' =>
'Disable mail sending, display p01-contact data structure, data sent by POST and
the email that would have been sent.',
'debug_warn'=> 'Don\'t active that on production website!'
);
