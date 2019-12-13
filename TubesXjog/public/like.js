var checkbox = document.getElementById('like');

checkbox.addEventListener( 'change', function() {
    if(this.checked) {
        console.log('hehehe');
    } else {
        console.log('huhuhuh ni');
    }
});