<?php
//sessions.php

/**
 * sessions.php executes the logic to present the index.php content only to logged in users, and to store login information in a session.
 *
 * @package a3
 * @author Anna Atiagina and Nicole Warnemuende
 * @version 1.0 2015/07/12
 * @link http://www.atiagina.com/itc260/a3/ 
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License ("OSL") v. 3.0
 * @see index.php
 * @see functions.php
 * @todo none
 */

//start the session
session_start();

include_once 'functions.php';

//define the constant 
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

//declare the variable to store users' input
$pass =  $_POST['passphrase'];

//declare the variable to store the passphrase
$myPassphrase = "cats123";

/*
*	main logic
*
*	if (the session is not set) {
*			IF (a password is not posted) {
*				show the form
*				don't show other content (die)	
*			}
*			ELSE IF (the password is posted but is not correct) {
*				show the form with error message
*				die;
*			}
*	 		ELSE {
*				password is entered and is correct,
*				set the session variable
			}
*	}
*	else(the session is already set)
*		show the page content
*
*/

if(!isset($_SESSION['passphrase'])) {


    if(!isset($_POST['passphrase'])){
        show_form();
        die;
    }else if($_POST['passphrase'] != $myPassphrase){
        show_form();
        echo 'Password is incorrect.';
        die;
    }else{
        $_SESSION['passphrase'] = $pass;
    } 
    
}
