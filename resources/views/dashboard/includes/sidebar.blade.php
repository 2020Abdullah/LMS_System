<!--**********************************
    Sidebar start
***********************************-->
<div class="deznav">
    <div class="deznav-scroll">
        <div class="main-profile">
            <div class="image-bx">
                @if (auth()->user()->profile_img == null)
                    <i class="fa fa-user fa-3x"></i>
                @else
                    <img src="assets/images/{{ auth()->user()->profile_img }}" alt="img">    
                @endif
                <a href="javascript:void(0);"><i class="fa fa-cog" aria-hidden="true"></i></a>
            </div>
            <h5 class="name"><span class="font-w400">مرحباً بك </span> {{ auth()->user()->name }}  </h5>
            <p class="email"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="95f8f4e7e4e0f0efefefefd5f8f4fcf9bbf6faf8">{{ auth()->user()->email }}</a></p>
        </div>
        <ul class="metismenu" id="menu">
            <li class="nav-label first">إدارة المراحل الدراسية</li>
            <li>
                <a href="{{ route('home') }} " class="ai-icon" aria-expanded="false">
                    <i class="fa fa-home"></i>
                    <span class="nav-text">إحصائيات</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.Grade.index') }}" class="ai-icon" aria-expanded="false">
                    <i class="fa fa-graduation-cap"></i>
                    <span class="nav-text">المراحل الدراسية</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.classes.index') }}" class="ai-icon" aria-expanded="false">
                    <i class="fa fa-chalkboard-teacher"></i>
                    <span class="nav-text">الصفوف</span>
                </a>
            </li>
            <li class="nav-label">إدارة المستخدمين</li>
            <li>
                <a href="#" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-settings-2"></i>
                    <span class="nav-text">الطلاب</span>
                </a>
            </li>
            <li>
                <a href="#" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-settings-2"></i>
                    <span class="nav-text">المدرسين</span>
                </a>
            </li>
            <li class="nav-label">إدارة الكورسات</li>
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-144-layout"></i>
                    <span class="nav-text">الكورسات</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="index.html">الأقسام</a></li>
                    <li><a href="index-2.html">الكورسات</a></li>
                    <li><a href="my-wallets.html">حصص الأون لاين</a></li>
                </ul>
            </li>
            <li class="nav-label">إدارة الحسابات</li>
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-144-layout"></i>
                    <span class="nav-text">الحسابات</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="#">حسابات الطلاب</a></li>
                    <li><a href="#">حسابات المدرسين</a></li>
                </ul>
            </li>
            <li class="nav-label">إدارة المنصة</li>
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-144-layout"></i>
                    <span class="nav-text">الحضور والغياب</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="#">حسابات الطلاب</a></li>
                    <li><a href="#">حسابات المدرسين</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-144-layout"></i>
                    <span class="nav-text">الإمتحانات</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="#">حسابات الطلاب</a></li>
                    <li><a href="#">حسابات المدرسين</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-144-layout"></i>
                    <span class="nav-text">المكتبة</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="#">حسابات الطلاب</a></li>
                    <li><a href="#">حسابات المدرسين</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-144-layout"></i>
                    <span class="nav-text">إعدادات</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="index.html">محتوى المنصة</a></li>
                    <li><a href="index-2.html">الروابط</a></li>
                    <li><a href="my-wallets.html">الملف الشخصي</a></li>
                </ul>
            </li>

        </ul>
    </div>
</div>
<!--**********************************
    Sidebar end
***********************************-->
