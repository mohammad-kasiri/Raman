@extends('auth.layout.master')
@section('title' , __('auth.register.view.title'))
@section('content')
    <div class="login-signin">
        <div class="mb-20">
            <h3>{{__('auth.register.view.title')}}</h3>
            <div class="text-muted font-weight-bold">{{__('auth.register.view.subtitle')}}</div>
        </div>
        <form class="form" action="{{route('register.submit')}}" method="post">
            @timezone()
            @csrf
            <div class="row d-flex flex-wrap justify-content-between align-items-center">
                <div class="col-md-6">
                    <x-auth.form.input :name="'first_name'" placeholder="{{__('auth.register.view.first_name_placeholder')}}"></x-auth.form.input>
                </div>
                <div class="col-md-6">
                    <x-auth.form.input :name="'last_name'" placeholder="{{__('auth.register.view.last_name_placeholder')}}"></x-auth.form.input>
                </div>
            </div>

            <div class="row  justify-content-between">
                <div class="col-9">
                    <x-auth.form.input :name="'mobile'" placeholder="{{__('auth.register.view.mobile_placeholder')}}"></x-auth.form.input>
                </div>
                <div class="col-3">
                    <button type="button" class="btn btn-secondary my-auto h-auto"  verification="true" for="register">
                        {{__('auth.register.view.send_sms_button')}}
                    </button>
                </div>
            </div>

            <x-auth.form.input
                counter="off"
                :name="'verification_code'"
                type="number"
                placeholder="{{__('auth.register.view.verification_code_placeholder')}}"></x-auth.form.input>

            <!-------------- PASSWORD INPUT ---------------------->
            <div class="d-flex flex-wrap justify-content-between align-items-center">
                <span class="text-muted mx-5"> {{__('auth.register.view.gender_placeholder')}} </span>
                <x-auth.form.inline-radio :name="'gender'"  :value="'female'">
                    {{__('auth.register.view.female_label')}}
                </x-auth.form.inline-radio>

                <x-auth.form.inline-radio :name="'gender'" :value="'male'" checked>
                    {{__('auth.register.view.male_label')}}
                </x-auth.form.inline-radio>
            </div>

            <x-auth.form.button type="submit">
                {{__('auth.register.view.submit_button')}}
            </x-auth.form.button>
        </form>

        <div class="mt-10">
            <x-auth.text.link  class="font-weight-bold"  href="{{route('otp-login.form')}}">
                {{__('auth.register.view.login_offer')}}
            </x-auth.text.link>
        </div>
    </div>
@endsection
