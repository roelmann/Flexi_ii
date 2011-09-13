<?php
function flexi_ii_process_css($css, $theme) {

// Set background colour for the html
    if (!empty($theme->settings->htmlbkcolour)) {
        $htmlbkcolour = $theme->settings->htmlbkcolour;
    } else {
        $htmlbkcolour = null;
    }
    $css = flexi_ii_set_htmlbkcolour($css, $htmlbkcolour);
// Set the background image for the html
    if (!empty($theme->settings->htmlbkimage)) {
        $htmlbkimage = $theme->settings->htmlbkimage;
    } else {
        $htmlbkimage = null;
    }
    $css = flexi_ii_set_htmlbkimage($css, $htmlbkimage);
// Set background colour for the page wrapper
    if (!empty($theme->settings->pwrapbkcolour)) {
        $pwrapbkcolour = $theme->settings->pwrapbkcolour;
    } else {
        $pwrapbkcolour = null;
    }
    $css = flexi_ii_set_pwrapbkcolour($css, $pwrapbkcolour);
// Set the background image for the page wrapper
    if (!empty($theme->settings->pwrapbkimage)) {
        $pwrapbkimage = $theme->settings->pwrapbkimage;
    } else {
        $pwrapbkimage = null;
    }
    $css = flexi_ii_set_pwrapbkimage($css, $pwrapbkimage);
// Set background colour for the side pre column
    if (!empty($theme->settings->sprebkcolour)) {
        $sprebkcolour = $theme->settings->sprebkcolour;
    } else {
        $sprebkcolour = null;
    }
    $css = flexi_ii_set_sprebkcolour($css, $sprebkcolour);
// Set the background image for the side pre column
    if (!empty($theme->settings->sprebkimage)) {
        $sprebkimage = $theme->settings->sprebkimage;
    } else {
        $sprebkimage = null;
    }
    $css = flexi_ii_set_sprebkimage($css, $sprebkimage);
// Set background colour for the side post column
    if (!empty($theme->settings->spostbkcolour)) {
        $spostbkcolour = $theme->settings->spostbkcolour;
    } else {
        $spostbkcolour = null;
    }
    $css = flexi_ii_set_spostbkcolour($css, $spostbkcolour);
// Set the background image for the side post column
    if (!empty($theme->settings->spostbkimage)) {
        $spostbkimage = $theme->settings->spostbkimage;
    } else {
        $spostbkimage = null;
    }
    $css = flexi_ii_set_spostbkimage($css, $spostbkimage);
// Set background colour for the centre column
    if (!empty($theme->settings->centrebkcolour)) {
        $centrebkcolour = $theme->settings->centrebkcolour;
    } else {
        $centrebkcolour = null;
    }
    $css = flexi_ii_set_centrebkcolour($css, $centrebkcolour);
// Set the background image for the centre column
    if (!empty($theme->settings->centrebkimage)) {
        $centrebkimage = $theme->settings->centrebkimage;
    } else {
        $centrebkimage = null;
    }
    $css = flexi_ii_set_centrebkimage($css, $centrebkimage);
// Set border colour for the page
    if (!empty($theme->settings->pageborder)) {
        $pageborder = $theme->settings->pageborder;
    } else {
        $pageborder = null;
    }
    $css = flexi_ii_set_pageborder($css, $pageborder);
// Set background colour for the footer
    if (!empty($theme->settings->footerbkcolour)) {
        $footerbkcolour = $theme->settings->footerbkcolour;
    } else {
        $footerbkcolour = null;
    }
    $css = flexi_ii_set_footerbkcolour($css, $footerbkcolour);
// Set the background image for the footer
    if (!empty($theme->settings->footerbkimage)) {
        $footerbkimage = $theme->settings->footerbkimage;
    } else {
        $footerbkimage = null;
    }
    $css = flexi_ii_set_footerbkimage($css, $footerbkimage);

// Set colour for the main body text
    if (!empty($theme->settings->maintext)) {
        $maintext = $theme->settings->maintext;
    } else {
        $maintext = null;
    }
    $css = flexi_ii_set_maintext($css, $maintext);

// Set colour for links
    if (!empty($theme->settings->links)) {
        $links = $theme->settings->links;
    } else {
        $links = null;
    }
    $css = flexi_ii_set_links($css, $links);
// Set colour for hovered links
    if (!empty($theme->settings->hoverlinks)) {
        $hoverlinks = $theme->settings->hoverlinks;
    } else {
        $hoverlinks = null;
    }
    $css = flexi_ii_set_hoverlinks($css, $hoverlinks);
// Set colour for dimmed links
    if (!empty($theme->settings->dimmedlinks)) {
        $dimmedlinks = $theme->settings->dimmedlinks;
    } else {
        $dimmedlinks = null;
    }
    $css = flexi_ii_set_dimmedlinks($css, $dimmedlinks);
// Set background colour for section headings
    if (!empty($theme->settings->secheadbgcolour)) {
        $secheadbgcolour = $theme->settings->secheadbgcolour;
    } else {
        $secheadbgcolour = null;
    }
    $css = flexi_ii_set_secheadbgcolour($css, $secheadbgcolour);
// Set image for section headings
    if (!empty($theme->settings->secheadbgimage)) {
        $secheadbgimage = $theme->settings->secheadbgimage;
    } else {
        $secheadbgimage = null;
    }
    $css = flexi_ii_set_secheadbgimage($css, $secheadbgimage);
// Set colour for section heading text
    if (!empty($theme->settings->secheadtxtcolour)) {
        $secheadtxtcolour = $theme->settings->secheadtxtcolour;
    } else {
        $secheadtxtcolour = null;
    }
    $css = flexi_ii_set_secheadtxtcolour($css, $secheadtxtcolour);
// Set size for section heading text
    if (!empty($theme->settings->secheadtxtsize)) {
        $secheadtxtsize = $theme->settings->secheadtxtsize;
    } else {
        $secheadtxtsize = null;
    }
    $css = flexi_ii_set_secheadtxtsize($css, $secheadtxtsize);
// Set weight for section heading text
    if (!empty($theme->settings->secheadtxtweight)) {
        $secheadtxtweight = $theme->settings->secheadtxtweight;
    } else {
        $secheadtxtweight = null;
    }
    $css = flexi_ii_set_secheadtxtweight($css, $secheadtxtweight);
// Set style for section heading text
    if (!empty($theme->settings->secheadtxtstyle)) {
        $secheadtxtstyle = $theme->settings->secheadtxtstyle;
    } else {
        $secheadtxtstyle = null;
    }
    $css = flexi_ii_set_secheadtxtstyle($css, $secheadtxtstyle);

// Set rounded corners for section headings - top left
    if (!empty($theme->settings->secheadrctl)) {
        $secheadrctl = $theme->settings->secheadrctl;
    } else {
        $secheadrctl = null;
    }
    $css = flexi_ii_set_secheadrctl($css, $secheadrctl);
// Set rounded corners for section headings - top right
    if (!empty($theme->settings->secheadrctr)) {
        $secheadrctr = $theme->settings->secheadrctr;
    } else {
        $secheadrctr = null;
    }
    $css = flexi_ii_set_secheadrctr($css, $secheadrctr);
// Set rounded corners for section headings - bottom left
    if (!empty($theme->settings->secheadrcbl)) {
        $secheadrcbl = $theme->settings->secheadrcbl;
    } else {
        $secheadrcbl = null;
    }
    $css = flexi_ii_set_secheadrcbl($css, $secheadrcbl);
// Set rounded corners for section headings - bottom right
    if (!empty($theme->settings->secheadrcbr)) {
        $secheadrcbr = $theme->settings->secheadrcbr;
    } else {
        $secheadrcbr = null;
    }
    $css = flexi_ii_set_secheadrcbr($css, $secheadrcbr);
/**************************************************************************************************/
// Set logo image
    if (!empty($theme->settings->logo)) {
        $logo = $theme->settings->logo;
    } else {
        $logo = null;
    }
    $css = flexi_ii_set_logo($css, $logo);
// Set the header background color
    if (!empty($theme->settings->headerbackground)) {
        $headerbackground = $theme->settings->headerbackground;
    } else {
        $headerbackground = null;
    }
    $css = flexi_ii_set_headerbackground($css, $headerbackground);
// Set the header background image
    if (!empty($theme->settings->headerbackgroundimage)) {
        $headerbackgroundimage = $theme->settings->headerbackgroundimage;
    } else {
        $headerbackgroundimage = null;
    }
    $css = flexi_ii_set_headerbackgroundimage($css, $headerbackgroundimage);
// Set colour for heading text
    if (!empty($theme->settings->headertext)) {
        $headertext = $theme->settings->headertext;
    } else {
        $headertext = null;
    }
    $css = flexi_ii_set_headertext($css, $headertext);
// Set size for heading text
    if (!empty($theme->settings->headertxtsize)) {
        $headertxtsize = $theme->settings->headertxtsize;
    } else {
        $headertxtsize = null;
    }
    $css = flexi_ii_set_headertxtsize($css, $headertxtsize);
// Set weight for heading text
    if (!empty($theme->settings->headertxtweight)) {
        $headertxtweight = $theme->settings->headertxtweight;
    } else {
        $headertxtweight = null;
    }
    $css = flexi_ii_set_headertxtweight($css, $headertxtweight);
// Set style for heading text
    if (!empty($theme->settings->headertxtstyle)) {
        $headertxtstyle = $theme->settings->headertxtstyle;
    } else {
        $headertxtstyle = null;
    }
    $css = flexi_ii_set_headertxtstyle($css, $headertxtstyle);
// Set position for heading text
    if (!empty($theme->settings->headertextposition)) {
        $headertextposition = $theme->settings->headertextposition;
    } else {
        $headertextposition = null;
    }
    $css = flexi_ii_set_headertextposition($css, $headertextposition);
// Set background colour for navbar
    if (!empty($theme->settings->breadcrumb)) {
        $breadcrumb = $theme->settings->breadcrumb;
    } else {
        $breadcrumb = null;
    }
    $css = flexi_ii_set_breadcrumb($css, $breadcrumb);
// Set background image for navbar
    if (!empty($theme->settings->breadcrumbimage)) {
        $breadcrumbimage = $theme->settings->breadcrumbimage;
    } else {
        $breadcrumbimage = null;
    }
    $css = flexi_ii_set_breadcrumbimage($css, $breadcrumbimage);
// Set colour for navbar text
    if (!empty($theme->settings->navbartext)) {
        $navbartext = $theme->settings->navbartext;
    } else {
        $navbartext = null;
    }
    $css = flexi_ii_set_navbartext($css, $navbartext);
// Set size for navbar text
    if (!empty($theme->settings->navbartxtsize)) {
        $navbartxtsize = $theme->settings->navbartxtsize;
    } else {
        $navbartxtsize = null;
    }
    $css = flexi_ii_set_navbartxtsize($css, $navbartxtsize);
// Set weight for navbar text
    if (!empty($theme->settings->navbartxtweight)) {
        $navbartxtweight = $theme->settings->navbartxtweight;
    } else {
        $navbartxtweight = null;
    }
    $css = flexi_ii_set_navbartxtweight($css, $navbartxtweight);
// Set style for navbar text
    if (!empty($theme->settings->navbartxtstyle)) {
        $navbartxtstyle = $theme->settings->navbartxtstyle;
    } else {
        $navbartxtstyle = null;
    }
    $css = flexi_ii_set_navbartxtstyle($css, $navbartxtstyle);

// Set background colour for menu
    if (!empty($theme->settings->menu)) {
        $menu = $theme->settings->menu;
    } else {
        $menu = null;
    }
    $css = flexi_ii_set_menu($css, $menu);
// Set background image for menu
    if (!empty($theme->settings->menuimage)) {
        $menuimage = $theme->settings->menuimage;
    } else {
        $menuimage = null;
    }
    $css = flexi_ii_set_menuimage($css, $menuimage);
// Set colour for menu text
    if (!empty($theme->settings->menutext)) {
        $menutext = $theme->settings->menutext;
    } else {
        $menutext = null;
    }
    $css = flexi_ii_set_menutext($css, $menutext);
// Set size for menu text
    if (!empty($theme->settings->menutxtsize)) {
        $menutxtsize = $theme->settings->menutxtsize;
    } else {
        $menutxtsize = null;
    }
    $css = flexi_ii_set_menutxtsize($css, $menutxtsize);
// Set weight for menu text
    if (!empty($theme->settings->menutxtweight)) {
        $menutxtweight = $theme->settings->menutxtweight;
    } else {
        $menutxtweight = null;
    }
    $css = flexi_ii_set_menutxtweight($css, $menutxtweight);
// Set style for menu text
    if (!empty($theme->settings->menutxtstyle)) {
        $menutxtstyle = $theme->settings->menutxtstyle;
    } else {
        $menutxtstyle = null;
    }
    $css = flexi_ii_set_menutxtstyle($css, $menutxtstyle);
// Set background colour for dropdown
    if (!empty($theme->settings->dropdown)) {
        $dropdown = $theme->settings->dropdown;
    } else {
        $dropdown = null;
    }
    $css = flexi_ii_set_dropdown($css, $dropdown);
// Set background image for dropdown
    if (!empty($theme->settings->dropdownimage)) {
        $dropdownimage = $theme->settings->dropdownimage;
    } else {
        $dropdownimage = null;
    }
    $css = flexi_ii_set_dropdownimage($css, $dropdownimage);
// Set colour for dropdown text
    if (!empty($theme->settings->dropdowntext)) {
        $dropdowntext = $theme->settings->dropdowntext;
    } else {
        $dropdowntext = null;
    }
    $css = flexi_ii_set_dropdowntext($css, $dropdowntext);
// Set size for dropdown text
    if (!empty($theme->settings->dropdowntxtsize)) {
        $dropdowntxtsize = $theme->settings->dropdowntxtsize;
    } else {
        $dropdowntxtsize = null;
    }
    $css = flexi_ii_set_dropdowntxtsize($css, $dropdowntxtsize);
// Set weight for dropdown text
    if (!empty($theme->settings->dropdowntxtweight)) {
        $dropdowntxtweight = $theme->settings->dropdowntxtweight;
    } else {
        $dropdowntxtweight = null;
    }
    $css = flexi_ii_set_dropdowntxtweight($css, $dropdowntxtweight);
// Set style for dropdown text
    if (!empty($theme->settings->dropdowntxtstyle)) {
        $dropdowntxtstyle = $theme->settings->dropdowntxtstyle;
    } else {
        $dropdowntxtstyle = null;
    }
    $css = flexi_ii_set_dropdowntxtstyle($css, $dropdowntxtstyle);
// Set background colour for menuhover
    if (!empty($theme->settings->menuhover)) {
        $menuhover = $theme->settings->menuhover;
    } else {
        $menuhover = null;
    }
    $css = flexi_ii_set_menuhover($css, $menuhover);
// Set background image for menuhover
    if (!empty($theme->settings->menuhoverimage)) {
        $menuhoverimage = $theme->settings->menuhoverimage;
    } else {
        $menuhoverimage = null;
    }
    $css = flexi_ii_set_menuhoverimage($css, $menuhoverimage);
// Set colour for menuhover text
    if (!empty($theme->settings->menuhovertext)) {
        $menuhovertext = $theme->settings->menuhovertext;
    } else {
        $menuhovertext = null;
    }
    $css = flexi_ii_set_menuhovertext($css, $menuhovertext);
// Set size for menuhover text
    if (!empty($theme->settings->menuhovertxtsize)) {
        $menuhovertxtsize = $theme->settings->menuhovertxtsize;
    } else {
        $menuhovertxtsize = null;
    }
    $css = flexi_ii_set_menuhovertxtsize($css, $menuhovertxtsize);
// Set weight for menuhover text
    if (!empty($theme->settings->menuhovertxtweight)) {
        $menuhovertxtweight = $theme->settings->menuhovertxtweight;
    } else {
        $menuhovertxtweight = null;
    }
    $css = flexi_ii_set_menuhovertxtweight($css, $menuhovertxtweight);
// Set style for menuhover text
    if (!empty($theme->settings->menuhovertxtstyle)) {
        $menuhovertxtstyle = $theme->settings->menuhovertxtstyle;
    } else {
        $menuhovertxtstyle = null;
    }
    $css = flexi_ii_set_menuhovertxtstyle($css, $menuhovertxtstyle);
// Set background colour for sideblocksheads
    if (!empty($theme->settings->sideblocksheadbgcolour)) {
        $sideblocksheadbgcolour = $theme->settings->sideblocksheadbgcolour;
    } else {
        $sideblocksheadbgcolour = null;
    }
    $css = flexi_ii_set_sideblocksheadbgcolour($css, $sideblocksheadbgcolour);
// Set image for sideblocksheads
    if (!empty($theme->settings->sideblocksheadbgimage)) {
        $sideblocksheadbgimage = $theme->settings->sideblocksheadbgimage;
    } else {
        $sideblocksheadbgimage = null;
    }
    $css = flexi_ii_set_sideblocksheadbgimage($css, $sideblocksheadbgimage);
// Set colour for sideblockshead text
    if (!empty($theme->settings->sideblocksheadtxtcolour)) {
        $sideblocksheadtxtcolour = $theme->settings->sideblocksheadtxtcolour;
    } else {
        $sideblocksheadtxtcolour = null;
    }
    $css = flexi_ii_set_sideblocksheadtxtcolour($css, $sideblocksheadtxtcolour);
// Set size for sideblockshead text
    if (!empty($theme->settings->sideblocksheadtxtsize)) {
        $sideblocksheadtxtsize = $theme->settings->sideblocksheadtxtsize;
    } else {
        $sideblocksheadtxtsize = null;
    }
    $css = flexi_ii_set_sideblocksheadtxtsize($css, $sideblocksheadtxtsize);
// Set weight for sideblockshead text
    if (!empty($theme->settings->sideblocksheadtxtweight)) {
        $sideblocksheadtxtweight = $theme->settings->sideblocksheadtxtweight;
    } else {
        $sideblocksheadtxtweight = null;
    }
    $css = flexi_ii_set_sideblocksheadtxtweight($css, $sideblocksheadtxtweight);
// Set style for sideblockshead text
    if (!empty($theme->settings->sideblocksheadtxtstyle)) {
        $sideblocksheadtxtstyle = $theme->settings->sideblocksheadtxtstyle;
    } else {
        $sideblocksheadtxtstyle = null;
    }
    $css = flexi_ii_set_sideblocksheadtxtstyle($css, $sideblocksheadtxtstyle);
// Set background colour for sideblockscontents
    if (!empty($theme->settings->sideblockscontentbgcolour)) {
        $sideblockscontentbgcolour = $theme->settings->sideblockscontentbgcolour;
    } else {
        $sideblockscontentbgcolour = null;
    }
    $css = flexi_ii_set_sideblockscontentbgcolour($css, $sideblockscontentbgcolour);
// Set image for sideblockscontents
    if (!empty($theme->settings->sideblockscontentbgimage)) {
        $sideblockscontentbgimage = $theme->settings->sideblockscontentbgimage;
    } else {
        $sideblockscontentbgimage = null;
    }
    $css = flexi_ii_set_sideblockscontentbgimage($css, $sideblockscontentbgimage);
// Set colour for sideblockscontent text
    if (!empty($theme->settings->sideblockscontenttxtcolour)) {
        $sideblockscontenttxtcolour = $theme->settings->sideblockscontenttxtcolour;
    } else {
        $sideblockscontenttxtcolour = null;
    }
    $css = flexi_ii_set_sideblockscontenttxtcolour($css, $sideblockscontenttxtcolour);
// Set size for sideblockscontent text
    if (!empty($theme->settings->sideblockscontenttxtsize)) {
        $sideblockscontenttxtsize = $theme->settings->sideblockscontenttxtsize;
    } else {
        $sideblockscontenttxtsize = null;
    }
    $css = flexi_ii_set_sideblockscontenttxtsize($css, $sideblockscontenttxtsize);
// Set weight for sideblockscontent text
    if (!empty($theme->settings->sideblockscontenttxtweight)) {
        $sideblockscontenttxtweight = $theme->settings->sideblockscontenttxtweight;
    } else {
        $sideblockscontenttxtweight = null;
    }
    $css = flexi_ii_set_sideblockscontenttxtweight($css, $sideblockscontenttxtweight);
// Set style for sideblockscontent text
    if (!empty($theme->settings->sideblockscontenttxtstyle)) {
        $sideblockscontenttxtstyle = $theme->settings->sideblockscontenttxtstyle;
    } else {
        $sideblockscontenttxtstyle = null;
    }
    $css = flexi_ii_set_sideblockscontenttxtstyle($css, $sideblockscontenttxtstyle);
// Set css rule for the page wrapper border
    if (!empty($theme->settings->blocksborder)) {
        $blocksborder = $theme->settings->blocksborder;
    } else {
        $blocksborder = null;
    }
    $css = flexi_ii_set_blocksborder($css, $blocksborder);
// Set rounded corners for sideblocks - top left
    if (!empty($theme->settings->sideblocksrctl)) {
        $sideblocksrctl = $theme->settings->sideblocksrctl;
    } else {
        $sideblocksrctl = null;
    }
    $css = flexi_ii_set_sideblocksrctl($css, $sideblocksrctl);
// Set rounded corners for sideblocks - top right
    if (!empty($theme->settings->sideblocksrctr)) {
        $sideblocksrctr = $theme->settings->sideblocksrctr;
    } else {
        $sideblocksrctr = null;
    }
    $css = flexi_ii_set_sideblocksrctr($css, $sideblocksrctr);
// Set rounded corners for sideblocks - bottom left
    if (!empty($theme->settings->sideblocksrcbl)) {
        $sideblocksrcbl = $theme->settings->sideblocksrcbl;
    } else {
        $sideblocksrcbl = null;
    }
    $css = flexi_ii_set_sideblocksrcbl($css, $sideblocksrcbl);
// Set rounded corners for sideblocks - bottom right
    if (!empty($theme->settings->sideblocksrcbr)) {
        $sideblocksrcbr = $theme->settings->sideblocksrcbr;
    } else {
        $sideblocksrcbr = null;
    }
    $css = flexi_ii_set_sideblocksrcbr($css, $sideblocksrcbr);
// Set background for dock panel
    if (!empty($theme->settings->dockpanelbackground)) {
        $dockpanelbackground = $theme->settings->dockpanelbackground;
    } else {
        $dockpanelbackground = null;
    }
    $css = flexi_ii_set_dockpanelbackground($css, $dockpanelbackground);
// Set background for dock panel items
    if (!empty($theme->settings->dockitembackground)) {
        $dockitembackground = $theme->settings->dockitembackground;
    } else {
        $dockitembackground = null;
    }
    $css = flexi_ii_set_dockitembackground($css, $dockitembackground);
// Set colour for dockpanellabel text
    if (!empty($theme->settings->dockpanellabeltxtcolour)) {
        $dockpanellabeltxtcolour = $theme->settings->dockpanellabeltxtcolour;
    } else {
        $dockpanellabeltxtcolour = null;
    }
    $css = flexi_ii_set_dockpanellabeltxtcolour($css, $dockpanellabeltxtcolour);
// Set size for dockpanellabel text
    if (!empty($theme->settings->dockpanellabeltxtsize)) {
        $dockpanellabeltxtsize = $theme->settings->dockpanellabeltxtsize;
    } else {
        $dockpanellabeltxtsize = null;
    }
    $css = flexi_ii_set_dockpanellabeltxtsize($css, $dockpanellabeltxtsize);
// Set weight for dockpanellabel text
    if (!empty($theme->settings->dockpanellabeltxtweight)) {
        $dockpanellabeltxtweight = $theme->settings->dockpanellabeltxtweight;
    } else {
        $dockpanellabeltxtweight = null;
    }
    $css = flexi_ii_set_dockpanellabeltxtweight($css, $dockpanellabeltxtweight);
// Set style for dockpanellabel text
    if (!empty($theme->settings->dockpanellabeltxtstyle)) {
        $dockpanellabeltxtstyle = $theme->settings->dockpanellabeltxtstyle;
    } else {
        $dockpanellabeltxtstyle = null;
    }
    $css = flexi_ii_set_dockpanellabeltxtstyle($css, $dockpanellabeltxtstyle);
// Set rounded corners for dockpanel - top left
    if (!empty($theme->settings->dockpanelrctl)) {
        $dockpanelrctl = $theme->settings->dockpanelrctl;
    } else {
        $dockpanelrctl = null;
    }
    $css = flexi_ii_set_dockpanelrctl($css, $dockpanelrctl);
// Set rounded corners for dockpanel - top right
    if (!empty($theme->settings->dockpanelrctr)) {
        $dockpanelrctr = $theme->settings->dockpanelrctr;
    } else {
        $dockpanelrctr = null;
    }
    $css = flexi_ii_set_dockpanelrctr($css, $dockpanelrctr);
// Set rounded corners for dockpanel - bottom left
    if (!empty($theme->settings->dockpanelrcbl)) {
        $dockpanelrcbl = $theme->settings->dockpanelrcbl;
    } else {
        $dockpanelrcbl = null;
    }
    $css = flexi_ii_set_dockpanelrcbl($css, $dockpanelrcbl);
// Set rounded corners for dockpanel - bottom right
    if (!empty($theme->settings->dockpanelrcbr)) {
        $dockpanelrcbr = $theme->settings->dockpanelrcbr;
    } else {
        $dockpanelrcbr = null;
    }
    $css = flexi_ii_set_dockpanelrcbr($css, $dockpanelrcbr);

// Set background colour for dockpanelblocksheads
    if (!empty($theme->settings->dockpanelblocksheadbgcolour)) {
        $dockpanelblocksheadbgcolour = $theme->settings->dockpanelblocksheadbgcolour;
    } else {
        $dockpanelblocksheadbgcolour = null;
    }
    $css = flexi_ii_set_dockpanelblocksheadbgcolour($css, $dockpanelblocksheadbgcolour);
// Set image for dockpanelblocksheads
    if (!empty($theme->settings->dockpanelblocksheadbgimage)) {
        $dockpanelblocksheadbgimage = $theme->settings->dockpanelblocksheadbgimage;
    } else {
        $dockpanelblocksheadbgimage = null;
    }
    $css = flexi_ii_set_dockpanelblocksheadbgimage($css, $dockpanelblocksheadbgimage);
// Set colour for dockpanelblockshead text
    if (!empty($theme->settings->dockpanelblocksheadtxtcolour)) {
        $dockpanelblocksheadtxtcolour = $theme->settings->dockpanelblocksheadtxtcolour;
    } else {
        $dockpanelblocksheadtxtcolour = null;
    }
    $css = flexi_ii_set_dockpanelblocksheadtxtcolour($css, $dockpanelblocksheadtxtcolour);
// Set size for dockpanelblockshead text
    if (!empty($theme->settings->dockpanelblocksheadtxtsize)) {
        $dockpanelblocksheadtxtsize = $theme->settings->dockpanelblocksheadtxtsize;
    } else {
        $dockpanelblocksheadtxtsize = null;
    }
    $css = flexi_ii_set_dockpanelblocksheadtxtsize($css, $dockpanelblocksheadtxtsize);
// Set weight for dockpanelblockshead text
    if (!empty($theme->settings->dockpanelblocksheadtxtweight)) {
        $dockpanelblocksheadtxtweight = $theme->settings->dockpanelblocksheadtxtweight;
    } else {
        $dockpanelblocksheadtxtweight = null;
    }
    $css = flexi_ii_set_dockpanelblocksheadtxtweight($css, $dockpanelblocksheadtxtweight);
// Set style for dockpanelblockshead text
    if (!empty($theme->settings->dockpanelblocksheadtxtstyle)) {
        $dockpanelblocksheadtxtstyle = $theme->settings->dockpanelblocksheadtxtstyle;
    } else {
        $dockpanelblocksheadtxtstyle = null;
    }
    $css = flexi_ii_set_dockpanelblocksheadtxtstyle($css, $dockpanelblocksheadtxtstyle);
// Set background colour for dockpanelblockscontents
    if (!empty($theme->settings->dockpanelblockscontentbgcolour)) {
        $dockpanelblockscontentbgcolour = $theme->settings->dockpanelblockscontentbgcolour;
    } else {
        $dockpanelblockscontentbgcolour = null;
    }
    $css = flexi_ii_set_dockpanelblockscontentbgcolour($css, $dockpanelblockscontentbgcolour);
// Set image for dockpanelblockscontents
    if (!empty($theme->settings->dockpanelblockscontentbgimage)) {
        $dockpanelblockscontentbgimage = $theme->settings->dockpanelblockscontentbgimage;
    } else {
        $dockpanelblockscontentbgimage = null;
    }
    $css = flexi_ii_set_dockpanelblockscontentbgimage($css, $dockpanelblockscontentbgimage);
// Set colour for dockpanelblockscontent text
    if (!empty($theme->settings->dockpanelblockscontenttxtcolour)) {
        $dockpanelblockscontenttxtcolour = $theme->settings->dockpanelblockscontenttxtcolour;
    } else {
        $dockpanelblockscontenttxtcolour = null;
    }
    $css = flexi_ii_set_dockpanelblockscontenttxtcolour($css, $dockpanelblockscontenttxtcolour);
// Set size for dockpanelblockscontent text
    if (!empty($theme->settings->dockpanelblockscontenttxtsize)) {
        $dockpanelblockscontenttxtsize = $theme->settings->dockpanelblockscontenttxtsize;
    } else {
        $dockpanelblockscontenttxtsize = null;
    }
    $css = flexi_ii_set_dockpanelblockscontenttxtsize($css, $dockpanelblockscontenttxtsize);
// Set weight for dockpanelblockscontent text
    if (!empty($theme->settings->dockpanelblockscontenttxtweight)) {
        $dockpanelblockscontenttxtweight = $theme->settings->dockpanelblockscontenttxtweight;
    } else {
        $dockpanelblockscontenttxtweight = null;
    }
    $css = flexi_ii_set_dockpanelblockscontenttxtweight($css, $dockpanelblockscontenttxtweight);
// Set style for dockpanelblockscontent text
    if (!empty($theme->settings->dockpanelblockscontenttxtstyle)) {
        $dockpanelblockscontenttxtstyle = $theme->settings->dockpanelblockscontenttxtstyle;
    } else {
        $dockpanelblockscontenttxtstyle = null;
    }
    $css = flexi_ii_set_dockpanelblockscontenttxtstyle($css, $dockpanelblockscontenttxtstyle);
// Set css rule for the dockpanelblocks border
    if (!empty($theme->settings->dockpanelblocksborder)) {
        $dockpanelblocksborder = $theme->settings->dockpanelblocksborder;
    } else {
        $dockpanelblocksborder = null;
    }
    $css = flexi_ii_set_dockpanelblocksborder($css, $dockpanelblocksborder);
// Set rounded corners for dockpanelblocks - top left
    if (!empty($theme->settings->dockpanelblocksrctl)) {
        $dockpanelblocksrctl = $theme->settings->dockpanelblocksrctl;
    } else {
        $dockpanelblocksrctl = null;
    }
    $css = flexi_ii_set_dockpanelblocksrctl($css, $dockpanelblocksrctl);
// Set rounded corners for dockpanelblocks - top right
    if (!empty($theme->settings->dockpanelblocksrctr)) {
        $dockpanelblocksrctr = $theme->settings->dockpanelblocksrctr;
    } else {
        $dockpanelblocksrctr = null;
    }
    $css = flexi_ii_set_dockpanelblocksrctr($css, $dockpanelblocksrctr);
// Set rounded corners for dockpanelblocks - bottom left
    if (!empty($theme->settings->dockpanelblocksrcbl)) {
        $dockpanelblocksrcbl = $theme->settings->dockpanelblocksrcbl;
    } else {
        $dockpanelblocksrcbl = null;
    }
    $css = flexi_ii_set_dockpanelblocksrcbl($css, $dockpanelblocksrcbl);
// Set rounded corners for dockpanelblocks - bottom right
    if (!empty($theme->settings->dockpanelblocksrcbr)) {
        $dockpanelblocksrcbr = $theme->settings->dockpanelblocksrcbr;
    } else {
        $dockpanelblocksrcbr = null;
    }
    $css = flexi_ii_set_dockpanelblocksrcbr($css, $dockpanelblocksrcbr);
// Set custom css
    if (!empty($theme->settings->customcss)) {
        $customcss = $theme->settings->customcss;
    } else {
        $customcss = null;
    }
    $css = flexi_ii_set_customcss($css, $customcss);




    return $css;
}

