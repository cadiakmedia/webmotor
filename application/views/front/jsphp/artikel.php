<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

<script type="text/javascript">

$(document).ready(function(){
        
         $("#search1").keyup(function(){
            if($("#search1").val().length<=3){
                $("#finalResult").empty();
            } 
            if($("#search1").val().length>=2){
                var judul_artikel = $("input[name='judul_artikel']").val();
            $.ajax({
                url : "<?php echo base_url();?>artikel/search/1",
                method : "POST",
               

                data : {judul_artikel:judul_artikel },
                async : false,
                dataType : 'json',
                success: function(data){

                    // Update CSRF hash
                    // csrfHash = data.token;
                    // $('.txt_csrfname').val(csrfHash);
                    $("#finalResult").empty();
                    $.each(data, function(i,v){
                        if(v.judul_artikel==undefined){
                            $("#finalResult").append('<li class="dropdown-item shadow-lg form-control">NO RESULT..</li>');
                        }else{
                            $("#finalResult").append('<a href="<?=base_url('artikel/read/')?>'+ v.slug_artikel +'"><li class="dropdown-item shadow-lg form-control">'+ v.judul_artikel +'</li></a>');
                         }

                      
                    });
                 
                     
                }
            });
            }
        });
    });

    </script>