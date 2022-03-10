<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<figure class="highcharts-figure">
    <div id="container"></div>
    <p class="highcharts-description">
        La funcion chisq.test() ejecuta una prueba Xi cuadrado a una tabla de contingencia para evaluar la bondad de ajuste. 
        <br>Para el test, se consideran las proporciones p1, p2, p3, p4 y p5 de los gerentes de las empresas que respondieron 'Si' en las variables respectivas. 
        <br>En este caso se tienen 5 variables, por lo tanto se tienen 5 proporciones. Entonces
        <br><br>H0: p1 = p2 = p3 = p4 = p5 <br>
        H1: No todas las proporciones son iguales
        <br><br>Se obtuvo un valor p menor a 2.2e-16, es decir mucho menor que la significancia 0.05. 
        <br>Esto significa que la probabilidad de que las proporciones sean iguales es de 2.2e-16. Por lo tanto, se rechaza la hipótesis nula.
    </p>

    <table id="datatable">
        <thead>
            <tr>
                <th></th>
                <th>Si</th>
                <th>No</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Gasto Capacitacion</th>
                <td> 19214</td>
                <td>448088</td>
            </tr>
            <tr>
                <th>Gasto Investigacion</th>
                <td>3124</td>
                <td>464178</td>
            </tr>
            <tr>
                <th>Investigacion de Mercado</th>
                <td>8544</td>
                <td>458758</td>
            </tr>
            <tr>
                <th>Registros Contables</th>
                <td>62315</td>
                <td>437902</td>
            </tr>
            <tr>
                <th>Uso de Internet</th>
                <td>51389</td>
                <td>415913</td>
            </tr>
        </tbody>
    </table>
</figure>


<script>
    Highcharts.chart('container', {
    data: {
        table: 'datatable'
    },
    chart: {
        type: 'column'
    },
    title: {
        text: 'Estadistica Inferencial: Prueba Xi Cuadrado'
    },
    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Units'
        }
    },
    tooltip: {
        formatter: function () {
            return '<b>' + this.series.name + '</b><br/>' +
                this.point.y + ' ' + this.point.name.toLowerCase();
        }
    }
});

</script>