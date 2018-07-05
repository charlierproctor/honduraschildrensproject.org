<?php
if(isset($_POST['firstName'])){

	// used to alert for a new message... see js below.
	$newEmail = true;

	// construct the email body
	$emailBody = "Message From: " . $_POST['firstName'] . "\n";
	$emailBody .= "EmailAddress: " . $_POST['email'] . "\n";
	$emailBody .="Phone Number: " . $_POST['phone'] . "\n";
	$emailBody .="Message: " . $_POST['comments'] . "\n";
	$emailBody .="\n" ."~sent from www.honduraschildrensproject.org~";
	
	// set default timezone
	date_default_timezone_set('Etc/UTC');

	require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

	//Create a new PHPMailer instance
	$mail = new PHPMailer;

	//Tell PHPMailer to use SMTP
	$mail->isSMTP();

	//Set the hostname of the mail server
	$mail->Host = 'smtp.gmail.com';

	//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
	$mail->Port = 465;

	//Set the encryption system to use - ssl (deprecated) or tls
	$mail->SMTPSecure = 'ssl';

	//Whether to use SMTP authentication
	$mail->SMTPAuth = true;

	//Username to use for SMTP authentication - use full email address for gmail
	$mail->Username = "charlie@honduraschildrensproject.org";

	//Password to use for SMTP authentication
	$mail->Password = "u*69ocp4#yv*O$%EZvX^Tt17XVJPv3";

	//Set who the message is to be sent from
	$mail->setFrom('info@honduraschildrensproject.org', "Honduras Children's Project");

	//Set who the message is to be sent to
	$mail->addAddress('charlie@honduraschildrensproject.org', 'Charlie Proctor');

	//Set the subject line
	$mail->Subject = "New Message From ~ " . $_POST['firstName'];

	// Set the message body
	$mail->Body = $emailBody;

	//send the message, check for errors
	if (!$mail->send()) {
		error_log("Mailer Error: " . $mail->ErrorInfo);
	} else {
		error_log("Message Sent");
	}
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <title>Honduras Children's Project</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
  		 <link href="css/style.css" rel="stylesheet">      
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    
    <body>
        
        <!-- Wrap all page content here -->
<div id="wrap">

<header class="masthead">
  	<!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      
      <div class="carousel-inner">
        <div class="item active">
          <img src="pics/carousel/carolina-belkis.jpg">
          <div class="container">
            <div class="carousel-caption">
              <h2>dedicated to improving the education for the children of Copprome Orphanage in El Progreso, Honduras</h2>
              <p></p>
            </div>
          </div>
        </div>
        
        <div class="item">
          <img src="pics/carousel/davey-computer.jpg">
          <div class="container">
            <div class="carousel-caption">
              <h2>by providing an educational after-school program,</h2>
              <p></p>
            </div>
          </div>
        </div>
        
        <div class="item">
          <img src="pics/carousel/charlie-school.jpg">
          <div class="container">
            <div class="carousel-caption">
              <h2>supporting the local elementary school with basic supplies,</h2>
              <p></p>
            </div>
          </div>
        </div> 
        
        <div class="item">
          <img src="pics/carousel/oscar.jpg">
          <div class="container">
            <div class="carousel-caption">
              <h2>and by providing scholarships for students and staff to attend a nearby university.</h2>
              <p></p>
            </div>
          </div>
        </div> 
      </div><!-- /.carousel-inner -->
      
      <div class="logo-wrapper">
        <div class="logo">Honduras Children's Project</div> 
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>  
    </div>
    <!-- /.carousel --> 
</header>
  
  
<!-- Fixed navbar -->
<div class="wrapper">
<div id="top"></div>
<div class="navbar navbar-custom navbar-inverse navbar-static-top" id="nav">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse"> 
        <ul class="nav navbar-nav nav-justified">
          <li><a href="#mission">Mission</a></li>
          <li><a href="#projects">Projects</a></li>
          <li><a href="#events">Events</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#donate">Donate</a></li>
          <li><a href="#connect">Connect</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div><!--/.container -->
</div><!--/.navbar -->
  
<!-- Begin page content -->
<div class="divider" id="mission"></div>
  
<div class="container">
  <div class="col-sm-10 col-sm-offset-1">
    <div class="page-header text-center">
      <h1>Our Mission</h1>
    </div>
    
    <p class="lead text-center"> 
Honduras Children's Project is a non-profit organization dedicated to improving the education for the children of Copprome Orphanage in El Progreso, Honduras by providing them with an educational after-school program and by supporting the public elementary school they attend.
</p>
    <p class="lead text-center"> 
Honduras Children's Project staff at Copprome Orphanage includes two teachers, five teaching assistants, and one administrator to work with the children in our after-school program. We are paying for two of our Copprome staff members to attend a nearby university. We sponsor one Copprome child to attend a bilingual private school and two teenagers to attend a trade school. We provide school supplies and uniforms to the children at the orphanage. In support of Dr. Jose Angel Zuniga Huete School (the children's elementary school), Honduras Children's Project has purchased 40 desks, 20 fans, a color multifunctional printer, a whiteboard, and numerous school supplies. We maintain close ties with the children and our staff by visiting Copprome three-four times a year.
</p>
    <p class="lead text-center"> 
