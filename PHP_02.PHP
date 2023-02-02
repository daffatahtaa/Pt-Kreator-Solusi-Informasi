<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_02</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#form").submit(function(e) {
                e.preventDefault();
                
                $.ajax({
                    type: "POST",
                    url: "submit.php",
                    data: $("#form").serialize(),
                    success: function(response){
                        alert (response);
                    }
                });
            });
        });

        </script>
</head>
<body>
    <div class="">
        <form id="form">
            <ul>
                <li>
                    <label for="nama" >Nama</label>
                    <input type="text" name="nama" required title="Nama" placeholder="nama">
                </li>
                <li>
                    <label for="alamat" >Alamat</label>
                    <input type="text" name="alamat" id="" required placeholder="alamat">
                </li>
                <li>
                    <label for="nomor-telepon" >Nomor nomor-telepon</label>
                    <input type="number" name="nomor-telepon" required placeholder="telp">
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