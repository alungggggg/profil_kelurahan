<form action="" method="GET">
    <input type="text" name="search" value="{{ $request }}">
    <button type="submit">submit</button>
</form>
@foreach ($umkms as $umkm)
    {{ $umkm }}<br>
@endforeach


@if ($request != null)
    current page : {{ $umkms->currentPage() }} <br />
    total data : {{ $umkms->total() }} <br />
    {{ $umkms->links() }}
@endif
