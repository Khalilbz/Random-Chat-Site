<?php
$folder = $_GET['name'];
echo 'waiting for someone you can chat with ...';
echo "<div class='view' >";
if (is_dir('waiting/'.$folder)) 
{
///header("refresh:1;url=wait.php?name=".$folder);
echo "<meta http-equiv='Refresh' content='2; url=wait.php?name=".$folder."'>";
}
else
{
///header("Location: chat.php?name=".$folder);
echo "<meta http-equiv='Refresh' content='1; url=chat.php?name=".$folder."'>";
}
?>
</div>
