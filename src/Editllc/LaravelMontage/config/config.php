<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Montage Username
    |--------------------------------------------------------------------------
    |
    | Your montage username that you use to login to montage.
    |
    */
    'username' => '',

    /*
    |--------------------------------------------------------------------------
    | Montage Password
    |--------------------------------------------------------------------------
    |
    | Your montage password that you use to login to montage.
    |
    */
    'password' => '',

    /*
    |--------------------------------------------------------------------------
    | Montage Token
    |--------------------------------------------------------------------------
    |
    | A montage authentication token.  If you already have a token add the
    | value here.  This will then take priority over the username and
    | password values above.  Montage tokens do not expire.
    |
    */
    'token' => '',

    /*
    |--------------------------------------------------------------------------
    | Montage Subdomain
    |--------------------------------------------------------------------------
    |
    | Montage will provide you with a subdomain that is used in all query
    | endpoint.  Provide this value here and we'll construct all of
    | the injectable instances of Montage with the subdomain.
    |
    */
    'subdomain' => '',

];