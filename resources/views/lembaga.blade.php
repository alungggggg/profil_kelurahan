@foreach ($lkks as $lkk)
    <div class="title">{{ $lkk->nama_lembaga }}</div>
    <img src="{{ asset($lkk->logo) }}" alt="" width="100px">
    <div class="description">{{ $lkk->description }}</div>
@endforeach

@foreach ($fks as $fk)
    <div class="title">{{ $fk->nama_lembaga }}</div>
    <img src="{{ asset($fk->logo) }}" alt="" width="100px">
    <div class="description">{{ $fk->description }}</div>
@endforeach
