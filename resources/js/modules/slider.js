function slider({sliderMain, currentCount, nextSlide, slideField, totalCount, allSlides, wrapperSlides, prevSlide}){
    const prev = document.querySelector(prevSlide),
                next = document.querySelector(nextSlide),
                slidesWrapper = document.querySelector(wrapperSlides),
                slidesField = document.querySelector(slideField),
                slides = document.querySelectorAll(allSlides),
                current = document.querySelector(currentCount),
                total = document.querySelector(totalCount),
                width = window.getComputedStyle(slidesWrapper).width,
                slider = document.querySelector(sliderMain);
            
            let sliderIndex = 1;
            let position = 0;
        
            slidesField.style.width = 100 * slides.length + "%";
            slidesField.style.display = "flex";
            slidesWrapper.style.overflow = 'hidden';
            slidesField.style.transition = "0.5s all";
            slider.style.position = "relative";
        
            const ol = document.createElement('ol'),
                dots = [];
            ol.classList.add('carousel-indicators');
            slider.append(ol);
        
            slides.forEach(slide => {
                slide.style.width = width;
            });
        
            for(let i = 0; i < slides.length; i++){
                const li = document.createElement('li');
                li.classList.add('dot');
                li.setAttribute('data-slide-to', i + 1);
                ol.append(li);
                if(sliderIndex == li.getAttribute('data-slide-to')){
                    li.style.opacity = 1;
                }
                dots.push(li);
            }
        
            if(slides.length < 10){
                total.textContent = `0${slides.length}`;
            }else{
                total.textContent = slides.length;
            }
        
            if(sliderIndex < 10){
                current.textContent = `0${sliderIndex}`;
            }else{
                current.textContent = sliderIndex;
            }
        
            function deleteNotNumeric(str){
                return +str.replace(/\D/g, "");    
            }
        
            function checkDots(dots){
                dots.forEach(dot => {
                    if(dot.getAttribute('data-slide-to') == sliderIndex){
                        dot.style.opacity = 1;
                    }else{
                        dot.style.opacity = '.5';
                    }
                });
            }
        
            next.addEventListener('click', () => {
                if(position == deleteNotNumeric(width) * (slides.length -1)){
                    position = 0;
                    sliderIndex = 1;
                }else{
                    position += deleteNotNumeric(width);
                    sliderIndex++;
                }
                slidesField.style.transform = `translateX(-${position}px)`;
        
                if(sliderIndex < 10){
                    current.textContent = `0${sliderIndex}`;
                }else{
                    current.textContent = sliderIndex;
                }
        
                checkDots(dots);
            });
        
            prev.addEventListener('click', () => {
        
                if(position == 0 ){
                    position = deleteNotNumeric(width) * (slides.length -1);
                    sliderIndex = slides.length;
                }else{
                    position -= deleteNotNumeric(width);
                    sliderIndex--;
                }
                slidesField.style.transform = `translateX(-${position}px)`;
        
                if(sliderIndex < 10){
                    current.textContent = `0${sliderIndex}`;
                }else{
                    current.textContent = sliderIndex;
                }
                
                checkDots(dots);
            });
        
            dots.forEach(dot => {
                dot.addEventListener('click', e =>{
                    const slideTo = e.target.getAttribute('data-slide-to');
                    sliderIndex = slideTo;
        
                    if(sliderIndex < 10){
                        current.textContent = `0${sliderIndex}`;
                    }else{
                        current.textContent = sliderIndex;
                    }
                    
                    dots.forEach(dot => dot.style.opacity = ".5");
                    dots[sliderIndex - 1].style.opacity = 1;
        
                    position = deleteNotNumeric(width) * (sliderIndex -1);
                    slidesField.style.transform = `translateX(-${position}px)`;
        
                });
            });
}

export default slider;