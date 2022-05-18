<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>
</head>
<body>
<h2>Form Input</h2>
    <form method="post">
        <label for="Nama">Name: </label>
        <br>
        <input type="text" name="nama">
        <br>
        <label for="Tanggal Lahir">Birth Date: </label>
        <br>
        <input type="text" name="tanggal_lahir">
        <br>
        <label for="Pekerjaan">Job Profession: </label>
        <br>
        <select name='pekerjaan'>
                <option value="-">>--Choose Your Job Profession--<</option>
                <option value='Project Coordinator'>Project Coordinator</option>
                <option value='Engineering'>Engineering</option>
                <option value='QA/QC'>QA/QC</option>
                <option value='Supervisor1'>Supervisor1</option>
                <option value="Supervisor2">Supervisor2</option>
            </select>
            <br>
            <br>
            <button type="submit">Kirim</button>
    </form>
    <h2>This Is Your Profile!</h2>
    <?php
        echo 'Name:' . $_POST['nama'];

        # Merubah Tanggal Lahir menjadi Umur (Tahun)
        $tanggal_lahir = @$_POST['tanggal_lahir'];

        $lahir = new DateTime($tanggal_lahir);
        $hari_ini = new DateTime();

        $diff = $hari_ini->diff($lahir);

        echo "<br> Age            : ". $diff->y ." Tahun";

        echo "<br> Job Profession : " .$_POST['pekerjaan'];


        # Kondisi if pekerjaan untuk menentukan gaji
        $pekerjaan = @$_POST['pekerjaan'];

        if($pekerjaan == "Project Coordinator"){
            echo '<br> Gaji: Rp. 52.499.000,-';
        }elseif($pekerjaan == "Engineering"){
            echo '<br> Gaji: Rp. 19.800.000,-';
        }elseif($pekerjaan == "QA/QC"){
            echo '<br> Gaji: Rp. 11.250.000,-';
        }elseif($pekerjaan == "Supervisor1"){
            echo '<br> Gaji: Rp. 7.199.000,-';
        }elseif ($pekerjaan == "Supervisor2"){
            echo '<br> Gaji: Rp. 7.000.000,-';
        }


    ?>
    
</body>
</html>