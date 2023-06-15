<html lang="ar" class="h-100" dir="rtl">
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
</head>

<body>
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
                                    <h4 class="text-center mb-4">سجل دخول إلي حسابك</h4>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        @if ($type == 'admin')
                                            <input type="hidden" value="1" name="type">
                                        @else 
                                            <input type="hidden" value="3" name="type">
                                        @endif
                                        <div class="form-group text-right">
                                            <label class="form-label"><strong>البريد الإلكتروني</strong></label>
                                            <input type="email" name="email" class="form-control">
                                        </div>
                                        <div class="form-group text-right">
                                            <label class="mb-1"><strong>كلمة السر</strong></label>
                                            <input type="password" name="password" class="form-control">
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                               <div class="custom-control custom-checkbox ml-1">
													<input type="checkbox" class="custom-control-input" id="basic_checkbox_1">
													<label class="custom-control-label" for="basic_checkbox_1">تذكرني</label>
												</div>
                                            </div>
                                            <div class="form-group">
                                                <a href="#">هل نسيت كلمة السر ؟</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">تسجيل دخول</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3 text-center">
                                        <p>هل ليس لديك حساب ؟  <a class="text-primary" href="page-register.html">إنشاء حساب</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    @include('sweetalert::alert')
</body>
</html>