<?php

###############################################################################
# slovenian.php - version 1.7
# This is the slovenian language file for the Geeklog Links Plugin
# language file for geeklog version 1.7 by Mateja B.
# gape@gape.org ; za pripombe, predloge ipd. pi�i na e-naslov
#
# Copyright (C) 2001 Tony Bibbs
# tony AT tonybibbs DOT com
# Copyright (C) 2005 Trinity Bays
# trinity93 AT gmail DOT com
#
# This program is free software; you can redistribute it and/or
# modify it under the terms of the GNU General Public License
# as published by the Free Software Foundation; either version 2
# of the License, or (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
#
###############################################################################

global $LANG32;

###############################################################################
# Array Format:
# $LANGXX[YY]:  $LANG - variable name
#               XX    - file id number
#               YY    - phrase id number
###############################################################################

$LANG_LINKS = array(
    10 => '�akajo�a vsebina',
    14 => 'Povezave',
    84 => 'POVEZAVE',
    88 => 'Ni nedavnih novih povezav',
    114 => 'Povezave',
    116 => 'Dodaj povezavo',
    117 => 'Prijavi napako v povezavi',
    118 => 'Prijava napake v povezavi',
    119 => 'Te povezave so prijavljene kot nedelujo�e: ',
    120 => 'Da popravi� povezavo, klikni tukaj: ',
    121 => 'Napako v povezavi je prijavil: ',
    122 => 'Hvala za prijavo napake v povezavi. Skrbnik strani bo te�avo odpravil takoj, ko bo mogo�e.',
    123 => 'Hvala',
    124 => 'OK',
    125 => 'Kategorije',
    126 => 'Podro�je:',
    'autotag_desc_link' => '[link: id alternate title] - Displays a link to a Link from the Links Plugin using the Link Title as the title. An alternate title may be specified but is not required.',
    'root' => 'Vse'
);

###############################################################################
# for stats

$LANG_LINKS_STATS = array(
    'links' => 'Povezave (kliki) v sistemu',
    'stats_headline' => '10 najpopularnej�ih povezav',
    'stats_page_title' => 'Povezave',
    'stats_hits' => 'Zadetki',
    'stats_no_hits' => 'Izgleda, da na tem mestu ni povezav ali da �e nikoli ni nih�e kliknil na nobeno.'
);

###############################################################################
# for the search

$LANG_LINKS_SEARCH = array(
    'results' => 'Rezultati povezav',
    'title' => 'Naslov',
    'date' => 'Dodani datum',
    'author' => 'Avtor:',
    'hits' => 'Kliki'
);

###############################################################################
# for the submission form

$LANG_LINKS_SUBMIT = array(
    1 => 'Oddaj povezavo',
    2 => 'Povezava',
    3 => 'Kategorija',
    4 => 'Drugo',
    5 => '�e drugo, prosim navedi',
    6 => 'Napaka: Manjka kategorija',
    7 => 'Kadar izbere� "Drugo", prosim navedi tudi ime kategorije',
    8 => 'Naslov',
    9 => 'URL',
    10 => 'Kategorija',
    11 => 'Povezave'
);

###############################################################################
# Messages for COM_showMessage the submission form

$PLG_links_MESSAGE1 = "Hvala, da si povezavo oddal/a na spletno mesto {$_CONF['site_name']}. Pred objavo jo bo pregledal urednik. �e bo odobrena, bo objavljena in dana na razpolago bralcem te spletne strani v razdelku <a href={$_CONF['site_url']}/links/index.php>Povezave</a>.";
$PLG_links_MESSAGE2 = 'Tvoja povezava je uspe�no shranjena.';
$PLG_links_MESSAGE3 = 'Povezava je uspe�no izbrisana.';
$PLG_links_MESSAGE4 = "Hvala, da si povezavo oddal/a na spletno mesto {$_CONF['site_name']}. Sedaj jo lahko vidi� v razdelku <a href={$_CONF['site_url']}/links/index.php>Povezave</a>.";
$PLG_links_MESSAGE5 = 'Nima� dovolj visokih pravic za prikaz te kategorije.';
$PLG_links_MESSAGE6 = 'Nima� dovolj visokih pravic za urejanje te kategorije.';
$PLG_links_MESSAGE7 = 'Prosim, vpi�i ime kategorije in njen opis.';
$PLG_links_MESSAGE10 = 'Kategorija je bila uspe�no shranjena.';
$PLG_links_MESSAGE11 = 'Za kategorijo ni dovoljeno uporabiti imen "site" ali "user" - ta so rezervirana za notranjo uporabo.';
$PLG_links_MESSAGE12 = 'Nadrejeno kategorijo posku�a� narediti podrejeno v njeni lastni podkategoriji. To bi ustvarilo osamelo kategorijo, zato prosim podrejeno kategorijo/kategorije najprej premakni na vi�jo raven.';
$PLG_links_MESSAGE13 = 'Kategorija je bila uspe�no izbrisana.';
$PLG_links_MESSAGE14 = 'Kategorija vsebuje povezave in/ali kategorije. Prosim, prej jih izbri�i.';
$PLG_links_MESSAGE15 = 'Nima� dovolj visokih pravic za izbris te kategorije.';
$PLG_links_MESSAGE16 = 'Kategorija s tem imenom ne obstaja.';
$PLG_links_MESSAGE17 = 'Ime (ID) te kategorije je �e uporabljeno.';

