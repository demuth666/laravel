<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Succes - Voting Osis</title>
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pages/error.css') }}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/png">
</head>

<body class="ber">
    <div id="error">
        <div class="error-page container">
            <div class="col-md-8 col-12 offset-md-2">
                <div class="text-center">
                    <img class="verif" src="{{ asset('images/undraw_voting_nvu7 (1).svg') }}" alt="Succes">
                    <h1 class="text-berhasil1">Voting Berhasil</h1>
                    <p class="text-berhasil">Terimakasih telah melakukan voting :D.</p>
                    {{-- <a class="btn btn-lg btn-outline-primary mt-3" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                                                                                                                                                                                                                                                                                                                                        document.getElementById('logout-form').submit();">
                        <i class="icon-mid bi bi-box-arrow-left me-2"></i>{{ __('Logout') }}
                    </a> --}}

                    <form>
                        @csrf
                        <a href="{{url('logout')}}" class="out">
                            
                            <i class="uil uil-signout iniout" id="log_out"></i>
                            <span class="log">Logout</span>
                        </a>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <script>Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Your work has been saved',
        showConfirmButton: false,
        timer: 1500
      })
    </script>
</body>

</html>
