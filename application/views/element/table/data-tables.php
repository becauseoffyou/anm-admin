<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Gambar </h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Home</a></li>
      <li class="breadcrumb-item">Data</li>
      <li class="breadcrumb-item active" aria-current="page">List Gambar</li>
    </ol>
  </div>

  <!-- Row -->
  <div class="row">
    <!-- Datatables -->
    <div class="col-lg-12">
      <div class="card mb-4">
        <div class="table-responsive p-3">
          <table id="example1" class="table table-bordered table-striped">
             <thead class="thead-light">
                             <tr>
                                 <th>ID Gambar</th>
                                 <th>Kategori</th>
                                 <th>Deskripsi</th>
                                 <th>File</th>
                                 <th>Action</th>
                             </tr>
                         </thead>
                         <tbody>
                         <?php
                            $no = 1;
                            foreach ($datagambar as $s) {
                            ?>
                               <tr>
                                 <td><?= $s['kode_img']; ?></td>
                                 <td><span class="badge badge-success"><?= $s['jenis']; ?></span></td>
                                 <td><?= $s['deskripsi']; ?></td>
                                 <td><?= base_url('assets/').$s['gambar']; ?></td>
                                 <td><a href="<?= base_url('assets/').$s['gambar']; ?>" target="_blank" class="btn btn-sm btn-primary">Detail</a></td>
                             </tr>
                             
                             <?php
                            }
                            ?>
                         </tbody>
            
          </table>
        </div>
      </div>
    </div>
    <!-- DataTable with Hover -->

  </div>
  <!--Row-->

  <!-- Documentation Link -->
  <div class="row">
    <div class="col-lg-12">
      <small>*[banner] 4 baris pertama adalah gambar yang di display di landing page.</small>
    </div>
  </div>

</div>
<!---Container Fluid-->