<!-- contoh penggunaan perintah @continue
mahasiswa.blade.php -->
<div class="container text-center mt-3 pt-3 bg-white">
    <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{$nama}}</h1>
    <br>
    @foreach ($nilai as $val)
    @if ($val < 50) @continue @endif <div class="alert alert-success d-inline-block">
        {{$val}}
</div>
@endforeach
</div>

<!-- 
Di sini kembali menampilkan isi array $nilai mengqunakan perulangan foreach, namun
terdapat tambahan pemeriksaan kondisi di baris 5
7. Kondisi tersebut adalah, jika
ditemukan angka yang kurang dari 50, maka jalankan perintah @continue. Hasilnya, setiap
kali foreach memproses angka yang kurang dari 50, perulangan langsung lompat ke iterasi
selanjutnya.
contoh jika menggunakan perintah @break
mahasiswa.blade.php -->
<div class="container text-center mt-3 pt-3 bg-white">
    <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{$nama}}</h1>
    <br>
    @foreach ($nilai as $val)
    @if ($val < 50) @break @endif <div class="alert alert-success d-inline-block">
        {{$val}}
</div>
@endforeach
</div>

<!-- Hanya ada 2 nilai yang tampil, karena begitu perulangan memproses angka 30, perintah
@break di baris 6 akan dijalankan dan perulangan foreach langsung berhenti
Baris Komentar dan PHP mode
Untuk membuat baris komentar, blade menyediakan cara penulisan khusus, yakni dengan
tanda pembuka ({- dan penutup --}}. Berikut contoh penggunaannya
mahasiswa.blade.php -->
<div class="container text-center mt-3 pt-3 bg-white">
    <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{$nama}}</h1>
    <br>
    {{--
@foreach ($nilai as $val)
@if ($val < 50)
@break
@endif
<div class="alert alert-success d-inline-block">
{{$val}}
</div>
@endforeach
--}}
</div>