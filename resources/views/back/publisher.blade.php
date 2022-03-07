@extends('back.layouts.master')
@section('title') Yayıncı @endsection
@section('content')
    <div class="d-flex flex-lg-row flex-column justify-content-around align-items-center px-3">
        <div class="col-12 col-lg-5 border rounded pt-3 mb-3 mb-lg-0">
            <div class="d-flex flex-column flex-sm-row align-items-center align-items-sm-end">
                <h4 class="">Yayıncı Ekle</h4>
            </div>
            <form class="d-flex flex-sm-row flex-column align-items-center justify-content-center pb-2" method="POST" action="{{route('back.storePublisher')}}">
                <div class="w-100 d-flex flex-row align-items-center">
                    <label for="publisherName" class="m-0"></label>
                    <input type="text" class="form-control" name="publisherName" id="publisherName" placeholder="Yayıncı ismi...">
                </div>
                <div class="ml-3">
                    <button type="submit" class="btn btn-dark">Ekle</button>
                </div>
            </form>
        </div>
        <div class="col-12 col-lg-5 border rounded pt-3 mb-3 mb-lg-0">
            <div class="d-flex flex-column flex-sm-row align-items-center align-items-sm-end">
                <h4 class="">Yayıncı Sil</h4>
            </div>
            <form class="d-flex flex-sm-row flex-column align-items-center justify-content-center pb-2"  method="POST" action="{{route('back.superAdmin.changeUserAuthority')}}">
            </form>
        </div>
    </div>
@endsection
