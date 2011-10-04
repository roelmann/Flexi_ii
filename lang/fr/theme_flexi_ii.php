<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'theme_standard', language 'fr', branch 'MOODLE_20_STABLE'
 *
 * @package   theme_standard
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 * Traduction par Francis Feytout - université Michel de Montaigne Bordeaux 3
 */

$string['pluginname'] = 'Flexi_II';
$string['usergreeting'] = 'Bonjour {$a}!';
$string['welcome'] = 'Bienvenue, {$a}';
$string['loginhere'] = "Connectez-vous !";

$string['choosereadme'] = '<span style="font-size:2em;font-weight:bold;">thème flexi_ii </span><br>Le but des th&#232;mes flexi est de permettre aux administrateurs Moodle qui n\'ont pas acc&#233;s aux fichiers du serveur web de controler le rendu graphique directement depuis l\'administration du site et &#224; travers une s&#233;rie de param&#233;tres configurables.
Flexi_ii pousse l\'id&#233;e encore plus loin que le Flexi original.<br>
Le design initial du th&#232;me reste basique &#224; dessein afin de vous permettre d\'utiliser vos propres styles, plut&#244;t que de subir ceux du th&#232;me.<br><br>
Ce th&#232;me et sa page de configuration ont &#233;t&#233; cr&#233;&#233; par <b>Richard Oelmann</b> - mais l\'auteur tiens à cr&#233;diter plusieurs membres de la communaut&#233; Moodle sur lesquels il s\'est appuy&#233; pendant le développement : Sam Hemelryk pour son tutoriel sur la page de  configuration, Lei Zhang pour la Awesome bar (de decaf) et Mary Evans pour -entre autres- ses encouragements et ses id&#233;es. 

Vous &#234;tes libre d\'utiliser et de modifier ce travail, mais dans l\'esprit de la communaut&#233; Moodle - et surtout souvenez-vous de cr&#233;diter l\'auteur pour son travail et de ne pas le revendiquer comme votre.';

$string['login'] = 'Identifiant';
$string['myblog'] = 'Mon blog';

$string['region-side-post'] = 'Droite';
$string['region-side-pre'] = 'Gauche';

/*******************************************************************************************************************************/

$string['configtitle'] = 'My Menu Settings Page';
$string['instruction_title']='Notes';
$string['instructions']='<span style="font-size:2em;font-weight:bold;">Configuration du th&#232;me flexi_ii</span>     (Richard Oelmann)<br>Cette page devrait &#234;tre vu avec le th&#232;me flexi_ii appliqu&#233; et tous les blocs dock&#233;s.<br><br>Le but des th&#232;mes flexi est de permettre aux administrateurs Moodle qui n\'ont pas acc&#233;s aux fichiers du serveur web de controler le rendu graphique directement depuis l\'administration du site et &#224; travers une s&#233;rie de param&#233;tres configurables.<br>Le rendu initial du th&#232;me reste basique &#224; dessein afin de vous permettre d\'utiliser vos propres styles tout au long de cette page.<br>Cette page est divis&#233;e en sections fournissant un maximum de possibilit&#233; pour votre charte graphique. Vous pourrez ajouter des couleurs, des arrondis, des images de fond et de d&#233;grad&#233; ; styler les textes et d&#233;caler les diff&#233;rents &#233;l&#233;ments.<br>Vous trouverez aussi une zone de personnalisation des CSS, o&#249; toutes les propri&#233;t&#233;s non g&#233;r&#233;es par la page de configuration pourront &#234;tre d&#233;finies manuellement par des r&#232;gles CSS classiques.';
$string['bartitle']='';
$string['bar']='-----------------------------------------------';
$string['doublebar']='==============================================================================';

