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
                <a href="<?= route_to('admin_users_create') ?>" class="btn btn-primary"><i class="ti ti-user-plus"></i> Tambah Pengguna</a>
            </div>
            
            <?php if (session()->getFlashdata('success')): ?>
                <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <?= session()->getFlashdata('success') ?>
                </div>
            <?php elseif (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php endif; ?>

            <div class="table-responsive overflow-auto pb-2">
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
                        <?php $no = 0;
                        foreach ($users as $user):
                            $no++; ?>
                            <tr>
                                <td>
                                    <h6 class="fs-4 fw-semibold mb-0"><?= $no ?></h6>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="<?php if ($user['gender'] == 'Laki-laki') {
                                                        echo base_url('assets/images/profile/user-5.jpg');
                                                    } else {
                                                        echo base_url('assets/images/profile/user-4.jpg');
                                                    } ?>" class="rounded-circle" width="40" height="40" />
                                        <div class="ms-3">
                                            <h6 class="fs-4 fw-semibold mb-0"><?= $user['name'] ?></h6>
                                            <span class="fw-normal"><?= $user['username'] ?></span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="mb-0 fw-normal fs-4"><?= $user['email'] ?></p>
                                </td>
                                <td>
                                    <p class="badge <?= $user['role_badge'] ?> mb-0"><?php if ($user['role'] == 'admin') {
                                        echo 'Administrator';
                                    } elseif ($user['role'] == 'adminps') {
                                        echo 'Admin Pengelola Soal';
                                    } elseif ($user['role'] == 'pengelola') {
                                        echo 'Pengelola Soal';
                                    } elseif ($user['role'] == 'mahasiswa') {
                                        echo 'Mahasiswa';
                                    } ?></p>
                                </td>
                                <td>
                                    <span class="badge <?= $user['status_badge'] ?>"><?= $user['status'] ?></span>
                                </td>
                                <td>
                                    <?php if ($user['status'] === 'Aktif'): ?>
                                        <button type="button" class="btn btn-danger">
                                            <i class="ti ti-user-minus"></i> Non-aktifkan
                                        </button>
                                    <?php else: ?>
                                        <button type="button" class="btn btn-success">
                                            <i class="ti ti-user-check"></i> Aktifkan
                                        </button>
                                    <?php endif; ?>
                                    <button type="button" class="btn btn-info" id="reset-password">
                                        <i class="ti ti-lock-open"></i> Reset Password
                                    </button>
                                    <a href="<?= route_to('admin_users_edit', $user['id']) ?>" type="button" class="btn btn-warning">
                                        <i class="ti ti-settings"></i> Ubah
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
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
                <form class="ps-3 pr-3" action="#" enctype="multipart/form-data" method="post">
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
            text: "Ini akan mengambil data pengguna dari Moodle. Tetapi tidak akan menghapus dan mengubah data pengguna (termasuk peran) yang sudah ada.",
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

    $("#reset-password").click(function() {
        Swal.fire({
            title: "Apakah anda yakin?",
            text: "Ini akan mereset password pengguna.",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya, reset password!",
        }).then((result) => {
            if (result.value) {
                Swal.fire("Sukses!", "Password pengguna saat ini adalah <span class='fw-bold'>pass123#</span> mohon disalin sebelum ditutup.", "success");
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