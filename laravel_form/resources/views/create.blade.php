@extends('master')
@section('content')

<form action="{{Route('Form.store')}}" method="post" class="login-box" autocomplete="off">

    @csrf

    <h1>{{ __('index.Registration Form') }}</h1>

    <div class="user-box">

        <input required type="text" name="FullName" value="{{old('FullName')}}">
        <label for="">{{ __('index.Full Name: ') }}</label>

        <div class="error">
            @error('FullName')
            {{$message}}
            @enderror
        </div>
    </div>

    <div class="user-box">

        <input required type="text" name="UserName" value="{{old('UserName')}}">
        <label for="">{{ __('index.User Name: ') }}</label>
        <div class="error">
            @error('UserName')
            {{$message}}
            @enderror
        </div>
    </div>

    <div class="user-box">
        <input required type="email" name="Email" value="{{old('Email')}}">
        <label for="">{{ __('index.Email: ') }}</label>
        <div class="error">
            @error('Email')
            {{$message}}
            @enderror
        </div>
    </div>

    <div class="user-box">

        <input required type="date" name="DOB" value="{{old('DOB')}}" id="date">
        <label for="" id="lbl">{{ __('index.Date of birth: ') }}</label>
        <div class="error">
            @error('DOB')
            {{$message}}
            @enderror
        </div>
    </div>

    <div class="user-box">

        <input required type="password" name="Password" value="{{old('Password')}}">
        <label for="">{{ __('index.Password: ') }}</label>
        <div class="error">
            @error('Password')
            {{$message}}
            @enderror
        </div>
    </div>

    <div class="user-box">

        <input required type="password" name="RePassword" value="{{old('RePassword')}}">
        <label for="">{{ __('index.Confirm Password: ') }}</label>
        <div class="error">

        </div>
    </div>

    <div class="user-box">

        <input required type="text" name="Address" value="{{old('Address')}}">
        <label for="">{{ __('index.Adress: ') }}</label>
        <div class="error">
            @error('Address')
            {{$message}}
            @enderror
        </div>
    </div class="user-box">

    <div class="user-box">

        <input required type="file" name="Image" value="{{old('Image')}}">
        <label for="" id="lbl">{{ __('index.Image: ') }}</label>

        <div class="error">

        </div>
    </div>


    <button>
        submit
    </button>

</form>

<div id="actors">
    <button onclick="actors()"> {{ __('index.Actors born on your birthday') }} </button>
    <p id="actor"></p>
</div>

@endsection