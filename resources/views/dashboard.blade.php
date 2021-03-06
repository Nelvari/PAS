<!DOCTYPE html>
<html>
<title>Home</title>
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

    .buttondetail {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 5px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 10px;
        margin: 4px 5px;
        cursor: pointer;
        border-radius: 4px;
    }

    .buttonubah {
        background-color: #008CBA;
        border: none;
        color: white;
        padding: 5px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 10px;
        margin: 4px 5px;
        cursor: pointer;
        border-radius: 4px;
    }

    .buttonhapus {
        background-color: #f44336;
        border: none;
        color: white;
        padding: 5px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 10px;
        margin: 4px 5px;
        cursor: pointer;
        border-radius: 4px;
    }
</style>

<body class="w3-black">

    <!-- Icon Bar (Sidebar - hidden on small screens) -->
    <nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
        <!-- Avatar image in top left corner -->
        <h1>Frozen Food</h1>
        <a href="/" class="w3-bar-item w3-button w3-padding-large w3-black">
            <p>Data Barang</p>
        </a>
        <a href="/tambahbahan" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
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
        <div class="w3-container">
            <h2>Data Bahan</h2>

            <table class="w3-table-all">
                <thead>
                    <tr class="w3-black">
                        <th>No</th>
                        <th>Nama Bahan</th>
                        <th>Jumlah Bahan</th>
                        <th>Kode Bahan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                @foreach($bahan as $row)
                <tr class="w3-white">
                    <td class="text-center">{{$loop->iteration}}</td>
                    <td>{{ $row->namaBahan }}</td>
                    <td>{{ $row->jumlahBahan }}</td>
                    <td>{{ $row->kodeBahan }}</td>
                    <td>
                        <a href=" {{ url("detailbahan/" . $row->id) }}" class="buttondetail">Detail</a>
                        <a href="{{ url("ubahbahan/" . $row->id) }}" class="buttonubah">Ubah</a>
                        <a href="{{ url("hapusbahan/" . $row->id) }}" class="buttonhapus">Hapus</a>
                    </td>
                </tr> @endforeach
            </table>

        </div>
    </div>
</body>

</html>