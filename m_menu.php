
  	<li>
  	<a href="" class="[ dropdown-toggle ][ animate ]" data-toggle="dropdown"><?php echo $row_mlogin['mem_name'];  ?><span class="[ caret ]"></span></a>
	<ul class="[ dropdown-menu ]" role="menu">
	<li>

  <a href="my_order.php?page=mycart" class="[ animate ]">รายการสั่งซื้อ<span class="[ pull-right
glyphicon glyphicon-th-list ]" data-target="#order_view" data-toggle="modal"></span></a>
  <a href="edit_profile.php?mem_id=<?php echo $row_mlogin['mem_id']; ?>" class="[ animate ]">แก้ไขข้อมูลส่วนตัว<span class="[ pull-right glyphicon glyphicon-wrench ]" data-target="#edit_view" data-toggle="modal"></span></a>
  <a href="logout.php" class="list-group-item list-group-item-danger">ออกจากระบบ<span class="[ pull-right
glyphicon glyphicon-log-out ]"></span></a>

</li>
</ul>
	</li>
