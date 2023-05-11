<?php

const ROOT = __DIR__ . "/..";

require ROOT . "/functions/require.php";

$arr = $_REQUEST;


$date = $arr["date"];
$jkJson = null;

foreach ($arr["data"] as $key => $value) {

    if($value == "") {

        $arr["data"][$key] = 0;


    } else {

        $arr["data"][$key] = floatval($value);

    }


}

switch ($arr["jk"]) {
    case "ГУБЕРНСКИЙ":
        $jkJson = "guber";
        break;
    case "ДОСТОЯНИЕ":
        $jkJson = "dostoyanie";
        break;
    case "АРХИТЕКТОР":
        $jkJson = "architector";
        break;
    case "ВЕРЕСАЕВО":
        $jkJson = "veresaevo";
        break;
    case "ЛEВОБЕРЕЖЬЕ":
        $jkJson = "lb";
        break;

    case "1777":
        $jkJson = "1777";
        break;



}


logs($jkJson, $date, $arr["data"]);








