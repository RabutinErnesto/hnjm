@extends('layouts.newfront')
@section('content')
{{-- <div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <p class="section-title px-5"><span class="px-2">Congrès</span></p>
        </div>
        <div class="page-header">
            <h2 class="page-title">{{ $congre->titre }}</h2>
            <h4>{{ $congre->date_congre }}</h4><br>
          </div>
        <div class="row">
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-body ">
                        <a href=""><span>{!! implode($congre->auteur()->get()->pluck('nom')->toArray()) !!}
                            {!! implode($congre->auteur()->get()->pluck('prenom')->toArray()) !!}</span></a>
                        <div style="padding-top: 5%"> {!! $congre->contenue !!}</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <a href="" class="btn btn-block btn-primary mb-12 col-12">
                  <i class="fa fa-download mr-2">  Telecharger en pdf</i>
                </a>

                <div class="list-group list-group-transparent mb-0 ">
                    <br>
                  <a href="#" class="list-group-item list-group-item-action active text-center"><i class="fa fa-flag mr-2 "> </i> Autres congres</a>
                </div>
                <div class="list-group list-group-transparent mb-0">
                    @foreach ($all as $item)
                    <a href="{{ route('congre.show', $item) }}" class="list-group-item list-group-item-action"><span style="font-size:10.0pt">{{ $item->titre }}</span>  </a>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</div> --}}

<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <p class="section-title px-5"><span class="px-2">Congrès</span></p>
            <h4 class="mb-4">{{ $congre->titre }} ({{ $congre->date_congre }})</h4>

        </div>
        <div class="row">
            <div class="col-lg-8 mb-5">
                <div class="card border-0 bg-light shadow-sm pb-2">
                    <div class="card-body text-center">
                        <span>{!! implode($congre->auteur()->get()->pluck('nom')->toArray()) !!}
                            {!! implode($congre->auteur()->get()->pluck('prenom')->toArray()) !!}</span>
                        <p class="card-text">{!! $congre->contenue !!}</p>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 ">
                        <a  href=" ../back/fichier/{{ $congre->fichier}}" class="btn btn-primary shadow-sm col-12"><i class="fa fa-download"></i>  Télécharger en pdf</a>
                    <hr>

                    <h6  class="text-center"><i class="fa fa-flag"> </i> Autres Congrès</h6>
                    @foreach ($all as $item)
                    <a href="{{ route('congre.show', $item) }}" class="list-group-item list-group-item-action text-center shadow-sm"><span style="font-size:10.0pt">{{ $item->titre }}</span>  </a>
                    @endforeach
                    <br>
                    <h6>{{ $all->links('vendor.pagination.bootstrap-4') }}</h6>


            </div>
        </div>
    </div>
</div>

@endsection
