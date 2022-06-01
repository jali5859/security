dmx.config({
  "index": {
    "arr1": {
      "meta": [
        {
          "type": "text",
          "name": "id"
        },
        {
          "type": "text",
          "name": "name"
        },
        {
          "type": "text",
          "name": "description"
        },
        {
          "type": "number",
          "name": "type"
        }
      ],
      "outputType": "array"
    },
    "getcameras": {
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
    "addacc": {
      "meta": null,
      "outputType": "text"
    }
  }
});
