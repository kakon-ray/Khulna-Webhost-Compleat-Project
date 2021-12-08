<!DOCTYPE html>
<html lang="en"  style=" scroll-behavior: smooth;">
<head>
    <!--Meta tag-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!--seo description start-->
    <meta name="description" content=" kakonray.com . We are working with both individuals and businesses from all over the globe ">
     <!--seo description start-->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>server peek</title>
   
    <!--Google font-->
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!--Font Asowm-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   
    <!--Resors css-->
     <link rel="stylesheet" href="resorces/css/style.css">
    <link rel="stylesheet" href="resorces/css/responsive.css">
    <!--Vendors css-->
    <link rel="stylesheet" href="vendors/css/normalize.css">
    <link rel="stylesheet" href="vendors/css/gried.css">
    <link rel="stylesheet" href="vendors/css/animated.css">

    <style>
       
        
        @media only screen and (max-width: 980px){
    .span_1_of_4 {
        width: 45.8%;
    }
    svg.radial-progress{
        margin-left:10rem;
        max-width:20rem;
    }
}
@media only screen and (max-width:768px){
    svg.radial-progress{
      margin-left:6rem;
      
  }
}
  @media only screen and (max-width:480px){
    .span_1_of_4{
        width: 55%;
        
    }
    svg.radial-progress {
    margin-left: 11rem;
}

  }
  
  
  @media only screen and (max-width:360px){
    .span_1_of_4{
        width: 60%;
    }
    svg.radial-progress{
        margin-left: 8rem;
    }
    .skill-section h3{
        margin-left: 10rem;
        font-size: 1.5rem;
    }
    .hero-text-box{
        font-size: .8rem;
    }
   
  }


        
        </style>
        
   
</head>
<body>
   
    <!-- Start Heder section-->
       <header id="home">
            <nav>
                <div class="row">
                    <a href="index2.php" class="logo">Khulna Web Host</a>
                    <ul class="main-nav">
                        <li><a href="index2.php">Home</a></li>
                        <li><a href="hosting-page.php">Hosting-page</a></li>
                        <li><a href="about-us.php">About Us</a></li>
                        <li><a href="contact-us.php">Contact Us</a></li>
                        
                    </ul>
                    
                     <!--start mobile manue-->

                    <div class="mobile-manue">
                        <span onclick="openNav()">&#9776</span>
                        <div id="mynav" class="overlay">
                        <a href="javascript:void(0)" onclick="closeNav()" class="closebtn" style="font-size: 4rem; margin-right: 2rem;">&times;</a>
                   
                    <div class="overly-content">
                        <a onclick="closeNav()" href="#home" class="mobile">Home</a>
                        <a onclick="closeNav()" href="hosting-page.html" class="mobile">Hosting Page</a>
                        <a onclick="closeNav()" href="about-us.html">About Us</a>
                        <a onclick="closeNav()" href="contact-us.html">Contact us</a>
                    </div>
                </div>
                </div>
                 <!--end mobile manue-->

            </div>
        </nav>
        <section class="heading-section">

            <div class="row ">
                <div class="hero-text-box">
                    <h2>One Stop Hosting Solution</h2>
                    <h3>Energized Web Hosting is a full service web presence solution. <br> We can help build your website from the ground up.</h3>
                        <a class="btn btn-hero" href="#contact"> wok woth us</a>
                </div>

        </section>
    </header>
   <!--End heade section-->


  
         <!--start contact section section-->
         <section class="contact-section" id="contact">
            <div class="row">
                <h2>get in touch</h2>
                <p class="title-discribtioon">We are small tem denger and developoer,who helps with beg <br> We are small tem denger and developoer,who helps with beg</p>
            </div>
            <div class="row contact-row">
               
                    <form action="connect.php" method="post">
                        <div class="row ">
                            <div class="col span_1_of_2">
                                <input type="text" name="firstName"id="firstName" placeholder="Your Name *" required/>
                            </div>
                            <div class="col span_1_of_2 ">
                               <input type="text" name="email"id="email" placeholder="Your Email *" required/>
                           </div>
                        </div>
                        <div class="row">
                           <textarea name="massage"id="massage" cols="30" rows="10" placeholder="Your Massage *" required></textarea>
                        </div>
                        <div class="row contact-button">
                            <input type="submit" value="SEND MASSAGE" class="btn-hero btn-contact"/>
                        </div>

                    </form>
               
            </div>

        </section>
        <!--end contact  section-->
       <!--start futar  section-->
       <section class="futer-section">
        <div class="row">
            <div class="col span_1_of_4">
               <ul class="futer">
                   <li><a href="#">0028590038502</a></li><br><br>
                   <li><a href="#">info@serverpack.com</a></li><br><br>
                   <li><a href="#">City Avenue, Office 64,<br><br>
                       Floor 6, Milbourne,<br><br>
                       Australia.</a></li>
                   
               </ul>
            </div>
           

            <div class="col span_1_of_4">
               <ul class="futer">
                   <li><a href="#">Company</a></li><br><br>
                   <li><a href="#">About us</a></li><br><br>
                   <li><a href="#">FAQ<br><br>
                       Contact us</a></li>
                   
               </ul>
            </div>

            <div class="col span_1_of_4">
               <ul class="futer">
                   <li><a href="#">Services</a></li><br><br>
                   <li><a href="#">Web Hosting</a></li><br><br>
                   <li><a href="#">Cloud Hosting<br><br>
                       VPS Servers.</a></li>
                   
               </ul>
            </div>

            <div class="col span_1_of_4">
               <ul class="futer">
                   <li><a href="#">Transfer domains</a></li><br><br>
                   <li><a href="#">info@serverpack.com</a></li><br><br>
                   <li><a href="#">Customer Portal<br><br>
                       Support Portal<br><br>
                       Video Tutorials</a></li>
                   
               </ul>
            </div>
            
        </div>

        

      

    </section>
    <!--end futer  section-->

        
    <!-- js script-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="vendors/js/html5shiv.min.js"></script>
    <script src="vendors/js/respond.min.js"></script>
    <script src="vendors/js/selectivizr.js"></script>
    <script src="vendors/newjs/jquery.waypoints.min.js"></script>
    <script src="vendors/js/animated.js"></script>
    <script src="vendors/js/mixitup.min.js"></script>
    <script src="resorces/js/main.js"></script>
</body>
</html>