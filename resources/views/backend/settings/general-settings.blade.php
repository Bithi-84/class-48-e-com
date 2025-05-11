@extends('backend.master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper"> 
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>General Settings</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">General Settings</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
           <form action = "{{url('/admin/general-setting/update')}}" method = "POST" enctype = "multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-md-12">
                  <div class="card card-primary">
                      <div class="card-header">
                          <h3 class="card-title">Update Settings</h3>

                          <div class="card-tools">
                              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                  <i class="fas fa-minus"></i>
                              </button>
                          </div>
                      </div>
                      <div class="card-body">
                          
                          <div class="form-group">
                              <label for="inputDescription">phone</label>
                              <input type="text" id="invoiceid" name= "phone" class="form-control" value="{{$generalSettings->phone}}" required></div>

                              <div class="form-group">
                                <label for="inputDescription">email</label>
                                <input type="text" id="" name= "email" class="form-control" value="{{$generalSettings->email}}" required></div>

                          <div class="form-group">
                              <label for="inputDescription"> Address</label>
                              <textarea id="inputDescription" name="address" class="form-control" rows="4" required>{{$generalSettings->address}}</textarea>
                          </div>

                          <div class="form-group">
                            <label for="inputDescription">Facebook Link(optinal)</label>
                            <input type="text" id="area" name= "facebook" class="form-control" value="{{$generalSettings->facebook}}" >
                        
                          </div>
                       
                         <div class="form-group">
                            <label for="inputDescription">Twitter Link(optinal)</label>
                            <input type="text" id="area" name= "twitter" class="form-control" value="{{$generalSettings->twitter}}" >
                            
                        </div>

                           <div class="form-group">
                            <label for="inputDescription">Instagram Link(optinal)</label>
                            <input type="text" id="area" name= "instagram " class="form-control" value="{{$generalSettings->instagram}}" >
                            
                        </div>


                         </div>

                           <div class="form-group">
                            <label for="inputDescription">Youtube Link(optinal)</label>
                            <input type="text" id="area" name= "Youtube" class="form-control" value="{{$generalSettings->youtobe}}" >
                            
                        </div>


                          <div class="form-group">
                            <label for="inputDescription">Logo</label>
                            <input type="text" id="logo" name= "logo" class="form-control" ><br>

                            <img src= "{{asset('backend/images/setting/'.$generalSettings->logo)}}" height="60" width="100">
                            
                        </div>

                         <div class="form-group">
                            <label for="inputDescription">Banner</label>
                            <input type="text" id="banner" name= "banner" class="form-control" ><br>

                            <img src= "{{asset('backend/images/setting/'.$generalSettings->banner)}}" height="400" width="1200">
                            
                        </div>
                             {{-- <input type="submit" value="Update Setting" class="btn btn-success"> --}}
                       
                         </div>
                         <input type="submit" value="Update Setting" class="btn btn-success">
                      <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
              </div>
              
          </div>
            
           </form>
           
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
 