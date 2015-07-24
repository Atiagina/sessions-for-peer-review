<?php
//index.php

/**
 * index.php represents the page content that is to be visible only for those who are logged in with the correct passphrase. The login process and sessions are managed by the included file.
 *
 * @package a3
 * @author Anna Atiagina and Nicole Warnemuende
 * @version 1.0 2015/07/12
 * @link http://www.atiagina.com/itc260/a3/ 
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License ("OSL") v. 3.0
 * @see sessions.php
 * @see functions.php
 * @todo none
 */

include_once 'sessions.php';
?>

<html>
<head>
	<title>Pair Programming and Cats</title>
	<style>

        body {
            background-color: grey;
            }
        #content {
        margin: 0 auto;
        max-width: 640px;
        background: white;
            }

        #cat {
            display: block;
            margin: 0 auto;
            width: 500px;
           }

        h1 {
            text-align: center;
           }

	</style>
</head>
<body>
	
<div id="content">
<h1>Congratulations!!!</h1>
<img src="images/cat.jpg" alt="cat" id="cat">
<h1>Now you can see a cat!</h1>
</div> <!-- end of #content -->
</body>
</html>