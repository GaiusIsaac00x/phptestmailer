<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div>
        <h1>Get in touch</h1>
        <p>please fill in the fields</p>
        <form action="contact.php" method="post">
            <input type="text" name="name" placeholder="full_name">
            <input type="text" name="email" placeholder="E-mail">
            <input type="text" name="subject" placeholder="Subject">
            <textarea name="message" placeholder="Enter Message"></textarea>
            <button type="submit" name="submit">SEND E-MAIL</button>
        </form>
    </div>
</body>
</html>