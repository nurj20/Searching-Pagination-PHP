<?php
function redirect($url, $msg=null){
    $tail = '?';
if ($msg===null)
    header('Location: '.$url);    
else
    {
       
        foreach($msg as $key=>$value)
        {
             $tail.=$key.'='.$value.'&';
        }
        $tail = substr($tail,0,-1);
        header('Location: '.$url.$tail);
    }
    exit();
}
?>