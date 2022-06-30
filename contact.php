<!DOCTYPE html>
<html>
<head>
    <title>Khushboo Chauhan</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="vendor/aos/aos.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-KHZ6ZXW');</script>
  <!-- End Google Tag Manager -->
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KHZ6ZXW"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-230682144-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-230682144-1');
</script>

<nav>
    <div class ="navbar">
      <div class ="logo">
        <a href="index.html"><strong>KC</strong></a>
      </div>
      <div class="navbar-li">
        <ul>
          <li><a href="index.html">HOME</a></li>
          <li><a href="projects.php">PROJECTS</a></li>
          <li><a href="about.html">ABOUT</a></li>
          <li><a href="contact.php">CONTACT</a></li>
          <li><a href="Feedback.php">ORDER</a></li>
        </ul>
      </div>
    </div>
    </nav>


    <h1 class ="contact-heading">Lets work together...!!</h1>
    <p class="contact-para">
      If you have any questions about my work or about me OR if you want to work togather on any front-end projects <br>Contact me on my social media accounts provided at the end of this para or on the form below to get to my email.
      <br/>Thank you again for visiting my page. 
      <br> <strong> Toodles..!!! </strong>
    <p class="contact-icon" >
        <a
        class="btn-lg btn-floating"
        style="background-color: #bd1628; color:white; margin:2px;"
    href="https://github.com/khushboo84"
    role="button"><i class="bi bi-github"></i></a>

  <a
    class="btn-lg btn-floating"
    style="background-color: #bd1628; color:white; margin:2px;"
    href="https://www.instagram.com/soulful_harmony_/"
    role="button"
    ><i class="fbi bi-instagram"></i
  ></a>
  <a
  class="btn-lg btn-floating"
  style="background-color: #bd1628; color:white; margin:2px;"
    style="background-color: #bd1628;"
    href="https://www.linkedin.com/in/khushboo-chauhan-3a29b4165/"
    role="button"
    ><i class="bi bi-linkedin"></i
  ></a>
    </p>

    

    <div class="container">
      <h1 class ="contact-heading">Please Enter Your Feedback</h1>
      <form class="form-horizontal" action="review.php">
        <div class="form-group">
          <label class="control-label col-sm-2" for="fname">First Name:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="fname" placeholder="First Name" name="first_name">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="lname">Last Name:</label>
          <div class="col-sm-10">          
            <input type="text" class="form-control" id="lname" placeholder="Last Name" name="last_name">
          </div>
        </div>
    
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Email Id:</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="email" placeholder="Email Id" name="email_id">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="fback">Feedback:</label>
          <div class="col-sm-10">          
            <input type="text" class="form-control" id="fback" placeholder="Feedback" name="feedback">
          </div>
        </div>
        
        <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default" onclick="myFunction1()">Submit</button>
          </div>
        </div>
      
      </form>
    </div>




  </body>
  <script>
    function myFunction1() {
  alert("Thanks for the feedback");
  if(confirm('Successful Message')){
    window.location.reload();  
}
}
    </script>
</html>