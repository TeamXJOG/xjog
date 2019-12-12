var komentar = document.getElementById('comment_field');
var tombol = document.getElementById('comment_send');
var komenWindow = document.getElementById('comment_window');

tombol.addEventListener('click', function() {
    //objek ajax

    var xhr = new XMLHttpRequest();

    // console.log('ajax ok');

    //cek kesiapan ajax
    xhr.onreadystatechange = function() {
        if( xhr.readyState == 4 && xhr.status == 200 ) {
            console.log('ajax ok');
        }
        console.log('ajax ok');

    }

    //eksekusi ajax
    // xhr.open('POST', '', true);
    // xhr.send();
});