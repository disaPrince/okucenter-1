"use strict";
window.addEventListener('DOMContentLoaded', function(){

    const postData = async (url, data) => {
        const res = await fetch(url, {
            method: "POST",
            body: data,
            headers: {
                "Content-Type" : "application/json"
            }
        });

        return await res.json();
    };

    function closeModal(modalSelector) {
        const modal = document.querySelector(modalSelector);
         modal.classList.add('hide');
         modal.classList.remove('show');
         document.body.style.overflow = '';
     }
     
     function openModal(modalSelector) {
         const modal = document.querySelector(modalSelector);
         modal.classList.add('show');
         modal.classList.remove('hide');
         document.body.style.overflow = 'hidden';
     }
    
     function modal(){
             const modalTrigger = document.querySelectorAll('[data-modal]'),
             modal = document.querySelector('.modal');
     
         modalTrigger.forEach(btn => {
             btn.addEventListener('click', () => openModal('.modal'));
         });
     
         modal.addEventListener('click', (e) => {
             if (e.target === modal || e.target.getAttribute('data-close')  == "") {
                 closeModal('.modal');
             }
         });
     
         document.addEventListener('keydown', (e) => {
             if (e.code === "Escape" && modal.classList.contains('show')) { 
                 closeModal('.modal');
             }
         });
     
         // Закомментировал, чтобы не отвлекало
     
         function showModalByScroll() {
             if (window.pageYOffset + document.documentElement.clientHeight >= document.documentElement.scrollHeight) {
                 openModal('.modal');
                 window.removeEventListener('scroll', showModalByScroll);
             }
         }
         window.addEventListener('scroll', showModalByScroll);
     }
     modal();

    
     function forms(){
        const message = {
            loading: "img/form/spinner.svg",
            success: "Спасибо! Скоро мы с Вами свяжемся",
            failure: "Что-то пошло не так..."
        };
        
        const forms = document.querySelectorAll('[data-form]');
        forms.forEach(item => {
            bindPostData(item);
        });

        function bindPostData(form){
            form.addEventListener('submit', e => {
                e.preventDefault();
                const data = new FormData(form);
                const json = JSON.stringify(Object.fromEntries(data.entries()));

                postData('http://localhost:3000/requests', json)
                .then(data => {
                    showThanksForm(message.success);
                    status.remove();
                }).catch(() => {
                    showThanksForm(message.failure);
                }).finally(() => form.reset());

                const status = document.createElement('img');
                status.style.cssText = `
                    display: block;
                    margin: 0 auto
                `;
                status.src = message.loading;
                form.insertAdjacentElement('afterend', status);
            });
        }

        function showThanksForm(message){
            const prevModal = document.querySelector('.modal__dialog');
            const element = document.createElement('div');
            prevModal.classList.add('hide');
            openModal('.modal');
            element.innerHTML = `
                <div class="modal__content"> 
                    <div class="modal__close" data-close>x</div>
                    <div class="modal__title">${message}</div>
                </div>
            `;
            element.classList.add('modal__dialog');
            document.querySelector('.modal').append(element);
            setTimeout(()=>{
                element.remove();
                prevModal.classList.add('show');
                prevModal.classList.remove('hide');
                closeModal('.modal');
            }, 4000);
        }
    }

    forms();
});

