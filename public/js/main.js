window.onload = () => {
    
    // avoid spammers
    const emails = document.querySelectorAll('a.mail')
    for(let i = 0; i < emails.length; i++){
        emails[i].addEventListener('click', (e) => {
            e.target.setAttribute('href', 'mailto:njonas45@gmail.com')
        })
    }

    let previewImage = null,
        mouseX,
        mouseY;
    // adds event listeners to all preview images
    Array.from(document.querySelectorAll('.entry')).filter((elem, index) => {
        return elem.querySelector('.preview');
    }).forEach(imagePreviewElem => {
        
        let {top, right, bottom, left} = imagePreviewElem.getBoundingClientRect();
        let prev = imagePreviewElem.querySelector('.preview');
        prev.style.transform = `translate(${left - 325}px,${top - 325}px)`;

        imagePreviewElem.addEventListener('mouseover', (e) => {
            previewImage = imagePreviewElem.querySelector('.preview');
            previewImage.parentElement.parentElement.style.clipPath = 'none';
            previewImage.parentElement.parentElement.style.animationName = 'none';
            previewImage.parentElement.style.clipPath = 'none';
            previewImage.parentElement.style.animationName = 'none';
            previewImage.parentElement.style.opacity = 1;
            
            // hide all except the focused one
            previewImage.parentElement.parentElement.querySelectorAll('.entry').forEach((elem) => {
                if(elem !== previewImage.parentElement){
                    previewImage.parentElement.parentElement.classList.add('hide');
                }
            });

            previewImage.parentElement.querySelector('.text-wrap').classList.add('focus');
            previewImage.classList.add('on');
        });
        imagePreviewElem.addEventListener('mouseout', (e) => {
            previewImage.parentElement.querySelector('.text-wrap').classList.remove('focus');
            previewImage.parentElement.parentElement.querySelectorAll('.entry').forEach((elem) => {
                previewImage.parentElement.parentElement.classList.remove('hide');
            });
            previewImage.classList.remove('on');
            previewImage = null;
        });
    })

    document.addEventListener('mousemove', (e) => {
        mouseX = e.clientX;
        mouseY = e.clientY;
    })


    let lastX = 0,
        lastY = 0;
    // animation frame listener
    // sets the position of the focused preview image based on mouse 
    function step(timestamp){
        if(previewImage){
            let browserWidth = window.innerWidth,
                browserHeight = window.innerHeight,
                imageWidth = previewImage.offsetWidth,
                imageHeight = previewImage.offsetHeight;
            
                // mouseX - (mouseX + imageWidth + 100 - browserWidth)
            let centeredX = mouseX - (imageWidth / 2),
                centeredY = mouseY - (imageHeight / 2);

            previewImage.style.transform = `translate(${centeredX}px,${centeredY}px)`;
        }
        window.requestAnimationFrame(step);
    }
    window.requestAnimationFrame(step);

}