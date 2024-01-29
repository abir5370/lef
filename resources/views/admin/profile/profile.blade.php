@extends('admin.include.master')
@section('body')
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
    <ul class="breadcrumb">
        <li>
            <i class="ace-icon fa fa-home home-icon"></i>
            <a href="#">Home</a>
        </li>
        <li class="active">User Profile</li>
    </ul>
</div>
<div class="col-xs-12">
    <div class="hr dotted"></div>
    <div>
        <div id="user-profile-1" class="user-profile row">
            <div class="col-xs-12 col-sm-3 center">
                <div>
                    <span class="profile-picture">
                        <img id="avatar" class="editable img-responsive editable-click editable-empty" alt="Alex's Avatar" src="{{asset('admin-asset')}}/images/avatars/profile-pic.jpg">
                    </span>
                    <div class="space-4"></div>
                    <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                        <div class="inline position-relative">
                            <a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
                                <i class="ace-icon fa fa-circle light-green"></i>
                                &nbsp;
                                <span class="white">Alex M. Doe</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="space-6"></div>
                <div class="hr hr12 dotted"></div>
                <div class="hr hr16 dotted"></div>
            </div>

            <div class="col-xs-12 col-sm-9">
                <div class="space-12"></div>
                <div class="profile-user-info profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name"> Username </div>

                        <div class="profile-info-value">
                            <span class="editable editable-click" id="username">alexdoe</span>
                        </div>
                    </div>

                    <div class="profile-info-row">
                        <div class="profile-info-name"> Location </div>

                        <div class="profile-info-value">
                            <i class="fa fa-map-marker light-orange bigger-110"></i>
                            <span class="editable editable-click" id="country">Netherlands</span>
                            <span class="editable editable-click" id="city">Amsterdam</span>
                        </div>
                    </div>

                    <div class="profile-info-row">
                        <div class="profile-info-name"> Age </div>

                        <div class="profile-info-value">
                            <span class="editable editable-click" id="age">38</span>
                        </div>
                    </div>

                    <div class="profile-info-row">
                        <div class="profile-info-name"> Joined </div>

                        <div class="profile-info-value">
                            <span class="editable editable-click" id="signup">2010/06/20</span>
                        </div>
                    </div>

                    <div class="profile-info-row">
                        <div class="profile-info-name"> Last Online </div>

                        <div class="profile-info-value">
                            <span class="editable editable-click" id="login">3 hours ago</span>
                        </div>
                    </div>

                    <div class="profile-info-row">
                        <div class="profile-info-name"> About Me </div>

                        <div class="profile-info-value">
                            <span class="editable editable-click" id="about">Editable as WYSIWYG</span>
                        </div>
                    </div>
                </div>
                <div class="space-20"></div>
            </div>

            
        </div>
    </div>
    <div id="user-profile-3" class="user-profile row">
        <div class="col-sm-offset-1 col-sm-10">
            <form class="form-horizontal">
                <div class="tabbable">
                    <ul class="nav nav-tabs padding-16">
                        <li class="active">
                            <a data-toggle="tab" href="#edit-basic" aria-expanded="true">
                                <i class="green ace-icon fa fa-pencil-square-o bigger-125"></i>
                                Basic Info
                            </a>
                        </li>

                        <li class="">
                            <a data-toggle="tab" href="#edit-password" aria-expanded="false">
                                <i class="blue ace-icon fa fa-key bigger-125"></i>
                                Password
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content profile-edit-tab-content">
                        <div id="edit-basic" class="tab-pane active">
                            <h4 class="header blue bolder smaller">General</h4>
                            <form action="" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="image">Image :</label>
                                    <div class="col-sm-9">
                                        <div class="col-sm-5">
                                            <div class="widget-body">
                                                <div class="form-group">
                                                    <div class="col-xs-12 col-md-12">
                                                        <label class="ace-file-input ace-file-multiple">
                                                            <input type="file" name="image"
                                                                onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" /><span class="ace-file-container"
                                                                data-title="Choose Your Image..."><span class="ace-file-name"
                                                                    data-title="No File ..."><i
                                                                        class=" ace-icon ace-icon fa fa-cloud-upload"></i></span></span><a
                                                                class="remove" href="#"><i
                                                                    class=" ace-icon fa fa-times"></i></a>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
            
                                        <span class="help-inline col-xs-12 col-sm-7">
                                            <label class="middle">
                                                <img height="145" id="blah" width="155" src="{{ asset('admin-asset/images/temp.png') }}"
                                                    alt="service Image">
                                            </label>
                                        </span>
                                        @error('image')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-username">Name</label>

                                    <div class="col-sm-9">
                                        <input class="col-xs-12 col-sm-10" name="name" type="text" id="form-field-username" placeholder="Name" value="alexdoe">
                                        @error('image')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-email">Email</label>

                                    <div class="col-sm-9">
                                        <span class="input-icon input-icon-right">
                                            <input type="email" name="email" id="form-field-email" value="alexdoe@gmail.com">
                                            <i class="ace-icon fa fa-envelope"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-phone">Phone</label>

                                    <div class="col-sm-9">
                                        <span class="input-icon input-icon-right">
                                            <input name="phone" class="input-medium input-mask-phone" type="text" id="form-field-phone">
                                            <i class="ace-icon fa fa-phone fa-flip-horizontal"></i>
                                        </span>
                                    </div>
                                </div>
                            </form>
                            <div class="space"></div>
                        </div>

                        <div id="edit-password" class="tab-pane">
                            <div class="space-10"></div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-pass1">New Password</label>

                                <div class="col-sm-9">
                                    <input type="password" id="form-field-pass1">
                                </div>
                            </div>

                            <div class="space-4"></div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-pass2">Confirm Password</label>

                                <div class="col-sm-9">
                                    <input type="password" name="" id="form-field-pass2">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix form-actions">
                    <div class="col-md-offset-3 col-md-9">
                        <button class="btn btn-info" type="button">
                            <i class="ace-icon fa fa-check bigger-110"></i>
                            Save
                        </button>

                        &nbsp; &nbsp;
                        <button class="btn" type="reset">
                            <i class="ace-icon fa fa-undo bigger-110"></i>
                            Reset
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection