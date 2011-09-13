<?php

/* SET LAYOUT OPTIONS FOR PAGE - FROM CONFIG.PHP */
$hasheading = ($PAGE->heading);
$hasnavbar = (empty($PAGE->layout_options['nonavbar']) && $PAGE->has_navbar());
$hasfooter = (empty($PAGE->layout_options['nofooter']));
$hassidepre = (empty($PAGE->layout_options['noblocks']) && $PAGE->blocks->region_has_content('side-pre', $OUTPUT));
$hassidepost = (empty($PAGE->layout_options['noblocks']) && $PAGE->blocks->region_has_content('side-post', $OUTPUT));
$haslogininfo = (empty($PAGE->layout_options['nologininfo']));

$showsidepre = ($hassidepre && !$PAGE->blocks->region_completely_docked('side-pre', $OUTPUT));
$showsidepost = ($hassidepost && !$PAGE->blocks->region_completely_docked('side-post', $OUTPUT));

$custommenu = $OUTPUT->custom_menu();
$hascustommenu = (empty($PAGE->layout_options['nocustommenu']) && !empty($custommenu));

$bodyclasses = array();
if ($showsidepre && !$showsidepost) {
    $bodyclasses[] = 'side-pre-only';
} else if ($showsidepost && !$showsidepre) {
    $bodyclasses[] = 'side-post-only';
} else if (!$showsidepost && !$showsidepre) {
    $bodyclasses[] = 'content-only';
}
if ($hascustommenu) {
    $bodyclasses[] = 'has_custom_menu';
}
if (!empty($PAGE->theme->settings->footnote)) {
    $footnote = $PAGE->theme->settings->footnote;
} else {
    $footnote = '<!-- There was no custom footnote set -->';
}

if (!empty($PAGE->theme->settings->menu1)) {
    $menu1 = $PAGE->theme->settings->menu1;
} else {
    $menu1 = 'none';
}
if (!empty($PAGE->theme->settings->menu2)) {
    $menu2 = $PAGE->theme->settings->menu2;
} else {
    $menu2 = 'custlinks';
}
if (!empty($PAGE->theme->settings->menu3)) {
    $menu3 = $PAGE->theme->settings->menu3;
} else {
    $menu3 = 'none';
}
if (!empty($PAGE->theme->settings->profilevisible)) {
    $profilevisible = $PAGE->theme->settings->profilevisible;
} else {
    $profilevisible = 'visible';
}


/* CREATE <HEAD> and HTML */
echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes() ?>>
<head>
    <title><?php echo $PAGE->title ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->pix_url('favicon', 'theme')?>" />
    <?php echo $OUTPUT->standard_head_html() ?>
</head>
<body id="<?php echo $PAGE->bodyid ?>" class="<?php echo $PAGE->bodyclasses.' '.join(' ', $bodyclasses) ?>">
<?php echo $OUTPUT->standard_top_of_body_html() ?>

<!-- MENU OPTIONS POSITION 1 -->

<?php    //php has been closed above and reopened to enable consistency of teh whole block while editting - can be removed later
if ($menu1=='custom') {
if ($hascustommenu) { ?>
    <div id="awesomebar">

<?php    $topsettings = new flexi_ii_topsettings_renderer($this->page, null);
//         echo $topsettings->navigation_tree($this->page->navigation);
//         echo $topsettings->settings_tree($this->page->settingsnav);
?>
         <div id="flexi_ii_menu"><?php echo $custommenu; ?></div> 
    </div>
<?php } } ?>
<?php    //php has been closed above and reopened to enable consistency of teh whole block while editting - can be removed later
if ($menu1=='custlinks') {
if ($hascustommenu) { ?>
    <div id="awesomebar">

<?php    $topsettings = new flexi_ii_topsettings_renderer($this->page, null);
         echo $topsettings->navigation_tree($this->page->navigation);
//         echo $topsettings->settings_tree($this->page->settingsnav);
?>
         <div id="flexi_ii_menu"><?php echo $custommenu; ?></div> 
    </div>
<?php } } ?>



<!-- PAGE WRAPPER -->
<div id="page-wrapper">
  <div id="page">
<!-- MENU OPTIONS POSITION 2 -->

