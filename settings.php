<?php

/**
 * Settings for the flexi_ii theme
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

/*************************************************** HEADER/INSTRUCTIONS **********************************************************************/

//INSTRUCTIONS
$name = 'theme_flexi_ii/instructions';
$title=get_string('instruction_title','theme_flexi_ii');
$description = get_string('instructions', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '');
$settings->add($setting);

//Doublebar1
$name = 'theme_flexi_ii/doublebar1';
$title=get_string('bar','theme_flexi_ii');
$description = get_string('doublebar', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '');
$settings->add($setting);


/********************************************************************************************************************************************/

// GENERAL PAGE COLOUR SCHEME SETTINGS
// Page settings heading
$name = 'theme_flexi_ii/pgsettingsheading';
$title=get_string('generalpage_title','theme_flexi_ii');
$description = get_string('generalpage', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '');
$settings->add($setting);
// Page Image
$name = 'theme_flexi_ii/pgimage';
$title=get_string('pgimage_title','theme_flexi_ii');
$description = get_string('pgimage', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$settings->add($setting);

//HTML background
$name = 'theme_flexi_ii/htmlbkcolour';
$title=get_string('htmlbackground','theme_flexi_ii');
$description = get_string('htmlbkcolour', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_CLEAN, 10);
$settings->add($setting);

$name = 'theme_flexi_ii/htmlbkimage';
$title=get_string('htmlbackground','theme_flexi_ii');
$description = get_string('htmlbkimage', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$settings->add($setting);

//Page wrapper background
$name = 'theme_flexi_ii/pwrapbkcolour';
$title=get_string('pwrapbackground','theme_flexi_ii');
$description = get_string('pwrapbkcolour', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_CLEAN, 10);
$settings->add($setting);

$name = 'theme_flexi_ii/pwrapbkimage';
$title=get_string('pwrapbackground','theme_flexi_ii');
$description = get_string('pwrapbkimage', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$settings->add($setting);

//Side Pre background
$name = 'theme_flexi_ii/sprebkcolour';
$title=get_string('sprebackground','theme_flexi_ii');
$description = get_string('sprebkcolour', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_CLEAN, 10);
$settings->add($setting);

$name = 'theme_flexi_ii/sprebkimage';
$title=get_string('sprebackground','theme_flexi_ii');
$description = get_string('sprebkimage', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$settings->add($setting);

//Side Post background
$name = 'theme_flexi_ii/spostbkcolour';
$title=get_string('spostbackground','theme_flexi_ii');
$description = get_string('spostbkcolour', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_CLEAN, 10);
$settings->add($setting);

$name = 'theme_flexi_ii/spostbkimage';
$title=get_string('spostbackground','theme_flexi_ii');
$description = get_string('spostbkimage', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$settings->add($setting);

//Centre region background
$name = 'theme_flexi_ii/centrebkcolour';
$title=get_string('centrebackground','theme_flexi_ii');
$description = get_string('centrebkcolour', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_CLEAN, 10);
$settings->add($setting);

$name = 'theme_flexi_ii/centrebkimage';
$title=get_string('centrebackground','theme_flexi_ii');
$description = get_string('centrebkimage', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$settings->add($setting);

//Page wrap border background
$name = 'theme_flexi_ii/pageborder';
$title=get_string('pageborder_title','theme_flexi_ii');
$description = get_string('pageborder', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_CLEAN, 50);
$settings->add($setting);

//Footer background
$name = 'theme_flexi_ii/footerbkcolour';
$title=get_string('footerbackground','theme_flexi_ii');
$description = get_string('footerbkcolour', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_CLEAN, 10);
$settings->add($setting);

$name = 'theme_flexi_ii/footerbkimage';
$title=get_string('footerbackground','theme_flexi_ii');
$description = get_string('footerbkimage', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$settings->add($setting);

//Main body text
$name = 'theme_flexi_ii/maintext';
$title=get_string('maintext_title','theme_flexi_ii');
$description = get_string('maintext', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '');
$settings->add($setting);

//Links
$name = 'theme_flexi_ii/links';
$title=get_string('links','theme_flexi_ii');
$description = get_string('mainlinks', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '');
$settings->add($setting);

$name = 'theme_flexi_ii/hoverlinks';
$title=get_string('links','theme_flexi_ii');
$description = get_string('hoverlinks', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '');
$settings->add($setting);

$name = 'theme_flexi_ii/dimmedlinks';
$title=get_string('links','theme_flexi_ii');
$description = get_string('dimmedlinks', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '');
$settings->add($setting);

//Section Headings
$name = 'theme_flexi_ii/secheadbgcolour';
$title=get_string('sechead','theme_flexi_ii');
$description = get_string('secheadbgcolour', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '');
$settings->add($setting);

$name = 'theme_flexi_ii/secheadbgimage';
$title=get_string('sechead','theme_flexi_ii');
$description = get_string('secheadbgimage', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$settings->add($setting);

$name = 'theme_flexi_ii/secheadtxtcolour';
$title=get_string('sechead','theme_flexi_ii');
$description = get_string('secheadtxtcolour', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_CLEAN, 22);
$settings->add($setting);

$name = 'theme_flexi_ii/secheadtxtsize';
$title=get_string('sechead','theme_flexi_ii');
$description = get_string('secheadtxtsize', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_CLEAN, 5);
$settings->add($setting);

$name = 'theme_flexi_ii/secheadtxtweight';
$title=get_string('sechead','theme_flexi_ii');
$description = get_string('secheadtxtweight', 'theme_flexi_ii');
    $default = 400;
    $choices = array(400=>'400-Normal', 100=>'100-Lightest', 200=>'200', 300=>'300-Light', 500=>'500', 600=>'600', 700=>'700-Bold', 800=>'800', 900=>'900-Bolder');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);

$name = 'theme_flexi_ii/secheadtxtstyle';
$title=get_string('sechead','theme_flexi_ii');
$description = get_string('secheadtxtstyle', 'theme_flexi_ii');
    $default = 'normal';
    $choices = array('normal'=>'Normal', 'italic'=>'Italic', 'oblique'=>'Oblique');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);
//Section heading rounded corners

$name = 'theme_flexi_ii/secheadrctl';
$title=get_string('sechead_Rounded_Corners','theme_flexi_ii');
$description = get_string('top_left', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_CLEAN, 5);
$settings->add($setting);

$name = 'theme_flexi_ii/secheadrctr';
$title=get_string('Rounded_Corners','theme_flexi_ii');
$description = get_string('top_right', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_CLEAN, 5);
$settings->add($setting);

$name = 'theme_flexi_ii/secheadrcbl';
$title=get_string('Rounded_Corners','theme_flexi_ii');
$description = get_string('bottom_left', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_CLEAN, 5);
$settings->add($setting);

$name = 'theme_flexi_ii/secheadrcbr';
$title=get_string('Rounded_Corners','theme_flexi_ii');
$description = get_string('bottom_right', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_CLEAN, 5);
$settings->add($setting);


//Doublebar2
$name = 'theme_flexi_ii/doublebar2';
$title=get_string('bar','theme_flexi_ii');
$description = get_string('doublebar', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '');
$settings->add($setting);
/**************************************************************************************/
// HEADER SECTION SETTINGS
// Header section heading
$name = 'theme_flexi_ii/hdrsettingsheading';
$title=get_string('headersettings_title','theme_flexi_ii');
$description = get_string('headersettingspage', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '');
$settings->add($setting);
// Header section Image
$name = 'theme_flexi_ii/headersettingsimage';
$title=get_string('headersettings_title','theme_flexi_ii');
$description = get_string('headersettingsimage', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$settings->add($setting);
// Menu position 1
$name = 'theme_flexi_ii/menu1';
$title=get_string('menu1_title','theme_flexi_ii');
$description = get_string('menu1', 'theme_flexi_ii');
    $default = '';
    $choices = array('None'=>'No menu here', 'custom'=>'Custom Menu only', 'custlinks'=>'Custom Menu with Home/Logging/My links');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);
// Menu position 2
$name = 'theme_flexi_ii/menu2';
$title=get_string('menu2_title','theme_flexi_ii');
$description = get_string('menu2', 'theme_flexi_ii');
    $default = '';
    $choices = array('None'=>'No menu here', 'custom'=>'Custom Menu only', 'custlinks'=>'Custom Menu with Home/Logging/My links');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);
$name = 'theme_flexi_ii/menu3';
$title=get_string('menu3_title','theme_flexi_ii');
$description = get_string('menu3', 'theme_flexi_ii');
    $default = '';
    $choices = array('None'=>'No menu here', 'custom'=>'Custom Menu only', 'custlinks'=>'Custom Menu with Home/Logging/My links');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);
// Profile Block
$name = 'theme_flexi_ii/profilevisible';
$title=get_string('profilevisible_title','theme_flexi_ii');
$description = get_string('profilevisible', 'theme_flexi_ii');
    $default = '';
    $choices = array('visible'=>'Profile Block', 'none'=>'No Profile Block');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);

// Header text color setting

// Header background color setting
$name = 'theme_flexi_ii/headerbackground';
$title = get_string('headerbackground','theme_flexi_ii');
$description = get_string('headerbackgrounddesc', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '');
$settings->add($setting);

// Header background image setting
$name = 'theme_flexi_ii/headerbackgroundimage';
$title = get_string('headerbackground','theme_flexi_ii');
$description = get_string('headerbackgroundimage', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$settings->add($setting);

// Logo file setting
$name = 'theme_flexi_ii/logo';
$title = get_string('logo','theme_flexi_ii');
$description = get_string('logodesc', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$settings->add($setting);

$name = 'theme_flexi_ii/headertext';
$title = get_string('headertext','theme_flexi_ii');
$description = get_string('headertextdesc', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_CLEAN, 22);
$settings->add($setting);

$name = 'theme_flexi_ii/headertxtsize';
$title=get_string('headertext','theme_flexi_ii');
$description = get_string('headertxtsize', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_CLEAN, 5);
$settings->add($setting);

$name = 'theme_flexi_ii/headertxtweight';
$title=get_string('headertext','theme_flexi_ii');
$description = get_string('headertxtweight', 'theme_flexi_ii');
    $default = 400;
    $choices = array(400=>'400-Normal', 100=>'100-Lightest', 200=>'200', 300=>'300-Light', 500=>'500', 600=>'600', 700=>'700-Bold', 800=>'800', 900=>'900-Bolder');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);

$name = 'theme_flexi_ii/headertxtstyle';
$title=get_string('headertext','theme_flexi_ii');
$description = get_string('headertxtstyle', 'theme_flexi_ii');
    $default = 'normal';
    $choices = array('normal'=>'Normal', 'italic'=>'Italic', 'oblique'=>'Oblique');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);
$name = 'theme_flexi_ii/headertextposition';
$title = get_string('headertext','theme_flexi_ii');
$description = get_string('headertextpos', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_CLEAN, 22);
$settings->add($setting);

//Bar1
$name = 'theme_flexi_ii/bar1';
$title=get_string('bar','theme_flexi_ii');
$description = get_string('bar', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '');
$settings->add($setting);

// Breadcrumb background color setting
$name = 'theme_flexi_ii/breadcrumb';
$title = get_string('breadcrumb','theme_flexi_ii');
$description = get_string('breadcrumbbg', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '');
$settings->add($setting);

// Breadcrumb background image setting
$name = 'theme_flexi_ii/breadcrumbimage';
$title = get_string('breadcrumb','theme_flexi_ii');
$description = get_string('breadcrumbimg', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$settings->add($setting);

// navbar text color setting
$name = 'theme_flexi_ii/navbartext';
$title = get_string('navbartext','theme_flexi_ii');
$description = get_string('navbartextdesc', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_CLEAN, 22);
$settings->add($setting);

$name = 'theme_flexi_ii/navbartxtsize';
$title=get_string('navbartext','theme_flexi_ii');
$description = get_string('navbartxtsize', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_CLEAN, 5);
$settings->add($setting);

$name = 'theme_flexi_ii/navbartxtweight';
$title=get_string('navbartext','theme_flexi_ii');
$description = get_string('navbartxtweight', 'theme_flexi_ii');
    $default = 400;
    $choices = array(400=>'400-Normal', 100=>'100-Lightest', 200=>'200', 300=>'300-Light', 500=>'500', 600=>'600', 700=>'700-Bold', 800=>'800', 900=>'900-Bolder');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);

$name = 'theme_flexi_ii/navbartxtstyle';
$title=get_string('navbartext','theme_flexi_ii');
$description = get_string('navbartxtstyle', 'theme_flexi_ii');
    $default = 'normal';
    $choices = array('normal'=>'Normal', 'italic'=>'Italic', 'oblique'=>'Oblique');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);
//Bar2
$name = 'theme_flexi_ii/bar2';
$title=get_string('bar','theme_flexi_ii');
$description = get_string('bar', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '');
$settings->add($setting);

// menu background color setting
$name = 'theme_flexi_ii/menu';
$title = get_string('menu','theme_flexi_ii');
$description = get_string('menubg', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '');
$settings->add($setting);

// menu background image setting
$name = 'theme_flexi_ii/menuimage';
$title = get_string('bar','theme_flexi_ii');
$description = get_string('menuimg', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$settings->add($setting);

// menu text color setting
$name = 'theme_flexi_ii/menutext';
$title = get_string('menutext','theme_flexi_ii');
$description = get_string('menutextdesc', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_CLEAN, 22);
$settings->add($setting);

$name = 'theme_flexi_ii/menutxtsize';
$title=get_string('bar','theme_flexi_ii');
$description = get_string('menutxtsize', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_CLEAN, 5);
$settings->add($setting);

$name = 'theme_flexi_ii/menutxtweight';
$title=get_string('bar','theme_flexi_ii');
$description = get_string('menutxtweight', 'theme_flexi_ii');
    $default = 400;
    $choices = array(400=>'400-Normal', 100=>'100-Lightest', 200=>'200', 300=>'300-Light', 500=>'500', 600=>'600', 700=>'700-Bold', 800=>'800', 900=>'900-Bolder');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);

$name = 'theme_flexi_ii/menutxtstyle';
$title=get_string('bar','theme_flexi_ii');
$description = get_string('menutxtstyle', 'theme_flexi_ii');
    $default = 'normal';
    $choices = array('normal'=>'Normal', 'italic'=>'Italic', 'oblique'=>'Oblique');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);


// dropdown background color setting
$name = 'theme_flexi_ii/dropdown';
$title = get_string('dropdown','theme_flexi_ii');
$description = get_string('dropdownbg', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '');
$settings->add($setting);

// dropdown background image setting
$name = 'theme_flexi_ii/dropdownimage';
$title = get_string('bar','theme_flexi_ii');
$description = get_string('dropdownimg', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$settings->add($setting);

// dropdown text color setting
$name = 'theme_flexi_ii/dropdowntext';
$title = get_string('dropdowntext','theme_flexi_ii');
$description = get_string('dropdowntextdesc', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_CLEAN, 22);
$settings->add($setting);

$name = 'theme_flexi_ii/dropdowntxtsize';
$title=get_string('bar','theme_flexi_ii');
$description = get_string('dropdowntxtsize', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_CLEAN, 5);
$settings->add($setting);

$name = 'theme_flexi_ii/dropdowntxtweight';
$title=get_string('bar','theme_flexi_ii');
$description = get_string('dropdowntxtweight', 'theme_flexi_ii');
    $default = 400;
    $choices = array(400=>'400-Normal', 100=>'100-Lightest', 200=>'200', 300=>'300-Light', 500=>'500', 600=>'600', 700=>'700-Bold', 800=>'800', 900=>'900-Bolder');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);

$name = 'theme_flexi_ii/dropdowntxtstyle';
$title=get_string('bar','theme_flexi_ii');
$description = get_string('dropdowntxtstyle', 'theme_flexi_ii');
    $default = 'normal';
    $choices = array('normal'=>'Normal', 'italic'=>'Italic', 'oblique'=>'Oblique');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);


