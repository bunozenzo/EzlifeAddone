@extends('layouts.admin')
@section('title', 'đây là trang quản trị')
@section('content')
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Get data</h3>
        </div>
        <div class="panel-body">
            @if (session('status'))
                <div class="alert alert-info">{{session('status')}}</div>
            @endif
                @if (session('status1'))
                    <div class="alert alert-info">{{session('status1')}}</div>
                @endif
            {!! Form::open(['action' => 'Admin\AdminController@getdata']) !!}
            {{ Form::text('name','',['class' => 'form-control','placeholder'=>'Nhập Link']) }}
            {{ Form::submit('Save',['class' => 'btn btn-default'])}}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
