<div class="container text-center mt-3 pt-3 bg-white">
    <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{$nama}}</h1>
    <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{$nilai}}</h1>
    <br>
    @switch($nilai)
    @case(0)
    <div class="alert alert-danger d-inline-block">Tidak ikut ujian</div>
    @break
    @case(75)
    <div class="alert alert-success d-inline-block">Lumayan</div>
    @break
    @case(100)
    <div class="alert alert-success d-inline-block">Sempurna</div>
    @break
    @default
    <div class="alert alert-dark d-inline-block">Nilai tidak valid</div>
    @endswitch
</div>

<!-- Perulangan For
mahasiswa.blade.php -->
<div class="container text-center mt-3 pt-3 bg-white">
    @for ($i = 0; $i < 5; $i++) <div class="alert alert-info d-inline-block">
        Laravel
</div>
@endfor
</div>

<!-- Kode view di atas akan menampilkan teks 'Laravel' sebanyak 5 kali yang berasal dari
perintah @for(Si = 0; Si < 5; Si++). Kembali, ini sangat mirip seperti perulangan for PHP.
Selain itu kita juga bisa mengakses variabel counter $i seperti halnya di PHP native:
mahasiswa.blade.php -->
<div class="container text-center mt-3 pt-3 bg-white">
    @for ($i = 0; $i < 5; $i++) <div class="alert alert-info d-inline-block">
        {{$i}}
</div>
@endfor
</div>
</div>