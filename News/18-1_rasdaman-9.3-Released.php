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


<h2 class="news"><b>rasdaman newsletter 10/2016</b></h2>
<a name="18-1"></a><br/><br/>
<h3>rasdaman 9.3 Released</h3>
<p><b>
Open-source rasdaman v9.3.0 is now available for download, see <a href="http://rasdaman.org/wiki/Download">rasdaman.org</a>. Important feature additions include:
</b></p>
<ul>
  <li>Enhanced NetCDF support</li>
  <li>GRIB format support</li>
  <li>Advanced JSON-style format-parameters support in encode/decode</li>
  <li>WCSTImport supports a general coverage recipe that can be used with complex formats like GRIB or NetCDF</li>
  <li>WCPS uses a brand new and improved parser and implementation by default</li>
  <li>CRS reprojection now available in both WCS and WCPS</li>
  <li>automated download, compilation, and deployment through a brand new installer script</li>
</ul>
<p>
Deployment can be done through one of these options:
</p><p>
<ul>
  <li>From source - just run the installer script</li>
  <li>Packages - RPM (CentOS 7) and DEB (Ubuntu Trusty / Debian 8) are available; more distros will come soon</li>
  <li>Virtual machines - readily configured with a running rasdaman instance</li>
</ul>
<p>
Full details can be found at <a href="http://rasdaman.org/wiki/Download">rasdaman version 9.3</a> .
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

