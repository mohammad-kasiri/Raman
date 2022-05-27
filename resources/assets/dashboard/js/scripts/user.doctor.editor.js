"use strict";

// Class definition
var DoctorAdd = function () {
    // Base elements
    var _wizardEl;
    var _wizard;

    // Private functions
    var initWizard = function () {
        // Initialize form wizard
        _wizard = new KTWizard(_wizardEl, {
            startStep: 1, // initial active step number
            clickableSteps: true  // allow step clicking
        });
        // Change Event
        _wizard.on('change', function (wizard) {
            KTUtil.scrollTop();
        });
    }
    return {
        // public functions
        init: function () {
            _wizardEl = KTUtil.getById('doctor_add');
            initWizard();
        }
    };
}();

jQuery(document).ready(function () {
    DoctorAdd.init();
    jalaliDatepicker.startWatch({maxDate : 'today'});
});


var QuilEditor = function() {
    var demo1 = function() {
        var quill = new Quill('#QuilEditor', {
            modules: {
                toolbar: [
                    [{
                        header: [1, 2, false]
                    }],
                    ['bold', 'italic', 'underline'],
                    ['code-block']
                ]
            },
            placeholder: 'متن خود را وارد کنید',
            theme: 'snow' // or 'bubble'
        });
    }
    return {
        // public functions
        init: function() {
            demo1();
        }
    };
}();

jQuery(document).ready(function() {
    QuilEditor.init();

    $("form.form").on("submit",function() {
        $("#QuilInput").val($("#QuilEditor").html());
    })
});




// Class definition
var KTImageInputDemo = function () {
    // Private functions
    var initDemos = function () {
        // Example 1
        var avatar1 = new KTImageInput('doctor_avatar');
    }
    return {
        // public functions
        init: function() {
            initDemos();
        }
    };
}();

KTUtil.ready(function() {
    KTImageInputDemo.init();
});