// menuhover background color setting
$name = 'theme_flexi_ii/menuhover';
$title = get_string('menuhover','theme_flexi_ii');
$description = get_string('menuhoverbg', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '');
$settings->add($setting);

// menuhover background image setting
$name = 'theme_flexi_ii/menuhoverimage';
$title = get_string('bar','theme_flexi_ii');
$description = get_string('menuhoverimg', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$settings->add($setting);

// menuhover text color setting
$name = 'theme_flexi_ii/menuhovertext';
$title = get_string('menuhovertext','theme_flexi_ii');
$description = get_string('menuhovertextdesc', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_CLEAN, 22);
$settings->add($setting);

$name = 'theme_flexi_ii/menuhovertxtsize';
$title=get_string('bar','theme_flexi_ii');
$description = get_string('menuhovertxtsize', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_CLEAN, 5);
$settings->add($setting);

$name = 'theme_flexi_ii/menuhovertxtweight';
$title=get_string('bar','theme_flexi_ii');
$description = get_string('menuhovertxtweight', 'theme_flexi_ii');
    $default = 400;
    $choices = array(400=>'400-Normal', 100=>'100-Lightest', 200=>'200', 300=>'300-Light', 500=>'500', 600=>'600', 700=>'700-Bold', 800=>'800', 900=>'900-Bolder');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);

