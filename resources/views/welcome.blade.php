@extends('layouts.newfront')

@section('content')

<!--
<div class="my-3 my-md-5">
<div class="container">
    <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <div class="text-wrap p-lg-6">
            <table border="0" cellpadding="1" cellspacing="1" style="width:100%">
<tbody>
<tr>
    <td style="text-align:center"><img alt="" src="{{ asset('front/img/head.png') }}" style="height:84px; width:650px"></td>
</tr>
</tbody>
</table>
<br>
<p>Rédacteur en Chef : Pr RAZAFINDRABE JAB</p>

<p>Secrétaire Général : Dr BEMORA JS</p>

<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px"><span style="color:#e67e22">Organe de&nbsp; publication&nbsp; de:</span></div>
<br><br>
<table align="center" border="0" style="width:100%;">
<tbody>
<tr>
    <td align="center">
    <h4><strong>La Société Malgache de Neurochirurgie</strong></h4>
    </td>
    <td align="center">
    <h4><strong>La Société de Chirurgie Maxillo-Faciale de Madagascar</strong></h4>
    </td>
</tr>
<tr>
    <td style="text-align:center"><img alt="" src="{{ asset('front/img/neuro.png') }}" style="height:120px; width:104px"></td>
    <td style="text-align:center"><img alt="" src="{{ asset('front/img/scmm.png') }}" style="height:84px; width:100px"></td>
</tr>
<tr>
    <td align="center">Président: Pr ANDRIAMAMONJY Clément</td>
    <td align="center">Président: Pr RAZAFINDRABE John Alberto Bam</td>
</tr>
<tr>
    <td align="center">
    <h4 style="margin-top: 5%"><strong>La Société Malgache d’Ophtalmologie</strong></h4>
    </td>
    <td align="center">
    <h4 style="margin-top: 5%"><strong>La Société Malgache d’Otho-Rhino-Laryngologie</strong></h4>
    </td>
</tr>

<tr>
    <td style="text-align:center"><img alt="" src="{{ asset('front/img/ophtalmo.png') }}" style="height:100px; width:100px"></td>
    <td style="text-align:center"><img alt="" src="{{ asset('front/img/orl.png') }}" style="height:65px; width:89px"></td>
</tr>
<tr>
    <td align="center">Président: Pr ANDRIANTSOA Rasoavelonoro Violette</td>
    <td align="center">Président: Pr RAKOTO Fanomezantsoa Andriamparany</td>
</tr>
</tbody>
</table>
<br><br>
<p style="text-align:justify">Le journal publie des articles issus de différents auteurs (Nationaux et Internationaux), avec une parution de deux fois par an</p>

<p style="text-align:justify">L’HNJM accepte les manuscrits de recherche clinique ou fondamentale ayant trait au moins à l’une de spécialités suivantes : Neurochirurgie, ORL, Ophtalmologie, Chirurgie Maxillofaciale et Stomatologie. Les articles originaux, les cas cliniques et les articles pédagogiques sont acceptés pourune&nbsp;&nbsp;éventuelle publication .</p>

<p style="text-align:justify">Après soumission de l’article, l’auteur aura une réponse (acceptation sans modification/ acceptation avec modification/ rejet) dans un délai de 03 mois.</p>
                                </div>
          </div>
        </div>
    </div>
</div>
</div>
-->

   <!-- Header Start -->
   <div class="container-fluid bg-primary px-0 px-md-5 mb-5">
    <div class="row align-items-center px-3">
        <div class="col-lg-6 text-center text-lg-left">
            <h4 class="text-white mb-4 mt-5 mt-lg-0"></h4>
            <h1 class="display-3 font-weight-bold text-white">Head and Neck Journal of Madagascar</h1>
            <p class="text-white mb-4">Sea ipsum kasd eirmod kasd magna, est sea et diam ipsum est amet sed sit.
                Ipsum dolor no justo dolor et, lorem ut dolor erat dolore sed ipsum at ipsum nonumy amet. Clita
                lorem dolore sed stet et est justo dolore.</p>
        </div>
        <div class="col-lg-6 text-center text-lg-right">

        </div>
    </div>
</div>
<!-- Header End -->



 <!-- Team Start -->
 <div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-4">
            <img src="{{asset('front/img/head.png')}}" class="col-8  img-fluid" alt="">
        </div>

        <div class="text-center pb-2">
            <p class="section-title px-5"><span class="px-2">Rédacteur en Chef : Pr RAZAFINDRABE JAB </span></p>
          <br>  <p class="section-title px-5"><span class="px-2">Secrétaire Général : Dr BEMORA JS</span></p>
        </div>

        <p>Organe de  publication  de:</p>
        <div class="row">
            <div class="col-md-6 col-lg-3 text-center team mb-5">
                <div class="position-relative overflow-hidden mb-4">
                    <img class="img-fluid" src="{{asset('front/img/neuro.png')}}" alt="" style="height: 100px; width: 100px;">
                </div>
                <h4>La Société Malgache de Neurochirurgie</h4>
                <i>Président : Pr ANDRIAMAMONJY Clément</i>
            </div>
            <div class="col-md-6 col-lg-3 text-center team mb-5">
                <div class="position-relative overflow-hidden mb-4">
                    <img class="img-fluid" src="{{asset('front/img/ophtalmo.png')}}" alt="" style="height: 100px; width: 100px;" >
                </div>
                <h4>La Société Malgache d’Ophtalmologie</h4>
                <i>Président : Pr ANDRIANTSOA Rasoavelonoro Violette</i>
            </div>
            <div class="col-md-6 col-lg-3 text-center team mb-5">
                <div class="position-relative overflow-hidden mb-4">
                    <img class="img-fluid" src="{{asset('front/img/scmm.png')}}" alt="" style="height: 100px; width: 100px;">
                </div>
                <h4>La Société de Chirurgie Maxillo-Faciale de Madagascar</h4>
                <i>Président : Pr RAZAFINDRABE John Alberto Bam</i>
            </div>
            <div class="col-md-6 col-lg-3 text-center team mb-5">
                <div class="position-relative overflow-hidden mb-4">
                    <img class="img-fluid" src="{{asset('front/img/orl.png')}}" alt="" style="height: 100px; width: 100px;">
                </div>
                <h4>La Société Malgache d’Otho-Rhino-Laryngologie</h4>
                <i>Président : Pr RAKOTO Fanomezantsoa Andriamparany</i>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-12">
                    <p>Le journal publie des articles issus de différents auteurs (Nationaux et Internationaux), avec une parution de deux fois par an. <br>

                        L’HNJM accepte les manuscrits de recherche clinique ou fondamentale ayant trait au moins à l’une de spécialités suivantes : Neurochirurgie, ORL, Ophtalmologie, Chirurgie Maxillofaciale et Stomatologie. Les articles originaux, les cas cliniques et les articles pédagogiques sont acceptés pourune  éventuelle publication . <br>

                        Après soumission de l’article, l’auteur aura une réponse (acceptation sans modification/ acceptation avec modification/ rejet) dans un délai de 03 mois.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

@endsection
