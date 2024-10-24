<?php
$pageTitle = 'Student Life';
include 'layouts/header.php'
?>
<?php include 'components/components.php' ?>

<div id="header"></div>

<!-- Banner Section Start -->
<Section class="student-section banner-section">

    <?php
    $bgImage = "images/banners/studentLife-banner.jpg";
    $title = "images/bannerTitles/students-life.png";
    echo renderBanner($bgImage, $title);
    ?>

    <?php
    $content1 = "
            HMI students will be provided with standard education with complete facilities including smart and active learning classrooms, good environment, and institute facilities. Students can fully use the services and facilities of the institute, including sport, entertainment, dormitories, transportations, and etc.
        ";
    $content2 = "
            Placerat ridiculus massa curabitur felis malesuada egestas enim platea. Cum volutpat mattis
                    semper integer sed lorem scelerisque mauris posuere. Facilisi euismod vulputate id curabitur
                    etiam nullam nulla. Posuere lacus tempus enim mauris auctor.
        ";
    echo renderContent($content1, $content2);
    ?>

</Section>
<!-- Banner Section End -->

<!-- Practical Section Start -->
<section class="student-section practical-section bg-white">
    <div class="container py-5 padding-format">
        <div class="row first-row">
            <div class="col-md-4 first-column d-flex align-items-center" data-aos="fade-right">
                <div class="col-md-12 d-flex justify-content-center align-items-center">
                    <?php echo renderTitle("Technical Labs and Practical Days") ?>
                </div>
            </div>
            <div class="col-md-8 second-column d-flex" data-aos="fade-left">
                <div class="col-md-6 first-pic">
                    <img src="images/activities/practical-image1.png" width="100%" height="100%" alt="">
                </div>
                <div class="col-md-6 second-pic">
                    <img src="images/activities/practical-image2.png" width="100%" height="100%" alt="">
                </div>
            </div>
        </div>
        <div class="row second-row mt-3 d-flex justify-content-center" data-aos="fade-left">
            <div class="col-md-4 first-pic">
                <img src="images/activities/practical-image3.png" width="100%" height="100%" alt="">
            </div>
            <div class="col-md-4 second-pic">
                <img src="images/activities/practical-image4.png" width="100%" height="100%" alt="">
            </div>
        </div>
    </div>
</section>
<!-- Practical Section End -->

<!-- Seminar Talk Section Start -->
<section class="student-section seminar-section">
    <div class="container">
        <div class="row first-row">
            <div class="col-md-4 first-pic" data-aos="fade-right">
                <img src="images/activities/seminar-image1.png" width="100%" height="100%" alt="">
            </div>
            <div class="col-md-4 second-pic" data-aos="fade-right">
                <img src="images/activities/seminar-image2.png" width="100%" height="100%" alt="">
            </div>
        </div>
        <div class="row second-row mt-3">
            <div class="col-md-7 pic" data-aos="fade-right">
                <img src="images/activities/seminar-image3.png" width="100%" height="100%" alt="">
            </div>
            <div class="col-md-4 title d-flex justify-content-center align-items-center ms-5" data-aos="fade-left">
                <?php echo renderTitle("Seminal Talks from Industrial Experts and Researchers") ?>
            </div>
        </div>
    </div>
</section>
<!-- Seminar Talk Section End -->

<!-- Trips and Events Section Start -->
<section class="student-section trip-section bg-white">
    <div class="container padding-format py-5">
        <div class="row title-row mt-3" data-aos="fade-down">
            <div class="col-md-12 d-flex justify-content-center align-items-center">
                <?php echo renderTitle("Short Trips & Events") ?>
            </div>
        </div>
        <div class="row picture-row mt-3">
            <div class="col-md-4 first-column" data-aos="fade-down">
                <div class="first-pic">
                    <img src="images/activities/event-image1.png" width="100%" height="100%" alt="">
                </div>
                <div class="mt-3 second-pic">
                    <img src="images/activities/event-image2.png" width="100%" height="100%" alt="">
                </div>
            </div>
            <div class="col-md-4 second-column" data-aos="fade-up">
                <div class="first-pic">
                    <img src="images/activities/event-image3.png" width="100%" height="100%" alt="">
                </div>
                <div class="mt-3 second-pic">
                    <img src="images/activities/event-image4.png" width="100%" height="100%" alt="">
                </div>
            </div>
            <div class="col-md-4 third-column" data-aos="fade-down">
                <div class="first-pic">
                    <img src="images/activities/event-image5.png" width="100%" height="100%" alt="">
                </div>
                <div class="mt-3 second-pic">
                    <img src="images/activities/event-image6.png" width="100%" height="100%" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Trips and Events Section End -->

<!-- Messenger Icon -->
<?php include 'components/messenger-icon.php' ?>

<div id="footer"></div>
<?php include 'layouts/footer.php' ?>