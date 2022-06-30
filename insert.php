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
<body text="white">
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
        
  <center style="color:white;">
		<?php

		 	$db_username = 'root';
 			$db_password = '';
 			$db_name = 'project';
 			$db_host = 'localhost:3307';
		$conn = new mysqli($db_host, $db_username, $db_password,$db_name);
			if(!$conn) { 
    		echo "Unable to connect database".mysqli_error($conn);die; 
				} else { 
    				echo "Details Inserted"; 
						}
		
		// Taking all 7 values from the form data(input)
		$name = $_REQUEST['name'];
		$Org_name = $_REQUEST['Org_name'];
		$email_id = $_REQUEST['email_id'];
		$contact_number	= $_REQUEST['contact_number'];
		$proj_title = $_REQUEST['proj_title'];
		$proj_desc = $_REQUEST['proj_desc'];
		$expertize = $_REQUEST['expertize'];
		
		
		// Performing insert query execution
		$sql = "INSERT INTO feedback VALUES ('$name','$Org_name','$email_id','$contact_number','$proj_title','$proj_desc','$expertize')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Your request has been processed and ". " Check Your Database</h3>";
								

			echo nl2br("\n$name\n$Org_name\n $email_id\n "
				. "$contact_number\n$proj_title\n$proj_desc\n$expertize");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
         
</body>
</html>