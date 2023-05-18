"use strict";
//Form Login
$("#form_login").on("submit", (function(e) { 
e.preventDefault();
$.ajax({
    url: "functions/actions.php?aksi=login",
    type: "POST",
    data: new FormData(this),
    contentType: false,
    cache: false,
    processData: false, 
    success: function(data) {    
    if(data=="berhasil"){
        //console.log("berhasil");
        const Toast = Swal.mixin({
        toast: true,
        position: "bottom",
        showConfirmButton: false,
        timer: 1500,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener("mouseenter", Swal.stopTimer)
            toast.addEventListener("mouseleave", Swal.resumeTimer)
        }
        })
        Toast.fire({
        icon: "success",
        title: "Login berhasil. Menuju panel admin."
        }).then((result) => {
        if (result.dismiss === Swal.DismissReason.timer) {
            var root_folder = '/' +  window.location.href.split('/')[3];
            //console.log("Login berhasil"); 
            window.location.href = root_folder + '/admin.php'; 
        }
        })
    }else{
        //console.log("gagal");
        Swal.fire({
        title: "Login Gagal!",
        text: "Username atau sandi tidak cocok.",
        icon: "error", 
        confirmButtonText: "Tutup"
        })  
    }
    }
})
})
);

//Form Tambah Tamu
$("#form_tambah_tamu").on("submit", (function(e) { 
e.preventDefault();
    $.ajax({
        url: "functions/actions.php?aksi=tambah_tamu",
        type: "POST",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false, 
        success: function(data) {    
        if(data=="success"){
            //console.log("berhasil");
            $('#form_tambah_tamu')[0].reset();
            Swal.fire({
            title: "Berhasil!",
            text: "Terimakasih. Data anda telah kami catat.",
            icon: "success", 
            confirmButtonText: "Tutup"
            })  
        }else{
            //console.log("gagal");
            Swal.fire({
            title: "Gagal!",
            text: "Nomor handphone telah terdata pada hari ini.",
            icon: "error", 
            confirmButtonText: "Tutup"
            })  
        }
        }
    })
    })
);