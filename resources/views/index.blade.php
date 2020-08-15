@extends('layouts.master')
@section('head')
<title>nCovAfrica</title>
    
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&display=swap" />
    <link rel="stylesheet" href="{{ asset('css/home.css')}}" />
    
    
  	
    @endsection


@section('content')
  <div class="present">
      <div class="alert">
        <img class="alert__icon" src="./images/corona/exclamation.svg" alt="">
        <span>Covid-19 Alert</span>
      </div>
    <h1 class="title" style="font-size: 76px;
    font-family: cursive;
    color: grey;">Restez chez vous</h1>
    <p class="paragraph">
      La COVID-19 est la maladie infectieuse causée par le dernier coronavirus qui a été découvert. Ce nouveau virus et cette maladie étaient inconnus avant l’apparition de la flambée à Wuhan (Chine) en décembre 2019. 
      La COVID-19 est maintenant pandémique et touche de nombreux pays dans le monde.
    </p>
  </div>
  
<div class="banner">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
      <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="./images/corona/covid.svg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./images/corona/covidhero.svg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./images/corona/graphic-hero.svg" alt="Third slide">
          </div>
      </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div></div>
            <div class="bottom-info" style="font-family: cursive;">
                <div class="bottom-list">
                    <div class="list-box">
                        <div class="list-box__count" style="color: darkgray; font-size: 44px;    font-family: cursive;   margin-top: -16%;">Covid-19 en Afrique</div>
                    </div>
                </div>

          <div class="bottom-list">
            <div class="list-box">
              <div class="list-box__count">54</div>
              <div class="list-box__text">Pays touché</div>
            </div>
            <span class="line"></span>
            <div class="list-box">
              <div class="list-box__count" style="    color: #FFA832;">{{$africa["cases"]["total"]}}</div>
              <div class="list-box__text"> Confirmés</div>
            </div>
            <span class="line"></span>
            <div class="list-box">
              <div class="list-box__count" style="color: #35aa14e8;">{{$africa["cases"]["recovered"]}}</div>
              <div class="list-box__text">Guérisons</div>
            </div>
            <span class="line"></span>
            <div class="list-box">
              <div class="list-box__count">{{$africa["deaths"]["total"]}}</div>
              <div class="list-box__text">Décès</div>
            </div>
          </div>
        </div>
        <svg class="shape"><use href="./images/corona/shape-1.svg"></use></svg>
      </div></div>
      @endsection