$name = 'theme_flexi_ii/menuhovertxtstyle';
$title=get_string('bar','theme_flexi_ii');
$description = get_string('menuhovertxtstyle', 'theme_flexi_ii');
    $default = 'normal';
    $choices = array('normal'=>'Normal', 'italic'=>'Italic', 'oblique'=>'Oblique');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);

//Doublebar2
$name = 'theme_flexi_ii/doublebar3';
$title=get_string('bar','theme_flexi_ii');
$description = get_string('doublebar', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '');
$settings->add($setting);
/**************************************************************************************/

// Side Block settings heading
$name = 'theme_flexi_ii/blocksinstructions';
$title=get_string('blocks_title','theme_flexi_ii');
$description = get_string('blocks', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$settings->add($setting);
// Header Image
$name = 'theme_flexi_ii/blocksimage';
$title=get_string('blocks_title','theme_flexi_ii');
$description = get_string('blocksimage', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$settings->add($setting);

//sideblocksheads
$name = 'theme_flexi_ii/sideblocksheadbgcolour';
$title=get_string('sideblockshead','theme_flexi_ii');
$description = get_string('sideblocksheadbgcolour', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '');
$settings->add($setting);

$name = 'theme_flexi_ii/sideblocksheadbgimage';
$title=get_string('sideblockshead','theme_flexi_ii');
$description = get_string('sideblocksheadbgimage', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$settings->add($setting);

$name = 'theme_flexi_ii/sideblocksheadtxtcolour';
$title=get_string('sideblockshead','theme_flexi_ii');
$description = get_string('sideblocksheadtxtcolour', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '');
$settings->add($setting);

$name = 'theme_flexi_ii/sideblocksheadtxtsize';
$title=get_string('sideblockshead','theme_flexi_ii');
$description = get_string('sideblocksheadtxtsize', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_CLEAN, 5);
$settings->add($setting);

$name = 'theme_flexi_ii/sideblocksheadtxtweight';
$title=get_string('sideblockshead','theme_flexi_ii');
$description = get_string('sideblocksheadtxtweight', 'theme_flexi_ii');
    $default = 400;
    $choices = array(400=>'400-Normal', 100=>'100-Lightest', 200=>'200', 300=>'300-Light', 500=>'500', 600=>'600', 700=>'700-Bold', 800=>'800', 900=>'900-Bolder');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);

$name = 'theme_flexi_ii/sideblocksheadtxtstyle';
$title=get_string('sideblockshead','theme_flexi_ii');
$description = get_string('sideblocksheadtxtstyle', 'theme_flexi_ii');
    $default = 'normal';
    $choices = array('normal'=>'Normal', 'italic'=>'Italic', 'oblique'=>'Oblique');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);

//sideblockscontents
$name = 'theme_flexi_ii/sideblockscontentbgcolour';
$title=get_string('sideblockscontent','theme_flexi_ii');
$description = get_string('sideblockscontentbgcolour', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '');
$settings->add($setting);

$name = 'theme_flexi_ii/sideblockscontentbgimage';
$title=get_string('sideblockscontent','theme_flexi_ii');
$description = get_string('sideblockscontentbgimage', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$settings->add($setting);

$name = 'theme_flexi_ii/sideblockscontenttxtcolour';
$title=get_string('sideblockscontent','theme_flexi_ii');
$description = get_string('sideblockscontenttxtcolour', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '');
$settings->add($setting);

$name = 'theme_flexi_ii/sideblockscontenttxtsize';
$title=get_string('sideblockscontent','theme_flexi_ii');
$description = get_string('sideblockscontenttxtsize', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_CLEAN, 5);
$settings->add($setting);

$name = 'theme_flexi_ii/sideblockscontenttxtweight';
$title=get_string('sideblockscontent','theme_flexi_ii');
$description = get_string('sideblockscontenttxtweight', 'theme_flexi_ii');
    $default = 400;
    $choices = array(400=>'400-Normal', 100=>'100-Lightest', 200=>'200', 300=>'300-Light', 500=>'500', 600=>'600', 700=>'700-Bold', 800=>'800', 900=>'900-Bolder');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);

$name = 'theme_flexi_ii/sideblockscontenttxtstyle';
$title=get_string('sideblockscontent','theme_flexi_ii');
$description = get_string('sideblockscontenttxtstyle', 'theme_flexi_ii');
    $default = 'normal';
    $choices = array('normal'=>'Normal', 'italic'=>'Italic', 'oblique'=>'Oblique');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);