<?php    //php has been closed above and reopened to enable consistency of teh whole block while editting - can be removed later
if ($menu2=='custom') {
if ($hascustommenu) { ?>
    <div id="awesomebar">

<?php    $topsettings = new flexi_ii_topsettings_renderer($this->page, null);
//         echo $topsettings->navigation_tree($this->page->navigation);
//         echo $topsettings->settings_tree($this->page->settingsnav);
?>
         <div id="flexi_ii_menu"><?php echo $custommenu; ?></div> 
    </div>
<?php } } ?>
<?php    //php has been closed above and reopened to enable consistency of teh whole block while editting - can be removed later
if ($menu2=='custlinks') {
if ($hascustommenu) { ?>
    <div id="awesomebar">

<?php    $topsettings = new flexi_ii_topsettings_renderer($this->page, null);
         echo $topsettings->navigation_tree($this->page->navigation);
//         echo $topsettings->settings_tree($this->page->settingsnav);
?>
         <div id="flexi_ii_menu"><?php echo $custommenu; ?></div> 
    </div>
<?php } } ?>
<!-- START OF HEADER -->
   <?php if ($hasheading || $hasnavbar) { ?>
    <div id="page-header">
        <?php if ($hasheading) { ?>
         <div id="logo">
           <h1 class="headermain"><?php echo $PAGE->heading ?></h1>
         </div>
<?php if ($profilevisible=='visible') {
            include('profileblock.php')?>
         <?php } }?>
</div>
<!-- MENU OPTIONS POSITION 3 -->

<?php    //php has been closed above and reopened to enable consistency of teh whole block while editting - can be removed later
if ($menu3=='custom') {
if ($hascustommenu) { ?>
    <div id="awesomebar">

<?php    $topsettings = new flexi_ii_topsettings_renderer($this->page, null);
//         echo $topsettings->navigation_tree($this->page->navigation);
//         echo $topsettings->settings_tree($this->page->settingsnav);
?>
         <div id="flexi_ii_menu"><?php echo $custommenu; ?></div> 
    </div>
<?php } } ?>
<?php    //php has been closed above and reopened to enable consistency of teh whole block while editting - can be removed later
if ($menu3=='custlinks') {
if ($hascustommenu) { ?>
    <div id="awesomebar">

<?php    $topsettings = new flexi_ii_topsettings_renderer($this->page, null);
         echo $topsettings->navigation_tree($this->page->navigation);
//         echo $topsettings->settings_tree($this->page->settingsnav);
?>
         <div id="flexi_ii_menu"><?php echo $custommenu; ?></div> 
    </div>
<?php } } ?>
        <?php if ($hasnavbar) { ?>
            <div class="navbar clearfix">
                <div class="breadcrumb"><?php echo $OUTPUT->navbar(); ?></div>
                <div class="navbutton"> <?php echo $PAGE->button; ?></div>
            </div>
        <?php } ?>

<!-- END OF CUSTOMMENU AND NAVBAR -->
    </div>
<?php } ?>
<!-- END OF HEADER -->

    <div id="page-content">
       <div id="region-main-box">
           <div id="region-post-box">
              <div id="region-main-wrap">
                 <div id="region-main-pad">
                   <div id="region-main">
                     <div class="region-content">
                            <?php echo core_renderer::MAIN_CONTENT_TOKEN ?>
                     </div>
                   </div>
                 </div>
               </div>

                <?php if ($hassidepre) { ?>
                <div id="region-pre" class="block-region">
                   <div class="region-content">
                        <?php echo $OUTPUT->blocks_for_region('side-pre') ?>
                   </div>
                </div>
                <?php } ?>

                <?php if ($hassidepost) { ?>
                <div id="region-post" class="block-region">
                   <div class="region-content">
                        <?php echo $OUTPUT->blocks_for_region('side-post') ?>
                   </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

<!-- START OF FOOTER -->
    <?php if ($hasfooter) { ?>
    <div id="page-footer" class="clearfix">
  <?php echo $footnote; ?>
  <?php echo $OUTPUT->login_info();?>

   </div>
<!-- END OF FOOTER -->
    <?php } ?>
    <div class="clearfix"></div>
</div>
</div>
<?php echo $OUTPUT->standard_end_of_body_html() ?>
</body>
</html>
