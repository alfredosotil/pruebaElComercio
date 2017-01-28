<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CompleteRange
 *
 * @author asotilp
 */
class CompleteRange {

    //put your code here
    public function build($arrayNumbers) {
        $arrayReturned = [];
        $start = intval($arrayNumbers[0]);
        $end = intval($arrayNumbers[count($arrayNumbers) - 1]);
        for ($i = $start; $i <= $end; $i++) {
            array_push($arrayReturned, $i);
        }
        return $arrayReturned;
    }

}
