# T-Well Assessment — Pedoman Permanen Kontributor

## 1. Tujuan proyek dan stack

T-Well Assessment adalah aplikasi web penelitian untuk mengumpulkan jawaban **Self-Assessment** tentang personalisasi algoritma rekomendasi TikTok, Screen Time TikTok, dan kesejahteraan digital. Aplikasi ini tidak menetapkan hasil penelitian baru di luar spesifikasi resmi.

- Framework: Laravel 13.
- Bahasa/runtime: PHP 8.3.
- Database dan ORM: Laravel migrations serta Eloquent.
- Antarmuka: Blade, Vite, dan aset `resources` yang sudah ada.
- Ikuti `.editorconfig`: UTF-8, LF, indentasi empat spasi, dan final newline.
- Pertahankan bahasa UI Indonesia serta nama route yang ada, kecuali tugas secara eksplisit meminta perubahan.

Kerjakan perubahan secara bertahap, hanya dalam scope tugas, dan jangan menimpa atau memformat ulang perubahan pengguna yang tidak terkait.

## 2. Aturan penelitian yang tidak boleh dilampaui

- Website hanya mengumpulkan jawaban Self-Assessment.
- Website tidak menjalankan SEM-PLS.
- Analisis SEM-PLS dilakukan terpisah memakai SmartPLS 4.
- Jangan membuat scoring, kategori, threshold, interpretasi, rekomendasi, atau hasil baru tanpa spesifikasi penelitian resmi.
- Bila aturan, formula, atau perilaku hasil belum tersedia di spesifikasi penelitian resmi, tandai sebagai **MEMERLUKAN SPESIFIKASI** dan jangan mengimplementasikannya.
- Keberadaan field atau data legacy pada `assessment_results` bukan izin untuk menurunkan, menghitung, atau menulis hasil baru.

## 3. Instrumen Self-Assessment resmi

`app/Support/AssessmentInstrument.php` adalah satu-satunya sumber resmi instrumen. Gunakan `definition()`, `items()`, `itemCodes()`, dan `LIKERT_SCALE` dari class tersebut; jangan menduplikasi daftar item, urutan, skala, atau redaksi di controller, request, view, JavaScript, persistence, maupun test.

Urutan tampilan dan penyimpanan adalah persis berikut.

