<?php if ($pdata['rank']=="student") {

?>

<script>
// alert("<?php echo $pdata['time'];?>");
var countDownDate = new Date("<?php echo $manager_detail->end;?>").getTime();
var x = setInterval(function() {
	var d = new Date();
d.setHours(d.getHours());
d.setMinutes(d.getMinutes());
    var now = d.getTime();

    var distance = countDownDate - now;
		var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    document.getElementById("subm1").innerHTML =  hours + "h " + minutes + "m " + seconds + "s ";

}, 1000);
</script>
<?php }?>
