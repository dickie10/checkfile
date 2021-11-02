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


<h2 class="news"><b>rasdaman newsletter 11/2015</b></h2>
<h3 class="news"> Simplified Big Data Handling: New OGC Standard </h3><p><b>
2015-oct-30: Voting has closed on the OGC WCS-T specification, resulting in the effective adoption of the standard as part of the OGC WCS suite. WCS-T enables Web-based insertion, deletion, and modification of spatio-temporal coverages offered through a WCS-based service. </b></p><p>
The OGC Web Coverage Service (WCS) Interface Standard is an open standardwidely implemented in geospatial applications around the world, both open-source and proprietary. The standard's main function up until now has been to support retrieval of geospatial "coverages" data such as spatio-temporal sensor, image, timeseries, simulation, and statistics data. With the new Transaction extension, the standard will support not only retrieval but also transactions such as insert, update, and delete of a coverage on the server.
</p><p>
"The high-performance datacube services running rasdaman showed us the need for enhancing operator support for the maintainers", explains Peter Baumann, Professor of Computer Science at Jacobs University and editor of the standard. "Incremental creation and maintenance of 2-D, 3-D, and 4-D datasets, possibly with irregular grids along space or time, can be challenging and error-prone. With WCS-T, a simple Web request performs all actions necessary, and ensures consistency of the server offering at all times." Simultaneously to writing the specification, WCS-T has been implemented in rasdaman. He explains, "With rasdaman, we have the ideal test vehicle for evaluating new service concepts." Naturally, therefore rasdaman becomes reference implementation lateron. In the intercontinental EarthServer initiative [0], WCS-T is already regularly used to establish datacubesgrowing beyond one Petabyte each.
</p><p>
But there is more to it than just convenience. Effectively, WCS-T closes a gap when it comes to Earth data mash-ups and federations: Coverage subsets can be extracted from one server using any suitable service interface, such as WFS, WCS, WMS, WPS, or SOS and can be fed into another service node via WCS-T.
</p><p>
The team around Baumann already has extensive experience in crafting widely accepted "Big Data" standards. They have developed the whole WCS 2.0 suite which today is supported by MapServer, GeoServer, ESRI, and many others. Recently, OGC WCS has entered the adoption process of both ISO and INSPIRE. Further, the group has initiated ISO work on domain-independent SQL support for multi-dimensional arrays, the forthcoming SQL/MDA standard. WCS data offerings today exceed hundreds of Terabytes, and Array SQL queries have been parallelized over more than 1,000 cloud nodes.
</p><p>
A draft version of the WCS-T standard is available at the OGC Coverages info hub [1], the authoritative standard document will be made available soon on the official OGC WCS download page [2].
</p><p>
[0] <a href="http://www.earthserver.eu">earthserver.eu</a>
</p><p>
[1] <a href="ihttp://external.opengeospatial.org/twiki_public/CoveragesDWG/CoveragesBigPicture">opengeospatial.org/CoveragesDWG</a>
</p><p>
[2] <a href="http://www.opengeospatial.org/standards/wcs">www.opengeospatial.org/standards/wcs</a>
</p><p>
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

