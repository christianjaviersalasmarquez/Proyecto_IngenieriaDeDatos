<script src="https://code.highcharts.com/maps/highmaps.js"></script>
<script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
<script src="https://code.highcharts.com/mapdata/countries/ec/ec-all.js"></script>

<div id="container"></div>


<script>

var data = [
    ['ec-gu', 119792],
    ['ec-es', 12205],
    ['ec-cr', 5179],
    ['ec-im', 16330],
    ['ec-su', 4701],
    ['ec-se', 8997],
    ['ec-sd', 14738],
    ['ec-az', 36158],
    ['ec-eo', 23593],
    ['ec-lj', 19885],
    ['ec-zc', 3420],
    ['ec-cn', 8873],
    ['ec-bo', 4105],
    ['ec-ct', 10955],
    ['ec-lr', 18254],
    ['ec-mn', 33327],
    ['ec-cb', 16342],
    ['ec-ms', 4734],
    ['ec-pi', 113471],
    ['ec-pa', 3618],
    ['ec-1076', 2737],
    ['ec-na', 3216],
    ['ec-tu', 24852],
    ['ec-ga', 1329]
];

// Create the chart
Highcharts.mapChart('container', {
    chart: {
        map: 'countries/ec/ec-all'
    },

    title: {
        text: 'Cantidad de Unidades Economicas por Provincia'
    },

    subtitle: {
        text: 'Source map: <a href="http://code.highcharts.com/mapdata/countries/ec/ec-all.js">Ecuador</a>'
    },

    mapNavigation: {
        enabled: true,
        buttonOptions: {
            verticalAlign: 'bottom'
        }
    },

    colorAxis: {
        min: 0
    },

    series: [{
        data: data,
        name: 'Unidades Económicas',
        states: {
            hover: {
                color: '#BADA55'
            }
        },
        dataLabels: {
            enabled: true,
            format: '{point.name}'
        }
    }, {
        name: 'Separators',
        type: 'mapline',
        data: Highcharts.geojson(Highcharts.maps['countries/ec/ec-all'], 'mapline'),
        color: 'silver',
        nullColor: 'silver',
        showInLegend: false,
        enableMouseTracking: false
    }]
});




</script>