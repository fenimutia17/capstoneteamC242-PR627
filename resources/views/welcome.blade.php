<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GlowGenius</title>
</head>
<body>
    <h1>Welcome to GlowGenius</h1>
    
    <form method="GET" action="/search">
    <input type="text" name="query" placeholder="Search for products">
    <button type="submit">Search</button>
    </form>

    <form method="POST" action="/recommend">
        @csrf
        <label for="skin_type">Skin Type:</label>
        <select name="skin_type" id="skin_type">
            <option value="Oily">Oily</option>
            <option value="Dry">Dry</option>
            <option value="Combination">Combination</option>
            <option value="Sensitive">Sensitive</option>
        </select>

        <label for="conditions">Skin Conditions:</label>
        <input type="text" name="conditions[]" placeholder="E.g., Acne">

        <button type="submit">Get Recommendations</button>
    </form>
</body>
</html>
