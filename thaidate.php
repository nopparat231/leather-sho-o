<!DOCTYPE html>
<html>

<head>
    <script src="https://code.jquery.com/jquery.min.js"></script>
    <link href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css" />

    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <meta charset="utf-8">

</head>

<body>



    <!-- <input type="text" name="start" id="from" autocomplete="off" > -->
   
   <!--  <br> สิ้นสุด :
    <input type="text" name="start" id="to">
    <br> จำนวน :
    <input type="text" name="start" id="days">
    <br> -->



    <script type="text/javascript">
        var datepicked = function() {
            var from = $('#from');
            

            var fromDate = from.datepicker('getDate')
            
        }

        $(function() {
            var d = new Date('Y/m/d');
            var toDay = (d.getFullYear() + 543) + (d.getMonth() + 1) + '/' + d.getDate() + '/';
            $('#from').datepicker({
                changeYear: true,
                changeMonth: true,
                yearRange: '1910:2100',
                dateFormat: 'yy/mm/dd',
                isBuddhist: true,
                defaultDate: toDay,
                dayNames: ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'],
                dayNamesMin: ['อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.'],
                monthNames: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
                monthNamesShort: ['ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.'],
                onSelect: datepicked
            });
        });
    </script>
</body>

</html>