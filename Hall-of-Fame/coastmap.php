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
            <a href="coastmap.php">coastMap</a>
            </p>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content">
        <div class="row-fluid privacy">
            <h1><b>coastMap</b></h1>
            <p><b>
                Helmholtz Centre Geesthacht Marine Model Analysis
            </b></p>
            <p>
<a href="https://coastmap.hzg.de/coastmap/modeldata/MODEL_ANALYSIS_TOOL/">coastMap</a> is the marine Geoportal of the <a href="https://www.hzg.de/institutes_platforms/coastmap/index.php.en">Institute of Coastal Research</a> of the Helmholtz Centre Geesthacht (HZG), Germany. It combines analyses and model data on seafloor conditions with those in the water column above. Geographic focus is on the North Sea and the atmosphere. The portal offers campaign data, model analyses and biogeochemistry thematic maps. Users can freely select and visualize models covering remarkable amounts of geographic areas and time periods. 
            </p>
<table cellspacing="10" cellpadding="10">
    <tr>
        <td> &nbsp; </td>
    </tr>
    <tr>
        <td>
            <img src="coastmap-a.png" width="700">
            <br/>
            <p>A wide variety of scenarios is freely accessible via the <a href="https://coastmap.hzg.de/coastmap/modeldata/MODEL_ANALYSIS_TOOL/">HZG Model Analysis Tool</a></p>
        </td>
    </tr>
    <tr>
        <td> &nbsp; </td>
    </tr>
</table>
            <p>
HZG has decided to use the rasdaman Big Data engine. This platform, which is completely based on open standards, complements coastMap with unified, flexible and scalable data management. Fast access and analysis of model data is provided via homogenized, user-friendly spatio-temporal datacubes. Altogether 190 datacubes are currently available in rasdaman and available open and free of cost. 
"rasdaman is an exciting technology for accessing and managing Big Data." says Dr. Ulrike Kleeberg from HZG.
            </p>
<table>
    <tr>
        <td> &nbsp; </td>
    </tr>
    <tr>
        <td>
            <img src="coastmap-b.png" width="700">
            <br/>
            <p>Homogenized data management based on datacubes builds a flexible platform enabling users of accessing data with standard tools. So rasdaman embedds itself seamlessly into HZG's existing IT-Infrastructure.</p>
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
    compose( "ulrike.kleeberg", "hzg", "de", "Ulrike Kleeberg" );
  </script>
  <noscript>
    Ulrike Kleeberg (allow Javascript for mail address)
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
