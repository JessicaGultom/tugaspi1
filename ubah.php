<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>TAMBAH DATA</h1>
        <form action="" method="post">
            <table cellpadding="15">
                <?php while ($row = mysqli_fetch_assoc($tampil)) : ?>
                    <tr>
                        <td><label for="nama">Nama :</label></td>
                        <td><input type="text" name="nama" id="nama" value="<?= $row['nama'] ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="jenkel">Jenis Kelamin :</label></td>
                        <td><input type="radio" name="jenkel" id="jenkel" value="L" <?php if ($row['jenkel'] == "L") echo "checked" ?>>Laki-Laki
                            <input type="radio" name="jenkel" id="jenkel" value="P" <?php if ($row['jenkel'] == "P") echo "checked" ?>>Perempuan
                        </td>
                    </tr>
                    <tr>
                        <td><label for="agama">Agama :</label></td>
                        <td>
                            <select name="agama">
                                <option <?php if ($row['agama'] == "Islam") echo "selected" ?>>Islam</option>
                                <option <?php if ($row['agama'] == "Kristen") echo "selected" ?>>Kristen</option>
                                <option <?php if ($row['agama'] == "Hindu") echo "selected" ?>>Hindu</option>
                                <option <?php if ($row['agama'] == "Budha") echo "selected" ?>>Budha</option>
                                <option <?php if ($row['agama'] == "Protestan") echo "selected" ?>>Protestan</option>
                            </select>
                        </td>
                    </tr>

                <?php endwhile; ?>

            </table>
            <div class="submit">
                <button type="submit" name="tambah">Ubah</button>
                <a href="index.php">Keluar</a></div>


        </form>
    </div>
</body>

</html>
