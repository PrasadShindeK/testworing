<div class="modal fade" id="myModal2">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Admin Login Form</h4>
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
  <footer class="container-fluid bg-dark text-center p-2">
	 <small class="text-white">Copyright &copy; 2009 || Designed By E-learging || <a href="#login"  data-toggle="modal" data-target="#myModal2"> Admin Login</a></small>

 </footer>

<!--Jquery and Boostrap JavaScript-->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
<script src="js/ajaxrequest.js"></script>

</body>
</html>