@extends('layouts.master')
  @section('head')
  <link rel="stylesheet" href="{{ asset('css/home.css')}}" />
  
  <title>nCovAfrica</title>
@endsection


@section('content')
                <div class="container" style="width: 742%; margin-left: 5%;" >
                      {{-- <iframe src="https://ourworldindata.org/grapher/total-cases-covid-19?tab=map&region=Africa" width="100%" height="600px"></iframe> --}}
                      <div class="infogram-embed" data-id="a34cc9cd-5dc0-4bc4-873d-ffc258906857" 
                      data-type="interactive" data-title="Nombre de cas de coronavirus en Afrique par pays">
                  
                  <script>!function(e,i,n,s){var t="InfogramEmbeds",d=e.getElementsByTagName("script")[0];if(window[t]&&window[t].initialized)window[t].process&&window[t].process();else if(!e.getElementById(n)){var o=e.createElement("script");o.async=1,o.id=n,o.src="https://e.infogram.com/js/dist/embed-loader-min.js",d.parentNode.insertBefore(o,d)}}(document,0,"infogram-async");</script><div style="padding:8px 0;font-family:Arial!important;font-size:13px!important;line-height:15px!important;text-align:center;border-top:1px solid #dadada;margin:0 30px">
                     
                  </div>
                </div>
@endsection

