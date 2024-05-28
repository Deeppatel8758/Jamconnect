<?php
$data ='';
$filename = "cordi.json";
if(isset($_REQUEST['submit'])){
    if(is_file($filename)){
        $data =file_get_contents($filename);
    }
    
    $json_arr= json_decode($data,true);
      
    $json_arr[] = array('longitutude'=> $_REQUEST['longitutude'] , 'lat'=> $_REQUEST['lat'] ,'name'=>$_REQUEST['name']);
    
    file_put_contents($filename,json_encode($json_arr));

}

?>