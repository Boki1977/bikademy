
	<script>
					
	$(document).ready(function(){
		
	$("#register").click(function(){

	$('#confirm_box').show() 
	$("#forma").hide();


	});

	});
	</script>

<div class="card card-style" id="confirm_box" style="display:none; margin-top: 55%;">
<div class="spinner-border color-blue2-dark"  style="margin-top:5%; margin-bottom:5%; margin-left:43%" id="preload" role="status">
<span class="sr-only">Loading...</span>
</div>
</div>


<form id="registrationForm" method="post" action="register.php">
<div class="card card-style" style="margin-top: 30%;" id="forma">

        <div class="content mb-0">
            <h3 class="font-700 mb-0">Personal information</h3>
          

           
             <div class="input-style input-style-2 input-required" style="margin-top:5%;">
                    <label>Name</label>
                    <em>(required)</em>
                    <input class="form-control" name="ime" type="text" placeholder="">
             </div>


			<div class="input-style input-style-2 input-required" style="margin-top:5%;">
                    <label>Last name</label>
                    <em>(required)</em>
                    <input class="form-control" name="prezime" type="text" placeholder="">
            </div>
			
			
			<div class="input-style input-style-2 input-required" style="margin-top:5%;">
                    <label>Email</label>
                    <em>(required)</em>
                    <input class="form-control" name="email" type="email" placeholder="">
             </div>
			 
			 
			
			 <div class="input-style input-style-2 input-required" style="margin-top:5%;">
                    <label>Password</label>
                    <em>(required)</em>
                    <input class="form-control" name="lozinka" type="password" placeholder="">
            </div>
			
			 
			 
                 
            <p class="text-center pb-0 mb-n1 pt-1">
                <a href="#" data-menu="menu-signin" class="text-center font-11 color-gray2-dark">Already registered? Login here.</a>
            </p>
            <button type="submit" id="register" class="btn btn-full btn-m shadow-l rounded-s text-uppercase font-900 bg-blue2-dark mt-4"></i>Register</button>
        </div>
    </div>

