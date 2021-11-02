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


<a name="24-4"></a>
<h3>SQL Datacube Standard Adopted</h3>
<p><b>
 November 2018. SQL remains the universal database language, satisfying billions of searches daily - although mostly for business data, bypassing the larger part of Big Data in science and engineering. Now the SQL array ("datacube") extension, MDA (Multi-Dimensional Arrays), has been adopted as International Standard. In future, such multi-dimensional data can be queried just like tables, unleashing a large part of this planet's Big Data to analytics and decision making. Plus, there is an additional, maybe unexpected, benefit.
</b>
</p><p>
The SQL database language has a long tradition. With its groundbreaking concept of high-level querying, without the need for programming or a need to know the actual storage details, it has revolutionized data management in the seventies. Although challenged by the !NoSQL movement a few years back SQL remains the primary data access language worldwide. This ongoing success is due to the ISO team managing the SQL standard - it embraces novel requirements and keeps enhancing SQL over time. Of course, with all due diligence and not without deep scrutiny on benefits and quality of proposals.
</p><p>
One such enhancement was proposed by the rasdaman team pointing out that a large part of data served worldwide - namely, multi-dimensional arrays, also known as raster data or gridded data or datacubes - remains outside SQL just because SQL is not capable of addressing them. Such data appear all over the place, like satellite and weather data in Earth science, medical imagery in Life Science, stock ticker timeseries in finances, etc. They all typically represent Big Data, and they all sit in bespoke silo systems without flexible access and analytics capabilities.
</p><p>
The array language proposed was rasql, the one of rasdaman which the team had designed over many years, underpinned by the highly scalable architectures of the rasdaman engine. Following its own, independent research ISO concluded that the rasdaman language indeed was the only suitable for merging into SQL. Hence, rasql became the language of choice. In the time following, Dimitar Misev wrote his PhD thesis under the supervision of Peter Baumann, Professor at Jacobs University, on this topic. His complete opus, consisting of the complete description including its mathematical semantics embedded in SQL, represents impressive 185 pages. The leading SQL experts worldwide scrutinized every detail before it finally got adopted as International Standard in Fall 2018.
</p><p>
"Our team is extremely happy about this success, which is heralding a new era of flexible, scalable Big Data handling" says Peter Baumann, the inventor of datacubes as documented since 1992 by publications and international patents.
</p><p>
But aside from making datacubes queryable there is yet another remarkable advantage MDA brings: information integration. Up to now, relational systems (as well as XML and NoSQL databases, by the way) had a say only on metadata. Traditionally, metadata are seen as small and smart ad queryable whereas "the data" are big, dumb, and not amenable to high-level selection and processing. Consequently, data and metadata have been coexisting in separate silos, with all known consistency issues, maintenance costs, and user unfriendliness. This has changed now: in one and the same SQL query both data and metadata can be queried. From now on, users can be provided with a uniform, integrated information space for all types of business, financial, healthcare, geo, and other data.
</p><p>
"Major players in the database market are very attentive, and I expect SQL/MDA to find its way into the worldwide market quickly. With our scalable rasdaman datacube engine, the first MDA implementation, we already perceive a massive growth in inquiries", explains Baumann who is also shaping datacube standards in the field of geo data, such as satellite imagery and weather forecasts.
</p><p>
Standard reference: ISO IS SQL 9075-15: MDA (Multi-Dimensional Arrays)
</p><p>
Contact: Dr. Peter Baumann, baumann@rasdaman.com
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