//Side Block border
$name = 'theme_flexi_ii/blocksborder';
$title=get_string('blocksborder_title','theme_flexi_ii');
$description = get_string('blocksborder', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '',PARAM_CLEAN, 50);
$settings->add($setting);

$name = 'theme_flexi_ii/sideblocksrctl';
$title=get_string('sideblocks_Rounded_Corners','theme_flexi_ii');
$description = get_string('top_left', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_CLEAN, 5);
$settings->add($setting);

$name = 'theme_flexi_ii/sideblocksrctr';
$title=get_string('Rounded_Corners','theme_flexi_ii');
$description = get_string('top_right', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_CLEAN, 5);
$settings->add($setting);

$name = 'theme_flexi_ii/sideblocksrcbl';
$title=get_string('Rounded_Corners','theme_flexi_ii');
$description = get_string('bottom_left', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_CLEAN, 5);
$settings->add($setting);

$name = 'theme_flexi_ii/sideblocksrcbr';
$title=get_string('Rounded_Corners','theme_flexi_ii');
$description = get_string('bottom_right', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_CLEAN, 5);
$settings->add($setting);

//Doublebar4
$name = 'theme_flexi_ii/doublebar4';
$title=get_string('bar','theme_flexi_ii');
$description = get_string('doublebar', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '');
$settings->add($setting);
/**************************************************************************************/

