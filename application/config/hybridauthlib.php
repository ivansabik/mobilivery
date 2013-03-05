<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/* !
 * HybridAuth
 * http://hybridauth.sourceforge.net | http://github.com/hybridauth/hybridauth
 * (c) 2009-2012, HybridAuth authors | http://hybridauth.sourceforge.net/licenses.html
 */

// ----------------------------------------------------------------------------------------
//	HybridAuth Config file: http://hybridauth.sourceforge.net/userguide/Configuration.html
// ----------------------------------------------------------------------------------------

$config =
        array(
            // set on "base_url" the relative url that point to HybridAuth Endpoint
            "base_url" => "movil/auth/endpoint",
            "providers" => array(
                "Facebook" => array(
                    "enabled" => true,
                    "keys" => array("id" => "514360261948936", "secret" => "75ac3280cf7a7ff849c9549ffa7759ce"),
                    "scope" => "email",
                ),
                "Twitter" => array(
                    "enabled" => true,
                    "keys" => array("key" => "UJaA62ywfAtDViKcsA6Aw", "secret" => "UU2iQMDmxC65lrtFLijKPqO69RDlF7zpJW7svUBAds")
                ),
                "Google" => array(
                    "enabled" => true,
                    "access_type" => "online",
                    "keys" => array("id" => "496229505037-rs6bf69gipcc5kilkkcu9npkek0jqdrv.apps.googleusercontent.com", "secret" => "F0qCZ5nkPrUPur5pIOX8ozaI"),
                    "scope" => "https://www.googleapis.com/auth/userinfo.profile " .
                    "https://www.googleapis.com/auth/userinfo.email"
                ),
            ),
            // if you want to enable logging, set 'debug_mode' to true  then provide a writable file by the web server on "debug_file"
            "debug_mode" => true,
            "debug_file" => APPPATH . '/logs/hybridauth.log',
);


/* End of file hybridauthlib.php */
/* Location: ./application/config/hybridauthlib.php */