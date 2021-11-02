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
            <a href="Hall-of-Fame/cropmap.php">CORAmaps</a>
            </p>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content">
        <div class="row-fluid privacy">
            <h1><b>SAR for Crop Mapping</b></h1>
            <p><b>
                Revealing the potential of dense temporal information provided by Sentinel-1
            </b></p>
            <p>
Croplands are characterized by strong temporal dynamics where the crop type on ground can be identified during a certain time period between seeding and harvesting. Hence, it is critical to have continuous temporal coverage over the individual growth periods. SAR is able to penetrate clouds and therefore delivers information independent of cloud coverage or daylight. 
</p>
<p>
Researchers at the TU Darmstadt use these characteristics to explore the possibilities of satellite carried SAR systems to provide large-scaled crop type identification. Sentinel-1 dual-polarized images from an entire year were used for the analysis, amounting in 16 TB of data.  Only one local training data set was used for the whole mapped area. The specifically developed image analysis procedures were implemented in Python and R. The entire process, starting with the download until the final map, was implemented fully automated. 
</p>
<p>
Germany’s main crop types of 2018, including grasslands, were mapped.  An update of the map is planned for 2019, which will contain more land cover and crop types. The land cover classification will also be implemented for further European countries and worldwide. The effect of radar shadow is aimed at being reduced as well.  
</p>
<p>
The centerpiece of the processing environment is the rasdaman database which allows for fast and flexible management and accessibility of the data. For large multi-temporal data stacks, this database enormously increases the data mining potentials. 
</p>
<p>
Detailed results can be found at <a href="http://www.coramaps.com">www.coramaps.com</a>.
            </p>
<table cellspacing="10" cellpadding="10">
    <tr>
        <td>
            <img src="cropmap.jpg" width="700">
            <br/>
            <p>SAR-based crop yield classification by CORAmaps</p>
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
    compose( "bargiel", "geod.tu-darmstadt", "de", "Dr. Damian Bargiel" );
  </script>
  <noscript>
    Dr. Damian Bargiel
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
