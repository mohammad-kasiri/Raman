"use strict";

// Class definition
var PatientAdd = function () {
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
            _wizardEl = KTUtil.getById('patient_add');
            initWizard();
        }
    };
}();

jQuery(document).ready(function () {
    PatientAdd.init();
    jalaliDatepicker.startWatch({maxDate : 'today'});
});


//---------------------------------------------------------------------------------//

jQuery(document).ready(function () {
    $('input[auto-search]').each(function (counter , input) {
        let path  = input.getAttribute('auto-search');
        let name  = input.getAttribute('name');
        $(`input[name="${name}"]`).keyup(function () {
            let value = $(this).val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'Accept' : 'application/json'
                }
            });
            $.ajax({
                url: path,
                method: "GET",
                data: {
                    "title" : value,
                },
                success: function (response) {
                    let items = [];
                    $.each( response , function (key , value){
                        items.push(`<button type="button" class="list-group-item list-group-item-action autosearch-item" parent="${name}">${value.title}</button>`);
                    })
                    $(`div[parent="${name}"]`).removeClass('d-none').children('.list-group').html(items);

                    $(".autosearch-item").click(function (){
                        let value  = $(this).text();
                        $(`input[name='${name}']`).val("").val(value);
                        $(`div[parent="${name}"]`).addClass('d-none');
                    })
                    $(document).click(function (){
                        $(`div[parent="${name}"]`).addClass('d-none');
                    })
                },
                error  : function (response) {
                    console.log(response);
                }
            });
        })
    });
});

