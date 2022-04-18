<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login | Pendataan Pengunjung Objek Wisata Situ Gede</title>
  </head>
  <body>
    <div class="container mt-5 text-center">
        <div class="row justify-content-center">
            <div class="col-lg-5">
              @if (session()->has('success'))
                  <div class="alert alert-success allert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss='alert' aria-label="Close"></button>
                  </div>
              @endif

              @if (session()->has('loginError'))
                  <div class="alert alert-danger allert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss='alert' aria-label="Close"></button>
                  </div>
              @endif

                <h2>Login | Pendataan Pengunjung Objek Wisata Situ Gede</h1>
                <hr>
                <main class="form-signin mt-3">
                    <form action="/login" method="POST">
                      @csrf
                        <div class="form-floating">
                        <input type="text" class="form-control" id="username" placeholder="username" name="username" @error('username') is-invalid @enderror value="{{ old('username') }}">
                        <label for="username">Username</label>
                        @error('username')
                                <div class="invallid-feedback">
                                    {{$message}}
                                </div>
                        @enderror
                        </div>
                        <div class="form-floating">
                        <input type="password" class="form-control" name="password" id="password" required placeholder="Password"  @error('password') is-invalid @enderror>
                        <label for="password">Password</label>
                        @error('password')
                                <div class="invallid-feedback">
                                    {{$message}}
                                </div>
                        @enderror
                        </div>
                        <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Login</button>
                    </form>
                    <small>Belum Punya Akun ? Register <a href="/register" >Disini</a></small>
                </main>
            </div>
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>