<?php

const ROOT = __DIR__;

require ROOT . "/functions/require.php";




logs();

$date = $_REQUEST["inputData"];


//$date = "2023-03-16";


$path = ROOT . "/plans/";

$file_list = glob($path . '*.json');



$finishArray = [];


$plansArr = [];


foreach ($file_list as $file_path) {

    $json_str = file_get_contents($file_path);


    $json_data = json_decode($json_str, true);

    if(!empty($json_data)) {
        switch (basename($file_path)) {

            case "architector.json":

                if(!empty($json_data[$date])) {
                    $plansArr["АРХИТЕКТОР"] = $json_data[$date];
                } else {
                    $plansArr["АРХИТЕКТОР"] = end($json_data);
                }

                break;

            case "dostoyanie.json":

                if(!empty($json_data[$date])) {
                    $plansArr["ДОСТОЯНИЕ"] = $json_data[$date];
                } else {
                    $plansArr["ДОСТОЯНИЕ"] = end($json_data);
                }

                break;
            case "guber.json":

                if(!empty($json_data[$date])) {
                    $plansArr["ГУБЕРНСКИЙ"] = $json_data[$date];
                } else {
                    $plansArr["ГУБЕРНСКИЙ"] = end($json_data);
                }

                break;
            case "lb.json":
                if(!empty($json_data[$date])) {
                    $plansArr["ЛEВОБЕРЕЖЬЕ"] = $json_data[$date];
                } else {
                    $plansArr["ЛEВОБЕРЕЖЬЕ"] = end($json_data);
                }

                break;
            case "veresaevo.json":
                if(!empty($json_data[$date])) {
                    $plansArr["ВЕРЕСАЕВО"] = $json_data[$date];
                } else {
                    $plansArr["ВЕРЕСАЕВО"] = end($json_data);
                }

                break;

            case "1777.json":
                if(!empty($json_data[$date])) {
                    $plansArr["1777"] = $json_data[$date];
                } else {
                    $plansArr["1777"] = end($json_data);
                }

                break;



        }


    } else {
        switch (basename($file_path)) {

            case "architector.json":
                $plansArr["АРХИТЕКТОР"] = [
                    "contextMkr" => 0,
                    "vk" => 0,
                    "MyTarget" => 0,
                    "mediynaya" => 0,
                    "organic" => 0,
                    "vontresalt" => 0,
                    "agregatory" => 0,
                    "offlineCalls" => 0,
                    "offlineOffice" => 0,
                ];
                break;
            case "dostoyanie.json":
                $plansArr["ДОСТОЯНИЕ"] = [
                    "contextMkr" => 0,
                    "vk" => 0,
                    "MyTarget" => 0,
                    "mediynaya" => 0,
                    "organic" => 0,
                    "vontresalt" => 0,
                    "agregatory" => 0,
                    "offlineCalls" => 0,
                    "offlineOffice" => 0,
                ];
                break;

            case "guber.json":
                $plansArr["ГУБЕРНСКИЙ"] = [
                    "contextMkr" => 0,
                    "vk" => 0,
                    "MyTarget" => 0,
                    "mediynaya" => 0,
                    "organic" => 0,
                    "vontresalt" => 0,
                    "agregatory" => 0,
                    "offlineCalls" => 0,
                    "offlineOffice" => 0,
                ];
                break;

            case "lb.json":
                $plansArr["ЛEВОБЕРЕЖЬЕ"] = [
                    "contextMkr" => 0,
                    "vk" => 0,
                    "MyTarget" => 0,
                    "mediynaya" => 0,
                    "organic" => 0,
                    "vontresalt" => 0,
                    "agregatory" => 0,
                    "offlineCalls" => 0,
                    "offlineOffice" => 0,
                ];
                break;

            case "veresaevo.json":
                $plansArr["ВЕРЕСАЕВО"] = [
                    "contextMkr" => 0,
                    "vk" => 0,
                    "MyTarget" => 0,
                    "mediynaya" => 0,
                    "organic" => 0,
                    "vontresalt" => 0,
                    "agregatory" => 0,
                    "offlineCalls" => 0,
                    "offlineOffice" => 0,
                ];
                break;
            case "1777.json":
                $plansArr["1777"] = [
                    "contextMkr" => 0,
                    "vk" => 0,
                    "MyTarget" => 0,
                    "mediynaya" => 0,
                    "organic" => 0,
                    "vontresalt" => 0,
                    "agregatory" => 0,
                    "offlineCalls" => 0,
                    "offlineOffice" => 0,
                ];
                break;




        }

        }
}








