@extends('back.layouts.master')
@section('title') Slider Güncelle @endsection
@section('content')

    <a href="{{route('back.slider.index')}}" class="btn btn-dark"><i class="fas fa-angle-left"></i></a>

    <div class="row">
        <div class="col-12 d-flex justify-content-center align-items-center ">
            <form action="{{route('back.slider.update')}}" method="POST" class="w-50" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="sliderImageId" value="{{$sliderImage->id}}"/>
                <div class="form-group">
                    <label for="sliderMainText">Slider Ana Metni</label>
                    <textarea id="summernote" name="sliderMainText">{{$sliderImage->sliderMainText}}</textarea>
                </div>
                <div class="form-group">
                    <label for="sliderSubText">Slider İkinci Metni</label>
                    <input type="text" placeholder="Slider İkinci Metni" id="sliderSubText" name="sliderSubText" class="form-control" value="{{$sliderImage->sliderSubText}}">
                </div>
                <div class="form-group">
                    <label for="sliderButtonLink">Slider Buton Linki</label>
                    <input type="text" placeholder="Slider Buton Linki" id="sliderButtonLink" name="sliderButtonLink" class="form-control" value="{{$sliderImage->sliderButtonLink}}">
                </div>
                <div class="form-group d-flex flex-column">
                    <label>Slider image</label>
                    <input type="hidden" name="oldImageValue" value="{{$sliderImage->photoPath}}" />
                    <input type="file" name="sliderNewImage" class="form-control mb-2"/>
                    <img src="{{asset($sliderImage->photoPath)}}" width="450px" alt=""/>
                </div>
                <button type="submit" class="btn btn-dark w-100">Güncelle</button>
            </form>
        </div>
    </div>

@endsection

@section('customPageCss')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endsection

@section('customPageJs')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script>
        $('#summernote').summernote({
            placeholder: 'Slider Ana Metni',
            tabsize: 2,
            height: 150,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
                ['color', ['color']],
            ]
        });
    </script>
@endsection
