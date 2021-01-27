<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Shop</h1>
<form action="" method="post">
    @csrf
    <textarea name="productDescription" placeholder="Product Description"></textarea><br>
    <input type="number" min="0" name="listPrice" id="" placeholder="List Price"><br>
    <input type="number" min="0" name="discountPercent" id="" placeholder="Discount Percent"><br>
    <button type="submit">Tính</button>
</form>
</body>
</html>
