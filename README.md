# 📝 Spada Ujian Online

Aplikasi berbasis web yang digunakan untuk mengelola dan menjalankan ujian online dengan integrasi Safe Exam Browser (SEB). Dibuat menggunakan **CodeIgniter 4**.

---

## 📌 Fitur Utama

### 🔐 Autentikasi
- Login multi-role: Admin, Admin + PS, Pengelola Soal, Mahasiswa
- Middleware untuk membatasi akses berdasarkan peran

### 🧑‍💼 Halaman Admin
- Dashboard Admin: Ringkasan data pengguna & ujian
- Manajemen Pengguna: Mahasiswa, Dosen, Admin (CRUD)
- Penjadwalan Ujian: Tambah, edit, hapus jadwal

### 🧑‍💼 Halaman Admin + PS
- Dashboard Admin: Ringkasan data pengguna & ujian
- Manajemen Pengguna: Mahasiswa, Dosen, Admin (CRUD)
- Penjadwalan Ujian: Tambah, edit, hapus jadwal
- Bank Soal: Akses penuh ke soal & kategori
- Hasil Ujian: Melihat daftar nilai mahasiswa

### ✏️ Pengelola Soal
- Dashboard Pengelola Soal: Statistik soal dan aktivitas
- Manajemen Tipe Soal
- Manajemen Mata Kuliah
- Kelola Bank Soal (CRUD)

### 🎓 Mahasiswa
- Dashboard Mahasiswa: Jadwal ujian terdekat
- Cek percobaan SEB terakhir (2 jam terakhir)
- Reset/Set password SEB
- Melihat hasil ujian

---