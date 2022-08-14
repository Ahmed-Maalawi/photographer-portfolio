<!DOCTYPE html>
<html>
<head>
    <title>Contact Order</title>
    <style>
        body {
            background-color: #121212;
            color: #fff;
            background-image: url({{ asset('user_style/img/email.jpg') }});
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body dir="rtl">

<h2>عصام باشا</h2>
<p>
    ازيك يا حبيبى
    ربنا يوفقك انت و باقي الرجاله
    عشمان فى اخويا الصغير,
    {{ $details['message'] }}
    دى حاجة هتفرحنى بجد
    بالتوفيق</p>
{{--<h1>{{ $details['subject'] }}</h1>--}}
{{--<p>{{ $details['message'] }}</p>--}}

{{--<p>Thank you</p>--}}
</body>
</html>
