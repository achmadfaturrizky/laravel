<!-- Perulangan While
Blade menyediakan perintah @while dan
@endwhile untuk membuat perulangan while.
Akan tetapi kita tetap buth kode PHP native untuk menaikkan nilai variabel counter seperti
contoh berikut:
mahasiswa.blade.php -->
<div class="container text-center mt-3 pt-3 bg-white">
    <?php $i = 0; ?>
    @while($i < 5) <div class="alert alert-info d-inline-block">
        {{$i}}
</div>
<?php $i++ ?>
@endwhile
</div>


<!-- Sekarang variabel Snilai berisi array dengan 5 element. Ketika sampai di route, array Snilai
bisa ditampilkan dengan kode berikut:
mahasiswa.blade.php -->
<div class="container text-center mt-3 pt-3 bg-white">
    <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{$nama}}</h1>
    <br>
    @foreach ($nilai as $val)
    <div class="alert alert-info d-inline-block">
        {{$val}}
    </div>
    @endforeach
</div>