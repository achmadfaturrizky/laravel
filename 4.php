<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <ol>
        <li><?php echo $mahasiswa[0]; ?></li>
        <li><?php echo $mahasiswa[1]; ?></li>
        <li><?php echo $mahasiswa[2]; ?></li>
        <li><?php echo $mahasiswa[3]; ?></li>
    </ol>
    <div>
        Copyright &copy; <?php echo date("Y"); ?> Program Studi Teknik Informatika - PNL
    </div>
</body>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    #no 5
    <h1>Daftar Mahasiswa</h1>
    <ol>
        <?php
foreach ($mahasiswa as $nama){
echo "<li> $nama </li>";
}
?>
    </ol>
    <div>
        Copyright &copy; <?php echo date("Y"); ?> Program Studi Teknik Informatika - PNL
    </div>
</body>

#lanjutan no 5
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <ol>
        <li><?php echo $mahasiswa01; ?></li>
    </ol>
    <div>
        Copyright &copy; <?php echo date("Y"); ?> Program Studi Teknik Informatika - PNL
    </div>
</body>