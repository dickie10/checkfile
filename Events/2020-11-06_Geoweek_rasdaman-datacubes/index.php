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

    <!--=== Content Part ===-->
    <div class="container content">
        <div class="row-fluid privacy">
            <a href="https://www.earthobservations.org/geoweek2020.php"><img src="geoweek2020_banner.jpg" width="100%"></a>
            <br/>
            <br/>
            <h1><b> rasdaman @ GEO Week 2020 </b></h1>
            <table width="100%">
              <tr>
                <td style="padding-right:30px">
                  <table align="left" style="margin-right:20px"><tr><td>
                    <a href="https://www.earthobservations.org/geoweek2020.php"><img src="geoweek2020_industry-track_banner.jpg" width="200"></a>
                  </td></tr></table>
                  <p>
                  The <a href="https://rasdaman.com">rasdaman</a> team is proud to be contributing to <a href="https://www.earthobservations.org/geoweek2020.php">GEO Week 2020</a>
                  being part of its symposium series of <a href="https://www.earthobservations.org">Group on Earth Observations</a> (GEO), an intergovernmental partnership that improves the availability, access and use of Earth observations for a sustainable planet.
                  </p>
                  <p>
                  We demonstrate how <a href="https://rasdaman.com">rasdaman</a> supports of the GEO mission of 
                  promoting open, coordinated and sustained data sharing and infrastructure for better research, policy making, decisions and action across many disciplines.
                  The GEO community focuses on three global priority engagement areas:
                  the United Nations 2030 Agenda for Sustainable Development, the Paris Agreement, and the Sendai Framework for Disaster Risk Reduction.
                  </p>
                  <p>
                  See the <b>world-leading datacube technology</b> <a href="https://standards.rasdaman.com">in action</a>:
                  </p>
                  <ul>
                    <li><b>Performance</b>: realtime access, analytics, and fusion on datacubes - <a href="https://rasdaman.com">rasdaman</a> is the fastest datacube engine available, thanks to its full-stack implementation and highly effective optimizations.  </li>
                    <li><b>Scalability</b>: Horizontal and vertical scalability is in the DNA of <a href="https://rasdaman.com">rasdaman</a>, thanks to multi-core parallelization, distributed processing, space/time aware caching, and many more.</li>
                    <li><b>Federation</b>: Fully location-transparent federations link data centers into a single virtual information space, with distributed data fusion on the fly.  </li>
                    <li><b>Polygon clipping</b>: Clipping and analytics on polygon regions, additionally support for corridor and curtain queries as introduced in the WCS-MetOcean standard.  </li>
                    <li><b>Clients, clients, clients</b>: Map navigation with Leaflet, virtual globes with NASA WorldWind, Web GIS with QGIS, analytics with python and R...this is just a selection of clients which can be used simultaneously on any data set. This way, users remain in the comfort zone of their well-known cliengts while tapping into Petabytes.  </li>
                    <li><b>Security</b>: Role-based access control, fully in the hands of the administrator, down ot the level of single pixels.  </li>
                    <li><b>Open Standards</b>: <a href="https://rasdaman.com">rasdaman</a> is the reference implementation and most comprehensive implementation of the OGC/ISO/INSPIRE coverage standards.  </li>
                  </ul>
                </td>
                <td style="text-align:center;vertical-align:top">
                  <img src="geoweek2020_atmo.png" width="300">
                  <br/>
                  <br/>
                  <img src="geoweek2020_polygon.png" width="200">
                  <br/>
                  <br/>
                  <img src="geoweek2020_jupyter.png" width="200">
                </td>
              </tr>
              <tr>
                <td colspan="2" style="text-align:center">
                  <h2>Big Earth Data Heavy-Liftung</h2>
                  <table align="center">
                    <tr>
                      <td align="right" style="padding:20px">
                        <a href="https://earthserver.xyz"><img src="<?php echo $RASROOT . '/assets/img/logo-earthserver-member_BLACK.png'; ?>" width="200"></a>
                      </td>
                      <td align="right" style="padding:20px">
                        <a href="https://creodias.rasdaman.com"><img src="<?php echo $RASROOT . '/assets/img/projects/logo-creodias-datacubes.png'; ?>" width="200"></a>
                      </td>
                      <td align="right" style="padding:20px">
                        <a href="https://parsec.rasdaman.com"><img src="<?php echo $RASROOT . '/assets/img/projects/logo-mundi-datacubes.png'; ?>" width="200"></a>
                      </td>
                      <td align="right" style="padding:20px">
                        <a href="https://app.landsupport.eu/"><img src="<?php echo $RASROOT . '/assets/img/projects/logo-landsupport.png'; ?>" width="200"></a>
                    </tr>
                  </table>
                  <h2>Datacubes. From their <a href="https://www.faculty.jacobs-university.de/pbaumann/iu-bremen.de_pbaumann/pubs.php">Inventors</a>.</h2>
                  <b>Contact us for a chat:</b>
                  <script language="javascript">
                    function compose(t1,t2,t3,t4)
                    {
                        document.write( "<a href=\"mailto:" + t1 + "@" + t2 + "." + t3 + "\">" );
                        document.write( t4 );
                        document.write( "</a>" );
                    }
                    compose( "baumann", "rasdaman", "com", "Peter Baumann" );
                  </script>
                  <noscript>
                    Peter Baumann (allow Javascript for mail address)
                  </noscript>
                </td>
              </tr>
            </table>

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
