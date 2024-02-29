<form action="/feedback" method="POST">
    @csrf
    <input type="text" name="name" value="{{ old('name') }}">
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <input type="text" name="email" value="{{ old('email') }}">
    @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <input type="textarea" name="message" value="{{ old('message') }}">
    @error('message')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit">Submit</button>
</form>

