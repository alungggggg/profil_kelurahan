@extends('layouts.mainadmin')

@section('title', 'Forum Kemasyarakatan')

@section('content')
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <img src="{{ asset($carousel->image) }}" alt="" id="preview" width="200px">
        <input type="file" name="img" id="img">
        <button type="submit">
            submit
        </button>
    </form>

    @push('scripts')
        <script>
            const reader = new FileReader();
            const fileInput = document.getElementById("img");
            const img = document.getElementById("preview");
            reader.onload = e => {
                img.src = e.target.result;
            }
            fileInput.addEventListener('change', e => {
                const f = e.target.files[0];
                reader.readAsDataURL(f);
            })
        </script>
    @endpush
    @stack('scripts')
@endsection
