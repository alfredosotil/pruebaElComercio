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
include './CompleteRange.php';
include './ClearPar.php';

$changeString = new ChangeString();
echo '- ChangeString Test 1: "123 abcd*3" = "' . $changeString->build('123 abcd*3') . '"<br>';
echo '- ChangeString Test 2: "**Casa 52" = "' . $changeString->build('**Casa 52') . '"<br>';
echo '- ChangeString Test 3: "**Casa 52Z" = "' . $changeString->build('**Casa 52Z') . '"<br>';
echo '------------------------------------------------------------------<br>';
$completeRange = new CompleteRange();
echo '- CompleteRange Test 1: [1, 2, 4, 5] = ' . json_encode($completeRange->build([1, 2, 4, 5])) . '<br>';
echo '- CompleteRange Test 2: [2, 4, 9] = ' . json_encode($completeRange->build([2, 4, 9])) . '<br>';
echo '- CompleteRange Test 3: [55, 58, 60] = ' . json_encode($completeRange->build([55, 58, 60])) . '<br>';
echo '------------------------------------------------------------------<br>';
$clearPar = new ClearPar();
echo '- ClearPar Test 1: "()())()" = "' . $clearPar->build("()())()") . '"<br>';
echo '- ClearPar Test 2: "()(()" "= ' . $clearPar->build('()(()') . '"<br>';
echo '- ClearPar Test 3: ")(" = "' . $clearPar->build(')(') . '"<br>';
echo '- ClearPar Test 4: "((()" = "' . $clearPar->build('((()') . '"<br>';
echo '------------------------------------------------------------------<br>';