<!-- Percobaan berikutnya adalah menggabungkan perulangan foreach dengan kondisi if. Idenya
adalah, jika salah satu nilai berada antara 0 - 49, tampilkan dengan alert warna merah.
yakni dengan tambahan class .alert-danger. Sedangkan jika nilai berada di antara 50 - 100,
tampilkan dengan alert warn hijau, yakni class .alert-success bawaan Bootstrap. -->
<div class="container text-center mt-3 pt-3 bg-white">
    <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{$nama}}</h1>
    <br>
    @foreach ($nilai as $val)
    @if (($val >= 0) and ($val < 50)) <div class="alert alert-danger d-inline-block">
        {{$val}}
</div>
@elseif (($val >= 50) and ($val <= 100)) <div class="alert alert-success d-inline-block">
    {{$val}}
    </div>
    @endif
    @endforeach
    </div>


    <!-- Perulangan Forelse
Forelse adalah perulangan khusus yang disediakan blade dengan struktur @forelse,
@empty dan @endforelse. Ini sebenarnya gabungan dari proses pemeriksaan apakah
sebuah array berisi nilai atau tidak, kurang lebih sama seperti exercise yang baru saja kita
buat. berikut adalah formatnya:
@forelse (Snilai as Sval)
Il akan dijalankan jika $nilai berisi sesuatu
@empty
/Il akan dijalankan jika $nilai berupa array kosong
@endforelse
mahasiswa.blade.ph -->
    <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{$nama}}</h1>
        <br>
        @forelse ($nilai as $val)
        @if (($val >= 0) and ($val < 50)) <div class="alert alert-danger d-inline-block">
            {{$val}}
    </div>
    @elseif (($val >= 50) and ($val <= 100)) <div class="alert alert-success d-inline-block">
        {{$val}}
        </div>
        @endif
        @empty
        <div class="alert alert-dark d-inline-block">Tidak ada data...</div>
        @endforelse
        </div>