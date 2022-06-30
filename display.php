<?php

// Username is root
      $db_username = 'root';
 			$db_password = '';
 			$db_name = 'project';
 			$db_host = 'localhost:3307';
		    $conn = new mysqli($db_host, $db_username, $db_password,$db_name);

// Checking for connections
if ($conn->connect_error) {
	die('Connect Error (' .
	$conn->connect_errno . ') '.
	$conn->connect_error);
}

// SQL query to select data from database
$sql = "SELECT * FROM feedback";
$result = $conn->query($sql);
$conn->close();
?>




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

  <title>Feedback Details</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #1E90FF;
			font-size: 50px;
			font-family: 'Gill Sans';
		}

		td {
			background-color: #F5DEB3;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
		body {
    			font-size: 19px;
				  background-size: 100% 100%;
				  background-repeat: no-repeat;
  				background-attachment: fixed;
    	}
    	th {
			background-color: #778899;
			border: 1px solid black;
		}


}
	</style>

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
  <section>
		<h1>Feedback Details</h1>
		
		<table>
			<tr>
				<th>Name</th>
				<th>Organization Name</th>
				<th>Email Id</th>
        <th>Contact Number</th>
        <th>Project Title</th>
				<th>Project Description</th>
        <th>Expertise</th>
                
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS-->
			<?php // LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!--FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN-->
				<td><?php echo $rows['name'];?></td>
				<td><?php echo $rows['Org_name'];?></td>
				<td><?php echo $rows['email_id'];?></td>
        <td><?php echo $rows['contact_number'];?></td>
        <td><?php echo $rows['proj_title'];?></td>
				<td><?php echo $rows['proj_desc'];?></td>
        <td><?php echo $rows['expertize'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>       
  
         
</body>
</html>