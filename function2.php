<?php
function generateLoginId()
{
    $set_str=array(
        'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h',
        'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p',
        'q', 'r', 's', 't', 'u', 'v', 'w', 'x',
        'y', 'z'

    );

    for($i = 0; $i <= 7; $i++){
        $rand = mt_rand(0, count($set_str)-1);
        $generate_login_id = $set_str[$rand];
    }
    if($duplication != null){
        if($duplication == $generate_login_id){
            return false;
        }else{
            return $generate_login_id;
        }
    }
}

$generate_id = generateLoginId('abcdefg');
echo $generate_id;
?>