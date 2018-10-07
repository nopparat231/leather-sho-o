<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script> -->

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="js/bootstrap.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<?php // Include('h.php'); ?>
<script type="text/javascript">

	$(function() {

		$('a[href="#toggle-search"], .navbar-bootsnipp .bootsnipp-search .input-group-btn > .btn[type="reset"]').on('click', function(event) {
			event.preventDefault();
			$('.navbar-bootsnipp .bootsnipp-search .input-group > input').val('');
			$('.navbar-bootsnipp .bootsnipp-search').toggleClass('open');
			$('a[href="#toggle-search"]').closest('li').toggleClass('active');

			if ($('.navbar-bootsnipp .bootsnipp-search').hasClass('open')) {
				/* I think .focus dosen't like css animations, set timeout to make sure input gets focus */
				setTimeout(function() {
					$('.navbar-bootsnipp .bootsnipp-search .form-control').focus();
				}, 100);
			}
		});

		$(document).on('keyup', function(event) {
			if (event.which == 27 && $('.navbar-bootsnipp .bootsnipp-search').hasClass('open')) {
				$('a[href="#toggle-search"]').trigger('click');
			}
		});

	});

</script>

<style type="text/css">


.animate {
	-webkit-transition: all 0.3s ease-in-out;
	-moz-transition: all 0.3s ease-in-out;
	-o-transition: all 0.3s ease-in-out;
	-ms-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
}

.navbar-bootsnipp {
	background-color: rgb(255, 255, 255);
	border-color: rgb(95, 176, 228);
	border-radius: 0px;
	margin-bottom: 0px;
	z-index: 100;
}
.navbar-bootsnipp:nth-of-type(2) {
	border-top-width: 1px;
	z-index: 50
}

.navbar-bootsnipp.affix-top {
	position: absolute;
	top: 0px;
	width: 100%;
}
.navbar-bootsnipp.affix {
	top: 0px;
	width: 100%;
}
.navbar-bootsnipp .navbar-toggle .icon-bar {
	background-color: rgb(95, 176, 228);
}

.navbar-bootsnipp .navbar-brand {
	color: rgb(95, 176, 228);
	font-weight: 900;
	letter-spacing: 2px;
}

.navbar-bootsnipp .navbar-nav > li > a {
	border: 0px solid rgb(95, 176, 228);
	color: rgb(120, 120, 120);
	padding: 15px 14px;
}

.navbar-bootsnipp .navbar-nav > li > form > .input-group > input,
.navbar-bootsnipp .navbar-nav > li > form > .input-group > .input-group-btn > .btn {
	border-radius: 0px;
}

.navbar-bootsnipp .navbar-nav > li:not(.disabled).open > a,
.navbar-bootsnipp .navbar-nav > li:not(.disabled).active > a,
.navbar-bootsnipp .navbar-nav > li:not(.disabled) > a:hover,
.navbar-bootsnipp .navbar-nav > li:not(.disabled) > a:focus {
	border-left-width: 5px;
	color: rgb(95, 176, 228);
	padding-left: 10px;
}
.navbar-bootsnipp .navbar-nav > li.disabled > a {
	color: rgb(200, 200, 200);
}

.navbar-bootsnipp .navbar-nav > li > .dropdown-menu {
	border-radius: 0;
	margin-right: -1px;
	min-width: 220px;
	padding: 0px;
}
.navbar-bootsnipp .navbar-nav > li:not(.dropdown-right) > .dropdown-menu {
	left: 0px;
	margin-left: -1px;
	right: auto;
}
.navbar-bootsnipp .navbar-nav > li > .dropdown-menu > li > a {
	border-left: 0px solid rgb(95, 176, 228);
	color: rgb(120, 120, 120);
	font-size: 16px;
	font-weight: 400;
	padding: 10px 20px;
	white-space: nowrap;
}
.navbar-bootsnipp .navbar-nav > li > .dropdown-menu > li.active > a,
.navbar-bootsnipp .navbar-nav > li > .dropdown-menu > li > a:hover,
.navbar-bootsnipp .navbar-nav > li > .dropdown-menu > li > a:focus {
	background-color: rgb(245, 245, 245);
	border-left-width: 5px;
	padding-left: 15px;
}

