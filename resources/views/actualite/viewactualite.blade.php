@extends('layouts.newfront')
@section('content')
<!--
<div class="my-3 my-md-5">
    <div class="container">
        <div class="page-header">
            <h2 class="page-title">{{ $actualite->titre }}</h2>
            <h4></h4><br>
          </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body ">
                        <div style="padding-top: 5%"> {!! $actualite->description !!}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

-->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center pb-2">
            <p class="section-title px-5"><span class="px-2">Actualites</span></p>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-12 mb-5 mb-lg-0">
                <h1 class="mb-4">{{ $actualite->titre }}</h1>
                <p>{!! $actualite->description !!}</p>
            </div>
        </div>
    </div>
</div>

@endsection
