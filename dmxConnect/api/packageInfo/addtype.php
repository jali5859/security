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
            },
            "upload:maxsize": {
              "param": "5242880"
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
      },
      {
        "type": "text",
        "fieldName": "addtype",
        "name": "addtype"
      },
      {
        "type": "text",
        "fieldName": "search",
        "name": "search"
      },
      {
        "type": "number",
        "name": "preferred_contact_method_id"
      },
      {
        "type": "datetime",
        "name": "deleted_at"
      },
      {
        "type": "datetime",
        "name": "created_at"
      },
      {
        "type": "datetime",
        "name": "updated_at"
      },
      {
        "type": "number",
        "name": "customer_id"
      },
      {
        "type": "number",
        "name": "country_id"
      },
      {
        "type": "number",
        "name": "created_by_user_id"
      },
      {
        "type": "number",
        "name": "deleted_by_user_id"
      },
      {
        "type": "number",
        "name": "product_id"
      },
      {
        "type": "number",
        "name": "service_address_id"
      },
      {
        "type": "number",
        "name": "billing_address_id"
      },
      {
        "type": "number",
        "name": "package_id"
      },
      {
        "type": "text",
        "fieldName": "isp",
        "multiple": true,
        "name": "isp"
      },
      {
        "type": "text",
        "fieldName": "pckg_select",
        "name": "pckg_select"
      },
      {
        "type": "number",
        "fieldName": "otherid",
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
        "name": "otherid"
      },
      {
        "type": "number",
        "fieldName": "addsensor[]",
        "multiple": true,
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
        "name": "addsensor"
      },
      {
        "type": "text",
        "fieldName": "sensortype[]",
        "multiple": true,
        "name": "sensortype"
      },
      {
        "type": "array",
        "name": "record",
        "sub": [
          {
            "type": "number",
            "name": "$_POST"
          },
          {
            "type": "number",
            "name": "$value"
          },
          {
            "type": "datetime",
            "name": "NOW"
          },
          {
            "type": "number",
            "name": "insReq"
          },
          {
            "type": "number",
            "name": "$index"
          }
        ]
      },
      {
        "type": "text",
        "fieldName": "contacttype[]",
        "multiple": true,
        "name": "contacttype"
      },
      {
        "type": "text",
        "fieldName": "cameratype[]",
        "multiple": true,
        "name": "cameratype"
      },
      {
        "type": "text",
        "fieldName": "othertype[]",
        "multiple": true,
        "name": "othertype"
      },
      {
        "type": "number",
        "fieldName": "addcontact[]",
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
        "name": "addcontact"
      },
      {
        "type": "number",
        "fieldName": "addcamera[]",
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
        "name": "addcamera"
      },
      {
        "type": "number",
        "fieldName": "addother[]",
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
        "name": "addother"
      },
      {
        "type": "file",
        "fieldName": "idfront",
        "options": {
          "rules": {
            "upload:accept": {
              "param": ".jpg,.jpeg,.png,.pdf"
            },
            "upload:maxsize": {
              "param": "5242880"
            }
          }
        },
        "name": "idfront",
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
        "type": "file",
        "fieldName": "idback",
        "options": {
          "rules": {
            "upload:accept": {
              "param": ".jpg,.jpeg,.png,.pdf"
            },
            "upload:maxsize": {
              "param": "5242880"
            }
          }
        },
        "name": "idback",
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
        "type": "file",
        "fieldName": "idfull",
        "options": {
          "rules": {
            "upload:accept": {
              "param": ".jpg,.jpeg,.png,.pdf"
            },
            "upload:maxsize": {
              "param": "5242880"
            }
          }
        },
        "name": "idfull",
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
        "fieldName": "cusaddtype",
        "name": "cusaddtype"
      }
    ]
  },
  "exec": {
    "steps": [
      {
        "name": "insAddress",
        "module": "dbupdater",
        "action": "insert",
        "options": {
          "connection": "bsecure",
          "sql": {
            "type": "insert",
            "values": [
              {
                "table": "addresses",
                "column": "address_type_id",
                "type": "number",
                "value": "{{$_POST.addtype}}"
              },
              {
                "table": "addresses",
                "column": "street_1",
                "type": "text",
                "value": "{{$_POST.addfull}}"
              },
              {
                "table": "addresses",
                "column": "city_id",
                "type": "number",
                "value": "{{$_POST.city}}"
              },
              {
                "table": "addresses",
                "column": "created_by_user_id",
                "type": "number",
                "value": "2"
              },
              {
                "table": "addresses",
                "column": "created_at",
                "type": "datetime",
                "value": "{{NOW}}"
              },
              {
                "table": "addresses",
                "column": "updated_at",
                "type": "datetime",
                "value": "{{NOW}}"
              }
            ],
            "table": "addresses",
            "returning": "id",
            "query": "INSERT INTO addresses\n(address_type_id, street_1, city_id, created_by_user_id, created_at, updated_at) VALUES (:P1 /* {{$_POST.addtype}} */, :P2 /* {{$_POST.addfull}} */, :P3 /* {{$_POST.city}} */, '2', :P4 /* {{NOW}} */, :P5 /* {{NOW}} */)",
            "params": [
              {
                "name": ":P1",
                "type": "expression",
                "value": "{{$_POST.addtype}}"
              },
              {
                "name": ":P2",
                "type": "expression",
                "value": "{{$_POST.addfull}}"
              },
              {
                "name": ":P3",
                "type": "expression",
                "value": "{{$_POST.city}}"
              },
              {
                "name": ":P4",
                "type": "expression",
                "value": "{{NOW}}"
              },
              {
                "name": ":P5",
                "type": "expression",
                "value": "{{NOW}}"
              }
            ]
          }
        },
        "meta": [
          {
            "name": "identity",
            "type": "text"
          },
          {
            "name": "affected",
            "type": "number"
          }
        ]
      },
      {
        "name": "insCus",
        "module": "dbupdater",
        "action": "insert",
        "options": {
          "connection": "bsecure",
          "sql": {
            "type": "insert",
            "values": [
              {
                "table": "customers",
                "column": "first_name",
                "type": "text",
                "value": "{{$_POST.fname}}"
              },
              {
                "table": "customers",
                "column": "last_name",
                "type": "text",
                "value": "{{$_POST.lname}}"
              },
              {
                "table": "customers",
                "column": "middle_name",
                "type": "text",
                "value": "{{$_POST.mname}}"
              },
              {
                "table": "customers",
                "column": "date_of_birth",
                "type": "date",
                "value": "{{$_POST.dob}}"
              },
              {
                "table": "customers",
                "column": "gender",
                "type": "number",
                "value": "{{$_POST.gender}}"
              },
              {
                "table": "customers",
                "column": "created_by_user_id",
                "type": "number",
                "value": "2"
              },
              {
                "table": "customers",
                "column": "created_at",
                "type": "datetime",
                "value": "{{NOW}}"
              },
              {
                "table": "customers",
                "column": "updated_at",
                "type": "datetime",
                "value": "{{NOW}}"
              },
              {
                "table": "customers",
                "column": "address_id",
                "type": "number",
                "value": "{{insAddress.identity}}"
              }
            ],
            "table": "customers",
            "returning": "id",
            "query": "INSERT INTO customers\n(first_name, last_name, middle_name, date_of_birth, gender, created_by_user_id, created_at, updated_at, address_id) VALUES (:P1 /* {{$_POST.fname}} */, :P2 /* {{$_POST.lname}} */, :P3 /* {{$_POST.mname}} */, :P4 /* {{$_POST.dob}} */, :P5 /* {{$_POST.gender}} */, '2', :P6 /* {{NOW}} */, :P7 /* {{NOW}} */, :P8 /* {{insAddress.identity}} */)",
            "params": [
              {
                "name": ":P1",
                "type": "expression",
                "value": "{{$_POST.fname}}"
              },
              {
                "name": ":P2",
                "type": "expression",
                "value": "{{$_POST.lname}}"
              },
              {
                "name": ":P3",
                "type": "expression",
                "value": "{{$_POST.mname}}"
              },
              {
                "name": ":P4",
                "type": "expression",
                "value": "{{$_POST.dob}}"
              },
              {
                "name": ":P5",
                "type": "expression",
                "value": "{{$_POST.gender}}"
              },
              {
                "name": ":P6",
                "type": "expression",
                "value": "{{NOW}}"
              },
              {
                "name": ":P7",
                "type": "expression",
                "value": "{{NOW}}"
              },
              {
                "name": ":P8",
                "type": "expression",
                "value": "{{insAddress.identity}}"
              }
            ]
          }
        },
        "meta": [
          {
            "name": "identity",
            "type": "text"
          },
          {
            "name": "affected",
            "type": "number"
          }
        ]
      },
      {
        "name": "insContact",
        "module": "dbupdater",
        "action": "insert",
        "options": {
          "connection": "bsecure",
          "sql": {
            "type": "insert",
            "values": [
              {
                "table": "customer_contact_details",
                "column": "customer_id",
                "type": "number",
                "value": "{{insCus.identity}}"
              },
              {
                "table": "customer_contact_details",
                "column": "email",
                "type": "text",
                "value": "{{$_POST.email1}}"
              },
              {
                "table": "customer_contact_details",
                "column": "mobile",
                "type": "text",
                "value": "{{$_POST.mphone}}"
              },
              {
                "table": "customer_contact_details",
                "column": "home",
                "type": "text",
                "value": "{{$_POST.hphone}}"
              },
              {
                "table": "customer_contact_details",
                "column": "preferred_contact_method_id",
                "type": "number",
                "value": "{{$_POST.primethod}}"
              },
              {
                "table": "customer_contact_details",
                "column": "created_at",
                "type": "datetime",
                "value": "{{NOW}}"
              },
              {
                "table": "customer_contact_details",
                "column": "updated_at",
                "type": "datetime",
                "value": "{{NOW}}"
              }
            ],
            "table": "customer_contact_details",
            "returning": "id",
            "query": "INSERT INTO customer_contact_details\n(customer_id, email, mobile, home, preferred_contact_method_id, created_at, updated_at) VALUES (:P1 /* {{insCus.identity}} */, :P2 /* {{$_POST.email1}} */, :P3 /* {{$_POST.mphone}} */, :P4 /* {{$_POST.hphone}} */, :P5 /* {{$_POST.primethod}} */, :P6 /* {{NOW}} */, :P7 /* {{NOW}} */)",
            "params": [
              {
                "name": ":P1",
                "type": "expression",
                "value": "{{insCus.identity}}"
              },
              {
                "name": ":P2",
                "type": "expression",
                "value": "{{$_POST.email1}}"
              },
              {
                "name": ":P3",
                "type": "expression",
                "value": "{{$_POST.mphone}}"
              },
              {
                "name": ":P4",
                "type": "expression",
                "value": "{{$_POST.hphone}}"
              },
              {
                "name": ":P5",
                "type": "expression",
                "value": "{{$_POST.primethod}}"
              },
              {
                "name": ":P6",
                "type": "expression",
                "value": "{{NOW}}"
              },
              {
                "name": ":P7",
                "type": "expression",
                "value": "{{NOW}}"
              }
            ]
          }
        },
        "meta": [
          {
            "name": "identity",
            "type": "text"
          },
          {
            "name": "affected",
            "type": "number"
          }
        ]
      },
      {
        "name": "insid",
        "module": "dbupdater",
        "action": "insert",
        "options": {
          "connection": "bsecure",
          "sql": {
            "type": "insert",
            "values": [
              {
                "table": "customer_identifications",
                "column": "customer_id",
                "type": "number",
                "value": "{{insCus.identity}}"
              },
              {
                "table": "customer_identifications",
                "column": "identification_type_id",
                "type": "number",
                "value": "{{$_POST.cusidtype}}"
              },
              {
                "table": "customer_identifications",
                "column": "id_number",
                "type": "text",
                "value": "{{$_POST.idnum}}"
              },
              {
                "table": "customer_identifications",
                "column": "country_id",
                "type": "number",
                "value": "1"
              },
              {
                "table": "customer_identifications",
                "column": "created_by_user_id",
                "type": "number",
                "value": "2"
              },
              {
                "table": "customer_identifications",
                "column": "created_at",
                "type": "datetime",
                "value": "{{NOW}}"
              },
              {
                "table": "customer_identifications",
                "column": "updated_at",
                "type": "datetime",
                "value": "{{NOW}}"
              },
              {
                "table": "customer_identifications",
                "column": "issue_date",
                "type": "date",
                "value": ""
              },
              {
                "table": "customer_identifications",
                "column": "expiry_date",
                "type": "date",
                "value": ""
              }
            ],
            "table": "customer_identifications",
            "returning": "id",
            "query": "INSERT INTO customer_identifications\n(customer_id, identification_type_id, id_number, country_id, created_by_user_id, created_at, updated_at, issue_date, expiry_date) VALUES (:P1 /* {{insCus.identity}} */, :P2 /* {{$_POST.cusidtype}} */, :P3 /* {{$_POST.idnum}} */, '1', '2', :P4 /* {{NOW}} */, :P5 /* {{NOW}} */, '', '')",
            "params": [
              {
                "name": ":P1",
                "type": "expression",
                "value": "{{insCus.identity}}"
              },
              {
                "name": ":P2",
                "type": "expression",
                "value": "{{$_POST.cusidtype}}"
              },
              {
                "name": ":P3",
                "type": "expression",
                "value": "{{$_POST.idnum}}"
              },
              {
                "name": ":P4",
                "type": "expression",
                "value": "{{NOW}}"
              },
              {
                "name": ":P5",
                "type": "expression",
                "value": "{{NOW}}"
              }
            ]
          }
        },
        "meta": [
          {
            "name": "identity",
            "type": "text"
          },
          {
            "name": "affected",
            "type": "number"
          }
        ]
      },
      {
        "name": "insReq",
        "module": "dbupdater",
        "action": "insert",
        "options": {
          "connection": "bsecure",
          "sql": {
            "type": "insert",
            "values": [
              {
                "table": "service_requests",
                "column": "customer_id",
                "type": "number",
                "value": "{{insCus.identity}}"
              },
              {
                "table": "service_requests",
                "column": "product_id",
                "type": "number",
                "value": "1"
              },
              {
                "table": "service_requests",
                "column": "service_address_id",
                "type": "number",
                "value": "{{insAddress.identity}}"
              },
              {
                "table": "service_requests",
                "column": "billing_address_id",
                "type": "number",
                "value": "{{insAddress.identity}}"
              },
              {
                "table": "service_requests",
                "column": "created_by_user_id",
                "type": "number",
                "value": "2"
              },
              {
                "table": "service_requests",
                "column": "created_at",
                "type": "datetime",
                "value": "{{NOW}}"
              },
              {
                "table": "service_requests",
                "column": "updated_at",
                "type": "datetime",
                "value": "{{NOW}}"
              }
            ],
            "table": "service_requests",
            "returning": "id",
            "query": "INSERT INTO service_requests\n(customer_id, product_id, service_address_id, billing_address_id, created_by_user_id, created_at, updated_at) VALUES (:P1 /* {{insCus.identity}} */, '1', :P2 /* {{insAddress.identity}} */, :P3 /* {{insAddress.identity}} */, '2', :P4 /* {{NOW}} */, :P5 /* {{NOW}} */)",
            "params": [
              {
                "name": ":P1",
                "type": "expression",
                "value": "{{insCus.identity}}"
              },
              {
                "name": ":P2",
                "type": "expression",
                "value": "{{insAddress.identity}}"
              },
              {
                "name": ":P3",
                "type": "expression",
                "value": "{{insAddress.identity}}"
              },
              {
                "name": ":P4",
                "type": "expression",
                "value": "{{NOW}}"
              },
              {
                "name": ":P5",
                "type": "expression",
                "value": "{{NOW}}"
              }
            ]
          }
        },
        "meta": [
          {
            "name": "identity",
            "type": "text"
          },
          {
            "name": "affected",
            "type": "number"
          }
        ]
      },
      {
        "name": "insReqPckgs",
        "module": "dbupdater",
        "action": "insert",
        "options": {
          "connection": "bsecure",
          "sql": {
            "type": "insert",
            "values": [
              {
                "table": "service_request_packages",
                "column": "service_request_id",
                "type": "number",
                "value": "{{insReq.identity}}"
              },
              {
                "table": "service_request_packages",
                "column": "package_id",
                "type": "number",
                "value": "{{$_POST.pckg_select}}"
              },
              {
                "table": "service_request_packages",
                "column": "created_by_user_id",
                "type": "number",
                "value": "2"
              },
              {
                "table": "service_request_packages",
                "column": "created_at",
                "type": "datetime",
                "value": "{{$_POST.created_at}}"
              },
              {
                "table": "service_request_packages",
                "column": "updated_at",
                "type": "datetime",
                "value": "{{$_POST.updated_at}}"
              }
            ],
            "table": "service_request_packages",
            "returning": "id",
            "query": "INSERT INTO service_request_packages\n(service_request_id, package_id, created_by_user_id, created_at, updated_at) VALUES (:P1 /* {{insReq.identity}} */, :P2 /* {{$_POST.pckg_select}} */, '2', :P3 /* {{$_POST.created_at}} */, :P4 /* {{$_POST.updated_at}} */)",
            "params": [
              {
                "name": ":P1",
                "type": "expression",
                "value": "{{insReq.identity}}"
              },
              {
                "name": ":P2",
                "type": "expression",
                "value": "{{$_POST.pckg_select}}"
              },
              {
                "name": ":P3",
                "type": "expression",
                "value": "{{$_POST.created_at}}"
              },
              {
                "name": ":P4",
                "type": "expression",
                "value": "{{$_POST.updated_at}}"
              }
            ]
          }
        },
        "meta": [
          {
            "name": "identity",
            "type": "text"
          },
          {
            "name": "affected",
            "type": "number"
          }
        ]
      },
      {
        "name": "sensor",
        "module": "core",
        "action": "repeat",
        "options": {
          "repeat": "{{$_POST.addsensor}}",
          "outputFields": [],
          "exec": {
            "steps": {
              "name": "insAddSensor",
              "module": "dbupdater",
              "action": "insert",
              "options": {
                "connection": "bsecure",
                "sql": {
                  "type": "insert",
                  "values": [
                    {
                      "table": "service_req_acc",
                      "column": "i_m_s_local_product_id",
                      "type": "number",
                      "value": "{{$_POST.sensortype[$index]}}"
                    },
                    {
                      "table": "service_req_acc",
                      "column": "quantity",
                      "type": "number",
                      "value": "{{$value}}"
                    },
                    {
                      "table": "service_req_acc",
                      "column": "created_at",
                      "type": "datetime",
                      "value": "{{NOW}}"
                    },
                    {
                      "table": "service_req_acc",
                      "column": "updated_at",
                      "type": "datetime",
                      "value": "{{NOW}}"
                    },
                    {
                      "table": "service_req_acc",
                      "column": "service_req_id",
                      "type": "number",
                      "value": "{{insReq.identity}}"
                    }
                  ],
                  "table": "service_req_acc",
                  "returning": "id",
                  "query": "INSERT INTO service_req_acc\n(i_m_s_local_product_id, quantity, created_at, updated_at, service_req_id) VALUES (:P1 /* {{$_POST.sensortype[$index]}} */, :P2 /* {{$value}} */, :P3 /* {{NOW}} */, :P4 /* {{NOW}} */, :P5 /* {{insReq.identity}} */)",
                  "params": [
                    {
                      "name": ":P1",
                      "type": "expression",
                      "value": "{{$_POST.sensortype[$index]}}"
                    },
                    {
                      "name": ":P2",
                      "type": "expression",
                      "value": "{{$value}}"
                    },
                    {
                      "name": ":P3",
                      "type": "expression",
                      "value": "{{NOW}}"
                    },
                    {
                      "name": ":P4",
                      "type": "expression",
                      "value": "{{NOW}}"
                    },
                    {
                      "name": ":P5",
                      "type": "expression",
                      "value": "{{insReq.identity}}"
                    }
                  ]
                }
              },
              "meta": [
                {
                  "name": "identity",
                  "type": "text"
                },
                {
                  "name": "affected",
                  "type": "number"
                }
              ]
            }
          }
        },
        "output": true,
        "meta": [
          {
            "name": "$index",
            "type": "number"
          },
          {
            "name": "$number",
            "type": "number"
          },
          {
            "name": "$name",
            "type": "text"
          },
          {
            "name": "$value",
            "type": "object"
          }
        ],
        "outputType": "array"
      },
      {
        "name": "camera",
        "module": "core",
        "action": "repeat",
        "options": {
          "repeat": "{{$_POST.addcamera}}",
          "outputFields": [],
          "exec": {
            "steps": {
              "name": "insAddCamera",
              "module": "dbupdater",
              "action": "insert",
              "options": {
                "connection": "bsecure",
                "sql": {
                  "type": "insert",
                  "values": [
                    {
                      "table": "service_req_acc",
                      "column": "i_m_s_local_product_id",
                      "type": "number",
                      "value": "{{$_POST.cameratype[$index]}}"
                    },
                    {
                      "table": "service_req_acc",
                      "column": "quantity",
                      "type": "number",
                      "value": "{{$value}}"
                    },
                    {
                      "table": "service_req_acc",
                      "column": "created_at",
                      "type": "datetime",
                      "value": "{{NOW}}"
                    },
                    {
                      "table": "service_req_acc",
                      "column": "updated_at",
                      "type": "datetime",
                      "value": "{{NOW}}"
                    },
                    {
                      "table": "service_req_acc",
                      "column": "service_req_id",
                      "type": "number",
                      "value": "{{insReq.identity}}"
                    }
                  ],
                  "table": "service_req_acc",
                  "returning": "id",
                  "query": "INSERT INTO service_req_acc\n(i_m_s_local_product_id, quantity, created_at, updated_at, service_req_id) VALUES (:P1 /* {{$_POST.cameratype[$index]}} */, :P2 /* {{$value}} */, :P3 /* {{NOW}} */, :P4 /* {{NOW}} */, :P5 /* {{insReq.identity}} */)",
                  "params": [
                    {
                      "name": ":P1",
                      "type": "expression",
                      "value": "{{$_POST.cameratype[$index]}}"
                    },
                    {
                      "name": ":P2",
                      "type": "expression",
                      "value": "{{$value}}"
                    },
                    {
                      "name": ":P3",
                      "type": "expression",
                      "value": "{{NOW}}"
                    },
                    {
                      "name": ":P4",
                      "type": "expression",
                      "value": "{{NOW}}"
                    },
                    {
                      "name": ":P5",
                      "type": "expression",
                      "value": "{{insReq.identity}}"
                    }
                  ]
                }
              },
              "meta": [
                {
                  "name": "identity",
                  "type": "text"
                },
                {
                  "name": "affected",
                  "type": "number"
                }
              ]
            }
          }
        },
        "output": true,
        "meta": [
          {
            "name": "$index",
            "type": "number"
          },
          {
            "name": "$number",
            "type": "number"
          },
          {
            "name": "$name",
            "type": "text"
          },
          {
            "name": "$value",
            "type": "object"
          }
        ],
        "outputType": "array"
      },
      {
        "name": "contact",
        "module": "core",
        "action": "repeat",
        "options": {
          "repeat": "{{$_POST.addcontact}}",
          "outputFields": [],
          "exec": {
            "steps": {
              "name": "insAddContact",
              "module": "dbupdater",
              "action": "insert",
              "options": {
                "connection": "bsecure",
                "sql": {
                  "type": "insert",
                  "values": [
                    {
                      "table": "service_req_acc",
                      "column": "i_m_s_local_product_id",
                      "type": "number",
                      "value": "{{$_POST.contacttype[$index]}}"
                    },
                    {
                      "table": "service_req_acc",
                      "column": "quantity",
                      "type": "number",
                      "value": "{{$value}}"
                    },
                    {
                      "table": "service_req_acc",
                      "column": "created_at",
                      "type": "datetime",
                      "value": "{{NOW}}"
                    },
                    {
                      "table": "service_req_acc",
                      "column": "updated_at",
                      "type": "datetime",
                      "value": "{{NOW}}"
                    },
                    {
                      "table": "service_req_acc",
                      "column": "service_req_id",
                      "type": "number",
                      "value": "{{insReq.identity}}"
                    }
                  ],
                  "table": "service_req_acc",
                  "returning": "id",
                  "query": "INSERT INTO service_req_acc\n(i_m_s_local_product_id, quantity, created_at, updated_at, service_req_id) VALUES (:P1 /* {{$_POST.contacttype[$index]}} */, :P2 /* {{$value}} */, :P3 /* {{NOW}} */, :P4 /* {{NOW}} */, :P5 /* {{insReq.identity}} */)",
                  "params": [
                    {
                      "name": ":P1",
                      "type": "expression",
                      "value": "{{$_POST.contacttype[$index]}}"
                    },
                    {
                      "name": ":P2",
                      "type": "expression",
                      "value": "{{$value}}"
                    },
                    {
                      "name": ":P3",
                      "type": "expression",
                      "value": "{{NOW}}"
                    },
                    {
                      "name": ":P4",
                      "type": "expression",
                      "value": "{{NOW}}"
                    },
                    {
                      "name": ":P5",
                      "type": "expression",
                      "value": "{{insReq.identity}}"
                    }
                  ]
                }
              },
              "meta": [
                {
                  "name": "identity",
                  "type": "text"
                },
                {
                  "name": "affected",
                  "type": "number"
                }
              ]
            }
          }
        },
        "output": true,
        "meta": [
          {
            "name": "$index",
            "type": "number"
          },
          {
            "name": "$number",
            "type": "number"
          },
          {
            "name": "$name",
            "type": "text"
          },
          {
            "name": "$value",
            "type": "object"
          }
        ],
        "outputType": "array"
      },
      {
        "name": "other",
        "module": "core",
        "action": "repeat",
        "options": {
          "repeat": "{{$_POST.addother}}",
          "outputFields": [],
          "exec": {
            "steps": {
              "name": "insAddOther",
              "module": "dbupdater",
              "action": "insert",
              "options": {
                "connection": "bsecure",
                "sql": {
                  "type": "insert",
                  "values": [
                    {
                      "table": "service_req_acc",
                      "column": "i_m_s_local_product_id",
                      "type": "number",
                      "value": "{{$_POST.othertype[$index]}}"
                    },
                    {
                      "table": "service_req_acc",
                      "column": "quantity",
                      "type": "number",
                      "value": "{{$value}}"
                    },
                    {
                      "table": "service_req_acc",
                      "column": "created_at",
                      "type": "datetime",
                      "value": "{{NOW}}"
                    },
                    {
                      "table": "service_req_acc",
                      "column": "updated_at",
                      "type": "datetime",
                      "value": "{{NOW}}"
                    },
                    {
                      "table": "service_req_acc",
                      "column": "service_req_id",
                      "type": "number",
                      "value": "{{insReq.identity}}"
                    }
                  ],
                  "table": "service_req_acc",
                  "returning": "id",
                  "query": "INSERT INTO service_req_acc\n(i_m_s_local_product_id, quantity, created_at, updated_at, service_req_id) VALUES (:P1 /* {{$_POST.othertype[$index]}} */, :P2 /* {{$value}} */, :P3 /* {{NOW}} */, :P4 /* {{NOW}} */, :P5 /* {{insReq.identity}} */)",
                  "params": [
                    {
                      "name": ":P1",
                      "type": "expression",
                      "value": "{{$_POST.othertype[$index]}}"
                    },
                    {
                      "name": ":P2",
                      "type": "expression",
                      "value": "{{$value}}"
                    },
                    {
                      "name": ":P3",
                      "type": "expression",
                      "value": "{{NOW}}"
                    },
                    {
                      "name": ":P4",
                      "type": "expression",
                      "value": "{{NOW}}"
                    },
                    {
                      "name": ":P5",
                      "type": "expression",
                      "value": "{{insReq.identity}}"
                    }
                  ]
                }
              },
              "meta": [
                {
                  "name": "identity",
                  "type": "text"
                },
                {
                  "name": "affected",
                  "type": "number"
                }
              ]
            }
          }
        },
        "output": true,
        "meta": [
          {
            "name": "$index",
            "type": "number"
          },
          {
            "name": "$number",
            "type": "number"
          },
          {
            "name": "$name",
            "type": "text"
          },
          {
            "name": "$value",
            "type": "object"
          }
        ],
        "outputType": "array"
      },
      {
        "name": "idfront",
        "module": "upload",
        "action": "upload",
        "options": {
          "path": "/assets/uploads",
          "fields": "{{$_POST.idfront}}",
          "template": "{guid}{_n}{ext}"
        },
        "meta": [
          {
            "name": "name",
            "type": "text"
          },
          {
            "name": "path",
            "type": "text"
          },
          {
            "name": "url",
            "type": "text"
          },
          {
            "name": "type",
            "type": "text"
          },
          {
            "name": "size",
            "type": "text"
          },
          {
            "name": "error",
            "type": "number"
          }
        ],
        "outputType": "file"
      },
      {
        "name": "idback",
        "module": "upload",
        "action": "upload",
        "options": {
          "path": "/assets/uploads",
          "fields": "{{$_POST.idback}}",
          "template": "{guid}{_n}{ext}"
        },
        "meta": [
          {
            "name": "name",
            "type": "text"
          },
          {
            "name": "path",
            "type": "text"
          },
          {
            "name": "url",
            "type": "text"
          },
          {
            "name": "type",
            "type": "text"
          },
          {
            "name": "size",
            "type": "text"
          },
          {
            "name": "error",
            "type": "number"
          }
        ],
        "outputType": "file"
      },
      {
        "name": "idfull",
        "module": "upload",
        "action": "upload",
        "options": {
          "path": "/assets/uploads",
          "fields": "{{$_POST.idfull}}",
          "template": "{guid}{_n}{ext}"
        },
        "meta": [
          {
            "name": "name",
            "type": "text"
          },
          {
            "name": "path",
            "type": "text"
          },
          {
            "name": "url",
            "type": "text"
          },
          {
            "name": "type",
            "type": "text"
          },
          {
            "name": "size",
            "type": "text"
          },
          {
            "name": "error",
            "type": "number"
          }
        ],
        "outputType": "file"
      },
      {
        "name": "proofresi",
        "module": "upload",
        "action": "upload",
        "options": {
          "fields": "{{$_POST.proofresi}}",
          "path": "/assets/uploads/proof",
          "template": "{guid}{_n}{ext}"
        },
        "meta": [
          {
            "name": "name",
            "type": "text"
          },
          {
            "name": "path",
            "type": "text"
          },
          {
            "name": "url",
            "type": "text"
          },
          {
            "name": "type",
            "type": "text"
          },
          {
            "name": "size",
            "type": "text"
          },
          {
            "name": "error",
            "type": "number"
          }
        ],
        "outputType": "file"
      },
      {
        "name": "insFrontFile",
        "module": "dbupdater",
        "action": "insert",
        "options": {
          "connection": "bsecure",
          "sql": {
            "type": "insert",
            "values": [
              {
                "table": "customer_identification_files",
                "column": "customer_identification_id",
                "type": "number",
                "value": "{{insid.identity}}"
              },
              {
                "table": "customer_identification_files",
                "column": "path",
                "type": "text",
                "value": "{{idfront.path}}"
              },
              {
                "table": "customer_identification_files",
                "column": "size",
                "type": "number",
                "value": "{{idback.size}}"
              },
              {
                "table": "customer_identification_files",
                "column": "created_by_user_id",
                "type": "number",
                "value": "2"
              },
              {
                "table": "customer_identification_files",
                "column": "created_at",
                "type": "datetime",
                "value": "{{NOW}}"
              },
              {
                "table": "customer_identification_files",
                "column": "updated_at",
                "type": "datetime",
                "value": "{{NOW}}"
              }
            ],
            "table": "customer_identification_files",
            "returning": "id",
            "query": "INSERT INTO customer_identification_files\n(customer_identification_id, path, size, created_by_user_id, created_at, updated_at) VALUES (:P1 /* {{insid.identity}} */, :P2 /* {{idfront.path}} */, :P3 /* {{idback.size}} */, '2', :P4 /* {{NOW}} */, :P5 /* {{NOW}} */)",
            "params": [
              {
                "name": ":P1",
                "type": "expression",
                "value": "{{insid.identity}}"
              },
              {
                "name": ":P2",
                "type": "expression",
                "value": "{{idfront.path}}"
              },
              {
                "name": ":P3",
                "type": "expression",
                "value": "{{idback.size}}"
              },
              {
                "name": ":P4",
                "type": "expression",
                "value": "{{NOW}}"
              },
              {
                "name": ":P5",
                "type": "expression",
                "value": "{{NOW}}"
              }
            ]
          }
        },
        "meta": [
          {
            "name": "identity",
            "type": "text"
          },
          {
            "name": "affected",
            "type": "number"
          }
        ]
      },
      {
        "name": "insBackFile",
        "module": "dbupdater",
        "action": "insert",
        "options": {
          "connection": "bsecure",
          "sql": {
            "type": "insert",
            "values": [
              {
                "table": "customer_identification_files",
                "column": "customer_identification_id",
                "type": "number",
                "value": "{{insid.identity}}"
              },
              {
                "table": "customer_identification_files",
                "column": "path",
                "type": "text",
                "value": "{{idback.path}}"
              },
              {
                "table": "customer_identification_files",
                "column": "size",
                "type": "number",
                "value": "{{idback.size}}"
              },
              {
                "table": "customer_identification_files",
                "column": "created_by_user_id",
                "type": "number",
                "value": "2"
              },
              {
                "table": "customer_identification_files",
                "column": "created_at",
                "type": "datetime",
                "value": "{{NOW}}"
              },
              {
                "table": "customer_identification_files",
                "column": "updated_at",
                "type": "datetime",
                "value": "{{NOW}}"
              }
            ],
            "table": "customer_identification_files",
            "returning": "id",
            "query": "INSERT INTO customer_identification_files\n(customer_identification_id, path, size, created_by_user_id, created_at, updated_at) VALUES (:P1 /* {{insid.identity}} */, :P2 /* {{idback.path}} */, :P3 /* {{idback.size}} */, '2', :P4 /* {{NOW}} */, :P5 /* {{NOW}} */)",
            "params": [
              {
                "name": ":P1",
                "type": "expression",
                "value": "{{insid.identity}}"
              },
              {
                "name": ":P2",
                "type": "expression",
                "value": "{{idback.path}}"
              },
              {
                "name": ":P3",
                "type": "expression",
                "value": "{{idback.size}}"
              },
              {
                "name": ":P4",
                "type": "expression",
                "value": "{{NOW}}"
              },
              {
                "name": ":P5",
                "type": "expression",
                "value": "{{NOW}}"
              }
            ]
          }
        },
        "meta": [
          {
            "name": "identity",
            "type": "text"
          },
          {
            "name": "affected",
            "type": "number"
          }
        ]
      },
      {
        "name": "insFullFile",
        "module": "dbupdater",
        "action": "insert",
        "options": {
          "connection": "bsecure",
          "sql": {
            "type": "insert",
            "values": [
              {
                "table": "customer_identification_files",
                "column": "customer_identification_id",
                "type": "number",
                "value": "{{insid.identity}}"
              },
              {
                "table": "customer_identification_files",
                "column": "path",
                "type": "text",
                "value": "{{idfull.url}}"
              },
              {
                "table": "customer_identification_files",
                "column": "size",
                "type": "number",
                "value": "{{idback.size}}"
              },
              {
                "table": "customer_identification_files",
                "column": "created_by_user_id",
                "type": "number",
                "value": "2"
              },
              {
                "table": "customer_identification_files",
                "column": "created_at",
                "type": "datetime",
                "value": "{{NOW}}"
              },
              {
                "table": "customer_identification_files",
                "column": "updated_at",
                "type": "datetime",
                "value": "{{NOW}}"
              }
            ],
            "table": "customer_identification_files",
            "returning": "id",
            "query": "INSERT INTO customer_identification_files\n(customer_identification_id, path, size, created_by_user_id, created_at, updated_at) VALUES (:P1 /* {{insid.identity}} */, :P2 /* {{idfull.url}} */, :P3 /* {{idback.size}} */, '2', :P4 /* {{NOW}} */, :P5 /* {{NOW}} */)",
            "params": [
              {
                "name": ":P1",
                "type": "expression",
                "value": "{{insid.identity}}"
              },
              {
                "name": ":P2",
                "type": "expression",
                "value": "{{idfull.url}}"
              },
              {
                "name": ":P3",
                "type": "expression",
                "value": "{{idback.size}}"
              },
              {
                "name": ":P4",
                "type": "expression",
                "value": "{{NOW}}"
              },
              {
                "name": ":P5",
                "type": "expression",
                "value": "{{NOW}}"
              }
            ]
          }
        },
        "meta": [
          {
            "name": "identity",
            "type": "text"
          },
          {
            "name": "affected",
            "type": "number"
          }
        ]
      },
      {
        "name": "insProofResi",
        "module": "dbupdater",
        "action": "insert",
        "options": {
          "connection": "bsecure",
          "sql": {
            "type": "insert",
            "values": [
              {
                "table": "customer_identification_files",
                "column": "customer_identification_id",
                "type": "number",
                "value": "{{insid.identity}}"
              },
              {
                "table": "customer_identification_files",
                "column": "path",
                "type": "text",
                "value": "{{proofresi.path}}"
              },
              {
                "table": "customer_identification_files",
                "column": "size",
                "type": "number",
                "value": "{{proofresi.size}}"
              },
              {
                "table": "customer_identification_files",
                "column": "created_by_user_id",
                "type": "number",
                "value": "2"
              },
              {
                "table": "customer_identification_files",
                "column": "created_at",
                "type": "datetime",
                "value": "{{NOW}}"
              },
              {
                "table": "customer_identification_files",
                "column": "updated_at",
                "type": "datetime",
                "value": "{{NOW}}"
              }
            ],
            "table": "customer_identification_files",
            "returning": "id",
            "query": "INSERT INTO customer_identification_files\n(customer_identification_id, path, size, created_by_user_id, created_at, updated_at) VALUES (:P1 /* {{insid.identity}} */, :P2 /* {{proofresi.path}} */, :P3 /* {{proofresi.size}} */, '2', :P4 /* {{NOW}} */, :P5 /* {{NOW}} */)",
            "params": [
              {
                "name": ":P1",
                "type": "expression",
                "value": "{{insid.identity}}"
              },
              {
                "name": ":P2",
                "type": "expression",
                "value": "{{proofresi.path}}"
              },
              {
                "name": ":P3",
                "type": "expression",
                "value": "{{proofresi.size}}"
              },
              {
                "name": ":P4",
                "type": "expression",
                "value": "{{NOW}}"
              },
              {
                "name": ":P5",
                "type": "expression",
                "value": "{{NOW}}"
              }
            ]
          }
        },
        "meta": [
          {
            "name": "identity",
            "type": "text"
          },
          {
            "name": "affected",
            "type": "number"
          }
        ]
      }
    ]
  }
}
JSON
);
?>