.navbar .bootsnipp-profile > a {
	padding-bottom: 9px;
	padding-top: 9px;
}
.navbar .bootsnipp-profile > a > img {
	border-radius: 50%;
	width: 32px;
}
.navbar .bootsnipp-profile > .dropdown-menu {
	width: 320px;
}
.navbar .bootsnipp-profile > .dropdown-menu > li > .row {
	padding: 5px 15px;
}
.navbar .bootsnipp-profile > .dropdown-menu > li > .row img {
	width: 100%;
}

.navbar-bootsnipp .bootsnipp-search {
	display: none;
}
.navbar-bootsnipp .bootsnipp-search .form-control {
	background-color: rgb(235, 235, 235);
	border-radius: 0px;
	border-width: 0px;
	font-size: 24px;
	padding: 30px 0px;
}
.navbar-bootsnipp .bootsnipp-search .form-control {
	background-color: rgb(235, 235, 235);
	border-radius: 0px;
	border-width: 0px;
	font-size: 24px;
	padding: 25px 0px;
}
.navbar-bootsnipp .bootsnipp-search .form-control:focus {
	border-color: transparent;
	outline: 0;
	-webkit-box-shadow: none;
	box-shadow: none;
}
.navbar-bootsnipp .bootsnipp-search .input-group-btn > .btn {
	padding: 14px 16px;
	border-radius: 0px;
}
.navbar-bootsnipp .bootsnipp-search .input-group-btn > .btn.active,
.navbar-bootsnipp .bootsnipp-search .input-group-btn > .btn:hover,
.navbar-bootsnipp .bootsnipp-search .input-group-btn > .btn:focus {
	padding: 14px 16px 14px 15px;
}
.navbar-bootsnipp .bootsnipp-search .input-group-btn > .btn-default {
	background-color: rgb(245, 245, 245);
}
.nav-padding {
	padding-top: 61px;
}

@media screen and (min-width: 768px) {
	.navbar-bootsnipp .navbar-brand {
		font-size: 20px;
		height: auto;
		padding: 15px 5px;
	}
	.navbar-bootsnipp .navbar-nav > li > a {
		font-size: 16px;
		letter-spacing: 1px;
	}
	.navbar-bootsnipp .navbar-nav > li:not(.disabled).open > a,
	.navbar-bootsnipp .navbar-nav > li:not(.disabled).active > a,
	.navbar-bootsnipp .navbar-nav > li:not(.disabled) > a:hover,
	.navbar-bootsnipp .navbar-nav > li:not(.disabled) > a:focus {
		border-bottom-width: 5px;
		border-left-width: 0px;
		padding-bottom: 10px;
		padding-left: 14px;
	}

	.navbar-bootsnipp .navbar-nav > li.disabled > a {
		padding-left: 10px;
		padding-right: 10px;
	}


	.navbar-bootsnipp .bootsnipp-search {
		background-color: rgb(235, 235, 235);
		display: block;
		position: absolute;
		top: 100%;
		width: 100%;
		-webkit-transform: rotateX(-90deg);
		-moz-transform: rotateX(-90deg);
		-o-transform: rotateX(-90deg);
		-ms-transform: rotateX(-90deg);
		transform: rotateX(-90deg);
		-webkit-transform-origin: 0 0 0;
		-moz-transform-origin: 0 0 0;
		-o-transform-origin: 0 0 0;
		-ms-transform-origin: 0 0 0;
		transform-origin: 0 0 0;
		visibility: hidden;
	}
	.navbar-bootsnipp .bootsnipp-search.open {
		-webkit-transform: rotateX(0deg);
		-moz-transform: rotateX(0deg);
		-o-transform: rotateX(0deg);
		-ms-transform: rotateX(0deg);
		transform: rotateX(0deg);
		visibility: visible;
	}
	.navbar-bootsnipp .bootsnipp-search > .container {
		padding: 0px;
	}
}

