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


<a name="34-3"></a>
<br/>
<h2 class="news"><b>rasdaman newsletter 01/2021</b></h2>
<br/>
<h3>Pushing the Limits of Datacubes</h3>
<p><b>
 January 2021 - A preview version of rasdaman 10 has been released. Once more, a major step forward has been accomplished by the team.
</b></p>
<p>
Version 10 of rasdaman will be packed with innovation and enhancements; both rasdaman community and enterprise are being advanced substantially. A sneak preview is now available with the 10beta release. Among the load of new features and improvements there is:
</p>
<ul>
    <li>a completely new query engine with substantially increased performance on modern multi-core architectures, reduced memory usage, enhanced nodata handling with null masks, and more. While rasdaman was already leading in performance, large-scale deployments show another massive speedup.
    <li>Heterogeneous data can be combined into a single coverage. The huge asset of individual Sentinel-2 scenes, for example, comes in different UTM zones - these now appear as a single, homogeneous Sentinel-2 datacube. During retrieval, all necessary reprojections, scaling and overlaying are done on-the-fly, transparently, and in realtime.
    <li>A catalog feature enables spatio-temporal searching and filtering of available coverages, both locally and in the federation.
    <li>Role-Based Access Control allows administrators, through convenient Web tools, to restrict access to datacubes and parts thereof, down to single pixel level. Quota can restrict resource usage on a per-user basis. 
</ul>
<p>
For rasdaman community, the usual download from rasdaman.org applies; for customers with an active maintenance contract the rasdaman enterprise release is available on the enterprise download portal.
</p>
<p>
More details:
<a href="mailto:contact@rasdaman.com">contact@rasdaman.com</a>
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

