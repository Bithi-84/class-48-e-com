@extends('backend.master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper"> 
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Order Details</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Order Details</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
           <form action = "" method = "">
            @csrf
            <div class="row">
              <div class="col-md-6">
                  <div class="card card-primary">
                      <div class="card-header">
                          <h3 class="card-title">Customer Details</h3>

                          <div class="card-tools">
                              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                  <i class="fas fa-minus"></i>
                              </button>
                          </div>
                      </div>
                      <div class="card-body">
                          <div class="form-group">
                              <label for="inputName">Invoice Number</label>
                              <input type="text" id="invoiceid" name= "" class="form-control" value="xyz-1">
                          </div>
                          <div class="form-group">
                              <label for="inputDescription">Customer Details</label>
                              <input type="text" id="invoiceid" name= "" class="form-control" value="Mr.x" required></div>

                              <div class="form-group">
                                <label for="inputDescription">Customer Phone</label>
                                <input type="text" id="" name= "" class="form-control" value="01911233147" required></div>

                          <div class="form-group">
                              <label for="inputDescription">Customer Address</label>
                              <textarea id="inputDescription" class="form-control" rows="4" required>Uttara,Dhaka</textarea>
                          </div>

                          <div class="form-group">
                            <label for="inputDescription">Delidery Charge</label>
                            <input type="text" id="" name= "" class="form-control" value="80" required></div>


                          <div class="form-group">
                              <label for="inputStatus">Select Courier</label>
                              <select id="inputStatus" class="form-control custom-select">
                                  <option disabled>Select one</option>
                                  <option>Steadfast</option>
                                  <option>Pathao</option>
                                  <option selected>Others</option>
                              </select>
                          </div>
                        
                      </div>
                      <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
              </div>
              <div class="col-md-6">
                  <div class="card card-secondary">
                      <div class="card-header">
                          <h3 class="card-title">Product Details</h3>

                          <div class="card-tools">
                              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                  <i class="fas fa-minus"></i>
                              </button>
                          </div>
                      </div>
                      <div class="card-body">
                       <div class = row>
                          <div class = "col-md-12">
                            <img src ="https://placehold.co/100x100">
                            2 x Test Product|Unit Price:1200|Color:Red|Size:L<br><br>
                            <img src ="https://placehold.co/100x100">
                            2 x Test2 Product|Unit Price:1200|Color:Red|Size:L<br><br>
                            <img src ="https://placehold.co/100x100">
                            2 x Test3 Product|Unit Price:1200|Color:Red|Size:L<br><br>
                          </div>
                          <div class = "col-md-12">
                            <div class="form-group">
                              <label for="inputDescription">Order Price</label>
                              <input type="text" id="" name= "" class="form-control" value="0" required></div>

                          </div>
                          
                       </div>
                       <input type="submit" value="Update Order" class="btn btn-success float-right">
                      </div>
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
 