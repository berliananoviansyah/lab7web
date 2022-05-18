| Berliana Noviansyah  |      312010373    |
|----------------------|-------------------|
|       TI.20.A1       |  Pemrograman Web  |
|      Pertemuan 9     |    Praktikum 7    |


## 1). Installasi Aplikasi Xampp


![mengintsall_xampp](img/install_xampp.png)


Pertama, install aplikasi Xampp lalu ekstrak filenya sesuaikan dengan tempat tersimpannya file tersebut. 



## 2). Menjalankan Web Server


![Menjalankan_WebServer](img/running_webserver.png)


Selanjutnya aktifkan Xampp dengan menekan tombol **start server apache** seperti gambar di atas.



## 3). Memulai PHP

Buat folder lab7_php_dasar pada root directory web server (c:xampp\htdocs)


![Membuat_folder](img/membuat_folder.png)


Lalu buat golder dengan nama **lab7_php_dasar** yang disimpan didalam folder **lab7web** untuk repository.
Kemudian akses directory pada web server dengan mengakses URL:http://localhost/lab7web/lab7_php_dasar/


![URL](img/running_webserver2.png)




## 4). PHP Dasar

Buatlah file di dalam folder **lab7_php_dasar** dengan nama **php_dasar.php**

Kemudian buat kode seperti ini: 

```html
<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Belajar PHP Dasar</h1>
    <?php
        echo "Hello World";
    ?>
</body>
</html>
```

Lalu akses hasilnya melalui URL:http://localhost/lab7web/lab7_php_dasar/php_dasar.php/

Outputnya:

![PHP_dasar](img/php_dasar.png)



## 5). Variable PHP

Masukan codingan dibawah ini pada file php_dasar.php

```html
<h2>Menggunakan Variabel</h2>
    <?php
        $nim = "312010373";
        $nama = 'Berliana Noviansyah';
        echo "NIM : " . $nim . "<br>";
        echo "Nama : $nama";
    ?>
```

Buka dengan URL: http://localhost/lab7web/lab7_php_dasar/php_dasar.php/

Dan didapatkan hasil:


![Variabel_PHP](img/variabel_php.png
)
