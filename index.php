<!--start inluding header-->
<?php
include('./mainInclude/header.php');
?>
<!--end inluding header-->

<!--end Navigation-->

<!--Start Vieo background-->
<div class="container-fluid remove-vid-marg">
	<div class="vid-parent">
		<video playinline autoplay muted loop >
			<source src="video/video1.mp4">
		</video>
		<div class="vid-overlay"></div>
	</div>
	<div class="vid-content">
		<h1 class="my-content">Welcome to iSchool</h1>
		<small class="my-content">Learn and Implement</small><br><br>
		<a href="#" class="btn btn-danger" data-toggle="modal" data-target="#myModal1" >Get Started</a>

	</div>
</div>

<!--End Vieo background-->
<div class="container-fluid bg-danger txt-banner">
	<div class="row bottom-banner">
	 <div class="col-sm">
	  <h5><i class="fas fa-book-open mr-3"></i>100+ Online Courses</h5>
	 </div>
	 <div class="col-sm">
	 	<h5><i class="fas fa-users mr-3"></i>Expert Instructions</h5>
	 </div>
	 	 <div class="col-sm">
	 	<h5><i class="fas fa-keyboard mr-3"></i>lifetime Access</h5>
	 </div>
	 	<div class="col-sm">
	 	<h5><i class="fas fa-rupee-sign mr-3"></i>Money Back Guarantee</h5>
	 </div>
	</div>
</div>
<!--start text banner-->

<!-- end text banner-->
<!--start Most Popular Course-->
<div class="container mt-5">
	<h1 class="text-center">Popular Course</h1>
	  <div class="card-deck mt-4">
	   <a href="#" class="btn" style="text-align: left;padding: 0px;margin:0px;">
	      <div class="card">
	 	   <img src="image/Guitar.jpg" class="card-img-top" alt="Guitar"/>
	         <div class="card-body">
	  	       <h5 class="card-title">Learn Guitar Easy Way</h5>
	  	        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipoisicing elit. Facilis, meno.</p>
	            </div> 
	           <div class="card-footer">
	  	      <p class="card-text d-inline">Price:<small><del>&#8377 2000</del></small>
	  		 <span class="font-weight-border">&#8377 200</span></p>
	  		<a class="btn btn-primary text-white font-weight-bolder float-right" href="coursedetails.p">Enroll</a>
	       </div>
	 	</div>

	   <div class="card">
	 	<img src="image/Guitar.jpg" class="card-img-top" width="200px" alt="Guitar"/>
	      <div class="card-body">
	  	    <h5 class="card-title">Learn Python Easy Way</h5>
	  	     <p class="card-text">Lorem ipsum dolor sit amet consectetur adipoisicing elit. Facilis, meno.</p>
	           </div> 
	            <div class="card-footer">
	  	         <p class="card-text d-inline">Price:<small><del>&#8377 2000</del></small>
	  		      <span class="font-weight-border">&#8377 200</span></p>
	  		      <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
	              </div>
	 	        </div>	 

       <div class="card">
	 	<img src="image/Guitar.jpg" class="card-img-top" width="200px" alt="Guitar"/>
	      <div class="card-body">
	  	    <h5 class="card-title">Learn Python Easy Way</h5>
	  	     <p class="card-text">Lorem ipsum dolor sit amet consectetur adipoisicing elit. Facilis, meno.</p>
	           </div> 
	            <div class="card-footer">
	  	         <p class="card-text d-inline">Price:<small><del>&#8377 2000</del></small>
	  		      <span class="font-weight-border">&#8377 200</span></p>
	  		      <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
	              </div>
	 	        </div>

      <div class="card">
	 	<img src="image/Guitar.jpg" class="card-img-top" width="200px" alt="Guitar"/>
	      <div class="card-body">
	  	    <h5 class="card-title">Learn Python Easy Way</h5>
	  	     <p class="card-text">Lorem ipsum dolor sit amet consectetur adipoisicing elit. Facilis, meno.</p>
	           </div> 
	            <div class="card-footer">
	  	         <p class="card-text d-inline">Price:<small><del>&#8377 2000</del></small>
	  		      <span class="font-weight-border">&#8377 200</span></p>
	  		      <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
	              </div>
	 	        </div>



	           </a>
	         </div>
           
	      <div class="text-center m-2">
		<a class="btn btn-danger btn-sm" href="#">View All Course
		</a>
	</div>
