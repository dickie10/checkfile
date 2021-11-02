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
            <a href="planetserver.php">PlanetServer</a>
            </p>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content">
        <div class="row-fluid privacy">
            <h1><b>PlanetServer</b></h1>
            <p><b>
                Calibrated hyper- and multispectral, topographic data on Solar System bodies.
            </b></p>

            <p>
<a href="http://www.planetserver.eu">PlanetServer</a> provides access and analysis of planetary data, mainly through <a href="http://en.wikipedia.org/wiki/Web_Coverage_Processing_Service">OGC Web Coverage Processing Service</a> (WCPS). The focus of PlanetServer is particularly on hyperspectral imaging and topographic data. Data from Mars, the Moon and other Solar System Bodies are available and queriable.
            </p>
            <p>
Ingested datasets derive from NASA Planetary Data System (PDS) and ESA Planetary Science Archive (PSA). User interest and community feedback served as input and driver to PlanetServer features and capabilities. Moreover, PlanetServer aims at supportng collaborative data analysis, being able to share planetary data hosted on a database server and querying them from a web client through any supported web browser (Chrome is advised). 
            </p>
<table cellspacing="10" cellpadding="10">
    <tr>
        <td>
            <img src="planetserver-b.jpg" width="700">
        </td>
    </tr>
    <tr>
        <td> &nbsp; </td>
    </tr>
    <tr>
        <td>
            <img src="planetserver-d.jpg" width="700">
        </td>
    </tr>
    <tr>
        <td> &nbsp; </td>
    </tr>
    <tr>
        <td>
            <img src="planetserver-a.jpg" width="700">
        </td>
    </tr>
    <tr>
        <td> &nbsp; </td>
    </tr>
    <tr>
        <td>
            <img src="planetserver-c.jpg" width="700">
        </td>
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
    compose( "ap.rossi", "jacobs-university", "de", "Angelo Pio Rossi" );
  </script>
  <noscript>
    Angelo Pio Rossi(allow Javascript for mail address)
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
