<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"> <!--<![endif]-->
<head>
    <title>rasdaman, the Big Data Analytics Server</title>
    <?php require_once("assets/html/secondary/head.php") ?>
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
<?php require_once("assets/html/secondary/header.php") ?>
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


<h2 class="news"><b>rasdaman newsletter 01/2014</b></h2>
<h3 class="news">OGC Adopts Extensions to Big Geo Data Standard </h3><p><b>
January 20, 2014. OGC now has adopted a series of functionality extensions to its Big Geo Data standard, Web Coverage Service (WCS). Web services implementing the WCS interface standard offer simple, yet powerful access to spatio-temporal sensor, image, simulation, and statistics data. The standards adopted now focus on data formatting and server-side processing of large-scale information to enable versatile, fast access to both detail and summary information.
</b></p><p>
The concept of coverages unifies regular and irregular grids, point clouds, and meshes. A coverage can be described as the digital representation of some spatio-temporal phenomenon, be it observed or generated. While ISO 19123 establishes an abstract model of coverages, the OGC GMLCOV standard refines this to a concrete, interoperable specification. The corresponding compliance tests offered by OGC can test compliance of implementations down to single pixel level.
</p><p>
Coverages can be served out via many OGC-based interfaces, such as WMS, WFS, WCS, SOS, and WPS. The broadest functionality set is offered by WCS, ranging from simple subsetting to complex analytics. The latest WCS extensions add in various functionality facets. For the encoding of grids in the GeoTIFF format, the WCS GeoTiff Coverage Encoding Extension [OGC 12-101] has been established. One or more "channels" or "bands" can be extracted conveniently from a multi-band or hyperspectral coverage through the functionality defined in the WCS Range Subsetting Extension [OGC 12-040]. Retrieval of grid coverages in reduced resolution is possible through the WCS Scaling Extension [OGC 12-039]. The WCS Interpolation Extension [OGC 12-049] serves to control interpolation in a server on all operations where interpolation occurs, such as CRS transforms and grid scaling.
</p><p>
A particular answer of OGC to the Big Data challenge is the Web Coverage Processing Service (WCPS) standard. This coverage query language allows clients to send queries in a simple language for evaluation on a server, in clusters, clouds, or federations of data centers. The WCS Processing Extension [OGC 08-059r4] connects the abstract WCPS language into WCS, allowing to send queries as WCS-style requests using any standardized protocol.
</p><p>
While WCS Core and Extensions are domain neutral and generically spatio-temporal, WCS Application Profiles bundle functionality for particular purposes and applications. The WCS Earth Observation Profile [OGC 10-140r1] adopted now establishes such an Application Profile for large-scale satellite imagery.
</p><p>
Altogether, WCS constitutes today's most powerful and flexible service environment for Big Geo Data appearing as coverages. The broad support by industry, academia, and government agencies during the vote underlines the broad worldwide uptake of WCS. A significant number of WCS implementations exists already, and many large vendors are preparing their own products based on WCS. A mapping of the INSPIRE Download Services to WCS is in preparation.
</p><p>
Comprehensive information about OGC's Big Coverage Data standards is provided at 
<a href=http://external.opengeospatial.org/twiki_public/CoveragesDWG/WebHome">http://external.opengeospatial.org/twiki_public/CoveragesDWG/WebHome</a>
</p><p>
        </div><!--/row-fluid-->
    </div><!--/container-->
    <!--=== End Content Part ===-->

</section>
<!--  Content Section -->

<!-- Imprint Section -->
<?php require_once("assets/html/secondary/imprint.php") ?>
<!-- End Imprint Section -->

<!-- Javascript include -->
<?php require_once("assets/html/secondary/js-footer.php") ?>
<!-- End Javascript include -->
</body>
</html>

