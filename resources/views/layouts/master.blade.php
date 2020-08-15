<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('css/home.css')}}" />
    

    @yield('head')
</head>
<body>
  <div class="main">
    <div class="main-nav">
        <a href="/" class="menu__link">
          <div class="logo">
          <!-- <svg class="logo__icon">
              <use href="./assets/corona/corona.svg"></use>
            </svg>-->
            <img class="logo__icon" src="./images/corona/map.png" alt="">
            <h1 style="font-family: cursive;">nCovAfrica</h1>
          </div>
        </a>
      <div class="menu">
        <ul class="menu__list">
          <li class="menu__item"><a href="/" class="menu__link" >Accueil</a></li>
          <li class="menu__item" id="statis2"><a href="statistics" class="menu__link" >Statistiques</a>
            <div  class="btn-group btn-group-sm dropdown" aria-label="Button group with nested dropdown">
              
            <button type="button" id="statis3" class="btn  dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">	
              <a class="dropdown-item" href="countries?country=Morocco" title="Maroc"><span class="flag-icon flag-icon-ma"></span></a>
              <a class="dropdown-item" href="countries?country=South-Africa" title="Afrique du Sud"><span class="flag-icon flag-icon-za "></span></a>
              <a class="dropdown-item" href="countries?country=Algeria" title="Algérie"><span class="flag-icon flag-icon-dz"></span></a>
              <a class="dropdown-item" href="countries?country=Angola" title="Angola"><span class="flag-icon flag-icon-ao"></span></a>
              <a class="dropdown-item" href="countries?country=Benin" title="Bénin"><span class="flag-icon flag-icon-bj"></span></a>
              <a class="dropdown-item" href="countries?country=Botswana" title="Botswana"><span class="flag-icon flag-icon-bw"></span></a>
              <a class="dropdown-item" href="countries?country=Burkina-Faso" title="Burkina Faso"><span class="flag-icon flag-icon-bf"></span></a>
              <a class="dropdown-item" href="countries?country=Burundi" title="Burundi"><span class="flag-icon flag-icon-bi"></span></a>
              <a class="dropdown-item" href="countries?country=Cameroon" title="Cameroon"><span class="flag-icon flag-icon-cm"></span></a>
              <a class="dropdown-item" href="countries?country=Cabo-Verde" title="Cap-Vert"><span class="flag-icon flag-icon-cv"></span></a>
              <a class="dropdown-item" href="countries?country=CAR" title="République centrafricaine"><span class="flag-icon flag-icon-cf"></span></a>
              <a class="dropdown-item" href="countries?country=Comoros" title="Comores"><span class="flag-icon flag-icon-km"></span></a>
              <a class="dropdown-item" href="countries?country=Congo" title="République du Congo"><span class="flag-icon flag-icon-cg"></span></a>
              <a class="dropdown-item" href="countries?country=DRC" title="République démocratique du Congo"><span class="flag-icon flag-icon-cd"></span></a>
              <a class="dropdown-item" href="countries?country=Ivory-Coast" title="Côte d’Ivoire"><span class="flag-icon flag-icon-ci"></span></a>
              <a class="dropdown-item" href="countries?country=Djibouti" title="Djibouti"><span class="flag-icon flag-icon-dj"></span></a>
              <a class="dropdown-item" href="countries?country=Egypt" title="Égypte"><span class="flag-icon flag-icon-eg"></span></a>
              <a class="dropdown-item" href="countries?country=Eritrea" title="Érythrée"><span class="flag-icon flag-icon-er"></span></a>
              <a class="dropdown-item" href="countries?country=Eswatini" title="Eswatini"><span class="flag-icon flag-icon-sz"></span></a>
              <a class="dropdown-item" href="countries?country=Ethiopia" title="Éthiopie"><span class="flag-icon flag-icon-et"></span></a>
              <a class="dropdown-item" href="countries?country=Gabon" title="Gabon"><span class="flag-icon flag-icon-ga"></span></a>
              <a class="dropdown-item" href="countries?country=Gambia" title="Gambie"><span class="flag-icon flag-icon-gm"></span></a>
              <a class="dropdown-item" href="countries?country=Ghana" title="Ghana"><span class="flag-icon flag-icon-gh"></span></a>
              <a class="dropdown-item" href="countries?country=Guinea" title="Guinée"><span class="flag-icon flag-icon-gn"></span></a>
              <a class="dropdown-item" href="countries?country=Guinea-Bissau" title="Guinée-Bissau"><span class="flag-icon flag-icon-gw"></span></a>
              <a class="dropdown-item" href="countries?country=Kenya" title="Kenya"><span class="flag-icon flag-icon-ke"></span></a>
              <a class="dropdown-item" href="countries?country=Lesotho" title="Lesotho"><span class="flag-icon flag-icon-ls"></span></a>
              <a class="dropdown-item" href="countries?country=Liberia" title="Liberia"><span class="flag-icon flag-icon-lr"></span></a>
              <a class="dropdown-item" href="countries?country=Libya" title="Libye"><span class="flag-icon flag-icon-ly"></span></a>
              <a class="dropdown-item" href="countries?country=Madagascar" title="Madagascar"><span class="flag-icon flag-icon-mg"></span></a>
              <a class="dropdown-item" href="countries?country=Malawi" title="Malawi"><span class="flag-icon flag-icon-mw"></span></a>
              <a class="dropdown-item" href="countries?country=Mali" title="Mali"><span class="flag-icon flag-icon-ml"></span></a>
              <a class="dropdown-item" href="countries?country=Mauritius" title="Maurice"><span class="flag-icon flag-icon-mu"></span></a>
              <a class="dropdown-item" href="countries?country=Mauritania" title="Mauritanie"><span class="flag-icon flag-icon-mr"></span></a>
              <a class="dropdown-item" href="countries?country=Mozambique" title="Mozambique"><span class="flag-icon flag-icon-mz"></span></a>
              <a class="dropdown-item" href="countries?country=Namibia" title="Namibie"><span class="flag-icon flag-icon-na"></span></a>
              <a class="dropdown-item" href="countries?country=Niger" title="Niger"><span class="flag-icon flag-icon-ne"></span></a>
              <a class="dropdown-item" href="countries?country=Nigeria" title="Nigeria"><span class="flag-icon flag-icon-ng"></span></a>
              <a class="dropdown-item" href="countries?country=Uganda" title="Ouganda"><span class="flag-icon flag-icon-ug"></span></a>
              <a class="dropdown-item" href="countries?country=Rwanda" title="Rwanda"><span class="flag-icon flag-icon-rw"></span></a>
              <a class="dropdown-item" href="countries?country=Sao-Tome-and-Principe" title="São Tomé-et-Principe"><span class="flag-icon flag-icon-st"></span></a>
              <a class="dropdown-item" href="countries?country=Senegal" title="Sénégal"><span class="flag-icon flag-icon-sn"></span></a>
              <a class="dropdown-item" href="countries?country=Seychelles" title="Seychelles"><span class="flag-icon flag-icon-sc"></span></a>
              <a class="dropdown-item" href="countries?country=Sierra-Leone" title="Sierra Leone"><span class="flag-icon flag-icon-sl"></span></a>
              <a class="dropdown-item" href="countries?country=Somalia" title="Somalie"><span class="flag-icon flag-icon-so"></span></a>
              <a class="dropdown-item" href="countries?country=Sudan" title="Soudan"><span class="flag-icon flag-icon-sd"></span></a>
              <a class="dropdown-item" href="countries?country=South-Sudan" title="Soudan du Sud"><span class="flag-icon flag-icon-ss"></span></a>
              <a class="dropdown-item" href="countries?country=Tanzania" title="Tanzanie"><span class="flag-icon flag-icon-tz"></span></a>
              <a class="dropdown-item" href="countries?country=Chad" title="Tchad"><span class="flag-icon flag-icon-td"></span></a>
              <a class="dropdown-item" href="countries?country=Togo" title="Togo"><span class="flag-icon flag-icon-tg"></span></a>
              <a class="dropdown-item" href="countries?country=Tunisia" title="Tunisie"><span class="flag-icon flag-icon-tn"></span></a>
              <a class="dropdown-item" href="countries?country=Zambia" title="Zambie"><span class="flag-icon flag-icon-zm"></span></a>
              <a class="dropdown-item" href="countries?country=Zimbabwe" title="Zimbabwe"><span class="flag-icon flag-icon-zw"></span></a>
              
              
            </div>
          </div></li>
          
          <li class="menu__item"><a href="carte_covid" class="menu__link">Carte Covid-19</a></li>
          <li class="menu__item"><a href="prevention" class="menu__link">Prevention</a></li>
        </ul>
      </div>
    </div>
  
    
    <div class="content">
        @yield('content')
    </div>


<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script >
  $(document).ready(function(){
 $('ul.menu__list div.dropdown').hover(function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
          }, function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
 });
})
    
</script>
</body>
</html>