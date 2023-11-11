<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="aa/bs/css/bootstrap.min.css">

<script>
document.addEventListener('DOMContentLoaded', function() {
  const checkboxes = document.querySelectorAll('input[type=checkbox]');
  checkboxes.forEach(checkbox => {
    checkbox.addEventListener('change', function() {
      if (this.id === 'pilihan1' && this.checked) {
        if (document.getElementById('pilihan2').checked && document.getElementById('pilihan3').checked) {
          document.getElementById('pilihan2').checked = false;
        }
      } else if (this.id === 'pilihan2' && this.checked) {
        if (document.getElementById('pilihan1').checked && document.getElementById('pilihan3').checked) {
          document.getElementById('pilihan3').checked = false;
        }
      } else if (this.id === 'pilihan3' && this.checked) {
        if (document.getElementById('pilihan1').checked && document.getElementById('pilihan2').checked) {
          document.getElementById('pilihan1').checked = false;
        }
      } else if (this.checked) {
        if (document.getElementById('pilihan1').checked && document.getElementById('pilihan3').checked) {
          if (this.id === 'pilihan2') {
            document.getElementById('pilihan1').checked = true;
          }
        } else if (document.getElementById('pilihan2').checked && document.getElementById('pilihan3').checked) {
          if (this.id === 'pilihan1') {
            document.getElementById('pilihan3').checked = true;
          }
        } else if (document.getElementById('pilihan1').checked && document.getElementById('pilihan2').checked) {
          if (this.id === 'pilihan3') {
            document.getElementById('pilihan2').checked = true;
          }
        }
      }
    });
  });
});
</script>
</head>
<style>
  h1{
    color: black;
  }
  .container{
    color: black;
  }
</style>
<body class="text-bg-secondary p-3"> 
    <div class="container">
      <h1>Pilih Keinginan Otot Anda</h1><br>
       <p>1. <input type="checkbox" id="pilihan1"> Kering </p> 
       <p>2. <input type="checkbox" id="pilihan2"> Besar </p> 
       <p>3. <input type="checkbox" id="pilihan3"> Alami </p>
    </div>
</body>
</html>
