
<?php
    require_once 'productQueryDb.php';   // load the php command functions (only load once and terminate if can't load the file)*/

    //Search items names
    //panelBrand & panelSize
    //inverterBrand & inverterSize

    //Deciding which search button is chosen
     if ($_GET["panelButton"]) {  // URL Variable $_GET
        $searchTerm = $_GET["panelSize"];   // get the name of search item
    } else if ($_GET["inverterButton"]) {
        $searchTerm = $_GET["inverterSize"];
    } else {

    }
    $dataPanel = getPanels($searchTerm);    // get result from the productQueryDb.php functions */
    $dataInverter = getInverters($searchTerm);

?>

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
            <img id="logo" src="images/SunnylightLogo.png" alt:"Sunnylight Logo"/>
            <div id="headContact">
            <p id="headFirst">For Enquiry Please Call<p>
            <p id="headPhone">07 3123 4567<p>
            <!--<p id="headEmail">info@sunnylightsolar.com.au</p> -->
            <a id ="headEmail" href ="mailto:grimes.wong.griffithuni.edu.au">info@sunnylightsolar.com.au</a>
            </div>
        </div>

         <div class="ads">
            <img src="images/solarProducts/Ad1.gif" alt:"Advertisement 2"/>
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

        <div> <!-- consist two divisions -->
            <div id="solarBorder">
                <h1 id="systemh1">Solar Products</h1>
                <p class="solarDecription">Sunnylight Solar provides warranties on the components of our solar power systems. We have a 5-year warranty on inverters and a 10-year warranty on all other parts (except panels).</p>

                <p class="solarDecription">As our solar panels are the most costly of our materials for installation, they come with a performance warranty of 25 years. We ensure that the power output, even after a quarter of a century of use, will not drop below 80%.</p>
            </div>
            <div id="serachBoxOutline">
                <h2 id="searchH2">Search Products</h2>
                <p>Please use the below search boxes for filtering the desired solar panels or solar inverters </p>

                <div id="searchBox">
                    <div class="box">
                        <h2>Search Panels</h2>
                         <form>
                            <select name="panelSize" id="panelSize">
                                <option value="">Panel Size</option>
                                <option value="250W">250W</option>
                                <option value="255W">255W</option>
                                <option value="270W">270W</option>
                            </select>
                            <input class="submit-button" type="submit" name="panelButton" value="Panel Search" method="get"/>
                            <!--<input class="submit-button" type="submit" value="Panel Search" method="get" action="products.php"/> -->
                        </form>
                        </div>
                    <div class="box">
                        <h2>Search Inverters</h2>
                          <form>
                            <select name="inverterSize" id="inverterSize">
                                <option value="">Inverter Size</option>
                                <option value="3KW">3KW</option>
                                <option value="5KW">5KW</option>
                            </select>
                            <input class="submit-button" type="submit" name="inverterButton" value="Inverter Search" method="get" />
                        </form>
                    </div>
                </div>

                <!-- Result will be showed below the search boxes -->
                <div id="resultBox">
                    <table id="showPanelResult">
                        <h2>Search Result</h2>
                            <thead>
                                <tr>
                                    <th>Brand</th>
                                    <th>Size</th>
                                    <th>Type</th>
                                    <th>Model No.</th>
                                </tr>
                            </thead>

                            <?php
                                if ($dataPanel != null) {
                                    foreach ($dataPanel as $value) {
                                        echo "<tbody>";
                                            echo "<tr>";
                                                echo "<td>" .$value["BRAND"]. "</td>";
                                                echo "<td>" .$value["SIZE"]. "</td>";
                                                echo "<td>" .$value["TYPE"]. "</td>";
                                                echo "<td>" .$value["MODELNO"]. "</td>";
                                            echo "</tr>";
                                        echo "</tbody>";
                                    }
                                }

                                if ($dataInverter != null) {
                                    foreach ($dataInverter as $value) {
                                        echo "<tbody>";
                                            echo "<tr>";
                                                echo "<td>" .$value["BRAND"], "</td>";
                                                echo "<td>" .$value["SIZE"], "</td>";
                                                echo "<td>" .$value["TYPE"], "</td>";
                                                echo "<td>" .$value["MODELNO"], "</td>";
                                            echo "</tr>";
                                        echo "</tbody>";
                                    }
                                 }
                            ?>

                    </table>
                </div>
            </div>

            <div class="solarProducts">
                <div class="leftProduct">
                    <h1>Growatt 3000TL Inverter</h1>
                    <h2>Features</h2>
                    <ul>
                        <li>TL Series: Standard transformerless Inverters</li>
                        <li>Maximum efficiency of 97.8.% and wide input voltage range</li>
                        <li>Internal DC Switch</li>
                        <li>Transformerless H6 Topology</li>
                        <li>Compact Design</li>
                        <li>Bluetooth Technology</li>
                    </ul>
                    </br>
                    <a class="downloadLink" href = "http://www.growatt.com/html/2013/12/20/201312200257174193044.html">Download Data Sheet</a>
                </div>
                <div class="rightProduct">
                    <figure>
                        <img src="images/solarProducts/Growatt3000TL.png" alt="Growatt 3000TL" title="Growatt 3000TL Inverter"/>
                        <figcaption>
                            Growatt 3000TL (For reference only)
                        </figcaption>
                    </figure>
                </div>
            </div>
             <div class="solarProducts">
                <div class="leftProduct">
                    <h1>Growatt 5000MTL Inverter</h1>
                    <h2>Features</h2>
                    <ul>
                        <li>MTL Series: Dual Maximum Power Point Tracking (MPPT) Inverters</li>
                        <li>Mutli MPP Controller</li>
                        <li>Maximum efficiency of 97.9.% and wide input voltage range</li>
                        <li>Internal DC Switch</li>
                        <li>Transformerless H6 Topology</li>
                        <li>Compact Design</li>
                        <li>Bluetooth Technology</li>
                    </ul>
                    </br>
                    <a class="downloadLink" href = "http://www.growatt.com/html/2014/01/08/2014010802123457635512.html">Download Data Sheet</a>
                </div>
                <div class="rightProduct">
                    <figure>
                        <img src="images/solarProducts/Growatt5000MTL.jpg" alt="Growatt 5000MTL" title="Growatt 5000MTL Inverter"/>
                        <figcaption>
                            Growatt 5000MTL (For reference only)
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="solarProducts">
                <div class="leftProduct">
                    <h1>SMA Sunnyboy 3000TL/5000TL Inverter</h1>
                    <h2>Features</h2>
                    <ul>
                        <li>Maximum efficiency of 97% and wide input voltage range</li>
                        <li>Multistring technology in all power classes</li>
                        <li>Shade management with OptiTrac Global Peak</li>
                        <li>Maximum DC input voltage of 750V</li>
                        <li>Fanless</p>
                        <li>Bluetooth and Speedwire / Webconnect technolog as standard</li>
                    </ul>
                    </br>
                    <a class="downloadLink" href = "http://files.sma.de/dl/15330/SB5000TL-21-DEN1551-V20web.pdf">Download Data Sheet</a>
                </div>
                <div class="rightProduct">
                    <figure>
                        <img src="images/solarProducts/SB-3000TL_4000TL_5000TL.png" alt="SMA Sunnyboy 3000TL" title="SMA Sunnyboy 3000TL" />
                        <figcaption>
                            SMA Sunnyboy 3000TL/5000TL (For reference only)
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="solarProducts">
                <div class="leftProduct">
                    <h1>Delta 5kw H5A Inverter</h1>
                    <h2>Features</h2>
                    <ul>
                        <li>High efficiency single phase transformerless string inverters with 2 MPP trackers</li>
                        <li>Maximum efficiency up to 97.5 %</li>
                        <li>Flexible system design</li>
                        <li>Lightweight and compact design greatly simplifies installation</li>
                        <li>Intelligent cooling design with an innovative heatsink</li>
                    </ul>

                    </br>
                    <a class="downloadLink" href = "http://www.solar-inverter.com/download/Country_Availability_List_for_Delta_Solar_Inverters_DataId_1303169_Version_16.pdf" >Download Data Sheet</a>
                </div>
                <div class="rightProduct">
                    <figure>
                        <img src="images/solarProducts/DELTA_INVERTERS.jpg" alt="Delta 5kw H6A" title="Delta 5kw H6AL"/>
                        <figcaption>
                            Delta 5kw H6A (For reference only)
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="solarProducts">
                <div class="leftProduct">
                    <h1>Tianwei 250w Poly Panel</h1>
                    <h2>Features</h2>
                    <ul>
                        <li>High-performance modules with reliable quality</li>
                        <li>Manufacturng warranty: 10years</li>
                        <li>Industry leading power output warranty</li>
                    </ul>
                    </br>
                    <a class="downloadLink" href = "http://www.twnesolar.com/uploadfiles/product/1361326947_wxXuoxTTEy.pdf" >Download Data Sheet</a>
                </div>
                <div class="rightProduct">
                    <figure>
                        <img src="images/solarProducts/TianweiPoly.jpg" alt="Tianwei 250W Poly" title="Tianwei 250W Poly"/>
                        <figcaption>
                            Tianwei 250W Poly (For reference only)
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="solarProducts">
                <div class="leftProduct">
                    <h1>Q-Cell 255w Poly Panel</h1>
                     <h2>Features</h2>
                    <ul>
                        <li>Low levelized cost of electricity</li>
                        <li>Innovative all-weather technology</li>
                        <li>Enduring hight performace/li>
                        <li>Light-weight quality frame</li>
                        <li>Maximum cost reductions</li>
                        <li>Safe electronics</li>
                        <li>A reliable investment</li>
                    </ul>
                    </br>
                    <a class="downloadLink" href = "https://www.q-cells.com/fileadmin/Website_Relaunch_2014/4_Products/4.1_Solar_Modules/Q.PRO-G4/Hanwha_Q_CELLS_Data_sheet_QPRO-G4_255-265_2015-03_Rev02_EN.pdf" >Download Data Sheet</a>
                </div>
                <div class="rightProduct">
                    <figure>
                        <img src="images/solarProducts/Q.Pro-G2 230-250.jpg" alt="Q-Cell 255W Poly" title="Q-Cell 255W Poly"/>
                        <figcaption>
                            Q-Cell 255W Poly (For reference only)
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="solarProducts">
                <div class="leftProduct">
                    <h1>Canadian Solar 270W Mono Panel</h1>
                     <h2>Features</h2>
                    <ul>
                        <li>Excellent module efficiency of up to 16.8%</li>
                        <li>Outstanding low irradiance performance 96.5%</li>
                        <li>Positive power tolerance of up to 5W</li>
                        <li>High PTC rating of up to 90.94%</li>
                        <li>Heavy snow load up to 5400 Pa, wind load up to 2400 Pa</li>
                        <li>Salt mist, and ammonia resistance, for seaside, and farm environments</li>
                    </ul>
                    </br>
                    <a class="downloadLink" href = "http://www.canadiansolar.com/fileadmin/user_upload/downloads/datasheets/au/Canadian_Solar-Datasheet-CS6KM_v5.4C1au.pdf" >Download Data Sheet</a>
                </div>
                <div class="rightProduct">
                    <figure>
                        <img src="images/solarProducts/CS6P-M.jpg" alt="Canadian olar 270W Mono" title="Canadian Solar 270W Mono"/>
                        <figcaption>
                           CanadianSolar 270W Mono (For reference only)
                        </figcaption>
                    </figure>
                </div>
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
