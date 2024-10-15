<?php 
  $pageTitle = 'Home';
  require_once 'layouts/header.php'
?>
<?php include 'components/components.php' ?>


<!-- Header Start -->
<div id="header"></div>
<!-- Header End -->

<!-- Intro Section Start -->
<section class="intro">
  <div class="container my-5 padding-format">
    <div class="row">
      <div class="col-lg-6 col-md-12 fly-in-left">
        <div class="mb-3">
          <img src="images/HMI_logo_only.png" width="50" height="45" class="" alt="HMI Logo">
        </div>
        <h1>Advanced Degrees,</h1>
        <h1>Endless Opportunities:</h1>
        <p>Explore Our Computing Programs</p>
        <a href="#" class="btn-apply">Apply Now &RightArrow;</a>
      </div>
      <div class="element-design col-lg-6 col-md-12">
        <div class="justify-content-center align-items-center">
          <div class="element-container">
            <div class="fly-in-bottom">
              <img src="images/Vector_girl.png" width="100%" height="100%" alt="Vector Photo">
              <div class="h-line"></div>
            </div>
            <div class="element idea fly-in-top">
              <img src="images/vectorElements/flat-color-icons_idea.png" alt="">
            </div>
            <div class="element spark-1 fly-in-diagonal-top-left">
              <img src="images/vectorElements/iconoir_sparks-solid.png" alt="">
            </div>
            <div class="element edge-computing fly-in-diagonal-bottom-left">
              <img src="images/vectorElements/eos-icons_edge-computing-outlined.png" alt="">
            </div>
            <div class="element binary fly-in-diagonal-top-right">
              <img src="images/vectorElements/Vector.png" alt="">
            </div>
            <div class="element spark-2 fly-in-diagonal-bottom-right">
              <img src="images/vectorElements/iconoir_sparks-solid-1.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Intro Section End -->

<!-- Course Section Start -->
<section class="courses">
  <div class="container padding-format pb-4">

    <div class='row d-flex justify-content-center align-items-center'>
      <div class='col-md-4 d-flex justify-content-center align-items-center my-4'>
      
        <?php echo renderTitle("Our Courses") ?>
      
      </div>
    </div>

    <div class="row">
      <!-- Card 1 -->
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4">
        <div class="card card-1">
          <div class="card-body">
            <i class="fas fa-clock fa-2x card-icon"></i>
            <h3 class="card-title text-primary">2-year Program</h3>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. At posuere odio amet
              dignissim et. Eros nunc elit maecenas ac felis enim massa volutpat.</p>
            <a href="#" class="btn btn-light mt-auto">Read More &triangleright;</a>
          </div>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4">
        <div class="card card-2">
          <div class="card-body">
            <i class="fas fa-laptop-code fa-2x card-icon"></i>
            <h3 class="card-title text-primary">Software Engineering</h3>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. At posuere odio amet
              dignissim et. Eros nunc elit maecenas ac felis enim massa volutpat.</p>
            <a href="#" class="btn btn-light mt-auto">Read More &triangleright;</a>
          </div>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4">
        <div class="card card-3">
          <div class="card-body">
            <i class="fas fa-people-arrows fa-2x card-icon"></i>
            <h3 class="card-title text-primary">On-Job Training</h3>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. At posuere odio amet
              dignissim et. Eros nunc elit maecenas ac felis enim massa volutpat.</p>
            <a href="#" class="btn btn-light mt-auto">Read More &triangleright;</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Course Section End -->

