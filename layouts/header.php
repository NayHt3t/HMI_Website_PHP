<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $pageTitle; ?></title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/custom-animation.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>

<nav class="first-navbar d-flex align-items-center padding-format">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 text-white">
        <div class="m-2">
          <i class="fas fa-phone"></i>
          <i class="fas fa-envelope ms-4"></i>
          <i class="fab fa-linkedin ms-4 "></i>
          <i class="fab fa-facebook ms-4"></i>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group has-search position-relative">
          <i class="fa fa-search form-control-feedback"></i>
          <input type="text" class="form-control" placeholder="Career Opportunities">
        </div>
      </div>
    </div>
  </div>
</nav>

<nav class="navbar second-navbar navbar-expand-lg navbar-light sticky-top padding-format">
  <div class="container-fluid">
    <div class="naver-brand col-lg-3 col-md-3 col-sm-3">
      <a class="navbar-brand" href="#">
        <img src="images/HMI_logo.png" alt="Host Myanmnar Institute Logo" style="width: 100%;height: 4.5rem;">
      </a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
      aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link custom-nav-link" href="../index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link custom-nav-link" href="../academic-programs.php">Academic Program</a>
        </li>
        <li class="nav-item">
          <a class="nav-link custom-nav-link" href="../student-life.php">Student Life</a>
        </li>
        <li class="nav-item">
          <a class="nav-link custom-nav-link" href="../career-opportunity.php">Carrer Opprtunity</a>
        </li>
        <li class="nav-item me-0">
          <a class="btn btn-danger" href="#">Apply Now</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
