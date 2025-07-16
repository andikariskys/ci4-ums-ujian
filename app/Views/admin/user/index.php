<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>
<div class="datatables">
    <div class="card">
        <div class="card-header">
            <h4>Manajemen Pengguna</h4>
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-end gap-1">
                <button type="button" class="btn btn-primary" id="sync-confirm"><i class="ti ti-refresh"></i> Sinkronkan Moodle</button>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#bs-example-modal-md"><i class="ti ti-upload"></i> Import Pengguna</button>
                <a href="#" class="btn btn-primary"><i class="ti ti-user-plus"></i> Tambah Pengguna</a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered text-nowrap align-middle" id="userTable">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th>
                                <h6 class="fs-4 fw-semibold mb-0">No</h6>
                            </th>
                            <th>
                                <h6 class="fs-4 fw-semibold mb-0">Pengguna</h6>
                            </th>
                            <th>
                                <h6 class="fs-4 fw-semibold mb-0">Alamat surel</h6>
                            </th>
                            <th>
                                <h6 class="fs-4 fw-semibold mb-0">Peran</h6>
                            </th>
                            <th>
                                <h6 class="fs-4 fw-semibold mb-0">Status</h6>
                            </th>
                            <th>
                                <h6 class="fs-4 fw-semibold mb-0">Aksi</h6>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <h6 class="fs-4 fw-semibold mb-0">1</h6>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="../assets/images/profile/user-5.jpg" class="rounded-circle" width="40" height="40" />
                                    <div class="ms-3">
                                        <h6 class="fs-4 fw-semibold mb-0">Super Admin</h6>
                                        <span class="fw-normal">admin</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="mb-0 fw-normal fs-4">admin@ums.ac.id</p>
                            </td>
                            <td>
                                <p class="badge text-bg-secondary mb-0">Admin</p>
                            </td>
                            <td>
                                <span class="badge bg-success-subtle text-success">Aktif</span>
                            </td>
                            <td class="d-flex gap-1 justify-content-center">
                                <button type="button" class="btn btn-danger"><i class="ti ti-user-minus"></i> Non-aktifkan</button>
                                <button type="button" class="btn btn-warning"><i class="ti ti-settings"></i> Ubah</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h6 class="fs-4 fw-semibold mb-0">2</h6>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="../assets/images/profile/user-5.jpg" class="rounded-circle" width="40" height="40" />
                                    <div class="ms-3">
                                        <h6 class="fs-4 fw-semibold mb-0">Andika Risky Septiawan</h6>
                                        <span class="fw-normal">L200230023</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="mb-0 fw-normal fs-4">l200230023@student.ums.ac.id</p>
                            </td>
                            <td>
                                <p class="badge text-bg-secondary mb-0">Mahasiswa</p>
                            </td>
                            <td>
                                <span class="badge bg-success-subtle text-success">Aktif</span>
                            </td>
                            <td class="d-flex gap-1 justify-content-center">
                                <button type="button" class="btn btn-danger"><i class="ti ti-user-minus"></i> Non-aktifkan</button>
                                <button type="button" class="btn btn-warning"><i class="ti ti-settings"></i> Ubah</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h6 class="fs-4 fw-semibold mb-0">3</h6>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="../assets/images/profile/user-4.jpg" class="rounded-circle" width="40" height="40" />
                                    <div class="ms-3">
                                        <h6 class="fs-4 fw-semibold mb-0">Alta Moda Kristin Naro</h6>
                                        <span class="fw-normal">L200230024</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="mb-0 fw-normal fs-4">l200230024@student.ums.ac.id</p>
                            </td>
                            <td>
                                <p class="badge text-bg-secondary mb-0">Mahasiswa</p>
                            </td>
                            <td>
                                <span class="badge bg-danger-subtle text-danger">Nonaktif</span>
                            </td>
                            <td class="d-flex gap-1 justify-content-center">
                                <button type="button" class="btn btn-success"><i class="ti ti-user-check"></i> Aktifkan</button>
                                <button type="button" class="btn btn-warning"><i class="ti ti-settings"></i> Ubah</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div id="bs-example-modal-md" class="modal fade" tabindex="-1" aria-labelledby="bs-example-modal-md" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center">
                <h4 class="modal-title" id="myModalLabel">
                    Import Pengguna
                </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="ps-3 pr-3" action="#">
                    <div class="mb-3 d-flex flex-column">
                        <label>Unduh template</label>
                        <div class="d-flex gap-2">
                            <button class="btn bg-secondary-subtle text-secondary">.csv</button>
                            <button class="btn bg-secondary-subtle text-secondary">.xlsx</button>
                            <button class="btn bg-secondary-subtle text-secondary">.json</button>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="emailaddress">Unggah file</label>
                        <input class="form-control" type="file" id="formFile" required>
                    </div>

                    <div class="mb-3 text-center">
                        <button class="btn bg-info-subtle text-info " type="submit">
                            Upload
                        </button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-danger-subtle text-danger  waves-effect" data-bs-dismiss="modal">
                    Close
                </button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<?php $this->endSection(); ?>

<?= $this->section('scripts'); ?>
<script>
    $("#sync-confirm").click(function() {
        Swal.fire({
            title: "Apakah anda yakin?",
            text: "Ini akan menyinkronkan data pengguna dari Moodle. Tetapi tidak akan menghapus dan mengubah data pengguna (termasuk peran) yang ada.",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya, sinkronkan!",
        }).then((result) => {
            if (result.value) {
                Swal.fire("Sukses!", "Data pengguna telah disinkronkan.", "success");
            }
        });
    });

    $(document).ready(function() {
        $('#userTable').DataTable({
            pagingType: "full_numbers",
        });
    });
</script>
<?= $this->endSection(); ?>