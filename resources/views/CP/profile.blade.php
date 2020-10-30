@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Profile</h3>
                        </div>
                        <div class="box-body">
                            <img class="center img-circle" src="http://www.hotavatars.com/wp-content/uploads/2019/01/I80W1Q0.png" alt="User Image" style="max-width: 20%;margin: 5% 40%">

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>First Name: </label><h5>{{ request()->user()->first_name }}</h5>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Last Name: </label><h5>{{ request()->user()->last_name }}</h5>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Email: </label><h5>{{ request()->user()->email }}</h5>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Role: </label><h5>{{ request()->user()->role }}</h5>
                                </div>
                            </div>
{{--                            <div class="form-row">--}}
{{--                                <div class="form-group col-md-12">--}}
{{--                                    @if ($errors->any())--}}
{{--                                        <div class="alert alert-danger">--}}
{{--                                            {{ $errors->all() }}--}}
{{--                                            <ul>--}}
{{--                                                @foreach ($errors->all() as $error)--}}
{{--                                                    <li>{{ $error }}</li>--}}
{{--                                                @endforeach--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    @endif--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <form method="POST" action="{{route('profile.update')}}">
                                @csrf
                                <div class="form-row">
                                    @error('old_password')
                                    {{$message}}
                                    @enderror
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            @error('oldPass')
                                                <span class="invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span><br>
                                            @enderror
                                            <label for="oldPass">Old Password:</label>
                                            <input type="password" class="form-control" name="oldPass" placeholder="Enter old password">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12 error">
                                            @error('newPass')
                                                <span class="invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span><br>
                                            @enderror
                                            <label for="newPass">New Password:</label>
                                            <input type="password" class="form-control" name="newPass" placeholder="Enter new password">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <a class="btn btn-primary" href="/panel">Cancel</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
