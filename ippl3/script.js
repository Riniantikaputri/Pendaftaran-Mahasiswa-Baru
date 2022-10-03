let Nama = document.querySelector('#nama');
let TL = document.querySelector('#tempat_lahir');
let NoTelp = document.querySelector('#no_telp');
let kode_pos = document.querySelector('#kode_pos');
let provinsi = document.querySelector('#provinsi');
let kabupaten = document.querySelector('#kabupaten');
let kecamatan = document.querySelector('#kecamatan');
let rapot = document.querySelector('#nilai_raport');
let tanggal = document.querySelector('#tanggal_lahir');

const validasi =  /^[0-9]+$/;
const vali = /^[a-zA-Z ]*$/;
const a = /^[0-9./]+$/;

Nama.addEventListener('keyup',function(){
    let val = this.value;
    if(val.match(vali)){

    }else{
        alert("Nama Hanya Huruf Saja")
        Nama.value = ""
    }
})
TL.addEventListener('keyup',function(){
    let val = this.value;
    if(val.match(vali)){

    }else{
        alert("Tempat Lahir Hanya Huruf Saja")
        TL.value = ""
    }
})
NoTelp.addEventListener('keyup',function(){
    let val = this.value;
    if(val.match(validasi)){

    }else{
        alert("No Telepon Hanya Angka Saja")
        NoTelp.value = ""
    }
})
kode_pos.addEventListener('keyup',function(){
    let val = this.value;
    if(val.match(validasi)){

    }else{
        alert("Kode Pos Hanya Angka Saja")
        kode_pos.value = ""
    }
})
provinsi.addEventListener('keyup',function(){
    let val = this.value;
    if(val.match(vali)){

    }else{
        alert("Provinsi Hanya Huruf Saja")
        provinsi.value = ""
    }
})
kabupaten.addEventListener('keyup',function(){
    let val = this.value;
    if(val.match(vali)){

    }else{
        alert("Kabupaten Hanya Huruf Saja")
        kabupaten.value = ""
    }
})
kecamatan.addEventListener('keyup',function(){
    let val = this.value;
    if(val.match(vali)){

    }else{
        alert("Kecamatan Hanya Huruf Saja")
        kecamatan.value = ""
    }
})
rapot.addEventListener('keyup',function(){
    let val = this.value;
    if(val.match(a)){

    }else{
        alert("Nilai Tidak Sesuai Format")
        rapot.value = ""
    }
})
tanggal.addEventListener('keyup',function(){
    let val = this.value;
    if(val.match(a)){

    }else{
        alert("Tanggal Lahir Tidak Boleh Huruf")
        tanggal.value = ""
    }
})