
<div class="view" >
<script>
document.getElementById("<?php echo $_SERVER['REMOTE_ADDR'] ; ?>").innerHTML = "You ";
</script>
<?php
$folder = $_GET['name'];
$c = file_get_contents("chat/".$folder.'/chat.html');
echo $c;
///header("refresh:1;url=chattxt.php?name=".$folder ."#sss");
?>
</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
<script type="text/javascript">
var auto_refresh = setInterval(
function ()
{
$('.View').load("<?php echo "chattxt.php?name=".$folder ."#sss" ;?>").fadeIn("slow");
}, 5000); // refresh every 5000 milliseconds
</script>
<br><br><br><div name="sss" id="sss"></div>
