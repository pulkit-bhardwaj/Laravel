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
        media="all and (min-width:768px)" />  <!-- desktop version -->
  
  <link rel="stylesheet"
        href="styles/mobile_styles.css"
        media="all and (max-width: 767px)" /> <!-- mobile version -->
  
	 <link rel="stylesheet"
        href="styles/print.css"               
        /> 																		<!-- main for this page -->
	
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
          
          <img src="images/logo100.png" alt="Logo" width="150" height="150" />
					
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
      <img src="images/Blog.jpg" alt="Winnipeg" width="960" height="394" />
    </p>
    <section id="content"> <!-- page content created -->
    <h1>{{$title}}</h1>
    <h2>{{$tagline}}</h2>
			<table>	<!-- Blog table created  -->
				<tr>
    			<th>S.No.</th>
					<th>Date</th>
    			<th>Topic</th>
					<th>Blog</th>
				</tr>
				<tr>
    			<th>1</th>
					<td>November 2021</td>
    			<td>How To Hire Professional Photographers in Winnipeg?</td>
    			<td>The decision to tie the knot is the most important and life-changing one, that a person makes in his/her entire life. And since, 
						  a wedding is a lifetime event, everyone wants it to be a blast. Whether you want to invite guests as many as possible.</td> 
				</tr>
				<tr>
    			<th>2</th>
					<td>October 2021</td>
    			<td>5 Reasons to Pay a Professional Photographer</td>
    			<td>
						<ul>
							<li>Top of the Line Equipment</li>
							<li>Higher Quality Images</li>
							<li>Editing is Worth Every Penny</li>
							<li>They Know What Works</li>
							<li>Professionals Have a Trained Eye</li>
						</ul>
				  </td>
  			</tr>
  			<tr>
    			<th>3</th>
					<td>September 2021</td>
    			<td>Advantages Of Hiring The Professional Photographers in Winnipeg</td>
    			<td>After all, it will be his responsibility to capture and record every single detail of the whole ceremony in a presentable form. 
						  His work has to be something to bring a smile on your face instead of dissatisfaction. The Professional Photographers in Winnipeg
							are the perfect person to make your wedding a fairy-tale</td>
				</tr>
				<tr>
    			<th>4</th>
					<td>July 2021</td>
    			<td>What Is All The Fuss About Wedding Photography Winnipeg?</td>
					<td>In a wedding, holding a costly camera in hand, and doing the random clicks, does not make one a professional wedding photographer. 
							The meaning of wedding photography is much more than that. And a Wedding Photographer is someone who has specialized in wedding 
							photography. There are many expert Winnipeg Photographers are out there, but all of them are not Professional Wedding Photographers. 
							Going for an ordinary photographer may not be the ideal one to shoot your special day. That’s why you will need a Professional Wedding 
							Photographer in Winnipeg.</td>
				</tr>
				<tr>
					<th>5</th>
					<td>June 2021</td>
    			<td>Reasons to Hire A Wnnipeg Wedding Photographer</td>
					<td>Wish you heartfelt congratulations for your upcoming wedding. I hope, you have planned the day perfectly, as you have imagined since the girlhood. 
							Let’s do the final checking: shopping, venue, menu, interior decorator, florist, sending invitations, etc., all is done. What about the photographer?
							Haven’t you contact with one of the Professional Photographers in Winnipeg yet? Well, please do, there’s no time left. If you are thinking that your 
							brother would do the photography, then I must say it would be a recipe for disaster; your brother has many things to arrange for her sister, except the 
							photography thing. You should hand over this responsibility to a person whose expertise go with the wedding photography. And this person is none other 
							than a Winnipeg Photographer.</td>
				</tr>
				<tr>
					<th>6</th>
					<td>March 2021</td>
    			<td>Indian Wedding Photography</td>
					<td>Indian Wedding Photography dislike whatever other customary wedding photography. Couple of occasions throughout your life will ever measure up to the day you 
						say I do. Everywhere throughout the world individuals praise marriage in different traditions, yet as a Wedding Photographer in Winnipeg I need to concede there 
						is something rather one of a kind and exceptional around an Indian wedding. Indians take great pride in their weddings, it’s evident from day 1 the measure of 
						subtle element, improvement and arranging that goes into them is verging on unmatched by whatever other society. Thus, when arranging a conventional wedding it’s
						critical to have the right photographer that can value the measure of work that was placed it in.</td>
				</tr>
				<tr>
					<th>7</th>
					<td>January 2021</td>
    			<td>Require Wedding Photographers? We Are Here!!</td>
					<td>The wedding is subjected as the most important occasion in a person’s life that will be memorable for their entire lifetime. In the process, a photographer can
							be useful in order to provide you the means for developing a story through the captured photos. The Photographers in Winnipeg are highly efficient in gathering the
							visual than close to being realistic making the photo to be more than just simple and plain. With their working you get a beautiful and rich canvas of unique moments
							encountered in the wedding ceremony.</td>
				</tr>
			</table>
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