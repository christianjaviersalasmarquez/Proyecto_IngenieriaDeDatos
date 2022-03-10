<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<figure class="highcharts-figure">
    <div id="container" style="width: 60%;"></div>
    <h1 class="display-6">
        El presente gráfico muestra los resultados de un 
        Análisis de Correspondencia Múltiple que permite 
        estudiar las proximidades entre los atributos.
    </h1>
</figure>

<script>




    Highcharts.chart('container', {
    chart: {
        type: 'scatter',
        zoomType: 'xy'
    },
    title: {
        text: 'Análisis de Correspondencia Múltiple'
    },
    subtitle: {
        text: 'Source: Censo Nacional Económico 2010 - INEC'
    },
    xAxis: {
        title: {
            enabled: true,
            text: 'k = 1'
        },
        plotLines: [{
            color: 'lightblue',
            dashStyle: 'Solid',
            width: 2,
            value: 0,
            label: {
                rotation: 0,
                y: 15,
                style: {
                    fontStyle: 'italic'
                },
                text: ''
            },
            zIndex: 3
        }],
        
        startOnTick: true,
        endOnTick: true,
        showLastLabel: true
    },
    yAxis: {
        title: {
            text: 'k = 2'
        },
        plotLines: [{
            color: 'lightblue',
            dashStyle: 'Solid',
            width: 2,
            value: 0,
            label: {
                align: 'right',
                style: {
                    fontStyle: 'italic'
                },
                text: '',
                x: -10
            },
            zIndex: 3
        }]
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'top',
        x: 0,
        y: 70,
        
        backgroundColor: Highcharts.defaultOptions.chart.backgroundColor,
        borderWidth: 0
    },
    plotOptions: {
        scatter: {
            marker: {
                radius: 5,
                states: {
                    hover: {
                        enabled: true,
                        lineColor: 'rgb(100,100,100)'
                    }
                }
            },
            states: {
                hover: {
                    marker: {
                        enabled: false
                    }
                }
            },
            tooltip: {
                headerFormat: '<b>{series.name}</b><br>',
                pointFormat: '{point.x} , {point.y} '
            }
        }
    },
    series: [{
        name: 'Hombre',
        color: 'rgb(0,255,255)',
        data: [[0.116,-0.04]]

    }, {
        name: 'Mujer',
        color: 'rgb(0,206,209)',
        data: [[-0.1,0.03]]
    }, {
        name: 'Establecimiento Único',
        color: 'rgb(64,224,208)',
        data: [[-0.042,0.001]]
    }, {
        name: 'Matriz',
        color: 'rgb(72,209,204)',
        data: [[0.727,0.301]]
    }, {
        name: 'Sucursal',
        color: 'rgb(175,238,238)',
        data: [[0.593,-0.212]]
    }, {
        name: 'Auxiliar',
        color: 'rgb(127,255,212)',
        data: [[0.13,-0.125]]
    }, {
        name: 'Al por mayor',
        color: 'rgb(176,224,230)',
        data: [[0.872,0.496]]
    }, {
        name: 'Al por menor',
        color: 'rgb(95,158,160)',
        data: [[-0.144,0.129]]
    }, {
        name: 'No informa Actividad de Comercio',
        color: 'rgb(70,130,180)',
        data: [[0.148,-0.173]]
    }, {
        name: 'Principal Cliente Nacional: Empresas Públicas',
        color: 'rgb(100,149,237)',
        data: [[1.543,0.31]]
    }, {
        name: 'Principal Cliente Nacional: Empresas Privadas',
        color: 'rgb(0,191,255)',
        data: [[1.673,0.565]]
    }, {
        name: 'Principal Cliente Nacional: Público en General',
        color: 'rgb(30,144,255)',
        data: [[0.992,0.076]]
    }, {
        name: 'Principal Cliente Nacional: No informa',
        color: 'rgb(173,216,230)',
        data: [[-0.018,-0.009]]
    }, {
        name: 'Principal Cliente Exterior: Empresas Públicas',
        color: 'rgb(135,206,235)',
        data: [[1.175,0.309]]
    }, {
        name: 'Principal Cliente Exterior: Empresas Privadas',
        color: 'rgb(135,206,250)',
        data: [[2.045,0.797]]
    }, {
        name: 'Principal Cliente Exterior: Público en General',
        color: 'rgb(0,100,0)',
        data: [[1.071,0.006]]
    }, {
        name: 'Principal Cliente Exterior: No informa',
        color: 'rgb(0,128,0)',
        data: [[0.003,-0.005]]
    }, {
        name: 'Registro Contables: Si',
        color: 'rgb(34,139,34)',
        data: [[0.776,0.017]]
    }, {
        name: 'Registros Contables: No',
        color: 'rgb(0,100,0)',
        data: [[-0.094,-0.007]]
    }, {
        name: 'Institución sin Fines de Lucro',
        color: 'rgb(50,205,50)',
        data: [[0.453,-0.453]]
    }, {
        name: 'Empresa privada no financiera',
        color: 'rgb(144,238,144)',
        data: [[1.207,0.352]]
    }, {
        name: 'Empresa de Control Extranjero',
        color: 'rgb(152,251,152)',
        data: [[1.44,0.333]]
    }, {
        name: 'Empresa Pública',
        color: 'rgb(143,188,143)',
        data: [[0.511,-0.417]]
    }, {
        name: 'Instituciones reguladas por la SBS',
        color: 'rgb(0,250,154)',
        data: [[1.664,0.308]]
    }, {
        name: 'Gobierno',
        color: 'rgb(0,255,127)',
        data: [[0.527,-0.567]]
    }, {
        name: 'Cooperativa de Ahorro',
        color: 'rgb(46,139,87)',
        data: [[1.178,0.019]]
    }, {
        name: 'Cooperativa de Producción',
        color: 'rgb(102,205,170)',
        data: [[0.659,-0.174]]
    }, {
        name: 'Asociación',
        color: 'rgb(60,179,113)',
        data: [[0.507,-0.153]]
    }, {
        name: 'Empresa de Persona Natural',
        color: 'rgb(250,235,215)',
        data: [[-0.089,0.015]]
    }, {
        name: 'Investigaciones de Mercado: Si',
        color: '(245,245,220)',
        data: [[0.629,0.178]] 
    }, {
        name: 'Investigaciones de Mercado: No',
        color: 'rgb(165,42,42)',
        data: [[-0.035,0.005]]
    }, {
        name: 'Gasto en Capacitación: Si',
        color: 'rgb(233,150,122)',
        data: [[0.854,0.123]]
    }, {
        name: 'Gasto en Capacitación: No',
        color: 'rgb(250,128,114)',
        data: [[-0.061,0.003]]
    }, {
        name: 'Uso de Internet: Si',
        color: 'rgb(75,0,130)',
        data: [[0.637,0.098]]
    }, {
        name: 'Uso de Internet: No',
        color: 'rgb(72,61,139)',
        data: [[-0.105,-0.003]]
    }, {
        name: 'Sierra',
        color: 'rgb(0,0,139)',
        data: [[0.036,-0.005]]
    }, {
        name: 'Costa',
        color: 'rgb(139,69,19)',
        data: [[-0.021,-0.001]]
    }, {
        name: 'Amazonía',
        color: 'rgb(160,82,45)',
        data: [[-0.016,-0.057]]
    }, {
        name: 'Insular',
        color: 'rgb(244,164,96)',
        data: [[0.218,-0.073]]
    }, {
        name: 'Región No Delimitada',
        color: 'rgb	(222,184,135)',
        data: [[-0.08,-0.064]]
    }, {
        name: 'Financiamiento de Instituciones Públicas',
        color: 'rgb(255,228,181)',
        data: [[-0.044,0.04]]
    }, {
        name: 'Financiamiento de Instituciones Privadas',
        color: 'rgb(255,222,173)',
        data: [[0.026,0.093]]
    }, {
        name: 'Financiamiento del Gobierno',
        color: 'rgb(255,218,185)',
        data: [[-0.139,0.047]]
    }, {
        name: 'Financiamiento de Instituciones no Reguladas por la SBS',
        color: 'rgb(255,228,225)',
        data: [[-0.138,0.048]]
    }, {
        name: 'Otras Fuentes de Financiamiento Con Garantía',
        color: 'rgb(255,240,245)',
        data: [[-0.065,0.052]]
    }, {
        name: 'Otras Fuentes de Financiamiento Sin Garantía',
        color: 'rgb(250,240,230)',
        data: [[-0.06,0.054]]
    }, {
        name: 'Ingresos: No informa',
        color: 'rgb(46,139,87)',
        data: [[0.51,-0.625]]
    }, {
        name: 'Ingresos: De 1$ a $9999',
        color: 'rgb(102,205,170)',
        data: [[-0.122,-0.016]]
    }, {
        name: 'Ingresos: De $10000 a $29999',
        color: 'rgb(60,179,113)',
        data: [[-0.059,-0.009]]
    }, {
        name: 'Ingresos: De $30000 a $49999',
        color: 'rgb(32,178,170)',
        data: [[0.018,0.023]]
    }, {
        name: 'Ingresos: De $50000 a $69999',
        color: 'rgb(47,79,79)',
        data: [[0.1,0.052]]
    }, {
        name: 'Ingresos: De $70000 a $89999',
        color: 'rgb(0,128,128)',
        data: [[0.174,0.074]]
    }, {
        name: 'Ingresos: De $90000 a $199999',
        color: 'rgb(0,139,139)',
        data: [[0.356,0.11]]
    }, {
        name: 'Ingresos: De $200000 a $399999',
        color: 'rgb(95,158,160)',
        data: [[0.688,0.184]]
    }, {
        name: 'Ingresos: Más de $400000',
        color: 'rgb(70,130,180)',
        data: [[1.243,0.353]]
    }, {
        name: 'Sector: Manufactura',
        color: 'rgb(218,112,214)',
        data: [[0.082,-0.107]]
    }, {
        name: 'Sector: Comercio',
        color: 'rgb	(199,21,133)',
        data: [[-0.111,0.138]]
    }, {
        name: 'Sector: Servicios',
        color: 'rgb(219,112,147)',
        data: [[0.164,-0.19]]
    }, {
        name: 'Otros (Agricultura, Minas, Organizaciones)',
        color: 'rgb(255,182,193)',
        data: [[0.812,0.094]]
    }]
});

          
</script>


