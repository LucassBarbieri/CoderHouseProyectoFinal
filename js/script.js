function pic() {
    var bgm = ['./img/header.png', './img/header2.png', './img/header3.png', './img/header4.png'];

    $('.headertopnav1').css({
        'background' : 'url('+ bgm[Math.floor(Math.random() * bgm.length)] + ') no-repeat',
        'background-position' : '100%',
        'background-size' : 'cover',
    });
}

pic();