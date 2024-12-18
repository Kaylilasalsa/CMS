<div id="ngilang">
    <?= $this->session->flashdata('alert') ?>
</div>
<div class="col-lg-12 col-md-12 ">
    <div class="mt-1 mb-3">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
            Tambah Konten
        </button>
        <div class="card">
            <h5 class="card-header">Kategori Konten</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Kategori Konten</th>
                            <th>Tanggal</th>
                            <th>Kreator</th>
                            <th>Harga</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php $no = 1; foreach ($konten as $aa) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $aa['judul'] ?></td>
                            <td><?= $aa['nama_kategori'] ?></td>
                            <td><?= $aa['tgl'] ?></td>
                            <td><?= $aa['username'] ?></td>
                            <td><?= $aa['harga'] ?></td>
                            <td>
                                <a href="<?= base_url('assets/upload/konten/' . $aa['foto']) ?>" target="_blank">
                                    Lihat Foto
                                </a>
                            </td>
                            <td>
                                <a href="<?= site_url('admin/konten/delete_data/' . $aa['foto']) ?>" class="btn btn-sm btn-danger" onClick="return confirm('Apakah anda yakin menghapus data ini?')">
                                    <span class="tf-icons bx bx-trash-alt"></span>
                                </a>
                                <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#edit<?= $aa['id_konten']; ?>">
                                    <span class="tf-icons bx bx-edit"></span>
                                </button>
                                <!-- Modal Edit -->
                                <div class="modal fade" id="edit<?= $aa['id_konten']; ?>" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Perbarui Konten</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="<?= base_url('admin/konten/update') ?>" method="post"
                                             enctype="multipart/form-data">
                                             <input type="hidden" name ="nama_foto" value =<?= $aa['foto']; ?>>
                                                <input type="hidden" name="nama_foto" value="<?= $aa['foto']; ?>">
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label class="form-label">Judul</label>
                                                        <input type="text" class="form-control" name="judul" value="<?= $aa['judul']; ?>" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Keterangan</label>
                                                        <input type="text" class="form-control" name="keterangan" value="<?= $aa['keterangan']; ?>" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Harga</label>
                                                        <input type="text" class="form-control" name="harga" value="<?= $aa['harga']; ?>" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Foto</label>
                                                        <input type="file" class="form-control" name="foto" accept="image/png, image/jpeg">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Kategori</label>
                                                        <select name="id_kategori" class="form-control" required>
                                                            <?php foreach ($kategori as $uu) { ?>
                                                            <option value="<?= $uu['id_kategori']; ?>" <?= ($uu['id_kategori'] == $aa['id_kategori']) ? 'selected' : ''; ?>>
                                                                <?= $uu['nama_kategori']; ?>
                                                            </option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Konten -->
    <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <form action="<?= base_url('admin/konten/simpan') ?>" method="post" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Konten</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Judul</label>
                            <input type="text" class="form-control" name="judul" placeholder="Judul" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kategori</label>
                            <select name="id_kategori" class="form-control" required>
                                <?php foreach ($kategori as $aa) { ?>
                                <option value="<?= $aa['id_kategori']; ?>"><?= $aa['nama_kategori']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Keterangan</label>
                            <textarea name="keterangan" class="form-control" placeholder="Keterangan"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Harga</label>
                            <textarea name="harga" class="form-control" placeholder="Harga"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Foto</label>
                            <div class="input-group input-group-outline mb-3 ">
                                <input type="file" class="form-control" name="foto" accept="image/png, image/jpeg" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
                                    