# Aplikasi Manajemen Inventaris

Aplikasi ini dibuat sebagai pemenuhan Tugas Konstruksi dan Evolusi Perangkat Lunak. 

## Alur DevOps & CI/CD
- **Branching Strategy:** Menggunakan `main`, `dev`, dan `feature/inventaris`.
- **Pull Requests:** Perubahan di-merge dari feature -> dev -> main.
- **Automated Testing (CI):** Menggunakan GitHub Actions untuk menjalankan PHPUnit secara otomatis pada setiap PR dan push.
- **Branch Protection:** `main` dan `dev` dilindungi sehingga tidak bisa di-*push* secara langsung.