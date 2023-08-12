<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Layout Bootstrap Đơn giản</title>
<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
</head>
<body>

<!-- Menu -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="#">Logo</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav">
<li class="nav-item active">
<a class="nav-link" href="#">Trang chủ</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Giới thiệu</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Sản phẩm</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Liên hệ</a>
</li>
<li class="nav-item">
    {{-- <a class="nav-link" href="{{route('route_student_logout')}}">ddawng xuaats</a> --}}
    </li>
</ul>
</div>
</nav>

<!-- Content -->
<div class="container mt-4">
    @include('templates.errors')
    @yield('content')
</div>

<!-- Footer -->
<footer class="bg-light text-center p-3 mt-4">
<p>Đây là footer của trang web.</p>
<p>&copy; 2023 Tên của bạn</p>
</footer>
<script src="{{ asset('libs/jquery/dist/jquery.min.js') }}"></script>

<script src="{{ asset('libs/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{asset('bootstrap/js/boostrap.bundle.js')}}"></script>
<script src="{{asset('bootstrap/js/boostrap.js')}}"></script>
<script src=""></script>
@yield('script')
</body>
</html>