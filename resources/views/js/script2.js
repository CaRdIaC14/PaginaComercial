document.addEventListener('DOMContentLoaded', function(){
    let imagenes = [
        {img: '/img/titulos/img2.jpg'},
        {img: '/img/titulos/img3.jpg'},
        {img: '/img/titulos/img4.jpg'},
        {img: '/img/titulos/img6.jpg'},
        {img: '/img/titulos/img7.jpg'},
        {img: '/img/titulos/img8.jpg'},
        {img: '/img/titulos/img9.jpg'},
        {img: '/img/titulos/img10.jpg'},
        {img: '/img/titulos/img11.jpg'},
        {img: '/img/titulos/img14.jpg'},
        {img: '/img/titulos/img15.jpg'},
        {img: '/img/titulos/img16.JPG'},
        {img: '/img/titulos/img17.JPG'},
        {img: '/img/titulos/img18.JPG'},
        {img: '/img/titulos/img19.JPG'},
        {img: '/img/titulos/img20.JPG'},
        {img: '/img/titulos/img21.JPG'},
        {img: '/img/titulos/img22.JPG'},
        {img: '/img/titulos/img23.JPG'},
        {img: '/img/titulos/img24.jpeg'},
        {img: '/img/titulos/img25.JPG'},
        {img: '/img/titulos/img26.jpeg'}
    ]
    let contador = 0
    const contenedor = document.querySelector('.slideshow')
    const overlay = document.querySelector('.overlay')
    const galeria_imagenes = document.querySelectorAll('.galerias img')
    const img_slideshow = document.querySelector('.slideshow img')

    contenedor.addEventListener('click', function(event){
        let atras = contenedor.querySelector('.atras'),
            adelante = contenedor.querySelector('.adelante'),
            img = contenedor.querySelector('img'),
            tgt = event.target
        if (tgt == atras){
            if (contador > 0){
                img.src = imagenes[contador -1].img
                contador--
            } else {
                img.src = imagenes[imagenes.length - 1].img
                contador = imagenes.length - 1
            }
        } else if (tgt == adelante){
            if (contador < imagenes.length - 1){
                img.src = imagenes[contador + 1].img
                contador ++
            } else {
                img.src = imagenes[0].img
                contador = 0
            }
        }
    })

    Array.from(galeria_imagenes).forEach(img =>{
        img.addEventListener('click', event =>{
            const imagen_seleccionada = +event.target.dataset.imgMostrar
            img_slideshow.src = imagenes[imagen_seleccionada].img
            contador = imagen_seleccionada
            overlay.style.opacity = 1
            overlay.style.visibility  = 'visible'
        } )
    })

    document.querySelector('.btn_cerrar').addEventListener('click', () =>{
        overlay.style.opacity = 0
        overlay.style.visibility = 'hidden'
    })
})
