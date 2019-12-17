<?php

function get_own_lists_users()
{
    $users = get_users( array( 'fields' => array( 'ID' ) ) );
    foreach($users as $user_id) {
        print_r(get_user_meta ( $user_id->ID));
    }
    //return get_users();
}