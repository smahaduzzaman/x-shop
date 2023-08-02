<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Contact Us Form Submission</title>
</head>
<body>
    <h2>Contact Us Form Submission</h2>
    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $data['message'] }}</p>
</body>
</html>
