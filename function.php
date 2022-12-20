<?php
 
 function Clean($input, $flag = 0){

    $input =  trim($input);

    if ($flag == 0) {
        $input =  filter_var($input, FILTER_SANITIZE_STRING);   
    }
    return $input;
}

function validate($input , $flag){
    $status = true ;

    switch ($flag){
        case 1:
            if(empty($input)){
                $status = false;
            }

            break ;
        case 2:
            if(!filter_var($input,FILTER_VALIDATE_EMAIL)){
                $status = false ;
            }
            break;

        case 3:
            if(strlen($input)<10){
                $status = false;
            }
            break;
        }
        return $status;
}