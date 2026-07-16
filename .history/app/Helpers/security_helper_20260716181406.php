<?php

if (!function_exists('saveLog')) {

    function saveLog($type, $severity, $description, $status)
    {
        $db = db_connect();

        $db->table('attack_logs')->insert([
            'attack_type' => $type,
            'severity' => $severity,
            'description' => $description,
            'status' => $status,
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }

}