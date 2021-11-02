<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"> <!--<![endif]-->
<head>
    <title>rasdaman, the Big Data Analytics Server</title>
    <?php require_once($_SERVER['DOCUMENT_ROOT'] . "/assets/html/secondary/head.php") ?>
    <style type="text/css">
.news h1 {
    font-weight:bolder;
    line-height:20px;
}

.news h2 {
    font-weight:bold;
    font-size:smaller;
}
    </style>
</head>

<!--
The #page-top ID is part of the scrolling feature.
The data-spy and data-target are part of the built-in Bootstrap scrollspy function.
-->
<body id="body" data-spy="scroll" data-target=".one-page-header" class="demo-lightbox-gallery dark">
<!--=== Header ===-->
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/assets/html/secondary/header.php") ?>
<!--=== End Header ===-->


<!--  Content Section -->
<section id="content" class="secondary-content-section section-first">

    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">rasdaman News Archive</h1>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content">
        <div class="row-fluid privacy">


<h2 class="news"><b>rasdaman newsletter 06/2014</b></h2>
<h3 class="news">Big Science Data Coming to SQL Databases </h3><p><b>
Bremen, June 17 - Multi-dimensional sensor, image, simulation output, and statistics data make up for most of the "Big Data" in science and engineering. Last week, it has been decided to extend the SQL database language with massive multi-dimensional arrays. Initiated by Prof. Peter Baumann from Jacobs University, work has commenced on the forthcoming standard named SQL/MDA.

</b></p><p>
SQL has been tremendously successful in running any-size databases in business and administration. However, the "Big Data" in science are structured differently. Instead of simple tables, they often consist of multi-dimensional "data cubes". In Geo sciences, for example, this encompasses 1-dimensional sensor data, 2-D satellite imagery, 3-D x/y/t image timeseries as well as x/y/z geophysical voxel data, and 4-D x/y/z/t weather data. In Life sciences, there is laserscan microscopy and brain scans. And it can grow as large as simulations of the whole universe when it comes to astrophysics.

</p><p>
But SQL is not able to find, filter, and process such arrays, and consequently today arrays largely are maintained outside databases. Recognizing this shortcoming, Peter Baumann, Professor of Computer Science at Jacobs University Bremen, and his group have long been researching on ways to extend SQL appropriately. The rasdaman system which the group has established effectively has coined a new technology, Array Databases. In a recent technology demonstration, more than 1,000 computers have collaborated in a cloud to jointly compute the result of one single database query. This "distributed query processing" means a massive speedup, and research challenges on multi-Petabyte data cubes can be answered that hitherto were unsolvable.

</p><p>
Meantime, international data centers use this tool to allow scientists gain unanticipated insights into their spatio-temporal data cubes, and rasdaman installations can be found at NASA, ESA, British Geological Survey, Plymouth Marine Laboratory, Deutscher Wetterdienst, and many more.

</p><p>
At last week’s meeting in Beijing all national bodies participating in the SQL working group of ISO unanimously have agreed on the importance of arrays in SQL. Following thorough assessment of all options available, the group has accepted the proposal of Baumann for further elaboration. The new standard will be named ISO 9075 SQL/MDA, for "Multi-Dimensional Array"”.

</p>
        </div><!--/row-fluid-->
    </div><!--/container-->
    <!--=== End Content Part ===-->

</section>
<!--  Content Section -->

<!-- Imprint Section -->
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/assets/html/secondary/imprint.php") ?>
<!-- End Imprint Section -->

<!-- Javascript include -->
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/assets/html/secondary/js-footer.php") ?>
<!-- End Javascript include -->
</body>
</html>

