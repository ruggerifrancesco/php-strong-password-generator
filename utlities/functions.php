<?php 
    function generatePassword($length) {
        $password = '';
        for ($i = 0; $i < $length; $i++) {
            $randomAscii = random_int(33, 126); // ASCII range from '!' to '~'
            $password .= chr($randomAscii);
        }
        return $password;
    }
?>