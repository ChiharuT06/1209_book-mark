<html>

<head>
    <meta charset="utf-8">
    <title>bouquet</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <form action="write.php" method="post">
    
    <select name="days">
    
        <option value = "D-10">D-10</option>
        <option value = "D-9">D-9</option>
        <option value = "D-8">D-8</option>
        <option value = "D-7">D-7</option>
        <option value = "D-6">D-6</option>
        <option value = "D-5">D-5</option>
        <option value = "D-4">D-4</option>
        <option value = "D-3">D-3</option>
        <option value = "D-2">D-2</option>
        <option value = "D-1">D-1</option>      
    </select>   

    <div>
    <label for="like">良いところ</label>
    <textarea name="like" rows="4" cols="40"></textarea>
    </div>
        <input type="submit" value="送信">
    </form>
</body>

</html>
