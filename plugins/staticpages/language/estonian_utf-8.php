<?php

###############################################################################
# estonian.php
# This is the Estonian language file for the Geeklog Static Page plugin
#
# Copyright (C) 2001 Tony Bibbs
# tony@tonybibbs.com
#
# Estonian translation by Artur Räpp <rtr AT planet DOT ee>
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

$LANG_STATIC = array(
    'newpage' => 'Uus leht',
    'adminhome' => 'Admin avaleht',
    'staticpages' => 'Staatilised lehed',
    'staticpageeditor' => 'Staatiliste lehtede toimetaja',
    'writtenby' => 'Kirjutas',
    'date' => 'Uuendatud',
    'title' => 'Tiitel',
    'page_title' => 'Page Title',
    'content' => 'Sisu',
    'hits' => 'Klikke',
    'staticpagelist' => 'Staatiliste lehtede nimekiri',
    'url' => 'URL',
    'edit' => 'Toimeta',
    'lastupdated' => 'Uuendatud',
    'pageformat' => 'Lehe kujundus',
    'leftrightblocks' => 'vasak- ja paremblokid',
    'blankpage' => 'tühi leht',
    'noblocks' => 'blokkideta',
    'leftblocks' => 'Vasakblokid',
    'addtomenu' => 'Lisa menüüsse',
    'label' => 'Silt',
    'nopages' => 'Süsteemis pole veel staatilisi lehti',
    'save' => 'salvesta',
    'preview' => 'eelvaade',
    'delete' => 'kustuta',
    'cancel' => 'tühista',
    'access_denied' => 'Ligipääs tõkestatud',
    'access_denied_msg' => 'Sa proovisid ilma vastavate õigusteta ligi pääseda ühele staatiliste lehtede administreerimislehtedest. Pane tähele, et kõik sellised katsed logitakse.',
    'all_html_allowed' => 'Kogu HTML on lubatud',
    'results' => 'Staatiliste lehtede tulemus',
    'author' => 'Autor',
    'no_title_or_content' => 'Sa pead täitma vähemalt <b>tiitli</b> ja <b>sisu</b> väljad.',
    'no_such_page_anon' => 'Palun logi sisse...',
    'no_page_access_msg' => "Põhjuseks võib olla, et sa pole veel sisse loginud või pole veel {$_CONF['site_name']} lehe registreerunud kasutaja. Palun <a href=\"{$_CONF['site_url']}/users.php?mode=new\"> registreeru {$_CONF['site_name']} lehe kasutajaks.</a> Registreerumine annab sulle kõik lehe liikme ligipääsuõigused.",
    'php_msg' => 'PHP: ',
    'php_warn' => 'Hoiatus! Selle valiku sisselülitamisel käivitatakse lehel olevad PHP käsud. Kasuta ettevaatusega!',
    'exit_msg' => 'Tagastuse tüüp',
    'exit_info' => 'Kasuta logimismärkuste jaoks. Tavalise lehe kasutus- ja turvateadete jaoks jäta märge tegemata.',
    'deny_msg' => 'Ligipääs sellele lehele on tõkestatud. Võimalik, et  see leht on kas kustutatud või ümbernimetatud või pole sul piisavalt õigusi.',
    'stats_headline' => 'Staatiliste lehtede top 10',
    'stats_page_title' => 'Lehe tiitel',
    'stats_hits' => 'Klikke',
    'stats_no_hits' => 'Näib, et saidil pole ühtegi staatilist lehte või mitte keegi pole neid vaadanud.',
    'id' => 'ID',
    'duplicate_id' => 'Sisestatud staatilise lehe ID on juba kasutuses. Vali teine ID.',
    'instructions' => 'Staatilise lehe toimetamiseks või kustutamiseks klõpsa allpool staatilise lehe juures olevat toimetamisikooni. Staatilise lehe vaatamiseks klõpsa selle tiitlil. Uue loomiseks klõpsa "Tee uus" ülal. Olemasolevast staatilisest lehest koopia tegemiseks klõpsa kopeerimisikooni.',
    'centerblock' => 'Keskblokk: ',
    'centerblock_msg' => 'Kui märgitud, näidatakse seda staatilist lehte indeks lehel keskblokina.',
    'topic' => 'Rubriik: ',
    'position' => 'Asukoht: ',
    'all_topics' => 'Kõik',
    'no_topic' => 'Ainult avaleht',
    'position_top' => 'Lehe ülaservas',
    'position_feat' => 'Peale pealugu',
    'position_bottom' => 'Lehe allservas',
    'position_entire' => 'Kogu leht',
    'head_centerblock' => 'Keskblokk',
    'centerblock_no' => 'Ei',
    'centerblock_top' => 'Ülal',
    'centerblock_feat' => 'Pealugu',
    'centerblock_bottom' => 'All',
    'centerblock_entire' => 'Kogu',
    'inblock_msg' => 'Blokina:',
    'inblock_info' => 'Paiguta staatiline leht blokki.',
    'title_edit' => 'Toimeta lehte',
    'title_copy' => 'Tee lehest koopia',
    'title_display' => 'Näita leht',
    'select_php_none' => 'ära käivita PHP',
    'select_php_return' => 'käivita PHP (return)',
    'select_php_free' => 'käivita PHP',
    'php_not_activated' => "Staatilistel lehtedel pole PHP kasutamine sisse lülitatud. Täpsemat infot palun vaata <a href=\"{$_CONF['site_url']}/docs/english/staticpages.html#php\">dokumentatsioonist.</a>",
    'printable_format' => 'Prinditaval kujul',
    'copy' => 'Koopia',
    'limit_results' => 'Piira tulemused',
    'search' => 'Otsi',
    'submit' => 'Sisesta',
    'no_new_pages' => 'Pole uusi lehti',
    'pages' => 'Lehti',
    'comments' => 'Comments',
    'template' => 'Template',
    'use_template' => 'Use Template',
    'template_msg' => 'When checked, this Static Page will be marked as a template.',
    'none' => 'None',
    'use_template_msg' => 'If this Static Page is not a template, you can assign it to use a template. If a selection is made then remember that the content of this page must follow the proper XML format.',
    'draft' => 'Draft',
    'draft_yes' => 'Yes',
    'draft_no' => 'No',
    'show_on_page' => 'Show on Page',
    'show_on_page_disabled' => 'Note: This is currently disabled for all pages in the Staticpage Configuration.',
    'cache_time' => 'Cache Time',
    'cache_time_desc' => 'This staticpage content will be cached for no longer than this many seconds. If 0 caching is disabled (3600 = 1 hour,  86400 = 1 day). Staticpages with PHP enabled or are a template will not be cached.',
    'autotag_desc_staticpage' => '[staticpage: id alternate title] - Displays a link to a static page using the static page title as the title. An alternate title may be specified but is not required.',
    'autotag_desc_staticpage_content' => '[staticpage_content: id alternate title] - Displays the contents of a staticpage.',
    'autotag_desc_page' => '[page: id alternate title] - Displays a link to a page (from the Static Page plugin) using the page title as the title. An alternate title may be specified but is not required.',
    'autotag_desc_page_content' => '[page_content: id] - Displays the contents of a page. (from Static Page plugin)',
    'yes' => 'Yes',
    'used_by' => 'This template is assigned to %s page(s). It is possible this template is used more than specified here if the template is being retrieved via an autotag in another template.',
    'prev_page' => 'Previous page',
    'next_page' => 'Next page',
    'parent_page' => 'Parent page',
    'page_desc' => 'Setting a previous and/or next page will add HTML link elements rel=”next” and rel=”prev” to the header to indicate the relationship between pages in a paginated series. Actual page navigation links are not added to the page. You have to add these yourself. NOTE: Parent page is currently not being used.',
    'num_pages' => '%s Page(s)'
);

