<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"> <!--<![endif]-->
<head>
    <title>rasdaman, the Big Data Analytics Server</title>
    <?php require_once("assets/html/secondary/head.php") ?>
</head>

<!--
The #page-top ID is part of the scrolling feature.
The data-spy and data-target are part of the built-in Bootstrap scrollspy function.
-->
<body id="body" data-spy="scroll" data-target=".one-page-header" class="demo-lightbox-gallery dark">
<!--=== Header ===-->
<?php require_once("assets/html/secondary/header.php") ?>
<!--=== End Header ===-->


<!--  About Section -->
<section id="content" class="secondary-content-section section-first">
    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">Free and Commercially Supported</h1>
        </div>
    </div>
    <!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content">
        <div class="row-fluid privacy">
            <p>
            The <em>rasdaman</em> technology is available in two variants, as free
            <a href="http://www.rasdaman.org" target="rasdaman.org">rasdaman community</a> software and
            commercially supported <em>rasdaman enterprise</em>.
            As a decision aid the <a href="http://www.rasdaman.org/wiki/Features"
                                     target="rasdaman.org">Feature-Matrix</a> as well as the following criteria may
            serve:
            </p>
            <ul>
                <li>You want to use free-of-cost software, and you are willing to provide your changes and additions
                    back to the community in a "give and take" manner? Community support is just fine for you?
                    Then maybe the <em><a href="http://www.rasdaman.org" target="rasdaman.org">rasdaman community</a></em> version is what you are looking for.</li>
                <li>One of the following applies to your needs?
                    <ul>
                        <li>You want to benefit from further features, such as
                            <a href="#dbms">more database system connectors</a>,
                            the geo server suite <a href="#rasgeo">rasgeo</a>,
                            and the highly effective <a href="#opt">optimizations</a> enabling <a href="#scal">unlimited scalability</a>?</li>
                        <li>You do care about <a href="#maint">maintenance</a> and <a href="#support">support</a>?</li>
                        <li>Your project doesn't allow you to disclose the source code of your changes and additions?</li>
                        <li>Security and detailed access control are a must? </li>
                    </ul>
                    If just one of these apply, then we recommend the <a href="#enterprise">rasdaman enterprise</a> version.</li>
            </ul>

            <a name="enterprise"></a>

            <h2>rasdaman enterprise</h2>

            <p>
                This version incorporates and extends <em><a href="http://www.rasdaman.org" target="rasdaman.org">rasdaman
                community</a></em>, offering decisive advantages with respect to features, performance, and
                maintenance/support:
            </p>

            <a name="opt"></a>
            <h4>Highly effective performance optimization</h4>
            <ul>
                <li>Automatic query reformulation - finds the fastest variant of the query submitted</li>
                <li>Just-in-time compilation of query fragments - achieves practically the speed of a hand-coded
                    server</li>
                <li>Just-in-time compilation of queries directly into machine code</li>
                <li><i>Tile caching</i> for ultra-fast access to frequently requested data</li>
                <li>Realtime data compression for minimizing storage space and network transfer times</li>
            </ul>
            <p>
                Both simple and complex queries are boosted significantly, often by several orders of magnitude,
                as has been proven in scientific performance evaluations.
            </p>

            <a name="scal"></a>
            <h4>Unlimited scalability</h4>
            <ul>
                <li>Parallel server cluster with automatic query distribution</li>
                <li>Unlimited data volumes through transparent nearline tape archive integration</li>
            </ul>

            <a name="dbms"></a>
            <h4>Connectors for further database systems and file-based storage option</h4>

            <h4>Web-based server administration</h4>

            <a name="maint"></a>
            <h4>Maintenance</h4>
            <p>
                For operational services maintenance is a must.
                The <span class="rasdaman">rasdaman enterprise</span> maintenance package encompasses timely
                patches, updates, upgrades, and the support described be
                low.
            </p>

            <a name="support"></a>
            <h4>Support</h4>
            <p>
                Our competent support team is recruited from the <span class="rasdaman">rasdaman</span>
                developers.
                This ensures you the best possible expertise.
            </p>

            <h4>Bottom Line...</h4>
            <p>
                All in all, <span class="rasdaman">rasdaman enterprise</span> comprises
                the most comprehensive datacube / raster server available in the market,
                with highest flexibility, performance and scalability, clients, and standards support.
            </p>
        </div>
        <!--/row-fluid-->
    </div>
    <!--/container-->
    <!--=== End Content Part ===-->

</section>
<!--  Content Section -->

<!-- Imprint Section -->
<?php require_once("assets/html/secondary/imprint.php") ?>
<!-- End Imprint Section -->

<!-- Javascript include -->
<?php require_once("assets/html/secondary/js-footer.php") ?>
<!-- End Javascript include -->
</body>
</html>
