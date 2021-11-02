<?= $this->session->flashdata('message'); ?>
<div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          
					<div class="panel">
             
                    <div class="card card-custom gutter-b">
                    <div class="card-header">
						<h3 class="card-title">Data Akun </h3>
						<div class="card-toolbar">
							<div class="example-tools justify-content-center">
                                <div class='btn-group' role='group'>
                                <button id='btnGroupDrop1' type='button' class='btn btn-primary font-weight-bold ' data-target="#tambah_user" data-toggle="modal" aria-haspopup='true' >
											
                                            <span class="svg-icon svg-icon-md">
                                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
                                                <path d="M11,11 L11,7 C11,6.44771525 11.4477153,6 12,6 C12.5522847,6 13,6.44771525 13,7 L13,11 L17,11 C17.5522847,11 18,11.4477153 18,12 C18,12.5522847 17.5522847,13 17,13 L13,13 L13,17 C13,17.5522847 12.5522847,18 12,18 C11.4477153,18 11,17.5522847 11,17 L11,13 L7,13 C6.44771525,13 6,12.5522847 6,12 C6,11.4477153 6.44771525,11 7,11 L11,11 Z" fill="#000000"/>
                                            </g>
                                        </svg><!--end::Svg Icon--></spdan>Tambah User</button>
                                </div>
							</div>
						</div>
					</div>
                    <div class="card-body">
					<!--begin: Datatable-->
					<table class="table table-separate table-head-custom table-checkable" id="table">
                    <input type="hidden" class="txt_csrfname" name="<?=$csrf_name;?>" value="<?=$csrf_hash;?>" />
                         <thead class="thead-light"> 
                                <tr>
                                    <th>No</th>
                                    <th>Nama Akun</th>
                                    <th>username</th>
                                    <th>Dibuat Oleh</th>
                                    <th>Status Akun</th>
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

<div class="modal fade" id="modal_edit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Edit data User</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="">

        <div class="card-body ">
   
        <form method="post" id="form_akun_edit" > 
  
        <div class="row">
  
        <input type="hidden" class="txt_csrfname" name="<?=$csrf_name;?>" value="<?=$csrf_hash;?>" />
        <div class="form-group col-12">
            <label>Nama<span class="text-danger">*</span>:</label>
            <input type="text" id="nama_user" class="form-control" name="nama_user" placeholder="Input nama" required="required" />
            
        </div>
        <div class="form-group col-12">
            <label>Username<span class="text-danger">*</span>:</label>
            <input type="text" id="username" class="form-control" name="username" placeholder="username" required="required" />
            
        </div>
        <h4>Input password baru bila ingin merubah password!</h4>
        <div class="form-group col-12">
            <label>Password<span class="text-danger">*</span>:</label>
            <input type="password" id="password" class="form-control" name="password" placeholder="passworrd"  />
            
        </div>
        <div class="form-group col-12">
            <label>Input ulang Password<span class="text-danger">*</span>:</label>
            <input type="password" id="password1" class="form-control" name="password1" placeholder="password1" />
            
        </div>
        </div>
      
			<!--end::Form-->
		<!--end::Card-->
       
        <div class="modal-footer">
        <input type="submit" id="submit-form2" class="btn btn-primary submit-formrounded-pill " value="Submit">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		</form> 
	
		
		</div>
											
   
    </div>
  </div>
</div>
</div>
 </div>
 <div class="modal fade" id="tambah_user" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Input data user</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="">

        <div class="card-body ">
   
        <form method="post" id="form_akun" > 
  
        <div class="row">
  
        <input type="hidden" class="txt_csrfname" name="<?=$csrf_name;?>" value="<?=$csrf_hash;?>" />
        <div class="form-group col-12">
            <label>Nama<span class="text-danger">*</span>:</label>
            <input type="text" id="nama_user" class="form-control" name="nama_user" placeholder="Input nama" required="required" />
            
        </div>
        <div class="form-group col-12">
            <label>Username<span class="text-danger">*</span>:</label>
            <input type="text" id="username" class="form-control" name="username" placeholder="username" required="required" />
            
        </div>
   
        <div class="form-group col-12">
            <label>Password<span class="text-danger">*</span>:</label>
            <input type="password" id="password" class="form-control" name="password" placeholder="passworrd" require="required" />
            
        </div>
        <div class="form-group col-12">
            <label>Input ulang Password<span class="text-danger">*</span>:</label>
            <input type="password" id="password1" class="form-control" name="password1" placeholder="password1" require="required" />
            
        </div>
        </div>
      
			<!--end::Form-->
		<!--end::Card-->
       
        <div class="modal-footer">
        <input type="submit" id="submit-form2" class="btn btn-primary submit-formrounded-pill " value="Submit">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		</form> 
	
		
		</div>
											
   
    </div>
  </div>
</div>
</div>
 </div>