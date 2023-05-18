<?php
foreach($mysqli->daftar_tamu_g_tanggal()as $cek);
if($cek!==null){
    foreach($mysqli->daftar_tamu_g_tanggal()as $d){
        $tanggal[] = date(' d M Y', strtotime($d['tanggal']));
        $data[] = $d['data'];
    }
}else{
    $tanggal[] = null;
    $data[] = null;
}
?>
<h4>Home</h4>
<div id="chart"></div>
<script src="assets/js/apexcharts.min.js"></script> 

<script>
    var options = {
          series: [{
          name: 'Pengunjung ',
          data: [<?php 
                    $data = $data;
			  		foreach($data as $key => $value){ 
					  echo "$value,"; 
					}  ?>]
        }],
          chart: {
          type: 'bar',
          height: 350
        },
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '55%',
            endingShape: 'rounded'
          },
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          show: true,
          width: 2,
          colors: ['transparent']
        },
        xaxis: {
          categories: [<?php $data = $tanggal;
			  		    foreach($data as $key => $value) { 
				    	echo " '$value', "; 
					    }  
				       ?>],
        },
        yaxis: {
          title: {
            text: 'Data Kunjungan '
          }
        },
        fill: {
          opacity: 1
        },
        tooltip: {
          y: {
            formatter: function (val) {
              return  val + " Orang"
            }
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
 
</script>