// Messages for the plugin upgrade
$PLG_links_MESSAGE3001 = 'Nadgradnja vti�nika ni podprta.';
$PLG_links_MESSAGE3002 = $LANG32[9];

###############################################################################
# admin/plugins/links/index.php

$LANG_LINKS_ADMIN = array(
    1 => 'Urejevalnik povezav',
    2 => 'ID povezave',
    3 => 'Naslov povezave',
    4 => 'URL povezave',
    5 => 'Kategorija',
    6 => '(vklju�i http://)',
    7 => 'Drugo',
    8 => 'Zadetki povezav',
    9 => 'Opis povezav',
    10 => 'Dolo�iti mora� naslov povezave, URL in opis.',
    11 => 'Upravljalnik povezav',
    12 => 'To modify or delete a link, click on that link\'s edit icon below.  To create a new link or a new category, click on "New link" or "New category" above. To edit multiple categories, click on "List categories" above.',
    14 => 'kategorija povezave',
    16 => 'Dostop zavrnjen',
    17 => "Posku�a� dostopiti do povezave, za katero nima� pravic. Ta poskus je bil zabele�en. Prosim, <a href=\"{$_CONF['site_admin_url']}/plugins/links/index.php\">pojdi nazaj na zaslon za upravljanje povezav</a>.",
    20 => '�e drugo, navedi',
    21 => 'shrani',
    22 => 'prekli�i',
    23 => 'izbri�i',
    24 => 'Ne najdem povezave',
    25 => 'Povezava, izbrana za urejanje, ni bila najdena.',
    26 => 'Preveri povezave',
    27 => 'HTTP stanje',
    28 => 'Uredi kategorijo',
    29 => 'Vnesi ali uredi spodnje podrobnosti.',
    30 => 'Kategorija',
    31 => 'Opis',
    32 => 'ID kategorije',
    33 => 'Rubrika',
    34 => 'Nadrejeno',
    35 => 'Vse',
    40 => 'Uredi to kategorijo',
    41 => 'Ustvari podrejeno kategorijo',
    42 => 'Izbri�i to kategorijo',
    43 => 'Kategorije strani',
    44 => 'Dodaj&nbsp;podrejeno',
    46 => 'Uporabnik %s je poskusil izbrisati kategorijo, do katere nima dostopnih pravic',
    50 => 'Seznam kategorij',
    51 => 'Nova povezava',
    52 => 'Nova kategorija',
    53 => 'Seznam povezav',
    54 => 'Upravljalnik kategorij',
    55 => 'Uredi spodnje kategorije. Vedi, da ne more� izbrisati kategorije, ki vsebuje druge kategorije ali povezave - najprej jih je treba izbrisati ali premakniti v druge kategorije.',
    56 => 'Urejevalnik kategorij',
    57 => '�e ni preverjeno',
    58 => 'Preveri zdaj',
    59 => '<p>Za preveritev vseh prikazanih povezav klikni na "Preveri zdaj" spodaj. Vedi prosim, da to lahko traja nekaj �asa, odvisno od koli�ine prikazanih povezav.</p>',
    60 => 'Uporabnik %s je poskusil nedovoljeno urejati kategorijo %s.',
    61 => 'Povezave v kategoriji',
    'num_links' => '%s Link(s)'
);


