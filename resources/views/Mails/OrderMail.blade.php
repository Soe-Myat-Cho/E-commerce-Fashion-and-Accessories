<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-arial">
    <h1>Hello {{ $name }}</h1>
    <p>Thank you for your purchase!</p>
    <p>total amount: ${{ $totalPrice }}</p>
    <p>We are shipping to {{ $address }}</p>
    <p>{{$email}}</p>
</body>

</html>