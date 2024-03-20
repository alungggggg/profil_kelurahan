<form action="" method="GET">
    <input type="text" name="search" value="{{ $request }}">
    <button type="submit">submit</button>
</form>
@if ($umkms->count() == 0)
    tidak ada umkm
@endif
@foreach ($umkms as $umkm)
    <div class="nama-toko">{{ $umkm->nama_toko }}</div>
    <img src="{{ asset($umkm->image) }}" alt="">
    <div class="description">{{ $umkm->description }}</div>
    <a href="{{ $umkm->location }}">lokasi</a>
    <a href="wa.me/{{ $umkm->nomor }}">nomor </a>
    <br>
@endforeach


@if ($request != null)
    <br>current page : {{ $umkms->currentPage() }} <br />
    total data : {{ $umkms->total() }} <br />
    {{ $umkms->links() }}
@endif
