document.addEventListener("DOMContentLoaded", function () {
  alert("Hallo Selamat Datang di Profil Saya!");
});

function validateForm() {
  const nama = document.getElementById("nama").value.trim();
  const pesan = document.getElementById("pesan").value.trim();

  if (nama === "") {
    alert("Nama tidak boleh kosong!");
    return false;
  }

  if (pesan.length < 10) {
    alert("Pesan minimal 10 karakter!");
    return false;
  }

  return true;
}