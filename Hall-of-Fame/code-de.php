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
            <a href="code-de.php">CODE-DE</a>
            </p>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content">
        <div class="row-fluid privacy">
            <h1><b>CODE-DE - the German Sentinel Hub</b></h1>
            <p><b>
                Sentinel satellite datacubes
            </b></p>
            <p>
The <a href="http://code-de.bigdatacube.org/">Datacube Service</a> of the <a href="https://code-de.org/">Copernicus Data and Exploitation Platform – Deutschland</a> (CODE-DE) is complementing the batch-oriented service interface of CODE-DE with interactive spatio-temporal viewing, fusion, and analytics services on Sentinel satellite imagery. This portal is the CODE-DE Datacube Service precursor service provided while CODE-DE is being instrumented with the datacube technology used, the European Datacube engine, rasdaman.
            </p>
<table cellspacing="10" cellpadding="10">
    <tr>
        <td>
            <img src="code-de-a.png" width="700">
            <br/>
            <p>Sentinel S2 atmospheric penetration</p>
        </td>
    </tr>
    <tr>
        <td> &nbsp; </td>
    </tr>
    <tr>
        <td>
            <img src="code-de-b.png" width="700">
            <br/>
            <p>Sentinel S1 (radar) time-averaged area (12 months)</p>
        </td>
    </tr>
    <tr>
        <td> &nbsp; </td>
    </tr>
    <tr>
        <td>
            <img src="code-de-c.png" width="700">
            <br/>
            <p>Sentinel S1 (radar) ship detection</p>
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
