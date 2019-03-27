window.addEventListener('load',function(){

    console.log('passe')
    let elmTitre = document.querySelector('.site-branding .site-title')
    let elmDescription = document.querySelector('.site-branding .site-description')
    let elmEntete = document.querySelector('.site-featured-image .entry-header .entry-title')

    elmEntete.classList.add('anim4')
    elmTitre.classList.add('anim1-2')

    elmDescription.classList.add('anim3')



})