| Urutan | Kode | Variabel | Dimensi | Redaksi pertanyaan |
| ---: | --- | --- | --- | --- |
| 1 | X01 | X — Persepsi Personalisasi Algoritma Rekomendasi TikTok | Relevansi Konten | Konten yang muncul di FYP TikTok sesuai dengan minat saya. |
| 2 | X02 | X — Persepsi Personalisasi Algoritma Rekomendasi TikTok | Relevansi Konten | Konten yang direkomendasikan TikTok sesuai dengan ketertarikan saya. |
| 3 | X03 | X — Persepsi Personalisasi Algoritma Rekomendasi TikTok | Relevansi Konten | Sebagian besar konten yang muncul di FYP TikTok relevan dengan apa yang saya sukai. |
| 4 | X04 | X — Persepsi Personalisasi Algoritma Rekomendasi TikTok | Akurasi Prediksi Algoritma | TikTok mampu memperkirakan jenis konten yang kemungkinan besar akan saya sukai. |
| 5 | X05 | X — Persepsi Personalisasi Algoritma Rekomendasi TikTok | Akurasi Prediksi Algoritma | Rekomendasi TikTok sesuai dengan preferensi konten yang saya miliki. |
| 6 | X06 | X — Persepsi Personalisasi Algoritma Rekomendasi TikTok | Akurasi Prediksi Algoritma | Saya merasa TikTok dapat mengenali jenis konten yang menarik bagi saya. |
| 7 | X07 | X — Persepsi Personalisasi Algoritma Rekomendasi TikTok | Kecepatan Personalisasi | Setelah saya mulai tertarik pada suatu jenis konten, TikTok dengan cepat menyesuaikan rekomendasinya. |
| 8 | X08 | X — Persepsi Personalisasi Algoritma Rekomendasi TikTok | Kecepatan Personalisasi | Setelah saya berinteraksi dengan suatu jenis konten, TikTok dengan cepat menampilkan konten yang serupa. |
| 9 | X09 | X — Persepsi Personalisasi Algoritma Rekomendasi TikTok | Kecepatan Personalisasi | Ketika minat saya terhadap suatu jenis konten berubah, FYP TikTok segera menyesuaikan konten yang ditampilkan. |
| 10 | X10 | X — Persepsi Personalisasi Algoritma Rekomendasi TikTok | Kesadaran terhadap Filter Bubble | Saya menyadari bahwa rekomendasi TikTok dapat membuat saya lebih sering melihat jenis konten tertentu. |
| 11 | X11 | X — Persepsi Personalisasi Algoritma Rekomendasi TikTok | Kesadaran terhadap Filter Bubble | Saya menyadari bahwa aktivitas saya di TikTok memengaruhi konten yang muncul di FYP. |
| 12 | X12 | X — Persepsi Personalisasi Algoritma Rekomendasi TikTok | Kesadaran terhadap Filter Bubble | Saya menyadari bahwa personalisasi rekomendasi TikTok dapat membatasi keberagaman konten yang saya lihat. |
| 13 | Y1 | Y1 — Screen Time TikTok | Tidak ada | Berapa rata-rata durasi penggunaan TikTok Anda per hari berdasarkan data Screen Time di minggu sebelumnya? |
| 14 | Y201 | Y2 — Kesejahteraan Digital | Kontrol Diri Digital | Saya dapat mengendalikan lama waktu yang saya gunakan untuk bermain TikTok. |
| 15 | Y202 | Y2 — Kesejahteraan Digital | Kontrol Diri Digital | Saya dapat berhenti menggunakan TikTok ketika saya merasa sudah cukup. |
| 16 | Y203 | Y2 — Kesejahteraan Digital | Kontrol Diri Digital | Saya dapat mengatur penggunaan TikTok sesuai dengan batas waktu yang saya tetapkan sendiri. |
| 17 | Y204 | Y2 — Kesejahteraan Digital | Kondisi Mental-Emosional | Secara umum, kondisi emosional saya tetap stabil setelah menggunakan TikTok. |
| 18 | Y205 | Y2 — Kesejahteraan Digital | Kondisi Mental-Emosional | Saya tidak merasa cemas atau gelisah setelah menggunakan TikTok. |
| 19 | Y206 | Y2 — Kesejahteraan Digital | Kondisi Mental-Emosional | Suasana hati saya tidak memburuk dalam waktu lama setelah menggunakan TikTok. |
| 20 | Y207 | Y2 — Kesejahteraan Digital | Keseimbangan Daring-Luring | Saya tetap dapat menjalankan aktivitas sehari-hari meskipun menggunakan TikTok. |
| 21 | Y208 | Y2 — Kesejahteraan Digital | Keseimbangan Daring-Luring | Penggunaan TikTok tidak membuat saya mengabaikan aktivitas penting di dunia nyata. |
| 22 | Y209 | Y2 — Kesejahteraan Digital | Keseimbangan Daring-Luring | Saya tetap memiliki cukup waktu untuk melakukan aktivitas di luar penggunaan TikTok. |
| 23 | Y210 | Y2 — Kesejahteraan Digital | Kepuasan Subjektif | Saya merasa puas dengan durasi waktu yang saya gunakan untuk TikTok. |
| 24 | Y211 | Y2 — Kesejahteraan Digital | Kepuasan Subjektif | Saya merasa pola penggunaan TikTok saya sesuai dengan kebutuhan saya sehari-hari. |
| 25 | Y212 | Y2 — Kesejahteraan Digital | Kepuasan Subjektif | Secara keseluruhan, saya puas dengan cara saya mengelola penggunaan TikTok saya. |

Aturan respons resmi:

- X01–X12 dan Y201–Y212 adalah item Likert 1–5:
  1. Sangat Tidak Setuju
  2. Tidak Setuju
  3. Netral
  4. Setuju
  5. Sangat Setuju
- Y1 adalah durasi penggunaan TikTok dalam `minutes_per_day` (menit per hari).
- Jangan menambahkan batas minimum atau maksimum aplikasi untuk Y1.
- Kode item, urutan, variabel, dimensi, jenis respons, satuan, skala, dan seluruh redaksi di atas adalah keputusan penelitian. Ubah hanya atas instruksi eksplisit yang membawa spesifikasi penelitian resmi, lalu perbarui test terkait dalam perubahan yang sama.

## 4. Arsitektur data

Relasi data yang harus dipertahankan:

```text
users → assessment_sessions → assessment_answers
assessment_sessions → assessment_results
```

- Satu `User` memiliki banyak `AssessmentSession`.
- Satu `AssessmentSession` memiliki banyak `AssessmentAnswer` dan paling banyak satu `AssessmentResult`.
- `assessment_results.assessment_session_id` boleh `null` untuk data legacy; relasi baru tidak mengizinkan penghapusan parent secara kaskade.
- Nilai jawaban disimpan sebagai integer pada `assessment_answers.answer_value`; kombinasi session dan kode item harus unik.

## 5. Aturan Self-Assessment

