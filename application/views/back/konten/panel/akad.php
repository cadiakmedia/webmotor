<?= $this->session->flashdata('message'); $mulai=1; ?>
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          
					<div class="panel">
             
                    <div class="card card-custom gutter-b">
                    <div class="card-header pt-3">
						<h3 class="card-title">Data Akad</h3>
						<div class="card-toolbar">
							<div class="example-tools justify-content-center">
                 <div class='btn-group' role='group'>
                 <a href="<?= base_url()?>panel/akad/tambah"><button id='btnGroupDrop1' type='button' class='btn btn-primary font-weight-bold '  >
											
    <span class="svg-icon svg-icon-md">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
        <path d="M11,11 L11,7 C11,6.44771525 11.4477153,6 12,6 C12.5522847,6 13,6.44771525 13,7 L13,11 L17,11 C17.5522847,11 18,11.4477153 18,12 C18,12.5522847 17.5522847,13 17,13 L13,13 L13,17 C13,17.5522847 12.5522847,18 12,18 C11.4477153,18 11,17.5522847 11,17 L11,13 L7,13 C6.44771525,13 6,12.5522847 6,12 C6,11.4477153 6.44771525,11 7,11 L11,11 Z" fill="#000000"/>
    </g>
</svg><!--end::Svg Icon--></spdan>Tambah Akad</button></a>
                 
							</div>
						</div>
					</div>
                    <div class="card-body">
                      
					<!--begin: Datatable-->
					<table class="table table-separate table-head-custom table-checkable" id="table1">
          <input type="hidden" class="txt_csrfname" name="<?=$csrf_name;?>" value="<?=$csrf_hash;?>" />
                         <thead class="thead-light"> 
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Slug</th>
                                    <th>Dibuat Oleh</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                
                            
                        </table>
                    </div>  
                    </div>
                </div>
            </div>
</div>

</div>

<!-- Modal -->
<div class="modal fade" id="form_akad" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input data Akad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="">

        <div class="card-body ">
   
        <form method="post" id="form1" enctype="multipart/form-data" > 
        <div class="card-body ">
        <div class="row">

        <input type="hidden" class="txt_csrfname" name="<?=$csrf_name;?>" value="<?=$csrf_hash;?>" />
        <div class="form-group col-12">

        <label>Foto Akad<span class="text-danger">*</span>:</label><a onclick="remove()" class="btn btn-primary ml-2 float-right mb-3"><i class="fas fa-minus-circle"></i></a>
          <a onclick="add()" class="btn btn-primary float-right"><i class="fas fa-plus-circle"></i></a>
          <div id="new_chq"></div>
          
          <input type="file"  id="new_1" name="a1" class="form-control pt-2 tambah"/>
          <input type="hidden" value="<?= $mulai?>" id="total_chq" name="jumlah" class="form-control tambah">
          
						
	
           
        </div>
        <div class="form-group col-12">
				<label>Judul akad<span class="text-danger">*</span>:</label>
				<input type="text" id="judul" class="form-control" name="judul" placeholder="Input Judul Page" required="required" />
				
			</div>
      <div class="form-group col-12">
				<label>Slug akad<span class="text-danger">*</span>:</label>
				<input type="text" id="slug" class="form-control" name="slug" placeholder="Input Slug Page" required="required" />				
			</div>
      <div class="form-group col-12">
				<label>Konten akad<span class="text-danger">*</span>:</label>
				<input type="text" id="konten" class="form-control" name="konten" placeholder="Input Konten Page" required="required" />				
			</div>
       
        
		
                
        </div>
        </div>
	
			<!--end::Form-->
		
		<!--end::Card-->
       
        <div class="modal-footer">
        <input type="submit" id="submit-form2" class="btn btn-primary submit-formrounded-pill " value="Submit Foto">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		</form> 
	
		
		</div>
											
   
    </div>
  </div>
</div>
</div>
 </div>


 <div class="modal fade" id="edit_akad" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit data akad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="">

        <div class="card-body ">
   
        <form method="post" id="form2" > 
  
        <div class="row">
        <div class='btn-group ml-auto ' role='group'>
<button id='btnGroupDrop1' type='button' class='btn btn-primary font-weight-bold ' data-target="#tambah_foto" data-toggle="modal" aria-haspopup='true' >
											
    <span class="svg-icon svg-icon-md">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
        <path d="M11,11 L11,7 C11,6.44771525 11.4477153,6 12,6 C12.5522847,6 13,6.44771525 13,7 L13,11 L17,11 C17.5522847,11 18,11.4477153 18,12 C18,12.5522847 17.5522847,13 17,13 L13,13 L13,17 C13,17.5522847 12.5522847,18 12,18 C11.4477153,18 11,17.5522847 11,17 L11,13 L7,13 C6.44771525,13 6,12.5522847 6,12 C6,11.4477153 6.44771525,11 7,11 L11,11 Z" fill="#000000"/>
    </g>
