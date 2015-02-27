<?php
    header('Content-Type: application/json');
    
    /*function random_color_part() {
        return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
    }
    
    function random_color() {
        return random_color_part() . random_color_part() . random_color_part();
    }*/
    
    function randomColor() {
        $color = '';
        for ($i = 0; $i <3; $i++)
        {
            $color .= dechex(mt_rand(0, 255));
        }
        return $color;
    }
    header('Content-Type: application/json');
    echo json_encode(array(
        "color" => randomColor()       
    ));