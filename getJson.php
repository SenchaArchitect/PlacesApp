<?php

echo file_get_contents("https://maps.googleapis.com/maps/api/place/nearbysearch/json?" .
                       "key={$_GET['key']}&location={$_GET['location']}&radius={$_GET['radius']}" .
                       "&sensor={$_GET['sensor']}&keyword={$_GET['keyword']}");