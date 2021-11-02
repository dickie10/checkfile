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


<h2 class="news"><b>rasdaman newsletter 08/2015</b></h2>
<h3 class="news">US Government Looking at Datacube Processing Standards </h3><p><b>
In face of the Big Geo Data challenges the OGC standards for spatio-temporal keep advancing. Recent emphasis was on the semantic-rich server-side processing of coverages by bridging the Web Coverage Service (WCS) 2.0 and the Web Processing Service (WPS) 2.0. The standards observing group of US ?Federal Geographic Data Committee (FGDC) sees coverage processing as a mandatory standard in future.
</b></p><p>
Server-side filtering and processing of spatio-temporal coverages is a core trend emerged in 2014. The Web Coverage Service (WCS) standard suite represents a modular framework for versatile access to coverages; a special extension, WCS Processing, allows to send datacube queries to a server using the OGC Web Coverage Processing Service (WCPS) language. Up to now,the WCPS way of processing was separate from the OGC Web Processing Service (WPS). The new "WPS Application Profile - Coverages" (short: WPS-Cov,OGC document 09-045r1) has been adopted unanimously as OGC Discussion Paper by the WPS Standards Working Group. It specifies how to invoke WCS and WCPS functionality using the WPS protocol. A simple parameter mapping enables WCS and WCPS requests over WPS as carrier while remaining fully conformant with all these specifications individually.
</p><p>
In an earlier project funded by the European Space Agency (ESA) such mechanisms have been investigated successfully: a commercial client, ChartLink by Envitia, communicated with an open-source server, rasdaman by JacobsUniversity. "WPS-Cov adds coverage semantics to WPS; on the other hand, WCS is complemented with asynchronous processing, something tremendously useful for complex coverage analytics" explains Peter Baumann, editor of this specification as well as the WCS standards suite.
</p><p>
Hence, with its Web services portfolio OGC offers a tailorable, modular spectrum of standards ranging from simple access with WCS over agile analytics with WCPS to arbitrary algorithms with WPS. The recent specificationcontributed by Jacobs University closes the last gap, arriving at a seamless spatio-temporal Big Geo Data suite.
</p><p>
This sustained activity on flexible, value-adding coverage services has also attracted attention of the US Federal Geographic Data Committee Standards. In its October update published by Julie Binder Maitre the WCS suite components receive particular attention. FGDC reports that in its Fall 2014 meeting the Geospatial-Intelligence Standards Working Group (GWG) voted to "add the WCS Processing Extension as an emerging standard, with the intention to move it to mandated in a future baseline". Peter Baumann assesses, "we expect that after this announcement and 170 Terabyte datacubes queried through WCPS in ESA installations, uptake of OGC WCPS will increase significantly in the near future".
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

