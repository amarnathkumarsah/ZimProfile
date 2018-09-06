<DOCTYPE HTML>
<?php
 include"head.php";
 include"header.php";
  ?>
  <head>
  
  </head>
  <style>
  .jumbotron {
background: #ce4435;
color: #FFF;
border-radius: 0px;
}
.jumbotron-sm { padding-top: 24px;
padding-bottom: 24px; }
.jumbotron small {
color: #FFF;
}
.h1 small {
font-size: 24px;
}
.btn-primary {
    color: #fff;
    background-color: #ce4435;
    border-color: #ce4435;
}
#contact .card:hover i,#contact .card:hover h4{
	color: #ce4435;
}
  </style>
  <body>
   <!--//=== breadcrumb-section ===//-->
        <div class="detail-section">
            <div class="container-fluid">
                <div class="row ">
                    <div class="special-style special-style-dark col-md-12 breadcrumb-img-section">
                        <div class="bg-image" style="background-image:url('assets/img/gallary/stargym3.jpg');"></div>
                    </div>
                    <div class="breadcrumb-section text-center padT200 padB100">
                       <h1><font color="white">GET IN TOUCH</font></h1>
                        <ul class="breadcrumb">
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li class="active">Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--//=== breadcrumb-section Finesh ===//-->
		<br>
		<hr>
		<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                     <small>Feel free to contact us</small></h1>
            </div>
        </div>
    </div>
</div>
		<div class="container">
		<div class="card">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form method="post" action="homepage.php"  class="form-message">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" pattern="[a-z,A-Z\s]{3,30}" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                        </div>
						 <div class="form-group">
                            <label for="phone">
                               Phone Number</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span>
                                </span>
                                <input type="phone" name="phone" class="form-control" id="phone" placeholder="Enter phone number"  pattern="[0-9]{10}" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="Trainer Facility" selected=""> Trainer Facility</option>
                                <option value="Body Building Training">Body Building Training</option>
                                <option value="Weight Loss Training">Weight Loss Training</option>
                                <option value="Weight Gain Training">Weight Gain Training</option>
								  <option value="Personal Training">Personal Training</option>
                                <option value="Group Exercise/Aerobics">Group Exercise/Aerobics</option>
								  <option value="Fitness Assessment & Testing"> Fitness Assessment & Testing</option>
                                <option value="Massage">Massage</option>
								<option value="Nutrition">Nutrition</option>
								<option value="Others">Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            
                    </div>
                </div>
                </form>
            </div>
        </div>
		</div>
		</div>
		</div>
		<hr>
		<section id="contact">
       <div class="container">
           <div class="row">
             <div class="col-sm-12 col-md-4">
               <div class="card border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-phone fa-5x mb-3" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">Call Us:</h4>
					<hr>
                    <p><b>+91-9097327179</b>,<br><b>+91-8862899244</b></p>
                  </div>
                </div>
             </div>
             <div class="col-sm-12 col-md-4">
               <div class="card border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-map-marker fa-5x mb-3" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">Office Loaction:</h4>
					<hr>
                   <address> R.G. Centre, 1st Floor, <br>Near Bharat Gas Godown,<br>Rajeev Nagar, Nala Par,Patna-800024</address>
                  </div>
                </div>
             </div>
              
             <div class="col-sm-12 col-md-4">
               <div class="card border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-globe fa-5x mb-3" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">E-m@il:</h4>
					<hr>
                    <p><b>starelevengym@gmail.com</b></p>
                  </div>
                </div>
             </div>
           </div>
       </div><br><br><br><br>
    </section>
	<hr>
	
	
  </body>
   
  <?php
 include"footer.php"; 
 include"script.php";
  ?>
  
  </html>