<?php
session_start();

if(isset($_SESSION['first'])){
header("location: order_now.php");
}
?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
        <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/animate.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/animate2.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/animate6.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/animate7.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/animate9.css">




        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,300italic' rel="stylesheet" type="text/css">
        <title>SpiceBox</title>

    </head>
    <body>
        <header>
         <nav>
            <div class="row">
                <img src="resources/img/company.jpg" alt="logo" class="logo">
                <ul class="main-nav">
                    <li><a href="#id0"  >Home </a></li>
                    <li><a href="#id1" >Meal Plans </a></li>
                    <li><a href="#id2" >Why SpiceBox </a></li>
                    <li><a href="#id3" >How It Works </a></li>

                    <li><a href="#id4"    onclick="document.getElementById('id01').style.display='block'"     >Sign up </a></li>
                    
                    
                </ul>
                
            
                   </div>
            
            

             <div id="id01" class="modal">

                    <form method="post" class="modal-content animate" action="">


                      <div class="cont">
                        <div class="hand"><p align="center">SIGN UP</p></div>
                        <input type="text" placeholder="Enter Firstname" name="fname" required>
                        <input type="text" placeholder="Enter Lastname" name="lname" required><br>
                        <input type="text" placeholder="Enter Email id" name="email" required>
                        <input type="password" placeholder="Enter Password" name="psw" required><br>
                        <input type="password" placeholder="Confirm Password" name="psw1" required>
                        <input type="text" placeholder="Enter Contact no." name="contact" required>



                      </div>

            <div class="cont" style="background-color:#f1f1f1">
               <a href="index1.html"><button type="submit" name='submit'>Signup</button></a>
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button> <br>
                <span class="psw">Already Registered? <a href="ind2.php">Login</a></span>
            </div>
        </form>
                 
                 </div>
            <?php
                          
                          $db = pg_connect('host=localhost dbname=postgres user=postgres password=1234 port = 5432');
                            if(isset($_POST['submit']))
                            {
                              $fname = $_POST['fname'];
                              $lname = $_POST['lname'];
                              $email = $_POST['email'];
                              $pass = ($_POST['psw']);
                              $contact = $_POST['contact'];
                            

                              $query = "INSERT INTO registered_user VALUES ('$fname','$lname','$email','$pass','$contact')";
                              $result = pg_query($query);
                              echo '<script type="text/javascript">';
                              echo ' alert("JavaScript Alert Box by PHP")';  //not showing an alert box.
                              echo '</script>';
                              $_SESSION['first']=$fname;
                              $_SESSION['second']=$email;

                          }
                         

                         
                  ?>



<div id="id02" class="modal">

                    <form id="login_form" class="modal-content" action="/action_page.php">


                      <div class="cont">
                        <div class="hand"><p align="center">SIGN IN</p></div><hr>
                        <input type="text" placeholder="Enter registered email id" name="lemail" required>
                        <input type="password" placeholder="Enter Password" name="lpsw" required><br>


                      </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="submit">Login</button>
                <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>

            </div>
        </form>
    </div>


            </nav>
             
          
            <div class="hero-text-box js--wp-6">
                <h1>YOU Order,WE Serve.<br> Tasty Food Is What YOU Deserve.</h1>

                <a class="btn btn-ghost" href="order_now.php"><b>ORDER NOW</b></a>
            </div>
                     
           
            
        </header>

        
        <section class="meal-plans js--meal-plans" id="id1">
            <h2>OUR MEAL PLANS</h2>
            
      
           
          
            <div class="container2" id="main">
           
            <button class="btn btn-veg "  onclick="veg()"><b>VEG</b></button>
            <button class="btn btn-non-veg" onclick="nonveg()" ><b>NON-VEG</b></button> 
                 <img id="id05" src="vegg.png" height="500" width="1100">
                <img id="id06" src="nonvegg.png" height="500" width="1100">
                <script>
                    function veg(){
                    document.getElementById('id06').style.display='none';
                    document.getElementById('id05').style.display='inline'; 
                        return
                    }
                    function nonveg(){
                        document.getElementById('id05').style.display='none';
                    document.getElementById('id06').style.display='inline';  
                        return
                    }
                    
                
                </script>
            
            
                   
    
  
                
            <!--  <button  onclick="document.getElementById('myImage').src='resources/img/vegg.png'">VEG</button>

                <img id="myImage" src="resources/img/nonvegg.png" style="width:100px">

