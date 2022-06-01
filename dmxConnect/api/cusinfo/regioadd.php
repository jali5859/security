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
        "fieldName": "business_email",
        "name": "business_email"
      },
      {
        "type": "text",
        "fieldName": "card_name",
        "name": "card_name"
      },
      {
        "type": "text",
        "fieldName": "card_number",
        "name": "card_number"
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
        "fieldName": "regioadd",
        "name": "regioadd"
      },
      {
        "type": "text",
        "fieldName": "cityadd",
        "name": "cityadd"
      },
      {
        "type": "text",
        "fieldName": "business_type",
        "name": "business_type"
      },
      {
        "type": "text",
        "fieldName": "select_new",
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
      },
      {
        "type": "text",
        "fieldName": "business_description",
        "name": "business_description"
      }
    ]
  },
  "exec": {
    "steps": {
      "name": "regioadd",
      "module": "dbconnector",
      "action": "select",
      "options": {
        "sql": {
          "type": "SELECT",
          "columns": [
            {
              "table": "regions",
              "column": "id"
            },
            {
              "table": "regions",
              "column": "name"
            }
          ],
          "table": {
            "name": "regions"
          },
          "joins": [],
          "query": "SELECT id, name\nFROM regions",
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