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
            <a href="eurac.php">EURAC</a>
            </p>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content">
        <div class="row-fluid privacy">
            <table align="right"><tr><td>
              <img src="eurac-logo.png" height="100">
            </td></tr></table>

            <h1><b>EURAC</b></h1>
            <p><b>
                Frozen Datacubes: Snow &amp; Ice Analytics
            </b></p>

            <p>
The Eurac research team of Alexander Jacob, Advanced Computing for Earth Observation (ACEO) at the Institute for Earth Observation in Bolzano, Italy, uses state of the art technology to manage big EO Data and support important research. The research activities aim at monitoring and understanding of processes driving and driven by climate change. The mountain cryosphere is severely impacted by rising temperatures and observing snow cover and melting glaciers is key to the understanding of future water availability. Following the human and nature driven transformation of land cover and land use is important to understand the influence of agricultural practices on ecosystems and their flora and fauna. The flexible representation of data in the rasdaman datacube engine allows for efficient use of complex data such as the Sentinel-1 interferometric products just as well as long and dense time series from missions like MODIS, Landsat or Sentinel-2. 
            </p>
            <p>
Eurac´s Petascale alpine archive of data is stored and processed directly on their high-performance cloud infrastructure. Pre-processed data is organized into datacubes using the array database rasdaman. This guarantees fast and standardized access to the data via the OGC Web Coverage Service (WCS), following the principle “what you get is what you need”. Furthermore, a good portion of the classic processing tasks such as sub-setting, re-projection, resampling and time series aggregation is directly done in these datacubes using the OGC protocol WCPS (Web Coverage Processing Service), according to the Big Data principle “bring processing to the data”. 
            </p>

            <table cellspacing="10" cellpadding="10" style="margin-top:20px">
                <tr>
                    <td>
                        <img src="eurac-a.png" width="700">
                        <br/>
                        <p>Compressing information from more than 500 images into one figure</p>
                    </td>
                </tr>
                <tr>
                    <td> &nbsp; </td>
                </tr>
            </table>

            <p>
For direct integration into daily workflows of researchers the ACEO team is developing API level access to the data stored in datacubes for development environments like python and R, which have become highly popular due to their open-source nature and ample availability of packages or libraries for all kinds of EO data analysis. Starting from the development of a simple Python module for WCPS access to the rasdaman server, over the CubeR R-package, most recently the ACEO team was involved in the development and implementation of the openEO API capable of transforming requests into WCPS queries and responses in data structures like xarray or stars that can be directly used in Python or R for further analysis and visualization.
            </p>
            <p>
For the land cover and vegetation classification two algorithms well-known in this field, Random Forests and Support Vector Machines, are applied. All Python scripts run in cloud-based Jupyter notebooks. Git is used as version control system to document and publish the code for other users. This fosters collaboration as other researchers can clearly see, comment and help developing the code. With the proposed approach the EO users can process and analyse large amounts of data in a cloud infrastructure, accessing services and data remotely using a high-level programming language. In this way, EO users can focus on algorithm development, instead of dealing with data preparation.
            </p>

            <table cellspacing="10" cellpadding="10" style="margin-top:20px">
                <tr>
                    <td>
                        <img src="eurac-b.png" width="700">
                        <br/>
                        <p>Processing flow integration with direct connection of R and python to the rasdaman datacubes</p>
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
                compose( "alexander.jacob", "eurac", "edu", "Alexander JACOB" );
              </script>
              <noscript>
                Alexander JACOB (allow Javascript for mail address)
              </noscript>
              , Eurac Research, Institute for Earth Observation 
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
