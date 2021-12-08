
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
                        <li><a href="index.php" class="logout">Log Out</a></li>
                        
                        
                    </ul>
                    
                     <!--start mobile manue-->

                    <div class="mobile-manue">
                        <span onclick="openNav()">&#9776</span>
                        <div id="mynav" class="overlay">
                        <a href="javascript:void(0)" onclick="closeNav()" class="closebtn" style="font-size: 4rem; margin-right: 2rem;">&times;</a>
                   
                    <div class="overly-content">
                    <a onclick="closeNav()" href="index2.php" class="mobile">Home</a>
                    <a onclick="closeNav()" href="hosting-page.php" class="mobile">Hosting Page</a>
                    <a onclick="closeNav()" href="about-us.php">About Us</a>
                    <a onclick="closeNav()" href="contact-us.php">Contact us</a>
                    
                    </div>
                </div>
                </div>
                 <!--end mobile manue-->

            </div>
        </nav>

        <section class="heading-section">

            <div class="row">
                <div class="hero-text-box">
                    <h2>One Stop Hosting Solution</h2>
                    <h3>Energized Web Hosting is a full service web presence solution. <br> We can help build your website from the ground up.</h3>
                        <a class="btn btn-hero" href="#contact"> wok woth us</a>
                </div>

        </section>
        


        </div>
    </header>
   <!--End heade section-->

   <section class="domain-section">

    <div class="container">
        <div class="row">
            <div class="col span_1_of_2">
                <h2>Search Unique Domain!</h2>
                <p>Get your perfect domain name starting from 0.99$ for the first year and free <br>domain privacy included build.</p>
            </div>
            <div class="col span_1_of_2 serch-btn">
                <form class="example" action="action_page.php" style="margin:auto;max-width:600px">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                  </form>
                  <div class="img-style">
                      <span class="domain">
                        <img src="resorces/img/xyz-logo-color.svg" class=" shadow" alt="XYZ" width="80" height="80">
                        
                      </span>
                      <span class="domain">
                        <img src="resorces/img/com.png" class=" shadow" alt="XYZ" width="80" height="80">
                        
                      </span>
                      <span class="domain">
                        <img src="resorces/img/net.png" class=" shadow" alt="XYZ" width="80" height="80">
                        
                      </span>
                      <span class="domain">
                        <img src="resorces/img/org.png" class=" shadow" alt="XYZ" width="80" height="80">
                        
                      </span>
                      <span class="domain">
                        <img src="resorces/img/store.png" class=" shadow" alt="XYZ" width="80" height="80">
                        
                      </span>
                      
            
                      
                  </div>
            </div>
        </div>
    </div>

   </section>

    <!--start services section--> 

    <section class="services-section js--services-section clerfix" id="service">
        <div class="row responce">
            <h2>Our Wide Range of Plans</h2>
            <p class="title-discribtioon">We provide SSD Hosting with Top security and 99.99% up-time. We are top Domain Hosting provider in <br><br> Bangladesh.</p>
                </div>
                <div class="row">
                    <div class="col span_1_of_3 box">
                       
                        <h3>Web Hosting</h3>
                        <p class="little-describtion">Perfect for smaller websites and blogs. Comes with cPanel, PHP, LIteSpeed and more.</p>
                        <p><span class="doller">$0.62</span><span>/month</span></p>
                        <hr class="style-six">
                        <div class="hed-5">

                            <h5>Free Domain Name</h5>
                            <h5>cPanel Control Panel</h5>
                            <h5>  Free SSL Certificate</h5>
                            <h5>One-Click Easy Installer</h5>
                            <h5>Litespeed and SSD Powered</h5>
                            <h5> CloudLinux Optimized</h5>
                            <h5>FREE Daily Backup</h5>

                        </div>

                        <button class="btn1"><a href="#">View Plans</a></button>
                        
                        
                    </div>

               
                    <div class="col span_1_of_3 box">
                       
                        <h3>Reseller Hosting</h3>
                        <p class="little-describtion">Start your hosting business today. Comes with free WHM, cPanel and WHMCS</p>
                        <p><span class="doller">$10.93</span><span>/month</span></p>
                        <hr class="style-six">
                        <div class="hed-5">

                            <h5>Free Domain Name</h5>
                            <h5>cPanel & WHM Control Panel</h5>
                            <h5> Free Unlimited SSLs</h5>
                            <h5>Litespeed and SSD Powered</h5>
                            <h5>Litespeed and SSD Powered</h5>
                            <h5>CloudLinux Optimized</h5>
                            <h5>White-label Server</h5>
                          

                        </div>

                        <button class="btn1"><a href="#">View Plans</a></button>
                        
                        
                    </div>

                    
                    <div class="col span_1_of_3 box">
                       
                        <h3>Cloud VPS</h3>
                        <p class="little-describtion">With KVM Hypervisor implementation for a cost effective dedicated server experience.</p>
                        <p><span class="doller">$10</span><span>/month</span></p>
                        <hr class="style-six">
                        <div class="hed-5">

                            <h5>Secure KVM Virtualisation</h5>
                            <h5>Fast SSD Drives</h5>
                            <h5>Failover Cloud Platform</h5>
                            <h5>Whitelabel Servers</h5>
                            <h5>Free IPv6</h5>
                            <h5>Free OS reinstallation Support</h5>
                            <h5>Full Root Access</h5>

                        </div>

                        <button class="btn1"><a href="#">View Plans</a></button>
                        
                        
                    </div>
        </div>

    </section>

    <!--End services section--> 

    
    <!--Hosting solution-->
    
    <section class="hosting-section  js--services-section clerfix" id="service">
        <div class="row responce">
            <h2>We Have a Hosting Solution For You</h2>
            <p class="title-discribtioon">Hosting For Every Website From small business to enterprise, <br>we've got you covered!</p>
                </div>
                <div class="row">
                    <div class="col span_1_of_3 box">
                       
                        <h3>Shared Hosting</h3>
                        <p class="little-describtion">Our Shared Web Hosting Offers Excellent SLA - Guaranteed Uptime, Daily Backups, Full Management, and Support along the Way.</p>
   
                    </div>

                    <div class="col span_1_of_3 box">
                       
                        <h3>Reseller Hosting</h3>
                        <p class="little-describtion">Fully Loaded Reseller Accounts - Everything you need to Provide Reliable White-label Web Hosting Services to Your Clients Worldwide.</p>
   
                    </div>
               
                    <div class="col span_1_of_3 box">
                       
                        <h3>VPS Hosting</h3>
                        <p class="little-describtion">Our Virtual Private Servers are Fully Customizable Complete with Root Access, VPS Control Panel and both OpenVZ and KVM Virtualizations.</p>
   
                    </div>

                    
        </div>


        <div class="row">
            <div class="col span_1_of_3 box">
               
                <h3>Managed VPS Hosting</h3>
                <p class="little-describtion">Our cloud VPS servers are fully managed so that you don't have to worry about setting up the VPS on your own.</p>

            </div>

            <div class="col span_1_of_3 box">
               
                <h3>Dedicated Server</h3>
                <p class="little-describtion">Enterprise Class Dedicated Servers In All Major Markets. It Offers True Performance, optional Management, and SLA - Guaranteed Uptime.</p>

            </div>
       
            <div class="col span_1_of_3 box">
               
                <h3>Domain Names</h3>
                <p class="little-describtion">FREE Add-ons with every Domain Name! Get over $100 worth of Free Services with every Domain you Register.</p>

            </div>

            
