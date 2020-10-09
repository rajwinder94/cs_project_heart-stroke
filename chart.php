
          
          


<!Doctype html>
<head>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<style>
#container {
min-width: 310px;
max-width: 1000px;
height: 400px;
margin: 0 auto
}
</style>

</head>
<body>
<div id="container"></div>
</body>
</html>
 
<script>
Highcharts.chart('container', {

   title: {
       text: 'Revenue raised since 2015'
   },

   subtitle: {
       text: 'Source: Heart and Stroke Foundation'
   },

   yAxis: {
       title: {
           text: 'Revenue Raised'
       }
   },
   legend: {
       layout: 'vertical',
       align: 'right',
       verticalAlign: 'middle'
   },

   plotOptions: {
       series: {
           pointStart: 2007
       }
   },

   series: [{
       name: 'Funds raised',
       data:[<?php while($row = $result->fetch_assoc()) {
  echo $row["revenue_gen"].",";
      }?>]
   }]

});
</script>