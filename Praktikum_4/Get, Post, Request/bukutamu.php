<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Buku TAmu</h1>
    Komentar dan saran sangat kami butuhkan untuk meningkatkan kualitas situs kami.
    <hr>
    <form action="proses_bukutamu.php" method="POST">
        <pre>
            Nama anda : 
            <input type="text" name="nama" size="25" maxlength="50">
            Email Address : 
            <input type="text" name="email" size="25" maxlength="50">
            Komentar : 
            <textarea name="komentar" cols="40" rows="5" rows="5"></textarea>
            <input type="submit" value="kirim">
            <input type="reset" value="ulangi">
        </pre>
    </form>
</body>
</html>