<!--
LandSupport
Parsec
EOSC-hub / DIAS
BigPicture
evo-odas
publica-mundi
-->

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

    <style type="text/css">
table, th, td {
  table-layout:fixed;
  border-collapse:separate;
  border-spacing:20pt;
}
td {
  padding:10pt;
  width:250pt;
  background-color:#303030;
  text-align:center;
  vertical-align:top;
}
    </style>
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
            <br/>
            <br/>
            <h1 class="pull-left"><b>rasdaman Hall of Fame</h1>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content">
        <div class="row-fluid privacy">
            <p>
                <b>Manifold next-generation services run rasdaman - see here some the great work being done! Recently we have started documenting all the gems available.</b> <br/>
                <em>Do you want to collaborate or partner with the rasdaman team?
Contact
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
  </noscript>, rasdaman Principal Architect. </em>
            </p>
            <table>
                <tr>
                    <td width="30%">
                        <a href="planetserver.php"><img src="planetserver-d.jpg" width="230"></a>
                        <br/>
                        <p class="lead"><a href="planetserver.php">PlanetServer</a></p>
                        <p>
                            Calibrated hyper- and multispectral topographic data on Solar System bodies.
                        </p>
                    </td>
                    <td width="30%">
                        <a href="code-de.php"><img src="code-de-0.png" height="120"></a>
                        <br/>
                        <p class="lead"><a href="code-de.php">CODE-DE - the German Sentinel Hub</a></p>
                        <p>
                            Sentinel optical &amp; radar satellite datacubes
                        </p>
                    </td>
                    <td  width="30%">
                        <a href="plotly.php"><img src="plotly-a.png" height="120"></a>
                        <br/>
                        <p class="lead"><a href="plotly.php">Plotly Dashboard</a></p>
                        <p>
                            Dashboard using python/dash/plotly for rasdaman databases
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="cropmap.php"><img src="cropmap.png" height="120"></a>
                        <br/>
                        <p class="lead"><a href="cropmap.php">CORAmaps</a></p>
                        <p>
                          SAR for crop mapping
                        </p>
                    </td>
                    <td>
                        <a href="deeprain.php"><img src="deeprain-a.png" height="120"></a>
                        <br/>
                        <p class="lead"><a href="deeprain.php">DeepRain</a></p>
                        <p>
                            Local Precipitation Prediction through Machine Learning
                        </p>
                    </td>
                    <td>
                        <a href="earthserver.php"><img src="earthserver-a.png" height="120"></a>
                        <br/>
                        <p class="lead"><a href="earthserver.php">EarthServer</a></p>
                        <p>
                            Big Earth Data at Your Fingertips
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="orbidanse.php"><img src="orbidanse-a.png" height="120"></a>
                        <br/>
                        <p class="lead"><a href="orbidanse.php">ORBiDANSe</a></p>
                        <p>
                            Datacubes on a Satellite
                        </p>
                    </td>
                    <td>
                        <a href="bigpicture.php"><img src="bigpicture-a.png" height="120"></a>
                        <br/>
                        <p class="lead"><a href="bigpicture.php">BigPicture</a></p>
                        <p>
                            In-field crop drought and frost for Germany
                        </p>
                    </td>
                    <td>
                        <a href="coastmap.php"><img src="coastmap-a.png" height="120"></a>
                        <br/>
                        <p class="lead"><a href="coastmap.php">coastMap</a></p>
                        <p>
                            Helmholtz Centre Geesthacht<br/>
                            Marine Model Analysis
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="urban-geo-big-data.php"><img src="urban-geo-big-data-a.png" height="120"></a>
                        <br/>
                        <p class="lead"><a href="urban-geo-big-data.php">Urban Geo Big Data</a></p>
                        <p>
                            Politecnico di Milano 
                        </p>
                    </td>
                    <td>
                        <a href="bigdatacube.php"><img src="bigdatacube-b.png" height="120"></a>
                        <br/>
                        <p class="lead"><a href="bigdatacube.php">BigDataCube</a></p>
                        <p>
                            Public-Private EO Datacube Partnership
                        </p>
                    </td>
                    <td>
                        <a href="eurac.php"><img src="eurac-hero.png" height="120"></a>
                        <br/>
                        <p class="lead"><a href="eurac.php">EURAC</a></p>
                        <p>
                            Frozen Datacubes: Snow &amp; Ice Analytics
                        </p>
                    </td>
                </tr>
                <tr>
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

