<!doctype html>

<html lang="en">
<head>
<title>{{$title}} : {{$tagline}}</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" href="images/32.png" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lora&family=Oswald:wght@700&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" 
        href="styles/desktop_styles.css" 
        media="all and (min-width:768px)" /> <!-- desktop version -->
  
  <link rel="stylesheet"
        href="styles/mobile_styles.css"
        media="all and (max-width: 767px)" /> <!-- mobile version -->
	
	<link rel="stylesheet"
        href="styles/print.css"
         />                                   <!-- main for this page -->
	
  
  <style>

  </style>
  <!--[if IE 8]>
			Change your browser!
		<![endif]-->
</head>

<body>
  <div id="wrapper"> <!-- wrapper created -->
    
    <header>
      <div id="logo"> <!-- logo added -->
        <picture>
          <!-- desktop version -->
          <source media="(min-width: 768px)" 
                  srcset="images/logo100.png 1x, images/logo200.png 2x" />
          <!-- mobile version -->
          <source media="(max-width: 767px)"
                  srcset="images/logo50.png 1x, images/logo100.png 2x, images/logo200.png 3x" />
          
          <img src="images/logo200.png" alt="Logo" width="150" height="150" />
					
					
        </picture>
      </div>
    </header>
    
    <nav> <!-- Navbar created -->
      <a href="#" id="hamburger_button">
        <span id="topbar"></span>
        <span id="middlebar"></span>
        <span id="bottombar"></span>
      </a>
     
      <ul id="navlist">
        <li><a href="/" title="Home page">Home</a></li>
        <li><a href="/about" title="about page">About</a></li>
        <li class="has_submenu"><a href="#">Portfolio</a>
          <ul id="services_menu">
            <li><a href="#">Pre Wedding</a></li>
            <li><a href="#">Wedding Photography</a></li>
            <li><a href="/edit">Editorial</a></li>
          </ul>
        </li>
        <li><a href="#">Films</a></li>
        <li><a href="/blog" title="Blog page">Blog</a></li>
        <li><a href="/contact">Contact</a></li>
      </ul>
    </nav>
		<p>
      <img src="images/Edit.jpg" alt="Wedding" width="960" height="394" />
    </p> 
		
    <section id="content"> <!-- page content created -->
    <h1>{{$title}}</h1>
    <h2>{{$tagline}}</h2>
 		 
<div class="row">
  <div class="column">
    <img src="images/soon.jpg" alt="Soon" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="images/soon.jpg" alt="Soon" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="images/soon.jpg" alt="Soon" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="images/soon.jpg" alt="Soon" style="width:100%" onclick="myFunction(this);">
  </div>
	<div class="column">
    <img src="images/soon.jpg" alt="Soon" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="images/soon.jpg" alt="Soon" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="images/soon.jpg" alt="Soon" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="images/soon.jpg" alt="Soon" style="width:100%" onclick="myFunction(this);">
  </div>
	<div class="column">
    <img src="images/soon.jpg" alt="Soon" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="images/soon.jpg" alt="Soon" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="images/soon.jpg" alt="Soon" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="images/soon.jpg" alt="Soon" style="width:100%" onclick="myFunction(this);">
  </div>
	<div class="column">
    <img src="images/soon.jpg" alt="Soon" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="images/soon.jpg" alt="Soon" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="images/soon.jpg" alt="Soon" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="images/soon.jpg" alt="Soon" style="width:100%" onclick="myFunction(this);">
  </div>
	<div class="column">
    <img src="images/soon.jpg" alt="Soon" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="images/soon.jpg" alt="Soon" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="images/soon.jpg" alt="Soon" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="images/soon.jpg" alt="Soon" style="width:100%" onclick="myFunction(this);">
  </div>
	<div class="column">
    <img src="images/soon.jpg" alt="Soon" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="images/soon.jpg" alt="Soon" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="images/soon.jpg" alt="Soon" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="images/soon.jpg" alt="Soon" style="width:100%" onclick="myFunction(this);">
  </div>
	<div class="column">
    <img src="images/soon.jpg" alt="Soon" style="width:100%" onclick="myFunction(this);">
  </div>
</div>


<script>
function myFunction(imgs) {
  var expandImg = document.getElementById("expandedImg");
  var imgText = document.getElementById("imgtext");
  expandImg.src = imgs.src;
  imgText.innerHTML = imgs.alt;
  expandImg.parentElement.style.display = "block";
}
</script>
			<h2>“Thanks for your time”</h2>
    </section>
    
    <footer>Copyright © 2021 Best Wedding Photographers in Winnipeg, MB
		<div id="last_modified">
			<script>
				document.scripts[document.scripts.length-1].parentNode.innerHTML = "Last Modified: " + document.lastModified;
			</script>
		</div>
		</footer> <!-- footer added to wrapper -->
  </div>
</body>
</html>