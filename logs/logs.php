<?php
function logs($jk = null, $date = null, $data = null)
{

    if(isset($jk) && isset($date) && isset($data)) {

        if (file_exists(ROOT . "/plans/$jk.json")) {
            $log = file_get_contents(ROOT . "/plans/$jk.json");
            $log = json_decode($log, true);
        } else {
            $log = [];
        }


        $log[$date] = $data;
        $log = json_encode($log, JSON_UNESCAPED_UNICODE);
        file_put_contents(ROOT . "/plans/$jk.json", $log);

    } else {

        if (file_exists(ROOT . "/hook.json")) {
            $log = file_get_contents(ROOT . "/hook.json");
            $log = json_decode($log, true);
        } else {
            $log = [];
        }

        $t = explode(" ",microtime());
        $log[date("Y-m-d H:i:s", $t[1]).substr((string)$t[0],1,4)] = $_REQUEST;
        $log = json_encode($log, JSON_UNESCAPED_UNICODE);
        file_put_contents(ROOT . "/hook.json", $log);

    }

}
