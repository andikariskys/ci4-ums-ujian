<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title mb-3 fs-7"><?= isset($user) ? 'Ubah Pengguna' : 'Tambah Pengguna' ?></h4>
            <form action="#" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?= isset($user) ? $user['name'] : '' ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label d-block">Jenis Kelamin</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="gender_laki" value="Laki-laki" <?= (isset($user) && $user['gender'] == 'Laki-laki') ? 'checked' : '' ?> required>
                        <label class="form-check-label" for="gender_laki">Laki-laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="gender_perempuan" value="Perempuan" <?= (isset($user) && $user['gender'] == 'Perempuan') ? 'checked' : '' ?> required>
                        <label class="form-check-label" for="gender_perempuan">Perempuan</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">NIM/Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="<?= isset($user) ? $user['username'] : '' ?>" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?= isset($user) ? $user['email'] : '' ?>" required>
                </div>
                <?php if (!isset($user)): ?>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="password" name="password" required>
                            <button class="btn btn-secondary" type="button" id="togglePassword">
                                <i id="toggleIcon" class="ti ti-eye"></i>
                            </button>
                        </div>
                        <div class="d-flex">
                            <small id="name13" class="badge badge-default text-danger bg-danger-subtle form-text">Kosongkan untuk generate password otomatis</small>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="mb-3">
                    <label class="form-label d-block">Peran</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="role" id="role_admin" value="admin" <?= (isset($user) && $user['role'] == 'admin') ? 'checked' : '' ?> required>
                        <label class="form-check-label" for="role_admin">Admin</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="role" id="role_admin_ps" value="adminps" <?= (isset($user) && $user['role'] == 'adminps') ? 'checked' : '' ?> required>
                        <label class="form-check-label" for="role_admin_ps">Admin Pengelola Soal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="role" id="role_ps" value="pengelola" <?= (isset($user) && $user['role'] == 'pengelola') ? 'checked' : '' ?> required>
                        <label class="form-check-label" for="role_ps">Pengelola Soal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="role" id="role_mahasiswa" value="mahasiswa" <?= (isset($user) && $user['role'] == 'mahasiswa') ? 'checked' : '' ?> required>
                        <label class="form-check-label" for="role_mahasiswa">Mahasiswa</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary"><?= isset($user) ? 'Perbarui' : 'Simpan' ?></button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
<?= $this->section('scripts'); ?>
<script>
    const toggleBtn = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');
    const toggleIcon = document.getElementById('toggleIcon');

    if (toggleBtn && passwordInput && toggleIcon) {
        toggleBtn.addEventListener('click', function() {
            const isPassword = passwordInput.type === 'password';
            passwordInput.type = isPassword ? 'text' : 'password';
            toggleIcon.className = isPassword ? 'ti ti-eye-off' : 'ti ti-eye';
        });
    }
</script>
<?= $this->endSection(); ?>