document.addEventListener("DOMContentLoaded", function () {
    var popup = document.getElementById("popup");
    var closeButton = document.getElementById("closePopup");

    // Menampilkan popup box secara otomatis
    popup.style.visibility = "visible";

    // Menangani penutupan popup saat tombol "X" diklik
    closeButton.onclick = function (e) {
    e.preventDefault(); // Mencegah tindakan default dari tombol X
    popup.style.visibility = "hidden"; // Menyembunyikan popup box
    };

    // Menangani penutupan popup saat bagian luar popup diklik
    popup.onclick = function (e) {
    if (e.target === popup) {
        popup.style.visibility = "hidden"; // Menyembunyikan popup box
    }
    };
    });