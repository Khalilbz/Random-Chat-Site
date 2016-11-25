<?php
$folder = $_GET['name'];
$post = $_GET['post'];
$ip = $_SERVER['REMOTE_ADDR'] ;
$file = "chat/".$folder.'/chat.html';

$current = "<big><big><big><i><p color='blue' id='".$ip."'>stranger : </p></i></big></big></big>".$post."<br>";
$current .= file_get_contents($file);
file_put_contents($file, $current);
?><?php ?>
<form action="chatpost.php" method="GET" >
<input type="hidden" value="<?php echo $folder ; ?>" name="name">
<input size="90%" height="50" type="text" name="post" ><input type="submit" value="Send" >

</form>
<br>
<table border="2">
<a href="chatpost.php?name=<?php echo $folder ; ?>&post=<br><img width='100' height='100' src=http://www.animated-gifs.eu/smilies-oval/0015.gif >"><img width="50" height="50" src="http://www.animated-gifs.eu/smilies-oval/0015.gif" ></a>
<a href="chatpost.php?name=<?php echo $folder ; ?>&post=<br><img width='100' height='100' src=http://www.animated-gifs.eu/smilies-oval/0011.gif >"><img width="50" height="50" src="http://www.animated-gifs.eu/smilies-oval/0011.gif" ></a>
<a href="chatpost.php?name=<?php echo $folder ; ?>&post=<br><img width='100' height='100' src=http://deborahthelwell.files.wordpress.com/2014/03/angry-red-smiley-wagging-finger-107x107.gif?w=307&h=307 >"><img width="50" height="50" src="http://deborahthelwell.files.wordpress.com/2014/03/angry-red-smiley-wagging-finger-107x107.gif?w=307&h=307" ></a>
<a href="chatpost.php?name=<?php echo $folder ; ?>&post=<br><img width='100' height='100' src=http://files.myopera.com/supernonsoboy/albums/6254481/thumbs/cupid-heart-animated-animation-cupid-smiley-emoticon-000379-large.gif_thumb.jpg >"><img width="50" height="50" src="http://files.myopera.com/supernonsoboy/albums/6254481/thumbs/cupid-heart-animated-animation-cupid-smiley-emoticon-000379-large.gif_thumb.jpg" ></a>
<a href="chatpost.php?name=<?php echo $folder ; ?>&post=<br><img width='100' height='100' src=http://i22.photobucket.com/albums/b318/Panther2000/crying-1.gif >"><img width="50" height="50" src="http://i22.photobucket.com/albums/b318/Panther2000/crying-1.gif" ></a>
<a href="chatpost.php?name=<?php echo $folder ; ?>&post=<br><img width='100' height='100' src=http://ddcontent.affino.com/AcuCustom/Sitename/DAM/013/JulienRio.com_Facebook_thumb_up1.png >"><img width="50" height="50" src="http://ddcontent.affino.com/AcuCustom/Sitename/DAM/013/JulienRio.com_Facebook_thumb_up1.png" ></a>
<a href="chatpost.php?name=<?php echo $folder ; ?>&post=<br><img width='100' height='100' src=http://tkgenius.com/wp-content/uploads/2012/11/thumbs-down1.jpg >"><img width="50" height="50" src="http://tkgenius.com/wp-content/uploads/2012/11/thumbs-down1.jpg" ></a>
<a href="chatpost.php?name=<?php echo $folder ; ?>&post=<br><img width='100' height='100' src=http://yoursmiles.org/bsmile/fun/b0215.gif >"><img width="50" height="50" src="http://yoursmiles.org/bsmile/fun/b0215.gif" ></a>
<a href="chatpost.php?name=<?php echo $folder ; ?>&post=<br><img width='100' height='100' src=http://www.fg-a.com/birthday/animated-birthday-cake.gif >"><img width="50" height="50" src="http://www.fg-a.com/birthday/animated-birthday-cake.gif" ></a>
<a href="chatpost.php?name=<?php echo $folder ; ?>&post=<br><img width='130' height='100' src=http://omp.ucoz.com/foto/92.123.65.42-0399-.gif >"><img width="50" height="50" src="http://omp.ucoz.com/foto/92.123.65.42-0399-.gif" ></a>
<a href="chatpost.php?name=<?php echo $folder ; ?>&post=<br><img width='100' height='100' src=https://cdn0.iconfinder.com/data/icons/smile-emoticons/78/Emoticons_smile_smiley-10-128.png >"><img width="50" height="50" src="https://cdn0.iconfinder.com/data/icons/smile-emoticons/78/Emoticons_smile_smiley-10-128.png" ></a>
</table>
</form>