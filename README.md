# 🖥️ Web Elektronik Gaming  

Aplikasi web yang menyediakan berbagai perangkat elektronik gaming seperti **laptop gaming, headset, handphone, PC build, network equipment** dan lain sebagainya.  
Website ini dirancang untuk memberikan pengalaman belanja online yang **aman, responsif, dan modern** dengan fitur verifikasi **OTP (One-Time Password)** via email.  

---

## ✨ Fitur Utama  

- 🔐 **OTP Verification** – Keamanan login dengan kode verifikasi email menggunakan **PHPMailer**.  
- 🌓 **Dark Mode & Light Mode** – Tampilan tema dapat diganti sesuai preferensi pengguna.  
- 📱 **Mobile Friendly** – Desain sepenuhnya responsif dengan **Tailwind CSS**.  
- 🗂️ **Kategori Produk** – Laptop Gaming, PC Build, Handphone, Headset, Network dan lainnya.  
- 🛒 **Halaman Produk Detail** – Informasi lengkap setiap produk, termasuk spesifikasi dan gambar.  
- 🎟️ **Voucher Promo** – Pengguna bisa menggunakan voucher promo saat checkout.  

---

## 🛠️ Teknologi yang Digunakan  

- **Laravel** – Framework PHP untuk backend dan routing.  
- **Tailwind CSS** – Styling responsif & modern.  
- **MySQL** – Database utama untuk menyimpan data pengguna & produk.  
- **PHPMailer** – Mengirim kode OTP melalui email.  
- **GitHub** – Version control & kolaborasi tim.  

---

## 📂 Struktur Proyek  

```bash
├── app/                # Logic utama Laravel
├── public/             # Aset publik (gambar, css, js)
├── resources/          # Blade templates & Tailwind CSS
├── routes/             # Routing aplikasi
├── database/           # Migrasi & seeder
├── .env.example        # File konfigurasi environment
└── README.md           # Dokumentasi proyek


## 🚀 Langkah Instalasi

### 1. Clone Repository
```bash
git clone https://github.com/your-username/elektronik-gaming.git
cd elektronik-gaming


## Install Deependenies
composer install
npm install

## Setup Environment
cp .env.example .env
php artisan key:generate

## Konfigurasi Database
Edit file .env dan sesuaikan konfigurasi database:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=elektronik_gaming
DB_USERNAME=your_username
DB_PASSWORD=your_password
