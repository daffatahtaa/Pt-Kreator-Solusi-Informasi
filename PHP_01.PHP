<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_01</title>
</head>
<body>
    <div class="">
        <form action="submit" method="get">
            <ul>
                <li>
                    <label for="nama" >Nama</label>
                    <input type="text" name="alamat" required title="Nama">
                </li>
                <li>
                    <label for="alamat" >Alamat</label>
                    <input type="text" name="alamat" id="" required>
                </li>
                <li>
                    <label for="nomor-telepon" >Nomor nomor-telepon</label>
                    <input type="number" name="nomor-telepon" required>
                </li>
                <li>
                    <label for="jenis-kelamin" >Jenis Kelamin</label>
                    <select name="kelamin" id="kelamin">
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </li>
                <button type="submit" value="submit">Submit</button>
            </ul>
        </form>
    </div>
</body>
</html>