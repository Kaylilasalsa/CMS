<div id="ngilang">
    <?= $this->session->flashdata('alert') ?>
</div>
<div class="col-xl-12">
  <div class="card">
  <form action="<?= base_url('admin/carosel/simpan') ?>" method="post"
    enctype="multipart/form-data">
  <h5 class="card-header">File input</h5>
      <div class="modal-body">
      <div class="mb-3">
          <label class="form-label">Judul</label>
          <input type="text" class="form-control" name="judul" required>
      </div>
    </div>
    <div class="modal-body">
    <div class="mb-6" style=" margin-top: -45px;">
      <label for="formFile" class="form-label">Pilih foto dengan ukuran (1:3) </label>
      <input class="form-control" type="file" id="formFile" name="foto" required />
    </div>

<div class="modal-footer">
      <button type="submit" class="btn btn-primary">Simpan</button>
  </div>
</form>
      </div>
    </div>
    <?php foreach ($carosel as $aa){?> 
  <div class="row mb-5">
    <div class="col-md-6 col-lg-4 mb-3">
      <div class="card h-100">
        <img class="card-img-top" src="<?=base_url('assets/upload/carousel/'.$aa['foto'])?>" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title"><?= $aa['judul']?></h5>
     <a href="<?= site_url('admin/carosel/delete_data/'.$aa['foto']) ?>" class="btn btn-sm btn-danger" onClick="return confirm('Apakah anda yakin menghapus data ini?')">
          <span class="tf-icons bx bx-trash-alt"></span>
      </a>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
</div>
      <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>2024
                  , made with ❤️ by
                  <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
                </div>
                <div>
                  <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                  <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                  <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/" target="_blank" class="footer-link me-4">Documentation</a>

                  <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues" target="_blank" class="footer-link me-4">Support</a>
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>