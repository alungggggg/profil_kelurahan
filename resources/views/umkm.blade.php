<form action="" method="GET">
    <input type="text" name="search" value="{{ $request }}">
    <button type="submit">submit</button>
</form>
@if ($umkms->count() == 0)
    tidak ada umkm
@endif
@foreach ($umkms as $umkm)
    {{ $umkm }}<br>
@endforeach


@if ($request != null)
    <br>current page : {{ $umkms->currentPage() }} <br />
    total data : {{ $umkms->total() }} <br />
    {{ $umkms->links() }}
@endif