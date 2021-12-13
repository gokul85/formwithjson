<?php

if(isset($_POST)){
    $filepath = './jsonfile.json';
    $json_string = file_get_contents($filepath);
    $json = json_decode($json_string, true);
    
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];

    $arr = array(
        "Name" => $name,
        "Phone" => $phone,
        "Email" => $email
    );

    array_push($json, $arr);
    file_put_contents($filepath,json_encode($json));

}

?>