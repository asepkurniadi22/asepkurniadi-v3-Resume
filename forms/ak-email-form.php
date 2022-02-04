<?php
const scriptURL = "https://script.google.com/macros/s/AKfycbw2EWmH5sfQaDspY5V9E4nUPmO6Xn3som5uSRjMIzDbEpDHFfkc41Cwg_NZOZ9BJUmO/exec";
const form = document.forms["akoe22-contact-form"];
const btnKirim = document.querySelector(".btn-kirim");
const btnLoading = document.querySelector(".btn-loading");
const MyAlert = document.querySelector(".my-alert");

form.addEventListener("submit", (e) => {
  e.preventDefault();
  // Ketika tombol submit diklik
  // tampilkan tombol loading, hilangkan tombol kirim
  btnLoading.classList.toggle("d-none");
  btnKirim.classList.toggle("d-none");

  fetch(scriptURL, { method: "POST", body: new FormData(form) })
    .then((response) => {
      // tampilkan tombol kirim, hilangkan tombol loading
      btnLoading.classList.toggle("d-none");
      btnKirim.classList.toggle("d-none");
      // tampilkan alert
      MyAlert.classList.toggle("d-none");
      // reset formnya
      form.reset();
      console.log("Success!", response);
    })
    .catch((error) => console.error("Error!", error.message));
});




?>