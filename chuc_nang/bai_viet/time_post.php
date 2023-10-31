<?php
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $timestamp = $tv_2['time'];
    $current_time = time();
    $date1 = date_create(date('Y-m-d', $timestamp));
    $date2 = date_create(date('Y-m-d', $current_time));
    $interval = date_diff($date1, $date2);
    
    if ($interval->y > 0) {
        echo $interval->y . ' năm trước';
    } elseif ($interval->m > 0) {
        echo $interval->m . ' tháng trước';
    } elseif ($interval->d > 0) {
        echo $interval->d . ' ngày trước';
    } elseif ($interval->h > 0) {
        echo $interval->h . ' giờ trước';
    } elseif ($interval->i > 0) {
        echo $interval->i . ' phút trước';
    } else {
        echo 'Vừa xong';
    }
    
?>