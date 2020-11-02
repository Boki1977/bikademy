
<?php
if($user_num < 1)
{
	$add_link='href="#" data-menu="menu-signin"';
	$index_link='href="#" data-menu="menu-signin"';
	$profile_link='href="#" data-menu="menu-signin"';
}
else{
	
	$add_link='href="index.php?page=add_exam"';
	$index_link='href="index.php?page=indeks_user"';
	$profile_link='href="index.php?page=profile"';
}


if($page=='')
{
	$home_active='class="active-nav"';
}
if($page=='indeks_user')
{
	$index_active='class="active-nav"';
}
if($page=='profile')
{
	$profile_active='class="active-nav"';
}
?>

<div id="footer-bar" class="footer-bar-5">
<a href="index.php" <?php echo $home_active; ?>><img src="data/source/icons/home.png"></a>
<a <?php echo $index_link; ?> <?php echo $index_active; ?>><img src="data/source/icons/index.png"></a>
<a <?php echo $profile_link; ?> <?php echo $profile_active; ?>><img src="data/source/icons/profile.png"></a>
</div>

<?php
if($user_num < 1)
{
include("include/page/user/login.php");
}
?>
    