
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="groupStyles.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro" rel="stylesheet">
  <script src="menuHider.js"></script>
</head>
<body onload="cycleBackgrounds();">
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
  </div><h1 id="hpTitle">Susan Perry Homes</h2>
</body>

<script>
function cycleBackgrounds() {
	var len = 4;
	let index = 1;

	document.getElementsByTagName('body')[0].style.backgroundImage =
		"url('house1.jpg')";
	var images = [
		"url('house1.jpg')",
		"url('house2.jpg')",
		"url('house3.jpg')",
		"url('house4.jpg')"
	];

	//    console.log("in check background");
	var test = setInterval(() => {
		//        console.log("in Function do it");

		//    console.log(index);
		document.getElementsByTagName('body')[0].style.backgroundImage =
			images[index];
		index++;
		index = index % images.length;
	}, 3000);
	//    console.log("test");
}
</script>
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
    </footer></html>