</svg><!--end::Svg Icon--></spdan>Tambah Foto</button>
                 
							</div>
        <input type="hidden" class="txt_csrfname" name="<?=$csrf_name;?>" value="<?=$csrf_hash;?>" />
       
        <!-- <div id="carouselExampleIndicators" class="carousel slide mx-auto" data-ride="carousel">
          <ol id=slider class="carousel-indicators">
  
          </ol>
          <div id="slider1" class="carousel-inner"  >
          
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div> -->
        <div class="form-group col-12">
        <table class="table table-separate table-head-custom table-checkable mx-auto" id="table-foto">
          <!-- <input type="hidden" class="txt_csrfname" name="<?=$csrf_name;?>" value="<?=$csrf_hash;?>" /> -->
                         <thead class="thead-light"> 
                                <tr>
                                    <th>No</th>
                                    <th>Foto Akad</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                
                            
                        </table>

      </div>
        <div id="input" class="form-group col-12">
        
        
       </div>
      <input type="hidden" id="jumlah_foto" class="form-control" name="jumlah_foto"/>
      <input type="hidden" id="id_akad" class="form-control" name="id_akad"/>
      <div class="form-group col-12">
      <label>Judul Akad<span class="text-danger">*</span>:</label>
      <input type="text" id="judul_edit" class="form-control" name="judul_edit" placeholder="Input Judul Page" required="required" />
       
      </div>
      <div class="form-group col-12">
      <label>Slug Akad<span class="text-danger">*</span>:</label>
      <input type="text" id="slug_edit" class="form-control" name="slug_edit" placeholder="Input Slug Page" required="required" />				
      </div>
      <div class="form-group col-12">
      <label>Konten Akad<span class="text-danger">*</span>:</label>
      <input type="text" id="konten_edit" class="form-control" name="konten_edit" placeholder="Input Konten Page" required="required" />				
      </div>
   
		
                
        </div>
      
	
			<!--end::Form-->
		
		<!--end::Card-->
       
        <div class="modal-footer">
        <input type="submit" id="submit-form2" class="btn btn-primary submit-formrounded-pill " value="Submit Foto">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		</form> 
	
		
		</div>
											
   
    </div>
  </div>
</div>
</div>
 </div>


 
 <div class="modal fade" id="view_akad" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Data akad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="">

        <div class="card-body ">
   
        <form method="post" id="form2" > 
  
        <div class="row">
 
        <input type="hidden" class="txt_csrfname" name="<?=$csrf_name;?>" value="<?=$csrf_hash;?>" />
        <div id="carouselExampleIndicators" class="carousel slide mx-auto" data-ride="carousel">
          <ol id=slidera class="carousel-indicators">
  
          </ol>
          <div id="slidera1" class="carousel-inner"  >
          
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
     
        <div id="input" class="form-group col-12">
        
        
       </div>
      <input type="hidden" id="jumlah_foto" class="form-control" name="jumlah_foto"/>
      <input type="hidden" id="id_akad" class="form-control" name="id_akad"/>
      <div class="form-group col-12">
      <label>Judul Akad<span class="text-danger">*</span>:</label>
      <input type="text" id="judul_view" class="form-control" name="judul_view" placeholder="Input Judul Page" required="required" />
       
      </div>
      <div class="form-group col-12">
      <label>Slug Akad<span class="text-danger">*</span>:</label>
      <input type="text" id="slug_view" class="form-control" name="slug_view" placeholder="Input Slug Page" required="required" />				
      </div>
      <div class="form-group col-12">
      <label>Konten Akad<span class="text-danger">*</span>:</label>
      <input type="text" id="konten_view" class="form-control" name="konten_view" placeholder="Input Konten Page" required="required" />				
      </div>
   
		
                
        </div>
      
	
			<!--end::Form-->
		
		<!--end::Card-->
       
        <div class="modal-footer">
    
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		</form> 
	
		
		</div>
											
   
    </div>
  </div>
</div>
</div>
 </div>
 

 <!-- Modal -->
<div class="modal fade" id="modal-foto" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Foto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="">

        <div class="card-body ">
   
            <div id="foto1"></div>
	
		
		</div>
											
      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="modal_edit_foto" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit data Foto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="">

        <div class="card-body ">
   
        <form method="post" id="form_foto" > 
  
        <div class="row">
  
        <input type="hidden" class="txt_csrfname" name="<?=$csrf_name;?>" value="<?=$csrf_hash;?>" />
        <div class="form-group col-12">
	
            <label>Data Foto<span class="text-danger">*</span>:</label>
            <div id="foto_foto"></div>
            <div class="custom-file  mt-10">
            <input type="file" class="custom-file-input" id="foto_edit" name="foto_edit1"/>
            <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
        </div>      
        </div>
      
			<!--end::Form-->
		<!--end::Card-->
       
        <div class="modal-footer">
        <input type="submit" id="submit-form2" class="btn btn-primary submit-formrounded-pill " value="Submit Foto">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		</form> 
	
		
		</div>
											
   
    </div>
  </div>
</div>
</div>
 </div>

 <div class="modal fade" id="tambah_foto" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input data Foto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="">

        <div class="card-body ">
   
        <form method="post" id="form_tambah1" > 
        <div class="card-body ">
        <div class="row">
        <div class="form-group col-12">
        <input type="hidden" class="txt_csrfname" name="<?=$csrf_name;?>" value="<?=$csrf_hash;?>" />
        <div class="form-group col-12">
	
            <label>Data Foto<span class="text-danger">*</span>:</label>
            <div id="foto"></div>
            <div class="custom-file">
            <input type="file" class="custom-file-input" id="foto_baru" name="foto_baru"/>
            <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
        </div>
      
       
        </div>
		
                
        </div>
        </div>
	
			<!--end::Form-->
		
		<!--end::Card-->
       
        <div class="modal-footer">
        <input type="submit" id="submit-form2" class="btn btn-primary submit-formrounded-pill " value="Submit Foto">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		</form> 
	
		
		</div>
											
   
    </div>
  </div>
</div>
</div>
 </div>
