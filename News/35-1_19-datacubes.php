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


<a name="33-3"></a>
<br/>
<h2 class="news"><b>rasdaman newsletter 05/2021</b></h2>
<br/>
<h3> Paper Comparing 19 Datacubes </h3>
<p><b>
A comprehensive, systematic overview on datacube technologies and functionalities has published recently in the Springer Open Journal of Big Data. An unprecedented line-up of 19 different tools is scrutinized against 30+ criteria. Performance figures have been obtained in a systematic, github-published benchmark comparing rasdaman, Open Data Cube, SciDB and PostGIS Raster. The result shows rasdaman can be 304x faster than other tools. This has been confirmed independently by Eurac Research with an average speedup of even 400x of rasdaman over Open Data Cube.
</b></p>
<p>
Past papers have already compared datacube models and formalisms, and benchmarks have been undertaken as well. Typically, however, they were rather constrained – only two systems are compared, and testing is mostly driven by cherry-picked examples rather than a systematic, justifiable methodology. Each of these represent valuable research; however, to the best of our knowledge there is no comprehensive survey combining model, access interfaces, architecture, practical usability, and performance evaluation. The size of this comparison differentiates the study as well with 19 systems compared, four benchmarked to an extent and depth clearly exceeding previous papers in the field; for example, subsetting tests were designed in a way that systems cannot be tuned to specifically these queries.
</p>
<p>
It is hoped that this gives a representative overview to all who want to immerse into the field as well as a clear guidance to those who need to choose the best suited datacube tool for their application. The article presents results of the Research Data Alliance (RDA) Array Database Assessment Working Group (ADA:WG), a subgroup of the RDA Big Data Interest Group. It has elicited the state of the art in Array Databases and related technology, technically supported by IEEE GRSS and CODATA Germany, to answer the question: how can data scientists and engineers benefit from Array Database technology, commonly called “datacube” engines?
</p>
<p>
Read more:
</p>
<ul>
  <li>https://journalofbigdata.springeropen.com/articles/10.1186/s40537-020-00399-2
  <li>https://gitlab.inf.unibz.it/SInCohMap/datacubes/-/blob/master/datacube_comparison/datacube_comparison.md 
</ul>

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

