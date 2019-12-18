<?php

function userJoinCustomFields($userID)
{
    return "SELECT field_name,description,user_value FROM wp_prflxtrflds_user_field_data  as user LEFT JOIN wp_prflxtrflds_fields_id  AS fields ON fields.field_id = user.field_id WHERE user.user_id = $userID";
}