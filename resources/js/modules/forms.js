import {openModal, closeModal} from "./modal";
import {postData} from "../services/services";

function forms(formSelector, modalTimerId){
        const message = {
            loading: "img/form/spinner.svg",
            success: "Спасибо! Скоро мы с Вами свяжемся",
            failure: "Что-то пошло не так..."
        };
        
        const forms = document.querySelectorAll(formSelector);
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
                    console.log(data);
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
            openModal('.modal', modalTimerId);
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

export default forms;