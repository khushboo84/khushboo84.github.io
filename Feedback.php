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

<!-- <style>
    h1{
    font-size: 50px;
}
.btn {
    padding: 10px;
    font-size: 15px;
    color: white;
    background: #2F4F4F;
    border: none;
    border-radius: 5px;
}
form{
	background: #8B4513;
	opacity: 1;
}

</style> -->

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
        
<div class="container">
  
  <form class="form-horizontal">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Enter Your name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Enter Your name" name="name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Enter Organization Name:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="pwd" placeholder="Enter Organization Name" name="Org_name">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email Id:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Email Id" name="email_id">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Contact Number:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="pwd" placeholder="Contact Number" name="contact_number">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Project Title:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Project Title" name="proj_title">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Project Description:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Project Description" name="proj_desc">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Expertise:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="pwd" placeholder="Expertise" name="expertize">
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default"  formaction='insert.php'>Submit</button>
        <button type="submit" class="btn btn-default" formaction='display.php'>Display</button>
      </div>
    </div>
  
  </form>
</div>
         
</body>
</html>