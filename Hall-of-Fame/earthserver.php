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
            <a href="earthserver.php">EarthServer</a>
            </p>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content">
        <div class="row-fluid privacy">
            <h1><b>EarthServer</b></h1>
            <p><b>
                Spatio-Temporal Datacubes at Your Fingertips
            </b></p>
            <p>
<table><tr><td><img src="earthserver-logo.png" width="70" border="none"></td></tr></table>
<a href="http://www.earthserver.eu">EarthServer</a> was one of the most influential project series delivering next-generation Big Earth Data services.
It has pinted new directions for flexible, scalable EO services based on innovative NoSQL technology.
Researchers from Europe, the US, and Australia have teamed up to rigorously materialize the concept of the datacube. Such a datacube may have spatial and temporal dimensions (such as an x/y/t satellite image time series) and may unite an unlimited number of scenes. Independently from whatever efficient data structuring a server net¬work may perform internally, users will always see just a few datacubes they can slice and dice. 
            </p>
            <p>
EarthServer has established client and server technology for such spatio-temporal datacubes. The underlying scalable array engine, rasdaman, en¬ables direct interaction, including 3-D visualization, what-if scenarios, common Earth Observation data processing, and general analytics. Services exclusively rely on the open OGC "Big Geo Data" standards suite, the Web Coverage Service (WCS). Phase 1 of EarthServer has advanced scalable array database technology into 100+ TB services; in Phase 2, more than 2.5 Petabyte datacubes have been built for ad-hoc extraction, processing, and fusion. 
In addition, Jacobs University's <a href="http://planetserver.eu">PlanetServer</a> service is one of the key European portals offering datacubes on Planetary bodies like Mars, Moon, and Vesta.
            </p>
            <p>
Today, the <a href="https://earthserver.xyz">EarthServer datacube federation</a> unites a 2-digit number of large-scale Earth data providers with about 100 PB of seamlessly coupled offerings, based on the unique location-transparent federation technology of rasdaman.
            </p>
            <p>
However, EarthServer has not only used, but also shaped several Big Data standards. This includes OGC coverage data and service standards, INSPIRE WCS, and the ISO SQL/MDA (Multi-Dimensional Arrays) standard.
            </p>
            <p>
Both European Commission and reviewers observed "proven evidence" that rasdaman does "significantly transform [how to] access and use data" and "with no doubt has been shaping the Big Earth Data landscape".
            </p>
<table cellspacing="10" cellpadding="10">
    <tr>
        <td>
            <img src="earthserver-a.png" width="700">
            <br/>
            <p>Planetary-scale federation of datacubes</p>
            <br/>
        </td>
    </tr>
    <tr>
        <td> &nbsp; </td>
    </tr>
    <tr>
        <td>
            <img src="earthserver-g.png" width="700">
            <br/>
            <p>River discharge timeseries with rasdaman</p>
            <br/>
        </td>
    </tr>
    <tr>
        <td> &nbsp; </td>
    </tr>
    <tr>
        <td>
            <img src="earthserver-b.png" width="700">
            <br/>
            <p>Climate indicators with rasdaman</p>
            <br/>
        </td>
    </tr>
    <tr>
        <td> &nbsp; </td>
    </tr>
    <tr>
        <td>
            <img src="earthserver-c.png" width="700">
            <br/>
            <p>Landsat-8 satellite imagery with rasdaman</p>
            <br/>
        </td>
    </tr>
    <tr>
        <td> &nbsp; </td>
    </tr>
    <tr>
        <td>
            <img src="earthserver-d.png" width="700">
            <br/>
            <p>Glasgow subsurface modeling with rasdaman</p>
            <br/>
        </td>
    </tr>
    <tr>
        <td> &nbsp; </td>
    </tr>
    <tr>
        <td>
            <img src="earthserver-e.jpg" width="700">
            <br/>
            <p>Planetary sciene services on Mars, Moon, and Vesta with rasdaman</p>
            <br/>
        </td>
    </tr>
    <tr>
        <td>
            <img src="earthserver-e.png" width="700">
            <br/>
            <p>Demonstration of planetary-scale rasdaman federation: determining global heavy rain risk areas from ERA climate data at ECMWF/UK and Landsat8 data at NCI / Australia</p>
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
