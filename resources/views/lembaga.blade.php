{{-- @dd($lkks->count()) --}}
@foreach ($lkks as $lkk)
    {{ $lkk->nama_lembaga }}
    {{ $lkk->article }}
    <br>
@endforeach
