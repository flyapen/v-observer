@extends('layouts.fullcenter')

@section('content')
<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s12 m8 push-m2 l6 push-l3">
                <div class="card left-align">
                    <form method="POST" action="{{ action('Auth\AuthController@postLogin') }}">
                        {!! csrf_field() !!}
                        <div class="card-content">
                            <div class="card-title">Login</div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="email" name="email" value="{{ old('email') }}">
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="password" name="password" id="password">
                                    <label for="password">Password</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="checkbox" id="remember" name="remember">
                                    <label for="remember">Remember Me</label>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <button class="waves-effect waves-light btn" type="submit">Login</button>
                            <a class="white teal-text text-lighten-1 waves-effect waves-teal btn-flat" href="/password/email">Forgot password</a>
                        </div>
                        @if( Config::get('cas.cas_hostname') )
                        <div class="card-action">
                            <a class="waves-effect waves-light btn amber lighten-2 blue-text text-darken-4" type="submit" href="{{ action('Auth\AuthController@getCas') }}"><i class="material-icons left">account_balance</i>Login with CAS</a>
                        </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
