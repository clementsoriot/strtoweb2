<?php
require root.pre.'view/optimisation'.pre.'htmlstart.php';

require root.pre.'model'.pre.'header.php';

if(!$user->isAuth()):
	require root.pre.'view/general'.pre.'loginform.php';
else:
	header('location: '.siteurl);
endif;
require root.pre.'view/general'.pre.'footer.php';
require root.pre.'view/optimisation'.pre.'htmlend.php';
?>
