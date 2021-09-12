<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <?php include 'link/links.php'; ?>
    <?php include 'css/style.php'; ?>
</head>
<body>

<nav class="navbar navbar-expand-lg nav_style p-3">
  <div class="container-fluid">
    <a class="navbar-brand pl-5" href="#">Covid-19 Tracker</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto pr-5 text-capitalize">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#aboutid">about</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#sympid">symptoms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#preventionid">prevention</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="WorldCoronaCases.php">WorldCoronaLive</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="IndiaCoronaCases.php">indiaCoronaLive</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="IndiaDayWise.php">indiaCoronaDaily</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="#contactid">contact</a>
        </li>
        
      </ul>
    
    </div>
  </div>
</nav>

<div class="main_header">
   <div class="row w-100 h-100">
   <div class="col-lg-4 col-md-4 col-12 order-lg-1 order-2">
       <div class="leftside w-100 h-100 d-flex justify-content-center align-item-center">

         <img src="images/logo.jpg" alt="Be Together">
       </div>
   </div>
   
   <div class="col-lg-7 col-md-7 col-12  order-lg-2 order-1">
       <div class="rightside w-100 h-100 d-flex justify-content-center align-item-center">

          <h1>Let's Stay Safe & Fight Together Against Cor<span class="corona_rot"><img src="images/corona.png"
            alt="corona icon"></span>na Virus</h1>
       </div>
   </div>   
   </div>
</div>

 <!-- ************* corona lastest update *********/ -->
 <br/>  <br/>  <br/>
  <section class="corona_update">
       <div class="mb-3">
          <h3 class="text-uppercase text-center">covid-19 updates</h3>
       </div>
       <br />
       <div class="d-flex justify-content-around align-item-center count_style">
         
       <?php
           
           $data = file_get_contents('https://disease.sh/v3/covid-19/all');
           $coronadata = json_decode($data,true);
           ?>

         <div>
          <h1 class="count"><?php echo $coronadata['cases']; ?></h1>
          <p>Total global cases</p>
         </div>

         <div>
          <h1 class="count"><?php echo $coronadata['active']; ?></h1>
          <p>Active cases</p>
         </div>

         <div>
          <h1 class="count"><?php echo $coronadata['recovered']; ?></h1>
          <p>Recovered</p>
         </div>

         <div>
          <h1 class="count"><?php echo $coronadata['deaths']; ?></h1>
          <p>Deaths</p>
         </div>
         
  
       </div>
  
  </section>

  <!-- ********************about***************** -->

  <div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
     <div class="section_header text-center mb-5 mt-4">
       <h1>About Covid-19</h1>
     </div>

     <div class="row pt-5">
        <div class="col-lg-5 col-md-6 col-12 ml-5 about_res">
           <img src="images/Overview.jpg" width=400 class="img-fluid" alt="">
        </div>

        <div class="col-lg-6 col-md-6 col-12">
           <h2>What is Covid-19(Corona Virus)</h2>
           
           <h5>COVID-19 is the infectious diseas caused by most recently discovered coronavirus. This new 
           virus and disease were unknown before the outbreak began in Wuhan,China in December 2019.</h5>
           
           <h5>Corona virus are a large family virus which may caused in illnes in animals or humans.
           In humans,several coronavirus are known to cause respiratory infections ranging from the 
           common cold to more severe diseases such as Middle East respiratory Syndrome(MERS) and Severe 
           Acute Resiporatory Syndrome(SARS). The most recently discovered coronavirus disease is COVID-19</h5>
        </div>
     </div>
  </div>
    
   <!-- ****************************corona symptoms*************** -->
   <div class="container-fluid pt-5 pb-5" id="sympid">
     <div class="section_header text-center mb-5 mt-4">
        <h1>Coronavirus Symptoms</h1>
     </div>

     <div class="container">
       <div class="row">
       <div class="col-lg-4 col-md-4 col-12 mt-5">
         <figure class="text-center">
              <img src="images/cough.png" class="img-fluid" width="120" height="120">
             <figcaption>Cough</figcaption>
           </figure>
          </div>

          <div class="col-lg-4 col-md-4 col-12 mt-5">
         <figure class="text-center">
              <img src="images/nose.png" class="img-fluid" width="120" height="120">
             <figcaption>Runny nose</figcaption>
           </figure>
          </div>

          <div class="col-lg-4 col-md-4 col-12 mt-5">
         <figure class="text-center">
              <img src="images/fever.png" class="img-fluid" width="120" height="120">
             <figcaption>fever</figcaption>
           </figure>
          </div>

          <div class="col-lg-4 col-md-4 col-12 mt-5">
         <figure class="text-center">
              <img src="images/cold.png" class="img-fluid" width="120" height="120">
             <figcaption>cold</figcaption>
           </figure>
          </div>

          <div class="col-lg-4 col-md-4 col-12 mt-5">
         <figure class="text-center">
              <img src="images/dizziness.png" class="img-fluid" width="120" height="120">
             <figcaption>dizziness</figcaption>
           </figure>
          </div>

          <div class="col-lg-4 col-md-4 col-12 mt-5">
          <figure class="text-center">
              <img src="images/breathing.png" class="img-fluid" width="120" height="120">
             <figcaption>difficulty in breathing(sever cases)</figcaption>
           </figure>
          </div>
       </div>

     </div>
   </div> 
  
   <!-- ****************************corona prevention*************** -->
   <div class="container-fluid sub_section pt-5 pb-5" id="preventionid">
       <div class="section_header text-center mb-5 mt-4">
         <h1> 6 Steps Prevention Against Coronavirus</h1>
       </div>
      <!-- ******1***** -->
       <div class="container">
         <div class="row">
           <div class="col-lg-4 col-md-4 col-12 mt-5">
              <div class="row">
                 <div class="col-lg-4 col-md-4 col-12">
                   <figure class="text-center">
                     <img src="images/handwash.png" class="img-fluid" width="90" height="90">
                   </figure>
                 </div>

                 <div class="col-lg-8 col-md-8 col-12">
                    <p>Wash your hands regularly for 20 second with soap and water or
                     alcohol based hand sanitizer</p>
                 </div>
              </div>

           </div>

