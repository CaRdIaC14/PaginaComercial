document.addEventListener('DOMContentLoaded', function(){
    let imagenes = [
        {img: '/img/actividades/img1.jpg'},
        {img: '/img/actividades/img2.jpg'},
        {img: '/img/actividades/img3.jpg'},
        {img: '/img/actividades/img4.jpg'},
        {img: '/img/actividades/img5.jpg'},
        {img: '/img/actividades/img6.jpg'},
        {img: '/img/actividades/img7.jpg'},
        {img: '/img/actividades/img8.jpg'},
        {img: '/img/actividades/img9.jpg'},
        {img: '/img/actividades/img10.jpg'},
        {img: '/img/actividades/img11.jpg'},
        {img: '/img/actividades/img12.jpg'},
        {img: '/img/actividades/img13.jpg'},
        {img: '/img/actividades/img14.jpg'},
        {img: '/img/upload/noticias/CodeclubNot.jpg'},
        {img: '/img/Bienestar/img1.jpeg'},
        {img: '/img/Bienestar/img2.jpeg'},
        {img: '/img/Bienestar/img3.jpeg'},
        {img: '/img/Bienestar/img4.jpeg'},
        {img: '/img/Bienestar/img5.jpeg'},
        {img: '/img/Bienestar/img6.jpeg'},
        {img: '/img/Bienestar/img7.jpeg'},
        {img: '/img/visitas/img1.jpeg'},
        {img: '/img/visitas/img2.jpeg'},
        {img: '/img/visitas/img3.jpeg'},
        {img: '/img/visitas/img4.jpeg'},
        {img: '/img/visitas/img5.jpeg'},
        {img: '/img/visitas/img6.jpeg'},
        {img: '/img/actividades/img16.jpeg'},
        {img: '/img/actividades/img17.jpeg'},
        {img: '/img/actividades/img18.jpeg'},
        {img: '/img/actividades/img19.jpeg'},
        {img: '/img/actividades/img20.jpeg'},
        {img: '/img/actividades/img21.jpeg'},
        {img: '/img/actividades/img22.jpeg'},
        {img: '/img/actividades/img23.jpeg'},
        {img: '/img/actividades/img24.jpeg'},
        {img: '/img/actividades/img25.jpeg'},
        {img: '/img/actividades/img26.jpeg'},
        {img: '/img/actividades/img27.jpeg'},
        {img: '/img/actividades/img28.jpeg'},
        {img: '/img/actividades/img29.jpeg'},
        {img: '/img/actividades/img30.jpeg'},
        {img: '/img/actividades/img31.jpeg'},
        {img: '/img/actividades/img32.jpeg'},
        {img: '/img/actividades/img33.jpeg'},
        {img: '/img/actividades/img34.jpeg'},
        {img: '/img/actividades/img35.jpeg'},
        {img: '/img/actividades/img36.jpeg'},
        {img: '/img/actividades/img37.jpeg'},
        {img: '/img/actividades/img38.jpeg'},
        {img: '/img/actividades/img39.jpeg'},
        {img: '/img/actividades/img40.jpeg'},
        {img: '/img/actividades/img41.jpeg'},
        {img: '/img/actividades/img42.jpeg'},
        {img: '/img/actividades/img43.jpeg'},
        {img: '/img/actividades/img44.jpeg'}
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
