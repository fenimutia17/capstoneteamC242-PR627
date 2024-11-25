<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recommendations</title>
</head>
<body>
    <h1>Recommended Skincare Products</h1>
    <ul>
        @foreach($recommendations as $product)
            <li>
                <h3>{{ $product->name }}</h3>
                <p>{{ $product->description }}</p>
                <p>For {{ $product->skin_type }} skin</p>
            </li>
        @endforeach
    </ul>
</body>
</html>
