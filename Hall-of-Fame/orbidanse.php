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
            <a href="orbidanse.php">ORBiDANSe</a>
            </p>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content">
        <div class="row-fluid privacy">
            <h1><b>ORBiDANSe - Orbital Big Data Analytics Service</b></h1>
            <p><b>
                Datacubes on a Satellite
            </b></p>
            <p>
OPS-SAT is a cube satellite to be launched by ESA, with rasdaman on board for ad-hoc queries on imagery obtained. Goal is to achieve a quantum leap in both EO service quality and Big Data Analytics performance.
            </p>
            <p>
The <a href="http://kahlua.eecs.jacobs-university.de/~lsis/Projects/orbidanse.php">ORBiDanse project</a> is driving the "ship code to data" paradigm to the extreme: it makes a Cubesat an online Web data service for real time EO acquisition, processing, and retrieval, based on the ISO Array SQL standard crafted by the rasdaman team. Images get acquired by the on-board camera and geo-referenced via GPS. Access is done via a high-level array query language allowing ad-hoc processing and filtering on spatio-temporal raster data, similar to what standard SQL accomplishes on tuple sets.
            </p>
            <p>
On board, such queries are evaluated by the rasdaman Big Array Data Analytics engine. Among others, it supports spatio-temporal queries, hence is truly multi-dimensional. The configuration can be updated/reconfigured in-flight, although emphasis will be put on automatic optimization, including acquisition planning based on incoming queries. In a direct scenario, targeted subsetting/pocessing of imagery can be downlinked directly to the requesting client, effectively turning the satellite into an image database. In a federated scenario, a client may submit some complex decision support query to a data center; the rasdaman instance there finds out that data are missing and spawns a sub-request to the Cubesat; merges its locally computed results with the Cubesat response into the final result sent back to the user. As rasdaman is already cloud-parallelized, queries can be distributed automatically between ground and space instances.
            </p>
            <p>
This project is funded by German BMBF (Ministry of Education and Research). 
            </p>
<table cellspacing="10" cellpadding="10">
    <tr>
        <td>
            <img src="orbidanse-a.png" width="700">
            <br/>
            <p>Artist's view of the OPS-SAT cubesat</p>
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
    compose( "p.baumann", "jacobs-university", "de", "Peter Baumann" );
  </script>
  <noscript>
    Peter Baumann (allow Javascript for mail address)
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
