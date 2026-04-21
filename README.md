# 💎 CRUD Batu Permata (Laravel)

Aplikasi sederhana berbasis **Laravel** untuk mengelola data batu permata menggunakan konsep **CRUD (Create, Read, Update, Delete)** dengan database MySQL.

---

## 📌 Fitur Utama

* Menampilkan data batu permata
* Menambahkan data baru
* Mengedit data
* Menghapus data

---

## 🛠️ Teknologi yang Digunakan

* PHP (Laravel Framework)
* MySQL
* HTML & CSS sederhana

---

## ⚙️ Cara Instalasi

### 1. Clone Repository

```bash
git clone https://github.com/username/crudbatupermata.git
cd crudbatupermata
```

---

### 2. Install Dependency

```bash
composer install
```

---

### 3. Konfigurasi Environment

Copy file `.env`:

```bash
cp .env.example .env
```

Lalu generate key:

```bash
php artisan key:generate
```

---

### 4. Setup Database

Buat database di MySQL:

```sql
CREATE DATABASE crudbatupermata;
```

Edit file `.env`:

```env
DB_DATABASE=crudbatupermata
DB_USERNAME=root
DB_PASSWORD=
```

---

### 5. Jalankan Migration

```bash
php artisan migrate
```

---

### 6. Jalankan Aplikasi

```bash
php artisan serve
```

Buka di browser:

```
http://127.0.0.1:8000/
```

---

## 📂 Struktur Halaman

* `/` → Menampilkan data batu permata
* `/batu/create` → Form tambah data
* `/batu/{id}/edit` → Form edit data

---

## 📸 Tampilan Aplikasi

<img width="1365" height="223" alt="Image" src="https://github.com/user-attachments/assets/9ae55d10-d64a-480c-9071-a72cbeed1e40" />

---

## 👨‍💻 Author

* Nama: Putri Soraya
* NIM: 240180002
