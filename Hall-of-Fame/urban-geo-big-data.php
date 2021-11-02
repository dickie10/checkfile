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
            <a href="orbidanse.php">Urban Geo Big Data</a>
            </p>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content">
        <div class="row-fluid privacy">
            <h1><b>Urban Geo Big Data</b></h1>
            <p><b>
                Urban Geo Big Data
            </b></p>
            <p>
The geoportal of the <a href="http://www.urbangeobigdata.it/">URBAN GEO BIG DATA project</a> hosts various use cases, including the processing of Land Use and Land Cover (LULC) datasets through Open Geospatial Consortium (OGC) Web Coverage Processing Service (WCPS). The datasets are land consumption maps from Italian Institute for Environmental Protection and Research (ISPRA) of 2012, 2015, 2016, and 2017; land cover map from ISPRA of 2012; GlobeLand30 of 2000 and 2010; and GHS (Global Human Settlement) built-up of 1975, 1990, 2000, and 2014. All the datasets have a spatial extent of Italy.
            </p>
            <p>
When a user clicks on a dataset of multiple years, WCPS returns the change of land use or land cover classes for the clicked coordinates. Besides executing processing for a set of coordinates, WCPS also calculates the amount of change of selected land use or land cover class for an area drawn by the user for two selected years. The geoportal can be accessed via <a href="http://urbangeobigdata.como.polimi.it/">http://urbangeobigdata.como.polimi.it/</a>. The source code with version 3 of the GNU General Public License (GPL) is available at
<a href="https://github.com/kilsedar/urban-geo-big-data-3d">https://github.com/kilsedar/urban-geo-big-data-3d</a>.
            </p>
<table cellspacing="10" cellpadding="10">
    <tr>
        <td>
            <img src="urban-geo-big-data-a.png" width="700">
            <br/>
            <p>Change of classes for the clicked coordinates of GHS built-up maps from 1975 to 2014</p>
        </td>
    </tr>
    <tr>
        <td> &nbsp; </td>
    </tr>
    <tr>
        <td>
            <img src="urban-geo-big-data-b.png" width="700">
            <br/>
            <p>Amount of change of artificial surfaces, around 3%, for the drawn area around Campania in Italy from 2000 to 2010 according to GlobeLand30
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
    compose( "candaneylul.kilsedar", "polimi", "it", "Candan Eyl&uuml;l Kilsedar" );
  </script>
  <noscript>
    Candan Eyl&uuml;l Kilsedar (allow Javascript for mail address)
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
