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
                <span class="link-name">Dahsboard</span>
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


