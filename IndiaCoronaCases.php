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
          <h3 class="text-uppercase text-center">covid-19 LIVE UPDATES OF THE INDIA </h3>
       </div>

       <div class="table-responsive">
          <table class="table table-bordered table-striped text-center" id="tbval">
            <tr>
               <th class="text-capitalize">lastupdatedtime</th>
               <th class="text-capitalize">state</th>
               <th class="text-capitalize">confirmed</th>
               <th class="text-capitalize">active</th>
               <th class="text-capitalize">recovered</th>
               <th class="text-capitalize">deaths</th>
            </tr>


        <?php
        
        $data = file_get_contents('https://api.covid19india.org/data.json');
        $coronaIndia = json_decode($data,true);

        $statecount = count($coronaIndia['statewise']);

         $i=1;
         while($i < $statecount){
          
        ?>
            <tr>
               <td><?php  echo $coronaIndia['statewise'][$i]['lastupdatedtime'] ?></td>
               <td><?php  echo $coronaIndia['statewise'][$i]['state'] ?></td>
               <td><?php  echo $coronaIndia['statewise'][$i]['confirmed'] ?></td>
               <td><?php  echo $coronaIndia['statewise'][$i]['active'] ?></td>
               <td><?php  echo $coronaIndia['statewise'][$i]['recovered'] ?></td>
               <td><?php  echo $coronaIndia['statewise'][$i]['deaths'] ?></td>
            </tr>

             <!-- echo $coronaIndia['statewise'][$i]['lastupdatedtime'] . "<br>";
             echo $coronaIndia['statewise'][$i]['state'] . "<br>";
             echo $coronaIndia['statewise'][$i]['confirmed'] . "<br>";
             echo $coronaIndia['statewise'][$i]['active'] . "<br>";
             echo $coronaIndia['statewise'][$i]['recovered'] . "<br>";
             echo $coronaIndia['statewise'][$i]['deaths'] . "<br>"; -->

            <?php
            $i++;
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