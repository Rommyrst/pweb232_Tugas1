<html>
    <head>
    <link rel="stylesheet" href="mycss.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Tambah Barang</title>
    </head>
    <body>
         <h1>TAMBAH BARANG</h1>
        <form id ="tbarang" action="Tugas2.php" >
            
             <label form ="kode">Kode</label><br>
             <input type ="text" id="kode" name="kode"><br><br>

             <label form ="nama">Nama<label><br>
             <input type ="text" id="nama" name="nama"><br><br>

             <label form ="nama">Satuan<label><br>
             <input type ="text" id="satuan" name="satuan"><br><br>

             <label form ="nama">Beli<label><br>
             <input type ="text" id="beli" name="beli"><br><br>

             <label form ="nama">Jual<label><br>
             <input type ="text" id="jual" name="jual"><br><br>

                <a href="Tugas2.php" target="blank">
                <button type="button" class="button2">
                <i class="fa-solid fa-cloud"></i> SAVE
                </button>
                </a>

                <a href="Tugas2.php" target="blank">
                <button type="button" class="button2">
                <i class="fa-solid fa-xmark"></i> CANCEL
                </button>
                </a>
        </form>
    </body>
</html>