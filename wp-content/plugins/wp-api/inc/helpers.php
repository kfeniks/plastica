<?php
function collectUserData($userID)
{
    $userData = get_user_meta ($userID);

    $user['nickname'] = $userData['nickname'][0] ?? '';
    $user['first_name'] = $userData['first_name'][0] ?? '';
    $user['last_name'] = $userData['last_name'][0] ?? '';

    $userCustomFields = getSQL(userJoinCustomFields($userID));

    foreach ($userCustomFields as $fields)
    {
        $user[$fields->field_name] = $fields->user_value;
    }


    return $user;
}