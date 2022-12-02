<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET" action="hasil_nilai.php">
        <label> nama : </label>
        <input type ="text" name="nama">
        <br><br>
        <label for="">usia :</label>
        <input type="text" name="usia">
        <br><br>
        <label>jenis kelamin :</label>
        <input type="radio" name="jenkel" value="L"> laki-laki 
        <input type="radio" name="jenkel" value="P"> perempuan
        <br><br>
        <label>kelas : </label>
        <select name="kelas">
            <option>pilih kelas</option>
            <option value="x rpl">X RPL </option>
            <option value="xi rpl">XI RPL</option>
            <option value="xii rpl">XII RPL</option>
            <br><br>
        </select>
        <br><br>
        <label>progamming :</label> <br>
        <input type="checkbox" name="prog[]" value="PHP">PHP <br>
        <input type="checkbox" name="prog[]" value="java">java <br>
        <input type="checkbox" name="prog[]" value="python">python <br>
        <input type="checkbox" name="prog[]" value="node js">node js <br>
        <br>
        <br><br>
        <button type="submit">Simpan</button>
</form>
</body>
</html>