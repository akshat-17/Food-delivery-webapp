<?php
// Start the session
ob_start();
session_start();
?>
<!DOCTYPE HTML>
<html>
    
    <head>
    <link rel="stylesheet" type="text/css" href="order.css">
    <link rel="stylesheet" type="text/css" href="view.css">
    </head>
<body>
       
  <header>
         <nav>
            <div class="row">
                <img src="resources/img/company.jpg" alt="logo" class="logo">
                <ul class="main-nav">
<li id="logout"><?php echo "Welcome " . $_SESSION['first'] . ".<br>";
echo "Your id is " . $_SESSION['second'] . " ";

?></li>
<li><b id="logout"><a href="logout.php">Log Out</a></b></li>

                </ul>
                
            
                   </div>
            
        </nav>
    </header>
    
    
    
    
   <br><br><br>
    <a href="#"    onclick="document.getElementById('id01').style.display='block'"   class="yy"   >VIEW MENU</a>

<div id="id01" class="modal">

                    <form method="POST" class="modal-content animate" action="">


                      <div class="cont">
<table>
  <caption>
    Menu
  </caption>
  <tr>
    <th id="co0" headers="blank" >VEG</th>
    <th id="co1" headers="blank">Mini</th>
    <th id="co2" headers="blank">Standard</th>
  </tr>
  <tr>
    <th id="c1" headers="blank">MONDAY</th>
    <td headers="co1 c1">Mutter paneer,<br>Indian Dal,<br>Rotis</td>
    <td headers="co2 c1">Mutter paneer,Fried onion,rice<br>Salad,Indian Dal,<br>Rotis</td>
  </tr>
  <tr>
    <th id="p1"  headers="blank">TUESDAY</th>
    <td headers="co1 p1">Aloo Masala<br>Dhaba Dal<br>Rotis</td>
    <td headers="co2 p1">Aloo Masala<br>Dhaba Dal,Steam Rice<br>Cup Cake,Rotis</td>
  </tr>
  <tr>
    <th id="e1"  headers="blank">WEDNESDAY</th>
    <td headers="co1 e1">Dal Makhani<br>Palak Saag<br>Rotis</td>
    <td headers="co2 e1">Dal Makhani,Boondi Raita<br>Palak Saag,Peas Pulao<br>Rotis</td>
  </tr>
    <tr>
    <th id="a1"  headers="blank">THURSDAY</th>
    <td headers="co1 a1">Methi Dal Fry<br>Amritsari Chole<br>Rotis</td>
    <td headers="co2 a1">Methi Dal Fry,Corn Rice<br>Amritsari Chole, Dahi<br>Rotis</td>
  </tr>
    <tr>
    <th id="b1"  headers="blank">FRIDAY</th>
    <td headers="co1 b1">Thai Curry<br>Pud Thai Noodles</td>
    <td headers="co2 b1">Thai Curry,Cup Cake<br>Pud Thai Noodles<br>Steam Rice</td>
  </tr>
    <tr>
    <th id="d1"  headers="blank">SATURDAY</th>
    <td headers="co1 d1">Dal Tadka<br>French Beans Aloo<br>Rotis</td>
    <td headers="co2 d1">Dal Tadka,Salad<br>French Beans Aloo<br>Lemon Rice</td>
  </tr>
  <tr>
    <th id="co5" headers="blank">NON-VEG</th>
    <th id="co3" headers="blank">Mini</th>
    <th id="co4" headers="blank">Standard</th>
  </tr>
  <tr>
    <th id="c2"  headers="blank">Monday</th>
    <td headers="co3 c2">Dahi Chicken<br>Indian Dal <br>Rotis</td>
    <td headers="co4 c2">Dahi Chicken,Salad<br>Fried Onion Rice,Indian Dal<br>Rotis</td>
  </tr>
  <tr>
    <th id="p2" headers="blank">TUESDAY</th>
    <td headers="co3 p2">Dhaba Dal<br>Chicken Achari<br>Rotis</td>
    <td headers="co4 p2">Dhaba Dal,Cup Cake <br> Steam Rice,Chicken Achari<br>Rotis</td>
  </tr>
  <tr>
    <th id="e2" headers="blank">WEDNESDAY</th>
    <td headers="co3 e2">Anda Bhurji<br>Dal Makhani <br> Rotis</td>
    <td headers="co4 e2">Anda Bhurji,Peas Pulao<br>Dal Makhani, Boondi Raita <br> Rotis</td>
  </tr>
    <tr>
    <th id="a2" headers="blank">THURSDAY</th>
    <td headers="co3 e2">Chicken Handi<br>Methi Dal Fry <br> Rotis</td>
    <td headers="co4 e2">Chicken Handi,Corn Rice<br>Methi Dal Fry, Plain Dahi <br> Rotis</td>
  </tr>
    <tr>
    <th id="b2" headers="blank">FRIDAY</th>
    <td headers="co3 e2">Pud Thai Noodles<br>Red Chicken Thai Curry</td>
    <td headers="co4 e2">Red Chicken Thai Curry,Steam Rice<br>Pud Thai Noodles, Cup Cake</td>
  </tr>
    <tr>
    <th id="d2" headers="blank">SATURDAY</th>
    <td headers="co3 e2">Anda Pakoda Curry<br>Dal Tadka<br> Rotis</td>
    <td headers="co4 e2">Anda Pakoda Curry,Lemon Rice<br>Dal Tadka,Salad <br> Rotis</td>
  </tr>
    
