@extends('auth.layout.master')
@section('title' , __('auth.otp-login.view.title'))
@section('content')
    <div class="login-signin">
        <div class="mb-20">
            <h3>{{__('auth.otp-login.view.title')}}</h3>
        </div>
        <form class="form" action="{{route('otp-login.submit')}}" method="post">
            @timezone()
            @csrf
            <div class="row  justify-content-between">
                <div class="col-9">
                    <x-auth.form.input :name="'mobile'" placeholder="{{__('auth.otp-login.view.mobile_placeholder')}}"></x-auth.form.input>
                </div>
                <div class="col-3">
                    <button type="button" class="btn btn-secondary my-auto h-auto"  verification="true" for="login">
                        {{__('auth.otp-login.view.send_sms_button')}}
                    </button>
                </div>
            </div>

            <x-auth.form.input
                counter="off"
                :name="'verification_code'"
                type="number"
                placeholder="{{__('auth.otp-login.view.verification_code_placeholder')}}"></x-auth.form.input>


            <div class="form-group d-flex flex-wrap justify-content-between align-items-center">
                <!-------------- REMEMBER ME INPUT ---------------------->
                <x-auth.form.checkbox :name="'remember'">
                    {{__('auth.otp-login.view.remember')}}
                </x-auth.form.checkbox>
            </div>

            <x-auth.form.button type="submit">
                {{__('auth.otp-login.view.submit_button')}}
            </x-auth.form.button>
        </form>

        <div class="mt-10">
            <x-auth.text.link  class="font-weight-bold"  href="{{route('register.submit')}}">
                {{__('auth.otp-login.view.registration_offer')}}
            </x-auth.text.link>
        </div>
        <div class="mt-5">
            <x-auth.text.link  class="font-weight-bold"  href="{{route('login.form')}}">
                {{__('auth.otp-login.view.login_with_password')}}
            </x-auth.text.link>
        </div>
    </div>
@endsection