$leadsReport = [

    "ГУБЕРНСКИЙ" => [

        "Контекстная мкр" => 0,
        "Вк" => 0,
        "MyTarget" => 0,
        "Медийная" => 0,
        "Органика" => 0,
        "Вонтрезалт" => 0,
        "Агрегаторы" => 0,
        "Оффлайн звонки" => 0,
        "Оффлайн пришёл в офис" => 0

    ],


    "ДОСТОЯНИЕ" => [

        "Контекстная мкр" => 0,
        "Вк" => 0,
        "MyTarget" => 0,
        "Медийная" => 0,
        "Органика" => 0,
        "Вонтрезалт" => 0,
        "Агрегаторы" => 0,
        "Оффлайн звонки" => 0,
        "Оффлайн пришёл в офис" => 0
    ],

    "АРХИТЕКТОР" => [

        "Контекстная мкр" => 0,
        "Вк" => 0,
        "MyTarget" => 0,
        "Медийная" => 0,
        "Органика" => 0,
        "Вонтрезалт" => 0,
        "Агрегаторы" => 0,
        "Оффлайн звонки" => 0,
        "Оффлайн пришёл в офис" => 0
    ],

    "ВЕРЕСАЕВО" => [

        "Контекстная мкр" => 0,
        "Вк" => 0,
        "MyTarget" => 0,
        "Медийная" => 0,
        "Органика" => 0,
        "Вонтрезалт" => 0,
        "Агрегаторы" => 0,
        "Оффлайн звонки" => 0,
        "Оффлайн пришёл в офис" => 0
    ],

    "ЛEВОБЕРЕЖЬЕ" => [

        "Контекстная мкр" => 0,
        "Вк" => 0,
        "MyTarget" => 0,
        "Медийная" => 0,
        "Органика" => 0,
        "Вонтрезалт" => 0,
        "Агрегаторы" => 0,
        "Оффлайн звонки" => 0,
        "Оффлайн пришёл в офис" => 0
    ],

    "1777" => [

        "Контекстная мкр" => 0,
        "Вк" => 0,
        "MyTarget" => 0,
        "Медийная" => 0,
        "Органика" => 0,
        "Вонтрезалт" => 0,
        "Агрегаторы" => 0,
        "Оффлайн звонки" => 0,
        "Оффлайн пришёл в офис" => 0
    ]



];


