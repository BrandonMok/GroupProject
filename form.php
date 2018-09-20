
<head>
    <title>Feedback</title>
    <link rel="stylesheet" href="groupStyles.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro" rel="stylesheet">
    <script src="menuHider.js"></script>
</head>
<!-- Header -->
<div class="topNav">
    <div class="topNav-home">
      <a href="index.php">
        <img id="headerLogo" src="sPerryLogo.png" />
      </a>
    </div>
    <ul class="topNav-ul">
      <li class="topNav-ul-li"><a href="testimonials.php">Testimonials</a></li>
      <li class="topNav-ul-li"><a href="community.php">Community</a></li>
      <li class="topNav-ul-li"><a href="success.php">Success</a></li>
      <li class="topNav-ul-li"><a href="about.php">About</a></li>
      <li class="topNav-ul-li"><a href="form.php">Contact</a></li>
    </ul>
    <button class="hamburger" onclick="menuHider()">&#9776;</button>
  </div><div id="form-container">

    <!-- Form -->
    <form action="formProcess.php" method="POST">
        <h2>Contact</h2>
        <div>
            Name:
            <input type="text" id="name" name="name" required>
        </div>
            <div class="formCenter">
            Email:
        <input type="email" id="email" name="email" required>
        </div>
        <div>
            Phone:
            <input type="text" id="phoneNum" name="phoneNum">
        </div>
        <div>
            <fieldset>
            <legend>Interest</legend>
                <input type="radio" name="interest" value="buyer">Buyer
                <input type="radio" name="interest" value="seller">Seller
            </fieldset>
        </div>
        <div class="formCenter">
            <input type="submit" value="submit">
        </div>
    </form><!-- End of form -->
    <footer>
      <ul>
        <li>
          <img src="HHlogo.jpg" />
        </li>
        <li>
          <a href="https://www.facebook.com/SusanPerryHomes/">Facebook</a>
        </li>
        <li>
          <a href="https://www.linkedin.com/in/susanperryhomes/">LinkedIn</a>
        </li>
        <li>
          <a href="https://twitter.com/SusanPerryHomes">Twitter</a>
        </li>
        <li>
          <a href="https://susanperry.howardhanna.com/">Howard Hanna</a>
        </li>
      </ul>
    </footer></div><!-- End of container -->
