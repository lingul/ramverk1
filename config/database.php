<?php
/**
 * Config file for Database.
 *
 */
if ($_SERVER["SERVER_NAME"] === "www.student.bth.se") {
    return [
        "dsn"             => "mysql:host=blu-ray.student.bth.se;dbname=ligm19;",
        "username"        => "ligm19",
        "password"        => "6JCEuJ8XASTZ",
        "driver_options"  => [
            \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"
        ],
        "fetch_mode"      => \PDO::FETCH_OBJ,
        "table_prefix"    => null,
        "session_key"     => "Anax\Database",
        "emulate_prepares" => false,

        // True to be very verbose during development
        "verbose"         => false,

        // True to be verbose on connection failed
        "debug_connect"   => true,
    ];
}

return [
    "dsn"             => "mysql:host=127.0.0.1;dbname=anaxdb;",
    "username"        => "anax",
    "password"        => "anax",
    "driver_options"  => [
        \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"
    ],
    "fetch_mode"      => \PDO::FETCH_OBJ,
    "table_prefix"    => null,
    "session_key"     => "Anax\Database",
    "emulate_prepares" => false,

    // True to be very verbose during development
    "verbose"         => false,

    // True to be verbose on connection failed
    "debug_connect"   => true,
];
