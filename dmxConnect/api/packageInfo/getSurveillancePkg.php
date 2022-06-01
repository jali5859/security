<?php
require('../../../dmxConnectLib/dmxConnect.php');


$app = new \lib\App();

$app->define(<<<'JSON'
{
  "meta": {
    "options": {
      "linkedFile": "/index.html",
      "linkedForm": "kt_create_account_form"
    },
    "$_GET": [
      {
        "type": "text",
        "name": "sort"
      },
      {
        "type": "text",
        "name": "dir"
      }
    ],
    "$_POST": [
      {
        "type": "text",
        "fieldName": "response_type",
        "name": "response_type"
      },
      {
        "type": "text",
        "fieldName": "fname",
        "name": "fname"
      },
      {
        "type": "text",
        "fieldName": "mname",
        "name": "mname"
      },
      {
        "type": "text",
        "fieldName": "lname",
        "name": "lname"
      },
      {
        "type": "text",
        "fieldName": "hphone",
        "name": "hphone"
      },
      {
        "type": "text",
        "fieldName": "mphone",
        "name": "mphone"
      },
      {
        "type": "text",
        "fieldName": "dob",
        "name": "dob"
      },
      {
        "type": "text",
        "fieldName": "email1",
        "name": "email1"
      },
      {
        "type": "text",
        "fieldName": "gender",
        "name": "gender"
      },
      {
        "type": "number",
        "fieldName": "idnum",
        "options": {
          "rules": {
            "core:number": {}
          }
        },
        "name": "idnum"
      },
      {
        "type": "text",
        "fieldName": "prime",
        "name": "prime"
      },
      {
        "type": "text",
        "fieldName": "priName",
        "name": "priName"
      },
      {
        "type": "text",
        "fieldName": "prinum",
        "name": "prinum"
      },
      {
        "type": "text",
        "fieldName": "radio_buttons_2",
        "name": "radio_buttons_2"
      },
      {
        "type": "text",
        "fieldName": "internet",
        "name": "internet"
      },
      {
        "type": "text",
        "fieldName": "addfull",
        "name": "addfull"
      },
      {
        "type": "file",
        "fieldName": "proofresi",
        "options": {
          "rules": {
            "upload:accept": {
              "param": ".jpg,.jpeg,.png,.pdf"
            }
          }
        },
        "name": "proofresi",
        "sub": [
          {
            "name": "name",
            "type": "text"
          },
          {
            "name": "type",
            "type": "text"
          },
          {
            "name": "size",
            "type": "number"
          },
          {
            "name": "error",
            "type": "text"
          }
        ],
        "outputType": "file"
      },
      {
        "type": "text",
        "fieldName": "billaddyn",
        "name": "billaddyn"
      },
      {
        "type": "text",
        "fieldName": "sureveyyn",
        "name": "sureveyyn"
      },
      {
        "type": "text",
        "fieldName": "billaddtype",
        "name": "billaddtype"
      },
      {
        "type": "text",
        "fieldName": "billadd",
        "name": "billadd"
      },
      {
        "type": "text",
        "fieldName": "card_cvv",
        "options": {
          "rules": {
            "core:maxlength": {
              "param": "4"
            },
            "core:minlength": {
              "param": "3"
            }
          }
        },
        "name": "card_cvv"
      },
      {
        "type": "text",
        "fieldName": "cusidtype",
        "name": "cusidtype"
      },
      {
        "type": "text",
        "fieldName": "region",
        "name": "region"
      },
      {
        "type": "text",
        "fieldName": "city",
        "name": "city"
      },
      {
        "type": "text",
        "fieldName": "billregion",
        "name": "billregion"
      },
      {
        "type": "text",
        "fieldName": "billcity",
        "name": "billcity"
      },
      {
        "type": "text",
        "fieldName": "select_new",
        "multiple": true,
        "name": "select_new"
      },
      {
        "type": "text",
        "fieldName": "card_expiry_month",
        "name": "card_expiry_month"
      },
      {
        "type": "text",
        "fieldName": "card_expiry_year",
        "name": "card_expiry_year"
      }
    ]
  },
  "exec": {
    "steps": {
      "name": "getsurvpkg",
      "module": "dbconnector",
      "action": "select",
      "options": {
        "sql": {
          "type": "SELECT",
          "columns": [
            {
              "table": "packages",
              "column": "id"
            },
            {
              "table": "packages",
              "column": "name"
            }
          ],
          "table": {
            "name": "packages"
          },
          "joins": [],
          "wheres": {
            "condition": "AND",
            "rules": [
              {
                "id": "packages.package_group_id",
                "field": "packages.package_group_id",
                "type": "double",
                "operator": "equal",
                "value": 3,
                "data": {
                  "table": "packages",
                  "column": "package_group_id",
                  "type": "number"
                },
                "operation": "="
              }
            ],
            "conditional": null,
            "valid": true
          },
          "query": "SELECT id, name\nFROM packages\nWHERE package_group_id = 3",
          "params": []
        },
        "connection": "bsecure"
      },
      "output": true,
      "meta": [
        {
          "type": "text",
          "name": "id"
        },
        {
          "type": "text",
          "name": "name"
        }
      ],
      "outputType": "array"
    }
  }
}
JSON
);
?>