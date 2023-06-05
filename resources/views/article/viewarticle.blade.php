@extends('layouts.newfront')
@section('content')
<!--
<div class="my-3 my-md-5">
    <div class="container">
        <div class="page-header">
            <h2 class="page-title">{{ $revue->titre }}</h2><br>
          </div>
        <div class="row">
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-body ">

                            {!! $revue->description !!}

                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <a href=" ../back/fichier/{{ $revue->fichier}}" class="btn btn-block btn-primary mb-12 col-12">
                  <i class="fa fa-download mr-2">  Télécharger en pdf</i>
                </a>

                <div class="list-group list-group-transparent mb-2 mt-4 ">
                  <a href="#" class="list-group-item list-group-item-action  text-center"><i class="fa fa-flag mr-2 "> </i> Autres revues</a>
                </div>
                <div class="list-group list-group-transparent mb-0">
                    @foreach ($all as $item)
                    <a href="{{ route('revue.show', $item) }}" class="list-group-item list-group-item-action text-center"><span style="font-size:10.0pt">{{ $item->titre }}</span>  </a>
                    @endforeach
                </div>
                <div class="mt-3"> <small>{{ $all->links() }}</small> </div>

            </div>
        </div>
    </div>
</div>
-->

<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <p class="section-title px-5"><span class="px-2">Archives</span></p>
            <h4 class="mb-4">{{ $revue->titre }}</h4>
        </div>
        <div class="row">
            <div class="col-lg-8 mb-5">
                <div class="card border-0 bg-light shadow-sm pb-2">
                    <div class="card-body text-center">
                        <p class="card-text">{!! $revue->description !!}</p>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 ">
                        <a  href=" ../back/fichier/{{ $revue->fichier}}" class="btn btn-primary shadow-sm col-12"><i class="fa fa-download"></i>  Télécharger en pdf</a>
                    <hr>

                    <h6  class="text-center"><i class="fa fa-flag"> </i> Autres revues</h6>
                    @foreach ($all as $item)
                    <a href="{{ route('revue.show', $item) }}" class="list-group-item list-group-item-action text-center shadow-sm"><span style="font-size:10.0pt">{{ $item->titre }}</span>  </a>
                    @endforeach
                    <br>
                    <h6>{{ $all->links('vendor.pagination.bootstrap-4') }}</h6>


            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@endsection