/**
 * Functions to create replacement settings
**/
function flexi_ii_set_htmlbkcolour($css, $htmlbkcolour) {
    $tag = '[[setting:htmlbkcolour]]';
    $replacement = $htmlbkcolour;
    if (is_null($replacement)) {
        $replacement = '#7bff81';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_htmlbkimage($css, $htmlbkimage) {
	global $OUTPUT;
	$tag = '[[setting:htmlbkimage]]';
	$replacement = $htmlbkimage;
	if (is_null($replacement)) {
 		$replacement = $OUTPUT->pix_url('html_transparent', 'theme');
 	}
	$css = str_replace($tag, $replacement, $css);
	return $css;
}
function flexi_ii_set_pwrapbkcolour($css, $pwrapbkcolour) {
    $tag = '[[setting:pwrapbkcolour]]';
    $replacement = $pwrapbkcolour;
    if (is_null($replacement)) {
        $replacement = '#3c3';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_pwrapbkimage($css, $pwrapbkimage) {
	global $OUTPUT;
	$tag = '[[setting:pwrapbkimage]]';
	$replacement = $pwrapbkimage;
	if (is_null($replacement)) {
 		$replacement = $OUTPUT->pix_url('wrapper_transparent', 'theme');
 	}
	$css = str_replace($tag, $replacement, $css);
	return $css;
}
function flexi_ii_set_sprebkcolour($css, $sprebkcolour) {
    $tag = '[[setting:sprebkcolour]]';
    $replacement = $sprebkcolour;
    if (is_null($replacement)) {
        $replacement = '#6be864';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_sprebkimage($css, $sprebkimage) {
	global $OUTPUT;
	$tag = '[[setting:sprebkimage]]';
	$replacement = $sprebkimage;
	if (is_null($replacement)) {
 		$replacement = $OUTPUT->pix_url('vgradient', 'theme');
 	}
	$css = str_replace($tag, $replacement, $css);
	return $css;
}
function flexi_ii_set_spostbkcolour($css, $spostbkcolour) {
    $tag = '[[setting:spostbkcolour]]';
    $replacement = $spostbkcolour;
    if (is_null($replacement)) {
        $replacement = '#6be864';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_spostbkimage($css, $spostbkimage) {
	global $OUTPUT;
	$tag = '[[setting:spostbkimage]]';
	$replacement = $spostbkimage;
	if (is_null($replacement)) {
 		$replacement = $OUTPUT->pix_url('vgradient', 'theme');
 	}
	$css = str_replace($tag, $replacement, $css);
	return $css;
}
function flexi_ii_set_centrebkcolour($css, $centrebkcolour) {
    $tag = '[[setting:centrebkcolour]]';
    $replacement = $centrebkcolour;
    if (is_null($replacement)) {
        $replacement = '#8f8';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_centrebkimage($css, $centrebkimage) {
	global $OUTPUT;
	$tag = '[[setting:centrebkimage]]';
	$replacement = $centrebkimage;
	if (is_null($replacement)) {
 		$replacement = $OUTPUT->pix_url('vgradient', 'theme');
 	}
	$css = str_replace($tag, $replacement, $css);
	return $css;
}
function flexi_ii_set_pageborder($css, $pageborder) {
    $tag = '[[setting:pageborder]]';
    $replacement = $pageborder;
    if (is_null($replacement)) {
        $replacement = '#fff solid 5px';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_footerbkcolour($css, $footerbkcolour) {
    $tag = '[[setting:footerbkcolour]]';
    $replacement = $footerbkcolour;
    if (is_null($replacement)) {
        $replacement = '#64e877';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_footerbkimage($css, $footerbkimage) {
	global $OUTPUT;
	$tag = '[[setting:footerbkimage]]';
	$replacement = $footerbkimage;
	if (is_null($replacement)) {
 		$replacement = $OUTPUT->pix_url('vgradient', 'theme');
 	}
	$css = str_replace($tag, $replacement, $css);
	return $css;
}
function flexi_ii_set_maintext($css, $maintext) {
	$tag = '[[setting:maintext]]';
	$replacement = $maintext;
	if (is_null($replacement)) {
 		$replacement = '#000';
 	}
	$css = str_replace($tag, $replacement, $css);
	return $css;
}
function flexi_ii_set_links($css, $links) {
	$tag = '[[setting:links]]';
	$replacement = $links;
	if (is_null($replacement)) {
 		$replacement = 'blue';
 	}
	$css = str_replace($tag, $replacement, $css);
	return $css;
}
function flexi_ii_set_hoverlinks($css, $hoverlinks) {
	$tag = '[[setting:hoverlinks]]';
	$replacement = $hoverlinks;
	if (is_null($replacement)) {
 		$replacement = 'red';
 	}
	$css = str_replace($tag, $replacement, $css);
	return $css;
}
function flexi_ii_set_dimmedlinks($css, $dimmedlinks) {
	$tag = '[[setting:dimmedlinks]]';
	$replacement = $dimmedlinks;
	if (is_null($replacement)) {
 		$replacement = '#aaa';
 	}
	$css = str_replace($tag, $replacement, $css);
	return $css;
}
function flexi_ii_set_logo($css, $logo) {
	global $OUTPUT;
	$tag = '[[setting:logo]]';
	$replacement = $logo;
	if (is_null($replacement)) {
 		$replacement = $OUTPUT->pix_url('logo', 'theme');
 	}
	$css = str_replace($tag, $replacement, $css);
	return $css;
}
function flexi_ii_set_headerbackground($css, $headerbackground) {
    $tag = '[[setting:headerbackground]]';
    $replacement = $headerbackground;
    if (is_null($replacement)) {
        $replacement = 'transparent';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_headerbackgroundimage($css, $headerbackgroundimage) {
	global $OUTPUT;
	$tag = '[[setting:headerbackgroundimage]]';
	$replacement = $headerbackgroundimage;
	if (is_null($replacement)) {
 		$replacement = $OUTPUT->pix_url('header_transparent', 'theme');
 	}
	$css = str_replace($tag, $replacement, $css);
	return $css;
}
function flexi_ii_set_headertext($css, $headertext) {
    $tag = '[[setting:headertext]]';
    $replacement = $headertext;
    if (is_null($replacement)) {
        $replacement = '#000000';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_headertxtweight($css, $headertxtweight) {
    $tag = '[[setting:headertxtweight]]';
    $replacement = $headertxtweight;
    if (is_null($replacement)) {
        $replacement = '400';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_headertxtstyle($css, $headertxtstyle) {
    $tag = '[[setting:headertxtstyle]]';
    $replacement = $headertxtstyle;
    if (is_null($replacement)) {
        $replacement = 'normal';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_headertxtsize($css, $headertxtsize) {
    $tag = '[[setting:headertxtsize]]';
    $replacement = $headertxtsize;
    if (is_null($replacement)) {
        $replacement = '150%';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_headertextposition($css, $headertextposition) {
    $tag = '[[setting:headertextposition]]';
    $replacement = $headertextposition;
    if (is_null($replacement)) {
        $replacement = '10px 0px 0px 10px';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_breadcrumb($css, $breadcrumb) {
    $tag = '[[setting:breadcrumb]]';
    $replacement = $breadcrumb;
    if (is_null($replacement)) {
        $replacement = '#004600';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_breadcrumbimage($css, $breadcrumbimage) {
	global $OUTPUT;
	$tag = '[[setting:breadcrumbimage]]';
	$replacement = $breadcrumbimage;
	if (is_null($replacement)) {
 		$replacement = $OUTPUT->pix_url('vgradient', 'theme');
 	}
	$css = str_replace($tag, $replacement, $css);
	return $css;
}
function flexi_ii_set_navbartext($css, $navbartext) {
    $tag = '[[setting:navbartext]]';
    $replacement = $navbartext;
    if (is_null($replacement)) {
        $replacement = '#efe';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_navbartxtweight($css, $navbartxtweight) {
    $tag = '[[setting:navbartxtweight]]';
    $replacement = $navbartxtweight;
    if (is_null($replacement)) {
        $replacement = '400';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_menu($css, $menu) {
    $tag = '[[setting:menu]]';
    $replacement = $menu;
    if (is_null($replacement)) {
        $replacement = '#004600';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_menuimage($css, $menuimage) {
	global $OUTPUT;
	$tag = '[[setting:menuimage]]';
	$replacement = $menuimage;
	if (is_null($replacement)) {
 		$replacement = $OUTPUT->pix_url('navbar_transparent', 'theme');
 	}
	$css = str_replace($tag, $replacement, $css);
	return $css;
}
function flexi_ii_set_menutext($css, $menutext) {
    $tag = '[[setting:menutext]]';
    $replacement = $menutext;
    if (is_null($replacement)) {
        $replacement = '#ffe';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_menutxtweight($css, $menutxtweight) {
    $tag = '[[setting:menutxtweight]]';
    $replacement = $menutxtweight;
    if (is_null($replacement)) {
        $replacement = '400';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_menutxtstyle($css, $menutxtstyle) {
    $tag = '[[setting:menutxtstyle]]';
    $replacement = $menutxtstyle;
    if (is_null($replacement)) {
        $replacement = 'normal';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_menutxtsize($css, $menutxtsize) {
    $tag = '[[setting:menutxtsize]]';
    $replacement = $menutxtsize;
    if (is_null($replacement)) {
        $replacement = '100%';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function flexi_ii_set_dropdown($css, $dropdown) {
    $tag = '[[setting:dropdown]]';
    $replacement = $dropdown;
    if (is_null($replacement)) {
        $replacement = '#005300';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_dropdownimage($css, $dropdownimage) {
	global $OUTPUT;
	$tag = '[[setting:dropdownimage]]';
	$replacement = $dropdownimage;
	if (is_null($replacement)) {
 		$replacement = $OUTPUT->pix_url('navbar_transparent', 'theme');
 	}
	$css = str_replace($tag, $replacement, $css);
	return $css;
}
function flexi_ii_set_dropdowntext($css, $dropdowntext) {
    $tag = '[[setting:dropdowntext]]';
    $replacement = $dropdowntext;
    if (is_null($replacement)) {
        $replacement = '#fff';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_dropdowntxtweight($css, $dropdowntxtweight) {
    $tag = '[[setting:dropdowntxtweight]]';
    $replacement = $dropdowntxtweight;
    if (is_null($replacement)) {
        $replacement = '400';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_dropdowntxtstyle($css, $dropdowntxtstyle) {
    $tag = '[[setting:dropdowntxtstyle]]';
    $replacement = $dropdowntxtstyle;
    if (is_null($replacement)) {
        $replacement = 'normal';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_dropdowntxtsize($css, $dropdowntxtsize) {
    $tag = '[[setting:dropdowntxtsize]]';
    $replacement = $dropdowntxtsize;
    if (is_null($replacement)) {
        $replacement = '100%';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_menuhover($css, $menuhover) {
    $tag = '[[setting:menuhover]]';
    $replacement = $menuhover;
    if (is_null($replacement)) {
        $replacement = '#006400';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_menuhoverimage($css, $menuhoverimage) {
	global $OUTPUT;
	$tag = '[[setting:menuhoverimage]]';
	$replacement = $menuhoverimage;
	if (is_null($replacement)) {
 		$replacement = $OUTPUT->pix_url('navbar_transparent', 'theme');
 	}
	$css = str_replace($tag, $replacement, $css);
	return $css;
}
function flexi_ii_set_menuhovertext($css, $menuhovertext) {
    $tag = '[[setting:menuhovertext]]';
    $replacement = $menuhovertext;
    if (is_null($replacement)) {
        $replacement = '#efe';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_menuhovertxtweight($css, $menuhovertxtweight) {
    $tag = '[[setting:menuhovertxtweight]]';
    $replacement = $menuhovertxtweight;
    if (is_null($replacement)) {
        $replacement = '400';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_menuhovertxtstyle($css, $menuhovertxtstyle) {
    $tag = '[[setting:menuhovertxtstyle]]';
    $replacement = $menuhovertxtstyle;
    if (is_null($replacement)) {
        $replacement = 'normal';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_menuhovertxtsize($css, $menuhovertxtsize) {
    $tag = '[[setting:menuhovertxtsize]]';
    $replacement = $menuhovertxtsize;
    if (is_null($replacement)) {
        $replacement = '100%';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_navbartxtstyle($css, $navbartxtstyle) {
    $tag = '[[setting:navbartxtstyle]]';
    $replacement = $navbartxtstyle;
    if (is_null($replacement)) {
        $replacement = 'normal';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_navbartxtsize($css, $navbartxtsize) {
    $tag = '[[setting:navbartxtsize]]';
    $replacement = $navbartxtsize;
    if (is_null($replacement)) {
        $replacement = '100%';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_sideblocksheadbgcolour($css, $sideblocksheadbgcolour) {
    $tag = '[[setting:sideblocksheadbgcolour]]';
    $replacement = $sideblocksheadbgcolour;
    if (is_null($replacement)) {
        $replacement = '#004600';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_sideblocksheadbgimage($css, $sideblocksheadbgimage) {
	global $OUTPUT;
	$tag = '[[setting:sideblocksheadbgimage]]';
	$replacement = $sideblocksheadbgimage;
	if (is_null($replacement)) {
 		$replacement = $OUTPUT->pix_url('navbar_transparent', 'theme');
 	}
	$css = str_replace($tag, $replacement, $css);
	return $css;
}
function flexi_ii_set_sideblocksheadtxtcolour($css, $sideblocksheadtxtcolour) {
    $tag = '[[setting:sideblocksheadtxtcolour]]';
    $replacement = $sideblocksheadtxtcolour;
    if (is_null($replacement)) {
        $replacement = '#efe';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_sideblocksheadtxtsize($css, $sideblocksheadtxtsize) {
    $tag = '[[setting:sideblocksheadtxtsize]]';
    $replacement = $sideblocksheadtxtsize;
    if (is_null($replacement)) {
        $replacement = '125%';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_sideblocksheadtxtweight($css, $sideblocksheadtxtweight) {
    $tag = '[[setting:sideblocksheadtxtweight]]';
    $replacement = $sideblocksheadtxtweight;
    if (is_null($replacement)) {
        $replacement = '600';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_sideblocksheadtxtstyle($css, $sideblocksheadtxtstyle) {
    $tag = '[[setting:sideblocksheadtxtstyle]]';
    $replacement = $sideblocksheadtxtstyle;
    if (is_null($replacement)) {
        $replacement = 'normal';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_sideblockscontentbgcolour($css, $sideblockscontentbgcolour) {
    $tag = '[[setting:sideblockscontentbgcolour]]';
    $replacement = $sideblockscontentbgcolour;
    if (is_null($replacement)) {
        $replacement = '#efe';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_sideblockscontentbgimage($css, $sideblockscontentbgimage) {
	global $OUTPUT;
	$tag = '[[setting:sideblockscontentbgimage]]';
	$replacement = $sideblockscontentbgimage;
	if (is_null($replacement)) {
 		$replacement = $OUTPUT->pix_url('navbar_transparent', 'theme');
 	}
	$css = str_replace($tag, $replacement, $css);
	return $css;
}
function flexi_ii_set_sideblockscontenttxtcolour($css, $sideblockscontenttxtcolour) {
    $tag = '[[setting:sideblockscontenttxtcolour]]';
    $replacement = $sideblockscontenttxtcolour;
    if (is_null($replacement)) {
        $replacement = '#004600';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_sideblockscontenttxtsize($css, $sideblockscontenttxtsize) {
    $tag = '[[setting:sideblockscontenttxtsize]]';
    $replacement = $sideblockscontenttxtsize;
    if (is_null($replacement)) {
        $replacement = '95%';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_sideblockscontenttxtweight($css, $sideblockscontenttxtweight) {
    $tag = '[[setting:sideblockscontenttxtweight]]';
    $replacement = $sideblockscontenttxtweight;
    if (is_null($replacement)) {
        $replacement = '400';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_sideblockscontenttxtstyle($css, $sideblockscontenttxtstyle) {
    $tag = '[[setting:sideblockscontenttxtstyle]]';
    $replacement = $sideblockscontenttxtstyle;
    if (is_null($replacement)) {
        $replacement = 'normal';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_blocksborder($css, $blocksborder) {
	$tag = '[[setting:blocksborder]]';
	$replacement = $blocksborder;
	if (is_null($replacement)) {
 		$replacement = '#004600 solid 2px';
 	}
	$css = str_replace($tag, $replacement, $css);
	return $css;
}
function flexi_ii_set_sideblocksrctl($css, $sideblocksrctl) {
    $tag = '[[setting:sideblocksrctl]]';
    $replacement = $sideblocksrctl;
    if (is_null($replacement)) {
        $replacement = '10px';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_sideblocksrctr($css, $sideblocksrctr) {
    $tag = '[[setting:sideblocksrctr]]';
    $replacement = $sideblocksrctr;
    if (is_null($replacement)) {
        $replacement = '10px';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_sideblocksrcbl($css, $sideblocksrcbl) {
    $tag = '[[setting:sideblocksrcbl]]';
    $replacement = $sideblocksrcbl;
    if (is_null($replacement)) {
        $replacement = '10px';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_sideblocksrcbr($css, $sideblocksrcbr) {
    $tag = '[[setting:sideblocksrcbr]]';
    $replacement = $sideblocksrcbr;
    if (is_null($replacement)) {
        $replacement = '10px';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_dockpanelbackground($css, $dockpanelbackground) {
    $tag = '[[setting:dockpanelbackground]]';
    $replacement = $dockpanelbackground;
    if (is_null($replacement)) {
        $replacement = '#efe';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}function flexi_ii_set_dockitembackground($css, $dockitembackground) {
    $tag = '[[setting:dockitembackground]]';
    $replacement = $dockitembackground;
    if (is_null($replacement)) {
        $replacement = '#004600';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_dockpanellabeltxtcolour($css, $dockpanellabeltxtcolour) {
    $tag = '[[setting:dockpanellabeltxtcolour]]';
    $replacement = $dockpanellabeltxtcolour;
    if (is_null($replacement)) {
        $replacement = '#efe';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_dockpanellabeltxtsize($css, $dockpanellabeltxtsize) {
    $tag = '[[setting:dockpanellabeltxtsize]]';
    $replacement = $dockpanellabeltxtsize;
    if (is_null($replacement)) {
        $replacement = '100%';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_dockpanellabeltxtweight($css, $dockpanellabeltxtweight) {
    $tag = '[[setting:dockpanellabeltxtweight]]';
    $replacement = $dockpanellabeltxtweight;
    if (is_null($replacement)) {
        $replacement = '700';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_dockpanellabeltxtstyle($css, $dockpanellabeltxtstyle) {
    $tag = '[[setting:dockpanellabeltxtstyle]]';
    $replacement = $dockpanellabeltxtstyle;
    if (is_null($replacement)) {
        $replacement = 'normal';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_dockpanelrctl($css, $dockpanelrctl) {
    $tag = '[[setting:dockpanelrctl]]';
    $replacement = $dockpanelrctl;
    if (is_null($replacement)) {
        $replacement = '3px';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_dockpanelrctr($css, $dockpanelrctr) {
    $tag = '[[setting:dockpanelrctr]]';
    $replacement = $dockpanelrctr;
    if (is_null($replacement)) {
        $replacement = '0px';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_dockpanelrcbl($css, $dockpanelrcbl) {
    $tag = '[[setting:dockpanelrcbl]]';
    $replacement = $dockpanelrcbl;
    if (is_null($replacement)) {
        $replacement = '3px';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_dockpanelrcbr($css, $dockpanelrcbr) {
    $tag = '[[setting:dockpanelrcbr]]';
    $replacement = $dockpanelrcbr;
    if (is_null($replacement)) {
        $replacement = '0px';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function flexi_ii_set_dockpanelblocksheadbgcolour($css, $dockpanelblocksheadbgcolour) {
    $tag = '[[setting:dockpanelblocksheadbgcolour]]';
    $replacement = $dockpanelblocksheadbgcolour;
    if (is_null($replacement)) {
        $replacement = '#006400';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_dockpanelblocksheadbgimage($css, $dockpanelblocksheadbgimage) {
	global $OUTPUT;
	$tag = '[[setting:dockpanelblocksheadbgimage]]';
	$replacement = $dockpanelblocksheadbgimage;
	if (is_null($replacement)) {
 		$replacement = $OUTPUT->pix_url('navbar_transparent', 'theme');
 	}
	$css = str_replace($tag, $replacement, $css);
	return $css;
}
function flexi_ii_set_dockpanelblocksheadtxtcolour($css, $dockpanelblocksheadtxtcolour) {
    $tag = '[[setting:dockpanelblocksheadtxtcolour]]';
    $replacement = $dockpanelblocksheadtxtcolour;
    if (is_null($replacement)) {
        $replacement = '#efe';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_dockpanelblocksheadtxtsize($css, $dockpanelblocksheadtxtsize) {
    $tag = '[[setting:dockpanelblocksheadtxtsize]]';
    $replacement = $dockpanelblocksheadtxtsize;
    if (is_null($replacement)) {
        $replacement = '150%';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_dockpanelblocksheadtxtweight($css, $dockpanelblocksheadtxtweight) {
    $tag = '[[setting:dockpanelblocksheadtxtweight]]';
    $replacement = $dockpanelblocksheadtxtweight;
    if (is_null($replacement)) {
        $replacement = '400';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_dockpanelblocksheadtxtstyle($css, $dockpanelblocksheadtxtstyle) {
    $tag = '[[setting:dockpanelblocksheadtxtstyle]]';
    $replacement = $dockpanelblocksheadtxtstyle;
    if (is_null($replacement)) {
        $replacement = 'normal';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_dockpanelblockscontentbgcolour($css, $dockpanelblockscontentbgcolour) {
    $tag = '[[setting:dockpanelblockscontentbgcolour]]';
    $replacement = $dockpanelblockscontentbgcolour;
    if (is_null($replacement)) {
        $replacement = '#efe';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_dockpanelblockscontentbgimage($css, $dockpanelblockscontentbgimage) {
	global $OUTPUT;
	$tag = '[[setting:dockpanelblockscontentbgimage]]';
	$replacement = $dockpanelblockscontentbgimage;
	if (is_null($replacement)) {
 		$replacement = $OUTPUT->pix_url('navbar_transparent', 'theme');
 	}
	$css = str_replace($tag, $replacement, $css);
	return $css;
}
function flexi_ii_set_dockpanelblockscontenttxtcolour($css, $dockpanelblockscontenttxtcolour) {
    $tag = '[[setting:dockpanelblockscontenttxtcolour]]';
    $replacement = $dockpanelblockscontenttxtcolour;
    if (is_null($replacement)) {
        $replacement = '#004600';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_dockpanelblockscontenttxtsize($css, $dockpanelblockscontenttxtsize) {
    $tag = '[[setting:dockpanelblockscontenttxtsize]]';
    $replacement = $dockpanelblockscontenttxtsize;
    if (is_null($replacement)) {
        $replacement = '95%';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_dockpanelblockscontenttxtweight($css, $dockpanelblockscontenttxtweight) {
    $tag = '[[setting:dockpanelblockscontenttxtweight]]';
    $replacement = $dockpanelblockscontenttxtweight;
    if (is_null($replacement)) {
        $replacement = '400';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_dockpanelblockscontenttxtstyle($css, $dockpanelblockscontenttxtstyle) {
    $tag = '[[setting:dockpanelblockscontenttxtstyle]]';
    $replacement = $dockpanelblockscontenttxtstyle;
    if (is_null($replacement)) {
        $replacement = 'normal';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_dockpanelblocksborder($css, $dockpanelblocksborder) {
	$tag = '[[setting:dockpanelblocksborder]]';
	$replacement = $dockpanelblocksborder;
	if (is_null($replacement)) {
 		$replacement = '#006400 solid 5px';
 	}
	$css = str_replace($tag, $replacement, $css);
	return $css;
}
function flexi_ii_set_dockpanelblocksrctl($css, $dockpanelblocksrctl) {
    $tag = '[[setting:dockpanelblocksrctl]]';
    $replacement = $dockpanelblocksrctl;
    if (is_null($replacement)) {
        $replacement = '0px';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_dockpanelblocksrctr($css, $dockpanelblocksrctr) {
    $tag = '[[setting:dockpanelblocksrctr]]';
    $replacement = $dockpanelblocksrctr;
    if (is_null($replacement)) {
        $replacement = '10px';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_dockpanelblocksrcbl($css, $dockpanelblocksrcbl) {
    $tag = '[[setting:dockpanelblocksrcbl]]';
    $replacement = $dockpanelblocksrcbl;
    if (is_null($replacement)) {
        $replacement = '10px';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_dockpanelblocksrcbr($css, $dockpanelblocksrcbr) {
    $tag = '[[setting:dockpanelblocksrcbr]]';
    $replacement = $dockpanelblocksrcbr;
    if (is_null($replacement)) {
        $replacement = '10px';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_customcss($css, $customcss) {
    $tag = '[[setting:customcss]]';
    $replacement = $customcss;
    if (is_null($replacement)) {
        $replacement = '';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_secheadbgcolour($css, $secheadbgcolour) {
    $tag = '[[setting:secheadbgcolour]]';
    $replacement = $secheadbgcolour;
    if (is_null($replacement)) {
        $replacement = '#006400';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_secheadbgimage($css, $secheadbgimage) {
	global $OUTPUT;
	$tag = '[[setting:secheadbgimage]]';
	$replacement = $secheadbgimage;
	if (is_null($replacement)) {
 		$replacement = $OUTPUT->pix_url('navbar_transparent', 'theme');
 	}
	$css = str_replace($tag, $replacement, $css);
	return $css;
}
function flexi_ii_set_secheadtxtcolour($css, $secheadtxtcolour) {
    $tag = '[[setting:secheadtxtcolour]]';
    $replacement = $secheadtxtcolour;
    if (is_null($replacement)) {
        $replacement = '#efe';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_secheadtxtsize($css, $secheadtxtsize) {
    $tag = '[[setting:secheadtxtsize]]';
    $replacement = $secheadtxtsize;
    if (is_null($replacement)) {
        $replacement = '125%';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_secheadtxtweight($css, $secheadtxtweight) {
    $tag = '[[setting:secheadtxtweight]]';
    $replacement = $secheadtxtweight;
    if (is_null($replacement)) {
        $replacement = '400';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_secheadtxtstyle($css, $secheadtxtstyle) {
    $tag = '[[setting:secheadtxtstyle]]';
    $replacement = $secheadtxtstyle;
    if (is_null($replacement)) {
        $replacement = 'normal';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function flexi_ii_set_secheadrctl($css, $secheadrctl) {
    $tag = '[[setting:secheadrctl]]';
    $replacement = $secheadrctl;
    if (is_null($replacement)) {
        $replacement = '5px';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_secheadrctr($css, $secheadrctr) {
    $tag = '[[setting:secheadrctr]]';
    $replacement = $secheadrctr;
    if (is_null($replacement)) {
        $replacement = '5px';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_secheadrcbl($css, $secheadrcbl) {
    $tag = '[[setting:secheadrcbl]]';
    $replacement = $secheadrcbl;
    if (is_null($replacement)) {
        $replacement = '5px';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function flexi_ii_set_secheadrcbr($css, $secheadrcbr) {
    $tag = '[[setting:secheadrcbr]]';
    $replacement = $secheadrcbr;
    if (is_null($replacement)) {
        $replacement = '5px';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}


/*****************************************************************************************************************/
class flexi_ii_topsettings_renderer extends plugin_renderer_base {

    public function settings_tree(settings_navigation $navigation) {
        global $CFG;
        $content = $this->navigation_node($navigation, array('class' => 'dropdown  dropdown-horizontal'));
        if (has_capability('moodle/site:config', get_context_instance(CONTEXT_SYSTEM))) {
            $content .= $this->search_form(new moodle_url("$CFG->wwwroot/$CFG->admin/search.php"), optional_param('query', '', PARAM_RAW));
        }
//        $content .= html_writer::empty_tag('br', array('clear' => 'all'));
        return $content;
    }

    public function navigation_tree(global_navigation $navigation) {
        global $CFG;
        $content = html_writer::start_tag('ul', array('id' => 'awesomeHomeMenu', 'class' => 'dropdown  dropdown-horizontal'));
        $content .= html_writer::start_tag('li');
        $content .= html_writer::start_tag('a', array('href' => "$CFG->wwwroot", 'id' =>'home'));
        $content .= html_writer::empty_tag('img', array('alt' => '', 'src' =>$this->pix_url('home_icon', 'theme')));
        $content .= html_writer::end_tag('a');
        $content .= html_writer::end_tag('li');
        $content .= html_writer::start_tag('li');
if (isloggedin()) {
        $content .= html_writer::link(new moodle_url('/login/logout.php', array('sesskey'=>sesskey())),
     html_writer::empty_tag('img', array('alt' => '', 'src' =>$this->pix_url('logging', 'theme'))));
} else{
	$content .= html_writer::link(new moodle_url('/login/'), html_writer::empty_tag('img', array('alt' => '', 'src' =>$this->pix_url('logging', 'theme'))));
}
        $content .= html_writer::end_tag('li');
        $content .= html_writer::start_tag('li');
        $content .= html_writer::start_tag('span', array('id' =>'awesomeNavMenu'));
        $content .= html_writer::empty_tag('img', array('alt' => '', 'src' =>$this->pix_url('user_silhouette', 'theme')));
        $content .= html_writer::end_tag('span');

        $content .= $this->navigation_node($navigation, array());
        $content .= html_writer::end_tag('li');
        $content .= html_writer::end_tag('ul');
        return $content;
    }



    protected function navigation_node(navigation_node $node, $attrs=array()) {
        $items = $node->children;

        // exit if empty, we don't want an empty ul element
        if ($items->count() == 0) {
            return '';
        }

        // array of nested li elements
        $lis = array();
        $dummypage = new flexi_ii_dummy_page();
        $dummypage->set_context(get_context_instance(CONTEXT_SYSTEM));
        foreach ($items as $item) {
            if (!$item->display) {
                continue;
            }

            $isbranch = ($item->children->count() > 0 || $item->nodetype == navigation_node::NODETYPE_BRANCH);
            $hasicon = (!$isbranch && $item->icon instanceof renderable);

            if ($isbranch) {
                $item->hideicon = true;
            }

            $content = $this->output->render($item);
            if(substr($item->id, 0, 17)=='expandable_branch' && $item->children->count()==0) {
                // Navigation block does this via AJAX - we'll merge it in directly instead
                $subnav = new flexi_ii_expand_navigation($dummypage, $item->type, $item->key);
                if (!isloggedin() || isguestuser()) {
                    $subnav->set_expansion_limit(navigation_node::TYPE_COURSE);
                }
                $branch = $subnav->find($item->key, $item->type);
                $content .= $this->navigation_node($branch);
            } else {
                $content .= $this->navigation_node($item);
            }


            if($isbranch && !(is_string($item->action) || empty($item->action))) {
                $content = html_writer::tag('li', $content, array('class' => 'clickable-with-children'));
            } else {
                $content = html_writer::tag('li', $content);
            }
            $lis[] = $content;
        }

        if (count($lis)) {
            return html_writer::nonempty_tag('ul', implode("\n", $lis), $attrs);
        } else {
            return '';
        }
    }

    public function search_form(moodle_url $formtarget, $searchvalue) {
        global $CFG;

        if (empty($searchvalue)) {
            $searchvalue = 'Search Settings..';
        }

        $content = html_writer::start_tag('form', array('class' => 'topadminsearchform', 'method' => 'get', 'action' => $formtarget));
        $content .= html_writer::start_tag('div', array('class' => 'search-box'));
        $content .= html_writer::tag('label', s(get_string('searchinsettings', 'admin')), array('for' => 'adminsearchquery', 'class' => 'accesshide'));
        $content .= html_writer::empty_tag('input', array('id' => 'topadminsearchquery', 'type' => 'text', 'name' => 'query', 'value' => s($searchvalue),
                    'onfocus' => "if(this.value == 'Search Settings..') {this.value = '';}",
                    'onblur' => "if (this.value == '') {this.value = 'Search Settings..';}"));
        //$content .= html_writer::empty_tag('input', array('class'=>'search-go','type'=>'submit', 'value'=>''));
        $content .= html_writer::end_tag('div');
        $content .= html_writer::end_tag('form');

        return $content;
    }

}



class flexi_ii_expand_navigation extends global_navigation {

    /** @var array */
    protected $expandable = array();

    /**
     * Constructs the navigation for use in AJAX request
     */
    public function __construct($page, $branchtype, $id) {
        $this->page = $page;
        $this->cache = new navigation_cache(NAVIGATION_CACHE_NAME);
        $this->children = new navigation_node_collection();
        $this->initialise($branchtype, $id);
    }
    /**
     * Initialise the navigation given the type and id for the branch to expand.
     *
     * @param int $branchtype One of navigation_node::TYPE_*
     * @param int $id
     * @return array The expandable nodes
     */
    public function initialise($branchtype, $id) {
        global $CFG, $DB, $SITE;

        if ($this->initialised || during_initial_install()) {
            return $this->expandable;
        }
        $this->initialised = true;

        $this->rootnodes = array();
        $this->rootnodes['site']      = $this->add_course($SITE);
        $this->rootnodes['courses'] = $this->add(get_string('courses'), null, self::TYPE_ROOTNODE, null, 'courses');

        // Branchtype will be one of navigation_node::TYPE_*
        switch ($branchtype) {
            case self::TYPE_CATEGORY :
                $this->load_all_categories($id);
                $limit = 20;
                if (!empty($CFG->navcourselimit)) {
                    $limit = (int)$CFG->navcourselimit;
                }
                $courses = $DB->get_records('course', array('category' => $id), 'sortorder','*', 0, $limit);
                foreach ($courses as $course) {
                    $this->add_course($course);
                }
                break;
            case self::TYPE_COURSE :
                $course = $DB->get_record('course', array('id' => $id), '*', MUST_EXIST);
                //require_course_login($course);
                //$this->page = $PAGE;
                $this->page->set_context(get_context_instance(CONTEXT_COURSE, $course->id));
                $coursenode = $this->add_course($course);
                $this->add_course_essentials($coursenode, $course);
                if ($this->format_display_course_content($course->format)) {
                    $this->load_course_sections($course, $coursenode);
                }
                break;
            case self::TYPE_SECTION :
                $sql = 'SELECT c.*, cs.section AS sectionnumber
                        FROM {course} c
                        LEFT JOIN {course_sections} cs ON cs.course = c.id
                        WHERE cs.id = ?';
                $course = $DB->get_record_sql($sql, array($id), MUST_EXIST);
                //require_course_login($course);
                //$this->page = $PAGE;
                $this->page->set_context(get_context_instance(CONTEXT_COURSE, $course->id));
                $coursenode = $this->add_course($course);
                $this->add_course_essentials($coursenode, $course);
                $sections = $this->load_course_sections($course, $coursenode);
                $this->load_section_activities($sections[$course->sectionnumber]->sectionnode, $course->sectionnumber, get_fast_modinfo($course));
                break;
            case self::TYPE_ACTIVITY :
                $cm = get_coursemodule_from_id(false, $id, 0, false, MUST_EXIST);
                $course = $DB->get_record('course', array('id'=>$cm->course), '*', MUST_EXIST);
                //require_course_login($course, true, $cm);
                //$this->page = $PAGE;
                $this->page->set_context(get_context_instance(CONTEXT_MODULE, $cm->id));
                $coursenode = $this->load_course($course);
                $sections = $this->load_course_sections($course, $coursenode);
                foreach ($sections as $section) {
                    if ($section->id == $cm->section) {
                        $cm->sectionnumber = $section->section;
                        break;
                    }
                }
                if ($course->id == SITEID) {
                    $modulenode = $this->load_activity($cm, $course, $coursenode->find($cm->id, self::TYPE_ACTIVITY));
                } else {
                    $activities = $this->load_section_activities($sections[$cm->sectionnumber]->sectionnode, $cm->sectionnumber, get_fast_modinfo($course));
                    $modulenode = $this->load_activity($cm, $course, $activities[$cm->id]);
                }
                break;
            default:
                throw new Exception('Unknown type');
                return $this->expandable;
        }
        $this->find_expandable($this->expandable);
        return $this->expandable;
    }
    /**
     * Loads all of the activities for a section into the navigation structure.
     *
     * @param navigation_node $sectionnode
     * @param int $sectionnumber
     * @param stdClass $modinfo Object returned from {@see get_fast_modinfo()}
     * @return array Array of activity nodes
     */
    protected function load_section_activities(navigation_node $sectionnode, $sectionnumber, $modinfo) {
        if (!array_key_exists($sectionnumber, $modinfo->sections)) {
            return true;
        }

        $activities = array();
        foreach ($modinfo->sections[$sectionnumber] as $cmid) {
            $cm = $modinfo->cms[$cmid];
            if (!$cm->uservisible) {
                continue;
            }
            if ($sectionnode->get($cm->id, navigation_node::TYPE_ACTIVITY) !== false) {
                continue;
            }
            if ($cm->icon) {
                $icon = new pix_icon($cm->icon, get_string('modulename', $cm->modname), $cm->iconcomponent);
            } else {
                $icon = new pix_icon('icon', get_string('modulename', $cm->modname), $cm->modname);
            }
            $url = new moodle_url('/mod/'.$cm->modname.'/view.php', array('id'=>$cm->id));
            $activitynode = $sectionnode->add(format_string($cm->name), $url, navigation_node::TYPE_ACTIVITY, null, $cm->id, $icon);
            $activitynode->title(get_string('modulename', $cm->modname));
            $activitynode->hidden = (!$cm->visible);
            if ($cm->modname == 'label') {
                $activitynode->display = false;
            } else if ($this->module_extends_navigation($cm->modname)) {
                $activitynode->nodetype = navigation_node::NODETYPE_BRANCH;
            }
            $activities[$cmid] = $activitynode;
        }

        return $activities;
    }

    public function get_expandable() {
        return $this->expandable;
    }
}

class flexi_ii_dummy_page extends moodle_page {
    /**
     * REALLY Set the main context to which this page belongs.
     * @param object $context a context object, normally obtained with get_context_instance.
     */
    public function set_context($context) {
        if ($context === null) {
            // extremely ugly hack which sets context to some value in order to prevent warnings,
            // use only for core error handling!!!!
            if (!$this->_context) {
                $this->_context = get_context_instance(CONTEXT_SYSTEM);
            }
            return;
        }
        $this->_context = $context;
    }
}

