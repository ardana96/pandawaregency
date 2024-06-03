<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>PANDAWA REGENCY 2 &trade;</title>
    <meta name="description" content="">    
    <meta name="author" content="">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons
    ================================================== -->
    <link rel="icon" href="<?php echo base_url(); ?>admin/images/favicon.png" type="image/x-icon" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>design/img/favicon/favicon-144x144.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>design/img/favicon/favicon-72x72.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>design/img/favicon/favicon-54x54.png">
    
    <!-- CSS
    ================================================== -->
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>design/css/bootstrap.min.css">
    <!-- Template styles-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>design/css/style.css">
    <!-- Responsive styles-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>design/css/responsive.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>design/css/font-awesome.min.css">
    <!-- Animation -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>design/css/animate.css">
    <!-- Prettyphoto -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>design/css/prettyPhoto.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>design/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>design/css/owl.theme.css">
    <!-- Flexslider -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>design/css/flexslider.css">
    <!-- Flexslider -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>design/css/cd-hero.css">
    <!-- Style Swicther -->
    <link id="style-switch" href="<?php echo base_url(); ?>design/css/presets/preset1.css" media="screen" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
    
<body>

    <!-- Style switcher start -->
   <!--  <div class="style-switch-wrapper">
        <div class="style-switch-button">
            <i class="fa fa-sliders"></i>
        </div>
        <h3>Style Options</h3>
        <button id="preset1" class="btn btn-sm btn-primary"></button>
        <button id="preset2" class="btn btn-sm btn-primary"></button>
        <button id="preset3" class="btn btn-sm btn-primary"></button>
        <button id="preset4" class="btn btn-sm btn-primary"></button>
        <button id="preset5" class="btn btn-sm btn-primary"></button>
        <button id="preset6" class="btn btn-sm btn-primary"></button>
        <br/><br/>
        <a class="btn btn-sm btn-primary close-styler pull-right">Close X</a>
    </div> -->
    <!-- Style switcher end -->

    <div class="body-inner">

   <!-- Header start -->
   <!-- Top Bar -->
    <?php $this->load->view('topbar'); ?>
    <!-- #Top Bar -->

    <?php $this->load->view($content);?>

    <!-- Left Sidebar -->
    <?php $this->load->view('footer'); ?>
    <!-- #END# Left Sidebar -->

  <!--   <section class="content">
        <div class="container-fluid">
            <?php //$this->load->view($content);?>
    </div>
    </section> -->


   <!-- Header end -->
    <!-- Slider start -->
    

    <!-- Service box start -->
    
   
        
    <!-- Counter Strat -->
    

    
    <!-- Parallax 1 start -->
   

    <!-- Testimonial start-->
 

   
    

    <!-- Copyright start -->
   

    <!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
    <script type="text/javascript" src="<?php echo base_url(); ?>design/js/jquery.js"></script>
    <!-- Bootstrap jQuery -->
    <script type="text/javascript" src="<?php echo base_url(); ?>design/js/bootstrap.min.js"></script>
    <!-- Style Switcher -->
    <script type="text/javascript" src="<?php echo base_url(); ?>design/js/style-switcher.js"></script>
    <!-- Owl Carousel -->
    <script type="text/javascript" src="<?php echo base_url(); ?>design/js/owl.carousel.js"></script>
    <!-- PrettyPhoto -->
    <script type="text/javascript" src="<?php echo base_url(); ?>design/js/jquery.prettyPhoto.js"></script>
    <!-- Bxslider -->
    <script type="text/javascript" src="<?php echo base_url(); ?>design/js/jquery.flexslider.js"></script>
    <!-- CD Hero slider -->
    <script type="text/javascript" src="<?php echo base_url(); ?>design/js/cd-hero.js"></script>
    <!-- Isotope -->
    <script type="text/javascript" src="<?php echo base_url(); ?>design/js/isotope.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>design/js/ini.isotope.js"></script>
    <!-- Wow Animation -->
    <script type="text/javascript" src="<?php echo base_url(); ?>design/js/wow.min.js"></script>
    <!-- SmoothScroll -->
    <script type="text/javascript" src="<?php echo base_url(); ?>design/js/smoothscroll.js"></script>
    <!-- Eeasing -->
    <script type="text/javascript" src="<?php echo base_url(); ?>design/js/jquery.easing.1.3.js"></script>
    <!-- Counter -->
    <script type="text/javascript" src="<?php echo base_url(); ?>design/js/jquery.counterup.min.js"></script>
    <!-- Waypoints -->
    <script type="text/javascript" src="<?php echo base_url(); ?>design/js/waypoints.min.js"></script>
    <!-- Template custom -->
    <script type="text/javascript" src="<?php echo base_url(); ?>design/js/custom.js"></script>
    </div><!-- Body inner end -->
</body>
</html>