<!DOCTYPE html>
<html>
<head>
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
<body>

<input type="checkbox" id="pilihan1"> Sopan <br>
<input type="checkbox" id="pilihan2"> Waras <br>
<input type="checkbox" id="pilihan3"> Main ML

</body>
</html>
