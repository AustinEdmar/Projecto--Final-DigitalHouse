$(document).ready(function(e){
    $win = $(window);
    $navbar = $('#header');
    $toggle = $('.toggle-button');
    var width = $navbar.width();
    toggle_onclick($win, $navbar, width);

    // resize evento
    $win.resize(function(){
        toggle_onclick($win, $navbar, width);
    });

    $toggle.click(function(e){
        $navbar.toggleClass("toggle-left");
    })

});

function toggle_onclick($win, $navbar, width){
    if($win.width() <= 768){
        $navbar.css({left: `-${width}px`});
    }else{
        $navbar.css({left: '0px'});
    }

}

var typed = new Typed('#typed' , {
    strings: [
        'Criação de joias',
        'Dê brilho ao seu sorriso',
        'Descubra-se com as nossas joias',
        
    ],
    typeSpeed: 110,
    backSpeed: 70,
    loop: true
});


var typed = new Typed('#typed_2' , {
    strings: [
        'Austin',
        'Edmar 😎',
        'Web Developer',
        
    ],
    typeSpeed: 110,
    backSpeed: 70,
    loop: true
});

var typed = new Typed('#typed_3' , {
    strings: [
        'Meu Muito Obrigado 💖',
        'Por cá estares 😉',
        'Até mais 🤗',
        
        
    ],
    typeSpeed: 110,
    backSpeed: 70,
    loop: true
});



document.querySelectorAll('a[href^="#"]').forEach(anchor =>{
    anchor.addEventListener('click', function(e){
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});




/* sidebar efect */


