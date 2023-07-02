# Perancangan Kembali Antarmuka Pengguna Website DPM Politeknik Statistika STIS

website ini adalah redesign dari web DPM STIS diperuntukkan untuk memenuhi tugas mata kuliah Interaksi Manusia Komputer

## Persyaratan Sistem

- PHP versi 7.2 atau yang lebih baru.
- Extensi PHP yang diperlukan: intl, libcurl (jika Anda ingin menggunakan cURL), gd (jika Anda ingin menggunakan fitur gambar).
- Web server (seperti Apache atau Nginx) yang dikonfigurasi dengan PHP.
- Composer, manajer paket PHP, terinstal di komputer Anda.

## Run Locally

Cloning Repository

```bash
  git clone https://github.com/Furease/ci-imk-dpm.git
```

Masuk ke Direktori: Setelah proses cloning selesai, masuk ke direktori proyek:

```bash
  cd ci-imk-dpm
```

Instal Dependensi: Jalankan perintah Composer berikut untuk menginstal semua dependensi proyek:

```bash
  composer install
```

Jalankan server

```bash
  php spark serve
```

## Login Aplikasi

Login dapat menggunakan nim dan password bebas karena tidak terdapat validasi

## Demo

[222011622.student.stis.ac.id](https://222011622.student.stis.ac.id)

## Documentation

[Documentation](https://linktodocumentation)
