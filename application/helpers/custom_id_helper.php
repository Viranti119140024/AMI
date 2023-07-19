<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('generate_custom_id')) {
    function generate_custom_id($prefix, $id, $table)
    {
        $CI =& get_instance();
        $CI->load->database();

        $prefix = strtoupper($prefix); // Konversi prefix menjadi huruf besar

        // Lakukan query untuk mencari ID terakhir dengan prefix yang sama
        $CI->db->select_max($id);
        $CI->db->like($id, $prefix, 'after');
        $lastId = $CI->db->get($table)->row();

        if ($lastId) {
            $lastNumber = intval(str_replace($prefix, '', $lastId->$id));
            $newNumber = $lastNumber + 1;
        } else {
            $newNumber = 1;
        }

        // Menghasilkan format ID dengan memadai angka dengan nol di depan
        $id = $prefix . $newNumber;

        return $id;
    }
}
