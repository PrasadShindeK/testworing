<!--start inluding header-->
<?php
include('./mainInclude/header.php');
?>
<!--end inluding header-->
<br>
<div class="container-fluid bg-primary">
<div class="row">
      <img src="./image/Guitar.jpg" alt="courses"
       style="height:400px; width:79rem; object-fit:cover; box-shadow:10px;"/>
    </div>
</div>
<div class="container mt-5">
 <div class="row">
   <div class="col-md-4">
     <img src="./image/Guitar.jpg" alt="courses"
       style="height:200px; width:200px; object-fit:cover; box-shadow:10px;"/>
       </div>
    <div class="col-md-8">
     <div class="card-body">
       <h5 class="card-title">Courses Name: Learn Guitkar</h5>
       <p class="card-text">Description: Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto
            assumenda ducimus sit deleniti ipsam amet iste quaerat, nisi qui, voluptate, dolorem expedita.
             Nisi magni, id tempora voluptas mollitia dolorem iure. </p>
    <p class="card-text">Duration: 10 Days</p>
    <form action="" method="post">
        <p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small>
     <span class="font-weight-bolder"></span>&#8377 200</p>
     <button type="submit" class="btn btn-primary text-white font-weight-bolder float-right" name="buy">Buy Now</button>
    </form>
     </div>
    </div>
 </div>
</div>
<div class="container">
  <div class="row">
    <table class="table table-bordered table-hover ">
      <thead>
          <tr>
              <th scope="col">Lesson No.</th>
              <th scope="col">Lesson Name</th>
          </tr>
      </thead>
      <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Introduction</td>
          </tr>
      </tbody>
    </table>
  </div>
</div>

<br>
<br>


<!-- start including footer-->
<?php
include('./mainInclude/footer.php');
?>
 <!-- end including footer-->