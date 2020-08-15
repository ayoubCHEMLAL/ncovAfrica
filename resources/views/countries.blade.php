<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="jquery-jvectormap-2.0.1.css" type="text/css" media="screen"/>
  
    <title>Document</title>
    <style>
        .card-footer{
            border-top: 1px solid rgba(0,0,0,.03);
        }
        .table td,th{     
    border-top: 1px solid rgba(0,0,0,.03);
    font-family: cursive;
    text-align: center;
        }
        .table .td2{
            color: #8a98ac;
    vertical-align: middle;
        }
        .td3{
            color: #ffa800;
        }

        .badge-warning-inverse{background-color:rgba(255,168,0,.1);color:#ffa800}
        .badge-danger-inverse{background-color:rgba(255,63,63,.1);color:#ff3f3f}
        .badge-success-inverse{background-color:rgba(24,210,107,.1);color:#18d26b}
      @font-face {
  font-family: 'Material Icons';
  font-style: normal;
  font-weight: 400;
  src: url(https://example.com/MaterialIcons-Regular.eot); /* For IE6-8 */
  src: local('Material Icons'),
    local('MaterialIcons-Regular'),
    url(https://example.com/MaterialIcons-Regular.woff2) format('woff2'),
    url(https://example.com/MaterialIcons-Regular.woff) format('woff'),
    url(https://example.com/MaterialIcons-Regular.ttf) format('truetype');
}
.material-icons {
  font-family: 'Material Icons';
  font-weight: normal;
  font-style: normal;
  font-size: 33px;  /* Preferred icon size */
  display: inline-block;
  line-height: 1;
  text-transform: none;
  letter-spacing: normal;
  word-wrap: normal;
  white-space: nowrap;
  direction: ltr;

  /* Support for all WebKit browsers. */
  -webkit-font-smoothing: antialiased;
  /* Support for Safari and Chrome. */
  text-rendering: optimizeLegibility;

  /* Support for Firefox. */
  -moz-osx-font-smoothing: grayscale;

  /* Support for IE. */
  font-feature-settings: 'liga';
}
    </style>
    
</head>
<body>

    
    <div class="col-lg-9" style="margin-left: 12%;">
        <div class="card mt-3 shadow-sm">
            
              <div class="card-footer" style="height: 96px;">
                  <div class="row align-items-center">
                      <div style="text-align:center;">
                          <div style="display: inline-flex; margin-left: 35%;"> <img src="images/countries_flags/<?php echo $sym;?>.jpg" style="border-radius: 5px; width: 15%;"/>&nbsp;&nbsp;&nbsp;&nbsp;
                            <h1><?php if($sym=='Morocco'){echo 'Maroc';}else{echo $sym;}?> </h1></div>
                          &nbsp;
                        </div>
          
                  </div>
              </div>

            <div class="card-body pb-2">
                <div class="row">
                    <div class="col-5">
                    <a href="#total_cases" onclick="if (!window.__cfRLUnblockHandlers) return false; ga('send', {hitType: 'event', eventCategory: 'indicateur click', eventAction: 'cases icon', eventLabel: null});" data-cf-modified-49e3168229d305d1d56cda57-="">
                        <span class="action-icon badge badge-warning-inverse m-0"><span class="material-icons">
                        medical_services
                        </span></span></a>
                    </div>
    
                    <div class="col-7 text-left">
                    <h5 class="card-title font-14 text-muted">Cas confirmés</h5>
                    <h4 class="mb-0 font-30">{{ $kk["cases"]["total"] }}</h4>
                    </div>
                </div>
            </div>
            
            <div class="card-footer">
                <div class="row align-items-center">
                    <div class="col-9">
                       <span class="font-13"> Dernière mise à jour: {{ $kk["day"] }} </span>
                    </div>
                    <div class="col-3 text-left">
                    <a href="#new_cases" onclick="if (!window.__cfRLUnblockHandlers) return false; ga('send', {hitType: 'event', eventCategory: 'indicateur click', eventAction: 'cases diff', eventLabel: null});" data-cf-modified-49e3168229d305d1d56cda57-="">
                        <span class="badge badge-warning pr-2 pl-2"><span class="material-icons" style="font-size: 15px;">
                                call_missed_outgoing
                                </span>{{$kk["cases"]["new"]}}</span></a>
                    </div>
                </div>
            </div>
           
        </div>
    </div>

    

    <div class="row" style="width: 97%;margin-left: 1.5%;">
    <div class="col-lg-4">
        <div class="card mt-3 shadow-sm" style="background-color: #e9fdf2">
            <div class="card-body pb-2">
                    <div class="row">
                                <div class="col-5">
                                    <a href="#total_cases" onclick="if (!window.__cfRLUnblockHandlers) return false; ga('send', {hitType: 'event', eventCategory: 'indicateur click', eventAction: 'recovered icon', eventLabel: null});" data-cf-modified-49e3168229d305d1d56cda57-="">
                                        
                                        <span class="action-icon badge badge-success-inverse m-0""><span class="material-icons">
                                            mood
                                            </span></a>
                                </div>
    
                                <div class="col-7 text-left">
                                    <h5 class="card-title font-14 text-muted">Guérisons</h5>
                                    <h4 class="mb-0 font-30">{{ $kk["cases"]["recovered"] }}</h4>
                                </div>
                    </div>
            </div>
            
            <div class="card-footer">
                    <div class="row align-items-center">
                                <div class="col-6">
                                    <span class="font-18 font-weight-bold"><?php echo number_format((float)(($kk["cases"]["recovered"]*100)/$kk["cases"]["total"]), 2, '.', '');   ?>%</span>
                                </div>
                                {{-- <div class="col-6 text-left">
                                    <a href="#new_cases" onclick="if (!window.__cfRLUnblockHandlers) return false; ga('send', {hitType: 'event', eventCategory: 'indicateur click', eventAction: 'recovered diff', eventLabel: null});" data-cf-modified-49e3168229d305d1d56cda57-="">
                                        <span class="badge badge-success pr-2 pl-2"><i class="feather icon-trending-up mr-1"></i>{{$kk["cases"]["new"]}}</span></a>
                                </div> --}}
                    </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card mt-3 shadow-sm" style="background-color: #fff3f3;">
                <div class="card-body pb-2">
                        <div class="row">
                                    <div class="col-5">
                                    <a href="#total_cases" onclick="if (!window.__cfRLUnblockHandlers) return false; ga('send', {hitType: 'event', eventCategory: 'indicateur click', eventAction: 'deaths icon', eventLabel: null});" data-cf-modified-49e3168229d305d1d56cda57-="">
                                        <span class="action-icon badge badge-danger-inverse m-0">
                                        <span class="material-icons">
                                            sentiment_very_dissatisfied
                                            </span>
                                        </span></a>
                                    </div>
                                    <div class="col-7 text-left">
                                    <h5 class="card-title font-14 text-muted">Décès</h5>
                                    <h4 class="mb-0 font-30">{{ $kk["deaths"]["total"]}}</h4>
                                    </div>
                        </div>
                </div>
                <div class="card-footer">
                        <div class="row align-items-center">
                                    <div class="col-4">
                                    <span class="font-18 font-weight-bold"><?php echo number_format((float)(($kk["deaths"]["total"]*100)/$kk["cases"]["total"]), 2, '.', '');   ?>%</span>
                                    </div>
                                    <div class="col-8 text-left">
                                        @if ($kk["deaths"]["new"]==null)
                                            <span class="badge badge-success pr-2 pl-2"> 
                                                    Aucun décès enregistré
                                            </span>
                                        @else
                                        <span class="badge badge-success pr-2 pl-2" style="background-color: #ad3232;"> 
                                                <span class="material-icons" style="font-size: 15px;">
                                                        call_missed_outgoing
                                                </span>
                                        {{$kk["deaths"]["new"]}}</span> 
                                        @endif
                                    </div>
                        </div>
                </div>
        </div>
        </div>

        <div class="col-lg-4">
            <div class="card mt-3 shadow-sm" style="background-color: #f9f4ec;">
                <div class="card-body pb-2">
                        <div class="row" >
                                <div class="col-5">
                                    <a href="#total_cases" onclick="if (!window.__cfRLUnblockHandlers) return false; ga('send', {hitType: 'event', eventCategory: 'indicateur click', eventAction: 'current cases icon', eventLabel: null});" data-cf-modified-49e3168229d305d1d56cda57-=""><i class="mdi mdi mdi-bed-empty"></i>
                                        <span class="action-icon badge badge-warning-inverse m-0"><span class="material-icons">
                                            single_bed
                                            </span></a></span>
                                </div>
                                <div class="col-7 text-left">
                                    <h5 class="card-title font-14 text-muted">Cas sous traitement </h5>
                                    <h4 class="mb-0 font-30">{{$kk["cases"]["active"]}}</h4>
                                </div>
                        </div>
                </div>
        
                 <div class="card-footer">
                             <div class="row align-items-center">
                                        <div class="col-6">
                                        <span class="font-18 font-weight-bold"><?php echo number_format((float)(($kk["cases"]["active"]*100)/$kk["cases"]["total"]), 2, '.', '');   ?>%</span>
                                         </div>
                                        <div class="col-6 text-left">
                                        {{-- <a href="#new_cases" onclick="if (!window.__cfRLUnblockHandlers) return false; ga('send', {hitType: 'event', eventCategory: 'indicateur click', eventAction: 'current cases diff', eventLabel: null});" data-cf-modified-49e3168229d305d1d56cda57-="">
                                            <span class="badge badge-warning pr-2 pl-2">{{$kk["cases"]["new"]}}</span></a>
                                        </div> --}}
                            </div>
                </div>
            </div>
        </div>
</div>



            

  
@if ($sym=='Morocco')
    <div class="col-lg-6">
        <div class="card mt-3 shadow-sm">
                <br><h5 class="card-title d-inline-block" style="text-align: center;">Tableau des cas par régions</h5>         
        <div class="card-body pt-2 pb-0" style="width: 100%; height: 440px;">
            <table class="table table-sm table-striped" >
                <tr>
                <th scope="col">Province</th>
                <th scope="col">Nombre total des cas</th>
                <th scope="col">Cas d'aujourd'hui</th> 
                </tr>
            @foreach ($a as $o)
            <tr>
                <td class="td1">
                    

                @switch($o[0])
                        @case('طنجة تطوان الحسيمة')
                        Tanger-Tétouan-Al Hoceïma
                        @break
                        @case('مراكش أسفي')
                        Marrakech-Safi
                        @break
                        @case('الدار البيضاء سطات')
                        Casablanca-Settat
                        @break
                        @case('الرباط سلا القنيطرة')
                        Rabat-Salé-Kénitra
                        @break
                        @case('الشرق')
                        Oriental
                        @break
                        @case('فاس مكناس')
                        Fès-Meknès
                        @break
                        @case('درعة تافيلالت')
                        Drâa-Tafilalet
                        @break
                        @case('بني ملال خنيفرة')
                        Béni Mellal-Khénifra
                        @break
                        @case('سوس ماسة')
                        Souss Massa
                        @break
                        @case('كلميم واد نون')
                        Guelmim-Oued Noun
                        @break
                        @case('الداخلة وادي الذهب')
                        Oued Ed-Dahab-Lagouira
                        @break
                        @case('العيون الساقية الحمراء')
                        Laâyoune-Sakia El Hamra
                        @break
                
                    @default
                        
                @endswitch
                </td>
                <td class="td2">{{$o[1]}}</td>
                     <td class="td3">{{$o[2]}}</td> 
                </tr>
            @endforeach
            </table>
        </div>
        </div>
    </div>
@endif
    <div class="col-lg-6">
            <div class="card mt-3">
                    <br><h5 class="card-title d-inline-block" style="text-align: center;">Graphique de contrôle du virus</h5>  
                    <div class="card-body pt-4 pb-0" id="chartdiv2" style="width: 100%; height: 440px;"></div>
            </div>
    </div>

    <script src="https://www.amcharts.com/lib/4/core.js"></script>
    <script src="https://www.amcharts.com/lib/4/charts.js"></script>
    <script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>
    <div class="col-lg-6">
            <div class="card mt-3">
                    <br><h5 class="card-title d-inline-block" style="text-align: center;">Évolution du nombre des cas confirmés  par jour

                        </h5>  
                    <div class="card-body pt-4 pb-0" id="chartdiv" style="width: 100%; height: 440px;"></div>
            </div>
    </div>
    <script type="text/javascript">
        // Themes begin
    am4core.useTheme(am4themes_animated);
    // Themes end
    
    // Create chart instance
    var chart = am4core.create("chartdiv", am4charts.XYChart);
    
    // Add data
    chart.data = [{
    @for ($i =(count($li)-1); $i >=1 ; $i--)
        <?php
        $date12 = strtotime($li[$i]['time']);
         if(date('H', $date12)>=17){ ?>
      "date": "{{$li[$i]['day']}}",
      "value": {{(int)$li[$i]['cases']['new']}}
      
    }, {
        <?php }?>
    @endfor
    "date": "{{$li[0]['day']}}",
      "value": {{(int)$li[0]['cases']['new']}}
    }];
    
    // Set input format for the dates
    chart.dateFormatter.inputDateFormat = "yyyy-MM-dd";
    
    // Create axes
    var dateAxis = chart.xAxes.push(new am4charts.DateAxis());
    var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
    
    // Create series
    var series = chart.series.push(new am4charts.LineSeries());
    series.dataFields.valueY = "value";
    series.dataFields.dateX = "date";
    series.tooltipText = "{value}"
    series.strokeWidth = 2;
    series.minBulletDistance = 15;
    
    // Drop-shaped tooltips
    series.tooltip.background.cornerRadius = 20;
    series.tooltip.background.strokeOpacity = 0;
    series.tooltip.pointerOrientation = "vertical";
    series.tooltip.label.minWidth = 40;
    series.tooltip.label.minHeight = 40;
    series.tooltip.label.textAlign = "middle";
    series.tooltip.label.textValign = "middle";
    
    // Make bullets grow on hover
    var bullet = series.bullets.push(new am4charts.CircleBullet());
    bullet.circle.strokeWidth = 2;
    bullet.circle.radius = 4;
    bullet.circle.fill = am4core.color("#fff");
    
    var bullethover = bullet.states.create("hover");
    bullethover.properties.scale = 1.3;
    
    // Make a panning cursor
    chart.cursor = new am4charts.XYCursor();
    chart.cursor.behavior = "panXY";
    chart.cursor.xAxis = dateAxis;
    chart.cursor.snapToSeries = series;
    
    // Create vertical scrollbar and place it before the value axis
    chart.scrollbarY = new am4core.Scrollbar();
    chart.scrollbarY.parent = chart.leftAxesContainer;
    chart.scrollbarY.toBack();
    
    // Create a horizontal scrollbar with previe and place it underneath the date axis
    chart.scrollbarX = new am4charts.XYChartScrollbar();
    chart.scrollbarX.series.push(series);
    chart.scrollbarX.parent = chart.bottomAxesContainer;
    
    dateAxis.start = 0.79;
    dateAxis.keepSelection = true;
    
    
    var volumeAxis = chart.xAxes.push(new am4charts.ValueAxis())
    volumeAxis.renderer.inversed = true;
    volumeAxis.width = am4core.percent(30); // how much of the plot area the volume axis will occupy
    volumeAxis.align = "right";
    volumeAxis.renderer.inside = true;
    volumeAxis.renderer.grid.template.disabled = true;
    volumeAxis.renderer.labels.template.disabled = true;
    
    
    var volumeSeries = chart.series.push(new am4charts.ColumnSeries())
    volumeSeries.xAxis = volumeAxis;
    volumeSeries.baseAxis = valueAxis;
    volumeSeries.dataFields.valueX = "volume"
    volumeSeries.dataFields.openValueY = "openValue"
    volumeSeries.dataFields.valueY = "value"
    volumeSeries.columns.template.column.paddingTop = 1;
    volumeSeries.columns.template.column.paddingBottom = 1;
    volumeSeries.data = [{openValue:60, value:61, volume:50}, {openValue:61, value:62, volume:100}, {openValue:62, value:63, volume:90}, {openValue:63, value:64, volume:40}, {openValue:64, value:65, volume:50}, {openValue:65, value:66, volume:30}, {openValue:66, value:67, volume:10}]
    
    
    var volumeSeries2 = chart.series.push(new am4charts.ColumnSeries())
    volumeSeries2.xAxis = volumeAxis;
    volumeSeries2.baseAxis = valueAxis;
    volumeSeries2.dataFields.openValueX = "volumeOpen"
    volumeSeries2.dataFields.valueX = "volume"
    volumeSeries2.dataFields.openValueY = "openValue"
    volumeSeries2.dataFields.valueY = "value"
    /// padding is used for the ghaps to appear
    volumeSeries2.columns.template.column.paddingTop = 1;
    volumeSeries2.columns.template.column.paddingBottom = 1;
    volumeSeries2.data = [{openValue:60, value:61, volumeOpen:50, volume:100}, {openValue:61, value:62, volumeOpen:100, volume:110}, {openValue:62, volumeOpen:80,value:63, volume:150}, {openValue:63, value:64, volumeOpen:40, volume:80}, {openValue:64, value:65, volumeOpen:50, volume:30}, {openValue:65, value:66, volumeOpen:30, volume:25}, {openValue:66, value:67, volumeOpen:10, volume:40}]
    </script>
<script>

// Create chart instance
var chart = am4core.create("chartdiv2", am4charts.PieChart);

// Add data
chart.data = [{
  "category": "Décès",
  "value": {{ $kk["deaths"]["total"]}}
}, {
  "category": "Guérisons",
  "value": {{ $kk["cases"]["recovered"] }}
}, {
  "category": "Active",
  "value": {{$kk["cases"]["active"]}}
}];

// Add and configure Series
var pieSeries = chart.series.push(new am4charts.PieSeries());
pieSeries.dataFields.value = "value";
pieSeries.dataFields.category = "category";

chart.legend = new am4charts.Legend();

pieSeries.colors.list = [
  am4core.color("#dc3545"),
  am4core.color("#28a745"),
  am4core.color("#fd7e14"),
];
</script>
<div class="col-lg-6">
            <div class="card mt-3">
                    <br><h5 class="card-title d-inline-block" style="text-align: center;">Évolution du nombre de cas

                        </h5>  
                    <div class="card-body pt-4 pb-0" id="chartdiv4" style="width: 100%; height: 440px;"></div>
            </div>
</div>
<script>
    am4core.useTheme(am4themes_animated);

// Source data
//dd(parse($li[$i]['day'])->format('m')
//dd($li[2])}}

var data = [
    @for ($i =(count($li)-1); $i >1 ; $i--)
        <?php  
            $string = ($li[$i]['day']); 
            $date = DateTime::createFromFormat("Y-m-d", $string);
        ?>
  { device: "dev1", date: new Date(20{{$date->format("y")}}, {{$date->format("m")-1}}, {{$date->format("d")}}), value: {{$li[$i]['cases']['total']}} },
  { device: "dev2", date: new Date(20{{$date->format("y")}}, {{$date->format("m")-1}}, {{$date->format("d")}}), value: {{$li[$i]['cases']['recovered']}} },
  { device: "dev3", date: new Date(20{{$date->format("y")}}, {{$date->format("m")-1}}, {{$date->format("d")}}), value: {{$li[$i]['deaths']['total']}} },
  @endfor
  <?php  
            $string = ($li[1]['day']); 
            $date = DateTime::createFromFormat("Y-m-d", $string);
        ?>
  { device: "dev1", date: new Date(20{{$date->format("y")}}, {{$date->format("m")-1}}, {{$date->format("d")}}), value: {{$li[1]['cases']['total']}} },
  { device: "dev2", date: new Date(20{{$date->format("y")}}, {{$date->format("m")-1}}, {{$date->format("d")}}), value: {{$li[1]['cases']['recovered']}} },
  { device: "dev3", date: new Date(20{{$date->format("y")}}, {{$date->format("m")-1}}, {{$date->format("d")}}), value: {{$li[1]['deaths']['total']}} }
];

var chart = am4core.create("chartdiv4", am4charts.XYChart);

// Create axes
var dateAxis = chart.xAxes.push(new am4charts.DateAxis());
dateAxis.renderer.grid.template.location = 0;
dateAxis.renderer.minGridDistance = 30;

var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());

// Create series
function createSeries(field, name, id) {
  var series = chart.series.push(new am4charts.LineSeries());
  series.dataFields.valueY = field;
  series.dataFields.dateX = "date";
  series.name = name;
  series.tooltipText = "{dateX}: [b]{valueY}[/]";
  series.strokeWidth = 2;
  
  var bullet = series.bullets.push(new am4charts.CircleBullet());
  bullet.circle.stroke = am4core.color("#fff");
  bullet.circle.strokeWidth = 2;

  // Add data pre-processor
  series.data = data;
  series.events.on("beforedatavalidated", function(ev) {
    var source = ev.target.data;
    var data = [];
    for(var i = 0; i < source.length; i++) {
      var row = source[i];
      if (row.device == id) {
        data.push(row);
      }
    }
    ev.target.data = data;
  });
  
  return series;
}

createSeries("value", "Cas confirmés", "dev1");
createSeries("value", "Guéris", "dev2");
createSeries("value", "Décès", "dev3");

chart.legend = new am4charts.Legend();
chart.cursor = new am4charts.XYCursor();
</script>
<div class="col-lg-6">
            <div class="card mt-3">
                    <br><h5 class="card-title d-inline-block" style="text-align: center;">Évolution des cas actives

                        </h5>  
                    <div class="card-body pt-4 pb-0" id="chartdiv_active" style="width: 100%; height: 440px;"></div>
            </div>
    </div>
    <script type="text/javascript">
        // Themes begin
    am4core.useTheme(am4themes_animated);
    // Themes end
    
    // Create chart instance
    var chart = am4core.create("chartdiv_active", am4charts.XYChart);
    
    // Add data
    chart.data = [{
    @for ($i =(count($li)-1); $i >=1 ; $i--)
      "date": "{{$li[$i]['day']}}",
      "value": {{$li[$i]['cases']['active']}}
    }, {
    @endfor
    "date": "{{$li[0]['day']}}",
      "value": {{$li[0]['cases']['active']}}
    }];
    
    // Set input format for the dates
    chart.dateFormatter.inputDateFormat = "yyyy-MM-dd";
    
    // Create axes
    var dateAxis = chart.xAxes.push(new am4charts.DateAxis());
    var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
    
    // Create series
    var series = chart.series.push(new am4charts.LineSeries());
    series.dataFields.valueY = "value";
    series.dataFields.dateX = "date";
    series.tooltipText = "{value}"
    series.strokeWidth = 2;
    series.minBulletDistance = 15;
    
    // Drop-shaped tooltips
    series.tooltip.background.cornerRadius = 20;
    series.tooltip.background.strokeOpacity = 0;
    series.tooltip.pointerOrientation = "vertical";
    series.tooltip.label.minWidth = 40;
    series.tooltip.label.minHeight = 40;
    series.tooltip.label.textAlign = "middle";
    series.tooltip.label.textValign = "middle";
    
    // Make bullets grow on hover
    var bullet = series.bullets.push(new am4charts.CircleBullet());
    bullet.circle.strokeWidth = 2;
    bullet.circle.radius = 4;
    bullet.circle.fill = am4core.color("#fff");
    
    var bullethover = bullet.states.create("hover");
    bullethover.properties.scale = 1.3;
    
    // Make a panning cursor
    chart.cursor = new am4charts.XYCursor();
    chart.cursor.behavior = "panXY";
    chart.cursor.xAxis = dateAxis;
    chart.cursor.snapToSeries = series;
    
    // Create vertical scrollbar and place it before the value axis
    chart.scrollbarY = new am4core.Scrollbar();
    chart.scrollbarY.parent = chart.leftAxesContainer;
    chart.scrollbarY.toBack();
    
    // Create a horizontal scrollbar with previe and place it underneath the date axis
    chart.scrollbarX = new am4charts.XYChartScrollbar();
    chart.scrollbarX.series.push(series);
    chart.scrollbarX.parent = chart.bottomAxesContainer;
    
    dateAxis.start = 0.79;
    dateAxis.keepSelection = true;
    
    
    var volumeAxis = chart.xAxes.push(new am4charts.ValueAxis())
    volumeAxis.renderer.inversed = true;
    volumeAxis.width = am4core.percent(30); // how much of the plot area the volume axis will occupy
    volumeAxis.align = "right";
    volumeAxis.renderer.inside = true;
    volumeAxis.renderer.grid.template.disabled = true;
    volumeAxis.renderer.labels.template.disabled = true;
    
    
    var volumeSeries = chart.series.push(new am4charts.ColumnSeries())
    volumeSeries.xAxis = volumeAxis;
    volumeSeries.baseAxis = valueAxis;
    volumeSeries.dataFields.valueX = "volume"
    volumeSeries.dataFields.openValueY = "openValue"
    volumeSeries.dataFields.valueY = "value"
    volumeSeries.columns.template.column.paddingTop = 1;
    volumeSeries.columns.template.column.paddingBottom = 1;
    volumeSeries.data = [{openValue:60, value:61, volume:50}, {openValue:61, value:62, volume:100}, {openValue:62, value:63, volume:90}, {openValue:63, value:64, volume:40}, {openValue:64, value:65, volume:50}, {openValue:65, value:66, volume:30}, {openValue:66, value:67, volume:10}]
    
    
    var volumeSeries2 = chart.series.push(new am4charts.ColumnSeries())
    volumeSeries2.xAxis = volumeAxis;
    volumeSeries2.baseAxis = valueAxis;
    volumeSeries2.dataFields.openValueX = "volumeOpen"
    volumeSeries2.dataFields.valueX = "volume"
    volumeSeries2.dataFields.openValueY = "openValue"
    volumeSeries2.dataFields.valueY = "value"
    /// padding is used for the ghaps to appear
    volumeSeries2.columns.template.column.paddingTop = 1;
    volumeSeries2.columns.template.column.paddingBottom = 1;
    volumeSeries2.data = [{openValue:60, value:61, volumeOpen:50, volume:100}, {openValue:61, value:62, volumeOpen:100, volume:110}, {openValue:62, volumeOpen:80,value:63, volume:150}, {openValue:63, value:64, volumeOpen:40, volume:80}, {openValue:64, value:65, volumeOpen:50, volume:30}, {openValue:65, value:66, volumeOpen:30, volume:25}, {openValue:66, value:67, volumeOpen:10, volume:40}]
    </script>
<script>
</body>
</html>