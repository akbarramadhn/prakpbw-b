# 🚀 Praktikum 4 Autentikasi

---

## Langkah-Langkah
- Instal dan konfigurasikan Breeze ke dalam proyek "LaraPress"
  Masukkan perintah ini untuk mengunduh paket Breeze dan dependensinya
  ```composer require laravel/breeze --dev```
- Instalasikan Breeze
  Setelah mengunduh langsung publikasikan semua file yang dibutuhkan
  ```php artisan breeze:install```
  1. Setelah menjalankan perintah dan diberikan pilihan, pilih "blade"
  2. Apabila muncul pilihan dark mode support ketik "No"
  3. Dan pilih 0 untuk pest lalu enter
- Instal depedensi JavaScript
  ```npm install```
- Setelah di intal, tambahkan perintah ini untuk mencompile file CSS dan JS agar bisa digunakan di browser
  ```npm run dev```
- Breeze perlu menambahkan kolom dengan cara migrate
  ```php artisan migrate```
- Lalu terakhir uji coba
  Uji coba dengan menggunakan perintah ini
  ```php artisan serve```
- Setelah sudah di run dan muncul, buka vscode lalu masukkan prompt dibawah ini untuk membungkus semua rute dalam sebuah route group
```
Route::middleware('auth')->group(function () {
    Route::get('/posts/create', [PostController::class,'create'])->name('posts.create');
    Route::post('/posts', [PostController::class,'store'])->name('posts.store');
    Route::get('/posts/{post}/edit', [PostController::class,'edit'])->name('posts.edit');
    Route::put('/posts/{post}', [PostController::class,'update'])->name('posts.update');
    Route::delete('/posts/{post}', [PostController::class,'destroy'])->name('posts.destroy');
});
```
- Terakhir jalankan dengan menambahkan /login dalam url kamu
  Hasil :
  <img width="1902" height="949" alt="image" src="https://github.com/user-attachments/assets/6b7e5493-c821-47a6-8b20-c947e36e2eea" />

- FUNFACT
  Di URL tidak adanya /login dikarenakan menambahkan ('auth login') pada view agar tidak perlu menampilkan /login
