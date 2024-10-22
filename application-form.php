<?php include 'components/components.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Form</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styles-for-application.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <!-- Sidebar -->
            <div class="sidebar col-md-4">
                <div class="row text-center">
                    <a href="index.php" class="back">Back to Home</a>
                    <div class="logo">
                        <img src="images/HMI_logo.png" alt="" width="100%">
                    </div>
                    <p class="body-text">HMI aims to produce skillful IT technicians who have skills and knowledge to find a professional pathway</p>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 mb-lg-0">
                        <div class="row">
                            <div class="col-md-1">
                                <i class="fas fa-map-marker-alt icon"></i>
                            </div>
                            <div class="col-md-11">
                                <p>Room 64, 65, Tower 11, Garden City Condo, Mandalay, Myanmar</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1">
                                <i class="fas fa-phone icon"></i>
                            </div>
                            <div class="col-md-11">
                                <p>09 404 0603 66 / 77</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1">
                                <i class="fas fa-envelope icon"></i>
                            </div>
                            <div class="col-md-11">
                                <p>admin@hostmyanmar.net</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Content -->
            <div class="col-md-8">
                <div class="application-form">
                    <div class="form-header text-center">
                        <h2>Applying 2yrs Software Engineering Program</h2>
                    </div>
                    <div class="form-body">
                        <form>
                            <h4>Student's Information</h4>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="fullName" class="form-label">Full Name:</label>
                                    <input type="text" class="form-control" id="fullName" placeholder="Enter your full name">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="gender" class="form-label">Gender:</label>
                                    <select class="form-select" id="gender">
                                        <option selected>Select your gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="age" class="form-label">Age</label>
                                    <input type="number" class="form-control" id="age" placeholder="Enter your age">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter your email address">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="nrc" class="form-label">NRC</label>
                                    <input type="text" class="form-control" id="nrc" placeholder="x/xxx(x)xxxxxx">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="address" placeholder="Enter your address">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="nrc" class="form-label">City/Country</label>
                                    <input type="text" class="form-control" id="city" placeholder="Mandalay, Myanmar">
                                </div>
                            </div>

                            <div class="row my-3">
                                <?php echo renderSecionBreak(); ?>
                            </div>

                            <h4>Guardian's Information</h4>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="guardianName" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="guardianName" placeholder="Enter guardian's full name">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="relationship" class="form-label">Relationship with student</label>
                                    <select class="form-select" id="guardian-relation">
                                        <option selected>Option...</option>
                                        <option value="male">Parents</option>
                                        <option value="female">Relatives</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number">
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center align-items-center">
                                <button type="submit" class="btn submit-button">Submit</button>
                            </div>
                            <div class="row">
                                <p class="text-center">By submitting this form, I agree with terms and conditions.</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>