</div>
<!--end Most Popular Course--> 
 
 <!--start contact us-->
 <?php
 include('./contact.php');
 ?>
 <!--end contct us-->

 <!--start students textimoils-->
 <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active" >
	<p>Adipisicing elit. Fuga maiores a harum vero laboriosam 
		  provident ratione possimus tempore reiciendis officiis tempora et facilis sed nobis, dolorum
		   numquam tenetur temporibus recusandae Lorem ipsum dolor sit amet consectetur .</p>
      <img src="image/Guitar.jpg" alt="Los Angeles">
	  <br>
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
	<p>  tempore reiciendis officiis tempora et facilis Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga maiores a harum vero laboriosam 
		  provident ratione possimus tempore reiciendis officiis tempora et facilis sed nobis, dolorum
		   numquam tenetur temporibus recusandae.</p>
      <img src="image/max1.jpg" alt="Chicago"  >
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>  
	  <br> 
    </div>
    <div class="carousel-item">
	<p>facilis sed nobis, dolorum
		   numquam tenetur temporibus recusanda Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga maiores a harum vero laboriosam 
		  provident ratione possimus tempore reiciendis officiis tempora et facilis sed nobis, dolorum
		   numquam tenetur temporibus recusandae.</p>
      <img src="image/Python.png" alt="New York">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
</div>
<br><br>
<!--start sign up registration form-->
 <!-- The Modal -->
  <div class="modal fade" id="myModal1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Student Registration</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

		<form action="">
         <div class="form-group">
			 <i class="fas fa-user"></i><label for="stuname" class="pl-2 font-weight-bold">Name</label>
			 <input type="text" class="form-control" placeholder="Name" name="stuname" id="stuname">
		 </div>
			 <div class="form-group">
			 <i class="fas fa-envelope"></i><label for="stuemail" class="pl-2 font-weight-bold">Email</label>
			 <input type="Email" class="form-control" placeholder="Email Enter" name="stuemail" id="stuemail">
          </div>
            <div class="form-group">
	        <i class="fas fa-key"></i><label for="stupass" class="pl-2 font-weight-bold">New Password</label>
			 <input type="password" class="form-control" placeholder="password" name="stupass" id="stupass">
        </div>
      </form>
			
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
		<button type="button" class="btn btn-primary"onclick="addstu()" id="stusignup" name="stusignup" value="stusignup">Sign Up</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  <!--end sign up registration form-->

 <!-- start login form-->
<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Student Login Form</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

		<form action="">
			 <div class="form-group">
			 <i class="fas fa-envelope"></i><label for="Email" class="pl-2 font-weight-bold">Email</label>
			 <input type="Email" class="form-control" placeholder="Email" name="Email" id="Email">
          </div>
            <div class="form-group">
	        <i class="fas fa-key"></i><label for="key" class="pl-2 font-weight-bold">Password</label>
			 <input type="password" class="form-control" placeholder="password" name="key" id="key">
        </div>
      </form>
			
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
		<button type="button" class="btn btn-primary" id="Stulogin">Login</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
        
      </div>
    </div>
  </div>
 <!-- end login form-->

<!-- Start Admin login form-->
<!-- The Modal -->

        <!-- End Admin Login Form -->

	<div class="container-fluid bg-danger txt-banner">
	<div class="row bottom-banner">
	 <div class="col-sm">
	  <h5><i class="fab fa-facebook-square" style="margin-left: 30px;"></i> Facebook</h5>
	 </div>
	 <div class="col-sm">
	 	<h5><i class="fab fa-twitter-square"></i> Twitter</h5>
	 </div>
	 	 <div class="col-sm">
	 	<h5><i class="fab fa-instagram-square mr-3"></i>Instagram</h5>
	 </div>
	 	<div class="col-sm">
	 	<h5><i class="fab fa-linkedin"></i> Linked</h5>
	 </div>
	</div>
</div>




	<div class="contflex">
		<div class="flex" id="box1"><b>About Us</b>
	<p>Lorem ipsum dolor sit amet, 
		consectetur adipisicing elit.
		 Deleniti maiores esse voluptatibus 
		 maxime doloremque deserunt fuga 
		 </p></div>
		<div class="flex" id="box2"><b>Category</b> 
		<p>Lorem ipsum dolor sit amet, 
		consectetur adipisicing elit.
		 Deleniti maiores esse voluptatibus 
		 maxime doloremque deserunt fuga 
		 </p></div>
		<div class="flex" id="box3"><b>Contact Us</b>
		<p>Lorem ipsum dolor sit amet, 
		consectetur adipisicing elit.
		 Deleniti maiores esse voluptatibus 
		 maxime doloremque deserunt fuga 
		</p></div>
	</div>

<!-- start including footer-->
<?php
include('./mainInclude/footer.php');
?>
 <!-- end including footer-->

