<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | @yield('title')</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{url('/')}}/admin/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{url('/')}}/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="{{url('/')}}/admin/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
@yield('section')
<script src="{{url('/')}}/admin/plugins/jquery/jquery.min.js"></script>
<script src="{{url('/')}}/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{url('/')}}/admin/js/adminlte.min.js"></script>
@push('script')
</body>
</html>
