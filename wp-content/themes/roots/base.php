<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 7]><div class="alert">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</div><![endif]-->

  <div id="wrap">
    <div class="container" role="document">
      <div id="content" class="row">
        <div id="main" class="<?php echo roots_main_class(); ?>" role="main">
          <?php include roots_template_path(); ?>
        </div>
      </div><!-- /#content -->
      <div id="push"></div>
    </div>
  </div><!-- /#wrap -->

  <?php get_template_part('templates/footer'); ?>

</body>
</html>
