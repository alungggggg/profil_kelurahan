<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="{{asset('/asset/css/style01.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
</head>

<body>
<div class="topbar">
        <img src="{{ asset('/asset/image/ngampelbersatu.png') }}" alt="tag" width="30%">
    </div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#761B9E" fill-opacity="1" d="M0,192L60,192C120,192,240,192,360,208C480,224,600,256,720,261.3C840,267,960,245,1080,218.7C1200,192,1320,160,1380,144L1440,128L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
    </svg>
<div class="content">
        <div class="card-login">
            <div class="card-main">
                <div class="card-header">Halaman Login</div>
                <div class="card-body">
                    @error('fail')
                            <div class="alert alert-danger" role="alert">{{ $message }}</div>
                        @enderror
                    <form action="" method="POST" class="form-login">
                         @csrf
                        <label for="exampleInputEmail1" class="form-label">Alamat Email</label>
                        <input type="email" name="email" id="exampleInputEmail1" value="{{ old('email') }}" class="form-input">
                        <label for="exampleInputPassword1" class="form-label">Kata Sandi</label>
                        <input type="password" name="password" id="exampleInputPassword1" class="form-input">
                        <button type="submit" class="btn btn-login">Login</button>
                        
                    </form>
                    <p style="text-align: center;">Menuju ke halaman?<span><a href="<?= "" ?>" class=""> Utama |</a></span><span><a href="" class=""> Beranda </a></span></p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
