@extends('plantilla')

@section('title', 'Migracion Irregular')

@section('_css')
    #container {
        min-width: 310px;
        max-width: 800px;
        height: 400px;
        margin: 0 auto
    }
@endsection
    
@section('content')
    <h1>Migracion Irregular</h1>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/series-label.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    @php
        $i['Africa']['2016'] =0;
        $i['Africa']['2017'] =0;
        $i['Africa']['2018'] =0;
        $i['Africa']['2019'] =0;

        $i['America']['2016'] =0;
        $i['America']['2017'] =0;
        $i['America']['2018'] =0;
        $i['America']['2019'] =0;
        
        $i['Europa']['2016'] =0;
        $i['Europa']['2017'] =0;
        $i['Europa']['2018'] =0;
        $i['Europa']['2019'] =0;

        $i['Asia']['2016'] =0;
        $i['Asia']['2017'] =0;
        $i['Asia']['2018'] =0;
        $i['Asia']['2019'] =0;

        foreach (model('irregular')->get_many_by(array('cont'=>'Africa', 'anio'=>'2016')) as $item) {
            $i['Africa']['2016']+= $item->cantidad;
        }

        foreach (model('irregular')->get_many_by(array('cont'=>'Africa', 'anio'=>'2017')) as $item) {
            $i['Africa']['2017']+= $item->cantidad;
        }

        foreach (model('irregular')->get_many_by(array('cont'=>'Africa', 'anio'=>'2018')) as $item) {
            $i['Africa']['2018']+= $item->cantidad;
        }

        foreach (model('irregular')->get_many_by(array('cont'=>'Africa', 'anio'=>'2019')) as $item) {
            $i['Africa']['2019']+= $item->cantidad;
        }

        foreach (model('irregular')->get_many_by(array('cont'=>'Asia', 'anio'=>'2016')) as $item) {
            $i['Asia']['2016']+= $item->cantidad;
        }

        foreach (model('irregular')->get_many_by(array('cont'=>'Asia', 'anio'=>'2017')) as $item) {
            $i['Asia']['2017']+= $item->cantidad;
        }

        foreach (model('irregular')->get_many_by(array('cont'=>'Asia', 'anio'=>'2018')) as $item) {
            $i['Asia']['2018']+= $item->cantidad;
        }

        foreach (model('irregular')->get_many_by(array('cont'=>'Asia', 'anio'=>'2019')) as $item) {
            $i['Asia']['2019']+= $item->cantidad;
        }
        foreach (model('irregular')->get_many_by(array('cont'=>'Europa', 'anio'=>'2016')) as $item) {
            $i['Europa']['2016']+= $item->cantidad;
        }

        foreach (model('irregular')->get_many_by(array('cont'=>'Europa', 'anio'=>'2017')) as $item) {
            $i['Europa']['2017']+= $item->cantidad;
        }

        foreach (model('irregular')->get_many_by(array('cont'=>'Europa', 'anio'=>'2018')) as $item) {
            $i['Europa']['2018']+= $item->cantidad;
        }

        foreach (model('irregular')->get_many_by(array('cont'=>'Europa', 'anio'=>'2019')) as $item) {
            $i['Europa']['2019']+= $item->cantidad;
        }
        foreach (model('irregular')->get_many_by(array('cont'=>'America', 'anio'=>'2016')) as $item) {
            $i['America']['2016']+= $item->cantidad;
        }

        foreach (model('irregular')->get_many_by(array('cont'=>'America', 'anio'=>'2017')) as $item) {
            $i['America']['2017']+= $item->cantidad;
        }

        foreach (model('irregular')->get_many_by(array('cont'=>'America', 'anio'=>'2018')) as $item) {
            $i['America']['2018']+= $item->cantidad;
        }

        foreach (model('irregular')->get_many_by(array('cont'=>'America', 'anio'=>'2019')) as $item) {
            $i['America']['2019']+= $item->cantidad;
        }
    @endphp

    <div id="container"></div>
<script>
Highcharts.chart('container', {

    title: {
        text: 'Migrantes Irregulares en Transito por Honduras'
    },

    subtitle: {
        text: 'Source: inm'
    },
    xAxis: {
        categories: [
            '2016',
            '2017',
            '2018',
            '2019'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        max: 3000,
        tickInterval: 500,
        title: {
            text: 'Cantidad de Migrantes'
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },


    series: [
    {
        name: 'Africa',
        data: [            
            {{$i['Africa']['2016']}},
            {{$i['Africa']['2017']}},
            {{$i['Africa']['2018']}},
            {{$i['Africa']['2019']}}
            ] 

    }, {
        name: 'America',
        data: [
            {{$i['America']['2016']}},
            {{$i['America']['2017']}},
            {{$i['America']['2018']}},
            {{$i['America']['2019']}}
        ]
    }, {
        name: 'Asia',
        data: [
            {{$i['Asia']['2016']}},
            {{$i['Asia']['2017']}},
            {{$i['Asia']['2018']}},
            {{$i['Asia']['2019']}}
        ]
    }, {
        name: 'Europa',
        data: [
            {{$i['Europa']['2016']}},
            {{$i['Europa']['2017']}},
            {{$i['Europa']['2018']}},
            {{$i['Europa']['2019']}}
        ]
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