</div>

    </section>
    <!--End hosting solution-->
  
      <!--start portfolio section-->

      <section class="portfolio-section" id="experence">
            <div class="row">
                <h2>What Our Customers Say About Us?</h2>
                <p class="skill-discribtioon">Below is a selection of some of our high-profile clients.<br> Please read their opinion and reviews about us and our services!</p>
            </div>
            <div class="row">
            <div class="portfolio-button">
                <button type="button" data-filter="all"></button>
                <button type="button" data-filter=".apps"></button>
                <button type="button" data-filter=".web"></button>
                
                <button type="button" data-filter=".icon"></button> 
                
            </div>
        </div>
        <div class="row container">
            <div class="col span_1_of_2 box mix web ">
                <h3>It's Really a good site.</h3>
                <p class="little-describtion">It's really a good site for hosting.. Trust me. You can believe the site. They are not fault. they always Give your best. They help me many times To solve my problems. so I love the site he was.</p>
                
            </div>
            <div class="col span_1_of_2 box mix web">
                
                <h3>It's Really a good webhosting and domain providing site</h3>
                <p class="little-describtion">In any problem they solve it quickly. I love their services.</p>
            </div>
           
            
        </div>

        <div class="row container">
            <div class="col span_1_of_2 box mix ">
                <h3>It's Really a good site.</h3>
                <p class="little-describtion">It's really a good site for hosting.. Trust me. You can believe the site. They are not fault. they always Give your best. They help me many times To solve my problems. so I love the site he was.</p>
                
            </div>
            <div class="col span_1_of_2 box mix">
                
                <h3>It's Really a good webhosting and domain providing site</h3>
                <p class="little-describtion">In any problem they solve it quickly. I love their services.</p>
            </div>
           
            
        </div>
         <!--a heid-->
         <button class="btn1">View Plans</button>
      </section>
        <!--end portfolio section-->

        <section class="services-section js--services-section clerfix" id="service">
    
    <div class="row">
        <div class="col span_1_of_3 box">
           
           
            <img src="resorces/img/1.jpeg" alt="Blog">
            <h3>Reviews of our clients</h3>
            <p class="little-describtion">Perfect for smaller websites and blogs. Comes with cPanel, PHP, LIteSpeed and more.</p>
            <hr class="style-six">
            
            <div class="hed-5">
            </div>

            <button class="btn1"><a href="#">Contact</a></button>
            
        </div>
        <div class="col span_1_of_3 box">
           
           
           <img src="resorces/img/3.jpg" alt="Blog">
           <h3>Reviews of our clients</h3>
           <p class="little-describtion">Perfect for smaller websites and blogs. Comes with cPanel, PHP, LIteSpeed and more.</p>
           <hr class="style-six">
           
           <div class="hed-5">
           </div>

           <button class="btn1"><a href="#">Contact</a></button>
           
       </div>

       <div class="col span_1_of_3 box">
           
           
           <img src="resorces/img/2.jpg" alt="Blog">
           <h3>Reviews of our clients</h3>
           <p class="little-describtion">Perfect for smaller websites and blogs. Comes with cPanel, PHP, LIteSpeed and more.</p>
           <hr class="style-six">
           
           <div class="hed-5">
           </div>

           <button class="btn1"><a href="#">Contact</a></button>
           
       </div>
   

</div>

</section>
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