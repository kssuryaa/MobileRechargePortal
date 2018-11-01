<?php
SESSION_START();
SESSION_DESTROY();
echo "<script type='text/javascript'>alert ('logout successful');</script>";
header("refresh:0;url='./Main_page.php'");
?>