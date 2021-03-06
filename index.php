<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Crimson+Text|Roboto+Mono" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:700" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
<link href="style.css" rel="stylesheet">

    <style>
      
    </style>
    
</head>

<body>

    <nav class="navbar navbar-light">
<ul class="nav justify-content-end">

       <li class="nav-item">
      <a class="nav-link" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Projects</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#contact">Contact</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="#">Services</a>
    </li>


</ul>

    </nav>

<div id="div-overlay" class="container-fluid">


        <h1 class="main-header">Hello, I'm <span class="highlight">Pawel Rozniecki</span>.</h1><br/>
        <h1 class="main-header">I'm a full stack <span class="job-title" >software engineer</span></h1>

        <div class="profilePlaceholder">
            <img class="profileImg" src="pic.png">
        </div>
        

        <button class="cv-btn">
            <a  href="Pawel_Rozniecki_CV.pdf" target="_blank"> Download my CV</a>
        </button>


  <a class="chevron-holder">
        <a href="#technologies"><i style="color:white;position:absolute;font-size: 18px; left: 50vw;top: 90vh;"id="chevron"class="fa fa-chevron-down"></i></a>
     <a href="#technologies">   <i   style="color:white;position:absolute;font-size: 18px; left: 50vw;top: 91vh;"id="chevron2"class="fa fa-chevron-down"></i></a>
    <a href="#technologies">    <i   style="color:white;position:absolute;font-size: 18px; left: 50vw;top: 92vh;" id="chevron3"class="fa fa-chevron-down"></i></a>
  </a>


</div>


    <div id="particles-js"></div>





    <div id="technologies" class="container-fluid text-center">

       <span class="underline">
                   <h1 class="header">About</h1>


       </span>

    </div>
    <div id="projects" class="container-fluid text-center">

        <div class="underline">

                    <h1 class="header">Projects</h1>

        </div>
        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
    </div>
    <div id="contact" class="container-fluid text-center">

        <span class="contact-underline">
                    <h1 class="contact-header">Contact</h1>

        </span>
        <br/>

    <div class="form-container">

        <form class="form" method="post" action="email.php">

            <input  class="form-control" type="text" placeholder="enter your name" name="name">
            <input class="form-control"  type="email" placeholder="enter your email" name="email">
            <input class="form-control"  type="text" placeholder="Email subject" name="subject">

            <textarea id="message" class="form-control" type="text" placeholder="your message" name="message"></textarea>

            <input class="submit-btn" value="SEND" type="submit" name="btn">

        </form>

    </div>
    </div>






    <script src="particles.js"></script>
    <script src="app.js"></script>
    <script>
        $(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
    </script>

    <script type="text/javascript">
        (function ($) {
            $(document).ready(function(){



                $(function () {
               var d = $("#technologies");
               var pos = d.position();

                    $(window).scroll(function () {

                        if ($(this).scrollTop() >pos.top-10) {

                            $(".navbar").css("background-color","#40407a");
                            $(".navbar").css("transition","background-color 0.3s ease-out ");
                            $(".navbar-default .navbar-nav>li>a").css("color","#aa51ff");
                            $(".navbar-default .navbar-nav>li>a").css("transition","color 1s ease-out");



                        } else {

                            $(".navbar").css("background-color","transparent");
                            $(".navbar-default .navbar-nav>li>a").css("color","#707070");
                        }
                    });

                });

            });
        }(jQuery));


    </script>

</body>

</html>