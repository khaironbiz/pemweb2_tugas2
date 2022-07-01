
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{url('admin')}}">Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link <?php if($class == 'User'){echo 'active';}?>" href="{{url('admin/user')}}">User</a>
                <a class="nav-link <?php if($class == 'Profesi'){echo 'active';}?>" href="{{url('admin/profesi')}}">Profesi</a>
                <a class="nav-link <?php if($class == 'Organisasi'){echo 'active';}?>" href="{{url('admin/organisasi')}}">Organisasi</a>
                <a class="nav-link" href="#">Pricing</a>
                <a class="nav-link disabled">Disabled</a>
            </div>
        </div>
    </div>
</nav>
<hr>
