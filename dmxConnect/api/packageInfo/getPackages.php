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
      },
      {
        "type": "text",
        "name": "radioinput"
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
        "fieldName": "account_team_size",
        "name": "account_team_size"
      },
      {
        "type": "text",
        "fieldName": "account_name",
        "name": "account_name"
      },
      {
        "type": "text",
        "fieldName": "account_plan",
        "name": "account_plan"
      },
      {
        "type": "text",
        "fieldName": "business_name",
        "name": "business_name"
      },
      {
        "type": "text",
        "fieldName": "business_descriptor",
        "name": "business_descriptor"
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
        "fieldName": "business_type",
        "name": "business_type"
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
      },
      {
        "type": "text",
        "fieldName": "packageSelect",
        "name": "packageSelect"
      }
    ]
  },
  "exec": {
    "steps": {
      "name": "packages",
      "module": "dbconnector",
      "action": "select",
      "options": {
        "sql": {
          "type": "SELECT",
          "columns": [
            {
              "table": "packages",
              "column": "name"
            },
            {
              "table": "packages",
              "column": "package_price"
            },
            {
              "table": "packages",
              "column": "id"
            }
          ],
          "table": {
            "name": "packages"
          },
          "joins": [],
          "query": "SELECT name, package_price, id\nFROM packages\nWHERE package_group_id = :P1 /* {{$_GET.radioinput}} */",
          "params": [
            {
              "operator": "equal",
              "type": "expression",
              "name": ":P1",
              "value": "{{$_GET.radioinput}}"
            }
          ],
          "orders": [],
          "wheres": {
            "condition": "AND",
            "rules": [
              {
                "id": "packages.package_group_id",
                "field": "packages.package_group_id",
                "type": "double",
                "operator": "equal",
                "value": "{{$_GET.radioinput}}",
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
          }
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
          "type": "number",
          "name": "package_price"
        },
        {
          "type": "text",
          "name": "id"
        }
      ],
      "outputType": "array",
      "type": "dbconnector_select"
    }
  }
}
JSON
);
?>