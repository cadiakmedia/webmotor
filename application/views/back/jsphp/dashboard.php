<script type="text/javascript">
    // Set CodeIgniter base_url in JavaScript var to use within
</script>
<script type="text/javascript">
 
var table;
 
$(document).ready(function() {
 const foto = <?php echo json_encode($array_foto); ?>;
    for(var i=0 ; i< foto.length ; i++) {
        if(i == 0){
         $('#slidera').append('<li data-target="#carouselExampleIndicators" data-slide-to="'+ i +'" class="active "></li>')
          $('#slidera1').append('<div class="carousel-item active" style=" margin-left: auto; margin-right: auto;"><img class="d-block mx-auto " style="max-width:450px;max-height:370px"  src="<?= base_url("galery/")?>'+foto[i]['foto']+'" alt="First slide"></div>');
        
          }else{
           $('#slidera').append('<li data-target="#carouselExampleIndicators "  data-slide-to="'+ i +'" ></li>')
           $('#slidera1').append('<div class="carousel-item"><img class="d-block" style="max-width:450px;max-height:370px" src="<?= base_url("galery/")?>'+ foto[i]['foto'] +'" alt="First slide"></div>');
        
          }
        }
 
});
</script>
<script type="text/javascript">
var jumlah_pengunjung = <?php echo json_encode($jumlah_pengunjung); ?>;
          var options = {
          series: [{
          name: 'Pengunjung',
          data: jumlah_pengunjung,
        }],
          chart: {
          height: 350,
          type: 'area'
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'smooth'
        },
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug','Sep','Okt','Nov','Des'],
        }
        };
        // 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 
        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
</script>
