<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
</head>
<body>
    <h1>Feedback for {{ $product->name }}</h1>
    <ul>
        @foreach($feedbacks as $feedback)
            <li>{{ $feedback->feedback_text }} (by User {{ $feedback->user_id }})</li>
        @endforeach
    </ul>

    <form method="POST" action="/feedback">
        @csrf
        <input type="hidden" name="product_id" value="{{ $product->id }}">
        <textarea name="feedback_text" placeholder="Write your feedback"></textarea>
        <button type="submit">Submit Feedback</button>
    </form>
</body>
</html>
