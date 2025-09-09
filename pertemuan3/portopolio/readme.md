# Analisis Struktur Kode Portofolio (HTML)

Dokumen ini berisi analisis semi-formal mengenai struktur kode HTML portofolio **Rifqi Afriza Rahman**.  
Setiap tag akan dijelaskan fungsinya secara singkat namun jelas.

---

## 1. `<!DOCTYPE html>`
- Digunakan untuk mendefinisikan bahwa dokumen ini adalah dokumen **HTML5**.
- Wajib ada di awal agar browser membaca halaman dengan standar HTML5, bukan mode kompatibilitas lama.

---

## 2. `<html lang="id">`
- Elemen utama yang membungkus seluruh isi dokumen.
- Atribut `lang="id"` menunjukkan bahwa bahasa utama halaman adalah **Bahasa Indonesia**.

---

## 3. `<head> ... </head>`
Bagian ini menyimpan **informasi metadata** dari dokumen, tidak ditampilkan langsung ke pengguna.

### a. `<meta charset="UTF-8">`
- Menentukan encoding karakter menjadi **UTF-8**.
- Supaya teks (termasuk huruf Indonesia) dapat ditampilkan dengan benar.

### b. `<meta name="viewport" content="width=device-width, initial-scale=1.0">`
- Membuat halaman lebih **responsif**.
- Menyesuaikan ukuran tampilan agar sesuai pada layar komputer maupun perangkat mobile.

### c. `<title>Portofolio Rifqi Afriza Rahman</title>`
- Judul halaman yang muncul di tab browser.

### d. `<link rel="stylesheet" href="style.css">`
- Menghubungkan dokumen HTML dengan file **CSS eksternal** bernama `style.css`.
- File CSS ini digunakan untuk mengatur tampilan dan gaya halaman.

---

## 4. `<body> ... </body>`
Bagian utama yang berisi konten yang terlihat oleh pengguna.

### a. `<header> ... </header>`
- Menampilkan bagian **kepala halaman** (judul dan deskripsi singkat).
- Berisi:
  - `<h1>` → judul utama, nama pemilik portofolio, menggunakan heading level 1
  - `<p>` → deskripsi singkat tentang peran atau profesi.

### b. `<div class="container"> ... </div>`
- Elemen pembungkus (container) yang mengorganisir isi halaman agar lebih rapi.

#### i. `<div class="profile"> ... </div>`
- Bagian **profil pribadi**.
- Elemen di dalamnya:
  - `<img src="fto.jpg" alt="Foto Profil">` → menampilkan foto profil dengan teks alternatif bila gambar gagal dimuat.
  - `<p>` → teks pengenalan singkat tentang diri.

#### ii. `<div class="section"> ... </div>` (Pendidikan)
- Subbagian bertema **pendidikan**.
- `<h2>` → judul subbagian.
- `<ul>` dan `<li>` → daftar riwayat pendidikan dalam bentuk list.

#### iii. `<div class="section"> ... </div>` (Keahlian)
- Subbagian **daftar keahlian**.
- Menggunakan `<ul>` dan `<li>` untuk menyusun daftar kemampuan teknis.

#### iv. `<div class="section"> ... </div>` (Proyek)
- Subbagian yang menjelaskan proyek yang pernah dibuat.
- `<ul>` → list proyek.
- `<li>` → detail proyek dengan deskripsi singkat.

#### v. `<div class="section"> ... </div>` (Kontak)
- Subbagian **informasi kontak**.
- Berisi beberapa `<p>` dengan tautan:
  - `mailto:` untuk alamat email.
  - `target="_blank"` pada link LinkedIn & GitHub agar terbuka di tab baru.

### c. `<footer> ... </footer>`
- Bagian paling bawah halaman.
- Berisi hak cipta (`&copy;`) dengan tahun dan nama pemilik portofolio.

---



# Analisis CSS
---
## Body
```css
body {
  font-family: Arial, sans-serif;  /* Menggunakan font Arial, dengan fallback sans-serif */
  margin: 0;                       /* Menghapus margin default browser */
  padding: 0;                      /* Menghapus padding default browser */
  line-height: 1.6;                /* Memberi jarak antar baris agar teks lebih enak dibaca */
  background: #f5f5f5;           /* Warna latar belakang abu-abu terang */
}
body{} artinya selector menargetkan elemen <body> di HTML, yaitu wadah utama dari seluruh isi halaman web.
```