</table>


                      </div>

            <div class="cont" style="background-color:#f1f1f1">

                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button> <br>

            </div>
        </form>
         
                 
                 
    </div>


<div class="menu">
  <form method="post">
<!--   radio button  -->
    <input type="radio" name="Time"
  id="Meal Time is Lunch,Cost:" class="input-hidden" name="day" value="100">
     


<label for="Meal Time is Lunch,Cost:">

<p>Select Meal Time</p>
    
<img
    src="resources/img/lunch_btn.png"
    alt="I'm sad">


</label>


&nbsp;&nbsp;

<!--   radio button  -->

<input
  type="radio" name="Time" id="Meal Type is Dinne,Cost:"
   class="input-hidden" name="night" value="100">



<label for="Meal Type is Dinne,Cost:">

  <img
    src="resources/img/dinner_btn.png"
    alt="I'm happy">

</label>
&nbsp;&nbsp;
<!--   radio button  -->

<input
  type="radio" name="Time" id="You have selected Lunch and Dinner Both,Cost:"
   class="input-hidden" name="both" value="180" >



<label for="You have selected Lunch and Dinner Both,Cost:">

  <img
    src="resources/img/lunch_dinner_btn.png"
    alt="I'm laughing">

</label>
&nbsp;&nbsp;
       <p class ="a1">Lunch  Dinner Both</p>
<hr color="white" size="3" width="45%" align="left">
       

 
      
      
      
      
      
      
    <p>Select Meal Type</p>

    <input type="radio" name="Type" id="Selected Meal Type is Veg,Cost: "
  class="input-hidden" value="80">



<label for="Selected Meal Type is Veg,Cost: ">

<img
    src="resources/img/veg_btn.png"
    alt="I'm sad" >


</label>


&nbsp;&nbsp;

<!--   radio button  -->

<input
  type="radio" name="Type" id="Your Meal Type is Non-Veg,Cost: "
   class="input-hidden" value="120">



<label for="Your Meal Type is Non-Veg,Cost: ">

  <img
    src="resources/img/nonveg_btn.png"
    alt="I'm happy" >

</label>
&nbsp;&nbsp;
<!--   radio button  -->
      <p class ="a1">&nbsp;&nbsp;Veg &nbsp;&nbsp;&nbsp; Nonveg</p>

<hr color="white" size="3" width="45%" align="left">

   <p>Select Meal Plan</p>

    <input type="radio" name="Plan"
  id="Your Meal Plan is Mini,Cost:" class="input-hidden" value="50">



<label for="Your Meal Plan is Mini,Cost:">

<img
    src="resources/img/mini_btn.png"
    alt="I'm sad" >


</label>


&nbsp;&nbsp;

<!--   radio button  -->

<input
  type="radio" name="Plan"
  id="Your Meal Plan is Standard,Cost:" class="input-hidden" value="70">



<label for="Your Meal Plan is Standard,Cost:">

  <img
    src="resources/img/standard_btn.png"
    alt="I'm happy" >

</label>
&nbsp;&nbsp;
<!--   radio button  -->
<p class ="a1">&nbsp;&nbsp;Mini &nbsp;&nbsp;Standard &nbsp;&nbsp;&nbsp;</p>

<hr color="white" size="3" width="45%" align="left">

 <p>Select Meal Duration</p>

    <input type="radio" name="Duration"
  id="Your Meal Duration is For 3 Days,Cost:" class="input-hidden" value="300">



<label for="Your Meal Duration is For 3 Days,Cost:">

