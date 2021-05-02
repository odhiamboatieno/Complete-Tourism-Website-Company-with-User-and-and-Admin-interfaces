<!DOCTYPE html>
<html>
<head>
	<title>jQuery datepicker</title>
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
	<script src="js/jquery-1.12.4.js"></script>
	<script src="js/jquery-ui.js"></script>
</head>
<body>
Choose Date: 
<input type="text" name="todate" id="todate">
<script type="text/javascript">
$(function() {
	$("#todate").datepicker({
	format: "dd/mm/yy",
	autoclose: true,
	todayHighlight:true,
	showOtherMonths:true,
	selectOthermonths:true,
	autoclose:true,
	changeMonth:true,
	changeYear:true,
	minDate:new Date()
});
});
</script>
</body>
</html>