<x-app-layout>
    

    <div class="col-md-12 p-10 pt-2">

        <!-- membuat form -->
        <div class="container">
                <div class="card mt-2"></div>
                <div class="card-header">
                  <h4 style="text-align:center"><b>FORM TAMBAH ANGGOTA</b></h4>
                </div>
                <div class="card-body">
  
    <!-- membuat formnya -->
    <!-- bagian username -->
                <form action="/simpan_anggota" method="POST" enctype="multipart/form-data">
                  @csrf
                    <div class="form-group row">
                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                             <input type="text" id="username" name="username" class="form-control" placeholder="Masukkan Nama">
                             <x-validate-error-message name="username"/>
                          </div>
                    </div>
    <!-- bagian serialnumber -->
                    <div class="form-group row">
                        <label for="serialnumber" class="col-sm-2 col-form-label">Serial number</label>
                        <div class="col-sm-10">
                            <input type="text" id="serial_number" name="serial_number" class="form-control" placeholder="Masukkan Serial number">
                            <x-validate-error-message name="serialnumber"/>
                            </div>
                    </div>
    <!-- bagian email -->
                    <div class="form-group row">
                        <label for="Judul" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" id="email" name="email" class="form-control" placeholder="Masukkan Email"></div>
                    </div>  
    <!-- bagian gender
     -->
                    <div class="form-group row">
                        <label for="disabledSelect" class="col-sm-2 col-form-label">Gender</label>
                        <div class="col-sm-10">
                            <select id="disabledSelect" name="gender" class="form-control">
                              <option>Male</option>
                              <option>Female</option>
                        
                            </select>
                        </div>
                    </div>

                   <x-validate-error-message name="gender"/>         
    <!-- bagian tanggal -->
                  <div class="form-group row">
                    <label for="Tanggal_Upload" class="col-sm-2 col-form-label">Waktu Upload : </label>
                    <div class="col-sm-10">
                       <input type="time" id="time_in" name="time_in"/>
                       <x-validate-error-message name="time_in"/>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label for="Tanggal_Upload" class="col-sm-2 col-form-label">Waktu Upload : </label>
                    <div class="col-sm-10">
                      <input type="date" name="user_date" id="user_date">
                       <x-validate-error-message name="time_in"/>
                      </div>
                  </div>
                  <!-- bagian submit -->
                  <button type="submit" class="col btn btn-danger mb-3">Submit</button>
                  </div>
              </form>
          </div>
      </div>
    </div>
  </div>
</x-app-layout>