<?php

defined('BASEPATH') or exit('No direct script access allowed');

function generate_custom_id($prefix, $column, $table)
{
    $CI = &get_instance();
    $CI->load->database();

    $last_id = $CI->db
        ->select($column)
        ->order_by($column, 'desc')
        ->limit(1)
        ->get($table)
        ->row($column);

    // Check if the last ID exists and extract the numeric part
    $id_number = 1;
    if ($last_id) {
        $last_id_numeric_part = (int) substr($last_id, strlen($prefix));
        $id_number = $last_id_numeric_part + 1;
    }

    // Find the next available ID by incrementing the numeric part
    $next_id = $prefix . $id_number;

    // Check if the next ID already exists, if yes, keep incrementing until we find an available one
    while ($CI->db->get_where($table, array($column => $next_id))->row()) {
        $id_number++;
        $next_id = $prefix . $id_number;
    }

    return $next_id;
}
