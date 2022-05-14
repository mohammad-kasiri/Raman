$(document).ready(function() {
    let url = '/otp';

    let btn = $('button[verification="true"]');
    let verificationCodeInput = $('input[name="verification_code"]');
    let mobileInput = $('input[name="mobile"]');


    btn.click(function () {
        let mobile = mobileInput.val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                'Accept' : 'application/json'
            }
        });

        $.ajax({
            url: url,
            method: "POST",
            data: {
                "mobile" : mobile,
                "for"    : btn.attr('for'),
            },
            success: function (response) {
                Swal.fire({
                    icon: 'success',
                    text: response.verification_code,
                })
            },
            error  : function (response) {
                if(response.status == 422){
                    Swal.fire({
                        icon: 'error',
                        text: response.responseJSON.errors.mobile,
                    })
                }
                if(response.status == 429) {
                    Swal.fire({
                        icon: 'error',
                        text: 'تعداد درخواست ها زیاد است. لطفا پس از چند دقیقه دوباره امتحان کنید!',
                    })
                }
            }
        });
    });
})
