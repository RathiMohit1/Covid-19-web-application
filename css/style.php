<style tyle="text/css">

   html{
       scroll-behavior:smooth;
   }
  
   *{ margin: 0; padding: 0; font-family: 'Mulish', sans-serif;}

   .row{ margin-left: 0!important; margin-right: 0!important ;}

   .nav_style{
       background-color: #a29bfe!important;
   }

   .nav_style a{
       color:white;
   }

   ///////// main header /////////

   .main_header{
       height: 450px;
       width:100%;
   }    

   .corona_rot img{
       animation: gocorona 3s linear infinite;  
   }

   @keyframes gocorona {
       0% { transform : rotate(0); }
       100% { transform : rotate(360deg); }
   }

   .leftside img{ 
      animation: heartbeat 5s linear infinite;
   }

   @keyframes heartbeat {
       0%{ transform: scale(.75);}
       20%{ transform: scale(1);}
       40%{ transform: scale(.75);}
       60%{ transform: scale(1);}
       80%{ transform: scale(.75);}
       100%{ transform: scale(.75);}
   }

   /* *************corona updates************** */
   .corona_update{
       margin:0 0 30px 0;
   }

   .corona_update h3{
       color: #ff7675;
   }

   .corona_update h1{ font-size: 2rem; text-align:center;}

   /* *********** about section ********* */

   .sub_section{
       background-color: #E8E8E8;
   }


   /* *******footer******* */

   .footer_style{
       background-color: #a29bfe!important;
   }

   .footer_style p{
       margin-bottom: 0!important;
   }

   /* ***************top button********* */
   #myBtn {
  display: none; /* Hidden by default */
  position: fixed; /* Fixed/sticky position */
  bottom: 30px; /* Place the button at the bottom of the page */
  right: 40px; /* Place the button 30px from the right */
  z-index: 99; /* Make sure it does not overlap */
  border: none; /* Remove borders */
  outline: none; /* Remove outline */
  background-color: #00A8FF; /* Set a background color */
  color: white; /* Text color */
  cursor: pointer; /* Add a mouse pointer on hover */
  padding: 15px; /* Some padding */
  border-radius: 10px; /* Rounded corners */
  font-size: 20px; /* Increase font size */
}

#myBtn:hover {
  background-color: #606060; /* Add a dark-grey background on hover */
}

/* *********** header responsive***** */
@media(max-width:768px){
    .main_header{ height:700px; text-align: center; }

    .main-header h1{
        text-align: center;
        padding:0;
        width:100%;
        font-size: 34px;
    }

    .count_style{
    display: inline!important;
}

.count_style p{ text-align: center;}

.about_res{ margin-left: 0!important;
}



</style>