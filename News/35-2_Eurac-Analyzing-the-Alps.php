<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"> <!--<![endif]-->
<head>
    <title>rasdaman, the Big Data Analytics Server</title>
    <?php require_once($_SERVER['DOCUMENT_ROOT'] . "/assets/html/secondary/head.php") ?>
    <style type="text/css">
.news h1 {
    font-weight:bolder;
    line-height:20px;
}

.news h2 {
    font-weight:bold;
    font-size:smaller;
}
    </style>
</head>

<!--
The #page-top ID is part of the scrolling feature.
The data-spy and data-target are part of the built-in Bootstrap scrollspy function.
-->
<body id="body" data-spy="scroll" data-target=".one-page-header" class="demo-lightbox-gallery dark">
<!--=== Header ===-->
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/assets/html/secondary/header.php") ?>
<!--=== End Header ===-->


<!--  Content Section -->
<section id="content" class="secondary-content-section section-first">

    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">rasdaman News Archive</h1>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content">
        <div class="row-fluid privacy">


<a name="35-2"></a>
<br/>
<h2 class="news"><b>rasdaman newsletter 05/2021</b></h2>
<br/>
<h3> EURAC: Analyzing the Alps </h3>
<p><b>
 The Eurac research team of Alexander Jacob, Advanced Computing for Earth Observation (ACEO) at the Institute for Earth Observation in Bolzano, Italy, uses rasdaman state of the art technology to manage Big EO Data. The research activities aim at monitoring and understanding of processes driving and driven by climate change. The flexible representation of data in the rasdaman datacube engine allows for efficient use of complex data such as the Sentinel-1 interferometric products just as well as long and dense time series from missions like MODIS, Landsat or Sentinel-2. 
</b></p>
<p>
 Eurac's Petacale alpine archive of data is stored and processed directly on their high-performance cloud infrastructure. Pre-processed data is organized into datacubes using the array database rasdaman. This guarantees fast and standardized access to the data via the OGC Web Coverage Service (WCS), following the principle "what you get is what you need". Furthermore, a good portion of the classic processing tasks such as sub-setting, re-projection, resampling and time series aggregation is directly done in these datacubes using the OGC protocol WCPS (Web Coverage Processing Service), according to the Big Data principle "bring processing to the data". 
</p>
<p>
 For direct integration into daily workflows of researchers the ACEO team is developing API level access to the data stored in datacubes for development environments like python and R. Starting from the development of a simple Python module for WCPS access to the rasdaman server, over the CubeR library, most recently the ACEO team was involved in the development and implementation of the open EO API capable of transforming requests into WCPS queries and responses in data structures like xarray or stars that can be directly used in Python or R for further analysis and visualization. 
</p>

        </div><!--/row-fluid-->
    </div><!--/container-->
    <!--=== End Content Part ===-->

</section>
<!--  Content Section -->

<!-- Imprint Section -->
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/assets/html/secondary/imprint.php") ?>
<!-- End Imprint Section -->

<!-- Javascript include -->
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/assets/html/secondary/js-footer.php") ?>
<!-- End Javascript include -->
</body>
</html>

