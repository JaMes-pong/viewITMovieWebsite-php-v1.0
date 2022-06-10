<!--
   ViewIT Website
   Author: Chan Wai Pong James		
   Date:   2019 - 11 - 19
   
   Filename: logout.php
-->
<?php
	setcookie("login", "", time()-3600); //clean the cookie to achieve logout
?>
<html>
    <head>
        <meta http-equiv="refresh" content="0.01;url=loading.html" />
    </head>
</html>
