@extends('auth.layout.master')
@section('title' , __('auth.login.view.title'))
@section('content')
    <div class="login-signin">
        <div class="mb-20">
            <h3>{{__('auth.login.view.title')}}</h3>
            <div class="text-muted font-weight-bold">{{__('auth.login.view.subtitle')}}</div>
        </div>
        <form class="form" action="{{route('login.submit')}}" method="post">
            @timezone()
            @csrf
            <!-------------- EMAIL OR PHONE INPUT ---------------->
            <x-auth.form.input :name="'username'" placeholder="{{__('auth.login.view.username_placeholder')}}" />
            <!-------------- PASSWORD INPUT ---------------------->
            <x-auth.form.input :name="'password'" type="password" placeholder="{{__('auth.login.view.password_placeholder')}}"/>

            <div class="form-group d-flex flex-wrap justify-content-between align-items-center">
                <!-------------- REMEMBER ME INPUT ---------------------->
                <x-auth.form.checkbox :name="'remember'">
                    {{__('auth.login.view.remember')}}
                </x-auth.form.checkbox>


                <x-auth.text.link href="{{route('otp-login.form')}}">
                    {{__('auth.login.view.otp_offer')}}
                </x-auth.text.link>
            </div>
            <x-auth.form.button type="submit">
                {{__('auth.login.view.submit_button')}}
            </x-auth.form.button>
        </form>

        <div class="mt-10">
            <x-auth.text.link  class="font-weight-bold"  href="{{route('register.form')}}">
                {{__('auth.login.view.registration_offer')}}
            </x-auth.text.link>
        </div>
    </div>
@endsection
