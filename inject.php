<?php
    $id = $_POST['id'];
    //do something
    $id = base64_encode($id);
    //input url
    $postData = "id=$id";
    $url = "http://127.0.0.1/inject/vul.php";
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    //post. if get, remove
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);
    
    // set proxy
    // $proxy = "http://127.0.0.1";
    // $proxyport = "8080";
    // curl_setopt($curl,CURLOPT_PROXY,$proxy);
    // curl_setopt($curl,CURLOPT_PROXYPORT,$proxyport);

    $data = curl_exec($curl);
    curl_close($curl);
    print_r($data);