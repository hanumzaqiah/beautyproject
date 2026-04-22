# Pengujian Website Beauty Project

**Untuk simulasi login:**
- Username: `admin1`
- Password: `admin`

---

## Tabel Pengujian

| No | Halaman | Fitur | Langkah Pengujian | Hasil yang Diharapkan | Status |
|----|--------|------|------------------|----------------------|--------|
| TC-01 | Login | Login kosong | Klik login tanpa isi data | Muncul error "field harus diisi" | ✅ |
| TC-02 | Login | Login valid | Input username & password benar | Berhasil masuk ke sistem | ✅ |
| TC-03 | Login | Password sengaja disalahkan | Password salah | Login gagal | ✅ |
| TC-04 | Home | Selengkapnya (Shop) | Klik tombol "Selengkapnya" | Masuk ke halaman Shop | ✅ |
| TC-05 | Home | About (Selengkapnya) | Klik tombol About | Masuk ke halaman About Us | ✅ |
| TC-06 | Home | Analisis Kulit | Pilih tipe kulit & masalah → klik Analisis | Muncul tipe kulit + rekomendasi produk | ✅ |
| TC-07 | Home | Bestseller | Klik produk bestseller | Masuk ke detail produk | ✅ |
| TC-08 | Home | Produk Lainnya | Klik "Produk lainnya" | Masuk ke Shop | ✅ |
| TC-09 | Home | Blog | Klik "Read More" | Masuk ke halaman Blog | ✅ |
| TC-10 | Home | Contact | Klik "Hubungi Kami" | Masuk ke halaman Contact | ✅ |
| TC-11 | Footer | Navigasi Footer | Klik link (Shop, About Us) | Berpindah sesuai halaman | ✅ |
| TC-12 | Footer | Logo | Klik logo | Kembali ke Home | ✅ |
| TC-13 | Shop | Klik Produk | Klik salah satu produk | Masuk ke detail produk | ✅ |
| TC-14 | Shop | Add to Cart | Klik "Add to Cart" | Produk masuk ke keranjang | ✅ |
| TC-15 | Detail Produk | Komentar | Tambahkan komentar | Komentar tampil di bawah | ✅ |
| TC-16 | About Us | Video YouTube | Klik video | Video dapat diputar | ✅ |
| TC-17 | About Us | Read More | Klik Read More | Menampilkan penjelasan lengkap | ✅ |
| TC-18 | Blog | Detail Blog | Klik salah satu blog | Masuk ke halaman detail blog | ✅ |
| TC-19 | Blog | Komentar | Tambahkan komentar | Komentar tampil | ✅ |
| TC-20 | Filter | Trend | Klik filter trend | Produk tampil sesuai trend | ✅ |
| TC-21 | Filter | Insight | Klik insight | Menampilkan kebutuhan pelanggan | ✅ |
| TC-22 | New Arrival | Produk Baru | Klik New Arrival | Masuk ke produk terbaru | ✅ |
| TC-23 | Contact | Maps | Buka halaman Contact | Maps lokasi tampil | ✅ |
| TC-24 | Cart | Input Kupon | Masukkan "Beauty Project" | Diskon 5% diterapkan | ✅ |
| TC-25 | Cart | Apply Kupon | Klik Apply | Harga terpotong | ✅ |
| TC-26 | Checkout | Validasi Form | Kosongkan field wajib | Muncul error validasi | ✅ |
| TC-27 | Checkout | Isi Data | Isi semua field | Bisa lanjut checkout | ✅ |

---

## 📌 Keterangan
- Status:
  - ✅ = Berhasil
  - ❌ = Gagal
