<nav>
    <div class="logo-name">
        <div class="logo-image">
            <img src={{asset('images/osis.png');}}>
        </div>
        
    </div>

    <div class="menu-items">
        <ul class="nav-links">
            <li><a href="{{ route ('dashboard') }}">
                <i class="uil uil-create-dashboard"></i>
                <span class="link-name">Dashboard</span>
            </a></li>
            <li><a href="{{ route ('calon') }}">
                <i class="uil uil-users-alt"></i>
                <span class="link-name">Data kandidat</span>
            </a></li>
            <li><a href="{{ route ('users')}}">
                <i class="uil uil-user"></i>
                <span class="link-name">Data user</span>
            </a></li>
        </ul>
        
        <ul class="logout-mode">
            <li>
                <form>
                    @csrf
                    <a href="{{url('logout')}}">
                        <i class="uil uil-signout" id="log_out"></i>
                        <span class="link-name">Logout</span>
                    </a>
                </form>
            </li>

            <div class="mode-toggle">
              <span class="switch"></span>
            </div>
        </li>
        </ul>
    </div>
</nav>