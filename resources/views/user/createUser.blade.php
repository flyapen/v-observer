@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s12 m8 push-m2 l6 push-l3">
                <div class="card left-align">
                    <form method="POST" action="{{ action('User\UserController@postCreateUser') }}">
                        {!! csrf_field() !!}
                        <input type="hidden" name="group_id" value="{{ $group_id }}">
                        <div class="card-content">
                            <div class="card-title">Create new user</div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" name="name" value="{{ old('name') }}">
                                    <label for="name">Name</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="email" name="email" value="{{ old('email') }}">
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            @if( Config::get('cas.cas_hostname') )
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" name="cas_username" value="{{ old('cas_username') }}">
                                    <label for="cas_username">CAS username</label>
                                </div>
                            </div>
                            @endif
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="checkbox" id="send_email" name="send_email" checked="checked" />
                                    <label for="send_email">Send an email about his new account</label>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <button class="waves-effect waves-light btn" type="submit"><i class="material-icons left">person_add</i>Create user</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
