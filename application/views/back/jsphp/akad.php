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
                                window.location.href="<?= base_url()?>panel/akad"
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
          url:"<?=base_url('panel/akad/hapus/')?>"+ id,  
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
 $(document).ready(function() {
  var url = window.location.pathname;
  var id = url.substring(url.lastIndexOf('/') + 1);   

   var csrfName = $('.txt_csrfname').attr('name'); // Value specified in $config['csrf_token_name']
   var csrfHash = $('.txt_csrfname').val(); // CSRF hash
     //datatables
  
     table1 = $('#table-foto').DataTable({ 
  
             responsive: true,
             processing: true, //Feature control the processing indicator.
             serverSide: true, //Feature control DataTables' server-side processing mode.
             paging:   false,
             ordering: false,
             info:     false,
             searching: false,
             order: [], //Initial no order.
         
 
             // Load data for the table's content from an Ajax source
             ajax: {
                 url: "<?= site_url('' . $url3 . ''); ?>/"+ id,
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
  $('#form2').on('submit', function(event){
    event.preventDefault();
    var url = window.location.pathname;
  var id = url.substring(url.lastIndexOf('/') + 1);  
	        $.ajax({
	            url:"<?= site_url('' . $url2 . ''); ?>/"+ id,
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
 
  });
 
    
</script>

<script>
  function image(){
        $("#tampil img").click(function () {
          // Displays the source of the image clicked
         link=$(this).attr("src");
         
  
  swal({
        title: 'Menunggu',
        html: 'Memproses data',
        allowEscapeKey: false,
        allowOutsideClick: false,
        timer: 1000,
        onOpen: () => {
         
        swal.showLoading();
        }
    }).then(function() {  
      const myNode = document.getElementById("foto1");
      myNode.innerHTML = '';
     var img = document.createElement("img");
      img.src = link;
      var src = document.getElementById("foto1");
      src.appendChild(img);
    
      $('#modal-foto').modal('show');

});
        });
      };
</script>

<script type="text/javascript">
var csrfName = $('.txt_csrfname').attr('name'); // Value specified in $config['csrf_token_name']
  var csrfHash = $('.txt_csrfname').val(); // CSRF hash
  function hapus_foto(id){
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
          url:"<?=base_url('panel/akad/hapus_foto/')?>"+ id,  
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
  $(document).on('click','#edit_foto', function(){
  const myNode = document.getElementById("foto_foto");
  myNode.innerHTML = '';
 
  var id =  $(this).data('id');
  $.ajax({
              type: "post",
              dataType:"json",
              url: "<?=base_url('panel/akad/get_id_foto')?>",
              beforeSend :function () {
                swal({
                    title: 'Menunggu',
                    html: 'Memproses data',
                    onOpen: () => {
                      swal.showLoading()
                    }
                  });      
                },
            data: {id:id,'token_emot': $('input[name=token_emot]').val(),},
              success: function (data) {
              swal.close();
              const myNode = document.getElementById("foto_foto");
              myNode.innerHTML = '';
              $('input[name=token_emot]').val(data.token_emot);
             
                var img = document.createElement("img");
   
                img.src = "<?php echo base_url('/galery/')?>"+ data['data']['foto'];
                var src = document.getElementById("foto_foto");
                src.appendChild(img);
                
                document.getElementById("judul_edit").value = data['data']['judul'];
                  $('#modal_edit_foto').modal('show');
                  }
  });
  $('#form_foto').on('submit', function(event){
    event.preventDefault();
  
	        $.ajax({
	            url:"<?=base_url('panel/akad/input_foto')?>/"+ id,
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
    
 
  });
 
    
</script>
<script>
  $('#form_tambah1').on('submit', function(event){
    event.preventDefault();
    var id = document.getElementById('id_akad').value;
	        $.ajax({
            url:"<?=base_url('panel/akad/tambah_foto')?>/"+ id,
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