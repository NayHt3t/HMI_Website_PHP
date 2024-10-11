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

<div id="footer"></div>
<?php include 'layouts/footer.php' ?>