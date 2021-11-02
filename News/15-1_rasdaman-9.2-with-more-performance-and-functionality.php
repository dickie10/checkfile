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


<h2 class="news"><b>rasdaman newsletter 03/2016</b></h2>
<h3 class="news">rasdaman 9.2 with more performance and functionality</h3>
<p><b>
We are proud to announce availability of rasdaman 9.2.1, which represents yet another important increase in performance, functionality, and OGC standards support. The team has worked hard, committing 216 patches in total since v9.1, see the full details.
</b></p>
<p>
<b>Major changes:</b>
</p>
<ul>
    <li><b>Scalability:</b>
        <li>Improved storage support, up to exascale datasets on all filesystems
        <li>Improved performance and reliability for the rasnet protocol; rasnet is now the default communication protocol.
        <li>Automated balancing of worker processes 
    <li><b>Ingestion:</b>
        <li>WCS-T import user interface improvements: WCS extract recipe, ability to resume and retry imports, improved filtering of input files, improved status messages
        <li>WCS-T import stable recipe API allowing developers to create their own custom recipes for their specific usecases
        <li>Various WCS-T enhancements
        <li>Improved transactional handling in the SQLite/Filestorage backend 
    <li><b>OGC Web Services:</b>
        <li>Embedded server for OGC Web Services platform - now it can also run as a standalone executable without the need of an external server container like Tomcat
        <li>Support for PNG as an export format in WCS 
    <li><b>User Interface:</b>
        <li>Revamped interface for the WCS Client + various enhancements 
    <li><b>Miscellaneous:</b>
        <li>runtime configuration of logging
        <li>Greatly simplified installation procedure with rasdaman installer, RPM and DEB packages
        <li>Over 200 fixes for issues reported 
</ul>
<p>
There was a lot of work on improving the installation experience of rasdaman, and v9.2.1 now offers a range of download options:
</p>
<ul>
    <li><b>From source:</b> we have a brand rasdaman installer script that greatly automates installation.
    <li><b>Packages:</b> RPM (CentOS 7) and DEB (Ubuntu Trusty) are available; more distros will be supported soon. If you are updating RPMs, note that the repository has changed; further details on the RPM installation page.
    <li><b>Virtual machines:</b> a preconfectioned virtual machine, ready for use. 
</ul>
<p>
We hope you will enjoy the improvements and new features this version brings; as always, all feedback is greatly appreciated!
</p>
<p>
your rasdaman team 
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

