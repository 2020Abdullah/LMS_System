<html lang="en" class="h-100" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- css stracture -->
	<link rel="stylesheet" href="{{asset('assets/dashboard/vendor/chartist/css/chartist.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/dashboard/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/dashboard/css/style.css')}}">
    @include('sweetalert::alert')
</head>

<body class="vh-100" data-typography="poppins" data-theme-version="light" data-layout="vertical" data-nav-headerbg="color_1" data-headerbg="color_1" data-sidebar-style="full" data-sibebarbg="color_1" data-sidebar-position="fixed" data-header-position="fixed" data-container="wide" direction="ltr" data-primary="color_1">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<img src="images/logo-full.png" alt="">
									</div>
                                    <h4 class="text-center mb-4">إنشاء حساب جديد</h4>     
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        @if ($type == 'admin')
                                            <input type="hidden" value="1" name="type">
                                        @else 
                                            <input type="hidden" value="3" name="type">
                                        @endif
                                        <div class="form-group">
                                            <label class="mb-1"><strong>اسم المستخدم</strong></label>
                                            <input type="text" class="form-control" name="username" placeholder="username">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>البريد الإلكتروني</strong></label>
                                            <input type="email" class="form-control" name="email" placeholder="hello@example.com">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>كلمة المرور</strong></label>
                                            <input type="password" class="form-control" name="password">
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary btn-block">إنشاء حساب</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Already have an account? <a class="text-primary" href="page-login.html">تسجيل الدخول</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