foreach ($leadsReport as $jkName => $countArray) {

    $apiResNoFilter = null;
    $jkIdent = null;
    $other = null;


    switch ($jkName) {

        case "ГУБЕРНСКИЙ":
            $other = ["Онлайн", "Оффлайн", "Звонок", "Звонок КРД", "IVR КРД"];
            $groupBy = "channel_id";
            $jkIdent = JK_GUBER;
            $apiResNoFilter = smartisConnect($date, JK_GUBER, $groupBy);
            break;

        case "ДОСТОЯНИЕ":
            $other = ["Онлайн", "Оффлайн", "Звонок", "Звонок КРД", "IVR КРД"];
            $groupBy = "channel_id";
            $jkIdent = JK_DOSTOYANIE;
            $apiResNoFilter = smartisConnect($date, JK_DOSTOYANIE, $groupBy);
            break;

        case "АРХИТЕКТОР":
            $other = ["Онлайн", "Оффлайн", "Звонок", "Звонок КРД", "IVR КРД"];
            $groupBy = "channel_id";
            $jkIdent = JK_ARCHITECTOR;
            $apiResNoFilter = smartisConnect($date, JK_ARCHITECTOR, $groupBy);
            break;

        case "ВЕРЕСАЕВО":
            $other = ["Онлайн", "Оффлайн", "Звонок", "Звонок РНД", "IVR РНД"];
            $groupBy = "channel_id";
            $jkIdent = JK_VERESAEVO;
            $apiResNoFilter = smartisConnect($date,JK_VERESAEVO, $groupBy);
            break;

        case "ЛEВОБЕРЕЖЬЕ":
            $other = ["Онлайн", "Оффлайн", "Звонок", "Звонок РНД", "IVR РНД"];
            $groupBy = "channel_id";
            $jkIdent = JK_LEVOBEJIE;
            $apiResNoFilter = smartisConnect($date,JK_LEVOBEJIE, $groupBy);
            break;

        case "1777":
            $other = ["Онлайн", "Оффлайн", "Звонок", "Звонок РНД", "IVR РНД"];
            $groupBy = "channel_id";
            $jkIdent = JK_KVARTALY;
            $apiResNoFilter = smartisConnect($date,JK_KVARTALY, $groupBy);
            break;



    }


    $apiResNoFilter = $apiResNoFilter["reports"]["crm-celevye-obrascheniya_EmURSc"];



    foreach ($apiResNoFilter as $parName => $parValue) {


        switch ($parName) {
            case "Лидогенерация":
                $leadsReport[$jkName]["Вонтрезалт"] += $parValue;
                break;

            case "Контекстная реклама":
                $leadsReport[$jkName]["Контекстная мкр"] += $parValue;
                break;

            case "Реклама в соц.сетях":
                $groupBy = "placement_id";
                //              advert реклама
                $apiResAdvert = smartisConnect($date, $jkIdent, $groupBy);
                $apiResAdvert =  $apiResAdvert["reports"]["crm-celevye-obrascheniya_EmURSc"];

                if(!empty($apiResAdvert["vk.com реклама"])) {
                    $leadsReport[$jkName]["Вк"] += $apiResAdvert["vk.com реклама"];
                }

                if(!empty($apiResAdvert["MyTarget соц.сети"])) {

                    $leadsReport[$jkName]["MyTarget"] += $apiResAdvert["MyTarget соц.сети"];

                }

                break;



            case "Медийная реклама":
                $leadsReport[$jkName]["Медийная"] += $parValue;
                break;

            case "Базы недвижимости":
                $leadsReport[$jkName]["Агрегаторы"] += $parValue;
                break;

            case "Прямой трафик":
            case "Соц.сети органика":
            case "SEO":
                $leadsReport[$jkName]["Органика"] += $parValue;
                break;
            case "Другое":

                $groupBy = "channel_id";
                $filterCategory = 231;

                foreach ($other as $key => $filterValue) {


                    $apiResFilter = smartisConnect($date, $jkIdent, $groupBy, $filterCategory, $filterValue);
                    $apiResFilter = $apiResFilter["reports"]["crm-celevye-obrascheniya_EmURSc"];

                    if(!empty($apiResFilter["Другое"])) {

                        switch ($key) {
//                    ["Онлайн", "Оффлайн", "Звонок", "Звонок КРД", "IVR КРД"]

                            case 0:
                                $leadsReport[$jkName]["Органика"] += $apiResFilter["Другое"];
                                break;

                            case 1:
                                $leadsReport[$jkName]["Оффлайн пришёл в офис"] += $apiResFilter["Другое"];
                                break;

                            case 2:
                            case 3:
                            case 4:
                                $leadsReport[$jkName]["Оффлайн звонки"] += $apiResFilter["Другое"];
                                break;


                        }

                    }



                }



                break;



        }
    }






}




$finishArray["leadsReport"] = $leadsReport;
$finishArray["planArr"] = $plansArr;

$percentArr = [];

foreach ($leadsReport as $jkName => $jkArray) {

    switch ($jkName) {

        case "ГУБЕРНСКИЙ":
        case "АРХИТЕКТОР":
        case "ВЕРЕСАЕВО":
        case "ЛEВОБЕРЕЖЬЕ":
        case "ДОСТОЯНИЕ":
        case "1777":

            $percentArr[$jkName] = countPercents($jkArray, $plansArr, $jkName);

            break;


    }



}

$finishArray["percentArr"] = $percentArr;



foreach ($finishArray["leadsReport"] as $jkName => $jkCountArray) {

    $total = 0;

    foreach ($jkCountArray as $value) {

        $total += $value;

    }

    $finishArray["total"][$jkName]["Итого лидов"] = $total;




}



foreach ($finishArray["planArr"] as $jkName => $jkCountArray) {

    $total = 0;

    foreach ($jkCountArray as $value) {

        $total += $value;

    }

    $finishArray["total"][$jkName]["Итого плановых лидов"] = $total;


    if($finishArray["total"][$jkName]["Итого плановых лидов"] == 0) {

        $finishArray["total"][$jkName]["Процент"] = 0;

    } else {

        $finishArray["total"][$jkName]["Процент"] = ceil($finishArray["total"][$jkName]["Итого лидов"] / $finishArray["total"][$jkName]["Итого плановых лидов"] * 100);

    }


}



echo json_encode($finishArray);








