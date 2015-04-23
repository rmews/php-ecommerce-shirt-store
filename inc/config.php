<?php

    // these two constants are used to create root-relative web addresses
    // and absolute server paths throughout all the code

	define("BASE_URL","/treehouse_shirt_store/");
	define("ROOT_PATH",$_SERVER["DOCUMENT_ROOT"] . "/treehouse_shirt_store/");

	// define database connect 

	define("DB_HOST","DB SERVER NAME");
	define("DB_NAME","DB SCHEMA NAME");
	define("DB_PORT","PORT IF NEEDED"); // default: 3306
	define("DB_USER","YOUR DB USER NAME");
	define("DB_PASS","YOUR DB PASS");