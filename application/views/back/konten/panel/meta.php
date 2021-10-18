<?= $this->session->flashdata('message'); ?>
<div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          
					<div class="panel">
             
                    <div class="card card-custom gutter-b">
                    <div class="card-header pt-3">
					<h3 class="card-title">Data meta</h3>
					</div>	
                    <div class="card-body">
                    <?php   foreach ($meta as  $value) :   ?>
                    <div class="row">
                        
                        <div class="form-group col-12">
                        <form method="post" id="form_meta" > 
                        <input type="hidden" class="txt_csrfname" name="<?=$csrf_name;?>" value="<?=$csrf_hash;?>" />
                        <div class="form-group col-12">
                       
                            <label>Foto Meta<span class="text-danger mr-3">*</span>:</label>
                            <div id="foto2"></div>
                        
                            <div class="overlay-wrapper">
                            <img src="<?= base_url()?>galery/<?= $value->meta_foto?>" alt="" class="w-50 h-50 rounded "/>
                            </div>
                            <div class="custom-file">
                            <input type="file" class="custom-file-input" id="foto_edit" name="foto_edit"/>
                            <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group col-12">
                                <label>Meta Deskripsi<span class="text-danger">*</span>:</label>
                                <input type="text" id="meta_deskripsi" class="form-control" name="meta_deskripsi" placeholder="Input Deskripsi Meta" value="<?= $value->meta_deskripsi?>" required="required" />
                                <input type="hidden" id="id" class="form-control" name="id" placeholder="Input Deskripsi Meta" value="<?= $value->id?>" required="required" />
                                
                            </div>
                            <div class="form-group col-12">
                                <label>Meta Keyword<span class="text-danger">*</span>:</label>
                                <input type="text" id="keyword" class="form-control" name="meta_keyword" placeholder="Input Keyword" value="<?= $value->meta_keyword?>" required="required" />
                                
                            </div>
                            
                    
                        </div>
                        
                        
                        </div>
                        <?php endforeach ?>
					
                    </div>  
                    <div class="card-footer">
                            <input type="submit" id="submit-form2" class="btn btn-primary submit-formrounded-pill float-right " value="Submit Data">
                           
                            </form> 
                        
                            
                            </div>
                    
                </div>
            </div>
</div>



