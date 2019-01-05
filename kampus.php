<?php
//--Data Warna--//
$biru = "\e[34m";
$kuning = "\e[33m";
$cyan = "\e[96m";
$magenta = "\e[35m";
$hijau = "\e[92m";
$merah = "\e[91m";
$orange = "\e[125";
//--Data warna--//
//introduce
echo "$kuning -------------------------------------";
echo "\n";
echo " _  __  Wifi.id -> Komunitas
| |/ /__ _ _ __ ___  _ __  _   _ ___ 
| ' // _` | '_ ` _ \| '_ \| | | / __| 
| . \ (_| | | | | | | |_) | |_| \__ \ 
|_|\_\__,_|_| |_| |_| .__/ \__,_|___/ 
                    |_|               ";
echo "\n";
echo "$cyan Code by : SingleAttacker";
echo "\n";
echo "$kuning -------------------------------------";
//introduce
echo "\n";
//Keterangan
echo "$biru Cara isi Registrasi: Tahun + 1 atau 2
*Contoh -> 20172 (genap)
*Contoh -> 20171 (ganjil)";
echo "\n";
echo "$biru Cara Tanggal lahir: 20 Oktober 1995
*Contoh -> 20101995";
//keterangan
echo "\n\n";
echo "$kuning NIM : ";
$nim = trim(fgets(STDIN));
$ut  = '@ut.ac.id';
echo "$kuning Registrasi : ";
$masa = trim(fgets(STDIN));
echo "$kuning Tanggal Lahir : ";
$ttl = trim(fgets(STDIN));
echo "\n";

//Bagian Username
$username = $nim.$ut;
//Bagian Password
$password = $masa.$ttl;

echo "\n";
echo "$kuning ------------- -=Result=- ------------";
echo "\n";
echo " $hijau Username : ".$username;
echo "\n";
echo " $hijau Password : ".$password;
echo "\n";
echo "$kuning ------------- -=Result=- ------------";

?>