$LANG_LINKS_STATUS = array(
    100 => 'Nadaljuj',
    101 => 'Zamenjava protokolov',
    200 => 'OK',
    201 => 'Ustvarjeno',
    202 => 'Sprejeto',
    203 => 'Neavtoritativna informacija',
    204 => 'Ni vsebine',
    205 => 'Ponastavi vsebino',
    206 => 'Delna vsebina',
    300 => 'Ve� izbir',
    301 => 'Trajno prestavljeno',
    302 => 'Najdeno',
    303 => 'Glej drugo',
    304 => 'Ni spremenjeno',
    305 => 'Uporabi proxy',
    307 => 'Za�asna preusmeritev',
    400 => 'Slaba zahteva',
    401 => 'Neavtorizirano',
    402 => 'Zahtevano pla�ilo',
    403 => 'Prepovedano',
    404 => 'Ni najdeno',
    405 => 'Metoda ni dovoljena',
    406 => 'Ni sprejemljivo',
    407 => 'Zahtevana proxy avtentifikacija',
    408 => 'Zahtevan timeout',
    409 => 'Konflikt',
    410 => 'Zgubljen',
    411 => 'Zahtevana dol�ina',
    412 => 'Predpogoj spodletel',
    413 => 'Zahtevana entiteta prevelika',
    414 => 'Zahtevan URL predolg',
    415 => 'Nepodprt predstavnostni tip',
    416 => 'Zahtevani razpon ni zadovoljiv',
    417 => 'Pri�akovanje spodletelo',
    500 => 'Notranja stre�ni�ka napaka',
    501 => 'Ni implementirano',
    502 => 'Slab prehod',
    503 => 'Storitev ni na voljo',
    504 => 'Timeout prehoda',
    505 => 'HTTP razli�ica ni podprta',
    999 => 'Timeout povezave'
);

// Localization of the Admin Configuration UI
$LANG_configsections['links'] = array(
    'label' => 'Povezave',
    'title' => 'Konfiguracija povezav'
);

$LANG_confignames['links'] = array(
    'linksloginrequired' => 'Za povezave zahtevana prijava?',
    'linksubmission' => 'Omogo�i �akalno vrsto?',
    'newlinksinterval' => 'Interval za nove povezave',
    'hidenewlinks' => 'Skrij nove povezave?',
    'hidelinksmenu' => 'Skrij napis Povezave v meniju?',
    'linkcols' => 'Kategorij na stolpec',
    'linksperpage' => 'Povezav na stran',
    'show_top10' => 'Poka�i najpopularnej�ih 10 povezav?',
    'notification' => 'Obvestilo po e-po�ti?',
    'delete_links' => 'Izbri�i povezave skupaj z lastnikom?',
    'aftersave' => 'Po shranitvi povezave',
    'show_category_descriptions' => 'Poka�i opis kategorije?',
    'new_window' => 'Odpri zunanje povezave v drugem oknu?',
    'recaptcha' => 'reCAPTCHA',
    'root' => 'ID korenske kategorije',
    'default_permissions' => 'Prednastavljene pravice povezave',
    'category_permissions' => 'Prednastavljene pravice kategorije',
    'autotag_permissions_link' => '[link: ] Permissions'
);

$LANG_configsubgroups['links'] = array(
    'sg_main' => 'Glavne nastavitve'
);

$LANG_tab['links'] = array(
    'tab_public' => 'Public Links List Settings',
    'tab_admin' => 'Links Admin Settings',
    'tab_permissions' => 'Link Permissions',
    'tab_cpermissions' => 'Category Permissions',
    'tab_autotag_permissions' => 'Autotag Usage Permissions'
);

$LANG_fs['links'] = array(
    'fs_public' => 'Nastavitve seznama javnih povezav',
    'fs_admin' => 'Skrbnikove nastavitve povezav',
    'fs_permissions' => 'Prednastavljene pravice',
    'fs_cpermissions' => 'Pravice kategorije',
    'fs_autotag_permissions' => 'Autotag Usage Permissions'
);

// Note: entries 0, 1, and 12 are the same as in $LANG_configselects['Core']
$LANG_configselects['links'] = array(
    0 => array('Da' => 1, 'Ne' => 0),
    1 => array('Da' => 'velja', 'Ne' => 'ne velja'),
    9 => array('Naprej na povezano stran' => 'item', 'Prika�i skrbnikov seznam' => 'list', 'Prika�i javni seznam' => 'plugin', 'Prika�i vstopno stran' => 'home', 'Prika�i skrbnikovo stran' => 'admin'),
    12 => array('Ni dostopa' => 0, 'Samo za branje' => 2, 'Branje-pisanje' => 3),
    13 => array('No access' => 0, 'Use' => 2),
    14 => array('Disabled' => 0, 'reCAPTCHA V2' => 1, 'reCAPTCHA V2 Invisible' => 2)
);
