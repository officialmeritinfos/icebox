<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>{{$pageName}} - {{$siteName}}</title>
    <style>
        .gradient-custom {
            /* fallback for old browsers */
            background: #097969;
        }
    </style>
</head>
<body>
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card text-white" style="border-radius: 1rem;background-color:#A0522D;">
                    <div class="card-body p-5 text-center">

                        <div class="mb-md-5 mt-md-4 pb-5">
                            <h2 class="fw-bold mb-2 text-uppercase">{{$pageName}}</h2>
                            <p class="text-white-50 mb-5">Enter your email to recover your account</p>
                            <form method="post" action="{{route('recoverPassword')}}">
                                @include('templates.notification')
                                @csrf
                                <div class="form-outline form-white mb-4 col-md-12">
                                    <input type="text" id="typeEmailX" class="form-control form-control-lg"
                                           name="username" value="{{old('email')}}"/>
                                    <label class="form-label" for="typeEmailX">Username</label>
                                </div>

                                <button class="btn btn-outline-light btn-lg px-5"
                                        type="submit">
                                    Recover
                                </button>
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>
