<?php

$HybridAuthConfig = array(
    "base_url" => "http://yaf-skeleton.gunblues.com/login/hybridauth",
    "providers" => array (
        "Google" => array (
            "enabled" => true,
            "keys"    => array ( "id" => "810117458472-ah7anut4fsgtdkqagdoocfnvu483urv3.apps.googleusercontent.com", "secret" => "kr6ofzP1fqOwk6DmqgnWG5AH" ),
            "scope"           => "https://www.googleapis.com/auth/userinfo.profile ". // optional
            "https://www.googleapis.com/auth/userinfo.email"   , // optional
            "access_type"     => "offline",   // optional
            "approval_prompt" => "force",     // optional
            "hd"              => "domain.com" // optional
        )));

// vim: expandtab softtabstop=4 tabstop=4 shiftwidth=4 ts=4 sw=4