<!-- **********2******* -->
           <div class="col-lg-4 col-md-4 col-12 mt-5">
              <div class="row">
                 <div class="col-lg-4 col-md-4 col-12">
                   <figure class="text-center">
                     <img src="images/manOnmask.png" class="img-fluid" width="90" height="90">
                   </figure>
                 </div>

                 <div class="col-lg-8 col-md-8 col-12">
                    <p>Cover your nose and mouth with dispossable mask or N-95 mask</p>
                 </div>
              </div>

           </div>

<!-- *******3********** -->
           <div class="col-lg-4 col-md-4 col-12 mt-5">
              <div class="row">
                 <div class="col-lg-4 col-md-4 col-12">
                   <figure class="text-center">
                     <img src="images/avoid.png" class="img-fluid" width="90" height="90">
                   </figure>
                 </div>

                 <div class="col-lg-8 col-md-8 col-12">
                    <p>Avoid close contact (1 meter or 3 feet) with peple who are unwel.</p>
                 </div>
              </div>

           </div>

<!-- ****4****** -->
           <div class="col-lg-4 col-md-4 col-12 mt-5">
              <div class="row">
                 <div class="col-lg-4 col-md-4 col-12">
                   <figure class="text-center">
                     <img src="images/stayAThome.png" class="img-fluid" width="90" height="90">
                   </figure>
                 </div>

                 <div class="col-lg-8 col-md-8 col-12">
                    <p>Stay at home and stay isoled from other in the household if you are felling unwell.</p>
                 </div>
              </div>

           </div>

<!-- *************5********* -->
           <div class="col-lg-4 col-md-4 col-12 mt-5">
              <div class="row">
                 <div class="col-lg-4 col-md-4 col-12">
                   <figure class="text-center">
                     <img src="images/news.png" class="img-fluid" width="90" height="90">
                   </figure>
                 </div>

                 <div class="col-lg-8 col-md-8 col-12">
                    <p>Stay informed by watching news & follow recommeded practises.</p>
                 </div>
              </div>

           </div>

