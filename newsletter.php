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
            <img src="images/newsletter/Newsletter.png" alt="Sunnylight Logo"/>
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
                <h2>Newsletter Subscription</h2>
                </br>
                <p><strong>For Our Value Wholesales Customer:</strong></p>
                </br>
                <p>If you're interest in our products, please feel to to subscribe our newsletter, we will provide the updates newsletter and price list upon your subscription. Thank You.</p>
                </br>

            </div>
            <div id="subscribe">
                <h2>Subscribe Newsletter</h2>
                <form>
                        <input type="text" name="firstName" placeholder="First Name"/>
                        <input type="text" name="lastName" placeholder="Last Name"/>
                        <input type="text" name="contactNo" placeholder="Contact Number"/>
                        <input type="text" name="email" placeholder="Email"/>
                        <input type="text" name="companyName" placeholder="Company Name"/>
                        <input type="text" name="abn" placeholder="ABN"/>
                        <input type="text" name="email" placeholder="Job Position"/>
                        <input class="submit-button" id="subscribeButton" type="submit" value="Send Subscription" method="get" action="newsletter.php" onclick="alert('Thank you for your subscription, any updated newsletter or price list will be email to you!!!')"/>
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
