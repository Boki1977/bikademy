<?php
session_start();
include("dbh.php");




$email=$_SESSION['email'] = $_POST['email'];
$pasword=$_SESSION['pasword'] = $_POST['lozinka'];
$pasword = md5( $pasword );
//---provjera postoji li aktivan korisnik u bazi
$result = $con->query("SELECT * FROM korisnici WHERE email='$email' AND lozinka='$pasword'");	
$user_num=mysqli_num_rows($result);


if($user_num>0){
echo'
<script language="javascript">
    window.location.href = "index.php?alert=sucesslogin"
</script>
';
}


if($user_num<1){
echo'
<script language="javascript">
    window.location.href = "index.php?alert=nonelogin"
</script>
';
}











?>

<!DOCTYPE html>


<html xmlns="http://www.w3.org/1999/xhtml">
<!--Head-->

<?php
include("include/head.php")
?>
<!--Head Ends-->
<!--Body-->
<body>
  <form class="form-horizontal m-t-20" method="post" action="">
    <div class="login-container animated fadeInDown">
        <div class="loginbox bg-white">
            <div class="loginbox-title">PRIJAVA</div>
            
            <div class="loginbox-or">
                <div class="or-line"></div>
                <div class="or">WEBDESK</div>
            </div>
            <div class="loginbox-textbox">
                <input type="text" name="email" class="form-control" placeholder="Email" />
            </div>
            <div class="loginbox-textbox">
                <input type="password" name="lozinka" class="form-control" placeholder="Password" />
            </div>
            <div class="loginbox-forgot">
                <a href="#">Zaboravljena lozinka?</a>
            </div>
             <input type="hidden" name="radnja" value="login">
            <div class="loginbox-submit">
            
             <button type="submit" class="btn btn-primary btn-block">Prijava</button>
                
            </div>
            
        </div>
      
    </div>
</form>
<?php
include ("include/footer_scripts.php");
?>
</body>
<!--Body Ends-->


</html>
