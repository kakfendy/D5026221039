<!DOCTYPE html>
<html lang="en">

<head>
  <title>WEEK 5 & 6</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>

    function validateForm()
    {
      console.log("Ini baris 14");
      return false
      console.log("Ini baris 16");
      return true
      console.log("Ini baris 18");
    } 
      
      //kapanpun ketemu return yang pertama kali -> exit funct
      //perintah di bawahnya tidak dijalankan
      //dalam satu function, bisa ada lebih dari 1 return
      //jika true maka baris bawahnya di jalankan

      //panjang string >0 maka form ada isinya
      //harus ada string/isi nya

      //=  -> assign value
      //== -> membandingkan isi

    function validate(){
      var bil1 = document.getElementById("bil1");
      var bil2 = document.getElementById("bil2");
      var NRP  = document.getElementById("NRP");

      if (bil1.value == "" && bil2.value == "" && NRP.value == "") {
        alert("Mohon Form Diisi");
        bil1.placeholder = ("Mohon diisi angka!")
        bil2.placeholder = ("Mohon diisi angka!")
        NRP.placeholder  = ("Mohon diisi angka 10 digit!")
        return false;
        return false; 

      } else if (bil1.value == "") {
        alert("Bilangan 1 harus diisi!");
        bil1.focus();
        return false;

      } else if (bil2.value == "") {
        alert("Bilangan 2 harus diisi!");
        bil2.focus();
        return false;   

      } else if (NRP.value == ""){
        alert("NRP harus diisi!");
        NRP.placeholder  = ("Mohon diisi angka 10 digit!");
        NRP.focus();
        return false;

      } else if (isNaN(NRP.value)){
        alert("NRP harus angka!");
        NRP.placeholder  = ("Mohon diisi angka!");
        NRP.focus();
        return false;

      } else if (NRP.value.length !== 10) {
        alert("NRP harus terdiri dari 10 angka!");
        NRP.focus();
        return false;
       }
      return true
    }
  </script>
</head>

<body>
  <div class="container">
     <!-- <form action="https://www.detik.com" method="post" onsubmit="return validate();">
         <input type="number" id="bil" class="form-control" placeholder="Wajib Diisi" name="bil">
         <input type="submit" value="KIRIM" class="btn btn-primary">
    </form> -->

    <form action="https://www.detik.com" method="post" onsubmit="return validate();">
      <div class="form-group">
        <label for="bil1">
          Bilangan 1 :
        </label>
        <input type="number" id="bil1" class="form-control">
      </div>

      <div class="form-group">
        <label for="bil2">
          Bilangan 2 :
        </label>
        <input type="number" id="bil2" class="form-control">
      </div>

      <div class="form-group">
        <label for="NRP">
          NRP :
        </label>
        <input type="text" id="NRP" class="form-control">
      </div>

        <input type="submit" value="KIRIM" class="btn btn-primary">
    </form>
  </div>

</body>