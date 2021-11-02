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


<a name="28"></a>
<br/>
<h2 class="news"><b>rasdaman newsletter 09/2019</b></h2>
<br/>
<a name="28-1"></a>
<h3>SQL Now With Datacubes</h3>

<p><b>The most recent enhancement to the SQL query language has been published by the ISO standardization body: Multi-Dimensional Arrays (MDA). MDA allows for powerful, efficient queries on massive "datacubes" as they appear in spatio-temporal satellite image timeseries, human brain imaging, astrophysical simulations, as well as business and financial data, to name but a few. SQL/MDA is seen as a game changer in Big Data Analytics.</b>
</p>
<p>
Since decades, SQL is lingua franca for the management of large and complex data. One reason for this sustained success of SQL is the continued innovation, driven by the ISO SQL working group. "We continuously incorporate new ideas if we see that they are adding substantial value and are elaborated with sufficient rigour" explains Keith Hare, SQL working group convenor and a leading SQL expert.
</p>
<p>
When the rasdaman team approached SC32 WG3 for adding declarative array support in 2014, WG3 members recognized the value proposition. "Array support closes a gap in large-scale data services; it is a groundbreaking enhancement to the SQL database language", underlines Hare. After own investigation ISO chose the rasdaman query language due to its substantial advantages, such as formal semantics, powerful and practice proven, and fitting seamlessly into the relational model. Over several years SQL/MDA developed in a tight collaboration of rasdaman and the SQL team. Released in summer 2019, it allows for powerful, efficient queries on massive "datacubes" as they appear in science, engineering, business, and other fields. The full designation for this part of SQL is: <a href="https://www.iso.org/standard/67382.html">ISO/IEC 9075-15:2019 Information technology database languages -- SQL -- Part 15: Multi-dimensional arrays (SQL/MDA)</a>.
</p>
<p>
Historically, accessing image metadata is fast and relationally 
queryable whereas accessing data (such as image pixels) is slow, not queryable, and can only be downloaded as format-encoded files. With SQL/MDA, queries can address both data and metadata simultaneously. "This integration overcomes the age-old distinction between data and metadata, leading to a new quality of data services. This is an exciting perspective," explains Baumann who adds "not least, providing analysis-ready data boosts Machine Learning to new scalability."

<p>
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

