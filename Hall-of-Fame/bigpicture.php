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
            <a href="bigpicture.php">BigPicture</a>
            </p>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content">
        <div class="row-fluid privacy">
            <h1><b>BigPicture</b></h1>
            <p><b>
                Public-Private EO Datacube Partnership
            </b></p>
            <p>
<table><tr><td><img src="bigpicture-logo.png" width="70" border="none"></td></tr></table>
            </p>
            <p>
In the BigPicture project rule-based classification of field health was established for a variety of crop types.
In particular, this allows to determin In-field anomalies such as frost and drought effects.
Computation relies on complex timeseries analytics combining Sentinel-2a timeseries, CORINE land cover timeseries, soil data, and climate water balance timeseries.
All analytics was formulated in the OGC WCPS datacube language - this made it flexible during the design process where alternatives had to be tried out and, due to the high-level nature, made the code self-documenting.
Likely this has resulted in the largest WCPS queries ever, with up to 200 lines.
Analysis can be carried out using rasdaman in realtime for any regional point; the whole of Germany becomes available in about one hour.
            </p>
            <p>
The project was led by Spatial Business Integration, Germany.
            </p>

<style>
td {
  text-align:center;
  padding:10px;
}
</style>

<table cellspacing="10" cellpadding="10">
    <tr>
        <td>
            <img src="bigpicture-a.png" width="300">
            <br/>
            <p>Crop growth anomalies for German municipality</p>
            <br/>
        </td>
        <td>
            <img src="bigpicture-d.png" width="300">
            <br/>
            <p>Evapotranspiration for Germany, obtained as timeseries aggregation</p>
            <br/>
        </td>
    </tr>
    <tr>
        <td> &nbsp; </td>
    </tr>
    <tr>
        <td>
            <img src="bigpicture-c.png" width="300">
            <br/>
            <p>Dynamic field-level health status derivation</p>
            <br/>
        </td>
        <td>
            <img src="bigpicture-b.png" width="300">
            <br/>
            <p>Crop drought situation</p>
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

            <img src="bigpicture-funding.png" height="200px">

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
