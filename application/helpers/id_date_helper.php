<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if (!function_exists('id_date')) {
    function id_date($date)
    {
        if ($date != NULL) {
            
        $indonesian_month = array("Jan", "Feb", "Mar",
            "Apr", "Mei", "Jun",
            "Jul", "Agt", "Sep",
            "Okto", "Nov", "Des");
        $year        = substr($date, 0, 4); // memisahkan format tahun menggunakan substring
        $month       = substr($date, 5, 2); // memisahkan format bulan menggunakan substring
        $currentdate = substr($date, 8, 2); // memisahkan format tanggal menggunakan substring
        $result = $currentdate . " " . $indonesian_month[(int) $month - 1] . " " . $year;

        return $result;
    }else {
        
    }
    }
}