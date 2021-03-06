<?php
/**
 * Serbian language file
 * @author lemi667
 * @package p01-contact
 */
$p01contact_lang = array(
// fields
'name'    => 'Ime',
'email'   => 'Email',
'address' => 'Adresa',
'tel'   => 'Broj telefona',
'url' => 'Website',
'subject' => 'Tema',
'message' => 'Poruka',
'file'    => 'Dodatak',
'captcha' => 'Captcha',
'reload'  => 'Učitaj ponovo',
'fieldcaptcha' => 'Molimo <b>nemojte</b> popunjavati sledeće polje :',
'askcopy' => 'Pošalji mi kopiju ove poruke',
'send'    => 'Pošalji',

// email words
'askedcopy'=> 'Kopija ove poruke je zatražena',
'anonymous'   => 'Anonimno',
'nosubject'=> '(No subject)',
'email_title' => 'Mail poslao',

// status messages
'sent'    => 'Email poslat.',
'error'   => 'Greška u slanju poruke.',
'disable' => 'Formulari za kontakt su onemogućeni.',
'target'  => 'Ovaj formular nema adresu za prijem.',
'token'   => 'Poruka je već poslata.',

// fields errors
'field_required'=> 'Ovo polje je obavezno',
'field_email'   => 'Molimo koristite validnu email adresu',
'field_tel'   => 'Molimo koristite validan broj telefona',
'field_url' => 'Molimo koristite validnu web adresu',
'field_message' => 'Molimo upišite dužu poruku',
'field_captcha' => 'Molimo kopirajte sledeći tekst',
'field_fieldcaptcha' => 'Molimo da ne popunjavate ovo polje',
'field_password'=> 'Pogrešna lozinka',

// configuration panel

'config_title' => 'p01contact konfiguracija',

// messages
'config_updated' => 'Vaše promene su sačuvane.',

'config_error_open' =>
'<b>Nije moguće otvoriti konfiguracioni fajl.</b>
Proverite da li fajl postoji i dozvole za pristup :',

'config_error_modify' =>
'<b>Nije moguće modifikovati konfiguracioni fajl.</b>
Proverite dozvole za pristup :',

// New release alert
'new_release' => 'Postoji nova verzija!',
'download' => 'Preuzmite najnoviju verziju',

// Links
'doc' => 'Dokumentacija',
'forum' => 'Forum',

// Parameters
'enable'     => 'Omogući',
'enable_sub' =>
'Omogući/onemogući slanje poruka (ne sakriva kontakt formular).',

'default_email'     => 'Podrazumevani email',
'default_email_sub' => 'Ostavite prazno da bi podesili:',

'lang'     => 'Jezik',
'lang_sub' => 'Podrazumevani jezik je',

'default_params'     => 'Podrazumevani parametri',
'default_params_sub' =>
'Podrazumevani tag iz strukture. Koristite sintaksu opisanu u dokumentaciji.',

'message_len'     => 'Minimalna dužina poruke',
'message_len_sub' => 'Minimalan broj karaktera za polje poruke.',

'checklists'     => 'Kontrolna lista polja',
'blacklist'      => 'Crna lista',
'whitelist'      => 'Bela lista',
'checklists_sub' =>
'Crna lista : vrednosti koje ne smeju biti prisutne da bi poruka bila poslata.<br />
Bela lista : moguće vrednosti potrebne u polju da bi poruka bila poslata.<br />
Odvojeno zarezima.',

'general_fields' => 'Opšta polja',
'special_fields' => 'Specijalna polja',

'debug'     => 'Debug režim',
'debug_sub' =>
'Onemogućuje slanje poruke, prikazuje p01-contact strukturu podataka, podaci poslati putem POST i poruka koja bi bila poslata.',
'debug_warn'=> 'Nemojte ovo aktivirati na sajtu koji je u funkciji!'
);
?>
