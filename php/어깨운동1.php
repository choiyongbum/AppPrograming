<?php

    $host = 'localhost';
    $user = 'korea';
    $pw = '1234';
    $dbName = 'test';
    $mysqli = new mysqli($host, $user, $pw, $dbName);

    $sql = "SELECT * from 어깨운동 order by 운동종목,세트,횟수 desc"; 
    $result = mysqli_query($mysqli, $sql);
    $운동종목 = array();
    $세트 = array();
    $횟수 = array();

    $i=0;   

    while($row = mysqli_fetch_assoc($result)) {

         $운동종목[$i] = $row['운동종목'];
         $세트[$i] = $row['세트'];
         $횟수[$i] = $row['횟수'];

         $i=$i+1;
    }

    //$Obj = new stdClass();

    //$data_title[$i] = $row['data_title'];
    //$data_data[$i] = $row['data_data'];
    $OBj = array();
    $n=$i;
    $i=0;

    while($i<$n){
        $Obj[$i]->운동종목 = $운동종목[$i];
        $Obj[$i]->세트 = $세트[$i];
        $Obj[$i]->횟수 = $횟수[$i];
        $i = $i+1;
    }

    $JSON = json_encode($Obj);

    echo $JSON;

?>