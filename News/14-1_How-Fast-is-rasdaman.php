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


<h2 class="news"><b>rasdaman newsletter 01/2016</b></h2>
<h3 class="news">How Fast is rasdaman?</h3>
<p><b>
January 2016. As the rasdaman array engine is <a href="http://ea.newscpt3.de/_la.php?&nid=2549439&sid=196282272&lid=10412639&enc=687474703a2f2f7777772e7265766f6c7665726d6170732e636f6d&tg=?target=enlarge&i=a1850emr3y9&dm=2">known worldwide</a>, more and more people ask about a comparison with related technology. Now scientific tests have proven: rasdaman is the fastest Big Array Data technology by far.
</b></p>
<p>
The setup was immense: at the 2015 Annual Conference of the American Geosciences Union, more than 20,000 visitors were present. Researchers from George Mason University and University of Wisconsin / Madison presented a performance comparison of rasdaman with Apache Hive and Apache Spark, to renowned Big Data technologies. Test case was evaluation of MODIS satellite imagery. The outcome reported showed that rasdaman outperforms both competitors by far.
</p>
<p>
"Our team is very happy about these findings" says rasdaman Principal Architect, Peter Baumann. "We still have many ideas for speeding up rasdaman even further, in particular on massive datacubes, so we are excited to excite again in future".
</p>
<p>
Simultaneously, a general Array Database benchmark was presented at an expert workshop on database benchmarking held in India this December. Here rasdaman was compared against SciDB and SciQL, to other Array Databases. The various tests, which are available as open source code on github for reproduction by the community, revealed that rasdaman often is faster by several order of magnitudes. However, some of the tests could not be scaled to the intended "Big Data" situations as SciQL and SciDB could not ingest large datacubes. Notably, known rasdaman databases exceed 130 TB.
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

