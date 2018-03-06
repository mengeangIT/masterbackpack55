@extends('ms.layout.front')
@section('title', 'AddressBookPage')
@section('url'){{url('/customer/address-book')}}@endsection
@section('sharefb'){{url('https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.mastersukisoup.com%2Fcustomer%2Faddress-book')}}@endsection
@section('layout-id')
    <div id="addressbook">
        @endsection
        @section('content')
            <div class="container">
                @if(!is_m())
                    <div class="row hidden-md-down">
                        <div class="col-xs-12">
                            <div class="breadcrumbList">
                                <ul class="breadcrumb">
                                    <li><a href="{{url('/home')}}">Home</a></li>
                                    <li class="active">{{_t('Address Book')}}</li>
                                </ul>
                            </div>
                            <div class="titleText">
                                <div class="textHeaderNoImg">
                                    <div class="linegray">
                                        <h2>{{_t('Address Book')}}</h2>

                                        <div class="iconAddressBook"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="redbox"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="row hidden-lg-up">
                        <h1 class="textHeaderMobile"> {{_t('Address Book')}}</h1>
                    </div>
                @endif
            </div>
            <div class="dataAddressBook">
                <div class="addressbookBox  primaryAddressBox ">
                    <div class="headerAddressBox ">
                        <div class="titleAddressBox">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="titleAddress">
                                            <div class="row">
                                                <div class="col-xs-10">
                                                    <h4 class="fontgreen  fontred " id="infoAddressBookData_addressname">{{_t('Primary Address')}}</h4>
                                                </div>
                                                <div class="col-xs-2">
                                                    <a class="btnEdit btnEditPrimary" href="javascript:void(0)">{{_t('Edit')}}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script type="text/javascript">
                        $(document).ready(function () {
                            $(".btnEdit").click(function () {
                                $(".formAddressNewBox").toggle("slide", { direction: "left" }, 1000);
                            });
                            $(".btnBack").click(function () {
                                $('.formAddressNewBox').hide();
                            });
                        });
                    </script>
                    <div class="detailAddressBox">
                        <div class="container">
                            <div class="row ">
                                <div class="col-xs-12">
                                    <div class="dataAddress">
                                        <table class="dataAddressList">
                                            <tr>
                                                <td class="titleAddressBookData">{{_t('Mobile Number')}}</td>
                                                <td class="semicolonAddressBookData">:</td>
                                                <td class="infoAddressBookData" id="infoAddressBookData_name">{{$customer->phone}}</td>
                                            </tr>
                                            <tr>
                                                <td class="titleAddressBookData">{{_t('Eamil')}}</td>
                                                <td class="semicolonAddressBookData">:</td>
                                                <td class="infoAddressBookData" id="infoAddressBookData_name">{{$customer->email}}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="formAddressNewBox">
                <div class="container">
                    <div class="addressbookForm">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="addDataAddress">
                                    @if (count($errors) > 0)
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form class="form-horizontal" action="{{url('/customer/post-address-book')}}" enctype="multipart/form-data" method="POST">
                                        {{ csrf_field() }}

                                        <input type="hidden" id="{{'id',$customer->id}}">

                                        <div class="addDataTitle">
                                            <div class="form-group row">
                                                <label class="form-control-label p-r-0 hidden-xs-down col-sm-4 col-md-2 fontred" for="inputAddressName">{{_t('Mobile Number')}} <span class="fontred">*</span> <span class="semicolonBox pull-right">:</span></label>
                                                <div class="col-md-4 col-sm-8 col-xs-12">
                                                    <input type="text" name="phone" value="{{$customer->phone}}" class="form-control" id="inputAddressName" placeholder="Address Name">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="addDataTitle">
                                            <div class="form-group row">
                                                <label class="form-control-label p-r-0 hidden-xs-down col-sm-4 col-md-2 fontred" for="inputAddressName">{{_t('Email')}} <span class="fontred">*</span> <span class="semicolonBox pull-right">:</span></label>
                                                <div class="col-md-4 col-sm-8 col-xs-12">
                                                    <input type="email" name="email" value="{{$customer->email}}" class="form-control" id="inputAddressName" placeholder="Address Name">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="addDataAddressDetail">


                                            <div class="directionAndButtonBox">
                                                <div class="form-group row">
                                                    <div class="btnBackNext col-xs-12 col-xs-offset-0 col-sm-10 col-sm-offset-2">
                                                        <button  type="button" class="btnBack btnBackResponsiveMedium">Cancel</button>
                                                        <button type="submit" class="btnSave btnRedResponsiveMedium">{{_t('Save')}}</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
        @section('layout-id-close')
    </div>
@endsection
@section('script')
    @parent

@endsection