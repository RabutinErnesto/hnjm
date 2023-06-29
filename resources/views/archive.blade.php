@extends('layouts.newfront')
@section('content')
<!--
<div class="my-3 my-md-5">
    <div class="container">
        <div class="page-header">
          <h4 class="page-title">
                ARCHIVES
          </h4>
        </div>
        @foreach($data as $item => $collapse)
        <div class="row row-cards row-deck">
            <div class="card-header btn-light"  href="#collapse">
                <a class="btn" data-toggle="collapse" href="#{{ $item }}" role="button" aria-expanded="false" aria-controls="{{ $item }}">
                   <h5 class="mb-0">
                            <span >
                                {{ $item }} ({{ $collapse->count() }})
                            </span>
                          </h5></a>

            </div>
                <div  class="collapse" id="{{ $item }}">
                    <div class="card-body">
                        <table class="table">
                            <thead class="thead-light">
                              <tr>
                                <th scope="col">NOM DU 1ER AUTEUR</th>
                                <th scope="col">TITRE</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($collapse as $rev)
                              <tr>
                                  <th scope="row">{{ implode($rev->auteur()->get()->pluck('nom')->toArray()) }} {{ implode($rev->auteur()->get()->pluck('prenom')->toArray()) }}</th>
                                  <td><a href="{{ route('revue.show', $rev) }}">{{ $rev->titre }}</a></td>
                                </tr>
                                @endforeach
                             </tbody>
                        </table>
                    </div>
                </div>
        </div> <br>
        @endforeach


    </div>
</div>
-->

<div class="container-fluid pt-5">
    <div class="container pb-3">
        <div class="text-center pb-2">
            <p class="section-title px-5"><span class="px-2">Archives</span></p>
        </div>
        @foreach ($data as $item => $collapse)
        <div class="row">
            <div class="col-lg-12 col-md-6 pb-1">
                <a class="collapsed" data-toggle="collapse" data-target="#{{ $item }}" aria-expanded="false">
                    <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                        <div class="pl-4">
                            <h4>{{$item}} <strong style="margin-left: 20px;"> ({{ $collapse->count() }})</strong></h4>
                        </div>
                    </div>
                </a>
            </div>

            <div class="collapse col-lg-12" id="{{ $item }}">
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">NOM DU 1ER AUTEUR</th>
                                <th scope="col">TITRE</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($collapse as $rev)
                                <tr>
                                    <td>{{ implode($rev->auteur()->get()->pluck('nom')->toArray()) }} {{ implode($rev->auteur()->get()->pluck('prenom')->toArray()) }}</td>
                                    <td><a href="{{ route('revue.show', $rev) }}">{{ $rev->titre }}</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