<!-- Career Section Start -->
<section class="career bg-light">
  <div class="container py-5 padding-format">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="row d-flex justify-content-center align-items-center">
          <div class="col-md-12 d-flex justify-content-center align-items-center my-4">

            <?php echo renderTitle("Career Opportunities") ?>
            
          </div>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio voluptatum explicabo asperiores officia
          eligendi culpa, doloribus perspiciatis veniam iste necessitatibus, adipisci qui repellat iusto eaque
          assumenda
          laudantium neque accusamus maiores. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore
          veritatis
          aut culpa harum voluptatum modi alias eligendi impedit sunt consectetur excepturi molestiae eaque blanditiis
          veniam voluptates necessitatibus, doloremque ratione cumque.</p>
      </div>
    </div>
    <div class="row pt-3">
      <div class="col-lg-6 col-md-6">
        <iframe width="100%" height="100%"
          src="https://www.youtube.com/embed/yB4iJwxS-NE?autoplay=1&mute=1&loop=1&playlist=yB4iJwxS-NE"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen></iframe>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="accordion" id="careerAccordion">
          <!-- Accordion Item 1 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button text-white bg-hmi" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                1. Software Engineer
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
              data-bs-parent="#careerAccordion">
              <div class="accordion-body">
                <ul>
                  <li>Lorem ipsum dolor sit amet consectetur.</li>
                  <li>Diam aliquet viverra at tellus libero.</li>
                  <li>Blandit netus tristique tristique id nec arcu.</li>
                  <li>Id imperdiet neque leo amet id porttitor sit arcu.</li>
                  <li>Diam sagittis dictumst enim eget.</li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Accordion Item 2 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button text-white bg-hmi collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                2. IT Technician
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
              data-bs-parent="#careerAccordion">
              <div class="accordion-body">
                <ul>
                  <li>Lorem ipsum dolor sit amet consectetur.</li>
                  <li>Diam aliquet viverra at tellus libero.</li>
                  <li>Blandit netus tristique tristique id nec arcu.</li>
                  <li>Id imperdiet neque leo amet id porttitor sit arcu.</li>
                  <li>Diam sagittis dictumst enim eget.</li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Accordion Item 3 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button text-white bg-hmi collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                3. Network Engineer
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
              data-bs-parent="#careerAccordion">
              <div class="accordion-body">
                <ul>
                  <li>Lorem ipsum dolor sit amet consectetur.</li>
                  <li>Diam aliquet viverra at tellus libero.</li>
                  <li>Blandit netus tristique tristique id nec arcu.</li>
                  <li>Id imperdiet neque leo amet id porttitor sit arcu.</li>
                  <li>Diam sagittis dictumst enim eget.</li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Accordion Item 4 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
              <button class="accordion-button text-white bg-hmi collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                4. Web Designer
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
              data-bs-parent="#careerAccordion">
              <div class="accordion-body">
                <ul>
                  <li>Lorem ipsum dolor sit amet consectetur.</li>
                  <li>Diam aliquet viverra at tellus libero.</li>
                  <li>Blandit netus tristique tristique id nec arcu.</li>
                  <li>Id imperdiet neque leo amet id porttitor sit arcu.</li>
                  <li>Diam sagittis dictumst enim eget.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
<!-- Career Section End -->

<!-- Activity Section Start -->
<section class="activity">
  <div class="container padding-format pb-4">
    <div class="row text-center text-white">
      <div class="col-lg-12">
        <div class="row d-flex justify-content-center align-items-center">
          <div class="col-md-12 d-flex justify-content-center align-items-center my-4">
          <?php echo renderTitle("Our Activities") ?>
          </div>
        </div>
      </div>
    </div>
    <div class="row film-strip-container">
      <div class="col-lg-12 film-strip">
        <img src="images/activities/image1.jpg" alt="Image 1">
        <img src="images/activities/image2.jpg" alt="Image 2">
        <img src="images/activities/image3.jpg" alt="Image 3">
        <img src="images/activities/image4.jpg" alt="Image 4">
        <img src="images/activities/image5.jpg" alt="Image 5">
        <img src="images/activities/image6.jpg" alt="Image 6">
        <img src="images/activities/image7.jpg" alt="Image 7">
        <img src="images/activities/image8.jpg" alt="Image 8">
      </div>
    </div>
  </div>
</section>
<!-- Activity Section End -->

<!-- Diversity Section Start -->
<section class="student-deversity bg-white">
  <div class="container py-5 padding-format">
    <div class="row">
      <div class="col-md-6">
        <div class="container mt-5">
          <div class="map-container">
            <img src="images/myanmar-map.png" alt="Country Map">
            <div class="pin" style="top: 21%; left: 58%;" data-toggle="tooltip" title="Myitkyina"></div>
            <div class="pin" style="top: 30%; left: 39%;" data-toggle="tooltip" title="HpaKant"></div>
            <div class="pin" style="top: 35%; left: 43%;" data-toggle="tooltip" title="InnDaw"></div>
            <div class="pin" style="top: 38%; left: 35%;" data-toggle="tooltip" title="Hommalin"></div>
            <div class="pin" style="top: 46%; left: 55%;" data-toggle="tooltip" title="Mogok"></div>
            <div class="pin" style="top: 53%; left: 37%;" data-toggle="tooltip" title="Madayar"></div>
            <div class="pin" style="top: 62%; left: 54%;" data-toggle="tooltip" title="Yamethin"></div>
            <div class="pin" style="top: 68%; left: 44%;" data-toggle="tooltip" title="Mandalay"></div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="container ms-3">
          <div class="row">
            <div class="col-md-12">
              <div class="row d-flex align-items-center">
                <div class="col-md-12 d-flex align-items-center my-4">
         
                  <?php echo renderTitle("Our Students Diversity") ?>
                </div>
              </div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora quis cupiditate voluptas quasi
                dolores
                cumque animi recusandae voluptate exercitationem enim nihil ex, commodi, vel amet possimus! Natus
                similique consequatur exercitationem.</p>
            </div>
          </div>
          <div class="row chart-container">
            <canvas class="pieChart" id="studentPieChart" width="200" height="200"></canvas>
          </div>
        </div>
      </div>

    </div>
  </div>
  </div>
