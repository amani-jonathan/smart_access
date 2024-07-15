<?php

function display_from_errors ($validation, $field)
{


    if($validation->hasError($field))
    {

        return $validation -> getError($field);
        
    }else {
        return false;
    }
}