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
		          <h1 class="head3">Forget Password</h1>
		          <h5 class="forget1">We will send you an email with <br>instructions on how to reset your password.</h5>


		          <div data-mdb-input-init class="form-outline mb-4">
		            <input type="email" id="form1Example13" class="form-control form-control-lg" placeholder="Email Address*" />
		            <label class="form-label" for="form1Example13"></label>
		          </div>

		          <!-- Password input -->
		          <div data-mdb-input-init class="form-outline mb-4">
		             	<input type="submit" name="send" value="Email Me" class="button-dark">
		            <label class="form-label" for="form1Example23"></label>
		          </div>
		        </form>
		      </div>
		      <div class="col-md-8 col-lg-7 col-xl-6 image1">
		        <img class="logoimg" src="./img/forget.png" alt="Image">
		      </div>
		       
		    </div>
		  </div>
		 </div>
	</div>
</section>
<?php
	include"footer.php";
?>