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


<h2 class="news"><b>rasdaman newsletter 01/2019</b></h2>
<a name="25-3"></a>
<h3>Security, Advanced Clipping, Plus More: rasdaman 9.7 Released</h3>
<p><b>
January 2019 - the new version rasdaman 9.7 has been released. Once more a major step forward has been accomplished by all contributors. Most notably, raster/polygon clipping has been addressed in full. Further, multi-dimensional visualization capabilities have been improved.
</b></p>
<p>
185 individual code contributions have been submitted to rasdaman, have undergone a thorough quality check, and finally have been incorporated in the codebase. So-called curtain queries and corridor queries allow much more concise selection of data from massive spatio-temporal datacubes. This is an important use case, for example, in aviation: to extract a corridor from a weather datacube specifically along the trajectory of an airplane. This way, the airplane does not need to see a sub-cube (which would be prohibitively large), but exactly the weather information of the points it passes, and at its appropriate time, with some buffer. Of similar importance are curtain queries giving arbitrary vertical profiles.
</p>
<p>
Specifically for visualization, WMS capabilities have enhanced so as to support three and more dimensions, instead of the flat maps generated earlier.
</p>
<p>
"We are proud to serve the community with the best available combination of functional power, flexibility, scalability, and open standards", says Peter Baumann, Principal Investigator of rasdaman and continues, "and it is exciting to see the success story of datacubes following their invention by us back in 1992".
</p>
<p>
As usual, see <a href="http://ea.newscpt4.de/_la.php?&nid=3879130&sid=196282272&lid=16563955&enc=687474703a2f2f72617364616d616e2e6f7267&tg=">rasdaman.org</a>
for options to download and use rasdaman.
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

