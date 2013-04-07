<?php

/**
 * This is the default configuration file.  It contains all of the global constants needed by the framework.  To create a configuration file for your site,
 * follow these steps:
 *
 * 1) Create a folder in the root of your site called "config"
 * 2) In the config folder, create a sub-folder with the host name of the server it will run from.  Do not include the "www"
 * 3) Copy this file into the host folder and modify it as needed
 */

/*------- REQUIRED constants: -------*/
// If none of these are defined the framework will throw an error on load.

/**
 * Host name of the database server
 */
define('DBHOST', "");

/**
 * Database username
 */
define('DBUSER', "");

/**
 * Database password
 */
define('DBPASS', "");

/**
 * Name of the database
 */
define('DBNAME', "");

/**
 * What level of logging to use.  This affects both the level of PHP error reporting and which console messages get logged.
 *
 * 1 - Only PHP errors of type E_ERROR and framework error messages
 * 2 - All log messages reporting framework operation, framework errors, and all PHP errors except for E_WARNING
 * 3 - All log messages reporting framework operation, framework errors, and all PHP errors
 */
define('LOGGING_LEVEL',4);

/**
 * Debug mode on or off.  Turning it on enables more detailed logging, forces triggered E_USER_ERRORs to email error reporting regardless of what server it's on,
 * and spits out some useful debugging information at the bottom of the page (unless you remove that from your template)
 */
define('DEBUG',true);

/**
 * What type of server is this?  Options are:
 *
 * "LOCAL_DEV" - use this for your local development machine
 * "TESTING" - use this for the staging server
 * "PRODUCTION" - use this for the production server
 *
 * This setting determines whether or not some actions are performed during.  For example, if you have debug mode on for the production server it will prevent display
 * of the debug info at the bottom of the page.
 */
define('SERVER_TYPE','LOCAL_DEV');

/**
 * Whether or not to skip redirecting to HTTPS when a higher than public access page is requested.  This is useful in local development when you don't have an SSL
 * certificate installed.  It also ensures that dynamically generated URL's to pages that are meant to be secure are not prefixed with "https"
 */
define('SSL_DISABLED',false);

/**
 * Use SMTP for sending mail?  If not defined, it will try to use sendmail instead
 */
define("USE_SMTP_MAIL",false);
/**
 * Host name of the SMTP server.  If this is not defined, SMTP will not be used.
 */
define("SMTP_HOST","");
/**
 * Use SMTP authentication?  If not defined, authentication will not be used.
 */
define("USE_SMTP_AUTH",false);
/**
 * SMTP username.  If not defined, authentication will not be used.
 */
define("SMTP_USERNAME","");
/**
 * SMTP password.  If not defined, authentication will not be used.
 */
define("SMTP_PASSWORD","");

?>