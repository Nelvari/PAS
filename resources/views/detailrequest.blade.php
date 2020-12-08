<!DOCTYPE html>
<html>
<title>Detail Data</title>
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
</style>

<body class="w3-black">

    <!-- Page Content -->
    <div class="w3-padding-large" id="main">
        <h1>Detail Request</h1>
        <h3>Nama Request : {{$request->namaRequest}} </h3>
        <h3>Jumlah request : {{$request->jumlahRequest}} </h3>
        <h3>Nama Bahan : {{$request->namaBahan}} </h3>
        <h3>Kode Bahan : {{$request->kodeBahan}} </h3>
        <br>
    </div>

</body>

</html>