//DOCK PANEL SETTINGS
// Docking panel settings heading
$name = 'theme_flexi_ii/dockpanelinstructions';
$title=get_string('dockpanel_title','theme_flexi_ii');
$description = get_string('dockpanel', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$settings->add($setting);
// Docking panel Image
$name = 'theme_flexi_ii/dockpanelimage';
$title=get_string('dockpanel_title','theme_flexi_ii');
$description = get_string('dockpanelimage', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$settings->add($setting);

//Dock panel background colour
$name = 'theme_flexi_ii/dockpanelbackground';
$title=get_string('dockbackground_title','theme_flexi_ii');
$description = get_string('dockpanelbackground', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '');
$settings->add($setting);
//Dock panel item background colour
$name = 'theme_flexi_ii/dockitembackground';
$title=get_string('dockbackground_title','theme_flexi_ii');
$description = get_string('dockitembackground', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '');
$settings->add($setting);




//Dock panel labels
$name = 'theme_flexi_ii/dockpanellabeltxtcolour';
$title=get_string('dockpanellabel','theme_flexi_ii');
$description = get_string('dockpanellabeltxtcolour', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '');
$settings->add($setting);

$name = 'theme_flexi_ii/dockpanellabeltxtsize';
$title=get_string('dockpanellabel','theme_flexi_ii');
$description = get_string('dockpanellabeltxtsize', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_CLEAN, 5);
$settings->add($setting);

$name = 'theme_flexi_ii/dockpanellabeltxtweight';
$title=get_string('dockpanellabel','theme_flexi_ii');
$description = get_string('dockpanellabeltxtweight', 'theme_flexi_ii');
    $default = 400;
    $choices = array(400=>'400-Normal', 100=>'100-Lightest', 200=>'200', 300=>'300-Light', 500=>'500', 600=>'600', 700=>'700-Bold', 800=>'800', 900=>'900-Bolder');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);

$name = 'theme_flexi_ii/dockpanellabeltxtstyle';
$title=get_string('dockpanellabel','theme_flexi_ii');
$description = get_string('dockpanellabeltxtstyle', 'theme_flexi_ii');
    $default = 'normal';
    $choices = array('normal'=>'Normal', 'italic'=>'Italic', 'oblique'=>'Oblique');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);

