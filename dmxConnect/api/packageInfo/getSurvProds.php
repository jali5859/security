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
        "name": "surveychoice"
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
            "type": "text",
            "name": "name"
          },
          {
            "type": "text",
            "name": "type"
          },
          {
            "type": "number",
            "name": "size"
          },
          {
            "type": "text",
            "name": "error"
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
        "fieldName": "card_name",
        "name": "card_name"
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
      "name": "getSurvProducts",
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
              "table": "package_product_items",
              "column": "quantity"
            },
            {
              "table": "i_m_s_local_products",
              "column": "name"
            }
          ],
          "table": {
            "name": "package_product_items"
          },
          "joins": [
            {
              "table": "packages",
              "column": "*",
              "type": "LEFT",
              "clauses": {
                "condition": "AND",
                "rules": [
                  {
                    "table": "packages",
                    "column": "id",
                    "operator": "equal",
                    "value": {
                      "table": "package_product_items",
                      "column": "package_id"
                    },
                    "operation": "="
                  }
                ]
              }
            },
            {
              "table": "i_m_s_local_products",
              "column": "*",
              "type": "LEFT",
              "clauses": {
                "condition": "AND",
                "rules": [
                  {
                    "table": "i_m_s_local_products",
                    "column": "ims_product_id",
                    "operator": "equal",
                    "value": {
                      "table": "package_product_items",
                      "column": "i_m_s_local_product_id"
                    },
                    "operation": "="
                  }
                ]
              }
            }
          ],
          "query": "SELECT packages.name, package_product_items.quantity, i_m_s_local_products.name\nFROM package_product_items\nLEFT JOIN packages ON (packages.id = package_product_items.package_id) LEFT JOIN i_m_s_local_products ON (i_m_s_local_products.ims_product_id = package_product_items.i_m_s_local_product_id)\nWHERE packages.id = :P1 /* {{$_GET.surveychoice}} */",
          "params": [
            {
              "operator": "equal",
              "type": "expression",
              "name": ":P1",
              "value": "{{$_GET.surveychoice}}"
            }
          ],
          "wheres": {
            "condition": "AND",
            "rules": [
              {
                "id": "packages.id",
                "field": "packages.id",
                "type": "string",
                "operator": "equal",
                "value": "{{$_GET.surveychoice}}",
                "data": {
                  "table": "packages",
                  "column": "id",
                  "type": "text"
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
          "name": "quantity"
        }
      ],
      "outputType": "array"
    }
  }
}
JSON
);
?>