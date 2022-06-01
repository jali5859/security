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
        "fieldName": "addtype",
        "name": "addtype"
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
        "fieldName": "addacc",
        "name": "addacc"
      },
      {
        "type": "number",
        "fieldName": "sensorid",
        "options": {
          "rules": {
            "core:number": {},
            "core:max": {
              "param": ""
            },
            "core:min": {
              "param": ""
            },
            "core:digits": {
              "param": ""
            }
          }
        },
        "name": "sensorid"
      },
      {
        "type": "number",
        "fieldName": "contactid",
        "multiple": true,
        "options": {
          "rules": {
            "core:number": {
              "param": ""
            },
            "core:max": {
              "param": ""
            },
            "core:min": {
              "param": ""
            }
          }
        },
        "name": "contactid"
      },
      {
        "type": "number",
        "fieldName": "cameraid",
        "options": {
          "rules": {
            "core:number": {
              "param": ""
            },
            "core:max": {
              "param": ""
            },
            "core:min": {
              "param": ""
            }
          }
        },
        "name": "cameraid"
      },
      {
        "type": "text",
        "fieldName": "consentone",
        "name": "consentone"
      },
      {
        "type": "text",
        "fieldName": "consenttwo",
        "name": "consenttwo"
      },
      {
        "type": "text",
        "fieldName": "cusidtype",
        "name": "cusidtype"
      },
      {
        "type": "text",
        "fieldName": "primethod",
        "multiple": true,
        "name": "primethod"
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
        "fieldName": "addSurv",
        "name": "addSurv"
      }
    ]
  },
  "exec": {
    "steps": {
      "name": "contact",
      "module": "dbconnector",
      "action": "select",
      "options": {
        "connection": "bsecure",
        "sql": {
          "type": "SELECT",
          "columns": [
            {
              "table": "customer_contact_detail_types",
              "column": "id"
            },
            {
              "table": "customer_contact_detail_types",
              "column": "name"
            }
          ],
          "table": {
            "name": "customer_contact_detail_types"
          },
          "joins": [],
          "query": "SELECT id, name\nFROM customer_contact_detail_types",
          "params": []
        }
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
      "outputType": "array",
      "type": "dbconnector_select"
    }
  }
}
JSON
);
?>