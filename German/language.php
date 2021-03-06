<?php

$lang = array(

//
// Text orientation and encoding
//

'lang_direction'					=>	'ltr', // ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'					=>	'de',

//
// Number and date formatting
//

'lang_decimal_point'				=>	',',
'lang_thousands_sep'				=>	'.',
'lang_time'							=>	'H:i',
'lang_date'							=>	'j M Y',

//
// Notices
//

'Bad request'						=>	'Ungültige Anfrage. Der Link, dem du gefolgt bist, ist inkorrekt, abgelaufen oder du hast einfach nicht die Erlaubnis hier abzuhängen.',
'No view'							=>	'Du hast nicht die Erlaubnis, diese Seite zu betrachten.',
'Bad referrer'						=>	'Ungültiger HTTP_REFERER. You were referred to this page from an unauthorized source. If the problem persists please make sure that \'Base URL\' is correctly set in Admin/Options and that you are visiting the forum by navigating to that URL. More information regarding the referrer check can be found in the ModernBB documentation.',
'No permission'						=>	'Du hast nicht die Erlaubnis, diese Seite zu betreten.',
'No cookie'							=>	'Du scheinst dich erfolgreich eingeloggt zu haben, jedoch wurde kein Cookie gesetzt. Bitte überprüfe deine Einstellungen und wenn möglich, aktiviere Cookies für diese Webseite.',
'Pun include extension'				=>  'Unable to process user include %s from template %s. "%s" files are not allowed',  
'Pun include directory'				=>  'Unable to process user include %s from template %s. Directory traversal is not allowed',  
'Pun include error'					=>  'Unable to process user include %s from template %s. There is no such file in neither the template directory nor in the user include directory',  
'Settings saved'					=>  'Deine Einstellungen wurden gespeichert.',
'User deleted'						=>  'Der Benutzer wurde gelöscht.',
'User failed'                       =>  'Benutzer konnte nicht erstellt werden, da kein Passwort eingegeben wurde.',
'User created'                      =>  'Benutzer erstellt',
'Cache cleared'						=>  'Die Cache-Dateien wurden entfernt.',

//
// Miscellaneous
//

'Announcement'						=>	'Ankündigung',
'Options'							=>	'Globale Einstellungen',
'Features'							=>	'Features',
'Submit'							=>	'Absenden', // "Name" of submit buttons
'Search'							=>	'Suche',
'Ban message'						=>	'Du wurdest aus diesem Forum gebannt.',
'Ban message 2'						=>	'Der Ban besteht bis',
'Ban message 3'						=>	'Der Administrator oder Moderator, welcher dich gebannt hat, hinterließ folgende Nachricht:',
'Ban message 4'						=>	'Bitte wende dich bei Fragen an den Forenadministrator über',
'Never'								=>	'Niemals',
'Today'								=>	'Heute',
'Yesterday'							=>	'Gestern',
'Info'								=>	'Info', // A common table header
'Maintenance'						=>	'Wartung',
'Invalid email'						=>	'Die eingegebene Emailadresse ist inkorrekt.',
'Required'							=>	'(Benötigt)',
'required field'					=>	'ist ein benötigtes Feld in diesem Formular.', // For javascript form validation
'Last post'							=>	'Letzter Beitrag',
'by'								=>	'von', // As in last post by some user
'New posts'							=>	'Neue Beiträge', // The link that leads to the first new post
'New posts info'					=>	'Gehe zum ersten neuen Beitrag in diesem Thema.', // The popup text for new posts links
'Username'							=>	'Benutzername',
'Password'							=>	'Passwort',
'Send email'						=>	'Email senden',
'Moderated by'						=>	'Moderiert von',
'Registered table'					=>	'Registriert',
'Subject'							=>	'Titel',
'Start typing'                      =>  'Schreib einfach drauf los...',
'Message'							=>	'Nachricht',
'Topic'								=>	'Thema',
'Forum'								=>	'Forum',
'Posts table'						=>	'Beiträge',
'Replies forum'						=>	'Antworten',
'Page'								=>	'Seite %s',
'BBCode'							=>	'BBCode',
'img tag'							=>	'[img] tag',
'Smilies'							=>	'Smilies',
'and'								=>	'und',
'Image link'						=>	'Bild', // This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'								=>	'schrieb', // For [quote]'s
'Mailer'							=>	'%s Mailer', // As in "MyForums Mailer" in the signature of outgoing emails
'Spacer'							=>	'…', // Ellipsis for paginate

//
// Title
//

'Title'								=>	'Rang',
'Member'							=>	'Benutzer',
'Moderator'							=>	'Moderator',
'Administrator'						=>	'Administrator',
'Banned'							=>	'Gebannt',
'Guest'								=>	'Gast',

//
// Stuff for include/parser.php
//

'BBCode error no opening tag'		=>	'[/%1$s] wurde gefunden ohne ein passendes [%1$s]',
'BBCode error invalid nesting'		=>	'[%1$s] wurde innerhalb von [%2$s] geöffnet, das ist nicht erlaubt',
'BBCode error invalid self-nesting'	=>	'[%s] wurde in sich selbst geöffnet, das ist nicht erlaubt',
'BBCode error no closing tag'		=>	'[%1$s] wurde gefunden ohne ein passendes [/%1$s]',
'BBCode error empty attribute'		=>	'[%s] Tag hat keine Attribute',
'BBCode list size error'			=>	'Deine Liste ist zu lang, bitte mach sie kleiner!',

// Stuff for the navigator (top of every page)

//
// User menu
//

'Support'							=>	'Support',
'Help'								=>	'Hilfe',
'Index'								=>	'Index',
'User list'							=>	'Benutzer',
'Rules'								=>	'Regeln',
'Register'							=>	'Registrieren',
'Registered'						=>	'Registriert seit',
'Login'								=>	'Login',
'Profile'							=>	'Profil',
'Logout'							=>	'Logout',
'Backstage'							=>	'Backstage',
'New posts header'					=>	'Neu',
'Active topics'						=>	'Aktiv',
'Unanswered topics'					=>	'Unbeantwortet',
'Posted topics'						=>	'Posted',
'Show new posts'					=>	'Finde Themen mit neuen Beiträgen seit deinem letzten Besuch.',
'Show active topics'				=>	'Finde Themen mit aktuellen Beiträgen.',
'Show unanswered topics'			=>	'Finde Themen ohne Antworten.',
'Show posted topics'				=>	'Finde Themen, in welchen du geantwortet hast.',
'Mark as read'						=>	'Als gelesen markieren',
'Title separator'					=>	' / ',

//
// Stuff for the page footer
//

'Moderate topic'					=>	'Thema moderieren',
'All'								=>	'Zeige alle Beiträge',
'Move topic'						=>	'Thema verschieben',
'Open topic'						=>	'Thema öffnen',
'Close topic'						=>	'Thema schließen',
'Unstick topic'						=>	'Thema abpinnen',
'Stick topic'						=>	'Thema pinnen',
'Moderate forum'					=>	'Forum moderieren',
'Powered by'						=>	'Ermöglicht dank %s',
'Thanks'							=>	'Danke dass du %s benutzt',

//
// Debug information
//

'Debug table'						=>	'Debug-Information',
'Querytime'							=>	'Generiert in %1$s Sekunden, %2$s queries ausgeführt',
'Memory usage'						=>	'Speicherauslastung: %1$s',
'Peak usage'						=>	'(Spitze: %1$s)',
'Query times'						=>	'Zeit (s)',
'Query'								=>	'Query',
'Total query time'					=>	'Total query time: %s',

//
// First run
//

'First run message'					=>	'Wow, es ist großartig dich hier zu sehen. Willkommen und danke, dass du uns beigetreten bist. Wir haben deinen Account erstellt und du kannst sofort los legen. Gern unterstützen wir dich bei deinen ersten Schritten.',
'Hi there'							=>	'Hallo, %s',
'Welcome to'						=>	'Willkommen auf %s',
'Change your avatar'				=>	'Ändere deinen Avatar',
'Extend profile'					=>	'Vervollständige dein Profil',
'Get help'							=>	'Hier findest du Hilfe',
'Do not show again'					=>	'Nicht noch einmal anzeigen',

//
// For extern.php RSS feed
//

'RSS description'					=>	'Die Top Themen auf %s.',
'RSS description topic'				=>	'Die Top Beiträge auf %s.',
'RSS reply'							=>	'Re: ', // The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'			=>	'RSS Feed aktiver Themen',
'Atom active topics feed'			=>	'Atom Feed aktiver Themen',
'RSS forum feed'					=>	'Foren RSS Feed',
'Atom forum feed'					=>	'Foren Atom Feed',
'RSS topic feed'					=>	'Themen RSS Feed',
'Atom topic feed'					=>	'Themen Atom Feed',

//
// Admin related stuff in the header
//

'New reports'						=>	'Es gibt neue Berichte',
'Maintenance mode enabled'			=>	'Wartungsmodus ist aktiviert!',

//
// Units for file sizes
//

'Size unit B'						=>	'%s B',
'Size unit KiB'						=>	'%s KiB',
'Size unit MiB'						=>	'%s MiB',
'Size unit GiB'						=>	'%s GiB',
'Size unit TiB'						=>	'%s TiB',
'Size unit PiB'						=>	'%s PiB',
'Size unit EiB'						=>	'%s EiB',

//
// Language for installation
//

'Choose install language'		=>	'Wähle die Sprache für die Installation',
'Choose install language info'	=>	'Die Sprache, welche für dieses Installationsskript benutzt wird. Die Standardsprache für das Board selbst kann weiter unten festgelegt werden.',
'Install language'				=>	'Installationssprache',
'Change language'				=>	'Sprache ändern',
'Already installed'				=>	'Es scheint, als wäre ModernBB bereits installiert. Du solltest stattdessen <a href="index.php">hier</a> hin gehen.',
'You are running error'			=>	'You are running %1$s version %2$s. ModernBB %3$s requires at least %1$s %4$s to run properly. You must upgrade your %1$s installation before you can continue.',
'My ModernBB Forum'				=>	'Mein ModernBB Forum',
'Description'					=>	'You can do anything',
'Username 1'					=>	'Benutzernamen müssen mindestens 2 Zeichen lang sein.',
'Username 2'					=>	'Benutzernamen dürfen nicht mehr als 25 Zeichen lang sein.',
'Username 3'					=>	'Der Benutzername guest ist reserviert.', // <--- Wo ist das festgelegt?
'Username 4'					=>	'Benutzernamen können nicht die Form einer IP-Adresse haben.',
'Username 5'					=>	'Benutzernamen können die Zeichen \', " und [ oder ] nicht gleichzeitig beinhalten.',
'Username 6'					=>	'Benutzernamen können keine Formatierungs-Tags (BBCode) beinhalten, welche das Forum nutzt.',
'Short password'				=>	'Das Passwort muss mindestens 6 Zeichen lang sein.',
'Passwords not match'			=>	'Passwörter stimmen nicht überein.',
'Wrong email'					=>	'The administrator email address you entered is invalid.',
'No board title'				=>	'You must enter a board title.',
'Error default language'		=>	'Die gewählte Standardsprache scheint nicht zu existieren.',
'Error default style'			=>	'Der gewählte Style scheint nicht vorhanden zu sein.',
'No DB extensions'				=>	'PHP needs to have support for either MySQL or SQLite to run ModernBB to be installed. Non is available, through.',
'Administrator username'		=>	'Benutzername',
'Administrator password 1'		=>	'Administrator password 1',
'Administrator password 2'		=>	'Administrator password 2',
'Administrator email'			=>	'Email',
'Board title'					=>	'Board Titel',
'Base URL'						=>	'No trailing slash',
'Required field'				=>	'is a required field in this form.',
'ModernBB Installation'			=>	'ModernBB Installation',
'Install'						=>	'Install ModernBB %s',
'Errors'						=>	'The following errors need to be corrected:',
'Database setup'				=>	'Datenbank Setup',
'Select database'				=>	'Wähle deinen Datenbanktyp',
'Info 1'						=>	'What database do you want to use?',
'Database type'					=>	'Typ',
'Info 2'						=>	'Where\'s the server?',
'Info 3'						=>	'The database name',
'Database server hostname'		=>	'Server hostname',
'Database name'					=>	'Name',
'Database enter informations'	=>	'Enter your database username and password',
'Database username'				=>	'Username',
'Info 4'						=>	'Your database username',
'Database password'				=>	'Passwort',
'Info 5'						=>	'Set for more ModernBB installation in this database',
'Table prefix'					=>	'Tabellenprefix',
'Administration setup'			=>	'Administration setup',
'Info 6'						=>	'2 bis 25 Zeichen lang',
'Info 7'						=>	'Mindestens 6 Zeichen lang',
'Confirm password'				=>	'Confirm password',
'Board setup'					=>	'Board setup',
'Board description'				=>	'Board description',
'Appearance'					=>	'Appearance',
'Default language'				=>	'Standardsprache',
'Default style'					=>	'Standardstyle',
'Start install'					=>	'Installation starten',
'DB type not valid'				=>	'\'%s\' is not a valid database type',
'Table prefix error'			=>	'The table prefix \'%s\' contains illegal characters or is too long. The prefix may contain the letters a to z, any numbers and the underscore character. They must however not start with a number. The maximum length is 40 characters. Please choose a different prefix',
'Prefix reserved'				=>	'The table prefix \'sqlite_\' is reserved for use by the SQLite engine. Please choose a different prefix',
'Existing table error'			=>	'A table called \'%susers\' is already present in the database \'%s\'. This could mean that ModernBB is already installed or that another piece of software is installed and is occupying one or more of the table names ModernBB requires. If you want to install multiple copies of ModernBB in the same database, you must choose a different table prefix',
'InnoDB off'					=>	'InnoDB does not seem to be enabled. Please choose a database layer that does not have InnoDB support, or enable InnoDB on your MySQL server',
'Administrators'				=>	'Administratoren',
'Moderators'					=>	'Moderatoren',
'Guests'						=>	'Gäste',
'Members'						=>	'Benutzer',
'New member'					=>	'Neuer Benutzer',
'Maintenance message'			=>	'Die Foren sind vorübergehend im Wartungsmodus. Bitte versuche es später erneut.',
'Alert cache'					=>	'<strong>The cache directory is currently not writable!</strong> In order for ModernBB to function properly, the directory <em>%s</em> must be writable by PHP. Use chmod to set the appropriate directory permissions. If in doubt, chmod to 0777.',
'Alert avatar'					=>	'<strong>The avatar directory is currently not writable!</strong> If you want users to be able to upload their own avatar images you must see to it that the directory <em>%s</em> is writable by PHP. You can later choose to save avatar images in a different directory (see Admin/Options). Use chmod to set the appropriate directory permissions. If in doubt, chmod to 0777.',
'Alert upload'					=>	'<strong>File uploads appear to be disallowed on this server!</strong> If you want users to be able to upload their own avatar images you must enable the file_uploads configuration setting in PHP. Once file uploads have been enabled, avatar uploads can be enabled in Administration/Options/Features.',
'ModernBB has been installed'	=>	'ModernBB installiert. Um die Installation abzuschließen, folge bitte den untenstehenden Anweisungen.',
'Info 8'						=>	'To finalize the installation, you need to click on the button below to download a file called config.php. You then need to upload this file to the root directory of your ModernBB installation.',
'Info 9'						=>	'Once you have uploaded config.php, ModernBB will be fully installed! At that point, you may <a href="index.php">go to the forum index</a>.',
'Download config.php file'		=>	'Download config.php file',
'ModernBB fully installed'		=>	'ModernBB has been fully installed! You may now <a href="index.php">go to the forum index</a>.',

//
// Language for updating
//

'Update ModernBB'				=>	'Aktualisiere ModernBB',
'Down'							=>	'Die Foren sind kurzzeitig aufgrund von Wartungsarbeiten geschlossen. Bitte versuche es in ein paar Minuten noch einmal.',

'Version mismatch error'		=>	'Version mismatch. The database \'%s\' doesn\'t seem to be running a ModernBB database schema supported by this update script.',
'No update error'				=>	'Das Forum ist bereits auf dem neuesten Stand.',

'Start update'					=>	'Starte Aktualisierung',
'Correct errors'				=>	'Die folgenden Fehler müssen behoben werden:',
'Successfully updated'			=>	'Deine Forendatenbank wurde erfolgreich aktualisiert. Du möchtest vielleicht %s.',
'go to index'					=>	'zurück zum Forumindex',

'Preparsing item'				=>	'Preparsing %1$s %2$s …',
'Rebuilding index item'			=>	'Rebuilding index for %1$s %2$s',

'post'							=>	'Beitrag',
'topic'							=>	'Thema',
'signature'						=>	'Signatur',

// Language for frontend

//
// Language for delete.php
//

'Delete post'			=>	'Lösche Beitrag',
'Topic warning'			=>	'Warnung! Dies ist der erste Beitrag in diesem Thema, das gesamte Thema wird unwiderruflich gelöscht.',
'Delete info'			=>	'The post you have chosen to delete is set out below for you to review before proceeding.',
'Reply by'				=>	'Antwort von %s - %s',
'Topic by'				=>	'Thema gestartet von %s - %s',
'Delete'				=>	'Löschen',

//
// Language for help.php
//

'produces'				=>	'wird zu',

'BBCode info'			=>	'BBCode is a collection of tags that are used to change the look of text in this forum. Below you can find all the available BBCodes and how to use them. Administrators have the ability to disable BBCode. You can tell if BBCode is disabled whenever you post a message or edit your signature.',

'Text style'			=>	'Textformatierung',
'Text style info'		=>	'Die folgenden Tags verändern die Darstellung des Textes:',
'Bold text'				=>	'Fetter Text',
'Underlined text'		=>	'Unterstrichener Text',
'Italic text'			=>	'Kursiver Text',
'Strike-through text'	=>	'Durchgestrichener Text',
'Red text'				=>	'Roter Text',
'Blue text'				=>	'Blauer Text',
'Heading text'			=>	'Überschrift',
'Inserted text'			=>	'Inserted text',
'Sub text'				=>	'Unterstellter Text',
'Sup text'				=>	'Überstellter Text',

'Multimedia'			=>  'Multimedia',
'Links info'			=>	'You can create links to other documents or to email addresses using the following tags:',
'My email address'		=>	'Meine Emailaddresse',
'Images info'			=>	'If you want to display an image you can use the img tag. The text appearing after the "=" sign in the opening tag is used for the alt attribute and should be included whenever possible.',
'ModernBB bbcode test'  =>  'ModernBB BBCode Test',
'Video info'			=>  'ModernBB supports embedding from DailyMotion, Vimeo and YouTube. With the BBCode below, you can embed one of those services videos.',
'Video link'			=>  'Put the link to the video here', 

'Quotes'				=>	'Zitate',
'Quotes info'			=>	'Wenn du jemanden zitieren möchtest, wähle den Zitat-Tag aus.',
'Quotes info 2'			=>	'If you don\'t want to quote anyone in particular, you can use the quote tag without specifying a name. If a username contains the characters [ or ] you can enclose it in quote marks.',
'Quote text'			=>	'Das ist der Text, den ich zitieren möchte.',
'produces quote box'	=>	'produces a quote box like this:',

'Code'					=>	'Code',
'Code info'				=>	'When displaying source code you should make sure that you use the code tag. Text displayed with the code tag will use a monospaced font and will not be affected by other tags.',
'Code text'				=>	'This is some code.',
'produces code box'		=>	'produces a code box like this:',

'Lists'					=>	'Listen',
'List info'				=>	'To create a list you can use the list tag. You can create 2 types of lists using the list tag.',
'List text 1'			=>	'Example list item 1.',
'List text 2'			=>	'Example list item 2.',
'List text 3'			=>	'Example list item 3.',
'produces list'			=>	'produces a bulleted list.',
'produces decimal list'	=>	'produces a numbered list.',

'Bold'					=>	'Fett',
'Underline'				=>	'Unterstrichen',
'Italic'				=>	'Kursiv',
'Strike'				=>	'Gestrichen',
'URL'					=>	'URL',
'List'					=>	'Liste',
'List item'				=>	'Listenpunkt',
'Heading'				=>	'Überschrift',
'Inline code'			=>	'Code in Zeile',
'Superscript'			=>	'Überstellt',
'Subscript'				=>	'Unterstellt',
'Video'					=>	'Video',
'Image'					=>	'Bild',

'Smilies info'			=>	'Wenn dies aktiviert ist, können Smilies zu Icons konvertiert werden. Die folgenden Smilies kannst du benutzen:',

'General use'					=>	'General use',
'General use info'				=>	'Erklärt einige der Grundlagen, wie man mit der Forensoftware arbeitet.',
'Forums and topics'				=>	'Forums and topics',
'Labels question'				=>	'What do the labels in front of topic titles mean?',
'Labels info'					=>	'You\'ll see that some of the topics are labeled, different labels have different meanings.',
'Label'							=>	'Label',
'Explanation'					=>	'Erklärung',
'Sticky explanation'			=>	'Sticky topics are usually important topics which you should read. It\'s worth it to take a look there.',
'Closed explanation'			=>	'When a you see a closed label, it means you can\'t post on that topic any more, unless you have a permission that overwrites this. The topic is still available to read, through.',
'Moved explanation'				=>	'This topic has been moved to another forum. Admins and moderators can choose to show this notification, or simply not show it. The original forum where this topic was located in, won\'t show any topic stats anymore.',
'Star'							=>	'Star',
'Star explanation'				=>	'You\'re following this topic, they will show up in you\'re subscription list.',
'Posted explanation'			=>	'This label means you have made a post in this topic.',
'Content question'				=>	'Warum sind Smilies, Signaturen, Avatare und Bilder nicht sichtbar?',
'Content answer'				=>	'Du kannst das Verhalten der Themenansicht in deinen Profileinstellungen ändern. Dort kannst du Smilies, Signaturen, Avatare und Bilder in Posts einstellen, aber sie sollten standardmäßig aktiviert sein. Es sei denn der Forum-Admin hat diese Funktionen deaktiviert. Du kannst unter dem Editor sehen, ob Bilder und Smilies deaktiviert sind. Wenn die Etiketten einen roten Hintergrund haben, stehen diese nicht zur Verfügung.',
'Topics question'				=>	'Warum kann ich keine Themen oder Foren sehen?',
'Topics answer'					=>	'You might not have the correct permissions to do so, ask the forum administrator for more help.',
'Profile question'				=>	'Warum kann ich keine Profile sehen?',
'Profile answer'				=>	'You might not have the correct permissions to do so, ask the forum administrator for more help.',
'Information question'			=>	'My profile doesn\'t contain as much as others?',
'Information answer'			=>	'You\'re profile will only display fields that are enabled and filled in on your profile personality page. You might want to see if you missed some fields.',
'Advanced search question'		=>	'Are there more options to search?',
'Advanced search answer'		=>	'When you go to the search page, you\'ll find yourself on a page with 1 search box. Below that search box there is a link to Advanced search, here you can find more search options! This feature may not be available on your device, if disabled by the forum admin.',
'More search question'			=>	'Why can\'t search in more then 1 forum at once?',
'More search answer'			=>	'You might not have the correct permissions to do so, ask the forums administrator for more help.',
'Moderating'					=>	'Moderating',
'Moderating info'				=>	'Admins and moderators need help sometimes, too! The basics of moderating are explained here.',
'Moderate forum question'		=>	'Wie kann ich ein Forum moderieren?',
'Moderate forum answer'			=>	'The moderation options are available at the bottom of the page. Those features aren\'t available for all moderators. When you click this button, you will be send to a page where you can manage the current forum. From there, you can move, delete, merge, close and open multiple topics at once.',
'Moderate topic question'		=>	'How do I moderate a topic?',
'Moderate topic answer 1'		=>	'The moderation options are available at the bottom of the page. Those features aren\'t available for all moderators. When you click this button, you will be send to a page where you can manage the current topic. From there, you can select multiple post to delete or split from the current topic at once.',
'Moderate topic answer 2'		=>	'Next to the "Moderate topic" button, you can find options to move, open or close the topic. You can also make it a sticky topic from there, or unstick it.',
'Moderate user question'		=>	'How do I moderate an user?',
'Moderate user answer 1'		=>	'Moderating options are available in the users profile. You can find the moderation options under "Administration" in the users profile menu. Those features aren\'t available for all moderators.',
'Moderate user answer 2'		=>	'The Administration page allow you to check if the user has an admin note, and you can also change that note if required. You can also change the post count of the user. At this page, the user can also be given moderator permissions on a per-forum base, through the user must have a moderator account to be able to actually use those permissions.',
'Moderate user answer 3'		=>	'Finally, you can ban or delete a user from his profile. If you want to ban and/or delete multiple users at once, you\'re probably better off with the advanced user management features in the Backstage.',

//
// Language for index.php
//

'Topics'		=>	'Themen',
'Link to'		=>	'Link zu:', // As in "Link to: http://modernbb.be/"
'Empty board'	=>	'Board ist leer.',
'Newest user'	=>	'Neuster Benutzer: %s',
'Users online'	=>	'Benutzer online: %s',
'Guests online'	=>	'Gäste online: %s',
'No of users'	=>	'Benutzeranzahl: %s',
'No of topics'	=>	'Themenanzahl: %s',
'No of post'	=>	'Beitragsanzahl: %s',
'Online'		=>	'Online:', // As in "Online: User A, User B etc."
'Board stats'	=>	'Board Statistiken',

//
// Language for login.php
//

'Wrong user/pass'			=>	'Falscher Benutzername und/oder Passwort.',
'Forgotten pass'			=>	'Passwort vergessen',
'No email match'			=>	'Es gibt keinen Benutzer mit dieser Emailadresse',
'Request pass'				=>	'Neues Passwort anfordern',
'Remember me'				=>	'An mich erinnern',
'New password errors'		=>	'Passwort-Anforderung fehlgeschlagen',
'New passworderrors info'	=>	'Die folgenden Fehler müssen behoben werden, bevor ein neues Passwort gesendet werden kann:',

'Forget mail'				=>	'Eine Email wurde an diese Adresse gesendet. Mit den darin enthaltenen Instruktionen kannst du dein Passwort ändern. Wenn die Email nicht angekommen ist, kontaktiere bitte den Administrator via',
'Password request flood'	=>  'Für dieses Konto wurde bereits ein Passwort-Reset in der letzten Stunde angefordert. Bitte warte %s Minuten, bevor du eine neue Anfrage schickst.',

//
// Send email
//

'Form email disabled'			=>	'The user you are trying to send an email to has disabled form email.',
'No email subject'				=>	'Du musst einen Betreff eingeben.',
'No email message'				=>	'Du musst eine Nachricht eingeben.',
'Too long email message'		=>	'Nachrichten können nicht länger als 65535 Zeichen (64 KB) sein.',
'Email flood'					=>  'Mindestens %s Sekunden müssen zwischen dem Versenden von Emails liegen. Bitte warte %s Sekunden und versuche es noch einmal.',
'Send email to'					=>	'Email senden an',

//
// Report
//

'No reason'						=>	'Du musst einen Grund angeben.',
'Reason too long'				=>	'Deine Nachricht muss kleiner sein als 65535 bytes (~64kb).',
'Report flood'					=>  'Mindestens %s Sekunden müssen zwischen dem Einreichen von Meldungen liegen. Bitte warte %s Sekunden und versuche es noch einmal.',
'Report post'					=>	'Beitrag melden',
'Reason'						=>	'Grund',
'Reason desc'					=>	'Bitte gib einen kurzen Grund ein, warum du diesen Beitrag melden möchtest.',

//
// Subscriptions
//

'Not subscribed topic'			=>	'Du hast dieses Thema nicht abonniert.',

//
// General forum and topic moderation
//

'Moderate'						=>	'Moderieren',
'Select'						=>	'Auswählen', // the header of a column of checkboxes
'Move'							=>	'Verschieben',
'Split'							=>	'Splitten',
'Merge'							=>	'Zusammenführen',

//
// Moderate forum
//

'Open'							=>	'Öffnen',
'Close'							=>	'Schließen',
'Move topics'					=>	'Verschiebe Themen',
'Move to'						=>	'Verschiebe nach',
'Nowhere to move'				=>	'Es gibt keine Foren, in welche du Themen verschieben kannst.',
'Leave redirect'				=>	'Leave redirect topic(s)',
'Delete topics'					=>	'Lösche Themen',
'Delete topics comply'			=>	'Bist du dir sicher, dass du die ausgewählten Themen löschen möchtest?',
'No topics selected'			=>	'Du musst mindestens ein Thema zum Verschieben/Löschen/Öffnen/Schließen auswählen.',
'Not enough topics selected'	=>	'Du musst mindestens zwei Themen zum Zusammenführen auswählen.',
'Merge topics'					=>	'Themen zusammenführen',
'New subject'					=>	'Neuer Titel',

//
// Split multiple posts in topic
//

'Split posts'					=>	'Beiträge splitten',

//
// Delete multiple posts in topic
//

'Delete posts'					=>	'Lösche Beiträge',
'Cannot select first'			=>	'Der erste Beitrag kann nicht gesplittet/gelöscht werden.',
'Delete posts comply'			=>	'Bist du dir sicher, dass du die ausgewählten Beiträge löschen möchtest?',
'No posts selected'				=>	'Du musst mindestens einen Beitrag zum Splitten/Löschen auswählen.',

//
// Get host
//

'Host info 1'					=>	'Die IP-Addresse ist: %s',
'Host info 2'					=>	'Der Hostname ist: %s',
'Show more users'				=>	'Zeige mehr Benutzer für diese IP',

//
// Language for post.php and edit.php
// Post validation stuff (many are similiar to those in edit.php)
//

'No subject'		=>	'Themen müssen einen Titel haben.',
'No subject after censoring'	=>	'Topics must contain a subject. After applying censoring filters, your subject was empty.',
'Too long subject'	=>	'Subjects cannot be longer than 70 characters.',
'No message'		=>	'Du musst eine Nachricht eingeben.',
'No message after censoring'	=>	'You must enter a message. After applying censoring filters, your message was empty.',
'Too long message'	=>	'Posts dürfen nicht größer als %s Bytes sein.',
'All caps subject'	=>	'Subjects cannot contain only capital letters.',
'All caps message'	=>	'Posts cannot contain only capital letters.',
'Empty after strip'	=>	'It seems your post consisted of empty BBCodes only. It is possible that this happened because e.g. the innermost quote was discarded because of the maximum quote depth level.',

//
// Posting
//

'Post errors'		=>	'Beitragsfehler',
'Post preview'		=>	'Beitragsvorschau',
'Guest name'		=>	'Name', // For guests (instead of Username)
'Post a reply'		=>	'Antworten',
'Post new topic'	=>	'Thema erstellen',
'Hide smilies'		=>	'Zeige keine Icons für Smileys in diesem Post',
'Subscribe topic'	=>	'Abonniere dieses Thema',
'Stay subscribed'	=>	'Stay subscribed to this topic',
'Topic review'		=>	'Topic review (newest first)',
'Flood start'		=>  'Mindestens %s Sekunden müssen zwischen dem Posten liegen. Bitte warte %s Sekunden und versuche es noch einmal.',
'Preview'			=>	'Vorschau',

//
// Edit post
//

'Silent edit'		=>	'Stiller Edit (zeigt nicht "Editiert von..." in der Themenansicht)',
'Edit post'			=>	'Beitrag editieren',

//
// Language for both profile.php and register.php
//

'Email legend'				=>	'Gib eine korrekte Emailadresse ein',
'Time zone'					=>	'Zeitzone',
'DST'						=>	'Advance time by 1 hour for daylight saving.',
'Time format'				=>	'Zeitformat',
'Date format'				=>	'Datumsformat',
'Default'					=>	'Standard',
'Language'					=>	'Sprache',
'Email setting info'		=>	'Email-Einstellungen',
'Email setting 1'			=>	'Zeige deine Emailadresse',
'Email setting 2'			=>	'Verberge deine Emailadresse, aber erlaube anderen Mitgliedern dir eine Mail über das Email-Formular zu schreiben.',
'Email setting 3'			=>	'Verberge deine Emailadresse und lasse auch keine Mails über das Email-Formular zu.',

'Username too short'		=>	'Benutzernamen müssen mindestens 2 Zeichen lang sein. Bitte suche dir einen anderen (längeren) Namen aus.',
'Username too long'			=>	'Benutzernamen dürfen nicht länger als 25 Zeichen sein. Bitte suche dir einen anderen (kürzeren) Namen aus.',
'Username guest'			=>	'The username guest is reserved. Please choose another username.',
'Username IP'				=>	'Usernames may not be in the form of an IP address. Please choose another username.',
'Username reserved chars'	=>	'Usernames may not contain all the characters \', " and [ or ] at once. Please choose another username.',
'Username BBCode'			=>	'Usernames may not contain any of the text formatting tags (BBCode) that the forum uses. Please choose another username.',
'Banned username'			=>	'The username you entered is banned in this forum. Please choose another username.',
'Pass too short'			=>	'Passwörter müssen mindestens 6 Zeichen lang sein. Bitte suche dir ein anderes (längeres) Passwort aus.',
'Pass not match'			=>	'Passwörter stimmen nicht überein.',
'Banned email'				=>	'Die eingegebene Emailadresse ist aus diesem Forum gebannt. Bitte gib eine andere Emailadresse ein.',
'Dupe email'				=>	'Signaturen dürfen nicht länger als %1$s Zeichen sein. Bitte reduziere sie um %2$s Zeichen.',
'Sig too long'				=>	'Signaturen dürfen nicht länger als %s Zeilen sein.',
'Sig too many lines'		=>	'Signaturen dürfen nicht länger als %s Zeilen sein.',
'Bad ICQ'					=>	'You entered an invalid ICQ UIN. Please go back and correct.',

//
// Language for profile.php
//

'Section personality'			=>	'Persönliches',
'Section admin'					=>	'Administration',

//
// Miscellaneous
//

'Personal details legend'		=>	'Kontaktdetails',
'User tools'					=>	'Benutzertools',
'Unknown'          				=>  'Unbekannt',

//
// Password stuff
//

'Pass key bad'					=>	'The specified password activation key was incorrect or has expired. Please re-request a new password. If that fails, contact the forum administrator at',
'Pass updated'					=>	'Dein Password wurde aktualisiert. Du kannst dich ab jetzt mit deinem neuen Passwort einloggen.',
'Wrong pass'					=>	'Das alte Passwort ist falsch.',
'Change pass'					=>	'Passwort ändern',
'Old pass'						=>	'Altes Passwort',
'New pass'						=>	'Neues Passwort',
'Confirm new pass'				=>	'Bestätige neues Passwort',
'Pass info'						=>	'Passwörter müssen mindestens 6 Zeichen lang sein sowie Groß- und Kleinschreibung beinhalten.',

//
// Email stuff
//

'Email key bad'					=>	'The specified email activation key was incorrect or has expired. Please re-request change of email address. If that fails, contact the forum administrator at',
'Email updated'					=>	'Deine Emailadresse wurde aktualisiert.',
'Activate email sent'			=>	'Eine Email wurde an die Emailadresse gesendet. Mit den darin enthaltenen Instruktionen kannst du deine neue Emailadresse aktivieren. Wenn dich keine Email erreicht hat, kontaktiere bitte den Administrator via',
'Email instructions'			=>	'Eine Email mit dem Aktivierungslink werden an deine neue Emailadresse gesendet. Du musst auf den Link klicken, um deine neue Emailadresse zu aktivieren.',
'Change email'					=>	'Ändere Emailadresse',
'New email'						=>	'Neue Email',

//
// Avatar upload stuff
//

'Avatars disabled'				=>	'The administrator has disabled avatar support.',
'Too large ini'					=>	'Die gewählte Datei war zu groß für den Upload. Der Server hat den Upload nicht genehmigt.',
'Partial upload'				=>	'Die gewählte Datei wurde nur teilweise hochgeladen. Bitte versuche es nochmal.',
'No tmp directory'				=>	'PHP was unable to save the uploaded file to a temporary location.',
'No file'						=>	'Du hast noch keine Datei für den Upload gewählt.',
'Bad type'						=>	'Die Datei, die du hochladen wolltest, ist ein nicht-genehmigter Typ. Die genehmigten Typen sind gif, jpeg und png.',
'Too wide or high'				=>	'Die Datei, die du hochladen wolltest, ist breiter und/oder höher als erlaubt.',
'Too large'						=>	'Die Datei, die du hochladen wolltest, ist größer als erlaubt.',
'pixels'						=>	'Pixel',
'bytes'							=>	'Bytes',
'Move failed'					=>	'Der Server konnte die hochgeladene Datei nicht speichern. Bitte kontaktiere den Forenadministrator via',
'Unknown failure'				=>	'Ein unbekannter Fehler ist aufgetreten. Bitte versuche es noch einmal.',
'Avatar desc'					=>	'Ein Avatar ist ein kleines Bild, welches in deinen Beiträgen unterhalb deines Benutzernamens angezeigt wird. Es darf nicht größer sein als',
'Upload avatar'					=>	'Avatar hochladen',
'Delete avatar'					=>	'Lösche Avatar', // only for admins
'File'							=>	'Datei',
'Upload'						=>	'Hochladen', // submit button

//
// Form validation stuff
//

'Forbidden title'				=>	'Der Titel, den du eingegeben hast, enthält ein verbotenes Wort. Bitte wähle einen anderen Titel.',

//
// Profile display stuff
//

'Email info'					=>	'Email: %s',
'Last visit info'				=>	'Letzter Besuch',
'Show posts'					=>	'Zeige Beiträge',
'Show topics'					=>	'Zeige Themen',
'Show subscriptions'			=>	'Zeige Abonnements',
'Contact'						=>	'Kontakt',
'Realname'						=>	'Echtname',
'Location'						=>	'Ort',
'Website'						=>	'Webseite',
'Invalid website URL'			=>	'Die Webseiten-URL, welche du eingegeben hast, ist inkorrekt.',
'Microsoft'						=>	'Microsoft Account',
'Facebook'						=>	'Facebook',
'Twitter'						=>	'Twitter',
'Google+'						=>	'Google+',
'Avatar'						=>	'Avatar',
'Sig max size'					=>	'Maximale Länge: %s Zeichen / Maximale Zeilen: %s',
'Avatar info'					=>	'Ein Avatar ist ein kleines Bild, welches neben all deinen Beiträgen angezeigt wird. Du kannst einen Avatar hochladen, indem du den nachstehenden Link klickst.',
'Change avatar'					=>	'Avatar ändern',
'Signature info'				=>	'Eine Signatur ist ein kleiner Textschnipsel, welcher an deine Beiträge angehängt wird. In dieser kannst du so ziemlich alles eingeben, was du magst.',
'Sig preview'					=>	'Vorschau der derzeitigen Signatur:',
'No sig'						=>	'Derzeit ist keine Signatur für dieses Profil gespeichert.',
'Signature quote/code/list/h'	=>	'The quote, code, list, and heading BBCodes are not allowed in signatures.',
'Posts per page'				=>	'Beiträge pro Seite',
'Topics per page'				=>	'Themen pro Seite',
'Leave blank'					=>	'Freilassen, um den Standardrang zu verwenden',
'Notify full'					=>	'Hinweisemails zu Abonnements sollen eine Textversion des neuen Beitrages enthalten.',
'Auto notify full'				=>	'Automatisch jedes Thema, in welchem du Beiträge verfasst hast, abonnieren.',
'Show smilies'					=>	'Ersetze Smilies durch grafische Icons.',
'Show images'					=>	'Zeige Bilder in Beiträgen an.',
'Show images sigs'				=>	'Zeige Bilder in Benutzersignaturen an.',
'Show avatars'					=>	'Zeige Avatare in Beiträgen an.',
'Show sigs'						=>	'Zeige Benutzersignaturen an.',
'Style'							=>	'Style',
'Backstage Accent'				=>	'Backstage-Farbe',
'Admin note'					=>	'Notiz des Administators',
'Post display'					=>	'Beitragsansicht',

//
// Administration stuff
//

'Group membership legend'		=>	'Benutzergruppe wählen',
'Save'							=>	'Speichern',
'Set mods legend'				=>	'Set moderator access',
'Moderator in info'				=>	'Choose which forums this user should be allowed to moderate. Note: This only applies to moderators. Administrators always have full permissions in all forums.',
'Update forums'					=>	'Update forums',
'Delete ban legend'				=>	'Delete or ban user',
'Delete user'					=>	'Delete user',
'Ban user'						=>	'Ban user',
'Confirm delete user'			=>	'Confirm delete user',
'Confirmation info'				=>	'Please confirm that you want to delete the user', // the username will be appended to this string
'Delete warning'				=>	'Warning! Deleted users and/or posts cannot be restored. If you choose not to delete the posts made by this user, the posts can only be deleted manually at a later time.',
'Delete all posts'				=>	'Delete any posts and topics this user has made',
'No delete admin message'		=>	'Administrators cannot be deleted. In order to delete this user, you must first move him/her to a different user group.',

//
// Language for register.php
//

'No new regs'				=>	'Dieses Forum akzeptiert keine neuen Registrierungen.',
'Forum rules'				=>	'Forumregeln',
'Rules legend'				=>	'Du müsstest den folgenden Bedingungen zustimmen, um dich zu registrieren.',
'Registration flood'		=>	'Ein neuer Benutzer wurde innerhalb der letzten Stunde mit der gleichen IP-Adresse registriert. Um registration flooding zu verhindern, muss mindestens eine Stunde zwischen Registrierungen der selben IP Adresse liegen. Entschuldige für die Unannehmlichkeiten.',
'Agree'						=>	'Akzeptieren',
'Cancel'					=>	'Abbrechen',
'Register legend'			=>	'Gib die benötigten Daten ein',

//
// Form validation stuff (some of these are also used in post.php)
//

'Registration errors'		=>	'Es gab Fehler bei der Registrierung.',
'Username censor'			=>	'Dieser Benutzername enthält zensierte Wörter. Bitte gib einen anderen Namen ein.',
'Username dupe 1'			=>	'Es existiert bereits ein Benutzer mit diesem Namen.',
'Username dupe 2'			=>	'The username you entered is too similar. The username must differ from that by at least one alphanumerical character (a-z or 0-9). Please choose a different username.',
'Email not match'			=>	'Die Emailadressen stimmen nicht überein.',

//
// Registration email stuff
//

'Reg email'					=>	'Danke für deine Registrierung. Dein Passwort wurde an die angegebene Emailadresse gesendet. Wenn die Email nicht angekommen ist, kontaktiere bitte den Administrator via',

//
// Register info
//

'Username legend'			=>	'Gib bitte einen Benutzernamen ein, der zwischen 2 und 25 Zeichen lang ist.',
'Email help info'			=>	'Dein Passwort wird an diese Emailadresse gesendet. Bitte überprüfe, ob diese gültig ist.',
'If human'					=>	'Wenn du ein Mensch bist, dann lass dieses Feld leer!',
'Spam catch'				=>	'Unfortunately it looks like your request is spam. If you feel this is a mistake, please direct any inquiries to the forum administrator at',

//
// Language for search.php
//

'User search'						=>	'Benutzersuche',
'No search permission'				=>	'You do not have permission to use the search feature.',
'Search flood'						=>  'At least %s seconds have to pass between searches. Please wait %s seconds and try searching again.',
'Search criteria legend'			=>	'Gib deine Suchkriterien ein',
'Search info'						=>	'To search by keyword, enter a term or terms to search for. Separate terms with spaces. Use AND, OR and NOT to refine your search. To search by author enter the username of the author whose posts you wish to search for. Use wildcard character * for partial matches.',
'Keyword search'					=>	'Stichwortsuche',
'Author search'						=>	'Autorensuche',
'All forums'						=>	'Alle Foren',
'Search in'							=>	'Suche in',
'Message and subject'				=>	'Message text and topic subject',
'Message only'						=>	'Message text only',
'Topic only'						=>	'Topic subject only',
'Sort by'							=>	'Sortiert nach',
'Sort order'						=>	'Sortierreihenfolge',
'Search results info'				=>	'You can choose how you wish to sort and show your results.',
'Sort by post time'					=>	'Post time',
'Sort by author'					=>	'Autor',
'Ascending'							=>	'Aufsteigend',
'Descending'						=>	'Absteigend',
'Show as'							=>	'Show as',
'Show as posts'						=>	'Beiträge',
'Advanced search'					=>	'Erweiterte Suche',

//
// Results
//

'Search results'					=>	'Suchergebnisse',
'Quick search show_new'				=>	'Neu',
'Quick search show_recent'			=>	'Aktiv',
'Quick search show_unanswered'		=>	'Unbeantwortet',
'Quick search show_user_topics'		=>	'Themen von %s',
'Quick search show_user_posts'		=>	'Beiträge von %s',
'Quick search show_subscriptions'	=>	'Abonnements von %s',
'By keywords show as topics'		=>	'Themen mit Beiträgen welche \'%s\' enthalten',
'By keywords show as posts'			=>	'Beiträge welche \'%s\' enthalten',
'By user show as topics'			=>	'Themen mit Beiträgen von %s',
'By user show as posts'				=>	'Beiträge von %s',
'By both show as topics'			=>	'Themen mit Beiträgen von %s, welche \'%s\' enthalten',
'By both show as posts'				=>	'Beiträge, con %s, welche \'%s\' enthalten',
'No terms'							=>	'Du musst mindestens ein Wort oder einen Autor eingeben, um eine Suche zu starten.',
'No hits'							=>	'Deine Suche hat keine Treffer ergeben.',
'No user posts'						=>	'Es gibt in diesem Forum keine Beiträge dieses Benutzers.',
'No user topics'					=>	'Es gibt in diesem Forum keine Themen dieses Benutzers.',
'No subscriptions'					=>	'Dieser Benutzer hat derzeit keine Themen abonniert.',
'No new posts'						=>	'Es gibt keine neuen Themen mit neuen Beiträgen seit deinem letzten Besuch.',
'No recent posts'					=>	'Es wurden in den letzten 24 Stunden keine neuen Beiträge erstellt.',
'No unanswered'						=>	'Es gibt keine unbeantworteten Beiträge in diesem Forum.',
'Go to post'						=>	'Gehe zum Beitrag',
'Go to topic'						=>	'Gehe zum Thema',

//
// Language for viewtopic.php
//

'Post reply'		=>	'Antworten',
'Topic closed'		=>	'Thema geschlossen',
'From'				=>	'Ort:', // User location
'IP address logged'	=>	'IP log',
'Note'				=>	'Notiz:', // Admin note
'Posts'				=>	'Beiträge:',
'Replies'			=>	'Antworten:',
'Last edit'			=>	'Zuletzt editiert von',
'Report'			=>	'Melden',
'Edit'				=>	'Editieren',
'Quote'				=>	'Zitieren',
'Is subscribed'		=>	'Erfolgreich abonniert',
'Unsubscribe'		=>	'Deabonnieren',
'Subscribe'			=>	'Abonnieren',
'Quick post'		=>	'Schnellantwort',
'New icon'			=>	'Neuer Beitrag',
'Re'				=>	'Re:',

//
// Language for userlist.php
//

'User search info'	=>	'Enter a username to search for and/or a user group to filter by. Use the wildcard character * for partial matches.',
'User group'		=>	'Benutzergruppe',
'No of posts'		=>	'Beitragsanzahl',
'All users'			=>	'Alle Benutzer',

//
// Language for viewforum.php
//

'Views'			=>	'Angesehen',
'Moved'			=>	'Verschoben',
'Star'			=>	'Stern',
'Sticky'		=>	'Gepinnt',
'Closed'		=>	'Geschlossen',
'Empty forum'	=>	'Forum ist leer.',

//
// Language for Backstage
// Language for backstage.php
//

'Update settings head'		=>	'Update Einstellungen',
'Index update check'		=>	'Check for updates every time the Backstage index is visited, if disabled, you won\'t see update notifications.',

//
// Language for bans.php
//

'No user message'			=>	'No user by that username registered. If you want to add a ban not tied to a specific username just leave the username blank.',
'No user ID message'		=>	'No user by that ID registered.',
'User is admin message'		=>	'The user %s is an administrator and can\'t be banned. If you want to ban an administrator, you must first demote him/her.',
'User is mod message'		=>	'Der Benutzer %s ist ein Moderator und kann somit nicht verbannt werden. Wenn du einen Moderator verbannen willst, musst du ihn zuerst degradieren.',
'Must enter message'		=>	'You must enter either a username, an IP address or an email address (at least).',
'Cannot ban guest message'	=>	'Ein Gast kann nicht verbannt werden.',
'Invalid IP message'		=>	'You entered an invalid IP/IP-range.',
'Invalid e-mail message'	=>	'Die Emailadresse (z.B. user@domain.com) oder Teile der Domain (z.B. domain.com), die du eingegeben hast, sind ungültig.',
'Invalid date message'		=>	'You entered an invalid expire date.',
'Invalid date reasons'		=>	'Das Datumsformat ist JJJJ-MM-TT aund das Datum muss mindestens einen Tag in der Zukunft liegen.',

'New ban head'				=>	'Add ban',
'Username help'				=>	'The username to ban',
'Username advanced help'	=>	'The username you want to ban. If you want to ban a specific IP/IP-range or email, leave it blank.',

'Ban search head'			=>	'Ban search',
'Ban search info'			=>	'Search for bans in the database. You can enter one or more terms to search for. Wildcards in the form of asterisks (*) are accepted. To show all bans leave all fields empty.',
'Date help'					=>	'(yyyy-mm-dd)',
'Expire after label'		=>	'Expire after',
'Expire before label'		=>	'Expire before',
'Order by label'			=>	'Order by',
'Order by ip'				=>	'IP',
'Order by expire'			=>	'Expire date',
'Submit search'				=>	'Submit search',

'E-mail help'				=>	'The email or email domain you wish to ban',
'IP label'					=>	'IP address/IP-ranges',
'IP help'					=>	'The IP you wish to ban, separate addresses with spaces',
'IP help link'				=>	'Click %s to see IP statistics for this user.',
'Ban advanced head'			=>	'Advanced ban settings',
'Ban advanced subhead'		=>	'Supplement ban with IP and email',
'Ban message label'			=>	'Ban message',
'Ban message help'			=>	'A message for banned users',
'Message expiry subhead'	=>	'Ban message and expiry',
'Expire date label'			=>	'Expire date',
'Expire date help'			=>	'When does the ban expire, blank for manually',

'Results head'				=>	'Search Results',
'Results IP address head'	=>	'IP/IP-ranges',
'Results expire head'		=>	'Expires',
'Results banned by head'	=>	'Banned by',
'No match'					=>	'No match',

//
// Language for board.php
//

'Must enter name message'		=>	'Du musst einen Namen eingeben.',
'Confirm delete cat head'		=>	'Confirm delete category',
'Confirm delete cat info'		=>	'Willst du die Kategorie <strong>%s</strong> wirklich löschen?',
'Delete category warn'			=>	'Das Löschen einer Kategorie bedeutet, dass auch alle darin enthaltenen Foren und Beiträge (falls es denn welche gibt) gelöscht werden!',
'Must enter integer message'	=>	'Position must be a positive integer value.',
'Add categories head'			=>	'Kategorie hinzufügen',
'Delete categories head'		=>	'Kategorie löschen',
'Edit categories head'			=>	'Kategorie editieren',
'Category position label'		=>	'Position',
'Category name label'			=>	'Name',

//
// Language fox censoring.php
//

'Must enter word message'	=>	'You must enter a word to censor.',
'Add word subhead'			=>	'Wort hinzufügen',
'Add word info'				=>	'Enter a word that you want to censor and the replacement text for this word. Wildcards are accepted (i.e. *some* would match somewhere and lonesome). Censor words also affect usernames. New users will not be able to register with usernames containing any censored words. The search is case insensitive.',
'Censoring enabled'			=>	'<strong>Censoring is enabled in %s.</strong>',
'Censoring disabled'		=>	'<strong>Censoring is disabled in %s.</strong>',
'Censored word label'		=>	'Zensiertes Wort',
'Replacement label'			=>	'Replacement word(s)',
'Edit remove words'			=>	'Wörter bearbeiten oder entfernen',
'No words in list'			=>	'No censor words in list.',

//
// Language fox database.php
//

'Backup options'		=>	'Backup Optionen',
'Backup type'			=>	'Backup Typ',
'Full'					=>	'Voll',
'Structure only'		=>	'Nur die Struktur',
'Data only'				=>	'Nur die Daten',
'Gzip compression'		=>	'Gzip Kompression',
'Start backup'			=>	'Backup starten',

'Backup info 1'			=>	'If your server supports it, you may also gzip-compress the file to reduce its size.',

'Restore complete'		=>	'Restore complete',
'Restore options'		=>	'Wiederherstellungsoptionen',
'Start restore'			=>	'Wiederherstellung starten',

'Restore info 1'		=>	'This will perform a full restore of all ModernBB tables from a saved file. If your server supports it, you may upload a gzip-compressed text file and it will automatically be decompressed. This will overwrite any existing data. The restore may take a long time to process, so please do not move from this page until it is complete.',

'Warning'				=>	'Warning: critical features',

'Additional functions'	=>	'Zusätzliche Funktionen',
'Repair all tables'		=>	'Alle Tabellen reparieren',
'Optimise all tables'	=>	'Alle Tabellen optimieren',

'Additional info 1'		=>	'Additional features to help run a database, optimise and repair both do what they say.',

//
// Language for appearance.php, settings.php, email.php and features.php
//

'Bad HTTP Referer message'			=>	'Bad HTTP_REFERER. If you have moved these forums from one location to another or switched domains, you need to update the Base URL manually in the database (look for o_base_url in the config table) and then clear the cache by deleting all .php files in the /cache directory.',
'Must enter title message'			=>	'Du mmusst einen Titel eingeben.',
'SMTP passwords did not match'		=>	'You need to enter the SMTP password twice exactly the same to change it.',
'Enter announcement here'			=>	'Enter your announcement here.',
'Enter rules here'					=>	'Enter your rules here.',
'Default maintenance message'		=>	'The forums are temporarily down for maintenance. Please try again in a few minutes.',
'Timeout error message'				=>	'The value of "Timeout online" must be smaller than the value of "Timeout visit".',

//
// Language for appearance.php
//

'Header appearance'					=>	'Header appearance',
'Footer appearance'					=>	'Footer appearance',
'Footer'							=>	'Footer',
'Display head'						=>	'Anzeigeeinstellungen',
'Default style help'				=>	'The default style will be used by new users and guests. Users can change the style they use, so changing the default style here won\'t change the design for already existing users. You can also force a style, this will reset the style setting for every user except the guest user.',
'About style'						=>	'About %s',
'version'							=>	'version %s',
'Released on'						=>	'Released on %s',
'Designed for'						=>	'Designed for ModernBB %s to %s',
'Force style'						=>	'Force style',
'Set as default'					=>	'Als Standard einstellen',
'About'								=>	'Über',
'Version number help'				=>	'Show ModernBB version number in footer.',
'Info in posts help'				=>	'Show information about the poster under the username in topic view.',
'Post count help'					=>	'Show the number of posts a user has made in topic view, profile and user list.',
'Smilies help'						=>	'Konvertiere Smilies in Beiträgen zu kleinen Grafiken.',
'Smilies sigs help'					=>	'Konvertiere Smilies in Signaturen zu kleinen Grafiken.',
'Clickable links help'				=>	'Konvertiere URLs automatisch zu anklickbaren Hyperlinks.',
'Topic review label'				=>	'Topic review',
'Topic review help'					=>	'Maximum amount of posts showed when posting',
'Topics per page help'				=>	'Default amount of topics per page',
'Posts per page label'				=>	'Beiträge pro Seite',
'Posts per page help'				=>	'Default amount of posts per page',
'Indent label'						=>	'Indent size',
'Index panels head'					=>	'Index Einstellungen',
'Moderated by help'                 =>  'Show the "Moderated by" list when moderators are set on a per-forum base.',
'Index statistics help'				=>	'Show the statistics panel on the index.',
'Indent help'						=>	'Amount of spaces that represent a tab',
'Quote depth label'					=>	'Maximum [quote] depth',
'Quote depth help'					=>	'Maximum [quote] can be used in [quote]',
'Video height'                      =>  'Video height',
'Video height help'                 =>  'Height of an embedded video',
'Video width'                       =>  'Video width',
'Video width help'                  =>  'Width of an embedded video',
'Menu items head'					=>	'Additional menu items',
'Menu items help'					=>	'Dieses Feature erlaubt dir, Menüeinträge der Navigationsleiste hinzuzufügen. Das Format zum Hinzufügen ist: <code>X = &lt;a href="URL"&gt;LINK&lt;/a&gt;</code> wobei X der Punkt ist, in den der Link eingefügt werden sollte. Trenne Einträge durch Zeilenumbrüche.',
'Default menu'						=>	'Standard Menüeinträge',
'Menu show index'					=>	'Zeige den Index-Menüeintrag',
'Menu show user list'				=>	'Zeige den Benutzerliste-Menüeintrag',
'Menu show search'					=>	'Zeige den Suche-Menüeintrag',
'Menu show rules'					=>	'Zeige den Regeln-Menüeintrag',
'User profile head'					=>	'Benutzerprofil',
'Title settings head'				=>	'Titel Einstellungen',
'Title in menu'						=>	'Show board title in menu.',
'Title in header'					=>	'Show board title in header.',
'Description in header'				=>	'Show board description in header.',
'Description settings head'			=>	'Description settings',

//
// Language for email.php
//

'Contact head'						=>	'Kontakt Einstellungen',
'Admin e-mail label'				=>	'Admin Email',
'Admin e-mail help'					=>	'Die Email des Admins',
'Webmaster e-mail label'			=>	'Die Email des Webmasters',
'Webmaster e-mail help'				=>	'The email where the boards mails will be addressed from',
'Subscriptions head'				=>	'Abonnements',
'Forum subscriptions help'			=>	'Erlaube Benutzern, Foren zu abbonnieren.',
'Topic subscriptions help'			=>	'Erlaube Benutzern, Themen zu abbonnieren.',
'SMTP head'							=>	'SMTP Einstellungen',
'SMTP address label'				=>	'SMTP Server Adresse',
'SMTP address help'					=>	'The address of an external SMTP server to send emails with',
'SMTP username label'				=>	'SMTP Benutzername',
'SMTP username help'				=>	'Benutzername für den SMTP Server, falls benötigt',
'SMTP password label'				=>	'SMTP Passwort',
'SMTP change password help'			=>	'Check this, wenn du das aktuell gespeicherte Passwort verändern oder löschen möchtest.',
'SMTP password help'				=>	'Password and confirmation for SMTP server, only when required',
'SMTP SSL help'						=>	'Encrypts the connection to the SMTP server using SSL, only when required and supported.',

//
// Language for features.php
//

'Features head'						=>	'Features settings',
'General'							=>	'Allgemein',
'Topics and posts'					=>	'Themen und Beiträge',
'User features'						=>	'User features',
'Search'							=>	'Suche',
'Advanced'							=>	'Advanced',
'Quick post help'					=>	'Show a quick post form so users can post a reaction from the topic view.',
'Responsive post help'              =>  'Show "Post" and "Preview" button in topic view on small screens, leave quick post enabled when this is disabled to allow small devices to post comments.',
'Users online help'					=>	'Display info on the index page about users currently browsing the board.',
'Censor words help'					=>	'Censor words in posts. See %s for more info.',
'Signatures help'					=>	'Allow users to attach a signature to their posts.',
'User ranks help'					=>	'Use user ranks. See %s for more info.',
'Topic views help'					=>	'Show the number of views for each topic.',
'Has posted help'					=>	'Show a label in front of the topics where users have posted.',
'GZip help'							=>	'Gzip output sent to the browser. This will reduce bandwidth usage, but use some more CPU. This feature requires that PHP is configured with zlib. If you already have one of the Apache modules (mod_gzip/mod_deflate) set up to compress PHP scripts, disable this feature.',
'Enable advanced search'			=>	'Allow users to use the advanced search options.',
'Search all help'					=>	'Allow search only in 1 forum at a time.',

'First run'							=>	'First run',
'General settings'					=>	'General settings',
'Show first run label'				=>	'Show the first run panel when an user logs in for the first time.',
'Show guests label'					=>	'Show the first run panel to guests with login field and registration button.',
'Welcome text'						=>	'Welcome text',
'First run help message'			=>	'The introduction to the forum displayed in the middle of the first run panel',

//
// Language for forums.php
//

'Post must be integer message'	=>	'Die Position muss eine positive ganze Zahl sein.',
'New forum'						=>	'Neues Forum',

//
// Entry page
//

'Add forum'					=>	'Forum hinzufügen',
'Update positions'			=>	'Positionen aktualisieren',
'Confirm delete head'		=>	'Bestätige Löschen des Forums',
'Confirm delete forum info'	=>	'Are you sure that you want to delete the forum <strong>%s</strong>?',
'Confirm delete forum'		=>	'Warnung! Das Löschen eines Forums bedeutet, dass enthaltene Beiträge (falls es denn welche gibt), gelöscht werden!',

//
// Detailed edit page
//

'Edit forum head'			=>	'Forum bearbeiten',
'Edit details subhead'		=>	'Bearbeite Forumdetails',
'Forum name label'			=>	'Forumname',
'Forum description label'	=>	'Beschreibung',
'Category label'			=>	'Kategorie',
'Sort by label'				=>	'Sortiere Themen nach',
'Topic start'				=>	'Thema starten',
'User groups'				=>	'Benutzergruppen',
'Redirect label'			=>	'Redirect URL',
'Group permissions subhead'	=>	'Gruppenberechtigungen editieren',
'Group permissions info'	=>	'In this form, you can set the forum specific permissions for the different user groups. Administrators always have full permissions. Permission settings that differ from the default permissions for the user group are marked red. Some permissions are disabled under some conditions.',
'Read forum label'			=>	'Read forum',
'Post replies label'		=>	'Beitragsantworten',
'Post topics label'			=>	'Post topics',
'Revert to default'			=>	'Auf Standardeinstellung zurücksetzen',

//
// Language used in groups.php
//

'Title already exists message'	=>	'Es gibt schon eine Gruppe mit dem Namen <strong>%s</strong>.',
'Cannot remove default message'	=>	'Die Standardgruppe kann nicht entfernt werden. Um diese Gruppe zu löschen, muss zuerst eine andere Gruppe als Standard gesetzt werden.',

'Add group subhead'				=>	'Neue Gruppe hinzufügen',
'Create new group'				=>	'Select a user group from which the new group will inherit its permission settings.',
'Default group subhead'			=>	'Set default group',
'Default group help'			=>	'This is the default user group, e.g. the group users are placed in when they register. Not all groups are available here.',
'Existing groups head'			=>	'Existierende Gruppen',
'Edit groups info'				=>	'The pre-defined groups can\'t be removed. However, they can be edited. Please note that in some groups, some options are unavailable. Administrators always have full permissions.',
'Group delete head'				=>	'Gruppe löschen',
'Confirm delete info'			=>	'Bist du sicher, dass du die Gruppe <strong>%s</strong> löschen willst?',
'Confirm delete warn'			=>	'<b>Achtung:</b> Nachdem du eine Gruppe gelöscht hast, kannst du diese nicht mehr wiederherstellen!',
'Delete group'					=>	'Gruppe löschen',
'Move users info'				=>	'Die Gruppe <strong>%s</strong> hat zurzeit <strong>%s</strong> Mitglieder. Bitte wähle eine Gruppe, zu der die Mitglieder beim Löschen zugeordnet werden.',
'Move users label'				=>	'Verschiebe Benutzer nach',

'Group settings head'			=>	'Gruppeneinstellungen',
'Group settings subhead'		=>	'Stelle Gruppenoptionen und -berechtigungen ein',
'Group settings info'			=>	'Below options and permissions are the default permissions for the user group. These options apply if no forum specific permissions are in effect.',
'Group title label'				=>	'Group title',
'User title label'				=>	'User title',
'User title help'				=>	'The title will override the user rank',
'Mod privileges label'			=>	'Moderator privileges',
'Mod privileges help'			=>	'In order for a user to have moderator abilities, they must be assigned to moderate one or more forums. This is done via the user administration page of the user\'s profile.',
'Edit profile label'			=>	'Edit user profiles',
'Edit profile help'				=>	'If moderator privileges are enabled, allow users to edit user profiles.',
'Rename users label'			=>	'Rename users',
'Rename users help'				=>	'If moderator privileges are enabled, allow users to rename users.',
'Change passwords label'		=>	'Change passwords',
'Change passwords help'			=>	'If moderator privileges are enabled, allow users to change user passwords.',
'Ban users help'				=>	'If moderator privileges are enabled, allow users to ban users.',
'Read board label'				=>	'Read board',
'Read board help'				=>	'If this is disabled, users will only be able to login and logout.',
'View user info label'			=>	'View user information',
'View user info help'			=>	'Allow users to view the user list and user profiles.',
'Post replies help'				=>	'Allow users to post replies in topics.',
'Post topics help'				=>	'Allow users to post new topics.',
'Edit posts label'				=>	'Edit posts',
'Edit posts help'				=>	'Allow users to edit their own posts.',
'Delete posts help'				=>	'Allow users to delete their own posts.',
'Delete topics help'			=>	'Allow users to delete their own topics (including any replies).',
'Set own title label'			=>	'Set own user title',
'Set own title help'			=>	'Allow users to set their own user title.',
'User search label'				=>	'Use search',
'User search help'				=>	'Allow users to use the search feature.',
'User list search label'		=>	'Search user list',
'User list search help'			=>	'Allow users to search for other users in the user list.',
'Send e-mails label'			=>	'Send e-mails',
'Send e-mails help'				=>	'Allow users to send e-mails to other users.',
'Post flood label'				=>	'Post flood interval',
'Post flood help'				=>	'Time users have to wait between posts',
'Search flood label'			=>	'Search flood interval',
'Search flood help'				=>	'Time users have to wait between searches',
'E-mail flood label'			=>	'Email flood interval',
'E-mail flood help'				=>	'Time users have to wait between emails',
'Report flood label'			=>	'Report flood interval',
'Report flood help'				=>	'Time users have to wait between reports',
'Moderator info'				=>	'Please note that in order for a user to have moderator abilities, they must be assigned to moderate one or more forums. This is done via the user administration page of the user\'s profile.',
'seconds'						=>	'Sekunden',

//
// Language used in index.php and update.php for Backstage
//

'ModernBB intro'					=>	'Willkommen auf ModernBB',
'Backup head'						=>	'Back-up',
'Backup info'						=>	'Create new database backup.',
'Backup button'						=>	'Create new backup',
'New reports head'					=>	'New reports',
'Statistics head'					=>	'Statistiken',
'Updates'							=>	'Updates',
'View all'							=>	'View all',
'posts'								=>	'Beiträge',
'replies'							=>	'Antworten',
'reply'								=>	'reply',
'topics'							=>	'Themen',
'views'								=>	'views',
'view'								=>	'view',
'users'								=>	'Benutzer',

'Not available'						=>	'Nicht verfügbar',
'NA'								=>	'N/A',
'About head'						=>	'Über ModernBB',
'ModernBB version label'			=>	'ModernBB version',
'ModernBB version data'				=>	'ModernBB version ',
'ModernBB core label'				=>	'ModernBB core',
'ModernBB core data'				=>	'ModernBB core ',
'Server statistics label'			=>	'Server statistics',
'View server statistics'			=>	'View server statistics',

'ModernBB software updates'			=>	'ModernBB software updates',
'ModernBB updates'					=>	'ModernBB updates',
'Check for updates'					=>	'Check for updates',
'New version'						=>	'It\'s time to update, a new version is available',
'Latest version'					=>	'Thanks for using the latest version of ModernBB',
'Development version'				=>	'You\'re using a development release',

'Reset head'						=>	'ModernBB reset features',
'Soft reset'						=>	'Soft reset',
'Soft reset help'					=>	'The button below will remove the config.php file, this will cause the install to start so you can install ModernBB again. This will not drop the current database. This might be effective if your config.php file is corrupt. This can\'t be undone. Be sure you made a back-up before doing this.',
'Hard reset'						=>	'Hard reset',
'Reset config'						=>	'Reset config.php',
'Hard reset help'					=>	'The button below will remove the config.php file and database, this will cause the install to start so you can install ModernBB again. You will lose all your data. This can\'t be undone. Be sure you made a back-up before doing this.',
'Reset'								=>	'Zurücksetzen',

//
// Reports
//

'Date and time'						=>	'Datum und Zeit',
'No new reports'					=>	'Es gibt keine neuen Meldungen.',

//
// Language for maintenance.php
//

'Rebuild index subhead'			=>	'Rebuild search index',
'Rebuild index info'			=>	'If you changes something about topics and posts in the database you should rebuild the search index. It\'s recommended to activate %s during rebuilding. This can take a while and can increase the server load during the process!',
'Posts per cycle label'			=>	'Posts per cycle',
'Posts per cycle help'			=>	'Number of posts per pageview, this prevents a timeout, 300 recommended',
'Starting post label'			=>	'Starting post ID',
'Starting post help'			=>	'The ID where to start, default is first ID found in database',
'Empty index label'				=>	'Empty index',
'Empty index help'				=>	'Select this if you want the search index to be emptied before rebuilding (see below).',
'Rebuild completed info'		=>	'Be sure to enable JavaScript during the rebuild (to start a new cycle automatically). When you have to abort the rebuilding, remember the last post ID and enter that ID+1 in "Starting post ID" if you want to continue (Uncheck "Empty index").',
'Rebuild index'					=>	'Rebuild index',
'Rebuilding search index'		=>	'Rebuilding search index',
'Rebuilding index info'			=>	'Rebuilding index. This might be a good time to put on some coffee :-)',
'Processing post'				=>	'Processing post <strong>%s</strong> …',
'Click here'					=>	'Click here',
'Javascript redirect failed'	=>	'JavaScript redirect unsuccessful. %s to continue …',
'Posts must be integer message'	=>	'Posts per cycle must be a positive integer value.',
'Days must be integer message'	=>	'Days to prune must be a positive integer value.',
'No old topics message'			=>	'There are no topics that are %s days old. Please decrease the value of "Days old" and try again.',
'Prune subhead'					=>	'Prune old posts',
'Days old label'				=>	'Days old',
'Days old help'					=>	'The number of days old a topic must be to be pruned',
'Prune sticky label'			=>	'Prune sticky topics',
'Prune from label'				=>	'Prune from forum',
'Prune from help'				=>	'What shall we prune?',
'Prune info'					=>	'It\'s recommended to activate %s during pruning.',
'Confirm prune subhead'			=>	'Confirm prune posts',
'Confirm prune info'			=>	'Are you sure that you want to prune all topics older than %s days from %s (%s topics).',
'Confirm prune warn'			=>	'WARNING! Pruning posts deletes them permanently.',

'Prune users head'			=>	'Prune users',
'Prune by'					=>	'Prune by',
'Registed date'				=>	'Registered date',
'Last login'				=>	'Last login',
'Prune by info'				=>	'What should we count to prune?',
'Minimum days'				=>	'Minimum days since registration/last login',
'Minimum days info'			=>	'The minimum amount of days since event specified above',
'Maximum posts'				=>	'Maximum number of posts',
'Maximum posts info'		=>	'How many posts do you require before an users isn\'t pruned',
'Delete admins'				=>	'Delete admins and mods',
'User status'				=>	'User status',
'Delete any'				=>	'Delete any',
'Delete only verified'		=>	'Delete only verified',
'Delete only unverified'	=>	'Delete only unverified',

//
// Language for settings.php
//

'Options head'						=>	'Globale Einstellungen',

//
// Essentials section
//

'Essentials subhead'				=>	'Grundlegendes',
'Board desc help'					=>	'Worum geht es in diesem Board?',
'Base URL label'					=>	'Board-URL',
'Base URL problem'					=>  'Your installation does not support automatic conversion of internationalized domain names. As your base URL contains special characters, you <strong>must</strong> use an online converter.',
'Timezone label'					=>	'Standard Zeitzone',
'DST help'							=>	'Advance time by 1 hour for daylight saving.',
'Language help'						=>	'Die Standardsprache',

//
// Essentials section timezone options
//

'UTC-12:00'							=>	'(UTC-12:00) International Date Line West',
'UTC-11:00'							=>	'(UTC-11:00) Niue, Samoa',
'UTC-10:00'							=>	'(UTC-10:00) Hawaii-Aleutian, Cook Island',
'UTC-09:30'							=>	'(UTC-09:30) Marquesas Islands',
'UTC-09:00'							=>	'(UTC-09:00) Alaska, Gambier Island',
'UTC-08:30'							=>	'(UTC-08:30) Pitcairn Islands',
'UTC-08:00'							=>	'(UTC-08:00) Pacific',
'UTC-07:00'							=>	'(UTC-07:00) Mountain',
'UTC-06:00'							=>	'(UTC-06:00) Central',
'UTC-05:00'							=>	'(UTC-05:00) Eastern',
'UTC-04:00'							=>	'(UTC-04:00) Atlantic',
'UTC-03:30'							=>	'(UTC-03:30) Newfoundland',
'UTC-03:00'							=>	'(UTC-03:00) Amazon, Central Greenland',
'UTC-02:00'							=>	'(UTC-02:00) Mid-Atlantic',
'UTC-01:00'							=>	'(UTC-01:00) Azores, Cape Verde, Eastern Greenland',
'UTC'								=>	'(UTC) Westeuropa, Greenwich',
'UTC+01:00'							=>	'(UTC+01:00) Central European, West African',
'UTC+02:00'							=>	'(UTC+02:00) Eastern European, Central African',
'UTC+03:00'							=>	'(UTC+03:00) Eastern African',
'UTC+03:30'							=>	'(UTC+03:30) Iran',
'UTC+04:00'							=>	'(UTC+04:00) Moscow, Gulf, Samara',
'UTC+04:30'							=>	'(UTC+04:30) Afghanistan',
'UTC+05:00'							=>	'(UTC+05:00) Pakistan',
'UTC+05:30'							=>	'(UTC+05:30) India, Sri Lanka',
'UTC+05:45'							=>	'(UTC+05:45) Nepal',
'UTC+06:00'							=>	'(UTC+06:00) Bangladesh, Bhutan, Yekaterinburg',
'UTC+06:30'							=>	'(UTC+06:30) Cocos Islands, Myanmar',
'UTC+07:00'							=>	'(UTC+07:00) Indochina, Novosibirsk',
'UTC+08:00'							=>	'(UTC+08:00) Greater China, Australian Western, Krasnoyarsk',
'UTC+08:45'							=>	'(UTC+08:45) Southeastern Western Australia',
'UTC+09:00'							=>	'(UTC+09:00) Japan, Korea, Chita, Irkutsk',
'UTC+09:30'							=>	'(UTC+09:30) Australian Central',
'UTC+10:00'							=>	'(UTC+10:00) Australian Eastern',
'UTC+10:30'							=>	'(UTC+10:30) Lord Howe',
'UTC+11:00'							=>	'(UTC+11:00) Solomon Island, Vladivostok',
'UTC+11:30'							=>	'(UTC+11:30) Norfolk Island',
'UTC+12:00'							=>	'(UTC+12:00) New Zealand, Fiji, Magadan',
'UTC+12:45'							=>	'(UTC+12:45) Chatham Islands',
'UTC+13:00'							=>	'(UTC+13:00) Tonga, Phoenix Islands, Kamchatka',
'UTC+14:00'							=>	'(UTC+14:00) Line Islands',

//
// Timeout Section
//

'Timeouts subhead'					=>	'Time and timeouts',
'PHP manual'						=>	'PHP Handbuch',
'Time format help'					=>	'Now: %s. See %s for more info',
'Date format help'					=>	'Now: %s. See %s for more info',
'Visit timeout label'				=>	'Visit timeout',
'Visit timeout help'				=>	'Time before a visit ends',
'Online timeout label'				=>	'Online timeout',
'Online timeout help'				=>	'Time before someone isn\'t online anymore',

//
// Feeds section
//

'Feed subhead'						=>	'Syndication',
'Default feed label'				=>	'Default feed type',
'Default feed help'					=>	'Select a feed',
'None'								=>	'Keine',
'RSS'								=>	'RSS',
'Atom'								=>	'Atom',
'Feed TTL label'					=>	'Duration to cache feeds',
'Feed TTL help'						=>	'Reduce sources by caching feeds',
'No cache'							=>	'Don\'t cache',
'Minutes'							=>	'%d minutes',

//
// Reports section
//

'Reporting method label'			=>	'Reporting method',
'Internal'							=>	'Intern',
'Both'								=>	'Beides',
'Reporting method help'				=>	'How should we handle reports?',
'Mailing list label'				=>	'Mailing list',
'Mailing list help'					=>	'A comma separated list of subscribers who get e-mails when new reports are made',

//
// Avatars section
//

'Avatars subhead'					=>	'Avatare',
'Use avatars label'					=>	'Avatare benutzen',
'Use avatars help'					=>	'Aktivieren, damit Benutzer Avatare hochladen können.',
'Upload directory label'			=>	'Upload directory',
'Upload directory help'				=>	'Where avatars will be stored relative to ModernBBs root, write permission required',
'Max width label'					=>	'Maximale Breite',
'Max height label'					=>	'Maximale Höhe',
'Max size label'					=>	'Maximale Größe',

//
// Registration Section
//

'Allow new label'					=>	'Allow new registrations',
'Allow new help'					=>	'Allow new users to be made by people.',
'Verify label'						=>	'Verify registrations',
'Verify help'						=>	'Send a random password to users to verify their email address.  ',
'Report new label'					=>	'Report new registrations',
'Report new help'					=>	'Notify people on the mailing list when new user registers.  ',
'Use rules label'					=>	'User forum rules',
'Use rules help'					=>	'Require users to agree with the rules. This will also enable a "Rules" link in the navigation bar.',
'Rules label'						=>	'Enter your rules here',
'Rules help'						=>	'Enter rules or useful information, required when rules are enabled',
'E-mail default label'				=>	'Default email setting',
'E-mail default help'				=>	'Default privacy setting for new registrations',
'Display e-mail label'				=>	'Display email address to other users.',
'Hide allow form label'				=>	'Hide email address but allow form e-mail.',
'Hide both label'					=>	'Hide email address and disallow form email.',

//
// Announcement Section
//

'Announcements'						=>	'Ankündigungen',
'Display announcement help'			=>	'Aktivieren, um die Nachricht darunter im Board anzuzeigen.',

//
// Maintenance Section
//

'Maintenance mode help'				=>	'Enable to activate maintenance mode, the board will only be available for admins. Do not log out when this feature is active!',
'Maintenance message help'			=>	'The message to tell users about the maintenance',
'Cache'								=>	'Cache',
'Cache info'						=>	'Remove all cache files so the database has to return up-to-date values',
'Clear cache'						=>	'Cache leeren',

//
// Language for permissions.php
//

'All caps'					=>	'All caps',
'Posting subhead'			=>	'Posting',
'BBCode help'				=>	'Allow BBCode in posts (recommended).',
'Image tag help'			=>	'Allow the BBCode [img] tag in posts.',
'All caps message help'		=>	'Allow a message to contain only capital letters.',
'All caps subject help'		=>	'Allow a subject to contain only capital letters.',
'Require e-mail help'		=>	'Require guests to supply an email address when posting.',
'Signatures subhead'		=>	'Signaturen',
'BBCode sigs help'			=>	'Allow BBCode in user signatures.',
'Image tag sigs help'		=>	'Allow the BBCode [img] tag in user signatures (not recommended).',
'All caps sigs help'		=>	'Allow a signature to contain only capital letters.',
'Max sig length label'		=>	'Maximum signature length',
'Max sig length help'		=>	'Maximum amount of characters a signature can have',
'Max sig lines label'		=>	'Maximum signature lines',
'Max sig lines help'		=>	'Maximum amount of lines a signature can have',
'Banned e-mail help'		=>	'Allow users to use a banned email address, mailing list will be warned when this happens.',
'Duplicate e-mail help'		=>	'Allow users to use an email address that is already used, mailing list will be warned when this happens.',

//
// Language for ranks.php
//

'Must be integer message'	=>	'Minimum posts must be a positive integer value.',
'Dupe min posts message'	=>	'There is already a rank with a minimun posts value of %s.',
'Add rank subhead'			=>	'Rang hinzufügen',
'Ranks disabled'			=>	'<strong>User ranks is disabled in %s.</strong>',
'Rank title label'			=>	'Rangtitel',
'Minimum posts label'		=>	'Minimum an Beiträgen',
'Edit remove subhead'		=>	'Edit/remove ranks',
'No ranks in list'			=>	'Keine Ränge in der Liste',

//
// Language for reports.php
//

'Deleted user'				=>	'Deleted user',
'Deleted'					=>	'Gelöscht',
'Post ID'					=>	'Post #%s',
'Reported by'				=>	'Reported by',
'Actions'					=>	'Aktionen',
'Zap'						=>	'Als gelesen markieren',
'Last 10 head'				=>	'10 last read reports',
'Readed by'					=>	'Marked as read by',
'No zapped reports'			=>	'There are no read reports.',

//
// Language for statistics.php
//

'PHPinfo disabled message'			=>	'The PHP function phpinfo() has been disabled on this server.',
'Server statistics head'			=>	'Server Statistiken',
'Server load label'					=>	'Server load',
'Server load data'					=>	'%s - %s user(s) online',
'Environment label'					=>	'Umgebung',
'Environment data OS'				=>	'Betriebssystem: %s',
'Show info'							=>	'Show info',
'Environment data version'			=>	'PHP: %s - %s',
'Environment data acc'				=>	'Accelerator: %s',
'Turck MMCache'						=>	'Turck MMCache',
'Turck MMCache link'				=>	'turck-mmcache.sourceforge.net/',
'ionCube PHP Accelerator'			=>	'ionCube PHP Accelerator',
'ionCube PHP Accelerator link'		=>	'www.php-accelerator.co.uk/',
'Alternative PHP Cache (APC)'		=>	'Alternative PHP Cache (APC)',
'Alternative PHP Cache (APC) link'	=>	'www.php.net/apc/',
'Zend Optimizer'					=>	'Zend Optimizer',
'Zend Optimizer link'				=>	'www.zend.com/products/guard/zend-optimizer/',
'eAccelerator'						=>	'eAccelerator',
'eAccelerator link'					=>	'www.eaccelerator.net/',
'XCache'							=>	'XCache',
'XCache link'						=>	'xcache.lighttpd.net/',
'Database label'					=>	'Datenbank',
'Database data rows'				=>	'Rows: %s',
'Database data size'				=>	'Größe: %s',

//
// Language for users.php
//

'Non numeric message'		=>	'You entered a non-numeric value into a numeric only column.',
'Invalid date time message'	=>	'You entered an invalid date/time.',
'Not verified'				=>	'Not verified',

//
// Actions: mass delete/ban etc.
//

'No users selected'			=>	'No users selected.',
'No move admins message'	=>	'For security reasons, you are not allowed to move multiple administrators to another group. If you want to move these administrators, you can do so on their respective user profiles.',
'No delete admins message'	=>	'Administrators cannot be deleted. In order to delete administrators, you must first move them to a different user group.',
'No ban admins message'		=>	'Administrators cannot be banned. In order to ban administrators, you must first move them to a different user group.',
'No ban mods message'		=>	'Moderators cannot be banned. In order to ban moderators, you must first move them to a different user group.',
'Move users'				=>	'Change user group',
'New group label'			=>	'New group',
'New group help'			=>	'Select a new user group',
'Invalid group message'		=>	'Invalid group ID.',
'Delete users'				=>	'Delete users',
'Ban users'					=>	'Ban users',
'Ban IP label'				=>	'Ban IP addresses',
'Ban IP help'				=>	'Also ban the IP addresses of the banned users to make registering a new account more difficult for them.',

'E-mail address label'		=>	'Email address',
'Real name label'			=>	'Real name',
'Signature'					=>	'Signatur',
'Posts more than label'		=>	'Number of posts greater than',
'Posts less than label'		=>	'Number of posts less than',
'Last post after label'		=>	'Last post is after',
'Last post before label'	=>	'Last post is before',
'Last visit after label'	=>	'Last visit is after',
'Last visit before label'	=>	'Last visit is before',
'Registered after label'	=>	'Registered after',
'Registered before label'	=>	'Registered before',
'Order by posts'			=>	'Number of posts',
'Order by last visit'		=>	'Last visit',
'Order by registered'		=>	'Registered',
'All groups'				=>	'All groups',
'Unverified users'			=>	'Unverified users',
'IP search head'			=>	'IP search',
'IP address label'			=>	'IP address',
'IP address help'			=>	'The IP address to search for in the post database.',
'Find IP address'			=>	'Find IP address',

'Results title head'		=>	'Title/Status',
'Results posts head'		=>	'Posts',
'Results last used head'	=>	'Last used',
'Results times found head'	=>	'Times found',
'Results find more link'	=>	'Find more users for this ip',
'Results no posts found'	=>	'There are currently no posts by that user in the forum.',
'Ban'						=>	'Ban',
'Change group'				=>	'Change group',
'Bad IP message'			=>	'The supplied IP address is not correctly formatted.',
'Results view IP link'		=>	'IP stats',
'Results no IP found'		=>	'The supplied IP address could not be found in the database.',

//
// Create new user
//

'Add user head'				=>	'Benutzer hinzufügen',
'Random password info'		=>	'Generate a random password, this will be emailed to the above address. When checked, leave "Password" empty.',

//
// Common language used in /backstage/
// Main menu
//

'Content'				=>	'Inhalt',
'Forums'				=>	'Forumen',
'Forum settings'		=>	'Foreneinstellungen',
'Categories'			=>	'KAtegorien',
'Board'					=>	'Board',
'Board structure'		=>	'Boardstruktur',
'Censoring'				=>	'Zensur',
'Reports'				=>	'Meldungen',
'Users'					=>	'Benutzer',
'Ranks'					=>	'Ränge',
'Groups'				=>	'Gruppen',
'Permissions'			=>	'Permissions',
'Bans'					=>	'Bans',
'Settings'				=>	'Einstellungen',
'Global'				=>	'Global',
'Registration'			=>	'Registrierung',
'Email'					=>	'Email',
'Database'				=>	'Datenbankmanagement',
'Backstage settings'	=>	'Backstage Einstellungen',
'Extensions'			=>	'Erweiterungen',

//
// Others
//

'Prune'					=>	'Prune',
'Server statistics'		=>  'Server Statistiken',

//
// Update service
//

'Available'				=>	'Ein Update, ModernBB v%s, ist verfügbar',
'Development'			=>	'You are running version %s, the latest stable release is version %s.',
'Download'				=>	'Download v%s',
'Changelog'				=>	'Changelog',

//
// General actions and more
//

'Admin'					=>	'Admin',
'Go back'				=>	'Zurück',
'Update'				=>	'Update',
'Add'					=>	'Hinzufügen',
'Remove'				=>	'Entfernen',
'Yes'					=>	'Ja',
'No'					=>	'Nein',
'here'					=>	'hier',
'Action'				=>	'Action',
'Maintenance mode'		=>	'Wartungsmodus', // Used for link text in more than one file

// Cookie bar
'Cookie bar'			=>	'Cookie-Leiste',
'Cookie info'			=>	'We use cookies to give you the best experience on this board.',
'More info'				=>	'Mehr Informationen',
'Cookie set info'		=>	'Show a bar with information about cookies at the bottom of the page.',

//
// Admin loader
//

'No plugin message'		=>	'There is no plugin called %s in the plugin directory.',
'Plugin failed message'	=>	'Loading of the plugin - <strong>%s</strong> - failed.',

//
// Email templtes
//

// Email - activate_email.tpl
'activate_email.tpl'          =>
'Betreff: Change email address requested

Hallo <username>,

You have requested to have a new email address assigned to your account in the discussion forum at <base_url>. If you did not request this or if you do not want to change your email address you should just ignore this message. Only if you visit the activation page below will your email address be changed. In order for the activation page to work, you must be logged in to the forum.

To change your email address, please visit the following page:
<activation_url>

--
<board_mailer> Mailer
(Do not reply to this message)',

//
// Email - activate_password.tpl
//
'activate_password.tpl'          =>
'Betreff: New password requested

Hallo <username>,

You have requested to have a new password assigned to your account in the discussion forum at <base_url>. If you did not request this or if you do not want to change your password you should just ignore this message. Only if you visit the activation page below will your password be changed.

Your new password is: <new_password>

To change your password, please visit the following page:
<activation_url>

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - banned_email_change.tpl
'banned_email_change.tpl'          =>
'Betreff: Alert - Banned email detected

User "<username>" changed to banned email address: <email>

User profile: <profile_url>

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - banned_email_post.tpl
'banned_email_post.tpl'          =>
'Betreff: Alert - Banned email detected

User "<username>" posted with banned email address: <email>

Post URL: <post_url>

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - banned_email_register.tpl
'banned_email_register.tpl'          =>
'Subject: Alert - Banned email detected

User "<username>" registered with banned email address: <email>

User profile: <profile_url>

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - dupe_email_change.tpl
'dupe_email_change.tpl'          =>
'Subject: Alert - Duplicate email detected

User "<username>" changed to an email address that also belongs to: <dupe_list>

User profile: <profile_url>

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - dupe_email_register.tpl
'dupe_email_register.tpl'          =>
'Subject: Alert - Duplicate email detected

User "<username>" registered with an email address that also belongs to: <dupe_list>

User profile: <profile_url>

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - form_email.tpl
'form_email.tpl'          =>
'Subject: <mail_subject>

<sender> from <board_title> has sent you a message. You can reply to <sender> by replying to this email.

The message reads as follows:
-----------------------------------------------------------------------

<mail_message>

-----------------------------------------------------------------------

--
<board_mailer> Mailer',

// Email - new_reply.tpl
'new_reply.tpl'          =>
'Subject: Reply to topic: "<topic_subject>"

<replier> has replied to the topic "<topic_subject>" to which you are subscribed. There may be more new replies, but this is the only notification you will receive until you visit the board again.

The post is located at <post_url>

You can unsubscribe by going to <unsubscribe_url>

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - new_reply_full.tpl
'new_reply_full.tpl'          =>
'Subject: Reply to topic: "<topic_subject>"

<replier> has replied to the topic "<topic_subject>" to which you are subscribed. There may be more new replies, but this is the only notification you will receive until you visit the board again.

The post is located at <post_url>

The message reads as follows:
-----------------------------------------------------------------------

<message>

-----------------------------------------------------------------------

You can unsubscribe by going to <unsubscribe_url>

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - new_report.tpl
'new_report.tpl'          =>
'Subject: Report(<forum_id>) - "<topic_subject>"

User "<username>" has reported the following message: <post_url>

Reason: <reason>

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - new_topic.tpl
'new_topic.tpl'          =>
'Subject: New topic in forum: "<forum_name>"

<poster> has posted a new topic "<topic_subject>" in the forum "<forum_name>", to which you are subscribed.

The topic is located at <topic_url>

You can unsubscribe by going to <unsubscribe_url>

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - new_topic_full.tpl
'new_topic_full.tpl'          =>
'Subject: New topic in forum: "<forum_name>"

<poster> has posted a new topic "<topic_subject>" in the forum "<forum_name>", to which you are subscribed.

The topic is located at <topic_url>

The message reads as follows:
-----------------------------------------------------------------------

<message>

-----------------------------------------------------------------------

You can unsubscribe by going to <unsubscribe_url>

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - new_user.tpl
'new_user.tpl'          =>
'Subject: Alert - New registration

User "<username>" registered in the forums at <base_url>

User profile: <profile_url>

To administer this account, please visit the following page:
<admin_url>

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - rename.tpl
'rename.tpl'          =>
'Subject: User account renamed

During an upgrade to the forums at <base_url> it was determined your username is too similar to an existing user. Your username has been changed accordingly.

Old username: <old_username>
New username: <new_username>

We apologise for any inconvenience caused.

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - welcome.tpl
'welcome.tpl'          =>
'Subject: Welcome to <board_title>!

Thank you for registering in the forums at <base_url>. Your account details are:

Username: <username>
Password: <password>

Login at <login_url> to activate the account.

--
<board_mailer> Mailer
(Do not reply to this message)',

);