$PLG_staticpages_MESSAGE15 = 'Sinu kommentaar on saadetud läbivaatamiseks. See ilmub lehele pärast moderaatorite poolset heakskiitmist.';
$PLG_staticpages_MESSAGE19 = 'Sinu leht on edukalt salvestatud.';
$PLG_staticpages_MESSAGE20 = 'Sinu leht on edukalt kustutatud.';
$PLG_staticpages_MESSAGE21 = 'This page does not exist yet. To create the page, please fill in the form below. If you are here by mistake, click the Cancel button.';
$PLG_staticpages_MESSAGE22 = 'You could not delete the page. It is a template staticpage and it is currently assigned to 1 or more staticpages.';

// Messages for the plugin upgrade
$PLG_staticpages_MESSAGE3001 = 'Plugina uuendamine pole toetatud.';
$PLG_staticpages_MESSAGE3002 = $LANG32[9];

// Localization of the Admin Configuration UI
$LANG_configsections['staticpages'] = array(
    'label' => 'Staatilised lehed',
    'title' => 'Staatiliste lehtede häälestamine'
);

$LANG_confignames['staticpages'] = array(
    'allow_php' => 'Luba PHP?',
    'sort_by' => 'Keskblokkide sorteerimisalus',
    'sort_menu_by' => 'Menüüelementide sorteerimisalus',
    'sort_list_by' => 'Sort Admin List by',
    'delete_pages' => 'Kustuta lehed, omanikuks?',
    'in_block' => 'Paiguta lehed blokki?',
    'show_hits' => 'Näita klikke?',
    'show_date' => 'Näita aega?',
    'filter_html' => 'Filtreeri HTML-i?',
    'censor' => 'Tsenseeri sisu?',
    'default_permissions' => 'Lehe vaikimisi õigused',
    'autotag_permissions_staticpage' => '[staticpage: ] Permissions',
    'autotag_permissions_staticpage_content' => '[staticpage_content: ] Permissions',
    'aftersave' => 'Pärast lehe salvestamist',
    'atom_max_items' => 'Maks. lehti veebiteenuste lõimes',
    'meta_tags' => 'Luba Meta sildid',
    'comment_code' => 'Comment Default',
    'structured_data_type_default' => 'Structured Data Type Default',
    'draft_flag' => 'Draft Flag Default',
    'disable_breadcrumbs_staticpages' => 'Disable Breadcrumbs',
    'default_cache_time' => 'Default Cache Time',
    'newstaticpagesinterval' => 'Uute staatiliste lehtede aeg',
    'hidenewstaticpages' => 'Peida: Uued staatilised lehed',
    'title_trim_length' => 'Pealkirja kärpimise pikkus',
    'includecenterblocks' => 'Kaasa keskploki staatilised lehed',
    'includephp' => 'Kaasa PHP-ga staatilised lehed',
    'includesearch' => 'Luba staatilised lehed otsingus',
    'includesearchcenterblocks' => 'Kaasa keskploki staatilised lehed',
    'includesearchphp' => 'Kaasa PHP-ga staatilised lehed',
    'includesearchtemplate' => 'Include Template Static Pages'
);

