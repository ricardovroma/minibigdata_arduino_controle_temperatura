@extends('layouts.master')

@section('conteudo')

<ul class="stats-container">
	<li>
		<a href="#" class="stat summary">
			<span class="icon icon-circle bg-green">
				<i class="icon-stats"></i>
			</span>
			<span class="digit">
				<span class="text">Dados coletados</span>
				{{$total}}
			</span>
		</a>
	</li>
    <li>
        <a href="#" class="stat summary">
            <span class="sparkline" sparkType="bar" sparkBarColor="#e95d3c" sparkBarWidth="6" sparkHeight="28">@foreach ($ultimos_minutos as $i=>$u){{ $u["temperatura"] }}@if($i+1 != count($ultimos_minutos)),@endif @endforeach</span>
            <span class="digit">
                <span class="text">Últimos minutos</span>
            </span>
        </a>
    </li>
    <li>
		<a href="#" class="stat summary" title="{{ date("d/m/Y H:i:s",strtotime($maxima[0]['created_at'])) }}">
			<span class="icon icon-circle bg-red">
				<i class="icon-fire"></i>
			</span>
			<span class="digit">
				<span class="text">Máxima</span>
				{{$maxima[0]['temperatura']}}
			</span>
		</a>
	</li>
	<li>
		<a href="#" class="stat summary" title="{{ date("d/m/Y H:i:s",strtotime($minima[0]['created_at'])) }}">
			<span class="icon icon-circle bg-blue">
				<i class="icon-drops"></i>
			</span>
			<span class="digit">
				<span class="text">Mínima</span>
				{{$minima[0]['temperatura']}}
			</span>
		</a>
	</li>
</ul>

<div id="dashboard-demo" class="tabbable analytics-tab paper-stack">
	<ul class="nav nav-tabs">
        <!-- <li class="active"><a href="#" data-target="#live" data-toggle="tab"><i class="icon-history"></i> Live Stats</a></li> -->
    	<li class="active"><a href="#" data-target="#math" data-toggle="tab"><i class="icon-graph"></i> Dia</a></li>
    	<!-- <li><a href="#" data-target="#fb" data-toggle="tab"><i class="icon-facebook"></i> Por data</a></li> -->
		<!-- <li><a href="#" data-target="#revenue" data-toggle="tab"><i class="icon-bars"></i> Revenue</a></li> -->
    </ul>
    <div class="tab-content">
    	<div id="math" class="tab-pane active">
            <div class="analytics-tab-content">
            	<div id="demo-chart-00" style="height: 353px;">
                </div>
                
                <script type="text/javascript">
                	max = {{$maxima[0]['temperatura']}};
                	min = {{$minima[0]['temperatura']}};
                    _d = [
					    {
					        "color": "#ed7a53",
					        "data": {{$list}},
					        "label": "Últimos dados"
					    }
					    // ,{
					    //     "color": "#0088cc",
					    //     "data": [
					    //         [
					    //             0,
					    //             59,
					    //             "aa"
					    //         ],
					    //         [
					    //             2,
					    //             58,
					    //             "aa"
					    //         ]
					    //     ],
					    //     "label": "Avg. CPU Usage",
					    //     "lines": {
					    //         "fill": false
					    //     }
					    // }
					];
                </script>
            </div>
        </div>
    </div>
</div>
@stop