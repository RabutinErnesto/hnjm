@extends('layouts.newfront')
@section('content')
{{-- <div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <p class="section-title px-5"><span class="px-2">Résumé Congrès</span></p>
        </div>

		<div class="row row-cards row-deck" >
            @foreach ($congre as $item)
            <div class="col-lg-6" style="padding: 2%">
                  <div class="card card-aside">
                    <a href="#" class="card-aside-column"></a>
                    <div class="card-body d-flex flex-column">
                          <h4><a href="{{ route('congre.show', $item) }}">{{ $item->titre }}</a></h4>
                          <div class="d-flex align-items-center pt-5 mt-auto">
                            <div>
                                <p  class="text-default" name="a">{{ implode($item->auteur()->get()->pluck('nom')->toArray()) }} {{ implode($item->auteur()->get()->pluck('prenom')->toArray()) }}</p>

                            </div>

                          </div>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>


	</div>
</div> --}}


<div class="container-fluid pt-5">
    <div class="container pb-3">
        <div class="text-center pb-2">
            <p class="section-title px-5"><span class="px-2">Résumé Congrès</span></p>
        </div>
        <div class="row">
            @foreach ($congre as $item)
            <div class="col-lg-4 col-md-6 pb-1">
                <a href="{{ route('congre.show', $item) }}">
                <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                    <i class="flaticon-050-fence h1 font-weight-normal text-primary mb-3"></i>
                    <div class="pl-4">
                        <h4>{{ $item->titre }}</h4>
                        <p class="m-0">{{ implode($item->auteur()->get()->pluck('nom')->toArray()) }} {{ implode($item->auteur()->get()->pluck('prenom')->toArray()) }}</p>
                    </div>
                </div></a>
            </div>

            @endforeach
        </div>
    </div>
</div>
@endsection

