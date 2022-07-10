<nav id="main-nav" class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary my-10">
    <div class="container">
        <a class="navbar-brand" href="#!">One Piece</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="/admin/posts/create">Add a Post</a></li>
                <li class="nav-item"><a class="nav-link" 
                            aria-current="page" href="/admin">Admin</a></li>
            </ul>
        </div>
    </div>
</nav>
@if(session()->has('success'))
<div style="line-height: 50px; background: lightgreen; color: darkgreen; text-align: center" class="mt-4">
    {{ session('success') }}
</div>
@endif