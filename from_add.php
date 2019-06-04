<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="./jquery.Thailand.js/dependencies/JQL.min.js"></script>
<script type="text/javascript" src="./jquery.Thailand.js/dependencies/typeahead.bundle.js"></script>

<link rel="stylesheet" href="./jquery.Thailand.js/dist/jquery.Thailand.min.css">
<script type="text/javascript" src="./jquery.Thailand.js/dist/jquery.Thailand.min.js"></script>

<div class="form-group">
	<div class="col-sm-2" align="right">ที่อยู่ : </div>
	<div class="col-sm-10" align="left">

		<input type="text" name="a" class="form-control" placeholder="บ้านเลขที่, หมู่, หมู่บ้าน, ซอย" required autocomplete="off">
	</div>
</div>

<div class="form-group">
	<div class="col-sm-2" align="right">แขวง/ตำบล :</div>
	<div class="col-sm-10" align="left">


		<input type="text" id="district" name="t" class="form-control" required autocomplete="off" placeholder="แขวง/ตำบล" >

	</div>
</div>

<div class="form-group">
	<div class="col-sm-2" align="right">เขต/อำเภอ : </div>
	<div class="col-sm-10" align="left">


		<input type="text" id="amphoe" name="o" class="form-control" required autocomplete="off" placeholder="ขต/อำเภอ">
	</div>
</div>


<div class="form-group">
	<div class="col-sm-2" align="right">จังหวัด : </div>
	<div class="col-sm-10" align="left">

		<input type="text" id="province" name="j" class="form-control" required autocomplete="off" placeholder="จังหวัด">

	</div>
</div>
<div class="form-group">
	<div class="col-sm-2" align="right">รหัสไปรษณีย์ : </div>
	<div class="col-sm-10" align="left">

		<input type="text" id="zipcode" name="p" class="form-control" required autocomplete="off" placeholder="รหัสไปรษณีย์">
	</div>

</div>
<!--
	$mem_address = $_POST['a']." ตำบล ".$_POST['t']." อำเภอ ".$_POST['o']." จังหวัด ".$_POST['j']." รหัสไปรษณีย์ ".$_POST['p']; -->



	<script type="text/javascript">

		$.Thailand({
    database: './jquery.Thailand.js/database/db.json', // path หรือ url ไปยัง database
    $district: $('#district'), // input ของตำบล
    $amphoe: $('#amphoe'), // input ของอำเภอ
    $province: $('#province'), // input ของจังหวัด
    $zipcode: $('#zipcode'), // input ของรหัสไปรษณีย์
});
</script>
<!-- <textarea name="mem_address" type="textarea" required class="form-control" id="mem_address" placeholder="ที่อยู่" ></textarea>  -->
