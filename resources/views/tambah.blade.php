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

    .w3-row-padding img {
        margin-bottom: 12px
    }

    /* Set the width of the sidebar to 120px */
    .w3-sidebar {
        width: 150px;
        background: #222;
    }

    /* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
    #main {
        margin-left: 150px
    }

    /* Remove margins from "page content" on small screens */
    @media only screen and (max-width: 600px) {
        #main {
            margin-left: 0
        }
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

    <!-- Icon Bar (Sidebar - hidden on small screens) -->
    <nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
        <!-- Avatar image in top left corner -->
        <h1>Frozen Food</h1>
        <a href="/" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
            <p>Data Barang</p>
        </a>
        <a href="/tambahbahan" class="w3-bar-item w3-button w3-padding-large w3-black">
            <p>Tambah Data</p>
        </a>
        <a href="/request" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
            <p>Request Bahan</p>
        </a>
    </nav>

    <!-- Navbar on small screens (Hidden on medium and large screens) -->
    <div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
        <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
            <a href="/" class="w3-bar-item w3-button" style="width:25% !important">HOData BarangME</a>
            <a href="/tambahbahan" class="w3-bar-item w3-button" style="width:25% !important">Tambah Data</a>
            <a href="/request" class="w3-bar-item w3-button" style="width:25% !important">Request Bahan</a>
        </div>
    </div>

    <!-- Page Content -->
    <div class="w3-padding-large" id="main">
        <h1>Tambah Data</h1>
        <form method="post">
            {{ csrf_field() }}
            <p><label>Nama Bahan</label></p>
            <input class="w3-input w3-border" type="text" id="namaBahan" name="namaBahan">

            <p><label>Jumlah Bahan</label></p>
            <input class="w3-input w3-border" type="number" id="jumlahBahan" name="jumlahBahan">

            <p><label>Kode Bahan</label></p>
            <input class="w3-input w3-border" type="text" id="kodeBahan" name="kodeBahan">

            <button type="submit" class="buttonsubmit">Submit</button>
            <button type=" reset" class="buttonreset">Reset</button>

        </form>
    </div>

</body>

</html>