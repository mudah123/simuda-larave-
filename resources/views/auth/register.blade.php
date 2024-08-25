<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SIMUDA</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row p-5">
          <div class="col-lg-6 d-none d-lg-block bg-register-image">
            <div class="p-4">

              <div class="text-center mt-4">
                <img src="{{ asset('img/download__4_-removebg-preview (1) 1.png') }}" alt="logo" style="width: 30%">
                <div>
                  <h4 class="mt-3" style="color: #ffa908;"><b>Selamat Datang</b></h4>
                  <h5><b>Silahkan Login</b></h5> 
                  <p class="mt-3">Jadilah admin yang jujur dan professional</p>
                </div>
              </div>
            </div>
          </div>
        
          <div class="col-lg-6">
            <div class="container">
              <div class="card-body">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                  </div>
                  <form action="{{ route('register.simpan') }}" method="POST" class="user">
                    @csrf
                    <div class="form-group">
                      <input name="nama" type="text" class="form-control form-control-user @error('nama')is-invalid @enderror" id="exampleInputName" placeholder="Name">
                      @error('nama')
                        <span class="invalid-feedback">{{ $message }}</span>
                      @enderror
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-12 mb-3 mb-sm-0">
                        <input name="password" type="password" class="form-control form-control-user @error('password')is-invalid @enderror" id="exampleInputPassword" placeholder="Password">
                        @error('password')
                          <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                      </div>
                      
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">Register Account</button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
                  </div>
                </div>
              </div>
  
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

</body>

</html>
