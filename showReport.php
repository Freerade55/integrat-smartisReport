<!DOCTYPE html>
<html>
<head>
    <title>Smartis отчет</title>
    <link rel="stylesheet" href="css/tableStyle.css">

</head>
<body>

<table>

    <tr>
        <th colspan="5" class="orange"><?php
            $formatted_date = $_GET["date"];
            $formatted_date = date("d.m.Y", strtotime($formatted_date));
            echo $formatted_date;
            ?></th>
    </tr>
    <tr>
        <td>Объекты</td>
        <td class="brown">Канал</td>
        <td class="grey">План целевые лиды день</td>
        <td class="grey">Лиды</td>
        <td class="grey">% выполнен </td>

    </tr>





    <?php

        const ROOT = __DIR__;

        require ROOT . "/functions/require.php";

//    print_r(json_decode($_GET['resultData'], true));

    $resultArray = json_decode($_GET['resultData'], true);


    $leadsReport = $resultArray["leadsReport"];
    $planArr = $resultArray["planArr"];
    $percentArr = $resultArray["percentArr"];
    $total = $resultArray["total"];


    $jkArray = ["ГУБЕРНСКИЙ", "ДОСТОЯНИЕ", "АРХИТЕКТОР", "ВЕРЕСАЕВО", "ЛEВОБЕРЕЖЬЕ", "1777"];


    foreach ($jkArray as $value) {
        switch ($value) {
            case "ГУБЕРНСКИЙ":
            case "ДОСТОЯНИЕ":
            case "АРХИТЕКТОР":
            case "ВЕРЕСАЕВО":
            case "ЛEВОБЕРЕЖЬЕ":
            case "1777":

            showTable($value, $leadsReport, $planArr, $percentArr, $total);
                break;




        }
    }









    ?>

<!--    <tr>-->
<!--        <td rowspan="2">Губернский</td>-->
<!--        <td>Контекстная мкр</td>-->
<!--        <td>7</td>-->
<!--        <td>3</td>-->
<!--        <td>20%</td>-->
<!---->
<!--    </tr>-->
<!---->
<!--    <tr>-->
<!--        <td>Вк</td>-->
<!--        <td>7</td>-->
<!--        <td>3</td>-->
<!--        <td>20%</td>-->
<!---->
<!--    </tr>-->
<!---->
<!--    <tr>-->
<!--        <td colspan="2">Итого</td>-->
<!--        <td>14</td>-->
<!--        <td>6</td>-->
<!--        <td>40%</td>-->
<!---->
<!--    </tr>-->
<!---->
<!---->
<!---->
<!---->
<!--    <tr>-->
<!--        <td rowspan="2">Лб</td>-->
<!--        <td>Контекстная мкр</td>-->
<!--        <td>7</td>-->
<!--        <td>3</td>-->
<!--        <td>20%</td>-->
<!---->
<!--    </tr>-->
<!---->
<!--    <tr>-->
<!--        <td>Вк</td>-->
<!--        <td>7</td>-->
<!--        <td>3</td>-->
<!--        <td>20%</td>-->
<!---->
<!--    </tr>-->
<!---->
<!--    <tr>-->
<!--        <td colspan="2">Итого</td>-->
<!--        <td>14</td>-->
<!--        <td>6</td>-->
<!--        <td>40%</td>-->
<!---->
<!--    </tr>-->
<!---->



</table>



</body>
</html>