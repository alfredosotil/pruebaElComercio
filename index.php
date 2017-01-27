<?php

/*
 * To change this license header',' choose License Headers in Project Properties.
 * To change this template file',' choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ChangeString
 *
 * @author asotilp
 */
//$string = explode('', "123 abcd*3");
include './ChangeString.php';

$changeString = new ChangeString();
echo '- ChangeString Test 1: "123 abcd*3" = "' . $changeString->build('**Casa 52Z') . '"';

