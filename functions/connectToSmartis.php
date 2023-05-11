<?php


function smartisConnect(string $date, string $jkName, string $groupBy, int $filterCategory = 0, $filterValue = null): array {



//    площадки placement_id
//    каналы channel_id
//    day сумма всех по jk



    $url = "https://my.smartis.bi/api/reports/getReport";



    if($filterCategory != 0) {


            $data = [
                "project" => $jkName,
                "metrics" => CRM_CELEVIE_OBRASHENIYA,
                "datetimeFrom" => "$date 00:00:00",
                "datetimeTo" => "$date 23:59:59",

                "filters" => [
                    [
                        "filter_category" => $filterCategory,
                        "filter_condition" => "=",
                        "filter_value" => $filterValue

                    ],



                ],

                "groupBy" => $groupBy

            ];



    } else {

        $data = [
            "project" => $jkName,
            "metrics" => CRM_CELEVIE_OBRASHENIYA,
            "datetimeFrom" => "$date 00:00:00",
            "datetimeTo" => "$date 23:59:59",
            "groupBy" => $groupBy

        ];

    }


    $data_string = json_encode($data);

    $headers = array(
        'Accept: application/json',
        'Content-Type: application/json',
        'X-CSRF-TOKEN: ',
        'Authorization: Bearer ' . SMARTIS_TOKEN,
        'Content-Length: ' . strlen($data_string)
    );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, METHOD_POST);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);

    curl_close($ch);

    return json_decode($response, true);




}
















