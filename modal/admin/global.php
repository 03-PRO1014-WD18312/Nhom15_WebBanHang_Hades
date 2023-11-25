<?php 

function validate_numeric_length($string) {
    if (ctype_digit($string) && strlen($string) > 4) {
        return true;
    } else {
        return false;
    }
}
function validate_positive_numeric($string) {
    if (is_numeric($string) && $string > 0) {
        return true;
    } else {
        return false;
    }
}
function validate_alpha($string) {
    if (ctype_alpha($string)) {
        return false;
    } else {
        return true;
    }
}

?>