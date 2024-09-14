@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">


        <div class="row row-xs wd-xl-80p">
            <div class="col-sm-6 col-md-3">
                <a href="{{ route('login') }}"><button class="btn btn-outline-primary btn-block">Login</button></a>
            </div>
            <div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0">
                <a href="{{ route('register') }}"> <button class="btn btn-outline-secondary btn-block">Register</button></a>
            </div>

        </div>


    </div>

    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">

    </div>
    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')
@endsection
