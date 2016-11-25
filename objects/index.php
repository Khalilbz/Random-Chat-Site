<head>
<title>Glow Forum</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<?php
    $dir    = $_GET["dir"];

	if ( $dir == "")
        {
        $dir = "objects";
		}
	    $file = scandir($dir);

    echo("<div color='black' ><center><img src='pic.gif' /></a></center></div>");

?>
<a href="javascript:history.go(-1)"><img width="150" height="70" src="http://icons.iconseeker.com/png/fullsize/crystal-clear-actions/back-arrow.png" /></a>
<?php
	
//////////////////////dirs
    echo("<div class='dir'><p style='color:blue;'><big><big><big><big>Classes</big></big></big></big></p></div>");

for ($x=2; $x<=count($file); $x++)
  {
      if ( substr($file[$x], -4) == ".obj")
        {
        
        }
      else
        {
        echo "<div class='dirs'><a class='elementd' href='./?dir=".$dir."/".$file[$x]."' >" .$file[$x]. "</a></div>";
        }
echo "<br>";
  }
////////////////files

    echo("<div class='file'><p style='color:green;'><big><big><big><big>Objects</big></big></big></big></p></div>");
  
for ($x=2; $x<=count($file); $x++)
  {
      if ( substr($file[$x], -4) == ".obj")
        {
        echo "<div class='files'><a class='elementf' href='" .$dir."/".$file[$x]. "'>".str_replace(".obj", "", $file[$x])."</a></div>";
        }
      else
        {
               }
echo "<br>";
  }
  
?>