Through several fundraising projects, we raise over $35,000 each year. We host an annual spaghetti dinner, sell chocolate-covered bacon at the Durham Fair and host an annual Golf Tournament (Swing for Honduras).    
    </p>
    <hr>
    
    <div class="divider"></div>
    
  </div>
</div>
    
<div class="divider"></div>
  
<section class="bg-1">
  <div class="col-sm-6 col-sm-offset-3 text-center"><h2 style="padding:20px;background-color:rgba(5,5,5,.8)">Our Work</h2></div>
</section>
  
<div class="divider" id="projects"></div>
   
<div class="row">
  	<div class="col-sm-10 col-sm-offset-1">
      <h1>Our Work</h1>
      
      <hr>
     
     <h3>Staff Members at Copprome</h3>
     Honduras Children's Project pays for the following staff members at Copprome Orphanage:
     <ul>
    <li>Two professional teachers to work daily in the educational after-school program, including one special education instructor.</li>
	<li>Five teaching assistants to work with the children at school and in our after-school program.</li>
    <li>One administrator to oversee the general operations. 
     </ul>
     
     <hr>
     
     <h3>School Supplies</h3>
     Honduras Children's Project
     <ul>
	<li>has bought numerous school supplies and related materials for use by children at school and in the after-school program.</li>
     <li>has purchased 40 desks, 20 fans, a color multifunctional printer, a whiteboard, and numerous school supplies.</li>
     </ul>
     
     <hr>
     
     <h3>Scholarships</h3>
     Honduras Children's Project
     <ul>
     <li>is paying for two of our staff members to attend a nearby four-year public university.</li>
    <li>is paying for a Copprome child to attend a bilingual private school and two teenagers to attend a trade school.</li>
</ul>

    <hr>
      
      <div class="divider"></div>
      
  	</div><!--/col-->
</div><!--/container-->


<div class="divider"></div>
  
<section class="bg-2">
  <div class="col-sm-6 col-sm-offset-3 text-center"><h2 style="padding:20px;background-color:rgba(5,5,5,.8)">Our Events</h2></div>
</section>
  
<div class="divider" id="events"></div>
   
<div class="row">
  	<div class="col-sm-10 col-sm-offset-1">
      <h1>Our Events</h1>
       
    <hr>    
    <h3>Eighth Annual Spaghetti Dinner - Success!!!</h3>
    <p class="lead"><em>April 28, 2018</em><br>
    <em>Church of the Holy Advent</em><br>
    81 East Main Street, Clinton, CT
    </p>
    <hr>
    <h3>Durham Fair</h3>
    <p class="lead"><em>September 27-30, 2018</em><br>
    For the eighth year, we'll be selling our signature chocolate-covered bacon at the Durham Lions booth.
    </p>
    <hr>
    <h3>Seventh Annual <em>Swing for Honduras</em> Golf Tournament</h3>
    <p class="lead"><em>October 7, 2018</em><br>
    <em>Indian Springs Golf Course, Middlefield, CT</em><br>
    A fun golf tournament for all ages and abilities.
    </p>
    <hr>
    <p class="lead">
    Interested in helping? Your support is what makes these events possible. <a href="#connect">Please contact us!</a>
    </p>
    <hr>
      <div class="divider"></div>
      
  	</div><!--/col-->
</div><!--/container-->



<div class="divider"></div>
  
<section class="bg-3">
  <div class="col-sm-6 col-sm-offset-3 text-center"><h2 style="padding:20px;background-color:rgba(5,5,5,.8)">Our Team</h2></div>