$LANG_configsubgroups['staticpages'] = array(
    'sg_main' => 'Peaseaded'
);

$LANG_tab['staticpages'] = array(
    'tab_main' => 'Static Pages Main Settings',
    'tab_whatsnew' => 'What\'s New Block',
    'tab_search' => 'Search Results',
    'tab_permissions' => 'Default Permissions',
    'tab_autotag_permissions' => 'Autotag Usage Permissions'
);

$LANG_fs['staticpages'] = array(
    'fs_main' => 'Staatiliste  lehtede peaseadistused',
    'fs_whatsnew' => 'Mida uut plokk',
    'fs_search' => 'Otsingu tulemused',
    'fs_permissions' => 'Vaikimisi õigused',
    'fs_autotag_permissions' => 'Autotag Usage Permissions'
);

// Note: entries 0, 1, 9, 12, 17 are the same as in $LANG_configselects['Core']
$LANG_configselects['staticpages'] = array(
    0 => array('Jah' => 1, 'Ei' => 0),
    1 => array('Jah' => true, 'Ei' => false),
    2 => array('Aeg' => 'date', 'Lehe ID' => 'id', 'Tiitel' => 'title'),
    3 => array('Aeg' => 'date', 'Lehe ID' => 'id', 'Tiitel' => 'title', 'Silt' => 'label'),
    4 => array('Date' => 'date', 'Page ID' => 'id', 'Title' => 'title', 'Author' => 'author'),
    5 => array('Hide' => 'hide', 'Show - Use Modified Date' => 'modified', 'Show - Use Created Date' => 'created'),
    9 => array('Suuna edasi lehele' => 'item', 'Näita loetelu' => 'list', 'Näita avalehte' => 'home', 'Näita admini lehten' => 'admin'),
    12 => array('Pole ligipääsu' => 0, 'Ainult loetav' => 2, 'Loetav ja muudetav' => 3),
    13 => array('No access' => 0, 'Use' => 2),
    17 => array('Comments Enabled' => 0, 'Comments Disabled' => -1),
    39 => array('None' => 0, 'WebPage' => 1, 'Article' => 2, 'NewsArticle' => 3, 'BlogPosting' => 4)
);
