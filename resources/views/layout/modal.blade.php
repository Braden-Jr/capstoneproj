
<div class="modal fade" id="updatestocks{{ $datas->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Add Stocks</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
        </div>
        <div class="modal-body">
            <form method="post" action="/updatestocks">
                @csrf
                <div class="mb-md-5 mt-md-4 pb-5"   >

                 
                    <div class="form-outline form-white mb-4" >
                        <input type="text"
                         class="form-control form-control-sm" 
                         style="background-color:white;color:black;border:2px solid #90ccbc;font-size: 20px; "
                          value="{{ $datas->Product_Name }}" disabled />
                        <label class="form-label" for="typeEmailX">Product Name</label>
                    </div>

                    <div class="form-outline form-white mb-4" >
                        <input type="text"
                         class="form-control form-control-sm" 
                         style="background-color:white;color:black;border:2px solid #90ccbc;font-size: 20px; "
                          value="{{ $datas->Gender }}" disabled />
                        <label class="form-label" for="typeEmailX">Gender</label>
                    </div>
                    <div class="form-outline form-white mb-4" >
                        <input type="text"
                         class="form-control form-control-sm" 
                         style="background-color:white;color:black;border:2px solid #90ccbc;font-size: 20px; "
                          value="{{ $datas->Price }}" disabled />
                          <input type="text" name="id" value="{{ $datas->id }}" hidden>
                          <input type="text" name="product" value="{{ $datas->Product_Name}}" hidden>
                          <input type="text" name="admin" value="{{ session('username')}}" hidden>
                        <label class="form-label" for="typeEmailX">Price</label>
                    </div>
                    <div class="form-outline form-white mb-4" >
                        <input type="text"
                         class="form-control form-control-sm" 
                         style="background-color:white;color:black;border:2px solid #90ccbc;font-size: 20px; "
                          value="{{ $datas->stocks }}" 
                          name="" disabled />
                        <label class="form-label" for="typeEmailX">Stocks</label>
                    </div>
                    <div class="form-outline form-white mb-4" >
                      <input type="text"
                       class="form-control form-control-sm" 
                       style="background-color:white;color:black;border:2px solid #90ccbc;font-size: 20px; "
                        value="0" 
                        name="stock" />
                      <label class="form-label" for="typeEmailX">Adding Stock</label>
                  </div>
                
                    <button class="btn btn-outline-dark" type="submit">Add Stock</button>
         
               
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
 
        </div>
      </div>
    </div>
  </div>








  
<div class="modal fade" id="editclient{{ $datas->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Update Client</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body">
          <form method="post" action="/updateclient">
              @csrf
              <div class="mb-md-5 mt-md-4 pb-5"   >

               
                  <div class="form-outline form-white mb-4" >
                      <input type="text"
                       class="form-control form-control-sm" 
                       style="background-color:white;color:black;border:2px solid #90ccbc;font-size: 20px; "
                        value="{{ $datas->name }}" 
                        name="name" />
                      <label class="form-label" for="typeEmailX"> Name</label>
                  </div>

                  <div class="form-outline form-white mb-4" >
                      <input type="text"
                       class="form-control form-control-sm" 
                       style="background-color:white;color:black;border:2px solid #90ccbc;font-size: 20px; "
                        value="{{ $datas->email }}" 
                        name="email" />
                      <label class="form-label" for="typeEmailX">Email</label>
                  </div>
               
                  <div class="form-outline form-white mb-4" >
                      <input type="text"
                       class="form-control form-control-sm" 
                       style="background-color:white;color:black;border:2px solid #90ccbc;font-size: 20px; "
                        value="{{ $datas->address }}" 
                        name="address" />
                      <label class="form-label" for="typeEmailX">Address</label>
                  </div>

                  <div class="form-outline form-white mb-4" >
                    <input type="text"
                     class="form-control form-control-sm" 
                     style="background-color:white;color:black;border:2px solid #90ccbc;font-size: 20px; "
                      value="{{ $datas->type }}" disabled />
                      <input type="text" name="uid" value="{{ $datas->id }}" hidden>
                    <label class="form-label" for="typeEmailX">Type</label>
                </div>

                  <div class="form-outline form-white mb-4" >
                    <input type="text"
                     class="form-control form-control-sm" 
                     style="background-color:white;color:black;border:2px solid #90ccbc;font-size: 20px; "
                      value="{{ $datas->status }}" 
                      name="stock"  disabled/>
                    <label class="form-label" for="typeEmailX">Status</label>
                </div>
                  
              
                  <button class="btn btn-outline-dark" type="submit"><i class="fa fa-edit"></i> Save</button>
       
             
              </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>








  
<div class="modal fade" id="deleteClient{{ $datas->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Client</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body">
          <form method="post" action="/deleteclient">
              @csrf
              <div class="mb-md-5 mt-md-4 pb-5"   >

               
                  <div class="form-outline form-white mb-4" >
                      <input type="text"
                       class="form-control form-control-sm" 
                       style="background-color:white;color:black;border:2px solid #90ccbc;font-size: 20px; "
                        value="{{ $datas->name }}" 
                        name="name" disabled/>
                      <label class="form-label" for="typeEmailX"> Name</label>
                  </div>

                  <div class="form-outline form-white mb-4" >
                      <input type="text"
                       class="form-control form-control-sm" 
                       style="background-color:white;color:black;border:2px solid #90ccbc;font-size: 20px; "
                        value="{{ $datas->email }}" 
                        name="email" disabled/>
                      <label class="form-label" for="typeEmailX">Email</label>
                  </div>
               
                  <div class="form-outline form-white mb-4" >
                      <input type="text"
                       class="form-control form-control-sm" 
                       style="background-color:white;color:black;border:2px solid #90ccbc;font-size: 20px; "
                        value="{{ $datas->address }}" 
                        name="address" disabled/>
                      <label class="form-label" for="typeEmailX">Address</label>
                  </div>

                  <div class="form-outline form-white mb-4" >
                    <input type="text"
                     class="form-control form-control-sm" 
                     style="background-color:white;color:black;border:2px solid #90ccbc;font-size: 20px; "
                      value="{{ $datas->type }}" disabled />
                      <input type="text" name="did" value="{{ $datas->id }}" hidden>
                      <input type="text" name="delete" value="Deleted" hidden>
                    <label class="form-label" for="typeEmailX">Type</label>
                </div>

                  <div class="form-outline form-white mb-4" >
                    <input type="text"
                     class="form-control form-control-sm" 
                     style="background-color:white;color:black;border:2px solid #90ccbc;font-size: 20px; "
                      value="{{ $datas->status }}" 
                      name="stock"  disabled/>
                    <label class="form-label" for="typeEmailX">Status</label>
                </div>
                  
              
                  <button class="btn btn-outline-dark " type="submit"><i class="fa-solid fa-trash"></i> Delete</button>
       
             
              </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>