@extends('layouts.master')
@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('font/flaticon.css')}}">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&display=swap" />
<link rel="stylesheet" href="{{ asset('css/prev.css')}}" />
@endsection
    
@section('content')
    

            <div class="container" style="width: 102%; max-width: 100%;margin-left: 8%;">
                    
                        <div class="fullbox" class="f1">
                            <img class="icon1" src="./images/corona/coronavirus.svg" alt="">
                            <h1 class="h1">COVID19 <span class="span1"> Symptomes</span></h1>
                            <p class="p1">
                                Les Symptômes les plus fréquents de COVID19
                            </p>
                        </div>
                        <div class="box b1 ">
                            <i class="flaticon-fever"></i>
                            <span>Fièvre</span>
                            <p>
                                
                                
                            </p>
                        </div>
                        <div class="box b1 ">
                            <i class="flaticon-breathing"></i>
                            <span>Difficultés respiratoires</span>
                            <p>
                                
                                
                            </p>
                        </div>
                        <div class="box b1 ">
                            <i class="flaticon-cough"></i>
                            <span>Toux sèche</span>
                            <p>
                                
                                
                            </p>
                        </div>
                        <div class="box b1 ">
                            <i class="flaticon-headache"></i>
                            <span>Maux de tête</span>
                            <p>
                                
                                
                            </p>
                        </div>
                        <div class="fullbox " class="f2">
                            <img class="icon2" src="./images/corona/protection.svg" alt="">
                            <h1 class="h2">COVID19 <span class="span2">Prevention</span></h1>
                            <p class="p2">
                                Prenez toujours les précautions suivantes pour éviter le virus COVID19.
                            </p>
                        </div>
                        
                        <div class="box b2">
                            <i class="flaticon-wash-your-hands"></i>
                            <p>
                                
                                
                Lavez-vous les mains régulièrement pendant 20 secondes, avec du savon et de l'eau ou un désinfectant pour les mains à base d'alcool.
                            </p>
                        </div>
                        <div class="box b2">
                            <i class="flaticon-sneeze"></i>
                            <p>
                                
                                
                Couvrez-vous le nez et la bouche avec un mouchoir jetable ou un coude fléchi lorsque vous toussez ou éternuez.
                            </p>
                        </div>
                        <div class="box b2">
                            <i class="flaticon-distance"></i>
                            <p>
                                
                                
                Évitez tout contact étroit (1 mètre ou 3 pieds) avec des personnes malades.
                            </p>
                        </div>
                        <div class="box b2">
                            <i class="flaticon-stay-at-home"></i>
                            <p>
                                
                                
                Restez à la maison et isolez-vous des autres membres du ménage en cas de malaise.
                            </p>
                        </div>
                    </div>
            </div>
@endsection