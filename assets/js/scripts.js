// JavaScript Document
$(document).ready(function () {
    //phone mask
    var hphone = document.getElementById("hphone");
    var mphone = document.getElementById("mphone");
    var priphone = document.getElementById("prinum");
    var im = new Inputmask("(999)999-9999");

    im.mask(hphone);
    im.mask(mphone);
    hphone.placeholder = '(868)555-5555';
    mphone.placeholder = '(868)555-5555';
    priphone.placeholder = '(868)555-5555';
    //dob format
    $("#dob").flatpickr({
        altInput: true,
        altFormat: "F j, Y",
        dateFormat: "Y-m-d",
    });
});
