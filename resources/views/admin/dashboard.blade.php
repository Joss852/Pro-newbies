@extends('admin.master')

@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid">
        <div class="panel shadow">
            <div class="header">
                <h2 class="title">
                    <i class="fas fa-chart-area"></i> Grafico de Ventas</a>
                </h2>
            </div>
            <div class="inside">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-chart">
                            <div class="card-header ">
                                <div class="row">
                                    <div class="col-sm-6 text-left">
                                        <h2 class="card-title">Reporte de ventas</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div style="display: flex;">
                                    <div id="chart_div"></div>
                                    <div id="chart2_div"></div>     
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        $cols = ["nombre", "ventas"]
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          {{--['Nombre', 3],
          ['Onions', 1],
          ['Olives', 1],
          ['Zucchini', 1],
          ['Pepperoni', 2]--}}
          @foreach($ventas->all() as $venta)
          [ '{{$venta->nombre}}' , {{(int)$venta->n_ventas}}],
          @endforeach
        ]);

        // Set chart options
        var options = {'title':'Ventas de articulos',
                       'width':500,
                       'height':500};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
        var chart2 = new google.visualization.BarChart(document.getElementById('chart2_div'));
        chart2.draw(data, options);
      }
    </script>