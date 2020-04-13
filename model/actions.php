<?php
if(!empty($ClassMvc->Get('logout'))):
	session_destroy();
	header('location:'.siteurl);
endif;