</section>
<!-- Diversity Section End -->

<!-- Testimonial Section Start -->
<section class="testimonial">
  <div class="container py-5 padding-format">
    <div class="row text-center">
      <div class="col-lg-12">
        <div class="row d-flex align-items-center">
          <div class="col-md-12 d-flex justify-content-center align-items-center my-4">
          <?php echo renderTitle("Our Studentss Testimonials") ?>
          </div>
        </div>
      </div>
    </div>
    <div class="row d-flex align-items-center justify-content-center">
      <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="testimonial-card">
              <div class="container">
                <div class="row">
                  <div class="col-md-3 d-flex justify-content-center align-items-center">
                    <div class="testimonial-frame">
                      <img src="images/students/student2.png" class="testimonial-img mx-auto d-block" alt="Student 1">
                      <div class="frame-overlay"></div>
                    </div>
                  </div>
                  <div class="col-md-9">
                    <h5 class="mt-3">Nine Wai Yan</h5>
                    <p>Batch - 2</p>
                    <p>HMI ကတကယ်ကို အဆင်ပြေတဲ့ကျောင်းပါ။</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="testimonial-card">
              <div class="container">
                <div class="row">
                  <div class="col-md-3 d-flex justify-content-center align-items-center">
                    <div class="testimonial-frame">
                      <img src="images/students/student3.png" class="testimonial-img mx-auto d-block" alt="Student 1">
                      <div class="frame-overlay"></div>
                    </div>
                  </div>
                  <div class="col-md-9">
                    <h5 class="mt-3">San San Shwe</h5>
                    <p>Batch - 1</p>
                    <p>HMI ကတကယ်ကို အဆင်ပြေတဲ့ကျောင်းပါ။</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="testimonial-card">
              <div class="container">
                <div class="row">
                  <div class="col-md-3 d-flex justify-content-center align-items-center">
                    <div class="testimonial-frame">
                      <img src="images/students/student1.png" class="testimonial-img mx-auto d-block" alt="Student 1">
                      <div class="frame-overlay"></div>
                    </div>
                  </div>
                  <div class="col-md-9">
                    <h5 class="mt-3">Zin Zin Htwe</h5>
                    <p>Batch - 3</p>
                    <p>HMI ကတကယ်ကို အဆင်ပြေတဲ့ကျောင်းပါ။ ဆရာတွေနဲ့ ရင်းရင်းနှီးနှီးနဲ့ စာမေးရတာကြောက်စရာမလိုသလို
                      စာသင်ရတာလည်း တကယ်အဆင်ပြေပါတယ်။ ကျောင်းပြီးသွားရင်လည်း လုပ်ငန်းခွင်ဝင်ဖို့အဆင်ပြေတာမို့
                      စိုးရိမ်စရာမလိုပါဘူး။ Teamwork တွေအတွက်လည်း train ပေးတာမို့ တကယ်အဆင်ပြေပါတယ်ရှင့်။
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel"
          data-bs-slide="prev">
          <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span> -->
          <div class="testimonial-frame">
            <img src="images/students/student3.png" class="testimonial-img d-block" alt="Student 1">
            <div class="frame-overlay"></div>
          </div>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel"
          data-bs-slide="next">
          <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span> -->
          <div class="testimonial-frame">
            <img src="images/students/student1.png" class="testimonial-img d-block" alt="Student 1">
            <div class="frame-overlay"></div>
          </div>
        </button>
      </div>
    </div>
  </div>
</section>
<!-- Testimonial Section End -->

<!-- Messenger Icon -->
<?php include 'components/messenger-icon.php' ?>

<!-- Footer Start -->
<div id="footer"></div>

<?php require_once 'layouts/footer.php' ?>
