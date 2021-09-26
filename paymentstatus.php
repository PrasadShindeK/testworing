<!--start inluding header-->
<?php
include('./mainInclude/header.php');
?>
<!--end inluding header-->
<br>
<div class="container-fluid bg-primary">
    <div class="row">
      <img src="./image/Guitar.jpg" alt="courses"
       style="height:400px; width:78rem; object-fit:cover; box-shadow:10px;"/>
    </div>
</div>

<div class="container">
    <h2 class="text-center my-4">Payment Status</h2>
      <form method="post" action="">
        <div class="form-group row">
            <label for="" class="offset-sm-3 col-form-label">Order ID</label>
            <div>
                <input type="text" class="form-control mx-3">
            </div>
            <div>
                <input type="submit" class="btn btn-primary mx-4" value="View">
            </div>
        </div>
      </form> 
</div>
<br>
<br>
<?php
include('./contact.php');
?>

<!-- start including footer-->
<?php
include('./mainInclude/footer.php');
?>
 <!-- end including footer-->