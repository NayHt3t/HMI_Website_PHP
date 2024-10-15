<?php 
  $pageTitle = 'Academic Programs';
  include 'layouts/header.php' 
?>
<?php include 'components/components.php' ?>

<!-- Header -->
<div id="header"></div>

<!-- Banner Section Start -->
<Section class="section banner-section">

    <?php
    $bgImage = "images/banners/academic-banner.jpg";
    $title = "Academic Programs";
    echo renderBanner($bgImage, $title);
    ?>

    <?php
    $content1 = "
            In Host Myanmar Institute, we provide different programs relating to computer science.
                    Lorem
                    ipsum dolor sit amet consectetur. Ornare neque euismod nisi interdum. Lobortis mauris dolor
                    vitae turpis adipiscing. Tortor enim a nec parturient lorem maecenas ullamcorper massa.
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

<!-- Program Intro Section Start -->
<section class="section bg-white program-intro">
    <div class="container py-5 position-relative padding-format">
        <div class="row d-flex align-items-center" data-aos="fade-down">
            <div class="col-md-12 d-flex justify-content-center align-items-center">
                <?php echo renderTitle("2-year Software Engineer Certificate Program") ?>
            </div>
        </div>
        <div class="row p-3" data-aos="fade-right">
            <div class="col-md-5 pe-5">
                <p class="py-5"> <b>2-year Software Certificate Program (Job Readiness)</b> သည် ဂျပန်နိုင်ငံရှိ
                    Information Technology Promotion Agency (API) နှင့်ပူးပေါင်းထားသော အာရှနိုင်ငံများရှိ
                    သတင်းအချက်အလက်နှင့် နည်းပညာဆိုင်ရာစာမေးပွဲ Information Technology Professionals Examination
                    Council (ITPEC) အားအခြေခံပြီး Software Engineering ဆိုင်ရာ လက်တွေ့လုပ်ငန်းခွင် On Job Training
                    (OJT) အတွက် အကောင်အထည်ဖော်ထားခြင်းဖြစ်ပါသည်။ </p>
            </div>
            <div class="col-md-7">
                <img src="images/activities/image6.jpg" alt="activity-1" style="width: 100%; height: 20rem;"
                    class="rounded">
            </div>
        </div>
        <div class="row px-3 pt-3 pb-4 mt-3" data-aos="fade-left">
            <div class="col-md-7">
                <img src="images/activities/image8.jpg" alt="activity-1" style="width: 100%; height: 20rem;"
                    class="rounded">
            </div>
            <div class="col-md-5 ps-5">
                <p class="pt-5"> ဂျပန်နိုင်ငံနှင့်ပြည်တွင်းရှိ သတင်းအချက်အလက်နှင့် နည်းပညာအလုပ်ရုံ (Information
                    Technology - IT industry) များတွင် ကျွမ်းကျင်သော Software Engineer အဖြစ် ရပ်တည်မည့်သူများအတွက်
                    အချိန် (၂) နှစ်အတွင်း Software Engineering ဆိုင်ရာ အယူအဆနှင့်အတူ လုပ်ငန်းခွင်ဝင်ရောက်ရန်
                    အဆင်သင့်ဖြစ်သည်အထိ လေ့ကျင့်သင်ကြားပေးမည့် program ဖြစ်ပါသည်။ </p>
                <p class="pt-2"> သင်တန်းပြီးမြောက်ပါက ITPEC စာမေးပွဲဝင်ရောက်ဖြေဆို၍ ပြည်တွင်းနှင့် ပြည်ပ IT industry
                    များတွင် Software Engineer အဖြစ် ဝင်ရောက်လုပ်ကိုင်နိုင်မည့် အခွင့်အရေး ရရှိမည်ဖြစ်ပါသည်။ </p>
            </div>
        </div>
        <?php echo renderSecionBreak(); ?>
    </div>
</section>
<!-- Program Intro Section End -->

