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


<a name="24-3"></a>
<h3>What's Your Favourite Big Data Client?</h3>
<p><b>
 So how do you work with Big Data? Typically, tools come with specific frontends that require a new learning curve. This is not necessary, as rasdaman shows: you can remain in the comfort zone of your well-known tools.
</b>
</p><p>
Sometimes you will find that the emerging datacube prototypes, such as Open Data Cube, require you to become a versed python programmer. This is similar to the early Big Data wave where everyone was supposed to become a Java and parallelization geek.
</p><p>
At rasdaman, we work hard for harmonization and building bridges in Earth Observation and the Big Data communities in general. This holds in particular for ease of access through a variety of clients, including for example:
</p>
<ul>
    <li>Map navigation: OpenLayers, Leaflet, ...</li>
    <li>Virtual globe: NASA WorldWind, Cesium, ...</li>
    <li>Web GIS: QGIS, ArcGIS, ...</li>
    <li>Analysis: GDAL, R, python, ...</li>
</ul>
<p>
Admittedly, we never could implement such a wealth of clients ourselves, and fortunately we don't have to, thanks to the open OGC standards: rasdaman supports them, clients support them, deal done.
</p><p>
Actually, we even have joined the Open Geospatial Consortium with a mission of contributing to modularity. This has led to the highly modular Web Coverage Service (WCS) 2 standard which today is embraced by a large, steadily growing number of tools. For example, we have separated the coverage data (CIS) and service model (WCS) so that coverages today can be served through many different APIs, including WMS, WFS, WPS, and SOS.
</p><p>
This affords a new paradigm: whatever you have been using, continue that while unleashing the potential of superscale datacubes with rasdaman in the back end, transparently. Meaning, of course, that different users can access one and the same datacube with different tools doing different tasks; and that includes consistent updates - rasdaman is a database system, after all.
</p><p>
Contact: Dr. Peter Baumann, baumann@rasdaman.com
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

