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
            <a href="plotly.php">plotly</a>
            </p>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content">
        <div class="row-fluid privacy">
            <h1><b>Plotly Dashboard for Rasdaman</b></h1>
            <p><b>
                Making a dashboard using python dash plotly pulling data from rasdaman database
            </b></p>
            <p>
Having heard of the performance of rasdaman in querying multidimensional arrays, we wanted to give it a try since our dataset is mostly spatial, and we want to benefit from fast processing of spatial time series data that rasdaman offers.
We would like to explore the possibility of storing data from different kinds of measurements or maps (time series of meteorological data, results of soil sample analyses, different thematic maps, ...) in a rasdaman database.
Ultimately, some of the functionalities we would like for the application are:
</p>
<ul>
  <li>Browse and download data of each meteorological station,
  <li>Draw polygon and get average of different parameters for the whole area, and possibly as a time series where applicable
</ul>
<p>Data storage in rasdaman: "point data" are represented as a single pixel raster time series, where each pixel/image represents a rasterbrick (like a multispectral image where each band stores the value of a parameter e.g. temperature). Other raster data (soil maps, erosion maps...) could be stored in other coverages, and aggregation could be done later on through queries from python.
            </p>
<table cellspacing="10" cellpadding="10">
    <tr>
        <td>
            <img src="plotly-a.png" width="700">
            <br/>
            <p>Selection of a meteo station to get parameters over time</p>
        </td>
    </tr>
    <tr>
        <td>
            <img src="plotly-b.png" width="700">
            <br/>
            <p>Selection of an area to get average of parameters over time</p>
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
    compose( "bravemaster102", "gmail", "com", "Koffi Dodji NOUMONVI" );
  </script>
  <noscript>
    Koffi Dodji NOUMONVI (allow Javascript for mail address)
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
