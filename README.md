# sacode-phpiii-project06-samuel
Project 06 - MySql Database &amp; PhpMyAdmin
 ### Buat Database
```sql
CREATE DATABASE nama_database;
```

### Hapus Database
```sql
DROP DATABASE sacode;
```

### Hapus Tabel
```sql
DROP TABLE kategori_anggota;
```

### Buat Table
```sql
CREATE TABLE kategori_aggota(
	id INT(11) AUTO_INCREMENT PRIMARY KEY,
    kategori VARCHAR(50) NOT NULL
)
```
## TUGAS
### Tambah Data
```sql
INSERT INTO `kategori_anggota`(`id`,`Kategori`) VALUES ('','Moderator');
```

### Ubah Data
```sql
UPDATE `kategori_anggota` SET `kategori` = 'Anggota' WHERE `id` = 1;
```

### Hapus Data 
```sql
DELETE FROM `kategori_anggota` WHERE `id` = 1;
```