<!-- ************6************ -->
           <div class="col-lg-4 col-md-4 col-12 mt-5">
              <div class="row">
                 <div class="col-lg-4 col-md-4 col-12">
                   <figure class="text-center">
                     <img src="images/illness.png" class="img-fluid" width="90" height="90">
                   </figure>
                 </div>

                 <div class="col-lg-8 col-md-8 col-12">
                    <p>If you have fever,cough and difficulty in breathing, seek medical care immediately.</p>
                 </div>
              </div>

           </div>

          </div>
        </div>  
    </div>



 <!-- ***************************Contact us*************** -->
   <div class="container-fluid pt-5 pb-5" id="contactid">
      <div class="section_header text-center mb-5 mt-4">
        <h1>Contact us ASAP</h1>
      </div>

       <div class="container">
         <div class="row">
           <div class="col-lg-8 offset-lg-2 col-12">

<form action="" method="POST">


              <div class="form-group">
                 <label >Name</label>
                 <input type="text" class="form-control" name="username" 
                 placeholder="Full Name" autocomplete="off" required="">
              </div>

              <div class="form-group">
                 <label >Email </label>
                 <input type="email" class="form-control" name="email" 
                 placeholder="name@example.com" required autocomplete="off">
              </div>

              <div class="form-group">
                 <label >Mobile</label>
                 <input type="number" class="form-control" maxlength="10" name="mobile" 
                 placeholder="Mobile NO." autocomplete="off" required>
              </div>

            <!-- ****************checkbox********** -->
    <div class="form-group">
          <label >Select Symtoms </label> <br>
          <div class="custom-control custom-checkbox custom-control-inline text-captitalize">
             <input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]"
             value="cold">
             <label class="custom-control-label" for="customcheckbox1">Cold</label>
          </div>

          <div class="custom-control custom-checkbox custom-control-inline text-captitalize">
             <input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]"
             value="fever">
             <label class="custom-control-label" for="customcheckbox2">Fever</label>
          </div>

          <div class="custom-control custom-checkbox custom-control-inline text-captitalize">
             <input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]"
             value="breath">
             <label class="custom-control-label" for="customcheckbox3">Difficulty in Breathing</label>
          </div>

          <div class="custom-control custom-checkbox custom-control-inline text-captitalize">
             <input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]"
             value="tired">
             <label class="custom-control-label" for="customcheckbox4">Feeling Weak</label>
          </div>

    </div>

        <div class="form-group">
          <label for="exampleFormControlTextarea1">Discribe how you are feeling?</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg"></textarea>
        </div>

        <!-- ***********submit******* -->
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>   

</form>
           
           </div>
         </div>
       </div>  

    </div>

    <!-- ***************top cursor********** -->
    <button onclick="topFunction()" id="myBtn" title="Go to top">↑</button>


    <!-- *******************footer************ -->

    <footer class="mt-5">
       <div class="footer_style text-white text-center container-fuild">
          <p>Copyright by  Group-13</p>
       </div>
    </footer>




    <script type="text/javascript">

      //Get the button:
       mybutton = document.getElementById("myBtn");
 
     // When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
} 

    </script>
</body>
</html>

<?php

    include 'dbcon.php';
  
   if(isset($_POST['submit'])){
       $username = $_POST['username'];
       $email = $_POST['email'];
       $mobile = $_POST['mobile'];
       $symp = $_POST['coronasym'];
       $msg = $_POST['msg'];

       $chk = "";

       foreach($symp as $chk1){
           $chk .= $chk1."," ;
       }

       $insertquery = "insert into coronacase(username,email,mobile,symp,message) 
       values('$username','$email','$mobile','$chk','$msg') ";

       $query = mysqli_query($con,$insertquery);

       if($query){
         ?>
         <script>
            alert("Your Message is Delivered Successfully");
         </script>
         <?php   
       }
       else{
         ?>
         <script>
            alert("Some Error Ocuured Try After Some Time");
         </script>
         <?php
       }

   }

?>