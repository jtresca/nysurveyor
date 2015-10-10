<?php

// if the url field is empty
if(isset($_POST['url']) && $_POST['url'] == ''){

	// put your email address here
	$youremail = 'calactyte@gmail.com';

	// prepare a "pretty" version of the message
	// Important: if you added any form fields to the HTML, you will need to add them here also
	$body = "This is the form that was just submitted:
  Name: $_POST[name]
  Address of Property: $_POST[address]
  Type of Survey: $_POST[typeofsurvey]
  Date: $_POST[date]
  Contact Email: $_POST[email]
  Contact Phone: $_POST[phone]
  Preferred Contact Phone: $_POST[contacthowa]
  Preferred Contact Email: $_POST[contacthowb]
  Preferred Contact Mail: $_POST[contacthowc]";

	// Use the submitters email if they supplied one
	// (and it isn't trying to hack your form).
	// Otherwise send from your email address.
	if( $_POST['email'] && !preg_match( "/[\r\n]/", $_POST['email']) ) {
	  $headers = "From: $_POST[email]";
	} else {
	  $headers = "From: $youremail";
	}

	// finally, send the message
	mail($youremail, 'Estimate Form', $body, $headers );

}

// otherwise, let the spammer think that they got their message through

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Thanks!</title>
  <meta name="description" content="New York Land Surveyor - Serving Westchester County and Rockland County.  Title searches, property disputes, construction
staking and variance applications.">
  <meta name="keywords" content="New York Land Surveyor, Westchester County,  Rockland County, Survey, land surveyor, commercial lot survey, Subdivision survey, plot plans, new construction surveys, land dispute, property boundaries">
  
   <script type="text/javascript">
    // split your email into two parts and remove the @ symbol
    var first = "calactyte";
    var last = "gmail.com";
  </script>
 <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css?v=1.0">
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body>
  <div class="container-fluid">
    
    <header id="header"> 
    <!-- header content loaded here -->
    </header>
    
    <nav id="nav">
    <!-- nav content loaded here -->
    </nav>

    <section id="hero" class="herohldr">
    <!-- hero content loaded here -->
    </section>

    <section class="dynamic">
      <div  class="row">
        <div id="weserve" class="col-md-5">
          <div class="weservebanner">
            <span class="weserveheadline">We Serve</span>
          </div>
           <div class="weservecontenthldr">
             <ul class="weservecontent">
               <li>Title Companies</li>
               <li>Law Firms</li>
               <li>Home Builders</li>
               <li>Contractors</li>
               <li>Commercial Land</li>
               <li>Individual Land</li>
               <li>Homeowners</li>
             </ul>
           </div>
        </div>
        
        <div id="main-body" class="col-md-7">
         
        <div class="formhldr">
          <h1>Thanks</h1>
          <p>We'll get back to you as soon as possible.</p>
        </div>
        </div> <!-- end row -->

    </section>

    <section id="areas-a"class="areasofservice">
      <!-- westchester areas content loaded here -->
    </section>

    <section id="areas-b" class="areasofservice">
      <!-- rockland areas content loaded here -->
    </section>

    <section id="moreservices" class="otherservices">
     <!-- moreservices content loaded here -->
    </section>

    <footer id="footer">
       <!-- footer content loaded here -->
    </footer>

  </div>
  
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="js/scripts.js"></script>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-68500419-1', 'auto');
  ga('send', 'pageview');
  </script>
</body>
</html>