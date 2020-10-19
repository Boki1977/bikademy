
<?php
if($user_num < 1)
{
	$add_link='href="#" data-menu="menu-signin"';
	$index_link='href="#" data-menu="menu-signin"';
	$profile_link='href="#" data-menu="menu-signin"';
}
else{
	
	$add_link='href="index.php?page=add_exam"';
	$index_link='href="index.php?page=index"';
	$profile_link='href="index.php?page=profile"';
}
?>

<div id="footer-bar" class="footer-bar-5">
<a href="index.php" class="active-nav"><img src="data/source/icons/home.png"></a>
<a <?php echo $add_link; ?>><img src="data/source/icons/add.png"></a>
<a <?php echo $index_link; ?>><img src="data/source/icons/index.png"></a>
<a <?php echo $profile_link; ?>><img src="data/source/icons/profile.png"></a>
</div>

<?php
if($user_num < 1)
{
include("include/page/user/login.php");
}
?>
    