/*******************************************************************************************************************************/
//General Page Layout - Mise en page de la page
$string['generalpage_title']='<b>Mise en page générale de la page</b>';
$string['generalpage']='<span style="font-size:1.5em;font-weight:bold;">Mise en page générale de la page</span>
<br>Ces param&#232;tres concernent le sch&#233;ma g&#233;n&#233;ral du fond de page (couleurs et textes).<br>
L\'image de fond HTML (si elle est utilis&#233;e) est r&#233;p&#233;t&#233;e horizontalement et verticalement pour donner un effet de mosa&#239;que autour de la bordure.<br>L\'image du conteneur de page (page wrapper) est r&#233;p&#233;t&#233;e horizontalement sur toute la hauteur de la zone d\'en-t&#234;te, elle peut &#234;tre utilis&#233; en meme temps que l\'image de fond d\'en-t&#234;te pour remplir la zone sur les &#233;crans larges ou pour cr&#233;er un d&#233;grad&#233; horizontal et vertical (voir par exemple le th&#232;me cafelite).<br><br>';
$string['pgimage_title']='Image de positionnement';
$string['pgimage']='<img src="../theme/image.php?theme=flexi_ii&amp;image=settings/mainareas&amp;component=theme" alt="Image de positionnement" title="Image de positionnement"/>';
$string['htmlbackground'] = 'Fond HTML';
$string['htmlbkcolour'] = 'Couleur';
$string['htmlbkimage']='URL de l\'image';
$string['pwrapbackground'] = 'Fond du conteneur de page';
$string['pwrapbkcolour'] = 'Couleur';
$string['pwrapbkimage']='URL de l\'image';
$string['sprebackground'] = 'Fond des colonnes lat&#233;rales';
$string['sprebkcolour'] = 'Gauche - Couleur';
$string['sprebkimage']='Gauche - URL de l\'image';
$string['spostbackground'] = '';
$string['spostbkcolour'] = 'Droite - Couleur';
$string['spostbkimage']='Droite - URL de l\'image';
$string['centrebackground'] = 'Fond entre les colonnes';
$string['centrebkcolour'] = 'Couleur';
$string['centrebkimage']='URL de l\'image';
$string['pageborder_title'] = 'Bordures de la page';
$string['pageborder'] = 'Ajouter les r&#232;gles CSS pour les bordures eg. #ff0000 solid 1px';
$string['footerbackground'] = 'Fond du pied de page';
$string['footerbkcolour'] = 'Couleur';
$string['footerbkimage']='URL de l\'image';

$string['maintext_title']='Texte de corps de page';
$string['maintext']='Couleur';
$string['links']='Couleurs des liens';
$string['mainlinks']='Par d&#233;faut';
$string['hoverlinks']='Survol&#233;s';
$string['dimmedlinks']='Visit&#233;s';
/*******************************************************************************************************************************/
$string['headersettings_title']='Titre de la zone d\'en-t&#234;te';
$string['headersettingspage']='<span style="font-size:1.5em;font-weight:bold;">Configuration de la zone d\'en-t&#234;te</span><br>Ces options affectent l\'apparence de la zone d\'en-t&#234;te. Ici vous pouvez param&#233;trer le type et la position du menu principal, choisir d\'inclure ou non la zone du profil utilisateur, la couleur et l\'image de fond, l\'image du logo et le style du texte (il est possible de le rendre invisible).<br>Vous pouvez aussi g&#233;rer une couleur et une image de fond pour les menus et la navbar du fil d\'Ariane.<br><br>Notes:<br>1.Si vous utilisez plusieurs menus, attention au chevauchement des boites d&#233;roulantes. Alternativement, des valeurs de z-index peuvent &#234;tre utilis&#233;es dans la zone de personnalisation des CSS en bas de cette page.<br>2.Pour cacher le texte de l\'en-t&#234;te, mettez sa taille &#224; 0%';

$string['headersettingsimage']='<img src="../theme/image.php?theme=flexi_ii&amp;image=settings/header&amp;component=theme" alt="Image de la zone d\'en-t&#234;te" title="Image de la zone d\'en-t&#234;te"/>';
$string['menu1_title'] = 'Menu 1';
$string['menu1'] = '';
$string['menu2_title'] = 'Menu 2';
$string['menu2'] = '';
$string['menu3_title'] = 'Menu 3';
$string['menu3'] = '';
$string['profilevisible_title']='Zone de profil';
$string['profilevisible']='';

