 <?php
	include"header.php";
?>
<section >
	<div class="formlayout">
		<div class="formlayout1">
		  <div class="container py-5 h-100">
		    <div class="row">
		    <div class="col">
		        <form>
		          <!-- Email input -->
		          <h1 class="head3">Login</h1>
		          <div data-mdb-input-init class="form-outline mb-4">
		            <input type="email" id="form1Example13" class="form-control form-control-lg" placeholder="Email Address" />
		            <label class="form-label" for="form1Example13"></label>
		          </div>

		          <!-- Password input -->
		          <div data-mdb-input-init class="form-outline mb-4">
		            <input type="password" id="form1Example23" class="form-control form-control-lg" placeholder="Password" />
		            <label class="form-label" for="form1Example23"></label>
		          </div>

		          <div class="d-flex justify-content-around align-items-center mb-4">
		            <!-- Checkbox -->
		            <div class="form-check">
		              <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
		              <label class="form-check-label" for="form1Example3"> Remember me </label>
		            </div>
		            <a href="Forget.php">Lost Your Password?</a>
		          </div>

		          <!-- Submit button -->
		          <input type="submit" name="send" value="Sign In" class="button-dark">
		          <h5 class="head5">New to Our Site ?</h5>
		          <a href="Register.php">Register Now</a>
		        </form>
		      </div>
		      <div class="col-md-8 col-lg-7 col-xl-6 image1">
		        <img class="logoimg" src="./img/login3.jpg" alt="Image">
		      </div>
		       
		    </div>
		  </div>
		 </div>
	</div>
</section>
<?php
	include"footer.php";
?>