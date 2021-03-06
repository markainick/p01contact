<?php
/**
 * @package  p01-contact
 * @subpackage Language
 * @file type: Danish Language File
 * @Version: 1.0
 * @Date: 27. oktober 2011
 * @author: Christian Sand
 * @website: http://www.cobyte.dk
 */
$p01contact_lang = array(
// fields
'name'    => 'Navn',
'email'   => 'Mail',
'address' => 'Addresse',
'tel'   => 'Telefon',
'url' => 'Hjemmeside',
'subject' => 'Emne',
'message' => 'Besked',
'file'    => 'Tilføj',
'captcha' => 'Captcha',
'reload'  => 'Genindlæs',
'fieldcaptcha' => '<b>Undlad</b> at udfylde følgende felt:',
'askcopy' => 'Send kopi af mail',
'send'    => 'Afsend',

// email words
'askedcopy'=> 'Der er blevet bedt om en kopi af denne mail',
'anonymous'   => 'Uden afsender',
'nosubject'=> '(Intet emne)',
'email_title' => 'Mail afsendt fra',

// status messages
'sent'    => 'Mail afsendt.',
'error'   => 'Fejl: Beskeden blev ikke afsendt.',
'disable' => 'Kontaktformularen er slået fra.',
'target'  => 'Kontaktformularen indeholder ingen modtager.',
'token'   => 'Beskeden er allerede afsendt.',

// fields errors
'field_required'=> 'Udfyld dette tekstfelt',
'field_email'   => 'Benyt en gyldig mailadresse',
'field_tel'   => 'Benyt et gyldigt telefonnummer',
'field_url' => 'Skriv en gyldig hjemmesideadresse',
'field_message' => 'Skriv en længere meddelelse',
'field_captcha' => 'Kopier den følgende tekst',
'field_fieldcaptcha' => 'Undlad at udfylde dette tekstfelt',
'field_password'=> 'Ugyldigt kodeord',

// configuration panel

'config_title' => 'Opsætning',

// messages
'config_updated' => 'Dine ændringer blev gemt.',

'config_error_open' =>
'<b>Opsætningsfilen kan ikke læses.</b>
Undersøg at filen eksisterer, og at du har rettigheder til filen:',

'config_error_modify' =>
'<b>Opsætningsfilen kan ikke ændres.</b>
Undersøg, at du har rettigheder til filen:',

// New release alert
'new_release' => 'Der er kommet en ny version!',
'download' => 'Hent den seneste version',

// Links
'doc' => 'Dokumentation',
'forum' => 'Hjælp',

// Parameters
'enable'     => 'Afsendelse af mail',
'enable_sub' =>
'Aktiver eller afbryd afsendelse af mail (skjuler ikke kontaktformularen).',

'default_email'     => 'Webstedet standardmail',
'default_email_sub' => 'Undlad at udfylde for at benytte',

'lang'     => 'Sprog',
'lang_sub' => 'Standardsproget er indstillet til: ',

'default_params'     => 'Udformning af kontaktformular',
'default_params_sub' =>
'Benyt etikettesyntaks som beskrevet i dokumentation.',

'message_len'     => 'Beskedens mindstelængde',
'message_len_sub' => 'Mindste antal karakterer i beskedfelt.',

'checklists'     => 'Tjekliste',
'blacklist'      => 'Bandlyst',
'whitelist'      => 'Påkrævet',
'checklists_sub' =>
'Rediger tjeklisten med bandlyste værdier, som mailen ikke må indeholde, eller med værdier som er påkrævede for afsendelse af mail.<br />
De enkelte værdier separeres med komma.',

'general_fields' => 'Generelle værdier',
'special_fields' => 'Specifikke værdier',

'debug'     => 'Fejlfindingstilstand',
'debug_sub' =>
'Afbryd afsendelse af mail. Gennemse filstrukturen for p01-kontaktdata; revider data sendt af POST og data for mailen, som skulle være afsendt.',
'debug_warn'=> 'Aktiver ikke fejlfinding på et fungerende websted!'
);
?>
