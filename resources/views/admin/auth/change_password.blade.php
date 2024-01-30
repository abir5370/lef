@extends('admin.include.master')
@section('body')
<div class="page-content font">
        @if (session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
        @endif
        @if (session('failed'))
            <div class="alert alert-danger">{{session('failed')}}</div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
       @endif
    <div class="row">
        <div class="col-xs-12">
            @if (session('success'))
            <div class="alert alert-success">{{session('success')}}</div>
           @endif
            <!-- PAGE CONTENT BEGINS -->
            <form class="form-horizontal" role="form" method="POST" action="{{route('password.update')}}"
                enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-pass1">Current Password</label>
        
                    <div class="col-sm-9">
                        <input type="password" style="width: 50%;" name="current_password" id="form-field-pass1">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-pass1">New Password</label>
        
                    <div class="col-sm-9">
                        <input type="password" style="width: 50%;" name="password" id="form-field-pass1">
                    </div>
                </div>
        
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-pass2">Confirm Password</label>
        
                    <div class="col-sm-9">
                        <input type="password" style="width: 50%;" name="password_confirmation" id="form-field-pass2">
                    </div>
                </div>

                <div class="col-md-offset-3 col-md-9">
                    <button type="submit" class="btn btn-info">
                        <i class="ace-icon fa fa-check bigger-110"></i>
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

