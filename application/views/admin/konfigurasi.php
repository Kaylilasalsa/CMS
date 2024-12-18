<div id="ngilang">
    <?= $this->session->flashdata('alert') ?>
</div>
<form action="<?= base_url('admin/konfigurasi/update') ?>" method="post" enctype="multipart/form-data">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Konfigurasi</h5>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label class="form-label">Judul Website</label>
                <input type="text" class="form-control" name="judul_web" value="<?= $konfig->judul_web; ?>" />
            </div>
            <div class="mb-3">
                <label class="form-label">Profile</label>
                <textarea name="profil_web" class="form-control"><?= $konfig->profil_web; ?></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Facebook</label>
                <input type="text" class="form-control" name="facebook" value="<?= $konfig->facebook; ?>" />
            </div>
            <div class="mb-3">
                <label class="form-label">Instagram</label>
                <input type="text" class="form-control" name="instagram" value="<?= $konfig->instagram; ?>" />
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value="<?= $konfig->email; ?>" />
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" value="<?= $konfig->alamat; ?>" />
            </div>
            <div class="mb-3">
                <label class="form-label">Whatsapp</label>
                <input type="text" class="form-control" name="no_wa" value="<?= $konfig->no_wa; ?>" />
            </div>
            <div class="mb-3">
                <label class="form-label">Foto</label>
                <input type="file" class="form-control" name="foto" accept="image/png, image/jpeg" />
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
</form>
