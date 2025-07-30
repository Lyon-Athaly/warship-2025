# 📊 Analisa dan Desain Proyek Laravel: Warship Management

## 🧩 Deskripsi Umum
Proyek ini adalah aplikasi manajemen data kapal perang. Aplikasi ini bertujuan untuk mencatat informasi kapal perang beserta detail asal-usulnya, jenis kapal, dan lokasi dermaga mereka ditempatkan.

---

## 🗃️ Struktur Model

### 1. Ship
yaitu entitas kapal perang.

| Field       | Tipe          | Keterangan                    |
|-------------|---------------|-------------------------------|
| id          | bigint        | Primary key                   |
| name        | string        | Nama kapal                    |
| type_id     | foreignIdFor  | Relasi ke jenis kapal         |
| dock_id     | foreignIdFor  | Relasi ke dermaga             |
| nation_id   | foreignIdFor  | Relasi ke negara asal         |
| hull_number | integer       | Nomor lambung kapal           |
| built_year  | year          | Tahun kapal dibuat            |

Dengan ForeignIdFor data pada field type_id, dock_id, nation_id dapat menyesuaikan sendiri dengan data di model Type, Dock, dan Nation.

### 2. Type
Jenis kapal perang tersebut.

| Field       | Tipe     |
|-------------|----------|
| id          | bigint   |
| name        | string   |
| description | text     |

### 3. Dock
Lokasi dermaga kapal ditempatkan.

| Field    | Tipe     |
|----------|----------|
| id       | bigint   |
| name     | string   |
| location | string   |

### 4. Nation
Negara pemilik kapal.

| Field | Tipe   |
|-------|--------|
| id    | bigint |
| name  | string |
| flag  | string (URL atau path ke gambar) |

---

## 🔗 Relasi Antar Model

- `Ship` **belongsTo** `Type`, `Dock`, dan `Nation`
- `Type` **hasMany** `Ship`
- `Dock` **belongsTo** `Nation`, **hasMany** `Ship`
- `Nation` **hasMany** `Ship` dan **hasMany** `Dock`

---

## Widget
Terdapat Widget **Overview.php** untuk menampilkan jumlah data dalam setiap model ke bagian dashboard. Setiap kali jumlah data pada model Type, Ship, Nation, ataupun Dock berubah, maka data yang akan ditampilkan di dashboard juga akan berubah




