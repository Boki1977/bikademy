<?php
include("login_check.php");

if($user_num > 0)
{
?>

<!DOCTYPE HTML>
<?php
include("include/head_register_update.php");
}
else{
?>
<script type="text/javascript">
document.location = "index.php?alert=nonelogin";
</script>
<?php
}
?>
<body> 




