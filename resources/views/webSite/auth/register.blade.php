@extends('webSite.layouts.app')
@section('content')
    <div class="mainDiv mb-5 mt-5 ">
        <div class="container">
            <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-8 col-sm-10 mb-5 mt-5">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="mainContent mt-3 mb-5 gray-background">
                        <form action="{{ route('authRergisterStore') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="first-name-input" class="form-label">{{trans('main_trans.Enter Your First Name')}}</label>
                                <input type="text" class="form-control" name="f_name" id="first-name-input"
                                    placeholder="{{trans('main_trans.Enter Your First Name')}}">
                            </div>
                            <div class="mb-3">
                                <label for="last-name-input" class="form-label">{{trans('main_trans.Enter Your Last Name')}}</label>
                                <input type="text" class="form-control" name="l_name" id="last-name-input"
                                    placeholder="{{trans('main_trans.Enter Your Last Name')}}">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">{{trans('main_trans.Enter Password')}}</label>
                                <input type="password" class="form-control" name="password" id="password"
                                    placeholder="{{trans('main_trans.Enter Password')}}">
                            </div>
                            <div class="mb-3">
                                <label for="retype-password" class="form-label">{{trans('main_trans.Re-Type Password')}}</label>
                                <input type="password" class="form-control" name="password_confirmation" id="retype-password"
                                    placeholder="{{trans('main_trans.Re-Type Password')}}">
                            </div>
                            <div class="mb-3">
                                <label for="email-input"  class="form-label">{{trans('main_trans.Enter Your Email')}}</label>
                                <input type="email" id="ar" class="form-control" name="email" id="email-input"
                                    placeholder="{{trans('main_trans.Enter Your Email')}}">
                            </div>
                            <div class="mainButtonsContainer d-flex justify-content-between mt-4">
                                <button type="submit" class="mainButton me-3 mt-3" type="button">{{trans('main_trans.Sign Up')}}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
