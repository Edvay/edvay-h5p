<?php
require_once ('wp-config.php');

if(isset($_GET['username']) && $_GET['username'] != '' &&
isset($_GET['rand']) && $_GET['rand'] != '')
{
    $username = trim($_GET['username']);
    $rand = trim($_GET['rand']);

    global $wpdb;
    $user_details = $wpdb->get_row("SELECT id, user_email FROM wp_users
    WHERE user_login='vinayak'");

    if(! $user_details->id)
    {
        die("Error: Not a valid user");
    }
    else
    {
        // $rand_email = md5($user_details->user_email);
        // if($rand_email != $rand)
        // {
        //     die("Error: Invalid URL");
        // }
        // else {
            $user = get_user_by('login', $username );

            if ( !is_wp_error( $user ) )
            {
                wp_clear_auth_cookie();
                wp_set_current_user ( $user->ID );
                wp_set_auth_cookie  ( $user->ID );
                wp_safe_redirect( '/wp-admin/admin.php?page=h5p/test.php' );
                exit();
            }
        // }
    }
}
else {
    die("Error: Missing params");
}
?>
