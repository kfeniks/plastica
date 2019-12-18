<?php

function getSQL($sqlRequest)
{
    global $wpdb;
    return $wpdb->get_results($sqlRequest);
}