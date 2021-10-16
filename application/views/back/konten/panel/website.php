<?= $this->session->flashdata('message'); ?>
<div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          
					<div class="panel">
             
                    <div class="card card-custom gutter-b">
                    <div class="card-header pt-3">
					<h3 class="card-title">Data meta</h3>
					</div>	
                    <div class="card-body">
                    <?php   foreach ($website as  $value) :   ?>
                   
                        <form method="post" id="form_website" > 
                        <input type="hidden" class="txt_csrfname" name="<?=$csrf_name;?>" value="<?=$csrf_hash;?>" />
                        <div class="form-group col-12">
                                <label>Judul Website<span class="text-danger">*</span>:</label>
                                <input type="text" id="judul_website" class="form-control" name="judul_website" placeholder="Input Judul Website" value="<?= $value->judul_website?>" required="required" />
                                <input type="hidden" id="id" class="form-control" name="id" placeholder="Input Deskripsi Meta" value="<?= $value->id?>" required="required" />
                        </div>
                        <div class="form-group col-12">
                       
                        <label>Favicon<span class="text-danger">*</span>:</label>                 
                          
                                <img src="<?= base_url()?>galery/icon/<?= $value->favicon?>" alt="" style="width:50px;height:50px;  " class="rounded"/>
                          
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="foto_edit" name="foto_edit"/>
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                        
                        <div class="form-group col-12">
                            <label>hp<span class="text-danger">*</span>:</label>
                            <input type="text" id="hp" class="form-control" name="hp" placeholder="Input Nomor Hp" value="<?= $value->hp?>" required="required" />
                        </div>
                        <div class="form-group col-12">
                            <label>Email<span class="text-danger">*</span>:</label>
                            <input type="email" id="email" class="form-control" name="email" placeholder="Input alamat email" value="<?= $value->email?>" required="required" />
                        </div>
                        <div class="form-group col-12">
                            <label>Link Facebook<span class="text-danger">*</span>:</label>
                            <input type="text" id="fb" class="form-control" name="link_fb" placeholder="Input link fb" value="<?= $value->link_fb?>" required="required" />
                        </div>
                        <div class="form-group col-12">
                            <label>Link Instagram<span class="text-danger">*</span>:</label>
                            <input type="text" id="ig" class="form-control" name="link_ig" placeholder="Input link ig" value="<?= $value->link_ig?>" required="required" />
                        </div>
                        <div class="form-group col-12">
                            <label>Link Youtube<span class="text-danger">*</span>:</label>
                            <input type="text" id="yt" class="form-control" name="link_yt" placeholder="Input link yt" value="<?= $value->link_yt?>" required="required" />
                        </div>
                        <div class="form-group col-12">
                            <label>link Pendek<span class="text-danger">*</span>:</label>
                            <input type="text" id="link_pendek" class="form-control" name="link_pendek" placeholder="Input link Website" value="<?= $value->link_pendek?>" required="required" />
                        </div>
                        <div class="form-group col-12">
                            <label>link Panjang<span class="text-danger">*</span>:</label>
                            <input type="text" id="link_panjang" class="form-control" name="link_panjang" placeholder="Input link Website" value="<?= $value->link_pendek?>" required="required" />
                        </div>
                       
                        </div>
                        <?php endforeach ?>
					
                  
                    <div class="card-footer">
                            <input type="submit" id="submit-form2" class="btn btn-primary submit-formrounded-pill float-right " value="Submit Data">
                           
                            </form> 
                        
                            
                            </div>
                    
                </div>
            </div>
</div>



