<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Register | Pendataan Pengunjung Objek Wisata Situ Gede</title>
  </head>
  <body>
    <div class="container mt-5 text-center">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <h2>Register | Pendataan Pengunjung Objek Wisata Situ Gede</h1>
                <hr>
                <main class="form-signin mt-3">
                    <form action="/register", method="POST">
                        @csrf
                        <div class="form-floating">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name" name="name" required value="{{old('name')}}">
                            <label for="name">Name</label>
                            @error('name')
                                <div class="invallid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" name="username" required value="{{old('username')}}">
                            <label for="username">Username</label>
                            @error('username')
                                <div class="invallid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="email" name="email" required value="{{old('email')}}">
                            <label for="email">Email Address</label>
                            @error('email')
                                <div class="invallid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required>
                            <label for="password">Password</label>
                            @error('password')
                                <div class="invallid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Register</button>
                    </form>
                    <small>Sudah punya akun ? <a href="/">Login Disini</a></small>
                </main>
            </div>
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>