//dockpanel rounded corners

$name = 'theme_flexi_ii/dockpanelrctl';
$title=get_string('dockpanel_Rounded_Corners','theme_flexi_ii');
$description = get_string('top_left', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_CLEAN, 5);
$settings->add($setting);

$name = 'theme_flexi_ii/dockpanelrctr';
$title=get_string('Rounded_Corners','theme_flexi_ii');
$description = get_string('top_right', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_CLEAN, 5);
$settings->add($setting);

$name = 'theme_flexi_ii/dockpanelrcbl';
$title=get_string('Rounded_Corners','theme_flexi_ii');
$description = get_string('bottom_left', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_CLEAN, 5);
$settings->add($setting);

$name = 'theme_flexi_ii/dockpanelrcbr';
$title=get_string('Rounded_Corners','theme_flexi_ii');
$description = get_string('bottom_right', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_CLEAN, 5);
$settings->add($setting);


//Bar3
$name = 'theme_flexi_ii/bar3';
$title=get_string('bar','theme_flexi_ii');
$description = get_string('bar', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '');
$settings->add($setting);

//dockpanelblocksheads
$name = 'theme_flexi_ii/dockpanelblocksheadbgcolour';
$title=get_string('dockpanelblockshead','theme_flexi_ii');
$description = get_string('dockpanelblocksheadbgcolour', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '');
$settings->add($setting);

