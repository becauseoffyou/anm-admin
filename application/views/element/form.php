 <!-- Container Fluid-->
 <div class="container-fluid" id="container-wrapper">
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-0 text-gray-800">Data Gambar</h1>
         <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="./">Home</a></li>
             <li class="breadcrumb-item active" aria-current="page">Upload</li>
         </ol>
     </div>

     <div class="row">
         <div class="col-lg-6">
             <!-- Form Basic -->
             <form id="form" action="" method="POST" enctype='multipart/form-data'>
             <div class="card mb-4">
                 <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                     <h6 class="m-0 font-weight-bold text-primary">Upload Gambar</h6>
                 </div>
                 <div class="card-body">
                     
                         <small id="emailHelp" class="form-text text-muted">1. Pastikan tipe file : jpeg, jpg, png, webp</small>
                         <small id="emailHelp" class="form-text text-muted">2. Size file tidak lebih dari 2 Mb.</small>
                         <small id="emailHelp" class="form-text text-muted">3. Ukuran gambar disesuaikan dengan jenis gambar.</small>
                         <br>
                         <div class="form-group">
                            <label for="formFile" class="form-label">Pilih Gambar</label>
                            <input class="form-control" name="bannerimg" required type="file" id="fileToUpload" >
                        </div>
                         
                         <div class="form-group">
                             <label for="exampleFormControlSelect1">Jenis Gambar</label>
                             <select class="form-control" name="jenisgambar" id="exampleFormControlSelect1" required>
                                 <option value="0">Pilih Jenis</option>
                                 <option value="1">Banner</option>
                                 <option value="2">Model</option>
                                 <option value="3">Produk</option>
                                 <option value="4">Treatment</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <!-- <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                 <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
                             </div> -->
                         </div>
                         <div class="form-group">
                             <label for="exampleFormControlTextarea1">Deskripsi Gambar</label>
                             <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3" required></textarea>
                         </div>
                         <button type="submit" class="btn btn-primary">Kirim</button>
                     
                 </div>
             </div>
             </form>

         </div>

         <div class="col-lg-6">

             <!-- Input Group -->
             <div class="card mb-4">
                 <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                     <h6 class="m-0 font-weight-bold text-primary">Review Gambar</h6>
                 </div>
                 <div class="card-body viewgambar">
                     <div class="viewgambar" style="width: 150px; height: 275px;">

                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!--Row-->

     <!-- Documentation Link -->

 </div>
 <!---Container Fluid-->