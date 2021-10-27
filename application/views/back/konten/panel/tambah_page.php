<?= $this->session->flashdata('message'); ?>
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          
					<div class="panel">
             
                    <div class="card card-custom gutter-b">
                    <div class="card-header pt-3">
						<h3 class="card-title">Data Page</h3>
						<div class="card-toolbar">
							<div class="example-tools justify-content-center">
            
						</div>
					</div>
                     
                    </div>
             
   
                    <form method="post" id="form1" > 
                    <div class="card-body ">
                    <div class="row">

                    <input type="hidden" class="txt_csrfname" name="<?=$csrf_name;?>" value="<?=$csrf_hash;?>" />
                    <div class="form-group col-12">
                
                        <label>Foto Page<span class="text-danger">*</span>:</label>
                        <div id="foto"></div>
                        <div class="custom-file">
                        <input type="file" class="custom-file-input" id="foto" name="foto"/>
                        <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                    <div class="form-group col-12">
                            <label>Judul Page<span class="text-danger">*</span>:</label>
                            <input type="text" id="judul" class="form-control" name="judul" placeholder="Input Judul Page" required="required" />
                            
                        </div>
             
                <div class="form-group col-12">
                            <label>Konten<span class="text-danger">*</span>:</label>
                            <textarea  id="konten" class="form-control" name="konten" placeholder="Input Konten Page" required="required">	</textarea>			
                        </div>

                
                    
                    
                            
                    </div>
                    </div>
                
                        <!--end::Form-->
                    
                    <!--end::Card-->
                
                    <div class="card-footer">
                    <input type="submit" onclick="tinyMCE.triggerSave(true,true);" id="submit-form2" class="btn btn-primary submit-formrounded-pill float-right mb-5 ml-3" value="Submit Foto">
                    <button  type="button" onClick="window.history.back();" class="btn btn-secondary float-right mb-5" >Back</button>
                    </form> 
                
                    
                    </div>

                </div>
            </div>
</div>

</div>