$name = 'theme_flexi_ii/dockpanelblocksheadbgimage';
$title=get_string('dockpanelblockshead','theme_flexi_ii');
$description = get_string('dockpanelblocksheadbgimage', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$settings->add($setting);

$name = 'theme_flexi_ii/dockpanelblocksheadtxtcolour';
$title=get_string('dockpanelblockshead','theme_flexi_ii');
$description = get_string('dockpanelblocksheadtxtcolour', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '');
$settings->add($setting);

$name = 'theme_flexi_ii/dockpanelblocksheadtxtsize';
$title=get_string('dockpanelblockshead','theme_flexi_ii');
$description = get_string('dockpanelblocksheadtxtsize', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_CLEAN, 5);
$settings->add($setting);

$name = 'theme_flexi_ii/dockpanelblocksheadtxtweight';
$title=get_string('dockpanelblockshead','theme_flexi_ii');
$description = get_string('dockpanelblocksheadtxtweight', 'theme_flexi_ii');
    $default = 400;
    $choices = array(400=>'400-Normal', 100=>'100-Lightest', 200=>'200', 300=>'300-Light', 500=>'500', 600=>'600', 700=>'700-Bold', 800=>'800', 900=>'900-Bolder');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);

$name = 'theme_flexi_ii/dockpanelblocksheadtxtstyle';
$title=get_string('dockpanelblockshead','theme_flexi_ii');
$description = get_string('dockpanelblocksheadtxtstyle', 'theme_flexi_ii');
    $default = 'normal';
    $choices = array('normal'=>'Normal', 'italic'=>'Italic', 'oblique'=>'Oblique');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);

