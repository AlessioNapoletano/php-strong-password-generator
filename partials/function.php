<?php 
    function generatePassword($length) {
        $charapter = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=[]{}|;':,.<>?";
        return substr(str_shuffle($charapter), 0, $length);
    }
?>