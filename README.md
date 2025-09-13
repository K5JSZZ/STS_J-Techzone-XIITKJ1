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

# 1. Clone repository
git clone https://github.com/username/nama-repo.git
cd nama-repo

# 2. Install dependency Laravel
composer install
npm install && npm run dev

# 3. Copy .env dan konfigurasi database
cp .env.example .env
php artisan key:generate

# 4. Migrasi database
php artisan migrate --seed

# 5. Jalankan server
php artisan serve

sequenceDiagram
    User->>Website: Login / Register
    Website->>PHPMailer: Kirim kode OTP ke email
    User->>Website: Input kode OTP
    Website->>Database: Validasi OTP
    Database-->>Website: Status Validasi
    Website-->>User: Akses diberikan / ditolak

📱 Tampilan

Dark Mode / Light Mode Toggle

Halaman Kategori Produk

Detail Produk dengan tombol Add to Cart & Wishlist

Form Login dengan OTP Verification


# 1. Fork repository ini
# 2. Buat branch baru
git checkout -b fitur-baru

# 3. Commit perubahan
git commit -m "Menambahkan fitur baru"

# 4. Push ke branch
git push origin fitur-baru
