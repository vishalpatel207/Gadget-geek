<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<style>
      *{
        margin: 0px;
        padding: 0px;
    }
    
h1{
  background-color: black;
  color: white;
  text-align: center;
  font-family: high tower text;
  font-weight: bold;
  padding: 20PX;
  font-size: 80px;
  width: 1550px;
}
    


   a:hover {
   
    color: tomato;
    text-decoration: wavy rgb(0, 0, 0);
    font-size: 25px;
  }

  nav a {

    font-family: Castellar; 
    font-size:20px;
    color: rgb(0, 0, 0);
    padding: 10px;
    position: relative;
    top: 5px;
    left: -35px;
    
   }
  
   nav :hover{

   text-decoration: dashed;
    color:  rgb(255, 255, 255); 
    font-size: 50 ;
  }

  nav {
    
    font-size: 45;
    text-align:left;
    padding: 20px;
    background-color: goldenrod;
    width: 1550px;

  }


  a{
     color:whitesmoke;
     font-size: 30px;
     padding: 20px;
     margin: 20px;
  }


    * {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  /* margin: auto; */
}


/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
    .box{
            width:100%;
            display: flex;
        }
        .container{
            position: relative;
            width: 48%;
            margin-top: 4px;
        }
        .aa{
            width:100%;
            height:450px;
        }
        .txt1{
            font-family: Microsoft JhengHe;
            font-size: 28px;
            width: 48%;
            padding-top: 4px;
            margin-left: 2%;
            font-weight: 20%;
           
        }
         
        .xx{
            width: 99vw;
            height: 850px;
        }
        .txt2{
            font-family: Microsoft JhengHe;
            font-size: 30px;
            width: 48%;
            padding-top: 4px;
            margin-left: 2%;
            height: 12px;
        }
        .uu{
            width: 99vw;
            height: 550px;
        }
        .urvi{
            font-size: 44px;
            font-family: Microsoft JhengHe;
            text-align: center;
        }
        p{
            font-size: 30px;
            text-align: center;
            font-family: Microsoft JhengHe;

        }
      .vishal{
        position: relative;
        left: -295px;
        height: 140px;
        bottom: 5px;
      }
       .ajit{
        position: absolute;
        left:1140px ;
        top: 192px;
        word-spacing: 12px;
      } 
    .urvip{
      position: relative;
      top: -6px;
      left: 12px;
    }
</style>
<body>
  <h1> 
    <img class="vishal" src="logo.jpg" alt="logo" > 
     GADGET GEEKS</h1>
  <nav>
    <div class="urvip">
    <b>
        <a href="" > HOME </a>
        <a href="store.html" >STORE</a>
  
        <a href="urvi2.html" >LEARN MORE</a>
        <a href="about.html">ABOUT US</a>
    </b>

  </div>
  <div class="ajit">
    <b> <a href="signin.php">Sign-In</a>
     <a href="signup2.php">Sign-Up</a>
     
   </b>
</nav>

   <!-- slider code in js -->
    <div class="slideshow-container">
    
    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="com_slider.jpg" style="width:155%"  height="490px">
      <div class="text"></div>
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="com.jpg" style="width:155%"  height="490px">
      <div class="text"></div>
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="slider3.jpg" style="width:155%"  height="490px">
      <div class="text"></div>
    </div>
    
    </div>
    <br>
    
    <div style="text-align:center">
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
    </div>
    
    <script>
    let slideIndex = 0;
    showSlides();
    
    function showSlides() {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}    
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
    </script>
    <div class="box">
        <div class="container">
            <img src="m1.jpg"class="aa">
        </div>
        <div class="txt1">
          <b>  What is MotherBoard? </b><br>
       
            → A motherboard is the main printed circuit board (PCB) in a computer.Motherboards can be found in virtually all computers, especially desktop and laptop PCs. The components that connect through them include chipsets, central processing units (CPU) and memory. The external peripherals include Wi-Fi, Ethernet and graphics cards with the graphics processing unit GPU.The PCB of a large motherboard may include six to 14 layers of copper connecting traces and copper planes for power and signal isolation. Other components get added motherboard through expansion slots.A heatsink and fan manage the heat components such as the CPU generate.Motherboard manufacturers include ASRock, Asus, Gigabyte Technology, Intel and Micro-Star International. 
        
          </div>
    </div>
    <div class="container">
        <img src="computer.jpg" class="xx">
        </div>
    <div class="box">
        <div class="container">
            <img src="laptop1.jpg" class="aa">
        </div>
        <div class="txt2">
          <b>  What is laptop? </b><br>
            → A laptop computer or notebook computer, also known as a laptop or notebook for short, is a small, portable personal computer (PC). Laptops typically have a clamshell form factor with a flat panel screen (usually 11–17 in or 280–430 mm in diagonal size) on the inside of the upper lid and an alphanumeric keyboard and pointing device (such as a trackpad and/or trackpoint) on the inside of the lower lid, although 2-in-1 PCs with a detachable keyboard are often marketed as laptops or as having a "laptop mode".[1][2] Most of the computer's internal hardware is fitted inside the lower lid enclosure under the keyboard, although many laptops have a built-in webcam at the top of the screen and some modern ones even feature a touch-screen display.
        </div>
    </div>
    <div class="container">
        <img src="keyboard.jpg" class="uu">
        </div>
    <div class="urvi">
   <h3> <b>Keyboard</b> </h3>
   </div>
   <p>A computer keyboard is an input device used to enter characters and functions into the computer system by pressing buttons, or keys. It is the primary device used to enter text. A keyboard typically contains keys for individual letters, numbers and special characters, as well as keys for specific functions. A keyboard is connected to a computer system using a cable or a wireless connection.Typical keyboard for a desktop computer typical keyboardMost keyboards have a very similar layout. The individual keys for letters, numbers and special characters are collectively called the character keys.</p>



  </body>
</html>