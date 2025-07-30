# 📊 Analisa dan Desain Proyek Laravel: Warship Management

## 🧩 Deskripsi Umum
Proyek ini adalah aplikasi manajemen data kapal perang yang. Aplikasi ini bertujuan untuk mencatat informasi kapal perang beserta detail asal-usulnya, jenis kapal, dan lokasi dermaga mereka ditempatkan.

---

## 🗃️ Struktur Model

### 1. Ship
yaitu entitas kapal perang.

| Field       | Tipe       | Keterangan                    |
|-------------|------------|-------------------------------|
| id          | bigint     | Primary key                   |
| name        | string     | Nama kapal                    |
| type_id     | foreignId  | Relasi ke jenis kapal         |
| dock_id     | foreignId  | Relasi ke dermaga             |
| nation_id   | foreignId  | Relasi ke negara asal         |
| hull_number | integer    | Nomor lambung kapal           |
| built_year  | year       | Tahun kapal dibuat            |

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




