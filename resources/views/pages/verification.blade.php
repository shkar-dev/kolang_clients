@extends('newhome')
@section('newhome_content')
    <link rel="stylesheet" href="{{asset('assets/verificationStyle.css')}}">
    <div class="content-section">
        <div class="verification-form">
            <h3 id="test"></h3>
            <form action="{{route('verification')}}" method="post" class="verify_form" id="verification_form">
                @csrf
                <h4> پشتڕاستکردنەوە </h4>
                <hr>
                <x-input-text name="phone_number" id="phone_number" placeholder="ژمارە مۆبایل" label="ژمارە مۆبایل"
                    column="col-md-12" />
                <p></p>
                <div class="  m-0 client_form_error" id="phone_error"></div>
                <div class="verification_code_container">
                    <x-input-text name="verification_code" id="verification_code" placeholder="  کۆدی دڵنیایی"
                        label="کۆدی دڵنیایی" column="col-md-12" />
                    <div class="  m-0 client_form_error" id="verification_error"></div>
                </div>
                <button class="btn-custom btn-submit" id="submit" type="submit">
                    <i class="fa fa-paper-plane"></i>ناردن</button>
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous"></script>
    <script type="text/javascript">
        var newAction = "{{route('verify_code')}}";
        var verification_code_container = $('.verification_code_container');
        var verification_code = $('#verification_code');
        var phone_number = $('#phone_number')

        $("#verification_form").submit(function (e) {
            e.preventDefault();
            let form = $(this);
            let formData = form.serialize(); // Serialize form data
            var check_form = form.attr('id')
            if (check_form == 'verification_form') {
                $.ajax({
                    url: form.attr('action'),
                    type: "POST",
                    data: formData,
                    headers: { "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content") },
                    success: function (response) {
                        if (response.errors) {
                            if (response.errors.phone_number) {
                                $('#phone_error').text(response.errors.phone_number[0]);
                            }
                        } else {
                            form.attr('id', 'verify_code_form');
                            verification_code_container.css('display', 'block')
                            verification_code.prop('disabled', false)
                            $('#phone_error').text('')
                            $('#submit').html('<i class="fa fa-check"></i>' + 'پشتڕاستکردنەوە')
                        }
                    },
                    error: function (xhr) {
                        alert("Error occurred!1");
                    }
                });
            } else if (check_form == 'verify_code_form') {
                $.ajax({
                    url: newAction,
                    type: "POST",
                    data: formData,
                    headers: { "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content") },
                    success: function (response) {
                        if (response.errors) {
                            if (response.errors.phone_number) {
                                $('#phone_error').text(response.errors.phone_number[0]);
                            }
                            if (response.errors.verification_code) {
                                $('#verification_error').text(response.errors.verification_code[0]);
                            }
                        } else {
                            $('#phone_error').text('')
                            $('#verification_error').text('')
                            verification_code_container.css('display', 'none');
                        }
                        if (response.redirect) {
                            window.location.href = response.redirect;
                        }
                    },
                    error: function (xhr) {
                        alert("Error occurred!");
                    }
                });
            } else {
                console.log("3");
            }
        });



        // $("#verify_code_form").submit(function (e) {
        //     e.preventDefault();
        //     let form = $(this);
        //     let formData = form.serialize(); // Serialize form data
        //     console.log("welcome1");
        //     $.ajax({
        //         url: newAction,
        //         type: "POST",
        //         data: formData,
        //         headers: { "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content") },
        //         success: function (response) {
        //             console.log(response);
        //             // console.log(response[0].message)
        //             // console.log(response[0].code)
        //             // if (response[0].message == 'success') {
        //             //     form.attr('action', newAction)
        //             //     verification_code_container.css('display', 'block')
        //             //     verification_code.prop('disabled', false)
        //             // }
        //         },
        //         error: function (xhr) {
        //             alert("Error occurred!");
        //         }
        //     });
        // });

    </script>
@endsection