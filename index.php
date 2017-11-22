<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" media="(min-width: 768px)" href="desktop.css"/> <!-- desktop version -->
        <link rel="stylesheet" type="text/css" media="(max-width: 767px)" href="tablet.css"/> <!-- tablet version -->
        <meta name="viewport" content = "initial-scale = 1.0"/>
        <title>Sunnylight Solar</title>
    </head>
    <body>

        <div class="header">
            <img id="logo" src="images/SunnylightLogo.png" alt="Sunnylight Logo"/>
            <div id="headContact">
            <p id="headFirst">For Enquiry Please Call<p>
            <p id="headPhone">07 3123 4567<p>
            <!--<p id="headEmail">info@sunnylightsolar.com.au</p> -->
            <a id ="headEmail" href ="mailto:grimes.wong.griffithuni.edu.au">info@sunnylightsolar.com.au</a>
            </div>
        </div>

        <div class="ads">
            <img id="homeAds" src="images/home/green-energy.jpg" alt="Green Energy"/>
        </div>

        <div id="navigation">
            <nav>
                <ul>
                    <li><a href="index.php"/>Home</a></li>
                    <li><a href="aboutUs.html">About Us</a></li>
                    <li><a href="products.php">Solar Products</a></li>
                    <li><a href="systems.html">Solar Systems</a></li>
                    <li><a href="newsletter.php">Subscribe Newsletter</a></li>
                    <li><a href="contactUs.html">Contact Us</a></li>
                </ul>
            </nav>
        </div>

        <div id="mainbody"> <!-- consist two divisions -->

            <div class="content">
                <h2>Make Better World By Solar</h2>
                </br>
                <p>Sun light is the renewable energy which is an unlimited resource and is an environment pollution free energy like wind.</p>
                </br>
                <p> Our goal is to make the world a better place through better energy sources. We are dedicated to reducing  greenhouse gas emissions over the world. We can provide your business with a solar solar system that creates electrical energy from the sun. SunnyLight Solar also has helpful conservation tips and affordable renewable energy offsets.</p>
                </p>
                </br>
                <img id="job1" src="images/home/PoweredbytheSun.jpg" alt="Power by the Sun"/>
                <img id="job1" src="images/home/HowDoSolarPanelsWork400W.gif" alt="Green Energy"/>
                <img id="job1" src="images/home/EnergyUsage.jpg" alt="Energy Usage"/>

            </div>
            <div id="enquiry">
                <h2>Enquiry Form</h2>
                <form>
                <!-- <form action="MAILTO:grimes.wong@griffithuni.edu.au" method="post" enctype="text/plain"> -->
                        <input type="text" name="name" id="name" class="textWidth" placeholder="Name"/>
                        <input type="text" name="contactNo" id="contactNo" placeholder="Contact Number"/>
                        <input type="text" name="email" id="email" placeholder="Email"/>
                        <textarea name="message" rows="5" cols="22" id="message" placeholder="Message"></textarea>
                        <input class="submit-button" type="submit" value="Send Enquiry" method="get" action="index.php" onclick="alert('Thank you for your enquiry, we will response your enquiry as soon as possible!!!')"/>
                </form>
            </div>
        </div>  <!-- mainbody end tag -->

        <div class="footer">
            <div id="footerIn">
                <div id="sitemap">
                   <h3 id="sitemapText">Site Map</h3>
                    <ul>
                        <li><a href="index.php"/>Home</a></li>
                        <li><a href="aboutUs.html">About Us</a></li>
                        <li><a href="products.php">Solar Products</a></li>
                        <li><a href="systems.html">Solar Systems</a></li>
                        <li><a href="newsletter.php">Subscribe Newsletter</a></li>
                        <li><a href="contactUs.html">Contact Us</a></li>
                    </ul>

                </div>
                <div id="contactdetails">
                    <dt>SunnyLight Solar</dt>
                    </br>
                    <h1>07 3123 4567</h1>
                    </br>
                    <dd><a id="emailBottom" href ="mailto:grimes.wong.griffithuni.edu.au">info@sunnylightsolar.com.au</a></dd>
                    </br>
                    <dd>Address: 2/53 Boyland Avenue,</dd>
                    <dd>Coopers Plains, QLD 4108</dd>

                </div>
            </div>
        </div>

        <div class="copyright">
            <h5>Sunnylight Solar Copyright 2016</h5>
        </div>

    </body>
</html>
