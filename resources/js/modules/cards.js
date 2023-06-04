    // Используем классы для создание карточек меню
    import {getResource} from "../services/services";

    function cards(){
            class MenuCard {
                constructor(id, src, title, descr, price, oldPrice, parentSelector, ...classes) {
                    this.id = id;
                    this.src = src;
                    this.title = title;
                    this.descr = descr;
                    this.price = price;
                    this.oldPrice = oldPrice;
                    this.classes = classes;
                    this.parent = document.querySelector(parentSelector);
                }
  
                render() {
                    const element = document.createElement('div');
        
                    if (this.classes.length === 0) {
                        this.classes = "menu__item";
                        element.classList.add(this.classes);
                    } else {
                        this.classes.forEach(className => element.classList.add(className));
                    }
        
                    element.innerHTML = `
                        <img src=${this.src}>
                        <h3 class="menu__item-subtitle">${this.title}</h3>
                        <div class="menu__item-descr">${this.descr}</div>
                        <div class="menu__item-divider"></div>
                        <div class="menu__item-price">
                        <div><a class="btn btn-danger" href="{{ route('course', ${this.id}) }}">
                        Подробнее</a></div>
                            <div class="menu__item-cost">Цена:</div>
                            <div class="menu__item-total"><span class="cena">${this.oldPrice}тг</span>
                            <div><span>${this.price}тг</span></div>
                            </div>
                        </div>
                    `;
                    this.parent.append(element);
                }
            }

            getResource('http://okucenter.kz/api/get_courses')
            .then(data => {
                data.forEach(({id, photo, name, description, price, oldPrice}) => {
                new MenuCard(id, photo, name, description, price, oldPrice, '.menu .container').render();
                });
            });
    }

     export default cards;
    