@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1> Módulo de Reportes y estadísticas</h1>
            <br>
              <p></p>

              <figure class="highcharts-figure">
                <div id="container"></div>
                <p class="highcharts-description">
                  Basic line chart showing trends in a dataset. This chart includes the
                  <code>series-label</code> module, which adds a label to each line for
                  enhanced readability.
                </p>
              </figure>


        </div>


    </div>
</div>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<script>
    Highcharts.chart('container', {

  title: {
    text: 'U.S Solar Employment Growth by Job Category, 2010-2020',
    align: 'left'
  },

  subtitle: {
    text: 'Source: <a href="https://irecusa.org/programs/solar-jobs-census/" target="_blank">IREC</a>',
    align: 'left'
  },

  yAxis: {
    title: {
      text: 'Number of Employees'
    }
  },

  xAxis: {
    accessibility: {
      rangeDescription: 'Range: 2010 to 2020'
    }
  },

  legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
  },

  plotOptions: {
    series: {
      label: {
        connectorAllowed: false
      },
      pointStart: 2010
    }
  },

  series: [{
    name: 'Installation & Developers',
    data: [43934, 48656, 65165, 81827, 112143, 142383,
      171533, 165174, 155157, 161454, 154610]
  }, {
    name: 'Manufacturing',
    data: [24916, 37941, 29742, 29851, 32490, 30282,
      38121, 36885, 33726, 34243, 31050]
  }, {
    name: 'Sales & Distribution',
    data: [11744, 30000, 16005, 19771, 20185, 24377,
      32147, 30912, 29243, 29213, 25663]
  }, {
    name: 'Operations & Maintenance',
    data: [null, null, null, null, null, null, null,
      null, 11164, 11218, 10077]
  }, {
    name: 'Other',
    data: [21908, 5548, 8105, 11248, 8989, 11816, 18274,
      17300, 13053, 11906, 10073]
  }],

  responsive: {
    rules: [{
      condition: {
        maxWidth: 500
      },
      chartOptions: {
        legend: {
          layout: 'horizontal',
          align: 'center',
          verticalAlign: 'bottom'
        }
      }
    }]
  }

});
</script>
@endsection
