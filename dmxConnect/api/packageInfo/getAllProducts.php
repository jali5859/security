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
    "steps": [
      {
        "name": "getsensors",
        "module": "dbconnector",
        "action": "select",
        "options": {
          "sql": {
            "type": "SELECT",
            "columns": [
              {
                "table": "i_m_s_local_products",
                "column": "id",
                "alias": "sensorid"
              },
              {
                "table": "i_m_s_local_products",
                "column": "name",
                "alias": "sensorname"
              },
              {
                "table": "i_m_s_local_products",
                "column": "description",
                "alias": "sensordesc"
              },
              {
                "table": "i_m_s_local_products",
                "column": "type",
                "alias": "sensortype"
              }
            ],
            "table": {
              "name": "i_m_s_local_products"
            },
            "joins": [],
            "wheres": {
              "condition": "AND",
              "rules": [
                {
                  "id": "i_m_s_local_products.type",
                  "field": "i_m_s_local_products.type",
                  "type": "double",
                  "operator": "equal",
                  "value": 1,
                  "data": {
                    "table": "i_m_s_local_products",
                    "column": "type",
                    "type": "number"
                  },
                  "operation": "="
                }
              ],
              "conditional": null,
              "valid": true
            },
            "query": "SELECT id AS sensorid, name AS sensorname, description AS sensordesc, type AS sensortype\nFROM i_m_s_local_products\nWHERE type = 1",
            "params": []
          },
          "connection": "bsecure"
        },
        "output": true,
        "meta": [
          {
            "type": "text",
            "name": "sensorid"
          },
          {
            "type": "text",
            "name": "sensorname"
          },
          {
            "type": "text",
            "name": "sensordesc"
          },
          {
            "type": "number",
            "name": "sensortype"
          }
        ],
        "outputType": "array"
      },
      {
        "name": "getcontacts",
        "module": "dbconnector",
        "action": "select",
        "options": {
          "sql": {
            "type": "SELECT",
            "columns": [
              {
                "table": "i_m_s_local_products",
                "column": "id",
                "alias": "contactid"
              },
              {
                "table": "i_m_s_local_products",
                "column": "name",
                "alias": "contactname"
              },
              {
                "table": "i_m_s_local_products",
                "column": "description",
                "alias": "contactdesc"
              },
              {
                "table": "i_m_s_local_products",
                "column": "type",
                "alias": "contacttype"
              }
            ],
            "table": {
              "name": "i_m_s_local_products"
            },
            "joins": [],
            "wheres": {
              "condition": "AND",
              "rules": [
                {
                  "id": "i_m_s_local_products.type",
                  "field": "i_m_s_local_products.type",
                  "type": "double",
                  "operator": "equal",
                  "value": 2,
                  "data": {
                    "table": "i_m_s_local_products",
                    "column": "type",
                    "type": "number"
                  },
                  "operation": "="
                }
              ],
              "conditional": null,
              "valid": true
            },
            "query": "SELECT id AS contactid, name AS contactname, description AS contactdesc, type AS contacttype\nFROM i_m_s_local_products\nWHERE type = 2",
            "params": []
          },
          "connection": "bsecure"
        },
        "output": true,
        "meta": [
          {
            "type": "text",
            "name": "contactid"
          },
          {
            "type": "text",
            "name": "contactname"
          },
          {
            "type": "text",
            "name": "contactdesc"
          },
          {
            "type": "number",
            "name": "contacttype"
          }
        ],
        "outputType": "array"
      },
      {
        "name": "getcameras",
        "module": "dbconnector",
        "action": "select",
        "options": {
          "sql": {
            "type": "SELECT",
            "columns": [
              {
                "table": "i_m_s_local_products",
                "column": "id",
                "alias": "cameraid"
              },
              {
                "table": "i_m_s_local_products",
                "column": "name",
                "alias": "cameraname"
              },
              {
                "table": "i_m_s_local_products",
                "column": "description",
                "alias": "cameradesc"
              },
              {
                "table": "i_m_s_local_products",
                "column": "type",
                "alias": "cameratype"
              }
            ],
            "table": {
              "name": "i_m_s_local_products"
            },
            "joins": [],
            "wheres": {
              "condition": "AND",
              "rules": [
                {
                  "id": "i_m_s_local_products.type",
                  "field": "i_m_s_local_products.type",
                  "type": "double",
                  "operator": "equal",
                  "value": 3,
                  "data": {
                    "table": "i_m_s_local_products",
                    "column": "type",
                    "type": "number"
                  },
                  "operation": "="
                }
              ],
              "conditional": null,
              "valid": true
            },
            "query": "SELECT id AS cameraid, name AS cameraname, description AS cameradesc, type AS cameratype\nFROM i_m_s_local_products\nWHERE type = 3",
            "params": []
          },
          "connection": "bsecure"
        },
        "output": true,
        "meta": [
          {
            "type": "text",
            "name": "cameraid"
          },
          {
            "type": "text",
            "name": "cameraname"
          },
          {
            "type": "text",
            "name": "cameradesc"
          },
          {
            "type": "number",
            "name": "cameratype"
          }
        ],
        "outputType": "array"
      },
      {
        "name": "getother",
        "module": "dbconnector",
        "action": "select",
        "options": {
          "sql": {
            "type": "SELECT",
            "columns": [
              {
                "table": "i_m_s_local_products",
                "column": "id",
                "alias": "otherid"
              },
              {
                "table": "i_m_s_local_products",
                "column": "name",
                "alias": "othername"
              },
              {
                "table": "i_m_s_local_products",
                "column": "description",
                "alias": "otherdesc"
              },
              {
                "table": "i_m_s_local_products",
                "column": "type",
                "alias": "othertype"
              }
            ],
            "table": {
              "name": "i_m_s_local_products"
            },
            "joins": [],
            "wheres": {
              "condition": "AND",
              "rules": [
                {
                  "id": "i_m_s_local_products.type",
                  "field": "i_m_s_local_products.type",
                  "type": "double",
                  "operator": "equal",
                  "value": 4,
                  "data": {
                    "table": "i_m_s_local_products",
                    "column": "type",
                    "type": "number"
                  },
                  "operation": "="
                }
              ],
              "conditional": null,
              "valid": true
            },
            "query": "SELECT id AS otherid, name AS othername, description AS otherdesc, type AS othertype\nFROM i_m_s_local_products\nWHERE type = 4",
            "params": []
          },
          "connection": "bsecure"
        },
        "output": true,
        "meta": [
          {
            "type": "text",
            "name": "otherid"
          },
          {
            "type": "text",
            "name": "othername"
          },
          {
            "type": "text",
            "name": "otherdesc"
          },
          {
            "type": "number",
            "name": "othertype"
          }
        ],
        "outputType": "array"
      }
    ]
  }
}
JSON
);
?>