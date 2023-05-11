<?php



function showTable(string $value, array $leadsReport, array $planArr, array $percentArr, array $total) {



    echo "<tr>";

    echo "<td rowspan='9'>$value</td>";
    echo "<td>Контекстная мкр</td>";
    echo "<td>{$planArr[$value]["contextMkr"]}</td>";
    echo "<td>{$leadsReport[$value]["Контекстная мкр"]}</td>";
    echo "<td>{$percentArr[$value]["Контекстная мкр"]}%</td>";

    echo "</tr>";



    echo "<tr>";

    echo "<td>Вк</td>";
    echo "<td>{$planArr[$value]["vk"]}</td>";
    echo "<td>{$leadsReport[$value]["Вк"]}</td>";
    echo "<td>{$percentArr[$value]["Вк"]}%</td>";

    echo "</tr>";



    echo "<tr>";

    echo "<td>MyTarget</td>";
    echo "<td>{$planArr[$value]["MyTarget"]}</td>";
    echo "<td>{$leadsReport[$value]["MyTarget"]}</td>";
    echo "<td>{$percentArr[$value]["MyTarget"]}%</td>";

    echo "</tr>";




    echo "<tr>";

    echo "<td>Медийная</td>";
    echo "<td>{$planArr[$value]["mediynaya"]}</td>";
    echo "<td>{$leadsReport[$value]["Медийная"]}</td>";
    echo "<td>{$percentArr[$value]["Медийная"]}%</td>";

    echo "</tr>";


    echo "<tr>";

    echo "<td>Органика</td>";
    echo "<td>{$planArr[$value]["organic"]}</td>";
    echo "<td>{$leadsReport[$value]["Органика"]}</td>";
    echo "<td>{$percentArr[$value]["Органика"]}%</td>";

    echo "</tr>";


    echo "<tr>";

    echo "<td>Вонтрезалт</td>";
    echo "<td>{$planArr[$value]["vontresalt"]}</td>";
    echo "<td>{$leadsReport[$value]["Вонтрезалт"]}</td>";
    echo "<td>{$percentArr[$value]["Вонтрезалт"]}%</td>";

    echo "</tr>";

    echo "<tr>";

    echo "<td>Агрегаторы</td>";
    echo "<td>{$planArr[$value]["agregatory"]}</td>";
    echo "<td>{$leadsReport[$value]["Агрегаторы"]}</td>";
    echo "<td>{$percentArr[$value]["Агрегаторы"]}%</td>";

    echo "</tr>";


    echo "<tr>";

    echo "<td>Оффлайн звонки</td>";
    echo "<td>{$planArr[$value]["offlineCalls"]}</td>";
    echo "<td>{$leadsReport[$value]["Оффлайн звонки"]}</td>";
    echo "<td>{$percentArr[$value]["Оффлайн звонки"]}%</td>";

    echo "</tr>";

    echo "<tr>";

    echo "<td>Оффлайн пришёл в офис</td>";
    echo "<td>{$planArr[$value]["offlineOffice"]}</td>";
    echo "<td>{$leadsReport[$value]["Оффлайн пришёл в офис"]}</td>";
    echo "<td>{$percentArr[$value]["Оффлайн пришёл в офис"]}%</td>";

    echo "</tr>";


    echo "<td colspan='2'>Итого</td>";
    echo "<td>{$total[$value]["Итого плановых лидов"]}</td>";
    echo "<td>{$total[$value]["Итого лидов"]}</td>";
    echo "<td>{$total[$value]["Процент"]}%</td>";

    echo "</tr>";










}









function countPercents(array $jkArray, array $plansArr, string $jkName) {

    $arr = [];



    if($plansArr[$jkName]["contextMkr"] == 0) {

        $arr["Контекстная мкр"] = 0;

    } else {

        $arr["Контекстная мкр"] = ceil($jkArray["Контекстная мкр"] / $plansArr[$jkName]["contextMkr"] * 100);

    }


    if($plansArr[$jkName]["vk"] == 0) {

        $arr["Вк"] = 0;
    } else {
        $arr["Вк"] = ceil($jkArray["Вк"] / $plansArr[$jkName]["vk"] * 100);

    }


    if($plansArr[$jkName]["MyTarget"] == 0) {

        $arr["MyTarget"] = 0;
    } else {
        $arr["MyTarget"] = ceil($jkArray["MyTarget"] / $plansArr[$jkName]["MyTarget"] * 100);

    }


    if($plansArr[$jkName]["mediynaya"] == 0) {

        $arr["Медийная"] = 0;
    } else {
        $arr["Медийная"] = ceil($jkArray["Медийная"] / $plansArr[$jkName]["mediynaya"] * 100);

    }


    if($plansArr[$jkName]["organic"] == 0) {

        $arr["Органика"] = 0;
    } else {
        $arr["Органика"] = ceil($jkArray["Органика"] / $plansArr[$jkName]["organic"] * 100);

    }

    if($plansArr[$jkName]["vontresalt"] == 0) {

        $arr["Вонтрезалт"] = 0;
    } else {

        $arr["Вонтрезалт"] = ceil($jkArray["Вонтрезалт"] / $plansArr[$jkName]["vontresalt"] * 100);

    }


    if($plansArr[$jkName]["agregatory"] == 0) {

        $arr["Агрегаторы"] = 0;
    } else {

        $arr["Агрегаторы"] = ceil($jkArray["Агрегаторы"] / $plansArr[$jkName]["agregatory"] * 100);


    }


    if($plansArr[$jkName]["offlineCalls"] == 0) {

        $arr["Оффлайн звонки"] = 0;
    } else {

        $arr["Оффлайн звонки"] = ceil($jkArray["Оффлайн звонки"] / $plansArr[$jkName]["offlineCalls"] * 100);


    }


    if($plansArr[$jkName]["offlineOffice"] == 0) {

        $arr["Оффлайн пришёл в офис"] = 0;
    } else {

        $arr["Оффлайн пришёл в офис"] = ceil($jkArray["Оффлайн пришёл в офис"] / $plansArr[$jkName]["offlineOffice"] * 100);



    }

    return $arr;



}