$string['logo'] = 'Logo';
$string['logodesc'] = 'URL du logo';
$string['headerbackground'] = '<b>Region de l\'en-t&#234;te</b>';
$string['headerbackgrounddesc'] = 'Couleur de fond';
$string['headerbackgroundimage']='URL de l\'image de fond';
$string['headertext'] = 'Texte de l\'en-t&#234;te';
$string['headertextdesc'] = 'Couleur';
$string['headertxtsize']='Taille';
$string['headertxtweight']='Poids';
$string['headertxtstyle']='Style';
$string['headertextpos']='D&#233;calage du texte (marges)';

$string['breadcrumb']='<b>Fil d\'Ariane</b>';
$string['breadcrumbbg']='Couleur de fond';
$string['breadcrumbimg']='URL de l\'image de fond';
$string['navbartext'] = 'Texte de la Navbar';
$string['navbartextdesc'] = 'Couleur';
$string['navbartxtsize']='Taille';
$string['navbartxtweight']='Poids';
$string['navbartxtstyle']='Style';

$string['menu']='<b>Barre de menu</b>';
$string['menubg']='Couleur de fond';
$string['menuimg']='URL de l\'image de fond';
$string['menutext'] = 'Texte du menu';
$string['menutextdesc'] = 'Couleur';
$string['menutxtsize']='Taille';
$string['menutxtweight']='Poids';
$string['menutxtstyle']='Style';
$string['dropdown']='<b>Menu D&#233;roul&#233;</b>';
$string['dropdownbg']='Couleur de fond';
$string['dropdownimg']='URL de l\'image de fond';
$string['dropdowntext'] = 'Texte d&#233;roul&#233;';
$string['dropdowntextdesc'] = 'Couleur';
$string['dropdowntxtsize']='Taille';
$string['dropdowntxtweight']='Poids';
$string['dropdowntxtstyle']='Style';
$string['menuhover']='<b>Menu survol&#233;</b>';
$string['menuhoverbg']='Couleur de fond';
$string['menuhoverimg']='URL de l\'image de fond';
$string['menuhovertext'] = 'Texte du menu survol&#233;e';
$string['menuhovertextdesc'] = 'Couleur';
$string['menuhovertxtsize']='Taille';
$string['menuhovertxtweight']='Poids';
$string['menuhovertxtstyle']='Style';
$string['sechead']='Titre de section';
$string['secheadbgcolour']='Couleur de fond';
$string['secheadbgimage']='URL de l\'image';
$string['secheadtxtcolour']='Couleur du texte';
$string['secheadtxtsize']='Taille';
$string['secheadtxtweight']='Poids';
$string['secheadtxtstyle']='Style';

/*******************************************************************************************************************************/
//Side Blocks layout - Gestion des blocs latéraux
$string['blocks_title']='Titre de bloc';
$string['blocks']='<span style="font-size:1.5em;font-weight:bold;">Configuration des blocs lat&#233;raux</span><br>Ces options gèrent l\'apparence des blocs non dock&#233;s.';
$string['blocksimage']='<img src="../theme/image.php?theme=flexi_ii&amp;image=settings/sidebar&amp;component=theme" alt="Image d\'un bloc" title="Image d\'un bloc"/>';
$string['sideblockshead']='<b>Zone de titre des blocs</b>';
$string['sideblocksheadbgcolour']='Couleur de fond';
$string['sideblocksheadbgimage']='URL de l\'image';
$string['sideblocksheadtxtcolour']='Couleur du texte';
$string['sideblocksheadtxtsize']='Taille';
$string['sideblocksheadtxtweight']='Poids';
$string['sideblocksheadtxtstyle']='Style';
$string['sideblockscontent']='<b>Int&#233;rieur des blocs</b>';
$string['sideblockscontentbgcolour']='Couleur de fond';
$string['sideblockscontentbgimage']='URL de l\'image';
$string['sideblockscontenttxtcolour']='Couleur du texte';
$string['sideblockscontenttxtsize']='Taille';
$string['sideblockscontenttxtweight']='Poids';
$string['sideblockscontenttxtstyle']='Style';
$string['blocksborder_title']='<b>Bordures des blocs lat&#233;raux</b>';
$string['blocksborder']='Ajouter les r&#232;gles CSS pour les bordures eg. #ff0000 solid 1px';

