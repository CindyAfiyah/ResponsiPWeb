function validateForm(){
        var nama= document.getElementById('contact-nama').value;
        var email = document.getElementById('contact-email').value;
        var hp = document.getElementById('contact-hp').value;
        var subyek = document.getElementById('contact-subyek').value;
        var pesan = document.getElementById('contact-pesan').value;

        alert("Nama : "+nama+"\nEmail : "+email+"\nSubyek : "+subyek+"\nNo. Hp : "+hp+"\nPesan : " +pesan);
}
var namaError = document.getElementById('nama-error');
var emailError = document.getElementById('email-error');
var hpError = document.getElementById('phone-error');
var alamatError = document.getElementById('alamat-error');
var layananError = document.getElementById('layanan-error');
var sumbitError = document.getElementById('subit-error');

function validasiNama(){
        var nama = document.getElementById('nama').value;

        if(nama.length == 0){
                namaError.innerHTML = 'Wajib diisi!';
                return false;
        }
        namaError.innerHTML = ' ';
        return true;
}
function validasiEmail(){
        var email = document.getElementById('email').value;

        if(email.length == 0){
                emailError.innerHTML = 'Wajib diisi!';
                return false;
        }
        if(!email.match(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)){
                emailError.innerHTML = 'Wajib diisi!';
                return false;
        }
        emailError.innerHTML = ' ';
        return true;
}
function validasiPhone(){
        var phone = document.getElementById('phone').value;

        if(phone.length == 0){
                phoneError.innerHTML = 'Wajibb diisi!';
                return false;
        }
        if(phone.length != 12){
                phoneError.innerHTML = 'Harus 12 digit';
                return false;
        }
        if(!phone.match(/^[0-9]{12}$/)){
                phoneError.innerHTML = 'Hanya angka';
                return false;
        }
        phoneError.innerHTML = ' ';
        return true;
}
function validasiAlamat () {
        var alamat = document.getElementById('alamat').value;
        var required = 10;
        var left = required - alamat.length;

        if(left>0){
                alamatError.innerHTML = left + '  Wajib diisi!';
                return false;
        }
        alamatError.innerHTML = ' ';
        return true;
}
function validasiLayanan () {
        var layanan = document.getElementById('layanan').value;
        var required = 10;
        var left = required - layanan.length;

        if(left>0){
                layananError.innerHTML = left + ' lebih banyak karakter yang dibutuhkan';
                return false;
        }
        layananError.innerHTML = ' ';
        return true;
}
function validasi(){
        if(!validasiNama() || !validasiEmail() || !validasiAlamat() || !validasiPhone() || !validasiLayanan()){
                sumbitError.innerHTML = 'Submit Gagal!';
                return false;
        }
}
