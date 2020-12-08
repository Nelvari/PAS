<!DOCTYPE html>
<html>
<title>Tambah Data</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "Montserrat", sans-serif
    }

    .buttonsubmit {
        background-color: #008CBA;
        border: none;
        color: white;
        padding: 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 20px 10px 10px 4px;
        cursor: pointer;
        border-radius: 12px;
    }

    .buttonreset {
        background-color: #f44336;
        border: none;
        color: white;
        padding: 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 20px 10px 10px 4px;
        cursor: pointer;
        border-radius: 12px;
    }
</style>

<body class="w3-black">

    <!-- Page Content -->
    <div class="w3-padding-large" id="main">
        <h1>Tambah Data</h1>
        <form method="post">
            {{ csrf_field() }}
            <p><label>Nama Request</label></p>
            <input class="w3-input w3-border" type="text" id="namaRequest" name="namaRequest">

            <p><label>Jumlah Request</label></p>
            <input class="w3-input w3-border" type="number" id="jumlahRequest" name="jumlahRequest">

            <p><label>Nama Bahan</label></p>
            <input class="w3-input w3-border" type="text" id="namaBahan" name="namaBahan">

            <p><label>Kode Bahan</label></p>
            <input class="w3-input w3-border" type="text" id="kodeBahan" name="kodeBahan">

            <button type="submit" class="buttonsubmit">Submit</button>
            <button type=" reset" class="buttonreset">Reset</button>

        </form>
    </div>

</body>

</html>