</section>
  
  
<div class="bg-4" id="team">
  <div class="container">

	<div class="row">
	   <div class="col-sm-4 col-xs-6">
      
        <div class="panel panel-default">
          <div class="panel-thumbnail"><a href="#" title="David Proctor, President"><img src="pics/team/david.jpg"></a></div>
          <div class="panel-body">
            <p>David Proctor, President</p>
            <p>Member, Board of Directors</p>
          </div>
        </div><!--/panel-->
      </div><!--/col-->
      
      <div class="col-sm-4 col-xs-6">
      
      	<div class="panel panel-default">
          <div class="panel-thumbnail"><a href="#" title="Charlie Proctor, Founder"><img src="pics/team/charlie.jpg"></a></div>
          <div class="panel-body">
            <p>Charlie Proctor, Founder</p>
            <p>Member, Board of Directors</p>
            
          </div>
        </div><!--/panel--> 

      </div><!--/col--> 
      
      <div class="col-sm-4 col-xs-6">
      
      	<div class="panel panel-default">
          <div class="panel-thumbnail"><a href="#" title="Deborah D. Proctor, Treasurer"><img src="pics/team/deb.jpg"></a></div>
          <div class="panel-body">
            <p>Deborah D. Proctor, Treasurer</p>
            <p>Member, Board of Directors</p>
            
          </div>
        </div><!--/panel--> 

      </div><!--/col--> 
      
            <div class="col-sm-4 col-xs-6">
      
        <div class="panel panel-default">
          <div class="panel-thumbnail"><a href="#" title="Marye Wagner"><img src="pics/team/marye.jpg"></a></div>
          <div class="panel-body">
            <p>Marye Wagner</p>
            <p>Member, Board of Directors</p>
            
          </div>
        </div><!--/panel--> 

      </div><!--/col--> 
      
      <div class="col-sm-4 col-xs-6">
      
      	<div class="panel panel-default">
          <div class="panel-thumbnail"><a href="#" title="Charlene Weted"><img src="pics/team/charlene.jpg"></a></div>
          <div class="panel-body">
	<p>Charlene Weted</p>
	   <p>Member, Board of Directors</p>

          </div>
        </div><!--/panel--> 
      </div><!--/col-->

	</div><!--/row-->
  </div><!--/container-->
</div>

<section class="bg-5">
  <div class="col-sm-6 col-sm-offset-3 text-center"><h2 style="padding:20px;background-color:rgba(5,5,5,.8)">Make a Donation</h2></div>
</section>

<div class="divider" id="donate"></div>

<div class="row">
  <div class="col-md-8 col-md-offset-1">
  </div>
</div>
  
<div class="row">
  
  <div class="col-sm-10 col-sm-offset-1">
      <h1>Donate</h1>
      <div class="lead text-center"><strong>Option #1:</strong> Make a donation through Network for Good:</div>
      <div align="center"><a href="https://www.networkforgood.org/donation/ExpressDonation.aspx?ORGID2=45-2708588"><img class="img-responsive img-rounded" src="pics/networkforgood.jpg"></a></div>
      <hr>
      
      <div class="lead text-center"><strong>Option #2:</strong> Write a Check:</div>
      <p class="lead text-center">Make the check payable to <strong>Honduras Children's Project,</strong> and mail it to:</p>
              <div class="lead text-center">
                Honduras Children's Project<br>                
                414 Blue Hills Road<br>
                Durham, CT 06422<br>
</div>             
      <hr>
             <p>Honduras Children's Project is an official non-profit organization, EIN: 45-2708588. Your donation is tax-deductible. We will send you a receipt for tax-related purposes. 
</p><p>
All funds raised support our work in Honduras -- we are dedicated to improving the education for the children of Copprome Orphanage, by providing them with an educational after-school program, and by supporting the local elementary school with basic supplies. </p>
<p>Please visit <a href="http://www.guidestar.org/organizations/45-2708588/honduras-childrens-project.aspx">GuideStar</a> if you have any questions and for a full report. </p>       
  </div>   

  <hr>
  

</div><!--/row-->
  
<section class="bg-6">
  <div class="col-sm-6 col-sm-offset-3 text-center"><h2 style="padding:20px;background-color:rgba(5,5,5,.8)">Connect with Us</h2></div>
</section>
<div class="divider" id="connect"></div>  

