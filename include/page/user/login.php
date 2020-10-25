<form id="registrationForm" method="post" action="login.php">
<div id="menu-signin" class="menu menu-box-bottom menu-box-detached rounded-m" 
         data-menu-height="370" 
         data-menu-effect="menu-over">
        <div class="content mb-0">
            <h1 class="font-700 mb-0">Log in</h1>
            <p class="font-11  mt-n1 mb-0">
                Don't have an account? Register below.
            </p>

           
            <div class="input-style has-icon input-style-1 input-required">
                <i class="input-icon fa fa-at"></i>
                <span>Email</span>
                
                <input type="email" name="email" placeholder="Email">
            </div>         
            <div class="input-style has-icon input-style-1 input-required">
                <i class="input-icon fa fa-lock font-11"></i>
                <span>Password</span>
              
                <input type="password" name="lozinka" placeholder="Enter password">
            </div>        
            <p class="text-center pb-0 mb-n1 pt-1">
                <a href="#" data-menu="menu-sign2" class="text-center font-11 color-gray2-dark">Not Registered? Register Here.</a>
            </p>
            <button type="submit" class="btn btn-full btn-m shadow-l rounded-s text-uppercase font-900 bg-blue2-dark mt-4"></i>Log in</button>
        </div>
    </div>
	</form>
	
	
	
	<form id="registrationForm" method="post" action="register.php">
<div id="menu-sign2" class="menu menu-box-bottom menu-box-detached rounded-m" 
         data-menu-height="570" 
         data-menu-effect="menu-over">
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
            <button type="submit" class="btn btn-full btn-m shadow-l rounded-s text-uppercase font-900 bg-blue2-dark mt-4"></i>Register</button>
        </div>
    </div>
	</form>