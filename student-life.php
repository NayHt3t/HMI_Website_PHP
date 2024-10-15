<?php
$pageTitle = 'Student Life';
include 'layouts/header.php'
?>
<?php include 'components/components.php' ?>

<div id="header"></div>

<!-- Banner Section Start -->
<Section class="section banner-section">

    <?php
    $bgImage = "images/banners/studentLife-banner.jpg";
    $title = "Student Life";
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
<section class="section practical-seciton bg-white">
    <div class="container py-5 padding-format">
        <div class="row first-row">
            <div class="col-md-4 first-column d-flex align-items-center">
                <div class="col-md-12 d-flex justify-content-center align-items-center">
                    <?php echo renderTitle("Technical Labs and Practical Days") ?>
                </div>
            </div>
            <div class="col-md-8 second-column d-flex">
                <div class="col-md-6 first-pic">
                    <img src="images/activities/practical-image1.png" width="100%" height="100%" alt="">
                </div>
                <div class="col-md-6 second-pic">
                    <img src="images/activities/practical-image2.png" width="100%" height="100%" alt="">
                </div>
            </div>
        </div>
        <div class="row second-row mt-3 d-flex justify-content-center">
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

<!-- Messenger Icon -->
<?php include 'components/messenger-icon.php' ?>

<div id="footer"></div>
<?php include 'layouts/footer.php' ?>