<!-- Program Detail Section Start -->
<section class="section bg-white program-details" style="border-bottom: 1px solid;">
    <div class="container padding-format mb-5">
        <div class="row">
            <div class="col-lg-12 detail-nav">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link calendar-tab active" id="academic-calendar-tab" data-bs-toggle="tab"
                            data-bs-target="#academic-calendar" type="button" role="tab"
                            aria-controls="academic-calendar" aria-selected="true">Academic calendar</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link fee-tab" id="academic-fee-tab" data-bs-toggle="tab"
                            data-bs-target="#academic-fee" type="button" role="tab" aria-controls="academic-fee"
                            aria-selected="false">Academic Fees</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link plan-tab" id="study-plan-tab" data-bs-toggle="tab"
                            data-bs-target="#study-plan" type="button" role="tab" aria-controls="study-plan"
                            aria-selected="false">Study Plan</button>
                    </li>
                </ul>
                <div class="tab-content program-detail" id="myTabContent">
                    <!-- Academic calendar Content Start -->
                    <div class="tab-pane academic-calendar fade show active" id="academic-calendar" role="tabpanel"
                        aria-labelledby="academic-calendar-tab">
                        <div class="container p-5">
                            <div class="row text-justify">
                                <div class="col-md-12 calendar-text">
                                    <p>
                                        In Host Myanmar Institute, we provide different programs relating to
                                        computer science. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Atque, veniam sapiente ullam debitis consequuntur unde beatae placeat quo,
                                        similique provident quam dolores eos nesciunt magni reprehenderit, omnis
                                        alias fuga saepe!
                                    </p>
                                </div>
                            </div>
                            <div class="row calendar-item">
                                <div class="container">
                                    <div class="row mt-3">
                                        <div class="col-md-6 may-intake">
                                            <div class="container">
                                                <div class="row title-row">
                                                    <div class="">May Intake</div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="time-table col-md-12">
                                                        <div class="container year-1">
                                                            <div class="row">
                                                                <div class="col-md-12 d-flex justify-content-center align-items-center">
                                                                    <?php echo renderTitle("Year 1") ?>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-md-3 d-flex align-items-center ps-3">
                                                                    1st sem
                                                                </div>
                                                                <div class="col-md-9 text-white d-flex align-items-center">
                                                                    <div class="school-month ms-2">
                                                                        May
                                                                    </div>
                                                                    <div class="school-month ms-2">
                                                                        June
                                                                    </div>
                                                                    <div class="school-month ms-2">
                                                                        July
                                                                    </div>
                                                                    <div class="school-month ms-2">
                                                                        Aug
                                                                    </div>
                                                                    <div class="semester-end ms-2">
                                                                        Sep
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-md-3 d-flex align-items-center">
                                                                    2nd sem
                                                                </div>
                                                                <div class="col-md-9 text-white d-flex align-items-center">
                                                                    <div class="school-month ms-2">
                                                                        Nov
                                                                    </div>
                                                                    <div class="school-month ms-2">
                                                                        Dec
                                                                    </div>
                                                                    <div class="school-month ms-2">
                                                                        Jan
                                                                    </div>
                                                                    <div class="school-month ms-2">
                                                                        Feb
                                                                    </div>
                                                                    <div class="semester-end ms-2">
                                                                        Mar
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="time-table col-md-12">
                                                        <div class="container year-2">
                                                            <div class="row">
                                                                <div class="col-md-12 d-flex justify-content-center align-items-center">
                                                                    <?php echo renderTitle("Year 2") ?>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-md-3 d-flex align-items-center ps-3">
                                                                    1st sem
                                                                </div>
                                                                <div class="col-md-9 text-white d-flex align-items-center">
                                                                    <div class="school-month ms-2">
                                                                        May
                                                                    </div>
                                                                    <div class="school-month ms-2">
                                                                        June
                                                                    </div>
                                                                    <div class="school-month ms-2">
                                                                        July
                                                                    </div>
                                                                    <div class="school-month ms-2">
                                                                        Aug
                                                                    </div>
                                                                    <div class="semester-end ms-2">
                                                                        Sep
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-md-3 d-flex align-items-center">
                                                                    2nd sem
                                                                </div>
                                                                <div class="col-md-9 text-white d-flex align-items-center">
                                                                    <div class="school-month ms-2">
                                                                        Nov
                                                                    </div>
                                                                    <div class="school-month ms-2">
                                                                        Dec
                                                                    </div>
                                                                    <div class="school-month ms-2">
                                                                        Jan
                                                                    </div>
                                                                    <div class="school-month ms-2">
                                                                        Feb
                                                                    </div>
                                                                    <div class="semester-end ms-2">
                                                                        Mar
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 oct-intake">
                                            <div class="container">
                                                <div class="row title-row">
                                                    <div class="">Oct Intake</div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="time-table col-md-12">
                                                        <div class="container year-1">
                                                            <div class="row">
                                                                <div class="col-md-12 d-flex justify-content-center align-items-center">
                                                                    <?php echo renderTitle("Year 1") ?>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-md-3 d-flex align-items-center ps-3">
                                                                    1st sem
                                                                </div>
                                                                <div class="col-md-9 text-white d-flex align-items-center">
                                                                    <div class="school-month ms-2">
                                                                        May
                                                                    </div>
                                                                    <div class="school-month ms-2">
                                                                        June
                                                                    </div>
                                                                    <div class="school-month ms-2">
                                                                        July
                                                                    </div>
                                                                    <div class="school-month ms-2">
                                                                        Aug
                                                                    </div>
                                                                    <div class="semester-end ms-2">
                                                                        Sep
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-md-3 d-flex align-items-center">
                                                                    2nd sem
                                                                </div>
                                                                <div class="col-md-9 text-white d-flex align-items-center">
                                                                    <div class="school-month ms-2">
                                                                        Nov
                                                                    </div>
                                                                    <div class="school-month ms-2">
                                                                        Dec
                                                                    </div>
                                                                    <div class="school-month ms-2">
                                                                        Jan
                                                                    </div>
                                                                    <div class="school-month ms-2">
                                                                        Feb
                                                                    </div>
                                                                    <div class="semester-end ms-2">
                                                                        Mar
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="time-table col-md-12">
                                                        <div class="container year-2">
                                                            <div class="row">
                                                                <div class="col-md-12 d-flex justify-content-center align-items-center">
                                                                    <?php echo renderTitle("Year 2") ?>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-md-3 d-flex align-items-center ps-3">
                                                                    1st sem
                                                                </div>
                                                                <div class="col-md-9 text-white d-flex align-items-center">
                                                                    <div class="school-month ms-2">
                                                                        May
                                                                    </div>
                                                                    <div class="school-month ms-2">
                                                                        June
                                                                    </div>
                                                                    <div class="school-month ms-2">
                                                                        July
                                                                    </div>
                                                                    <div class="school-month ms-2">
                                                                        Aug
                                                                    </div>
                                                                    <div class="semester-end ms-2">
                                                                        Sep
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-md-3 d-flex align-items-center">
                                                                    2nd sem
                                                                </div>
                                                                <div class="col-md-9 text-white d-flex align-items-center">
                                                                    <div class="school-month ms-2">
                                                                        Nov
                                                                    </div>
                                                                    <div class="school-month ms-2">
                                                                        Dec
                                                                    </div>
                                                                    <div class="school-month ms-2">
                                                                        Jan
                                                                    </div>
                                                                    <div class="school-month ms-2">
                                                                        Feb
                                                                    </div>
                                                                    <div class="semester-end ms-2">
                                                                        Mar
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Academic calendar Content End -->

                    <!-- Academic Fee Content Start -->
                    <div class="tab-pane academic-fee fade" id="academic-fee" role="tabpanel" aria-labelledby="academic-fee-tab">
                        <div class="container p-5">
                            <div class="row">
                                <div class="first-column col-lg-6 col-sm-12">
                                    <div class="row">
                                        <div class="col-md-5 d-flex">
                                            <div class="academic-bullet col-md-2">
                                                <img src="images/vectorElements/academicFee-bullet1.png" width="100%" height="100%" alt="">
                                            </div>
                                            <div class="col-md-10 ps-2">
                                                <p>Registeration Fee</p>
                                            </div>
                                        </div>
                                        <div class="course-price col-md-7">
                                            <p>500,000 MMK</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5 d-flex">
                                            <div class="academic-bullet col-md-2">
                                                <img src="images/vectorElements/academicFee-bullet1.png" width="100%" height="100%" alt="">
                                            </div>
                                            <div class="col-md-10 ps-2">
                                                <p>Year 1</p>
                                            </div>
                                        </div>
                                        <div class="course-price col-md-7">
                                            <p>3,500,000 MMK</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5 d-flex">
                                            <div class="academic-bullet col-md-2">
                                                <img src="images/vectorElements/academicFee-bullet1.png" width="100%" height="100%" alt="">
                                            </div>
                                            <div class="col-md-10 ps-2">
                                                <p>Year 1</p>
                                            </div>
                                        </div>
                                        <div class="course-price col-md-7">
                                            <p>3,000,000 MMK</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="second-column ps-3 col-lg-6 col-sm-12">
                                    <div class="row d-flex">
                                        <div class="academic-bullet col-md-2 ms-3">
                                            <img src="images/vectorElements/academicFee-bullet2.png" alt="">
                                        </div>
                                        <div class="col-md-10 ms-2">
                                            <p>3 Times Installment / Year</p>
                                        </div>
                                    </div>
                                    <div class="row d-flex">
                                        <div class="academic-bullet col-md-2 ms-3">
                                            <img src="images/vectorElements/academicFee-bullet3.png" alt="">
                                        </div>
                                        <div class="col-md-10 ms-2">
                                            <p>The program fee covers tuiton, registration and text books fees but does not cover ITPEC exam fees.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Academic Fee Content Emd -->

                    <!-- Study Plan Content Start -->
                    <div class="tab-pane study-plan p-5 fade" id="study-plan" role="tabpanel" aria-labelledby="study-plan-tab">
                        <div class="row yearly-course">
                            <div class="col-md-6 col-sm-12 year-1">
                                <div class="row title">
                                    <div>Year 1</div>
                                </div>
                                <div class="row semester semester-1 ps-2">
                                    <div class="row sem-title py-3">
                                        <p>Semester I</p>
                                    </div>
                                    <div class="row course">
                                        <div class="col-md-3 course-name">
                                            <p>CS-101</p>
                                        </div>
                                        <div class="col-md-9 course-description">
                                            <p>Fundamentals of computting</p>
                                        </div>
                                    </div>
                                    <div class="row course">
                                        <div class="col-md-3 course-name">
                                            <p>JPN-N5</p>
                                        </div>
                                        <div class="col-md-9 course-description">
                                            <p>Basic Japanese Language</p>
                                        </div>
                                    </div>
                                    <div class="row course">
                                        <div class="col-md-3 course-name">
                                            <p>CS-101</p>
                                        </div>
                                        <div class="col-md-9 course-description">
                                            <p>Fundamentals of computting</p>
                                        </div>
                                    </div>
                                    <div class="row course">
                                        <div class="col-md-3 course-name">
                                            <p>JPN-N5</p>
                                        </div>
                                        <div class="col-md-9 course-description">
                                            <p>Basic Japanese Language</p>
                                        </div>
                                    </div>
                                    <div class="row course">
                                        <div class="col-md-3 course-name">
                                            <p>CS-101</p>
                                        </div>
                                        <div class="col-md-9 course-description">
                                            <p>Fundamentals of computting</p>
                                        </div>
                                    </div>
                                    <div class="row course">
                                        <div class="col-md-3 course-name">
                                            <p>JPN-N5</p>
                                        </div>
                                        <div class="col-md-9 course-description">
                                            <p>Basic Japanese Language</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row semester semester-2 ps-2">
                                    <div class="row sem-title py-3">
                                        <p>Semester II</p>
                                    </div>
                                    <div class="row course">
                                        <div class="col-md-3 course-name">
                                            <p>CS-101</p>
                                        </div>
                                        <div class="col-md-9 course-description">
                                            <p>Fundamentals of computting</p>
                                        </div>
                                    </div>
                                    <div class="row course">
                                        <div class="col-md-3 course-name">
                                            <p>JPN-N4</p>
                                        </div>
                                        <div class="col-md-9 course-description">
                                            <p>Conversational Japanese Language</p>
                                        </div>
                                    </div>
                                    <div class="row course">
                                        <div class="col-md-3 course-name">
                                            <p>CS-101</p>
                                        </div>
                                        <div class="col-md-9 course-description">
                                            <p>Fundamentals of computting</p>
                                        </div>
                                    </div>
                                    <div class="row course">
                                        <div class="col-md-3 course-name">
                                            <p>JPN-N4</p>
                                        </div>
                                        <div class="col-md-9 course-description">
                                            <p>Conversational Japanese Language</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 year-2">
                                <div class="row title">
                                    <div>Year 2</div>
                                </div>
                                <div class="row semester semester-1 ps-2">
                                    <div class="row sem-title py-3">
                                        <p>Semester I</p>
                                    </div>
                                    <div class="row course">
                                        <div class="col-md-3 course-name">
                                            <p>CS-101</p>
                                        </div>
                                        <div class="col-md-9 course-description">
                                            <p>Fundamentals of computting</p>
                                        </div>
                                    </div>
                                    <div class="row course">
                                        <div class="col-md-3 course-name">
                                            <p>JPN-N3</p>
                                        </div>
                                        <div class="col-md-9 course-description">
                                            <p>Advanced Japanese Language</p>
                                        </div>
                                    </div>
                                    <div class="row course">
                                        <div class="col-md-3 course-name">
                                            <p>CS-101</p>
                                        </div>
                                        <div class="col-md-9 course-description">
                                            <p>Fundamentals of computting</p>
                                        </div>
                                    </div>
                                    <div class="row course">
                                        <div class="col-md-3 course-name">
                                            <p>JPN-N3</p>
                                        </div>
                                        <div class="col-md-9 course-description">
                                            <p>Advanced Japanese Language</p>
                                        </div>
                                    </div>
                                    <div class="row course">
                                        <div class="col-md-3 course-name">
                                            <p>CS-101</p>
                                        </div>
                                        <div class="col-md-9 course-description">
                                            <p>Fundamentals of computting</p>
                                        </div>
                                    </div>
                                    <div class="row course">
                                        <div class="col-md-3 course-name">
                                            <p>JPN-N3</p>
                                        </div>
                                        <div class="col-md-9 course-description">
                                            <p>Advanced Japanese Language</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row semester semester-2 ps-2">
                                    <div class="row sem-title py-3">
                                        <p>Semester II</p>
                                    </div>
                                    <div class="row course">
                                        <div class="col-md-3 course-name">
                                            <p>CS-101</p>
                                        </div>
                                        <div class="col-md-9 course-description">
                                            <p>Fundamentals of computting</p>
                                        </div>
                                    </div>
                                    <div class="row course">
                                        <div class="col-md-3 course-name">
                                            <p>JPN-N3</p>
                                        </div>
                                        <div class="col-md-9 course-description">
                                            <p>Advanced Japanese Language</p>
                                        </div>
                                    </div>
                                    <div class="row course">
                                        <div class="col-md-3 course-name">
                                            <p>CS-101</p>
                                        </div>
                                        <div class="col-md-9 course-description">
                                            <p>Fundamentals of computting</p>
                                        </div>
                                    </div>
                                    <div class="row course">
                                        <div class="col-md-3 course-name">
                                            <p>JPN-N3</p>
                                        </div>
                                        <div class="col-md-9 course-description">
                                            <p>Advanced Japanese Language</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row download-pdf mt-3">
                            <a href="#" class="download-button">
                                <!-- <a href="#" class="">Download Study Plan</a> -->
                                Download Study Plan
                                <img src="images/gif/download-icon.gif" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- Study Plan Content Start -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Program Detail Section End -->

<!-- Footer -->
<div id="footer"></div>
<?php include 'layouts/footer.php' ?>



<!-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        AOS.init({
            duration: 1200,
        });

        const calendarTab = document.querySelector('.calendar-tab');
        const feeTab = document.querySelector('.fee-tab');
        const planTab = document.querySelector('.plan-tab');

        function updateBorders() {
            if (feeTab.classList.contains('active')) {
                console.log('Updating borders')
                feeTab.classList.remove('border-right', 'border-left');
            } else {
                if (calendarTab.classList.contains('active')) {
                    feeTab.classList.add('border-right');
                }
                if (planTab.classList.contains('active')) {
                    feeTab.classList.add('border-left');
                }
            }
        }

        document.querySelector('#myTab').addEventListener('shown.bs.tab', function() {
            updateBorders();
        });

        updateBorders();

    });
</script> -->