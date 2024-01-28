@extends('admin.include.master')
@section('body')
<div class="main-content-inner font">
    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <i class="ace-icon fa fa-cogs home-icon"></i>
                <a href="{{route('activities.index')}}">Activite</a>
            </li>
            <li class="active">Add Activitie / Service Information</li>
        </ul><!-- /.breadcrumb -->
    </div>

    <div class="page-content font">
        <div class="row">
            @if(session('success'))
            <div class="alert alert-success">{{session('success')}}</div>
            @endif
            <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->
                <form class="form-horizontal" role="form" method="POST" action="{{route('activities.store')}}"
                    enctype="multipart/form-data">
                    @csrf

                    {{--Activitie section header--}}
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="header">Header
                            :</label>
                        <div class="col-sm-9">
                            <textarea id="header" name="header" placeholder="Write header about activite" class="col-xs-12 col-md-11 col-sm-12"
                                style="height: 150px; width: 92%;"></textarea>
                            <span>
                                @error('header')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </span>
                        </div>
                    </div>

                    {{-- activitie title  --}}
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="title">Title :</label>
                        <div class="col-sm-9">
                            <input type="text" name="title" id="title" placeholder="Activite Title"
                                class="col-xs-12 col-md-11 col-sm-12" />
                            <br> <br>
                            <span>
                                @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </span>
                        </div>
                    </div>
                    {{-- Supporter heade tag --}}
                     

                    {{-- About Supporter --}}
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="about">Activitie Description
                            :</label>
                        <div class="col-sm-9">
                            <textarea id="about" name="about" placeholder="Write details about activitie" class="col-xs-12 col-md-11 col-sm-12"
                                style="height: 150px; width: 92%;"></textarea>
                            <span>
                                @error('about')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </span>
                        </div>
                    </div>


                  {{-- supporter Image --}}
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="image">Image :</label>
                        <div class="col-sm-9">
                            <div class="col-sm-5">
                                <div class="widget-body">
                                    <div class="form-group">
                                        <div class="col-xs-12 col-md-12">
                                            <label class="ace-file-input ace-file-multiple">
                                                <input type="file"
                                                    id="imageInput" name="image"
                                                    onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" /><span class="ace-file-container"
                                                    data-title="Choose Activitie Image..."><span class="ace-file-name"
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
                                        alt="Activitie Image">
                                </label>
                            </span>
                            @error('image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn btn-info">
                            <i class="ace-icon fa fa-check bigger-110"></i>
                            Create
                        </button>
                    </div>
                </div>
                </form>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.page-content -->
</div>
@endsection
