//init controller
var controller = new ScrollMagic.Controller();

// build esena
var scene=new ScrollMagic.Scene({
    triggerElement:'.albums'
})
    .setClassToggle('.albums','show')
