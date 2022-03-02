<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h1>OKE</h1>
		<?php
		$var = mysqli_connect("localhost", "root", "", "antrian");
		$tgl=date("Y-m-d");
		$query1 = mysqli_query($var,"DELETE FROM nomer_umum WHERE tanggal='$tgl'");
		$query2 = mysqli_query($var,"DELETE FROM nomer_bpjs WHERE tanggal='$tgl'");
		$query3 = mysqli_query($var,"DELETE FROM nomer_bpjs_siang WHERE tanggal='$tgl'");
		$query4 = mysqli_query($var,"DELETE FROM nomer_umum_siang WHERE tanggal='$tgl'");
		?>
</body>
</html>

<script type="text/javascript">
	function refreshAt(hours, minutes, seconds) {
    var now = new Date();
    var then = new Date();

    if(now.getHours() > hours ||
        (now.getHours() == hours && now.getMinutes() > minutes) ||
        now.getHours() == hours && now.getMinutes() == minutes && now.getSeconds() >= seconds) {
        then.setDate(now.getDate() + 1);
    }
    then.setHours(hours);
    then.setMinutes(minutes);
    then.setSeconds(seconds);

    var timeout = (then.getTime() - now.getTime());
    setTimeout(function() { window.location.reload(true); }, timeout);
}

//refresh the page at 23:00:00
refreshAt(23,50,00);
</script>