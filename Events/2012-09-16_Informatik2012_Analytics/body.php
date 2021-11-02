<?php include_once( '../../globals.inc' ); ?>

<table class="boxhead" width="100%" cellpadding=0 cellspacing=0 border=0>
<tr>
  <td>
    <h1>Scalable Scientific Data Analytics</h1>
    <p>
    Peter Baumann
    <br>
    <a href="http://www.jacobs-university.de/case" target="jub">Center for Advanced Systems Engineering</a> (CASE), <a href="http://www.jacobs-university.de" target="jub">Jacobs University</a> | <a href="http://www.rasdaman.com">rasdaman GmbH</a>
    </p>
    <p>
    </p>
  </td>
  <td align="right">
    <!-- img src="../Images/logo-rasdaman.png" height="80" border="none" -->&nbsp;&nbsp;&nbsp;
  </td>
</tr>
<tr>
  <td class="box" colspan="2">
  <br>
  <p>
<b>Contents:</b>
[ <a href="#abstract">Abstract</a>
| <a href="#aims">Aims/Learning objectives</a>
| <a href="#tut">Tutorial description</a>
| <a href="target">Target audience </a>
| <a href="#cv">Instructor CV</a>
]
<br>
<br>
<table align="right" width="300"><tr><td>
  <fieldset>
    <legend> Figure 1 </legend>
    <p align="center">
    <img src="tableau-apps.png" border="none" width="350">
    <br>
    Collage of earth / life / space science applications 
    (source: all but human brain image screenshots from rasdaman projects)
  </fieldset>
</td></tr></table>

<a name="abstract"></a><h2>Abstract</h2>
<p>
Never before in history mankind has collected data at the rates we face today. Alone in 2002, an estimated 403 Petabyte of data has been acquired, equivalent to all printed information ever created before. Earth orbiting satellites, as well as ground, airborne, and underwater sensors scan their environment at unprecedented resolutions. The same holds for the life sciences where genomic data, high-res­ol­ut­ion scans, and other modalities are collected in steadily in­creas­ing streams. Social network analysis, OLAP, and stock ex­change trading represent further examples, the latter in­volving real-time correlation of thousands of ticker time series resulting in Terabytes of data to be analysed per single run. Often summarized under Big Data Analytics we are wit­ness­ing an exploding demand for flexible access to massive vol­um­es of scientific and business data sets.
</p>
<p>
Arguably a large class of these massive data is represented by multi-dimensional arrays or generalizations thereof. Con­sequ­ent­ly, large Arrays pose new challenges to data modelling, querying, optimization, and maintenance – in short: we need a discipline of Large-Scale Array Analytics.
</p>
<p>
This tutorial presents the current state in large-scale, nD array analytics. All as­pects are addressed, such as modelling, query languages, query optimization and parall­el­iz­ation, and stor­age man­agement. High emphasis will be devoted to app­lic­ations in geo, space, and life sciences; real-life use cases will be presented and discussed which stem from our 15 years of experience with the open-source rasdaman array DBMS, geo raster service standardization, and the <a href="http://www.earthserver.eu" target="earhtserver">EarthServer</a> initiative launched this fall which is establishing six oper­at­ion­al 100+ TB Earth sci­ence data­bases accessible through distributed array query pro­cess­ing.
</p>
<p>
We will highlight achievements, commonalities and differences of approaches, open re­search issues, and avenues for future research. Discussion will make use of real-life Earth Science services running <a href="http://www.rasdaman.org" target="rasdaman">rasdaman</a> which Internet connected participants can replay hands-on.
</p>

<a name="aims"></a><h2>Aims / Learning Objectives</h2>
<p>
Participants will learn, based on ample application scenarios, why array databases represent an important trend in scientific databases, and will understand their connection with statistical / OLAP databases. They will know the core con­cepts wrt. modeling, query languages, arch­itect­ur­es, and opt­im­­ization. They will have an overview on approaches and different specific implem­ent­ation and optimization techniques which have been applied or studied. Further, participants will know how array databases contribute to geo and life sciences, which will allow them to trans­pose technology to further domains. Scientists and students will learn about the current fore­front of research, research directions, and open issues.
</p>

<a name="tut"></a><h2>Tutorial Description</h2>
<p>
Each section encompasses a survey of the state of the art (relating, for example, the SciDB initiative), presentation of own work in theory and practice, and practically motivated examples which participants with Internet-connected laptops can replay and modify where adequate. Emphasis is put on characterizing approaches, open issues and research avenues.
</p>
<ul>
  <li><b>Introduction</b>
  <p>The scenario is set: a significant extent of scientific data is n-D array (“raster”) data. We characterize earth, space, and life science do­mains and motivate the challenges arising. We explain service characteristics needed and that they also relate to performance. Array databases are positioned against multimedia databases, image processing systems, and OLAP showing their commonalities and differences. A Web-based life demo of the rasdaman system illustrates this. Particip­ants with a networked lap­top can experiment with an inter­active query interface them­selves; see EarthLook for a showcase.
  </p>
  <li><b>Anatomy of array services</b>
  <p>
