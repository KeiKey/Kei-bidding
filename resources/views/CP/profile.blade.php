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
                            <form method="POST" action="{{route('profile')}}">
                                @csrf
                                <div class="form-row">
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="oldPass">Old Password:</label>
                                            <input type="password" class="form-control" name="oldPass" placeholder="Enter old password">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="newPass">New Password:</label>
                                            <input type="password" class="form-control" name="newPass" placeholder="Enter old password">
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
