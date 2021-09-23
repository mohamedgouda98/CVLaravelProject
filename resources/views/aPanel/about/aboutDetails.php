<?php include "../back/header.php";?>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h2 class="text-secondary">View About Details</h2>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../index/index.php">Home</a></li>
                        <li class="breadcrumb-item active">About</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
    <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">About list</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Img</th>
                      <th>Name</th>
                      <th>Age</th>
                      <th> Job Title </th>
                      <th>From</th>
                      <th> Lives in </th>
                      <th>Description</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>183</td>
                      <td><img src="../dist/img/user2-160x160.jpg" width="45px" alt=""></td>
                      <td>John Doe</td>
                      <td><span class="tag tag-success">Approved</span></td>
                      <td>ds</td>
                      <td>ds</td>
                      <td>ds</td>
                      <td><span class="text-wrap">Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</span></td>
                      <td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal" title="Edit">                           
                                <i class="text-warning  far fa-edit fa-2x" data-toggle="tooltip"></i>
                            </a>
                            
							<a href="#deleteEmployeeModal" class="delete ml-2" data-toggle="modal">
                                <i class="text-danger far fa-trash-alt fa-2x" data-toggle="tooltip" title="Delete"></i>
                            </a>
						</td>
                        <!-- Edit Modal HTML -->
                    <div id="editEmployeeModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form>
                                    <div class="modal-header">						
                                        <h4 class="modal-title">Update About Info</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-6">
                                            <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control" required>
                                            </div>
                                            </div>
                                            <div class="col-6">
                                            <div class="form-group">
                                            <label>Age</label>
                                            <input type="number" class="form-control" required>
                                            </div>
                                            </div>
                                            <div class="col-6">
                                            <div class="form-group">
                                            <label>Title </label>
                                            <input type="text" class="form-control" required>
                                            </div>
                                            </div>
                                            <div class="col-6">
                                            <div class="form-group">
                                            <label>From</label>
                                            <input type="text" class="form-control" required>
                                            </div>
                                            </div>
                                            <div class="col-6">
                                            <div class="form-group">
                                            <label> Lives in</label>
                                            <input type="text" class="form-control" required>
                                            </div>
                                            </div>
                                            <div class="col-sm-6">
                                            <div class="form-group">
                                            <label for="imgUpdate">Img</label>
                                            <input type="file" class="form-control-file" id="imgUpdate">
                                            </div>
                                            </div>
                                            <div class="col-12">
                                            <!-- textarea -->
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control" rows="3" ></textarea>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                        <input type="submit" class="btn btn-info" value="update">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                        <!-- Delete Modal HTML -->
                        <div id="deleteEmployeeModal" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form>
                                        <div class="modal-header">
                                            <h4 class="modal-title">Delete Employee</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Are you sure you want to delete these Records?</p>
                                            <p class="text-warning"><small>This action cannot be undone.</small></p>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                            <input type="submit" class="btn btn-danger" value="Delete">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </tr>
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
    </div>
<?php include "../back/footer.php"?>