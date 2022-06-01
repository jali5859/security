<?php
require('../../../dmxConnectLib/dmxConnect.php');


$app = new \lib\App();

$app->define(<<<'JSON'
{
  "meta": {
    "$_GET": [
      {
        "type": "text",
        "name": "sort"
      },
      {
        "type": "text",
        "name": "dir"
      }
    ]
  },
  "exec": {
    "steps": {
      "name": "query",
      "module": "dbconnector",
      "action": "select",
      "options": {
        "sql": {
          "type": "SELECT",
          "columns": [
            {
              "table": "identification_types",
              "column": "name"
            },
            {
              "table": "identification_types",
              "column": "id"
            }
          ],
          "table": {
            "name": "identification_types"
          },
          "joins": [],
          "query": "SELECT name, id\nFROM identification_types",
          "params": []
        },
        "connection": "bsecure"
      },
      "output": true,
      "meta": [
        {
          "type": "text",
          "name": "name"
        },
        {
          "type": "text",
          "name": "id"
        }
      ],
      "outputType": "array"
    }
  }
}
JSON
);
?>