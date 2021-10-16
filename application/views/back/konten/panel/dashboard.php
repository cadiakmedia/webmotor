<?= $this->session->flashdata('message'); ?>
<div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          
					<div class="panel">
             
                    <div class="card card-custom gutter-b">
                    <div class="card-header">
						<h3 class="card-title">Data Artikel</h3>
						<div class="card-toolbar">
							<div class="example-tools justify-content-center">
                                <div class='btn-group' role='group'>
                                    <button id='btnGroupDrop1' type='button' class='btn btn-primary font-weight-bold dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                    <i class='fa fa-caret-down' aria-hidden='true'></i> Aksi

                                    </button>
                                    <div class='dropdown-menu' aria-labelledby='btnGroupDrop1'>
                                    <a class="dropdown-item" href="dashboard/tambah_artikel"><i class="fa fa-plus"></i> Tambah Artkel</a>
                                    <a class="dropdown-item" href="kategori"><i class="fa fa-plus"></i> Tambah Kategori</a>
                                    </div>
                                </div>
							</div>
						</div>
					</div>
                    <div class="card-body">
					<!--begin: Datatable-->
					<table class="table table-separate table-head-custom table-checkable" id="table">
                         <thead class="thead-light"> 
                                <tr>
                                    <th>No</th>
                                    <th>Judul Artikel</th>
                                    <th>Kategori</th>
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