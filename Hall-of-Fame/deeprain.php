<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"> <!--<![endif]-->
<head>
    <title>rasdaman, the Big Datacube Analytics Server</title>

    <!-- PB 2018-12-16: set global path to make includes position agnostic -->
    <?php $RASROOT_PHP = "/homepages/44/d73458694/htdocs/Rasdaman-en"; ?>
    <?php set_include_path(get_include_path().":".$RASROOT_PHP); ?>
    <?php require_once($RASROOT_PHP."/assets/html/secondary/head.php") ?>
</head>

<!--
The #page-top ID is part of the scrolling feature.
The data-spy and data-target are part of the built-in Bootstrap scrollspy function.
-->
<body id="body" data-spy="scroll" data-target=".one-page-header" class="demo-lightbox-gallery dark">
<!--=== Header ===-->
<?php require_once($RASROOT_PHP."/assets/html/secondary/header.php") ?>
<!--=== End Header ===-->

<!--  About Section -->
<section id="content" class="secondary-content-section section-first">
    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <br/>
            <p class="pull-left">
            <a href="index.php">rasdaman Hall of Fame</a> - 
            <a href="deeprain.php">DeepRain</a>
            </p>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content">
        <div class="row-fluid privacy">
            <h1><b>DeepRain</b></h1>
            <p><b>
                Local Precipitation Prediction through Machine Learning
            </b></p>
            <p>
Due to the stochastic nature of atmospheric circulation, probabilistic precipitation predictions provide significantly more information than classical deterministic predictions, which do not capture forecast uncertainty. However, heavy precipitation events or longer periods of non-rainfall can have enormous economic consequences, so that the assessment of uncertainty is of decisive importance. <a href="https://www.fz-juelich.de/ias/jsc/EN/Research/Projects/DeepRain/_node.html">DeepRain</a> combines modern methods of machine learning with high-performance data provisioning and processing systems (i.e., Array DBMSs) to generate spatially and temporally high-resolution maps with improved and validated precipitation predictions including their uncertainties based on high-resolution regional weather models. In addition to the actual method development, aspects of data curation and efficiency are specifically investigated in order to demonstrate a complete process chain at the end of the project, which can be transferred into operational use or embedded in existing workflows. The basis for the application of machine learning is a novel combination of data from numerical weather forecast models with precipitation radar, lightning and station measurements as well as topographic data.  
            </p>
<table cellspacing="10" cellpadding="10">
    <tr>
        <td>
            <img src="deeprain-b.png" width="700">
            <br/>
            <p>DeepRain is focusing on determining localized rain behavior where classical weather forecast does not deliver</p>
        </td>
    </tr>
    <tr>
        <td> &nbsp; </td>
    </tr>
</table>
<p>
<b>Contact:</b>
  <script language="javascript">
    function compose(t1,t2,t3,t4)
    {
        document.write( "<a href=\"mailto:" + t1 + "@" + t2 + "." + t3 + "\">" );
        document.write( t4 );
        document.write( "</a>" );
    }
    compose( "m.schultz", "fz-juelich", "de", "Martin Schultz" );
  </script>
  <noscript>
    Martin Schulz (allow Javascript for mail address)
  </noscript>
</p>

        </div><!--/row-fluid-->
    </div><!--/container-->
    <!--=== End Content Part ===-->

</section>
<!--  Content Section -->

<!-- Imprint Section -->
<?php require_once($RASROOT_PHP."/assets/html/secondary/imprint.php") ?>
<!-- End Imprint Section -->

<!-- Javascript include -->
<?php require_once($RASROOT_PHP."/assets/html/secondary/js-footer.php") ?>
<!-- End Javascript include -->
</body>
</html>