---
## Header
```css
header {
  background: #2c3e50;  /* Latar belakang biru tua/abu gelap */
  color: white;           /* Warna teks putih */
  padding: 20px 0;        /* Ruang atas-bawah 20px, kiri-kanan 0 */
  text-align: center;     /* Teks rata tengah */
}
header{} artinya selector menargetkan elemen <header> di HTML

header h1 {
  margin: 0;            /* Hilangkan margin default agar lebih rapat */
}
header h1{} artinya selector menargetkan elemen <h1> yang ada dalam <header> di HTML
```

---
## Container
```css
.container {
  width: 80%;        /* Lebar kontainer 80% dari layar */
  margin: auto;      /* Kontainer ditengah secara horizontal */
  overflow: hidden;  /* Mengatasi elemen float agar tidak keluar */
  padding: 20px;     /* Ruang dalam kontainer */
  background: white; /* Latar belakang putih untuk kontras */
}
Ada titik (.) di depannya → ini menargetkan class. Jadi CSS ini berlaku untuk semua elemen yang punya class="container".
```

---
## Heading (h2)
```css
h2 {
  color: #2c3e50;                /* Warna teks abu gelap */
  border-bottom: 2px solid #eee; /* Garis bawah tipis berwarna abu muda */
  padding-bottom: 5px;             /* Jarak antara teks dan garis */
}
h2{} artinya selector menargetkan semua elemen <h2> yang ada dalam <header> di HTML
```

---
## Profile
```css
.profile {
  text-align: center;   /* Isi konten profil rata tengah */
  margin-bottom: 20px;  /* Jarak bawah 20px */
}
.profile{} artinya selector menargetkan semua elemen HTML yang memiliki atribut class="profile".
```

### Profile Image
```css
.profile img {
  width: 150px;                   /* Lebar gambar 150px */
  height: 150px;                  /* Tinggi gambar 150px */
  border-radius: 100%;            /* Membuat gambar bulat sempurna */
  border: 4px solid #fff;       /* Garis tepi putih setebal 4px */
  object-fit: cover;              /* Memotong gambar agar proporsional */
  object-position: 50% 20%;       /* Fokus gambar di tengah (horizontal) dan agak ke atas (vertikal) */
  box-shadow: 0 2px 6px rgba(0,0,0,0.2); /* Efek bayangan lembut */
}
.profile img{} Selector ini menargetkan elemen <img> (gambar) yang berada di dalam elemen dengan class profile.
```

---
## Section
```css
.section {
  margin-bottom: 20px; /* Jarak bawah antar section sebayak 20px*/
}
Selector .section{} menargetkan semua elemen HTML yang memiliki class section.
```

---
## Unordered List (ul) & List Items (li)
```css
ul {
  list-style: none; /* Hilangkan bullet default */
  padding: 0;       /* Hilangkan padding bawaan */
}
Selector ul{} menargetkan semua elemen <ul> (unordered list / daftar tidak berurutan) di halaman HTML.

ul li {
  background: #ecf0f1;   /* Latar belakang abu terang */
  margin: 5px 0;           /* Jarak antar item daftar */
  padding: 10px;           /* Ruang dalam item */
  border-radius: 5px;      /* Sudut membulat */
}
Selector ul li{} berarti menargetkan semua elemen <li> (list item) yang berada di dalam <ul>.
Jadi aturan ini hanya berlaku untuk item daftar dalam list tak berurutan (<ul>).
```

---
## Footer
```css
footer {
  text-align: center;      /* Konten rata tengah */
  padding: 10px;           /* Ruang dalam atas-bawah */
  background: #2c3e50;   /* Latar belakang biru tua/abu gelap */
  color: white;            /* Teks berwarna putih */
  margin-top: 20px;        /* Jarak atas dari konten sebelumnya */
}
Selector footer{} menargetkan elemen HTML <footer>.
```

---
## Kesimpulan
Struktur HTML
** HTML membentuk kerangka halaman portofolio yang rapi dan terorganisir.
** Menggunakan elemen semantik (<header>, <section>, <footer>) sehingga lebih mudah dipahami baik oleh pembaca maupun mesin pencari.
** Class seperti .container, .profile, dan .section digunakan untuk memisahkan bagian konten agar lebih mudah diatur lewat CSS.

## Peran CSS
** CSS dipakai untuk mempercantik tampilan: mengatur warna, ukuran, jarak, dan posisi elemen.
** Selector berbasis elemen (body, header, h2) maupun berbasis class (.container, .profile) memberikan fleksibilitas dalam styling.
** Ada juga selector kombinasi (header h1, .profile img, ul li) untuk menargetkan elemen tertentu secara lebih spesifik.
