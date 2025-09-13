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



## 🚀 Langkah Instalasi

### 1. Clone Repository
```bash
git clone https://github.com/your-username/J-techzone.git
cd J-techzone

```

### 2. Install Dependiences
```bash
composer install
npm install

```

### 3. Setup Environment
```bash
cp .env.example .env
php artisan key:generate

```

### 4. Konfigurasi Database
Edit file .env dan sesuaikan konfigurasi database:
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=J-techzone
DB_USERNAME=your_username
DB_PASSWORD=your_password

```

### 5. Migrasi Database
```bash
php artisan migrate --seed

```

### 6. Jalakankan server
```bash
php artisan serve


```

## 📂 Struktur Proyek  

```bash
├── app/                # Logic utama Laravel
├── public/             # Aset publik (gambar, css, js)
├── resources/          # Blade templates & Tailwind CSS
├── routes/             # Routing aplikasi
├── database/           # Migrasi & seeder
├── .env.example        # File konfigurasi environment
└── README.md           # Dokumentasi proyek

```

## 🔑 OTP Verification Flow
```bash
sequenceDiagram
    User->>Website: Login / Register
    Website->>PHPMailer: Kirim kode OTP ke email
    User->>Website: Input kode OTP
    Website->>Database: Validasi OTP
    Database-->>Website: Status Validasi
    Website-->>User: Akses diberikan / ditolak

```

--- 

👥 Contributors
This is my Team Project to make website electronic gaming :

Jason sairyo
 – Backend & Frontend Developer

Marco Marchelino
 –  UI/UX Designer

Helen Giovana
 –  UI/UX Designer

---

📌 Contact & Support
Email: mailleegaming888@gmail.com
Website: jtechzone (not hosted yet)
