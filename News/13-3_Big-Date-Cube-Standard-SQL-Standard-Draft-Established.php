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


<h2 class="news"><b>rasdaman newsletter 11/2015</b></h2>
<a name="3"></a><h3 class="news"> Big Data Cube Standard: SQL Standard Draft Established </h3><p><b><br/><br/><br/>
2015-oct-17: With the NoSQL movement, many voices have been heard that the classical database language, SQL, does not support Big Data adequately. The latest extension of SQL with query support for massive multi-dimensional arrays demonstrates the power of declarative languages in a new realm, Big Data Cubes. Implementations like the rasdaman array analytics engine underpin this with a proof of high performance and scalability.
</b></p><p>
In practice, arrays appear in manifold ways in science and engineering, but also in social media and business analytics. Examples include satellite imagery, weather forecast data, microscopy data, cosmological simulations, connection information in social networks, and business datacubes. Frequently, such multi-dimensional arrays constitute the "Big Data" part inapplications.
</p><p>
"Due to the lack of array support in SQL, industry and data centers had to resort to self-programmed workarounds which typically lead to 'silo solutions' which are limited in functionality, hard to maintain, and not scalable", observes Peter Baumann, Professor of Computer Science at Jacobs University and inventor of Array Databases. Together with Jim Melton (Oracle) and Dimitar Misev (Jacobs University) he is editor of the SQL/MDA specification. Baumann and his team, including Misev, have implemented rasdaman ("raster data manager"), a highly flexible and scalable Array Database system which meantime is in manifold practical use.
</p><p>
While this may sound like a field for the techies among us, it effectively heralds a disruptive change in how we deal with Big Data. Due to technical limitations, data today get subdivided into "the data" and metadata, both being maintained and served using entirely different paradigms. For example, metadata may sit in queryable SQL databases while data reside infiles offered for download. "Common opinion is that metadata are small, smart, and searchable whereas data are big, clumsy, and only amenable to simple download", explains Baumann. "With SQL/MDA, this age-old subdivision can be overcome, and we can freely mix queries on data and metadata - effectively, we do not need this subdivision any longer." The resulting single, coherent information space will be instrumental for a new era of user-friendly services on large-scale, heterogeneous data assets, and ultimately for our understanding of "Big Data.
</p><p>
At its Tokyo meeting this October, the ISO SQL working group has decided to suggest the meanwhile completed specification for "CD ballot", that is: for comments by the nations participating in ISO. Final adoption as an ISO standard is expected for 2017.
</p><p>
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

