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
            <a href="bigdatacube.php">BigDataCube</a>
            </p>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content">
        <div class="row-fluid privacy">
            <h1><b>BigDataCube</b></h1>
            <p><b>
                Public-Private EO Datacube Partnership
            </b></p>
            <p>
<table><tr><td><img src="bigdatacube-logo.png" width="70" border="none"></td></tr></table>
Under the lead of Jacobs University, the BigDataCube project has developed flexible and scalable services for massive spatio-temporal Earth Observation (EO) data, offered as datacubes. This paradigm replaces the millions of EO files by a few massive multi-dimensional space/time objects, such as 3D image timeseries and 4D weather forecast cubes. This way, raster data get ready for spatio-temporal analysis in the large.
            </p>
            <p>
Goal of BigDataCube was to enhance access to value-adding services supporting collaboration across disciplinary and geographical boundaries for industry and research. The massively simplified Big Data handling benefits users of existing services as well as new businesses, e.g., in agro-informatics: they don't need to develop or deploy complex technology and manage all data, but can use data readily, thereby freeing resources for their core business. Hence, on the BigDataCube platform novel, specialized services can be established by third parties in a fast, flexible, and scalable manner.
            </p>
            <p>
Concretely, the project deploys the European Datacube engine, rasdaman, in two infrastructures:
            </p>
            <ul>
              <li>
    The commercial hosted processing environment of cloudeo. Novel datacube access control and quota will safely handle both free and proprietary data provided by Intermap and PlanetObserver.
              <li>
    The public datacube service of CODE-DE, the German Copernicus hub, thereby complementing the batch-oriented Hadoop service with interactive extraction and processing along the paradigm of "any query, any time, on any size". DLR Bremen has established a sea wind and waves datacube.
            </ul>
            <p>
CODE-DE and cloudeo services have been federated, allowing users to combine datacubes from both paid and free services without the need for downloading them first. 
            </p>

<table cellspacing="10" cellpadding="10">
    <tr>
        <td>
            <img src="bigdatacube-a.png" width="700">
            <br/>
            <p>On-the-fly product extraction from CODE-DE datacubes</p>
            <br/>
        </td>
    </tr>
    <tr>
        <td> &nbsp; </td>
    </tr>
    <tr>
        <td>
            <img src="bigdatacube-b.png" width="700">
            <br/>
            <p>Federation query combining Sentinel-2 RGB (CODE-DE) with a DEM (cloudeo), displayed in a WebGL client</p>
            <br/>
        </td>
    </tr>
    <tr>
        <td> &nbsp; </td>
    </tr>
    <tr>
        <td>
            <img src="bigdatacube-c.png" width="700">
            <br/>
            <p>Ocean wind speed product by DLR Bremen</p>
            <br/>
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

            <img src="bigdatacube-funding.jpg" height="200px">

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
