@extends('back.layouts.master')
@section('title') Aktif - Pasif Değiştir @endsection
@section('content')
    <div class="d-flex flex-lg-row flex-column justify-content-around align-items-center px-3">
        <div class="col-12 col-lg-5 border rounded pt-3 mb-3 mb-lg-0">
            <div class="d-flex flex-column flex-sm-row align-items-center align-items-sm-end">
                <h4 class="">Pasif Kullanıcılar</h4>
                <small style="font-size: 10px;" class="pb-1 font-small">{{count($passiveUsers)}} adet kayıt bulundu</small>
            </div>
            <form class="d-flex flex-sm-row flex-column align-items-center justify-content-center pb-2" method="POST" action="{{route('back.superAdmin.changeUserActivePassivePost')}}">
                @csrf
                <input type="hidden" name="type" value="passive">
                <div class="d-flex flex-sm-row flex-column align-items-center flex-grow-1 m-2 sm-0">
                    <label for="selectedPassiveUser" class="m-2 mr-2 m-sm-0 mr-sm-2">Kullanıcı: </label>
                    <select class="selectedPassiveUser " name="selectedPassiveUser" id="selectedPassiveUser">
                        @foreach($passiveUsers as $passive)
                            <option value="{{$passive->id}}">{{$passive->email}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-dark ml-2">Aktif Yap</button>
            </form>
        </div>
        <div class="col-12 col-lg-5 border rounded pt-3 mb-3 mb-lg-0">
            <div class="d-flex flex-column flex-sm-row align-items-center align-items-sm-end">
                <h4 class="">Aktif Kullanıcılar</h4>
                <small style="font-size: 10px;" class="pb-1 font-small">{{count($activeUsers)}} adet kayıt bulundu</small>
            </div>
            <form class="d-flex flex-sm-row flex-column align-items-center justify-content-center pb-2"  method="POST" action="{{route('back.superAdmin.changeUserActivePassivePost')}}">
                @csrf
                <input type="hidden" name="type" value="active">
                <div class="d-flex flex-sm-row flex-column align-items-center flex-grow-1 m-2 sm-0">
                    <label for="selectedActiveUser" class="m-2 mr-2 m-sm-0 mr-sm-2">Kullanıcı: </label>
                    <select class="selectedActiveUser " name="selectedActiveUser" id="selectedActiveUser">
                        @foreach($activeUsers as $active)
                            <option value="{{$active->id}}">{{$active->email}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-dark ml-2">Pasif Yap</button>
            </form>
        </div>
    </div>
@endsection

@section('customPageCss')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        .select2{
            width: 100% !important;
        }
    </style>
@endsection

@section('customPageJs')

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#flash-overlay-modal').modal();
            $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
            $('.selectedPassiveUser').select2();
            $('.selectedActiveUser').select2();
        });
    </script>
@endsection
