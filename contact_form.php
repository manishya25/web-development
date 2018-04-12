<!DOCTYPE html>
<html lang="en">
	<head> 
	<title>contact form</title>
	<link rel="stylesheet" href="style.css" type="text/css" media="all" />
	</head>
	


<body>
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>CONTACT US</span> </h2>
    </div>
    	<div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.3s">
    	<div class="team-wrapper">
    	<h2> Write to us</h2>
    	<form class="form" name="myForm" action="mail.php" method="POST" required>
        <p class="name">
        <label for="name">Name</label><br>
        <input type="text" name="name" id="name" style="width:400px" required />
        </p>
	<p class="email">
        <label for="email">Email</label><br>
        <input type="text" name="email" id="email" style="width:400px" required />
			
		</p>

		<p class="web">
                    <label for="web">Mobile Number</label><br>
                    <input type="text" name="mobile" id="web" style="width:400px"  />
		</p>		
	     
		<p class="text">
                  <label for="message">Please write to us</label><br />

                <textarea name="message" rows="6" cols="25"></textarea> 
		</p>
		
		<p class="submit">
			<input type="submit" value="Submit" />
		</p>
	</form>
</div>
	</div>
    <div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.6s">
    
        <h2>Metaorigin</h2>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1759.8949983821103!2d77.08462527299514!3d28.501758858268698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d19468e95d799%3A0xbb70c2de24b5dce3!2sMetaorigin+Labs!5e0!3m2!1sen!2sin!4v1521719406426" width="450" height="445" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
    				
    </div>
   
    </div>
	 <!-- start footer -->
                   <?php include_once('includes/footer.php'); ?>  

        <!-- end footer -->
        </body>
</html>

