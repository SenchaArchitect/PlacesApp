<?php

function curl($url){

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        return curl_exec($curl);
        curl_close($curl);

}

echo curl("https://maps.googleapis.com/maps/api/place/nearbysearch/json?" .
                       "key={$_GET['key']}&location={$_GET['location']}&radius={$_GET['radius']}" .
                       "&sensor={$_GET['sensor']}&keyword={$_GET['keyword']}");