//dockpanelblockscontents
$name = 'theme_flexi_ii/dockpanelblockscontentbgcolour';
$title=get_string('dockpanelblockscontent','theme_flexi_ii');
$description = get_string('dockpanelblockscontentbgcolour', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '');
$settings->add($setting);

$name = 'theme_flexi_ii/dockpanelblockscontentbgimage';
$title=get_string('dockpanelblockscontent','theme_flexi_ii');
$description = get_string('dockpanelblockscontentbgimage', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$settings->add($setting);

$name = 'theme_flexi_ii/dockpanelblockscontenttxtcolour';
$title=get_string('dockpanelblockscontent','theme_flexi_ii');
$description = get_string('dockpanelblockscontenttxtcolour', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '');
$settings->add($setting);

$name = 'theme_flexi_ii/dockpanelblockscontenttxtsize';
$title=get_string('dockpanelblockscontent','theme_flexi_ii');
$description = get_string('dockpanelblockscontenttxtsize', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_CLEAN, 5);
$settings->add($setting);

$name = 'theme_flexi_ii/dockpanelblockscontenttxtweight';
$title=get_string('dockpanelblockscontent','theme_flexi_ii');
$description = get_string('dockpanelblockscontenttxtweight', 'theme_flexi_ii');
    $default = 400;
    $choices = array(400=>'400-Normal', 100=>'100-Lightest', 200=>'200', 300=>'300-Light', 500=>'500', 600=>'600', 700=>'700-Bold', 800=>'800', 900=>'900-Bolder');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);

$name = 'theme_flexi_ii/dockpanelblockscontenttxtstyle';
$title=get_string('dockpanelblockscontent','theme_flexi_ii');
$description = get_string('dockpanelblockscontenttxtstyle', 'theme_flexi_ii');
    $default = 'normal';
    $choices = array('normal'=>'Normal', 'italic'=>'Italic', 'oblique'=>'Oblique');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);
//Dock Panel Blockborder
$name = 'theme_flexi_ii/dockpanelblocksborder';
$title=get_string('dockpanelblocksborder_title','theme_flexi_ii');
$description = get_string('dockpanelblocksborder', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '',PARAM_CLEAN, 50);
$settings->add($setting);

//dockpanelblocks rounded corners

$name = 'theme_flexi_ii/dockpanelblocksrctl';
$title=get_string('dockpanelblocks_Rounded_Corners','theme_flexi_ii');
$description = get_string('top_left', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_CLEAN, 5);
$settings->add($setting);

$name = 'theme_flexi_ii/dockpanelblocksrctr';
$title=get_string('Rounded_Corners','theme_flexi_ii');
$description = get_string('top_right', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_CLEAN, 5);
$settings->add($setting);

$name = 'theme_flexi_ii/dockpanelblocksrcbl';
$title=get_string('Rounded_Corners','theme_flexi_ii');
$description = get_string('bottom_left', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_CLEAN, 5);
$settings->add($setting);

$name = 'theme_flexi_ii/dockpanelblocksrcbr';
$title=get_string('Rounded_Corners','theme_flexi_ii');
$description = get_string('bottom_right', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_CLEAN, 5);
$settings->add($setting);

//Doublebar5
$name = 'theme_flexi_ii/doublebar5';
$title=get_string('bar','theme_flexi_ii');
$description = get_string('doublebar', 'theme_flexi_ii');
$setting = new admin_setting_configtext($name, $title, $description, '');
$settings->add($setting);
/**************************************************************************************/
// Foot note setting
$name = 'theme_flexi_ii/footnote';
$title = get_string('footnote','theme_flexi_ii');
$description = get_string('footnotedesc', 'theme_flexi_ii');
$setting = new admin_setting_confightmleditor($name, $title, $description,'');
$settings->add($setting);


// Custom CSS file
$name = 'theme_flexi_ii/customcss';
$title = get_string('customcss','theme_flexi_ii');
$description = get_string('customcssdesc', 'theme_flexi_ii');
$setting = new admin_setting_configtextarea($name, $title, $description, '');
$settings->add($setting);

/***********************************************************************************************************/


}
