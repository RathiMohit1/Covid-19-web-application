<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <?php include 'link/links.php'; ?>
    <?php include 'css/style.php'; ?>
</head>
<body  onload="fetch()">

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
        <li class="nav-item">
          <a class="nav-link" href="IndiaCoronaCases.php">indiaCoronaLive</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="IndiaDayWise.php">indiaCoronaDaily</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contactid">contact</a>
        </li>
        
      </ul>
    
    </div>
  </div>
</nav>


<br/>  <br/>  <br/>
  <section class="corona_update container-fluid">
       <div class="my-5">
          <h3 class="text-uppercase text-center">covid-19 LIVE UPDATES OF INDIA day wise </h3>
       </div>

       <div class="table-responsive">
          <table class="table text-center" id="tb1">
           
           <?php
           
           $data = file_get_contents('https://api.covid19india.org/data.json');
           $coronadata = json_decode($data,true);


           $i= count($coronadata['cases_time_series'])-1;
           $latestTen = $i - 10;

           while($i > $latestTen){
               ?>

               <tr>
                 <th class="text-left">Date & Month</th>
                 <th colspan="%"></th>
               </tr>

               <tr>
                  <td colspan="6" class="text-left"><?php echo $coronadata['cases_time_series'][$i]['date']
                  . "<br />" ;  ?> </td>
               </tr>

               <tr class="text-captitalize text-white">
                  <th style="color:#fff; background: #2196f3;">Total Confirmed</th>
                  <th style="color:#fff; background: #ffc107;">Daily Confirmed</th>
                  <th style="color:#fff; background: #008C76FF;">Daily Recovered </th>
                  <th style="color:#fff; background: #e91e7f;">Daily Deceased</th>
                  <th style="color:#fff; background: #4caf50;">Total Recovered</th>
                  <th style="color:#fff; background: #EE2737FF;">Total Deceased</th>
               </tr>

               <tr class="mb-5">
                   <td style="background:#bed2f3;"><?php echo $coronadata['cases_time_series'][$i]['totalconfirmed']
                    . "<br />" ; ?></td>
                    
                    <td style="background:#ffe493;"><?php echo $coronadata['cases_time_series'][$i]['dailyconfirmed']
                    . "<br />" ; ?></td>

                    <td style="background:#9ED9CCFF;"><?php echo $coronadata['cases_time_series'][$i]['dailyrecovered']
                    . "<br />" ; ?></td>

                    <td style="background:#fc95c6;"><?php echo $coronadata['cases_time_series'][$i]['dailydeceased']
                    . "<br />" ; ?></td>

                    <td style="background:#88d28b;"><?php echo $coronadata['cases_time_series'][$i]['totalrecovered']
                    . "<br />" ; ?></td>

                    <td style="background:#fb99a1;"><?php echo $coronadata['cases_time_series'][$i]['totaldeceased']
                    . "<br />" ; ?></td>
               </tr>

               <?php
               $i--;
           }

           
           ?>
        </table>
       </div>
  
  </section>




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