<img
    src="resources/img/3days.png"
    alt="I'm sad" >


</label>


&nbsp;&nbsp;

<!--   radio button  -->

<input
  type="radio" name="Duration"
  id="Your Meal Duration is For 1 Week,Cost:" class="input-hidden" value="600">



<label for="Your Meal Duration is For 1 Week,Cost:">

  <img
    src="resources/img/1%20week.png"
    alt="I'm happy" >

</label>
&nbsp;&nbsp;
<!--   radio button  -->

<input
  type="radio" name="Duration"
  id="Your Meal Duration is For 1 Month,Cost:" class="input-hidden" value="3000" >



<label for="Your Meal Duration is For 1 Month,Cost:">

  <img
    src="resources/img/1month.png"
    alt="I'm laughing" >

</label>
<hr color="white" size="3" width="45%" align="left">

<p>Select Quantity</p>

    <input type="radio" name="Quantity"
  id="Quantity is 1,Cost:" class="input-hidden" value="50">



<label for="Quantity is 1,Cost:">

<img
    src="resources/img/1qty.png"
    alt="I'm sad" />


</label>


&nbsp;&nbsp;

<!--   radio button  -->

<input
  type="radio" name="Quantity"
  id="Quantity is 2,Cost:" class="input-hidden" value="500">



<label for="Quantity is 2,Cost:">

  <img
    src="resources/img/2qty.png"
    alt="I'm happy" >

</label>
&nbsp;&nbsp;
<!--   radio button  -->

<input
  type="radio" name="Quantity"
  id="Quantity is 3,Cost:" class="input-hidden" value="600" >



<label for="Quantity is 3,Cost:">

  <img
    src="resources/img/3qty.png"
     alt="I m laughing">

</label>
      
<input
  type="radio" name="Quantity"
  id="Quantity is 4,Cost:" class="input-hidden" value="800">



<label for="Quantity is 4,Cost:">

  <img
    src="resources/img/4qty.png"
     alt="I m laughing">

</label>

<hr color="white" size="3" width="45%" align="left">





<input type="text" name="drop" placeholder="Enter Delivery Address">

<br>
      <button type="button"  class="zz" onclick="displayRadioValue()">View Progress</button>

      <button type="submit"  class="zz"  name='submit'>Submit</button>

       <div id="result"></div>
      
    <script> 
        function displayRadioValue() {
            
            document.getElementById("result").innerHTML = "";
            var ele = document.getElementsByTagName('input'); 
              
            for(i = 0; i < ele.length; i++) { 
                if(ele[i].type="radio"){
                    if(ele[i].checked)
                document.getElementById("result").innerHTML
                        +=  ele[i].id +
                          ele[i].value + "<br>";
            } 
        }
         
        } 
           </script>
           
   <!-- <button type="button"  class="zz" onclick="total()" >Get Total</button>

      <div id="total"></div>
      <script> 
        
            var a=document.getElementById("Meal Time is Lunch,Cost:").value;
            var b=document.getElementById("Meal Type is Dinne,Cost:").value;
            var c=document.getElementById("You have selected Lunch and Dinner Both,Cost::").value;
            var d=document.getElementById("Selected Meal Type is Veg,Cost:").value;

            var e=document.getElementById("Selected Meal Type is Non-Veg,Cost:").value;
     


          
            function total(){
                 document.getElementById("total").innerHTML = "";
                var ele = document.getElementsByTagName('input'); 
                for(i = 0; i < ele.length; i++) { 
                if(ele[i].type="radio"){
                    if(ele[i].checked)
                document.getElementById("total").innerHTML
                     +=  ele[i].value +
                          
                

                
                
                
                
                
            }
        }
         
        } 
        
        -->
    
           
           
      

    


    </form>

    </div>

<?php
                          $db = pg_connect('host=localhost dbname=postgres user=postgres password=1234 port = 5432');

                            if (isset($_POST['submit']))
                            {
                              $name=$_SESSION['first'];
                              $email=$_SESSION['second'];
                              $time = $_POST['Time'];
                              $type = $_POST['Type'];
                              $plan = $_POST['Plan']; 
                              $duration = $_POST['Duration'];
                              $quant = $_POST['Quantity'];
                              $address = $_POST['drop'];
                              


                        $query = "INSERT INTO order_now VALUES ('$name','$email','$time','$type','$plan','$duration','$quant','$address')";
                              $result = pg_query($query);
                            }

                              
            

                         
                  ?>



    </body>
</html>