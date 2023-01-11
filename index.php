<?php 
require 'config.php';
if(!empty($_SESSION["id"])){
	$id = $_SESSION["id"];
	$result = mysqli_query($conn, "SELECT * FROM user WHERE id = $id");
	$row = mysqli_fetch_assoc($result);
} 
else{
	header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width-device-width, initial-scale=1.0">
<title>Welcome RenS Digital Printing</title>
<link rel="stylesheet" href="index2.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@900&family=Montaga&family=Montserrat:wght@200;400;500;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    

<link rel="apple-touch-icon" sizes="280x280" href="favicon.png">
<link rel="icon" type="image/png" sizes="40x40" href="favicon.png">
<link rel="icon" type="image/png" sizes="30x30" href="favicon.png">
<link rel="manifest" href="/site.webmanifest">
</head>
<body>
    <div class="circle1"></div>
    <div class="circle2"></div>
    <div class="circle3"></div>
    <div class="circle4"></div>
    <div class="circle5"></div>
    <div class="circle6"></div>
    <div class="circle7"></div>
    <div class="circle8"></div>
    <nav>    
        <a href="Home.html"><img src="logo.png"></a>
        <div class="action">
        <div class="profile" onclick="menuToggle();">
            <img src="dropdown-menu.png" alt="">
        </div>
            <div class="menu">
            <h3>
                Hi, User! 
                <div>
                    WELCOME
                </div>
            </h3>
            <ul>
                <li>
                    <span class="material-icons icons-size">checklist</span>
                    <a href="t_c.htm">TERMS & CONDITIONS</a>
                </li>
                <li>
                    <a href="privacy-policy.htm">PRIVACY POLICY</a>
                    <span class="material-icons icons-size">shield</span>
                    
                </li>
                <li>
                    <span class="material-icons icons-size">logout</span>
                    <a href="logout.php">LOGOUT</a>
                </li>
            </ul>
        </div>
    </div>        
        <div class="nav-links">
            <ul>
               <li><a href="prod-srvcs.html">PRODUCTS & SERVICES</a></li>
               <li><a href="str-direct.html">STORE DIRECTORY</a></li>
               <li><a href="cntct-us.html">CONTACT US</a></li>
            </ul>
        </div>
    </nav>

    <div class="tag-lne">
    <h1>WE PRINT EVERYTHING</h1>
    <h2>WHAT YOU WANT</h2>
    <p>We are pleased that you visited our website to learn more about<br> RenS Digital Printing Shop and its history. <br> Click "Discover Us" to learn more.</p>
    
    <a href="aboutus.htm"><button>Discover Us</button></a>
        
    </div>
    
    <section class="prod-srvcs">
    <h1>OUR PRODUCTS & SERVICES</h1>
    <h2>Our Products & Services</h2>
    <p>This is the Products and Services of RenS Digital Printing Shop<br>To know the Price list. Go to Products & Services Section.</p>
    
<div class="logo-prod-srcvs">
<img src="logo.png">
</div>
    <div class="circle9"></div>
    <div class="circle10"></div>
    <div class="circle11"></div>
    <div class="circle12"></div>
    <div class="circle13"></div>
    
    <div class="prod-srvcs-des1">
    <img src="souvenir.jpg">
        <p>Souvenirs</p>
    </div>
    
    <div class="prod-srvcs-des2">
    <img src="mug.jpg">
        <p>Mug Printing</p>
    </div>
    
    <div class="prod-srvcs-des3">
    <img src="invcard.jpg">
        <p>Invitation Printing</p>
    </div>
    
    <div class="prod-srvcs-des4">
    <img src="tarps.jpg">
        <p>Tarpaulin Printing</p>
    </div>
    
    <div class="prod-srvcs-des5">
    <img src="shirt.jpg">
        <p>T-shirt Printing</p>
    </div>
    
    <div class="prod-srvcs-des6">
    <img src="photop.jpg">
        <p>Photo Printing</p>
    </div>
    
    <div class="prod-srvcs-des7">
    <img src="studio.png">
        <p>Studio Shot</p>
    </div>
    
    <div class="prod-srvcs-des8">
    <img src="rushid.jpg">
        <p>Rush ID</p>
    </div>
    
    <div class="prod-srvcs-des9">
    <img src="gradpromo.png">
        <p>Graduation Photo Package</p>
    </div>
    
    <div class="prod-srvcs-des10">
    <img src="pvcid.jpg">
        <p>PVC ID</p>
    </div>
</section>
    
    <section class ="str-direct">
    <h1>STORE DIRECTORY</h1>
    <h2>Store Directory</h2>
    <p>RenS Digital Printing Shop have a stores in different parts of Montalban, Rizal<br> This Store Directory aggregates your shopping experiences <br>to assist you where to find our store. </p>
    
        
    <div class="logo-str-direct">
        <img src="logo.png">
        </div>    
    
    <div class="circle14"></div>
    <div class="circle15"></div>
    <div class="circle16"></div>
    <div class="circle17"></div>

    <a href="/str-direct.htm"><button>Find Us</button></a>
    
    </section>
    
    <section class="cntct-us">
        <h1>CONTACT US</h1>
    <h2>Contact Us</h2>
    <p>A contact us page offers direction for our current and potential customers <br> and provides them with information on how they we contact us.</p>
        
    
        <div class="logo-cntct-us">
        <img src="logo.png">
        </div>

    <div class="circle18"></div>
    <div class="circle19"></div>
    <div class="circle20"></div>
    <div class="circle21"></div>
    <div class="circle22"></div>
    <div class="circle23"></div>
    <div class="circle24"></div>
    <div class="circle25"></div>
        
        <a href="cntct-us.html"><button>Call Us Now</button></a>
        
    </section>
    
    <div id="header">
    <div class="menu">
        <a href="index.php">TOP</a>
        <a href="prod-srvcs.htm">PRODUCTS & SERVICES</a>
        <a href="str-direct.htm">STORE DIRECTORY</a>
        <a href="cntct-us.html">CONTACT US</a>
        </div>
    </div>

    <script>
    
        window.onscroll = function(){
          scroll();  
        };
        
        function scroll() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("header").style.top = "0";
            }
            
            else {
                document.getElementById("header").style.top = "-90px";
            }
        }
    
    </script>
    
    <script>
        function menuToggle(){
            const toggleMenu = document.querySelector('.menu');
            toggleMenu.classList.toggle('active')
        }
    </script>
    
    <footer>
        <div class="foot-content">
            <img src="phone-logo.png">
            <p>0921 618 4457</p>
        </div>
        
        <div class="address">
        <p>147 MH Del Pilar St, Brgy. San Rafael, Rodriguez, Rizal, Philippines</p>
        </div>
        
        <div class="mail-add">
        <p>rs_digital@yahoo.com</p>
        </div>
        
        <div class="logo-terms">
            <a href="t_c.htm"><p>TERMS & CONDITIONS</p></a>
            <img src="b_w-logo.png">
            
        </div>
        
        <div class="Mess-pri">
            <a href="#"><img src="messenger-logo-white.png"></a>
            <a href="privacy-policy.htm"><p>PRIVACY POLICY</p></a>
        </div>
        
        <div class="fb-copy">
            <a href="#"><img src="fb-logo-white.png"></a>
            <p>Copyright 2022<br>Rens Digital Printing Services</p>
        </div>
    </footer>
    
    </body>
</html>