@include('aPanel.asstes.header')
<div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 px-2">
                <div class="col-sm-6">
                    <h2 class="text-secondary">Add Service</h2>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../index/index.php">Home</a></li>
                        <li class="breadcrumb-item active">Add Service</li>
                    </ol>
                </div>
            </div>
        </div>
</div>
<div class="container">
<div class="card card-success">
              <div class="card-header bg-secondary">
                <h3 class="card-title">Add Experince Data</h3>
              </div>
              <div class="card-body">
                  @if($errors->any())
                      @foreach($errors->all() as $error)
                          <div class="alert alert-danger" role="alert">
                              {{$error}}
                          </div>
                      @endforeach
                  @endif
                    <form method="post" action="{{route('admin.services.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="title" class="form-control" placeholder="Enter ...">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                        <label for="imgUpdate">Img</label>
                        <input type="file" name="image" class="form-control-file" id="imgUpdate">
                        </div>
                        </div>
                        <div class="col-12">
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                        </div>
                        </div>
                        </div>
                        <div class="card-footer">
                            <button type="addCate" class="btn btn-primary">Add</button>
                        </div>
                    </form>
              </div>

    </div>
</div>
@include('aPanel.asstes.footer')
