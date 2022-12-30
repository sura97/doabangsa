<div class="container-fluid">
				
				<div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Ekstrakurikuler</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Portal Sekolah</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Ekstrakurikuler</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Data List</a></li>
                        </ol>
                    </div>
                </div>
				
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Data List</h4>
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">+ Add new</button>
								
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table id="example3" class="display" style="min-width: 845px">
										<thead>
											<tr>
												<th>#</th>
												<th>Nama Ekstrakurikuler</th>
												<th>Foto Ekstrakurikuler</th>
												
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><strong>01</strong></td>
												<td>Designing</td>
												<td><img class="rounded-circle" width="40" src="images/profile/small/pic1.jpg" alt=""></td>	
												
												<td>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
                                                </td>												
											</tr>
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				
            </div>

            <!-- ============================modal========== -->
                                                <!-- Large modal -->
                                    
                                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Tambah Data</h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body"><form>
                                        <div class="form-group">
                                        	<label>Nama Ekstrakurikuler</label>

                                            <input type="text" class="form-control input-rounded"  placeholder="Isi Nama Ekstrakurikuler" required="Tidak Boleh Kosong">
                                        </div>
                                        <div class="form-group">
                                        	<label>Foto Ekstrakurikuler</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input">
                                                <label class="custom-file-label">Choose file</label>
                                            </div>
                                            </div>
                                        
                                    
                                		</div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>