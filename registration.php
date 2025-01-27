<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Dropbeat</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content=""> 
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/styles.css">
<!-- fevicon -->
<link rel="icon" href="images/fevicon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>
    <!-- header section start -->
<body>     
 <!-- header section start -->
 <div class="header_section">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="logo"><a href="index.html"><img src="images/logo2.png"></a></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
              <a class="nav-link" href="index.html">HOME</a>
            </li>
          
            
            <li class="nav-item ">
              <a class="nav-link" href="registration.php">REGISTRATION</a>
            </li>
           
           
            <li class="nav-item">
              <a class="nav-link" href="contact.html">CONTACT</a>
            </li>
          </ul>                                          
          <form class="form-inline my-2 my-lg-0">
            <div class="search_icon"><a href="#"><img src="images/search-icon.png"></a></div>
          </form>
        </div>
      </nav>
    </div>
    <!-- header section ends -->
    <div class="container">
        <h1>Church Member Registration Form</h1>
        <form action="submit_form.php" method="POST" enctype="multipart/form-data">
            <!-- Personal Information -->
            <fieldset>
                <legend>Personal Information</legend>
                <label for="full-name">Full Name</label>
                <input type="text" id="full-name" name="full_name" required>

                <label for="dob">Date of Birth</label>
                <input type="date" id="dob" name="dob" required> <br>

                <label for="gender">Gender</label>
                <select id="gender" name="gender" required>
                    <option value="">Select</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    
                </select>

                <label for="marital-status">Marital Status</label>
                <select id="marital-status" name="marital_status" required>
                    <option value="">Select</option>
                    <option value="single">Single</option>
                    <option value="married">Married</option>
                    <option value="divorced">Divorced</option>
                    <option value="widowed">Widowed</option>
                </select>

                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" required>

                <label for="email">Email Address</label>
                <input type="email" id="email" name="email">
            </fieldset>

            <!-- Family Details -->
            <fieldset>
                <legend>Family Details</legend>
                <label for="spouse-name">Spouse Name</label>
                <input type="text" id="spouse-name" name="spouse_name">

                <label for="children">Children's Names and Ages</label>
                <textarea id="children" name="children" rows="2"></textarea>

                <label for="next-of-kin">Next of Kin</label>
                <input type="text" id="next-of-kin" name="next_of_kin">

                <label for="kin-contact">Next of Kin Contact</label>
                <input type="tel" id="kin-contact" name="kin_contact">
            </fieldset>

            <!-- Spiritual Information -->
            <fieldset>
                <legend>Spiritual Information</legend>
                <label for="salvation-date">Date of Salvation</label>
                <input type="date" id="salvation-date" name="salvation_date"> <br>

                <label for="baptism">Baptismal Status</label>
                <select id="baptism" name="baptism_status" required>
                    <option value="">Select</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>

                <label for="spiritual-gifts">Spiritual Gifts</label>
                <textarea id="spiritual-gifts" name="spiritual_gifts" rows="2"></textarea>

                <label for="preferred-service">Preferred Worship Service</label>
                <select id="preferred-service" name="preferred_service">
                    <option value="morning">Morning</option>
                    <option value="evening">Evening</option>
                    <option value="youth">Youth Service</option>
                </select>
            </fieldset>

            <!-- Media and Consent -->
            <fieldset>
                <legend>Media and Consent</legend>
                <label for="photo-upload">Upload Photo</label>
                <input type="file" id="photo-upload" name="photo">

                <label>
                    <input type="checkbox" name="consent_notifications" value="yes"> I agree to receive notifications
                </label><br>
                <label>
                    <input type="checkbox" name="consent_media" value="yes"> I consent to media use
                </label><br>
                <label>
                    <input type="checkbox" name="consent_data" value="yes" required> I agree to data storage
                </label>
            </fieldset>

            <!-- Submit -->
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