This section starts with an introduction to array data models and to query languages like rasql, SciQL, and SciDB. We then exemplify and discuss algebraic model­ing of array queries.  Finally, we present the ISO/OGC concept of “coverages” as a generalization of scientific arrays. All presentation is based on real-life examples to motivate use­fulness.
  </p>
  <li><b>Array storage</b>
  <p>
First, a survey of storage variants is conducted, including BLOBs, chunking, tiling, and tuple-based storage. Then, tiling being the most general array strategy is detailed. Workload based tiling and other strategies are discussed and compared. Indexing and compression are address­ed. Tertiary storage management (tape silos) com­prises a further topic. The concept of in-situ databases is introduced. Presentation is underpinned by per­form­ance evaluation results.
  </p>
  <li><b>Array query evaluation</b>
  <p>
Based on the storage structures introduced, a query eval­uation model can be established which lends itself to tradit­ional query processing steps, but with adapted compon­ents. A main theme is query optimization: heuristic rewriting, pre-aggregation, just-in-time compilation, GPU support. Further, query parallelization and cloud support will be addressed.
This is also the place to discuss existing system im­ple­mentations, such as rasdaman, MonetDB, and SciDB. This will be contrasted with commercial imple­ment­ations, such as Oracle GeoRaster.
  </p>
  <li><b>Application use cases</b>
  <p>
In this part, application use cases from earth, space, and life sciences are presented, based on own project experience where such services have been established, but also on other group’s results. One important aspect is the design of user-friendly array query front-ends.
In the earth sciences part, 1D to 5D use cases are presented based on the <a href="http://www.earthserver.eu" target="earthserver">EarthServer</a> Lighthouse Applications (<a href="#fig2">Figure 2</a>) and the presenter’s work in geo raster service and ISO Array SQL standardization.
The space science use case addresses 3D to 5D optical and radio astronomy. 
In the life sciences part, 3D - 4D data from genomic data Analysis and human brain imaging are chosen.
  </p>
  <li><b>Wrap-up</b>
  <p>
In the final section, the “big picture” will be discussed. This includes array query integration with SQL, coupling of imaging and array database systems, but also extension of arrays to general meshes which often are required in eScience. Extra time is devoted to discussion with participants.
  </p>
</ul>

<table align="right"><tr><td>
  <fieldset>
    <legend> <a name="fig2"></a> Figure 2 </legend>
    <p align="center">
    <img src="earthserver-apps.png" border="none" width="900">
    <br>
    Characterization of the six <a href="http://www.earthserver.eu" target="earthserver">EarthServer</a> "Lighthouse Applications", each one being filled to 100+ TB of data addressing all Earth Science disciplines plus Planetary Sciences. At the bottom of each tableau the respective service operator is listed
    </p>
  </fieldset>
</td></tr></table>

<a name="target"></a><h2>Target Audience </h2>
<p>
The tutorial is suitable for a broad audience, including: 
</p>
<ul>
  <li>researchers: what methods and issues exist in the field?
  <li>advanced users: how can recent database technology support my domain needs?
  <li>beginning programmers: what is the style to work with array database QLs and APIs?
  <li>system architects: what factors determine per­form­ance and service quality? How to set up high-per­form­ance raster services using cheap off-the-shelf hardware? 
</ul>
<p>
Audience prerequisites: General background in databases and Web services. Initial fam­il­iar­ity with database architecture concepts like indexing and optimization. While the overall presentation does not require deep pre-existing knowledge, at some points selected advanced issues will be discussed. Earth &amp; life science background is not required.
</p>

<a name="cv"></a><h2>Instructor CV</h2>
<p>
Peter Baumann's core research interest is large-scale multi­dimensional array (“raster”) analytics and its applic­ation to earth, space, life data and beyond. Back in 1993 he has coined the research area of array databases by describing challenges and providing algebra, query language, and architecture proposals, and meantime has publish­ed 100+ book chapters and journal/conference articles. He is active in standardization of array services in OGC and ISO, being editor of a series of adopted international standards. In March 2011, he has organized – together with Bill Howe / University of Washington, SciDB advisory board member – the first work­shop on Array Databases.
</p>
<p>
He is principal architect of the ras­da­man array DBMS, the “most compre­hens­ive” imple­mentation of such a system (Rona Machlin, ACM SIGMOD), holds inter­nat­ional patents on raster database technology and has received numerous national and international innovation awards for his work.
See <a href="http://www.faculty.jacobs-university.de/pbaumann">www.faculty.jacobs-university.de/pbaumann</a> for more infor­mat­ion.
</p>

  </td>
</tr>
</table>

<?php mkFooter(); ?>
