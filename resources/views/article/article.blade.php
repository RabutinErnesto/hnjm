@extends('layouts.newfront')
@section('content')
<!--
<div class="my-3 my-md-5">
	<div class="container">
		<div class="page-header">
		  <h4 class="page-title m-xl-2">
			ARTICLE IN PRESS
		  </h4>
		</div>



		<div class="row row-cards row-deck" >
            @foreach ($re as $item )
            <div class="col-lg-6" style="padding: 2%">
                  <div class="card card-aside">
                    <a href=""  class="card-aside-column" style="background-image: url('')"></a>
                    <div class="card-body d-flex flex-column">
                        <h6 class="d-inline"> Titre :  <a href="{{ route('revue.show', $item) }}">{{ $item->titre }}</a></h6>

                        <div class="d-flex align-items-center pt-2 mt-auto">
                            <div>

                              <h6>Auteur principal :  <a href="{{ route('revue.show', $item) }}" class="text-secondary">{{ implode(',', $item->auteur()->get()->pluck('nom')->toArray()) }} {{ implode(',', $item->auteur()->get()->pluck('prenom')->toArray()) }}</a>      </h6>

                          </div>
                        </div>



                    </div>
                  </div>
            </div>
            @endforeach
            {{ $re->links() }}
        </div>


	</div>
</div>
-->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <p class="section-title px-5"><span class="px-2">Article in press</span></p>
        </div>
        <div class="row">
            @foreach ($re as $item )
            <div class="col-lg-6 mb-5">
                <div class="card border-0 bg-light shadow-sm pb-2">
                    <div class="card-body">
                        <h6 class="card-title"><strong>Titre :  </strong>{{ $item->titre }}</h6>
                        <p class="card-text"> <strong>Auteur principal : </strong> {{ implode(',', $item->auteur()->get()->pluck('nom')->toArray()) }} {{ implode(',', $item->auteur()->get()->pluck('prenom')->toArray()) }}</p>
                    </div>
                    <a href="{{ route('revue.show', $item) }}" class="btn btn-primary px-4 mx-4 mb-4">Voir</a>
                </div>
            </div>
            @endforeach
            <br>
            <h6>{{ $re->links('vendor.pagination.bootstrap-4') }}</h6>
        </div>
    </div>
</div>


@endsection
