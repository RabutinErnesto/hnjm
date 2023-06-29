@extends('layouts.newfront')
@section('content')
{{-- <div class="container-xxl py-5">
    <div class="container">
        @if ($photo->isNotEmpty())
        <div class="row g-4">
            @foreach ($photo as $item)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item bg-light rounded h-100 p-5">
                    <img src="../back/photos/{{ $item->photo }}" alt="" class="img-fluid">
                    <br> <br>
                    <span>{{ $item->commentaire }}</span>
                   <!-- <a class="btn" href="{{ route('photo.show', $item) }}"><i class="fa fa-plus text-primary me-3"></i>Read More</a> -->
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block border rounded-pill py-1 px-4">Pas de photos</p>
        </div>
        @endif
    </div>
</div> --}}

<div class="container-fluid pt-5">
    <div class="container pb-3">
        <div class="text-center pb-2">
            <p class="section-title px-5"><span class="px-2">Photos</span></p>
        </div>
        @if ($photo->isNotEmpty())
        <div class="row">
            @foreach ($congre as $item)
            <div class="col-lg-4 col-md-6 pb-1">
                <a href="{{ route('congre.show', $item) }}">
                <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                    <i class="flaticon-050-fence h1 font-weight-normal text-primary mb-3"></i>
                    <div class="pl-4">
                        <img src="../back/photos/{{ $item->photo }}" alt="" class="img-fluid">
                        <p class="m-0">{{ $item->commentaire }}</p>
                    </div>
                </div></a>
            </div>

            @endforeach
        </div>
        @else
        <div class="text-center mx-auto mb-5" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block border rounded-pill py-1 px-4">Pas de Photos</p>
        </div>
        @endif
    </div>
</div>
@endsection
