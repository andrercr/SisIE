@extends('template')

@section('content-header')
<section class="content-header">
  <h1>
    {{ $dados_pagina->mapa or 'Dashboard'}}
    <small>Preview</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Gerenciamento</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>
@endsection

@section('content')
<section class="content">
	<div class="row">
		<div class="col-xs-4">
			<div class="box box-default">
				<div class="box-header">
					<h3 class="box-title">Cursos</h3>
				</div>
				<div class="box-body table-responsive no-padding">
					<table class="table table-hover table-bordered">
						<tr style="background-color: #fafafa;">
							<th>Nome</th>
							<th>Descrição</th>
						</tr>
						@forelse ($qtdcursos as $qtdcurso)
						<tr role="row" class="odd" style="height: 10px;">
							<td>{{ $qtdcurso->id_curso}}</td>
							<td>{{ $qtdcurso->contador}}</td>
						</tr>
            @empty
            <tr role="row" class="odd" style="height: 10px;">
              <td colspan="2">Não há dados para serem mostrados.</td>
            </tr>
						@endforelse
					</table>
				</div>
			</div>
		</div>
	</div>
  <div class="row">
    <div class="col-sm-6">
     <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">
     </div>
   </div>
   <div class="col-sm-6">
     <div class="dataTables_paginate paging_simple_numbers pull-right" id="example1_paginate">
     </div>
   </div>
 </div>
</section>

<section class="content">
  <div class="row">
    <div class="col-xs-5">
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Qtd Matrículas no mês de <strong>{{ ucfirst(strftime( '%B' )) }}</strong></h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-8">
              <div class="chart-responsive">
                <canvas id="pieChart" height="155" width="205" style="width: 205px; height: 155px;"></canvas>
              </div>
              <!-- ./chart-responsive -->
            </div>
            <!-- /.col -->

            <div class="col-md-4">
              <ul class="chart-legend clearfix">

<!-- {{ $cores[0] }}<br> -->
<!-- {{ $cores[1] }} -->
                <!-- for($i = 0; $i <= 10; $i++) -->
                  <!--  echo $cores[$i]; ?> -->

                <!-- endfor -->
                  <li><i class="fa fa-circle-o text-$cor[$i]"></i>IE</li>



                

                  <!-- <li><i class="fa fa-circle-o text-green"></i> IE</li> -->
                  <!-- <li><i class="fa fa-circle-o text-yellow"></i> FireFox</li> -->
                  <!-- <li><i class="fa fa-circle-o text-aqua"></i> Safari</li> -->
                  <!-- <li><i class="fa fa-circle-o text-light-blue"></i> Opera</li> -->
                  <!-- <li><i class="fa fa-circle-o text-gray"></i> Navigator</li> -->
                </ul>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.box-body -->
          <div class="box-footer no-padding">
            <ul class="nav nav-pills nav-stacked">
              <li><a href="#">United States of America
                <span class="pull-right text-red"><i class="fa fa-angle-down"></i> 12%</span></a></li>
                <li><a href="#">India <span class="pull-right text-green"><i class="fa fa-angle-up"></i> 4%</span></a>
                </li>
                <li><a href="#">China
                  <span class="pull-right text-yellow"><i class="fa fa-angle-left"></i> 0%</span></a></li>
                </ul>
              </div>
              <!-- /.footer -->
            </div>
            @endsection

            @push('scripts')
            <script type="text/javascript">
             $(document).ready(function() {



  // Get context with jQuery - using jQuery's .get() method.
  var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
  var pieChart = new Chart(pieChartCanvas);

  var PieData = [
  {      value: 100,      color: "#f56954",      highlight: "#f56954",      label: "Chrome"         },
  {      value: 200,      color: "#00a65a",      highlight: "#00a65a",      label: "IE"             },
  {      value: 300,      color: "#f39c12",      highlight: "#f39c12",      label: "FireFox"        },
  {      value: 100,      color: "#00c0ef",      highlight: "#00c0ef",      label: "Safari"         },
  {      value: 200,      color: "#3c8dbc",      highlight: "#3c8dbc",      label: "Opera"          },
  {      value: 300,      color: "#d2d6de",      highlight: "#d2d6de",      label: "Navigator"      }
  ];

  var pieOptions = {
    //Boolean - Whether we should show a stroke on each segment
    segmentShowStroke: true,
    //String - The colour of each segment stroke
    segmentStrokeColor: "#fff",
    //Number - The width of each segment stroke
    segmentStrokeWidth: 1,
    //Number - The percentage of the chart that we cut out of the middle
    percentageInnerCutout: 50, // This is 0 for Pie charts
    //Number - Amount of animation steps
    animationSteps: 100,
    //String - Animation easing effect
    animationEasing: "easeOutBounce",
    //Boolean - Whether we animate the rotation of the Doughnut
    animateRotate: true,
    //Boolean - Whether we animate scaling the Doughnut from the centre
    animateScale: false,
    //Boolean - whether to make the chart responsive to window resizing
    responsive: true,
    // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
    maintainAspectRatio: false,
    //String - A legend template
    legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>",
    //String - A tooltip template
    tooltipTemplate: "<%=value %> <%=label%> users"
  };
  //Create pie or douhnut chart
  // You can switch between pie and douhnut using the method below.
  pieChart.Doughnut(PieData, pieOptions);
  //-----------------
  //- END PIE CHART -
  //-----------------
});
</script>
@endpush
