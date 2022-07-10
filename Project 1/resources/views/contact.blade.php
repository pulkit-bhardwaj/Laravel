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
        /> 																		<!-- main for this page -->
  <style>
		section#fld{  
			padding: 1px 12px 1px 12px;
      margin-left: 200px;  
		}
	
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
          <!-- Fmobile version -->
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
      <img src="images/Contact.jpg" alt="Wedding" width="960" height="394" />
    </p>   
		<h1 style="color: #369;">We’d love to hear from you</h1>	
			
    <section id="fld">
    <h1>{{$title}}</h1>
    <h2>{{$tagline}}</h2>
 		 <form action="http://scott-media.com/test/form_display.php"
        method="post"
        id="my_form"
        autocomplete="on"
        > <!-- contact form created -->
					<p>Let us know when you want to drop-in for a demo or just to have a cup of coffee!</p>
			 
			 <fieldset>
      <legend>Contact Details</legend>
      <p>
        <label for="name">Name: </label>
        <input type="text" 
               name="name" 
               id="name" 
               maxlength="50"
               size="25"
               placeholder="Type your full name here"
               required />
      </p>
             
      <p>
        <label for="email_address">Email: </label>
        <input type="email"
               name="email_address"
               id="email_address"
               size="25" 
               placeholder="user@domain.com" />
      </p>
      <p>
        <label for="phone">Phone Number:</label>
        <input type="tel"
               name="phone"
               id="phone"
							 size="25"
               placeholder="xxx-xxx-xxxx" />
      </p>
				 
				 <p>
				 <label for="event_date">Event Date:</label>
				 <input type="date" 
					id="event_date" 
					name="event_date">
				 </p>
       
			<p>How Did You Hear About Us? <br />
					
        <input type="radio" id="W" name="about" value="website" />
        <label for="W">Website</label><br />
        
        <input type="radio" id="NP" name="about" value="newspaper" />
        <label for="NP">Newspaper</label><br />

        <input type="radio" id="Insta" name="about" value="instagram" />
        <label for="Insta">Instagram</label><br />
        
        <input type="radio" id="FB" name="about" value="facebook" />
        <label for="FB">Facebook</label><br />
				
      </p>
				 
			<p>Event Type <br /> </p>
			<p>
            <select id="event" name="event" required>
						<option value="">None</option>
            <option value="Wedding">Wedding</option>
            <option value="Pre-Wedding">Pre-Wedding</option>
            <option value="Birthday">Birthday</option>
            <option value="Corporate">Corporate</option>
        </select>
			</p>
    </fieldset>
			<p>
      <input type="submit" /> &nbsp; 
      <input type="reset" value="Clear Form" /> &nbsp;
			</p> 
			</form>
			
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