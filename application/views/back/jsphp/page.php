<script type="text/javascript">
    // Set CodeIgniter base_url in JavaScript var to use within
</script>
<script type="text/javascript">
 
var table;
 
$(document).ready(function() {
  var csrfName = $('.txt_csrfname').attr('name'); // Value specified in $config['csrf_token_name']
  var csrfHash = $('.txt_csrfname').val(); // CSRF hash
    //datatables
    table = $('#table1').DataTable({ 
 
            responsive: true,
            processing: true, //Feature control the processing indicator.
            serverSide: true, //Feature control DataTables' server-side processing mode.
            order: [], //Initial no order.
        

            // Load data for the table's content from an Ajax source
            ajax: {
                url: "<?= site_url('' . $url . ''); ?>",
                type: "POST",
                dataType: "json",
                data: {
                    'token_emot': $('input[name=token_emot]').val()
                },
                data: function(data) {
                    data.token_emot = $('input[name=token_emot]').val();
                },
                dataSrc: function(response) {
                    $('input[name=token_emot]').val(response.token_emot);
                    return response.data;
                }


            },
 
        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ 0 ], //first column / numbering column
            "orderable": false, //set not orderable
        },
        ],
 
    });

 
});


</script>

<script>
  $('#form1').on('submit', function(event){
    event.preventDefault();
		
	        $.ajax({
	            url:"<?= site_url('' . $url1 . ''); ?>",
	            type:'POST',
	            dataType: "json",
              contentType: false,
              cache: false,
              processData:false,
                beforeSend :function () {
                    swal({
                            title: 'Menunggu',
                            html: 'Memproses data',
                            allowEscapeKey: false,
                            allowOutsideClick: false,
                            timer: 2000,
                            onOpen: () => {
                            swal.showLoading();
                            }
                        })  
                    },
                    data:  new FormData(this),
				
	            success: function(data) {
	                // Update CSRF hash
                    csrfHash = data.token_emot;
                    $('.token_emot').val(csrfHash);

                if(data.error){
                  csrfHash = data.token;
                              swal({
                                  type: 'Danger',
                                  title: 'Data Gagal ditambahkan',
                                  
                              })
          
                }else if(data.success){         
                              swal({
                                  type: 'success',
                                  title: 'Data berhasil Ditambahkan',
                                  
                              }).then(function() {  
                window.location.href="<?= base_url()?>panel/page"

});
                            }
                }
	        });


	    }); 

</script>
<script>
  var csrfName = $('.txt_csrfname').attr('name'); // Value specified in $config['csrf_token_name']
  var csrfHash = $('.txt_csrfname').val(); // CSRF hash
  function hapus(id){
    swal({
      title: 'Konfirmasi Hapus',
      text: "Anda Yakin?",
      type: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Hapus',
      confirmButtonColor: '#d33',
      cancelButtonColor: '#3085d6',
      cancelButtonText: 'Tidak',
      reverseButtons: true
    }).then((result) => {
      if (result.value) {
        $.ajax({
          url:"<?=base_url('panel/page/hapus/')?>"+ id,  
          method:"post",
          beforeSend :function () {
          swal({
              title: 'Menunggu',
              html: 'Memproses data',
              onOpen: () => {
                swal.showLoading()
              }
            })      
          },    
          data:{id:id,  'token_emot': $('input[name=token_emot]').val(),},
          success:function(data){
             // Update CSRF hash
             csrfHash = data.token_emot;
                    $('.token_emot').val(csrfHash);
            swal(
              'Dihapus',
              'Berhasil Dihapus!',
              'success'
            ).then(function() {  
                 location.reload(); 

});
           
            
          }
        })
    } else if (result.dismiss === swal.DismissReason.cancel) {
      
        swal(
          
          'Batal',
          'Anda batal menghapus!',
          'error'
        )
      }
    })
  }
</script>
<script>

  $('#form2').on('submit', function(event){
    event.preventDefault();

	        $.ajax({
	            url:"<?= site_url('' . $url2 . ''); ?>",
	            type:'POST',
	            dataType: "json",
              contentType: false,
              cache: false,
              processData:false,
                beforeSend :function () {
                    swal({
                            title: 'Menunggu',
                            html: 'Memproses data',
                            allowEscapeKey: false,
                            allowOutsideClick: false,
                            timer: 2000,
                            onOpen: () => {
                            swal.showLoading();
                            }
                        })  
                    },
                    data:  new FormData(this),
				
	            success: function(data) {
	                // Update CSRF hash
                    csrfHash = data.token_emot;
                    $('.token_emot').val(csrfHash);

                if(data.error){
                  csrfHash = data.token;
                              swal({
                                  type: 'Danger',
                                  title: 'Data Gagal ditambahkan',
                                  
                              })
          
                }else if(data.success){         
                              swal({
                                  type: 'success',
                                  title: 'Data berhasil Ditambahkan',
                                  
                              }).then(function() {  
                 location.reload(); 

                });
                            }
                }
	        });


	    }); 

</script>




