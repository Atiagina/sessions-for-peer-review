<?php
//functions.php

/**
 * functions.php stores the functions for sessions.php.
 *
 * @package a3
 * @author Anna Atiagina and Nicole Warnemuende
 * @version 1.0 2015/07/12
 * @link http://www.atiagina.com/itc260/a3/ 
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License ("OSL") v. 3.0
 * @see index.php
 * @see sessions.php
 * @todo none
 */

/**
* Allows to display form that asks user to provide a passphrase to see the page content.
*
* @param none
* @return none
* @todo none
*/

function show_form(){
 echo '<form action="' . THIS_PAGE . '" method="post"> </br> 
                <i>Enter your passphrase to see the page:</i> <input name="passphrase" type="text" id="passphrase" /></br>
                <input style="<i>margin-left:20%; margin-top:10px" type="submit" name="submit" value="Click to enter the page">
            </form>';
        echo '<img src="images/chart.jpg" alt="flowchart" id="cat" style="width:500px; margin:0 auto;" />';
}