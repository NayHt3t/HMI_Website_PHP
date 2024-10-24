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
  $title = "images/bannerTitles/career-opportunities.png";
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

<!-- Job Search Section Start -->
<section class="section job-section">
  <div class="container padding-format">
    <div class="row">
      <div class="col-md-3 col-6 job-select job-field">
        <div class="form-group">
          <label for="jobField">
            Job Field
            <span class="info-icon" data-toggle="tooltip" title="Select your job field">
              <img src="images/vectorElements/questionMark.png" alt="">
            </span>
          </label>
          <select class="form-select" id="jobField">
            <option>Choose an option</option>
          </select>
        </div>
      </div>
      <div class="col-md-3 col-6 job-select job-position">
        <div class="form-group">
          <label for="jobPosition">
            Job Position
            <span class="info-icon" data-toggle="tooltip" title="Select your job field">
              <img src="images/vectorElements/questionMark.png" alt="">
            </span>
          </label>
          <select class="form-select" id="jobPosition">
            <option>Choose an option</option>
          </select>
        </div>
      </div>
    </div>
    <div class="row job-board">
      <div class="div text-center">
        <p>
          Currently there is no job postions opening. <br>
          You can check up-to-date news on <a href="#" style="text-decoration: none;">our facebook page, HMMI Tech.</a>
        </p>
      </div>
    </div>
  </div>
</section>
<!-- Job Search Section End -->

<!-- Messenger Icon -->
<?php include 'components/messenger-icon.php' ?>

<div id="footer"></div>
<?php include 'layouts/footer.php' ?>