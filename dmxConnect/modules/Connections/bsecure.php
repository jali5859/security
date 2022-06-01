<?php
// Database Type : "MySQL"
// Database Adapter : "mysql"
$exports = <<<'JSON'
{
    "name": "bsecure",
    "module": "dbconnector",
    "action": "connect",
    "options": {
        "server": "mysql",
        "connectionString": "mysql:host=127.0.0.1;port=8889;dbname=bsecure;user=root;password=root",
        "meta"  : {}
    }
}
JSON;
?>