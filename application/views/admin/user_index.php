                    <div id="ngilang">
                        <?= $this->session->set_flashdata('alert')?> 
                    </div>
                    
                    <?= $this->session->flashdata('alert',true);?>
                    <div class="card">
                    	<div class="col-lg-12 col-md-12">
                    		<div class="mb-3">
                    			<!-- Button trigger modal -->
                    			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                          Tambah admin
                      </button>
                        </div>
                        </div>
                    	<h5 class="card-header">data pengguna</h5>
                    	<div class="table-responsive text-nowrap">
                    		<table class="table">
                    			<thead>
                    				<tr>
                    					<th>username</th>
                    					<th>nama</th>
                    					<th>admin</th>
                    					<th>aksi</th>
                    				</tr>
                    			</thead>
                          <tbody class="table-border-bottom-0">
                    			<?php foreach($user as $aa) { ?>
                    		    <td><?= $aa['username']?></td>
                    				<td><?= $aa['nama']?></td>
                    				<td><?= $aa['level']?></td>
                    			  <td>
                          <a href="<?php echo site_url('admin/user/delete_data/'.$aa['id_user']); ?>" class="btn btn-sm btn-danger" onClick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><span class="tf-icons bx bx-trash-alt"></span></a >
                        <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#edit<?= $aa['id_user']?>">
                          <span class="tf-icons bx bx-edit"></span>	
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="edit<?= $aa['id_user']?>" tabindex="-1" style="display: none;" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Perbarui nama user</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <form action="<?= base_url('admin/user/update')?>" method="post">
                                  <input type="hidden" name="id_user" value="<?= $aa['id_user']?>">
                                <div class="modal-body">
                                  <div class="row">
                                    <div class="col mb-3">
                                      <label for="nameBasic" class="form-label">username</label>
                                      <input type="text" id="nameBasic" class="form-control" value="<?= $aa['username']?>" name="username" readonly>
                                    </div>
                                  </div>
                                  <div class="row g-2">
                                    <div class="col mb-0">
                                      <label for="emailBasic" class="form-label">nama</label>
                                      <input type="text" id="emailBasic" class="form-control" value="<?= $aa['nama']?>" name="nama" >
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal">
                                      Close
                                    </button>
                                    <button type="submit" class="btn btn-primary">simpan</button>
                          </form>
                                  </div>
                          </button>
                    			</tbody>
                    			<?php  } ?>
                    		</table>
                    	</div>
                    </div>
                   
                    </div>
                    </div>
                    <div class="mt-3">
                        <!-- Button trigger modal -->
                        

                        <!-- Modal -->
                        <div class="modal fade" id="basicModal" tabindex="-1" style="display: none;" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Tambah User</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <form action="<?= base_url('admin/user/simpan')?>" method="post">
                                <div class="modal-body">
                                  <div class="row">
                                    <div class="col mb-3">
                                      <label for="nameBasic" class="form-label">username</label>
                                      <input type="text" id="nameBasic" class="form-control" placeholder="" name="username">
                                    </div>
                                  </div>
                                  <div class="row g-2">
                                    <div class="col mb-0">
                                      <label for="emailBasic" class="form-label">nama</label>
                                      <input type="text" id="emailBasic" class="form-control" placeholder="" name="nama">
                                    </div>
                                    <div class="col mb-0">
                                      <label for="dobBasic" class="form-label">password</label>
                                      <input type="password" id="dobBasic" class="form-control" placeholder="" name="password">
                                    </div>
                                  </div>
                                  <div class="col mb-0">
                                      <label for="dobBasic" class="form-label">Admin</label>
                                      <input type="level" id="dobBasic" class="form-control" placeholder="Admin" name="level">
                                    </div>                                 
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal">
                                      Close
                                    </button>
                                    <button type="submit" class="btn btn-primary">simpan</button>
                                 
                                  </div>
                              </form>
                              </div>
              
                            </div>
                          </div>
                        </div>
                      </div>
