<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول والتسجيل</title>
    <!-- CSS الخاص بـ UIkit -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.22/dist/css/uikit.min.css" />
</head>
<body>

<!-- الهيدر مع الشعار -->
<header class="uk-background-primary uk-light uk-padding-small uk-text-center">
    <img src="https://via.placeholder.com/150x50" alt="الشعار" class="uk-logo">
</header>

<!-- المحتوى الرئيسي -->
<div class="uk-section uk-flex uk-flex-middle" style="min-height: 80vh;">
    <div class="uk-container uk-container-small">

        <!-- التنقل بين علامات التبويب -->
        <ul uk-tab>
            <li><a href="#">تسجيل الدخول</a></li>
            <li><a href="#">التسجيل</a></li>
        </ul>

        <!-- محتوى علامات التبويب -->
        <ul class="uk-switcher uk-margin">
            <!-- نموذج تسجيل الدخول -->
            <li>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="uk-margin">
                        <label for="login-email" class="uk-form-label">البريد الإلكتروني</label>
                        <input class="uk-input" type="email" id="login-email" name="email" placeholder="أدخل بريدك الإلكتروني" required>
                    </div>
                    <div class="uk-margin">
                        <label for="login-password" class="uk-form-label">كلمة المرور</label>
                        <input class="uk-input" type="password" id="login-password" name="password" placeholder="أدخل كلمة المرور" required>
                    </div>
                    <div class="uk-margin">
                        <!-- خانة "تذكرني" -->
                        <label>
                            <input type="checkbox" name="remember" class="uk-checkbox"> تذكرني
                        </label>
                    </div>
                    <div class="uk-margin">
                        <button class="uk-button uk-button-primary uk-width-1-1">تسجيل الدخول</button>
                    </div>
                    <div class="uk-text-center">
                        <a href="#">نسيت كلمة المرور؟</a>
                    </div>
                </form>
            </li>

            <!-- نموذج التسجيل -->
            <li>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="uk-margin">
                        <label for="register-name" class="uk-form-label">الاسم</label>
                        <input class="uk-input" type="text" id="register-name" name="name" placeholder="أدخل اسمك" required>
                    </div>
                    <div class="uk-margin">
                        <label for="register-email" class="uk-form-label">البريد الإلكتروني</label>
                        <input class="uk-input" type="email" id="register-email" name="email" placeholder="أدخل بريدك الإلكتروني" required>
                    </div>
                    <div class="uk-margin">
                        <label for="register-password" class="uk-form-label">كلمة المرور</label>
                        <input class="uk-input" type="password" id="register-password" name="password" placeholder="أدخل كلمة المرور" required>
                    </div>
                    <div class="uk-margin">
                        <label for="register-confirm-password" class="uk-form-label">تأكيد كلمة المرور</label>
                        <input class="uk-input" type="password" id="register-confirm-password" name="password_confirmation" placeholder="تأكيد كلمة المرور" required>
                    </div>
                    <div class="uk-margin">
                        <button class="uk-button uk-button-primary uk-width-1-1">التسجيل</button>
                    </div>
                </form>
            </li>
        </ul>
    </div>
</div>

<!-- الفوتر -->
<footer class="uk-background-muted uk-padding-small uk-text-center">
    <p>&copy; 2024 شركتك. جميع الحقوق محفوظة.</p>
</footer>

<!-- JS الخاص بـ UIkit -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.22/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.22/dist/js/uikit-icons.min.js"></script>

</body>
</html>
