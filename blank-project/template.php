<?php
include('sulata/includes/config.php');
include('includes/functions.php');
include('sulata/includes/get-settings.php');
include('sulata/includes/db-structure.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- Title here -->
        <title><?php echo $getSettings['site_name'] . ' | ' . $getSettings['site_tagline']; ?></title>
        <noscript>
        <meta http-equiv="refresh" content="0;url=<?php echo NOSCRIPT_URL; ?>"/>
        </noscript>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Styles -->
        <!-- Bootstrap CSS -->
        <link href="<?php echo BASE_URL; ?>sulata/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font awesome CSS -->
        <link href="<?php echo BASE_URL; ?>sulata/css/font-awesome.min.css" rel="stylesheet">		
        <!-- Chosen CSS -->
        <link href="<?php echo BASE_URL; ?>sulata/chosen/bootstrap-chosen.css" rel="stylesheet" type="text/css"/>
        <!-- Custom CSS -->
        <link href="<?php echo BASE_URL; ?>sulata/css/style.css" rel="stylesheet">

        <!-- JQUI -->
        <link href="<?php echo BASE_URL; ?>sulata/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.min.css" rel="stylesheet" type="text/css" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>sulata/font-awesome/css/font-awesome.min.css" type="text/css" media="screen" />
        <!-- CK Editor -->
        <script src="<?php echo BASE_URL; ?>sulata/ckeditor/ckeditor.js"></script>
        <!-- Pretty Photo -->
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>sulata/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
        <!-- jQuery -->
        <script src="<?php echo BASE_URL; ?>sulata/jquery-ui/js/jquery-1.8.3.js" type="text/javascript"></script>
        <!-- Chosen JQuery -->
        <script src="<?php echo BASE_URL; ?>sulata/chosen/chosen.jquery.js" type="text/javascript"></script>
        <!-- Other JS files go in the footer -->
    </head>
    <body>
        <div id="error-area">
            <ul></ul>
        </div>    
        <div id="message-area">
            <p></p>
        </div>
        <!-- Javascript files -->
        <!-- Bootstrap JS -->
        <script src="<?php echo BASE_URL; ?>sulata/js/bootstrap.min.js"></script>
        <!-- jQuery UI -->
        <script src="<?php echo BASE_URL; ?>sulata/js/jquery-ui.min.js"></script>
        <!-- jQuery slim scroll -->
        <script src="<?php echo BASE_URL; ?>sulata/js/jquery.slimscroll.min.js"></script>
        <!-- Data Tables JS -->
        <script src="<?php echo BASE_URL; ?>sulata/js/jquery.dataTables.min.js"></script>	
        <!-- Respond JS for IE8 -->
        <script src="<?php echo BASE_URL; ?>sulata/js/respond.min.js"></script>
        <!-- HTML5 Support for IE -->
        <script src="<?php echo BASE_URL; ?>sulata/js/html5shiv.js"></script>
        <!-- Sulata JS -->
        <script type="text/javascript" src="<?php echo BASE_URL; ?>sulata/js/sulata.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>sulata/js/this-site.js"></script>
        <!-- JQUI -->
        <script src="<?php echo BASE_URL; ?>sulata/jquery-ui/js/jquery-ui-1.9.2.custom.min.js" type="text/javascript"></script>
        <!-- CK Editor -->
        <script src="<?php echo BASE_URL; ?>sulata/ckeditor/ckeditor.js"></script>
        <!-- Pretty Photo -->
        <script src="<?php echo BASE_URL; ?>sulata/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
        <!-- Javascript for this page -->
        <?php suIframe(); ?>  
    </body>
    <!--PRETTY PHOTO-->
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function() {
            $("area[rel^='prettyPhoto']").prettyPhoto();

            $(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed: 'normal', theme: 'light_square', slideshow: 3000, autoplay_slideshow: false});
            $(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed: 'fast', slideshow: 10000, hideflash: false});

            $("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
                custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
                changepicturecallback: function() {
                    initialize();
                }
            });

            $("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
                custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
                changepicturecallback: function() {
                    _bsap.exec();
                }
            });
        });
    </script>
</html>