//Rounded Corners - Arrondis
$string['Rounded_Corners']='Configuration des arrondis';
$string['sechead_Rounded_Corners']='Arrondis des titres de section';
$string['header_Rounded_Corners']='Arrondis de l\'en-t&#234;te';
$string['breadcrumb_Rounded_Corners']='Arrondis du fil d\'Ariane';
$string['fleximenu_Rounded_Corners']='Arrondis du Fleximenu';
$string['dockpanel_Rounded_Corners']='Arrondis du Dock';
$string['dockpanelblocks_Rounded_Corners']='<b>Arrondis des bloc du dock</b>';
$string['sideblocks_Rounded_Corners']='<b>Arrondis des blocs lat&#233;raux</b>';
$string['top_left']='Haut gauche';
$string['top_right']='Haut droit';
$string['bottom_left']='Bas gauche';
$string['bottom_right']='Bas droit';


/*******************************************************************************************************************************/
/* Dock Panel - Zone du dock */
$string['dockpanel_title']='Configuration du dock';
$string['dockpanel']='<span style="font-size:1.5em;font-weight:bold;">Configuration du dock</span><br>Ces options permettent de configurer l\'apparence du dock, des onglets et des blocs survol&#233;s. ';
$string['dockpanelimage']='<img src="../theme/image.php?theme=flexi_ii&amp;image=settings/dock&amp;component=theme" alt="Image du dock" title="Image du dock"/>';
$string['dockbackground_title']='<b>Zone d\'onglet du dock</b>';
$string['dockpanelbackground']='Couleur de fond du liser&#233; du dock';
$string['dockitembackground']='Couleur de fond des onglets du dock';
$string['dockpanellabel']='';
$string['dockpanellabeltxtcolour']='Couleur du texte';
$string['dockpanellabeltxtsize']='Taille';
$string['dockpanellabeltxtweight']='Poids';
$string['dockpanellabeltxtstyle']='Style';
$string['dockpanelblockshead']='<b>Zone de titre d\'un bloc dans le dock</b>';
$string['dockpanelblocksheadbgcolour']='Couleur de fond';
$string['dockpanelblocksheadbgimage']='URL de l\'image';
$string['dockpanelblocksheadtxtcolour']='Couleur du texte';
$string['dockpanelblocksheadtxtsize']='Taille';
$string['dockpanelblocksheadtxtweight']='Poids';
$string['dockpanelblocksheadtxtstyle']='Style';
$string['dockpanelblockscontent']='<b>Contenu des blocs dans le dock</b>';
$string['dockpanelblockscontentbgcolour']='Couleur de fond';
$string['dockpanelblockscontentbgimage']='URL de l\'image';
$string['dockpanelblockscontenttxtcolour']='Couleur du texte';
$string['dockpanelblockscontenttxtsize']='Taille';
$string['dockpanelblockscontenttxtweight']='Poids';
$string['dockpanelblockscontenttxtstyle']='Style';
$string['dockpanelblocksborder_title']='<b>Bordure du bloc dans le dock</b>';
$string['dockpanelblocksborder']='Ajouter les r&#232;gles CSS pour les bordures eg. #ff0000 solid 1px';

/*******************************************************************************************************************************/
$string['footnote'] = 'Pied de page';
$string['footnotedesc'] = 'Le contenu de cette zone apparaitra au bas de chaque page.';

$string['customcss'] = 'Personnalisation des CSS';
$string['customcssdesc'] = 'Vous pouvez personnaliser le th&#232;me en ajoutant vos propri&#233;t&#233;s CSS dans la zone ci-dessus.Elles seront prises en compte sur chaque page du site.<br>Note: les options ci-dessus configurables ne devraient pas &#234;tre restyl&#233;es ici.';
