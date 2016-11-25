<?php
function random_string($length) {
    $key = '';
    $keys = array_merge(range(0, 9), range('a', 'z'));

    for ($i = 0; $i < $length; $i++) {
        $key .= $keys[array_rand($keys)];
    }

    return $key;
}
$file = scandir('waiting');
if ( count($file) === 2 ) ////no one
{
$folder = random_string(10);
mkdir ("waiting/".$folder);
mkdir ("chat/".$folder);
$fp = fopen("chat/".$folder.'/chat.html', 'w');
fwrite($fp, 'say something :<br>');
fclose($fp);
header("Location: wait.php?name=".$folder);
echo "waiting".$folder;
}
//some here
else
{
$stranger = $file[2] ;
rmdir("waiting/".$stranger."/");
header("Location: chat.php?name=".$stranger);
echo "find  ".$stranger ;
}
?>