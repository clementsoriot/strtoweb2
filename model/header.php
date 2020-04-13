<?php
if(!$user->isAuth()):
	require root.pre.'view/general'.pre.'header.php';
else:
	require root.pre.'view/general'.pre.'header-logged.php';
endif;