</style>

<!-- โมเดล ปอปอัพตระกล้า -->

<div class="modal fade product_view" hidden id="product_view" data-toggle="popover" >
	<div class="modal-dialog" >


		<?php include('cart.php');?>

	</div>
</div>

<div class="modal fade product_view" hidden id="login_user" data-toggle="popover" >
	<div class="modal-dialog modal-lg" >


		<?php include('login.php');?>

	</div>
</div>
<!-- register -->
<div class="modal fade product_view" id="regis_view" data-toggle="popover" >
	<div class="modal-dialog" >


		<?php include('register.php');?>

	</div>
</div>

<div class="modal fade product_view" id="howto_view" data-toggle="popover" >
	<div class="modal-dialog" >


		<?php include('how_to_buy.php');?>

	</div>
</div>

<div class="modal fade product_view" id="contract_view" data-toggle="popover" >
	<div class="modal-dialog" >


		<?php include('contract.php');?>

	</div>
</div>

<div class="modal fade product_view" id="how_to_regis" data-toggle="popover" >
	<div class="modal-dialog" >


		<?php include('how_to_regis.php');?>

	</div>
</div>

<div class="modal fade product_view" id="how_to_order" data-toggle="popover" >
	<div class="modal-dialog" >


		<?php include('how_to_order.php');?>

	</div>
</div>

<div class="modal fade product_view" id="login_admin" data-toggle="popover" >
	<div class="modal-dialog modal-lg" >


		<?php include('login_admin.php');?>

	</div>
</div>

<div class="modal fade product_view" id="reset_view" data-toggle="popover" >
	<div class="modal-dialog" >


		<?php include('reset_password.php');?>

	</div>
</div>


<!-- โมเดล ปอปอัพตระกล้า -->

<?php require_once('Connections/condb.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
	function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "")
	{
		if (PHP_VERSION < 6) {
			$theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
		}

		$theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

		switch ($theType) {
			case "text":
			$theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
			break;
			case "long":
			case "int":
			$theValue = ($theValue != "") ? intval($theValue) : "NULL";
			break;
			case "double":
			$theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
			break;
			case "date":
			$theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
			break;
			case "defined":
			$theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
			break;
		}
		return $theValue;
	}
}

$colname_mlogin = "-1";
if (isset($_SESSION['MM_Username'])) {
	$colname_mlogin = $_SESSION['MM_Username'];
}
mysql_select_db($database_condb);
$query_mlogin = sprintf("SELECT * FROM tbl_member WHERE mem_username = %s", GetSQLValueString($colname_mlogin, "text"));
$mlogin = mysql_query( $query_mlogin,$condb) or die(mysql_error());
$row_mlogin = mysql_fetch_assoc($mlogin);
$totalRows_mlogin = mysql_num_rows($mlogin);
?>

<?php


if (isset($_SESSION['shopping_cart'])) {
	$meQty = 0;
	foreach ($_SESSION['shopping_cart'] as $meItem) {
		$meQty = $meQty + $meItem;
	}
} else {
	$meQty = 0;
}



?>


<!-- เมนูบาร์ -->

