<?php
if($name = $_POST['firstName']){
	$newEmail = true;
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$comments = $_POST['comments'];
	
	$emailBody = "Message From: " . $name . "\n";
	$emailBody .= "EmailAddress: " . $email . "\n";
	$emailBody .="Phone Number: " . $phone . "\n";
	$emailBody .="Message: " . $comments . "\n";
	$emailBody .="\n" ."~sent from www.honduraschildrensproject.org~";
	
//email sent to davey
$to = "david@honduraschildrensproject.org";	//davey's email		********
$subject = "New Message From ~ " . $name;
$headers = "From: info@honduraschildrensproject.org";	//from address

mail($to,$subject,$emailBody,$headers);
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <title>Honduras Children's Project</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
  		 <link href="css/template.css" rel="stylesheet">      
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
              <h2>and by sending Oscar Sanchez, a Copprome graduate, to university.</h2>
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
      <h1>Mission</h1>
    </div>
    
    <p class="lead text-center"> 
Honduras Children's Project is a non-profit organization dedicated to improving the education for the children of Copprome Orphanage in El Progreso, Honduras by providing them with an educational after-school program and by supporting the public elementary school they attend.
</p>
    <p class="lead text-center"> 
Honduras Children’s Project has hired a teacher and two teaching assistants to work with the children in the after-school program. We are paying for Oscar Sanchez, a Copprome graduate, to attend university and return to teach the children. We have brought school supplies, uniforms, and three laptop-computers to the orphanage, in addition to providing for the special-education assistance of 14 children. In support of Dr. Jose Angel Zuniga Huete School (the children's elementary school), Honduras Children's Project has purchased 40 desks, 20 fans, a color multifunctional printer, a whiteboard, and numerous school supplies. We maintain close ties with the children and our staff by visiting Copprome at least twice a year.
</p>
    <p class="lead text-center"> 
Through several fundraising projects, we raise over $25,000 each year. We host Spaghetti and Chicken Dinners, sell chocolate-covered bacon at the Durham Fair, host an annual Golf Tournament (Swing for Honduras), and sell our “trashy products” and other hand-made Honduran products at local craft fairs and bazaars.    
    </p>
    <hr>
    
    <div class="divider"></div>
    
  </div>
</div>
    
<div class="divider"></div>
  
<section class="bg-1">
  <div class="col-sm-6 col-sm-offset-3 text-center"><h2 style="padding:20px;background-color:rgba(5,5,5,.8)">Our Projects</h2></div>
</section>
  
<div class="divider" id="projects"></div>
   
<div class="row">
  	<div class="col-sm-10 col-sm-offset-1">
      <h1>Projects</h1>
      
      <hr>
     
     <h3>After-School Program</h3>
     Honduras Children's Project
     <ul>
    <li>has hired and is paying the salary of a professional teacher to work daily in the educational after-school program.</li>
	<li>has hired and is paying the salaries of two teacher's assistants to work with the children at school and in the after-school program.</li>
	<li>is providing for the special educational assistance of 14 Copprome children.</li>
	<li>is paying for a Copprome graduate to attend university, so that he can return after graduation as a professional teacher to work with the children.</li>
	<li>purchased and brought three laptop-computers for use by the children.</li>
	<li>has purchased physical education uniforms for the kids.</li>
	<li>has bought numerous school supplies and related materials for use by children at school and in the after-school program.</li>
     </ul>
     
     <hr>
     
     <h3>School Supplies</h3>
     Honduras Children's Project
     <ul>
     <li>has purchased 40 desks, 20 fans, a color multifunctional printer, a whiteboard, and numerous school supplies.</li>
     <li>is helping pay for the children's English instruction.</li>
     </ul>
     
     <hr>
     
     <h3>Scholarships</h3>
     <ul>
     <li>Honduras Children's Project is paying for Oscar Sanchez, a Copprome graduate, to attend a four-year public university: Universidad Autonoma de Honduras (UNAH).</li>
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
    <h3>Spaghetti Dinner</h3>
    <p class="lead"><em>May 2, 2015 -- 5-7pm</em><br>
    <em>Church of the Holy Advent</em><br>
    81 East Main Street<br>
    Clinton, CT<br>
    </p>
    <hr>
    <h3>Durham Fair</h3>
    <p class="lead"><em>September 24-27, 2015</em><br>
    For the fifth year, we'll be selling our signature chocolate-covered bacon at the Durham Lions booth.
    </p>
    <hr>
    <h3>Fourth Annual Swing for Honduras Golf Tournament</h3>
    <p class="lead"><em>Sunday, October 3, 2015</em><br>
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
          <div class="panel-thumbnail"><a href="#" title="Matt Erodici, Vice President"><img src="pics/team/matt.jpg"></a></div>
          <div class="panel-body">
            <p>Matt Erodici, Vice President</p>
            <p>Member, Board of Directors</p>
            
          </div>
        </div><!--/panel--> 
      </div><!--/col-->
      
      <div class="col-sm-4 col-xs-6">
      
      	<div class="panel panel-default">
          <div class="panel-thumbnail"><a href="#" title="Charlie Proctor, Founder"><img src="pics/team/charlie.jpg"></a></div>
          <div class="panel-body">
            <p>Charlie Proctor, Founder &amp Senior Consultant</p>
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
          <div class="panel-thumbnail"><a href="#" title="Tristan Jamidar"><img src="pics/team/tristan.jpg"></a></div>
          <div class="panel-body">
            <p>Tristan Jamidar</p>
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
          <div class="panel-thumbnail"><a href="#" title="Julia Bishop-Hahlo"><img src="pics/team/julia.jpg"></a></div>
          <div class="panel-body">
            <p>Julia Bishop-Hahlo</p>
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
                602 Blue Hills Road<br>
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


        
        <script type='text/javascript' src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

        <script type='text/javascript' src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>

<script type='text/javascript' src="http://maps.googleapis.com/maps/api/js?sensor=false&extension=.js&output=embed"></script>



        
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