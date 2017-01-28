<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClearPar
 *
 * @author asotilp
 */
class ClearPar {

    //put your code here
    private $regex = '/^[\(\)]+$/';

    public function build($subject) {
        $subjectReturned = '';
        if (preg_match($this->regex, $subject)) {
            $x = explode("()", $subject);
            for ($i = 1; $i < count($x); $i++) {
                $subjectReturned .= '()';
            }
        } else {
            $subjectReturned = 'El algoritmo solo funciona con parentesis ()().';
        }
        return $subjectReturned;
    }

}