<nav class="[ navbar navbar-inverse navbar-fixed-top ][ navbar-bootsnipp animate ]" role="navigation">
	<div class="[ container ]">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="[ navbar-header ]">
			<button type="button" class="[ navbar-toggle ]" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="[ sr-only ]">Toggle navigation</span>
				<span class="[ icon-bar ]"></span>
				<span class="[ icon-bar ]"></span>
				<span class="[ icon-bar ]"></span>
			</button>
			<div class="[ animbrand ]">
				<a class="[ navbar-brand ][ animate ]" href="index.php"> จันผา เครื่องหนัง </a>
			</div>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="[ collapse navbar-collapse ]" id="bs-example-navbar-collapse-1">
			<ul class="[ nav navbar-nav navbar-right ]">
				<li class="[ visible-xs ]">
					<form action="" method="GET" role="search">
						<div class="[ input-group ]">
							<input type="text" class="[ form-control ]" name="q" placeholder="Search for snippets">
							<span class="[ input-group-btn ]">
								<button class="[ btn btn-primary ]" type="submit"><span class="[ glyphicon glyphicon-search ]"></span></button>
								<button class="[ btn btn-danger ]" type="reset"><span class="[ glyphicon glyphicon-remove ]"></span></button>
							</span>
						</div>
					</form>
				</li>
				<li><a href="" class="[ animate glyphicon glyphicon-shopping-cart ]" data-target="#product_view" data-toggle="modal" ><span class="badge"> <?php echo $meQty; ?></span></a></li>
				<li>
					<a href="" class="[ dropdown-toggle ][ animate ]" data-toggle="dropdown">หมวดหมู่ <span class="[ caret ]"></span></a>
					<ul class="[ dropdown-menu ]" role="menu">
						<li><?php include('category.php'); ?></li>
					</ul>
				</li>

				<?php

				$mm = ($_SESSION['MM_Username']);

				if($mm != ''){?>


					<li>
						<a href="" class="[ dropdown-toggle ][ animate ]" data-toggle="dropdown"><?php echo $row_mlogin['mem_name'];?><span class="[ caret ]"></span></a>
						<ul class="[ dropdown-menu ]" role="menu">
							<li>
								<a href="my_order.php?mem_id=<?php echo $row_mlogin['mem_id']; ?>" class="[ animate ]" >แก้ไขข้อมูลส่วนตัว<span class="[ pull-right glyphicon glyphicon-wrench ]" ></span></a>
								<a href="my_order.php?page=mycart" class="[ animate ]" >รายการสั่งซื้อ<span class="[ pull-right glyphicon glyphicon-th-list ]" ></span></a>
								<a href="logout.php" class="list-group-item list-group-item-danger">ออกจากระบบ<span class="[ pull-right
									glyphicon glyphicon-log-out ]"></span></a>
								</li>
							</ul>
						</li>
					<?php }else{
						echo "<li><a href='login.php' class='animate' data-target='#login_user' data-toggle='modal'><span class='glyphicon glyphicon-log-out'>เข้าสู่ระบบ</span></a></li>";
						echo "<li><a href='register.php' class='animate' data-target='#regis_view'' data-toggle='modal'><span class='glyphicon glyphicon-user'>สมัครสมาชิก</span></a></li>";

					}?>


					<li><a href="#" class="[ animate glyphicon glyphicon-bitcoin ]" data-target="#howto_view" data-toggle="modal" >แจ้งชำระเงิน</a></li>
					<li><a href="#" class="[ glyphicon glyphicon-earphone ]" data-target="#contract_view" data-toggle="modal" >ติดต่อเรา</a></li>
					<li class="[ hidden-xs ]"><a href="#toggle-search" class="[ animate ]"><span class="[ glyphicon glyphicon-search ]"></span></a></li>
				</ul>
			</div>
		</div>
		<div class="[ bootsnipp-search animate ]">
			<div class="[ container ]">
				<form action="index.php" method="GET" role="search">
					<div class="[ input-group ]">
						<input type="text" class="[ form-control ]" name="q" placeholder="Search for snippets and hit enter">
						<span class="[ input-group-btn ]">
							<button class="[ btn btn-danger ]" type="reset"><span class="[ glyphicon glyphicon-remove ]"></span></button>
						</span>
					</div>
				</form>
			</div>
		</div>
	</nav>


	<br>
	<br>
	<br>
	<!-- เมนูบาร์ -->