<div class="row">
    
  <div class="col-sm-9 col-sm-offset-1">
      <form action="" method="post">
      <div class="row form-group">
        <div class="col-md-12">
        <h1>Contact Us</h1>        
        </div>
        <div class="col-xs-4">
          <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Your Name">
        </div>
      </div>
      <div class="row form-group">
          <div class="col-xs-5">
          <input type="text" class="form-control" name="email" placeholder="Email">
          </div>
          <div class="col-xs-5">
          <input type="text" class="form-control" name="phone" placeholder="Phone">
          </div>
      </div>
      <div class="row form-group">
          <div class="col-xs-10">
            <textarea class="form-control" name="comments" placeholder="Message" rows="5"></textarea>
          </div>
      </div>
      <div class="row form-group">
          <div class="col-xs-10">
            <button class="btn btn-default pull-right" type="submit">Send Message</button>
          </div>
      </div>
    </form>
    
  </div>
  
</div><!--/row-->
  
<div class="container">
  	<div class="col-sm-8 col-sm-offset-2 text-center">

      <ul class="list-inline center-block">
        <li><a href="http://facebook.com/HondurasChildrensProject"><img src="pics/social/fb.jpg"></a></li>
        <li><a href="https://twitter.com/HondurasChildPr"><img src="pics/social/tw.jpg"></a></li>
        <li><a href="http://www.youtube.com/HondurasChildrensPro"><img src="pics/social/youtube.jpg"></a></li>
      </ul>
      
  	</div><!--/col-->
</div><!--/container-->
</div><!-- /wrapper -->
</div><!--/wrap-->

<div id="footer">
  <div class="container">
    <p class="text-muted">Honduras Children's Project &copy; 2014</p>
  </div>
</div>

<ul class="nav pull-right scroll-top">
  <li><a href="#mission" title="Scroll to top"><i class="glyphicon glyphicon-chevron-up"></i></a></li>
</ul>


<div class="modal" id="myModal" role="dialog">
  <div class="modal-dialog">
  <div class="modal-content">
	<div class="modal-header">
		<button class="close" type="button" data-dismiss="modal">×</button>
		<h3 class="modal-title"></h3>
	</div>
	<div class="modal-body">
		<div id="modalCarousel" class="carousel">
 
          <div class="carousel-inner">
           
          </div>
          
          <a class="carousel-control left" href="#modalCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
          <a class="carousel-control right" href="#modalCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
          
        </div>
	</div>
	<div class="modal-footer">
		<button class="btn btn-default" data-dismiss="modal">Close</button>
	</div>
   </div>
  </div>
</div>


        
        <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

        <script type='text/javascript' src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>

        
        <!-- JavaScript jQuery code from Bootply.com editor -->
        
        <script type='text/javascript'>
        
        $(document).ready(function() {
        
		<?php
		if ($newEmail){
			echo 'alert("Your Message has Been Sent -- Thank You!");';
		}
		?>
            $('.carousel').carousel({interval:4000});

/* affix the navbar after scroll below header */
$('#nav').affix({
      offset: {
        top: $('header').height()-$('#nav').height()
      }
});	

/* highlight the top nav as scrolling occurs */
$('body').scrollspy({ target: '#nav' })

/* scroll to a particular tag */
function scrollTo(link){
  var posi = $(link).offset().top;
  $('body,html').animate({scrollTop:posi},700);
}

/* smooth scrolling for scroll to top */
$('.scroll-top').click(function(){
  scrollTo("#top");
})

/* smooth scrolling for nav sections */
$('#nav .navbar-nav li>a').click(function(){
  var link = $(this).attr('href');
  scrollTo(link);
});


/* copy loaded thumbnails into carousel */
$('.panel img').on('load', function() {
  
}).each(function(i) {
  if(this.complete) {
  	var item = $('<div class="item"></div>');
    var itemDiv = $(this).parent('a');
    var title = $(this).parent('a').attr("title");
    
    item.attr("title",title);
	
  	$(itemDiv.html()).appendTo(item);
  	item.appendTo('#modalCarousel .carousel-inner'); 
    if (i==0){ // set first item active
     item.addClass('active');
    }
  }
});

/* activate the carousel */
$('#modalCarousel').carousel({interval:false});

/* change modal title when slide changes */
$('#modalCarousel').on('slid.bs.carousel', function () {
  $('.modal-title').html($(this).find('.active').attr("title"));
})

/* when clicking a thumbnail */
$('.panel-thumbnail>a').click(function(e){
  
    e.preventDefault();
    var idx = $(this).parents('.panel').parent().index();
  	var id = parseInt(idx);
  	
  	$('#myModal').modal('show'); // show the modal
    $('#modalCarousel').carousel(id); // slide carousel to selected
  	return false;
});
              });
        
        </script>
        
    </body>
</html>