- Self-Assessment wajib login. Route yang ada adalah `GET /self-assessment` dan `POST /self-assessment`, keduanya berada di middleware `auth`.
- Satu user boleh memiliki banyak assessment.
- Tidak ada draft: session dibuat dan diberi `started_at` serta `submitted_at` dalam alur submit yang sama.
- Tepat 25 jawaban wajib disubmit sekaligus sebagai `answers`, dengan tepat kode item resmi dan tanpa kode tambahan.
- Semua jawaban harus integer; jawaban Likert hanya boleh 1–5. Y1 tetap tidak memiliki batas maksimum aplikasi.
- Ownership selalu diambil dari authenticated user (`$request->user()`), bukan dari input request seperti `user_id`.
- Simpan session dan seluruh jawaban dalam database transaction. Bila satu penyimpanan gagal, session dan jawaban harus rollback bersama.
- Assessment code dibuat hanya setelah seluruh session dan jawaban berhasil disimpan. Format yang digunakan adalah `TW-` diikuti ID session dalam base-36 huruf besar, maksimal 20 karakter.
- Jangan membuat `AssessmentResult` baru sebelum spesifikasi hasil resmi tersedia: **MEMERLUKAN SPESIFIKASI**.

## 6. Legacy dan keamanan data

- Route legacy `POST /assessment` tidak boleh diubah tanpa instruksi eksplisit. Saat ini route tersebut mencari `AssessmentResult` berdasarkan assessment code dan menampilkan result legacy bila ditemukan.
- `TW-TEST-001` wajib dipertahankan persis sebagai data legacy: tanpa `assessment_session_id`, user owner, atau jawaban fiktif. Kode ini juga tidak boleh dihasilkan untuk session baru.
- Jangan mengubah migration historis, seeder, maupun data database tanpa instruksi eksplisit.
- Jangan menjalankan `migrate:fresh`, rollback migration, seeder, atau operasi hapus data tanpa persetujuan eksplisit.
- Jangan menganggap relasi nullable atau kolom hasil legacy sebagai mandat untuk memigrasikan, melengkapi, atau memperbaiki data lama.

## 7. Testing dan perubahan

- Setiap perubahan assessment harus mempunyai test relevan atau pembaruan test yang menjaga perilaku resmi.
- Untuk perubahan kode, jalankan lint yang tersedia (`vendor/bin/pint --test`), test terkait, full test suite (`php artisan test`), dan `git diff --check` sebelum melaporkan selesai.
- Test assessment harus terus melindungi: autentikasi, 25 item resmi dan urutannya, validasi jawaban lengkap/tanpa kode asing, rentang Likert, Y1 tanpa maximum aplikasi, ownership, transaction rollback, keunikan assessment code, dan kelestarian data legacy.
- Bila task hanya mengubah dokumentasi, tidak perlu menjalankan lint atau test kode; tetap periksa diff dan scope file yang berubah.

## 8. Status fitur berdasarkan codebase saat ini

### Sudah selesai

- `AssessmentInstrument` menjadi sumber tunggal untuk 25 item, metadata respons, urutan, dan skala Likert.
- Payload instrumen tersedia untuk user terautentikasi melalui `GET /self-assessment` dalam bentuk JSON.
- Submit terautentikasi melalui `POST /self-assessment` telah memvalidasi tepat 25 jawaban resmi, tipe integer, dan rentang Likert.
- Penyimpanan session dan jawaban berada dalam database transaction, menggunakan user login sebagai owner, serta menghasilkan assessment code setelah jawaban tersimpan.
- Model, migration, dan relasi `users → assessment_sessions → assessment_answers` serta `assessment_sessions → assessment_results` sudah ada.
- Test unit dan feature telah mencakup instrumen, autentikasi, validasi, ownership, rollback, kode assessment, dan preservasi hasil legacy.
- Route legacy `POST /assessment` tetap tersedia untuk pencarian result legacy berdasarkan assessment code.

### Belum diimplementasikan

- Halaman/form Blade untuk Self-Assessment belum ada pada alur route saat ini; endpoint GET mengembalikan JSON, bukan view.
- Draft atau penyimpanan jawaban sebagian belum diimplementasikan dan tidak boleh ditambahkan tanpa instruksi eksplisit.
- Pembuatan `AssessmentResult` dari session baru belum diimplementasikan.
- Scoring, kategori, threshold, interpretasi, rekomendasi, dan hasil baru belum diimplementasikan: **MEMERLUKAN SPESIFIKASI**.
- Analisis atau integrasi SEM-PLS/SmartPLS 4 belum diimplementasikan dan berada di luar website: **MEMERLUKAN SPESIFIKASI** untuk perubahan apa pun.

Perbarui bagian status ini hanya setelah memverifikasi codebase aktual; jangan mengarang status atau rencana fitur.
