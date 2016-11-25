<?php
$folder = $_GET['name'];
?>
<center><h1><img height="70" src="https://lh6.googleusercontent.com/-EDt_zFMU_eA/U1wxlmaLq8I/AAAAAAAAAFY/qbJ3HdCbKiU/w608-h152/image.png"></h1></center>
<iframe frameborder="1" src="<?php echo "chattxt.php?name=".$folder  ?>#sss" width="100%" height="60%"></iframe>
<a onclick="ref()" style="cursor: pointer;"><img src="http://static1.businessinsider.com/image/51bf0d15eab8eac26000002a/the-iphones-new-back-button-has-the-former-design-director-of-the-new-york-times-pretty-upset.jpg" height="110" width="10%"></a><iframe frameborder="0" src="<?php echo "chatpost.php?post=hi&name=".$folder ; ?>" width="90%" height="20%"></iframe>
<script>
function ref()
{
window.top.location.reload();
}
</script>