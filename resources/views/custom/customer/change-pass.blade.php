@extends('backpack::layout')

@section('header')
    <section class="content-header">
        <h1>
            HO BC Register Form
            {{--<small>{{ trans('backpack::base.first_page_you_see') }}</small>--}}
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url("bcf/") }}">User Account</a></li>
            <li class="active">Head Office Business Card</li>
        </ol>
    </section>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ url('admin/customer/change-pass') }}" method="post" enctype="multipart/form-data">
                {!! csrf_field() !!}
                {!! method_field('PATCH') !!}
                <input type="hidden" name="id" value="{{ $row->id }}">
                <div class="box">
                    <div class="box-body row">
                    <div class="form-group col-md-12">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required="required">
                    </div>

                    <div class="form-group col-md-12">
                        <label>Password Confirm</label>
                        <input type="password" name="password_confirmation" class="form-control"  required="required">
                    </div>
                    </div>

                    <div class="box-footer">

                        <div id="saveActions" class="form-group">

                            <div class="btn-group">

                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save" role="presentation" aria-hidden="true"></span> &nbsp;
                                    <span data-value="save_and_back">Save and back</span>
                                </button>

                            </div>
                        </div>
                    </div><!-- /.box-footer-->
                </div>
            </form>
        </div>
    </div>
@endsection