Route::get('/mahasiswa', function () {
return view(kampus.mahasiswa',["mahasiswa01" => "Maulana Sultansyah"]);
});

# 2
Route::get('/mahasiswa', function () {
return view(kampus.mahasiswa',
[
"mahasiswa01" => "Indra Kenz",
"mahasiswa02" => "Doni Salmanan",
"mahasiswa03" =>
"Ulfi Rizkia",
"mahasiswa04" => "Deliana Putri"
]);
});

#3
Route::get('/mahasiswa', function () {
$arrMahasiswa = [
"mahasiswa01" => "Indra Kenz",
"mahasiswa02" => "Doni Salmanan",
"mahasiswa03" => "Ulfi Rizkia",
"mahasiswa04" => "Deliana Putri"
];
return view('kampus.mahasiswa',$arrMahasiswa);
});

Route:get('/mahasiswa', function () {
$arrMahasiswa = ["Doni Sadikin", "Syadzwina Sahara", "Deliana Putri",
"Indra Kenz"];
return view('kampus.mahasiswa', ['mahasiswa' => $arrMahasiswa]);
});

# 5
Route::get('/mahasiswa', function () {
return view('kampus.mahasiswa')->with('mahasiswa01', 'Risa Lestari');
}):

# 6
Route::get('/mahasiswa', function () {
$arrMahasiswa = ("Doni Sadikin", "Syadzwina Sahara" "Deliana Putri"
"Indra Kenz"];

return view('kampus.mahasiswa")->with('mahasiswa',$arrMahasiswa);
});

#7
Route::get('/mahasiswa', function () {
return view('kampus.mahasiswa')->with('mahasiswa01', 'Doni Sadikin')
->with('mahasiswa02', 'Syadzwina Sahara')->with ('mahasiswa03', 'Deliana Putri');
});

Route::get('/mahasiswa', function () {
return view('kampus.mahasiswa")
->with('mahasiswa01', 'Doni Sadikin")
->with('mahasiswa02', 'Syadzwina Sahara')
->with('mahasiswa03', 'Deliana Putri');
});

#8
Route::get('/mahasiswa', function () {
return view('kampus.mahasiswa')->withmahasiswa01('Khairur Almeer");
});

Route::get('/mahasiswa', function () {
return view('kampus.mahasiswa')
->withmahasiswa01, ('Doni Sadikin')
->withmahasiswa02, 'Syadzwina Sahara")
->withmahasiswa03, 'Deliana Putri");
});

Route::get('/mahasiswa', function () {
$mahasiswa01 = "Indra Kenz",
$mahasiswa02 = "Doni Salmanan",
$mahasiswa03 = "Ulfi Rizkia",
$mahasiswa04 = "Deliana Putri"
return view('kampus.mahasiswa', compact("mahasiswa01", "mahasiswa02", "mahasiswa03", "mahasiswa04"));
}):

#9
Route::get('/mahasiswa', function () {
$mahasiswa01 = "Indra Kenz",
$mahasiswa02 = "Doni Salmanan",
$mahasiswa03 = "Ulfi Rizkia",
$mahasiswa04 = "Deliana Putri"
return view('kampus.mahasiswa")->with(compact("mahasiswa01",
"mahasiswa02",
"mahasiswa03",
"mahasiswa04"));
});

#### hari minggu ####
# 1
Route::get('/mahasiswa', function () {
$nama = 'John Paijo Simatupang';
$nilai = 75;
return view('mahasiswa', compact('nama', 'nilai'));
});

# 2
Route::get('/mahasiswa', function () {
$nama = '<u>Elon Musk Batubara</u>';
$nilai=75;
return view('mahasiswa', compact('nama', 'nilai'));
}):

#4
Route::get('/mahasiswa', function () {
$nama = 'Elon Musk Batubara';
$nilai = 75;
return view('mahasiswa',compact('nama', 'nilai'));
}):

#6
Route::get('/mahasiswa', function () {
$nama = 'Vladimir Putin Harahap';
$nilai = [80,64,30,76,95];
return view('mahasiswa', compact('nama', 'nilai'));
}):

#8
<!-- Perintah Continue dan Break
Di dalam PH native, terdapat perintah continue dan break yang bisa dipakai untuk
mengatur alur perulangan. Blade juga menyediakan perintah @continue dan @break
sebagai alternatif penulisan.
web.php -->
Route::get('mahasiswa', function () {
$nama = 'Tya Kirana Putri';
$nilai = [80,64,30,76,95];
return view('mahasiswa', compact('nama', 'nilai'));
});