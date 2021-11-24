<!-- header styles -->

<?php
   $localFonts = apply_filters('get_local_fonts', '');
?>
<?php if ($localFonts) : ?> 
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/<?php echo $localFonts; ?>" media="screen" type="text/css" />
<?php else : ?>
   <?php endif; ?>
<link id="u-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
<style> .u-header {
  background-image: none;
}
.u-header .u-sheet-1 {
  min-height: 88px;
}
.u-header .u-image-1 {
  width: 73px;
  height: 64px;
  margin: 12px auto 0 0;
}
.u-header .u-logo-image-1 {
  width: 100%;
  height: 100%;
}
.u-header .u-text-1 {
  font-weight: 700;
  margin: -42px auto 0 85px;
}
.u-header .u-menu-1 {
  margin: -20px 0 34px auto;
}
.u-header .u-nav-1 {
  font-size: 1rem;
  letter-spacing: 0px;
}
.u-block-4e7c-21 {
  box-shadow: 2px 2px 8px 0 rgba(128,128,128,1);
}
.u-header .u-nav-2 {
  font-size: 1.25rem;
}
.u-block-4e7c-22 {
  box-shadow: 2px 2px 8px 0 rgba(128,128,128,1);
}
@media (max-width: 1199px) {
  .u-header .u-text-1 {
    margin-top: -42px;
  }
  .u-header .u-menu-1 {
    width: auto;
    margin-top: -20px;
  }
}
@media (max-width: 991px) {
  .u-header .u-sheet-1 {
    min-height: 141px;
  }
  .u-header .u-menu-1 {
    margin-top: -27px;
    margin-bottom: 60px;
  }
}
@media (max-width: 767px) {
  .u-header .u-menu-1 {
    margin-top: -26px;
  }
}
@media (max-width: 575px) {
  .u-header .u-sheet-1 {
    min-height: 116px;
  }
  .u-header .u-text-1 {
    width: auto;
    margin-top: -56px;
    margin-left: 73px;
  }
  .u-header .u-menu-1 {
    margin-top: -76px;
    margin-bottom: 56px;
  }
}</style>
