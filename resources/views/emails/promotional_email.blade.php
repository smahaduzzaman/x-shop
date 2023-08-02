<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $subject }}</title>
</head>
<body>
    <div style="margin: 0 auto; max-width: 600px; padding: 20px;">
        <h2>{{ $subject }}</h2>
        <p>{!! nl2br(e($content)) !!}</p>
        <hr>
        <p style="font-size: 12px;">This email was sent by X-Shop. If you no longer wish to receive promotional emails, <a href="{{ route('unsubscribe') }}">unsubscribe here</a>.</p>
    </div>
</body>
</html>
