@extends('layout.auth')
@section('title', 'Login')
@section('content')
        <section class="container forms">
            <div class="form login">
                <div class="form-content">
                    <header>
                        <p>Login</p>
                    </header>
                    <p class="text">Login untuk memilih calon ketua OSIS</p>
                    <form action="{{url('proses_login')}}" method="POST" id="logForm">
                        @csrf
                        <div class="field input-field">
                            <input id="nis" type="number"  @error('nis') is-invalid @enderror" name="nis"
                            value="{{ old('nis') }}" required autocomplete="nis" autofocus placeholder="Nis" class="input">
                            @error('nis')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="field input-field">
                            <input type="password" @error('password') is-invalid @enderror" name="password"
                            autocomplete="current-password" placeholder="Password" class="password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>  

                        <div class="remember">
                            <input type="checkbox" name="remember">
                            <label for="remember">Remember me</label>
                        </div>

                        <div class="field button-field">
                            <button>Login</button>
                        </div>
                    </form>

                    <div class="signup">
                        <span>Don't have an account? <a href="/register" class="link signup-link">Signup</a></span>
                    </div>
                </div>
            </div>
               <svg class="wave" id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 200" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(32, 223, 127, 1)" offset="0%"></stop><stop stop-color="rgba(32, 223, 127, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,80L80,70C160,60,320,40,480,53.3C640,67,800,113,960,136.7C1120,160,1280,160,1440,146.7C1600,133,1760,107,1920,90C2080,73,2240,67,2400,73.3C2560,80,2720,100,2880,96.7C3040,93,3200,67,3360,73.3C3520,80,3680,120,3840,140C4000,160,4160,160,4320,153.3C4480,147,4640,133,4800,116.7C4960,100,5120,80,5280,73.3C5440,67,5600,73,5760,93.3C5920,113,6080,147,6240,163.3C6400,180,6560,180,6720,170C6880,160,7040,140,7200,113.3C7360,87,7520,53,7680,33.3C7840,13,8000,7,8160,3.3C8320,0,8480,0,8640,10C8800,20,8960,40,9120,66.7C9280,93,9440,127,9600,116.7C9760,107,9920,53,10080,30C10240,7,10400,13,10560,23.3C10720,33,10880,47,11040,46.7C11200,47,11360,33,11440,26.7L11520,20L11520,200L11440,200C11360,200,11200,200,11040,200C10880,200,10720,200,10560,200C10400,200,10240,200,10080,200C9920,200,9760,200,9600,200C9440,200,9280,200,9120,200C8960,200,8800,200,8640,200C8480,200,8320,200,8160,200C8000,200,7840,200,7680,200C7520,200,7360,200,7200,200C7040,200,6880,200,6720,200C6560,200,6400,200,6240,200C6080,200,5920,200,5760,200C5600,200,5440,200,5280,200C5120,200,4960,200,4800,200C4640,200,4480,200,4320,200C4160,200,4000,200,3840,200C3680,200,3520,200,3360,200C3200,200,3040,200,2880,200C2720,200,2560,200,2400,200C2240,200,2080,200,1920,200C1760,200,1600,200,1440,200C1280,200,1120,200,960,200C800,200,640,200,480,200C320,200,160,200,80,200L0,200Z"></path><defs><linearGradient id="sw-gradient-1" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(34, 73, 87, 1)" offset="0%"></stop><stop stop-color="rgba(34, 73, 87, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 50px); opacity:0.9" fill="url(#sw-gradient-1)" d="M0,40L80,53.3C160,67,320,93,480,103.3C640,113,800,107,960,90C1120,73,1280,47,1440,53.3C1600,60,1760,100,1920,120C2080,140,2240,140,2400,120C2560,100,2720,60,2880,53.3C3040,47,3200,73,3360,100C3520,127,3680,153,3840,160C4000,167,4160,153,4320,130C4480,107,4640,73,4800,56.7C4960,40,5120,40,5280,36.7C5440,33,5600,27,5760,20C5920,13,6080,7,6240,13.3C6400,20,6560,40,6720,70C6880,100,7040,140,7200,153.3C7360,167,7520,153,7680,126.7C7840,100,8000,60,8160,53.3C8320,47,8480,73,8640,86.7C8800,100,8960,100,9120,86.7C9280,73,9440,47,9600,40C9760,33,9920,47,10080,60C10240,73,10400,87,10560,83.3C10720,80,10880,60,11040,56.7C11200,53,11360,67,11440,73.3L11520,80L11520,200L11440,200C11360,200,11200,200,11040,200C10880,200,10720,200,10560,200C10400,200,10240,200,10080,200C9920,200,9760,200,9600,200C9440,200,9280,200,9120,200C8960,200,8800,200,8640,200C8480,200,8320,200,8160,200C8000,200,7840,200,7680,200C7520,200,7360,200,7200,200C7040,200,6880,200,6720,200C6560,200,6400,200,6240,200C6080,200,5920,200,5760,200C5600,200,5440,200,5280,200C5120,200,4960,200,4800,200C4640,200,4480,200,4320,200C4160,200,4000,200,3840,200C3680,200,3520,200,3360,200C3200,200,3040,200,2880,200C2720,200,2560,200,2400,200C2240,200,2080,200,1920,200C1760,200,1600,200,1440,200C1280,200,1120,200,960,200C800,200,640,200,480,200C320,200,160,200,80,200L0,200Z"></path></svg>
        </section>

@endsection