<?php
function compareDates($date1, $date2){
    if (strtotime($date1) < strtotime($date2))
        return 1;
    else if (strtotime($date1) > strtotime($date2))
        return -1;
    else
        return 0;
}
?>