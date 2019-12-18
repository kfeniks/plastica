<?php

function get_own_lists_users($limits = NULL)
{
    $result = [];
    if($limits === NULL) $limits = getLimitUserList();

    $users = get_users( array( 'fields' => array( 'ID' ) ) );

    $countUser = 0;

    foreach($users as $user_id) {
        $result[] = collectUserData($user_id->ID);
        ++$countUser;

        if($countUser >= $limits) {
            return $result;
        }
    }

    return $result;
}