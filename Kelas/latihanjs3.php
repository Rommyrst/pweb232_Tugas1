<!DOCTYPE html>
<html>

<body>

<h2>KALKULATOR</h2>

<form>
   NILAI 1 <br>
    <input type="number" name="nilai1" id="nilai1">
    <br>
    <br>
    NILAI 2 <br>
    <input type="number" name="nilai2" id="nilai2">
    <br>
    <br>
    
     <!--<button type="button>" onclick ='myfungsi(document.getElementById("nilai1").value, document.getElementById("nilai2")'> </button>
    <br>
    <input type="number" name="hasil id="hasil">
    -->

    <br>
    <button type="button" onclick="myfungsi1()"> Tambah</button>

    <button type="button" onclick="myfungsi2()"> Kurang</button>

    <button type="button" onclick="myfungsi3()"> Kali</button>
  
    <button type="button" onclick="myfungsi4()"> Bagi</button>
    <br>
    <br>

    HASIL <br>
    <input type="number" name="hasil" id="hasil">
</form>

    <script>

        //FUNGSI TAMBAH
        function myfungsi1()
        {
        let x = document.getElementById("nilai1").value;
        let y = document.getElementById("nilai2").value;
        console.log(x);
        console.log(y);
        let z= parseInt(x)+parseInt(y);
        console.log(z);
        document.getElementById("hasil").value =z;
        }

        //FUNGSI KURANG
        function myfungsi2()
        {
        let x = document.getElementById("nilai1").value;
        let y = document.getElementById("nilai2").value;
        console.log(x);
        console.log(y);
        let z= parseInt(x)-parseInt(y);
        console.log(z);
        document.getElementById("hasil").value =z;
        }

        //FUNGSI KALI
        function myfungsi3()
        {
        let x = document.getElementById("nilai1").value;
        let y = document.getElementById("nilai2").value;
        console.log(x);
        console.log(y);
        let z= parseInt(x)*parseInt(y);
        console.log(z);
        document.getElementById("hasil").value =z;
        }
        
        //FUNGSI BAGI
        function myfungsi4()
        {
        let x = document.getElementById("nilai1").value;
        let y = document.getElementById("nilai2").value;
        console.log(x);
        console.log(y);
        let z= parseInt(x)/parseInt(y);
        console.log(z);
        document.getElementById("hasil").value =z;
        }
        
    </script>
</body>
</html>