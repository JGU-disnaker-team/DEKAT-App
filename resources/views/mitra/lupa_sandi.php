<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Lupa Kata Sandi</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  outline: none;
  font-family: 'Poppins', sans-serif;
}

header {
    background: linear-gradient(to right, #0B42D9, #007bff);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

body{
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  overflow: hidden;
  background: #fff;
}
::selection{
  color: #fff;
  background: #d43f8d;
}
.container{
  width: 330px;
  background-color: #ffffff;
  text-align: center;
  border: 2px solid #e5e7eb;
  border-radius: 24px;
  padding: 50px 35px 10px 35px;
  box-shadow: 0px 4px 6px -1px rgba(0, 0, 0, 0.2);
}
.container header{
  font-size: 35px;
  font-weight: 600;
  margin: 0 0 30px 0;
}
.container .form-outer{
  width: 100%;
  overflow: hidden;
}
.container .form-outer form{
  display: flex;
  width: 400%;
}
.form-outer form .page{
  width: 25%;
  transition: margin-left 0.3s ease-in-out;
}
.form-outer form .page .title{
  text-align: left;
  font-size: 25px;
  font-weight: 500;
}

.form-outer form .page .field{
  width: 330px;
  height: 45px;
  margin: 45px 0;
  display: flex;
  position: relative;
}
form .page .field .label{
  position: absolute;
  top: -30px;
  font-weight: 500;
}
form .page .field input{
  height: 100%;
  width: 100%;
  border: 1px solid lightgrey;
  border-radius: 5px;
  padding-left: 15px;
  font-size: 18px;
}
form .page .field select{
  width: 100%;
  padding-left: 10px;
  font-size: 17px;
  font-weight: 500;
}
form .page .field button{
  width: 100%;
  height: calc(100% + 5px);
  border: none;
  border-radius: 5px;
  background: #0B42D9;
  margin-top: -20px;
  border-radius: 5px;
  color: #fff;
  cursor: pointer;
  font-size: 18px;
  font-weight: 500;
  letter-spacing: 1px;
  text-transform: uppercase;
  transition: 0.5s ease;
}
form .page .btns button{
  margin-top: -20px!important;
}
form .page .btns button.prev{
  margin-right: 3px;
  font-size: 17px;
}
form .page .btns button.next{
  margin-left: 3px;
}

.container .progress-bar{
  display: flex;
  margin: 40px 0;
  user-select: none;
}
.container .progress-bar .step{
  text-align: center;
  width: 100%;
  position: relative;
}
.container .progress-bar .step p{
  font-weight: 500;
  font-size: 18px;
  color: #000;
  margin-bottom: 8px;
}
.progress-bar .step .bullet{
  height: 25px;
  width: 25px;
  border: 2px solid #000;
  display: inline-block;
  border-radius: 50%;
  position: relative;
  transition: 0.2s;
  font-weight: 500;
  font-size: 17px;
  line-height: 25px;
}
.progress-bar .step .bullet.active{
  border-color: #007bff;
  background: #007bff;
}
.progress-bar .step .bullet span{
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
}
.progress-bar .step .bullet.active span{
  display: none;
}

.progress-bar .step .bullet.active:after{
  background: #d43f8d;
  transform: scaleX(0);
  transform-origin: left;
  animation: animate 0.3s linear forwards;
}
@keyframes animate {
    0% { transform: scaleX(0); background: #f0ad4e; }
    100% { transform: scaleX(1); background: #007bff; }
  }
}
.progress-bar .step:last-child .bullet:before,
.progress-bar .step:last-child .bullet:after{
  display: none;
}
.progress-bar .step p.active{
  color: #d43f8d;
  transition: 0.2s linear;
}
.progress-bar .step .check{
  position: absolute;
  left: 50%;
  top: 70%;
  font-size: 15px;
  transform: translate(-50%, -50%);
  display: none;
}
.progress-bar .step .check.active{
  display: block;
  color: #fff;
}
.code-inputs {
    display: flex;
    justify-content: center; /* Pusatkan elemen input */
    gap: 15px; /* Tambahkan jarak antar elemen */
    margin: 20px 0; /* Berikan margin untuk ruang tambahan */
}

.code-inputs input {
    width: 60px; /* Lebih lebar untuk angka */
    height: 60px; /* Ukuran tinggi yang sama */
    text-align: center; /* Teks berada di tengah */
    font-size: 24px; /* Ukuran font yang nyaman */
    border: 2px solid #ccc; /* Garis tepi lebih tebal */
    border-radius: 8px; /* Sudut melengkung */
    transition: border-color 0.3s, box-shadow 0.3s; /* Efek animasi fokus */
}

.input-field:focus {
  border-color: #0B42D9;
  box-shadow: 0 0 0 4px rgba(11, 66, 217, 0.1);
}
      </style>
   </head>
   <body>
      <div class="container">
         <header>Lupa Kata Sandi</header>
         <div class="progress-bar">
            <div class="step">
               <p>Email</p>
               <div class="bullet">
                  <span>1</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            <div class="step">
               <p>Verifikasi</p>
               <div class="bullet">
                  <span>2</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            <div class="step">
               <p>Ubah</p>
               <div class="bullet">
                  <span>3</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            <div class="step">
               <p>Selesai</p>
               <div class="bullet">
                  <span>4</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
        </div>
        <div class="form-outer">
            <form action="#">
                <div class="page slide-page">
                    <div class="title">
                    Tolong Masukkan Alamat Email anda untuk Mereset Kata Sandi
                    </div>
                    <div class="field">
                        <input type="email" class="input-field" placeholder="Masukkan email">
                    </div>
                    <div class="field">
                    <button type="button" class="firstNext next">Reset Kata Sandi</button>
                    </div>
                </div>
                <div class="page">
                  <div class="title">
                  Kami Mengirimkan Kode Ke akun email, Masukkan 4 digit kode tersebut
                  </div>
                    <div class="code-inputs">
                        <input type="text" class="input-field" maxlength="1" placeholder="">
                        <input type="text" class="input-field" maxlength="1" placeholder="">
                        <input type="text" class="input-field" maxlength="1" placeholder="">
                        <input type="text" class="input-field" maxlength="1" placeholder="">
                    </div>
                  <div class="field btns">
                     <button type="button" class="prev-1 prev">Kembali</button>
                     <button type="button" class="next-1 next">Verifikasi Kode</button>
                  </div>
               </div>
               <div class="page">
                  <div class="title">
                     Buat Kata Sandi Baru
                  </div>
                  <div class="field">
                     <div class="label"> Kata Sandi </div>

                     <input type="password" class="input-field">
                  </div>
                  <div class="field">
                     <div class="label">
                        Konfirmasi Kata Sandi
                     </div>
                     <input type="password" class="input-field">
                  </div>
                  <div class="field btns">
                     <button type="button" class="prev-2 prev">Kembali</button>
                     <button type="button" class="next-2 next">Perbarui</button>
                  </div>
               </div>
               <div class="page">
                  <div class="title">
                     Selesai
                  </div>
                  <div class="field btns">
                     <button type="button" class="prev-3 prev">Kembali</button>
                     <button type="button" class="submit">Submit</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
      <script>
document.addEventListener('DOMContentLoaded', function() {
    const slidePage = document.querySelector(".slide-page");
    const form = document.querySelector("form");

    const nextBtnFirst = document.querySelector(".firstNext");
    const prevBtnSec = document.querySelector(".prev-1");
    const nextBtnSec = document.querySelector(".next-1");
    const prevBtnThird = document.querySelector(".prev-2");
    const nextBtnThird = document.querySelector(".next-2");
    const prevBtnFourth = document.querySelector(".prev-3");
    const submitBtn = document.querySelector(".submit");

    const progressText = document.querySelectorAll(".step p");
    const progressCheck = document.querySelectorAll(".step .check");
    const bullet = document.querySelectorAll(".step .bullet");

    let current = 1;

    // Prevent default form submission
    form.addEventListener('submit', function(e) {
        e.preventDefault();
    });

    function moveToNextPage(marginLeft) {
        slidePage.style.marginLeft = marginLeft;
        bullet[current - 1].classList.add("active");
        progressCheck[current - 1].classList.add("active");
        progressText[current - 1].classList.add("active");
        current += 1;
    }

    function moveToPrevPage(marginLeft) {
        slidePage.style.marginLeft = marginLeft;
        bullet[current - 2].classList.remove("active");
        progressCheck[current - 2].classList.remove("active");
        progressText[current - 2].classList.remove("active");
        current -= 1;
    }

    // Next buttons
    nextBtnFirst.addEventListener("click", function(event){
        event.preventDefault();
        moveToNextPage("-25%");
    });

    nextBtnSec.addEventListener("click", function(event){
        event.preventDefault();
        moveToNextPage("-50%");
    });

    nextBtnThird.addEventListener("click", function(event){
        event.preventDefault();
        moveToNextPage("-75%");
    });

    // Previous buttons
    prevBtnSec.addEventListener("click", function(event){
        event.preventDefault();
        moveToPrevPage("0%");
    });

    prevBtnThird.addEventListener("click", function(event){
        event.preventDefault();
        moveToPrevPage("-25%");
    });

    prevBtnFourth.addEventListener("click", function(event){
        event.preventDefault();
        moveToPrevPage("-50%");
    });

    // Submit button
    submitBtn.addEventListener("click", function(){
        bullet[current - 1].classList.add("active");
        progressCheck[current - 1].classList.add("active");
        progressText[current - 1].classList.add("active");
        current += 1;
        setTimeout(function(){
            alert("Formulir Berhasil Diperbarui");
            location.reload();
        }, 800);
    });
});
      </script>
   </body>
</html>