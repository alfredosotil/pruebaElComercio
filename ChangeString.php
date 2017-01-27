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
class ChangeString {

//put your code here
    public $search = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'ñ', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
    public $replace = array(' ', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'ñ', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'a');

    public function build($string) {
        $charArray = str_split($string);
        $stringReturned = $charArray;
        $index = 0;
        foreach ($charArray as $c) {
            if ($c !== '') {
                if(in_array(strtolower($c), $this->search)){   
                    if(strtolower($c) === 'z'){
                        if (ctype_upper($c)) {
                            $stringReturned[$index] = 'A';
                        }else{
                            $stringReturned[$index] = 'a';
                        }
                    }else{
                        if (ctype_upper($c)) {
                            $key = array_search(strtolower($c), $this->search);
                            $stringReturned[$index] = strtoupper($this->search[$key + 1]);
                        } else {
                            $key = array_search($c, $this->search);
                            $stringReturned[$index] = $this->search[$key + 1];
                        }
                    }
                    
                }                
            }
            $index++;
        }
        return implode('',$stringReturned);
    }    
}
