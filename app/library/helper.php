<?php

function format($price) {
    return number_format($price, 2);
}

function randomNumbers($length = 10)
{
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function getStockLevel($quantity) {
    if($quantity > setting('site.stock_threshold')) {
        return 'In Stock';
    } else if($quantity <= setting('site.stock_threshold') && $quantity > 0) {
        return 'Low Stock';
    } else {
        return 'Out Of Stock';
    }
}

function discount($original, $new) {
    $sub = $original-$new;
    $divide = $sub/$original;
    $final = $divide*100;
    return number_format($final, 0);
}

function str_limit($string, $limit) {
    return strlen($string) > $limit ? substr($string, 0, $limit) . ' ...' : $string;
}

function dateFormat($date, $format) {
    return \Carbon\Carbon::parse($date)->format($format);
}

function NumToMon($month) {
    return strftime('%b', strtotime('2023-' . $month . '-01'));
}

function ratingAVG($rating) {
    $floor = floor($rating);
    $round = round(($floor / 5) * 100);
    return $round;
}