<button onclick="document.getElementById('myImage').src='resources/img/nonvegg.png'">NON-VEG</button>  -->
            
            </div>
        </section>
        
        
        
        <section class="section-features js--section-features" id="id2">

            <div class="row">
                <h2>Get food fast &mdash; not fast food </h2>
                <p class="long-copy">
                Hello we are SpiceBox, your new premium food delivery service. We know you're always busy. No time for cooking. So let us take care of that, we're really good at it, promise
                </p>
            </div>
            <div class="row js--wp-1">
            

            <div class="column">
                <div class="col span-1-of-4 box">
                    <img src="resources/img/features1.jpg">
                <h3> Ghar ka khana</h3>
                    <p>Delicious Home Style food with minimal oil / masalas  </p>
                </div>
            </div>

             <div class="column">
                <div class="col span-2-of-4 box">
                    <img src="resources/img/features2.jpg">
                <h3>Amazing variety</h3>
                    <p>You will love the variety coz at SpiceBox - No dish is repeated All Month!! </p>
                </div>
            </div>

             <div class="column">
                <div class="col span-3-of-4 box">
                    <img src="resources/img/features3.png">
                <h3> Easy ordering</h3>
                    <p>Ordering your meal on the SpiceBox! Website will take less than 2 mins!! </p>
                </div>
             </div>

             <div class="column">
                <div class="col span-4-of-4 ">
                    <img src="resources/img/features4.jpg">
                <h3>Short trial </h3>
                    <p> You can try the delicious SpiceBox! meals for 1 week to know what every one is raving about! </p>
                </div>
            </div>
            </div>

    </section>


<section class="section-meals">
  <ul class="meals-showcase clearfix">
  <li>
    <figure class="meal-photos">
      <img src="resources/img/img1.jpg" alt="Korean bibimbap with egg and vegetables">
    </figure>
  </li>
  <li>
    <figure class="meal-photos js--meal-photos">
      <img src="resources/img/img2.jpg" alt="Simple italian pizza with cherry tomatoes">
    </figure>
  </li>
  <li>
    <figure class="meal-photos">
      <img src="resources/img/img3.jpg" alt="Chicken breast steak with vegetables ">
    </figure>
  </li>
  <li>
    <figure class="meal-photos">
      <img src="resources/img/img4.jpg" alt="Autumn pumpkin soup">
    </figure>
  </li>
  </ul>
  <ul class="meals-showcase clearfix">
  <li>
    <figure class="meal-photos">
      <img src="resources/img/img5.jpg" alt="Paleo beef steak with vegetables">
    </figure>
  </li>
  <li>
    <figure class="meal-photos">
      <img src="resources/img/img6.jpg" alt="Healthy baguette with egg and vegetables">
    </figure>
  </li>
  <li>
    <figure class="meal-photos">
      <img src="resources/img/img7.jpg" alt="Burger with cheddar and bacon">
    </figure>
  </li>
  <li>
    <figure class="meal-photos">
      <img src="resources/img/img8.jpg" alt="Granola with cherries and strawberries">
    </figure>
  </li>
  </ul>

</section>
        

      <section class="section-steps" id="id3">
          <div class="row">
              <br>
              <br>
              <br>
              
              <h2>HOW IT WORKS &mdash; AS SIMPLE AS 1,2,3</h2>
          </div>
          <div class="row"><br> <br>
              <div class="col span 1-of-2"> 
              <img src="resources/img/phone1.png" alt="Sbox" class="app-screen js--wp-7">
            </div>
              <div class="col span 1-of-2"> 
                  <div class="work-steps">
                      <div>1</div>
                      <p>Login/<br>SignUp</p>
                    </div>
                  
                   <div class="work-steps">
                      <div>2</div>
                      <p>Customize Your<br> Order</p>
                    </div>
                  
                   <div class="work-steps">
                      <div>3</div>
                      <p>Pay at Your DoorStep After Our SuperFast Delivery</p>
                    </div>
                  <a href="#" class="btn-app"><img src="resources/img/da.png" alt="appstorebtn"></a>
                  <a href="#" class="btn-app"><img src="resources/img/dgp.png" alt="playstorebtn"></a>
              </div>
          </div>
                      
    </section>
    <section class="section-cities js--cities" >

            <div class="row">
                <h2>Our Cities </h2>
                <p class="long-copy">
               &nbsp;&nbsp; We are SpiceBox and we strive to deliever our excellent food in the following cities of India.
                </p> 
            </div>
            <div class="row js--wp-9">
            

            <div class="column">
                <div class="col span-1-of-4 box">
                    <img src="resources/img/mumbai.png.png">
                <h3>Mumbai</h3>
                    <p>1000+ Happy Eaters<br>
                         50+ Top Chefs
                         @omnifood_lx
                         </p>
                </div>
            </div>

             <div class="column">
                <div class="col span-2-of-4 box">
                    <img src="resources/img/delhi.png.jpg">
                <h3>Delhi</h3>
                    <p>3700+ happy eaters<br>
                        160+ top chefs </p>
                </div>
            </div>

             <div class="column">
                <div class="col span-3-of-4 box">
                    <img src="resources/img/pune.png.jpg">
                <h3> Pune</h3>
                    <p>2000+ happy eaters<br>
                        100+ top chefs </p>
                </div>
             </div>

             <div class="column">
                <div class="col span-4-of-4 ">
                    <img src="resources/img/kolkata.png.jpg">
                <h3>Kolkata </h3>
                    <p> 3000+ happy eaters<br>
                        120+ top chefs </p>
                </div>
            </div>
            </div>

    </section>

        
        <div class="support">
            <img src="resources/img/supp.jpg">
         </div>
           

                
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="vendors/js/jquery.waypoints.min.js"></script>
<script src="resources/js/script.js"></script>
    
    
    
    
 </body>







</html>
