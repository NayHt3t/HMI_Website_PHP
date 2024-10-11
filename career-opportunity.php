<?php
$pageTitle = 'Career Opportunity';
include 'layouts/header.php'
?>
<?php include 'components/components.php' ?>

<div id="header"></div>

<!-- Banner Section Start -->
<Section class="section banner-section">

  <?php
  $bgImage = "images/banners/careerOpportunities-banner.png";
  $title = "Career Opportunities";
  echo renderBanner($bgImage, $title);
  ?>

  <?php
  $content1 = "
             According to the curriculum of the 2-Year Software Engineer Certificate Program of Host Myanmar Institute, every final year students must participate in On Job Training Program to have practical work experience at local IT industries. The objective of this training is to expose our students to the working environment
and other related experiences prior to going to the working environments.  
        ";
  $content2 = "
            The duration must be at least 480 hours (about 3 months), normally scheduled for December-February and May-July. <br>
After 3 months of On Job Training, HMI arranges for the students to have a chance to sit interviews for Software Engineer or Network Engineer jobs not only at IT companies but also at banks and Telecom industries.
        ";
  echo renderContent($content1, $content2);
  ?>

</Section>
<!-- Banner Section End -->

<div id="footer"></div>
<?php include 'layouts/footer.php' ?>