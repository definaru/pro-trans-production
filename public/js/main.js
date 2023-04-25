new Vue({
    el: '#shop', 
    data: {
        card: [],
        сheckout: [],
        loading: true,
        cookie: true,
        amount: 0,
        totalsumma: 0,
        button: 0,
        count: 1
    },
    computed: {
        totalSum: function () {
            var sum = this.card.reduce(
                (acc, current) => acc + Number(current.summa), 0
            );
            this.totalsumma = sum;      
        },
        totalAmount: function () {
            var value = this.card.reduce(
                (acc, current) => acc + Number(current.count), 0
            );
            this.amount = value;
        },
        newOrder: function () {
            localStorage.removeItem('cart');
            localStorage.removeItem('сheckout');
            this.card = [];
        }
    },
    mounted() {
        this.cookie = JSON.parse(localStorage.getItem("cookie")) || [];
        this.card = JSON.parse(localStorage.getItem('cart')) || [];
        this.сheckout = JSON.parse(localStorage.getItem('сheckout')) || [];
               
        if (localStorage.getItem('cart')) {
            try {
                setTimeout(function () {
                    this.loading = false;
                }.bind(this), 500);
                var goods = JSON.parse(localStorage.getItem('cart'));
                var set = new Set(goods.map(JSON.stringify));
                var uniqArray = Array.from(set).map(JSON.parse);
                this.card = uniqArray;
            } catch(e) {
                localStorage.removeItem('cart');
                console.log('Error:', e)
            }
        }
    },
    methods: {
        countGoods(n,s1,s2,s3, b = false) {
            let m = n % 10; j = n % 100;
            if(b) {n = n;}
            if(m==0 || m>=5 || (j>=10 && j<=20)) {return s3;}
            if(m>=2 && m<=4) {return s2;}
            return s1;
        },
        sendOrderButton() {
            this.button = 1
        },
        getTotalsumma(digital) {
            var rub = digital.toString().substr(0, String(digital).length-2).replace(/\B(?=(\d{3})+(?!\d))/g, " ");
            var cent = digital.toString().slice(-2);
            return rub+'.'+cent+' ₽';
        },
        priceFormat(digital) { 
            var rub = digital.toString().substr(0, String(digital).length-2)
            var cent = digital.toString().substr(-2)
            var num = rub+'.'+cent
            var result = new Intl.NumberFormat("ru-RU", {
                style: "currency",
                currency: "RUB",
                minimumFractionDigits: 2,
                currencyDisplay: "symbol",
            }).format(num);
            return result
        },
        inCrementOne()
        {
            this.count++
        },
        deCrementOne()
        {
            this.count--
        },
        resultSumma(sum, count)
        {
            var summa = Number.parseInt((sum * 100) / 100).toFixed(2)*Number(count)
            return this.priceFormat(summa)
        },
        inCrement(id) {
            var item = this.card.find(item => item.id === id);
            item.count++;
            item.summa = Number.parseInt((item.price * 100) / 100).toFixed(2)*Number(item.count);
            this.saveCart();
        },
        deCrement(id) {
            var item = this.card.find(item => item.id === id);
            item.count--;
            item.summa = Number.parseInt((item.price * 100) / 100).toFixed(2)*Number(item.count);
            this.saveCart();
        },
        addToCard(e) {
            var added = JSON.parse(localStorage.getItem('cart'));
            var arr = added ? added : [added];
            const el = document.querySelector('#card'+e);
            // e.target.dataset.card;
            const {...card} = el.dataset.card.split(',');
            const add = {
                id: card[0],
                article: card[1],
                name: card[2],
                count: card[3],
                price: card[4],
                summa: card[5],
                image: card[6]
            }
            var total = arr.filter(el => el != null).concat(add);
            toastr.success(`Добавлен в корзину`, `Товар "${card[2]}"`, {
                positionClass:"toast-bottom-left",
                containerId:"toast-bottom-left"
            });
            localStorage.setItem('cart', JSON.stringify(total));
            this.card.push(add);
            this.saveCart();
        },
        rootsObjectValues(goods) {
            return Object.values(goods).map((value) => ({
                quantity: Number(value.count),
                price: Number(value.price),
                discount: 0,
                vat: 20,
                assortment: {
                    meta: {
                        href: `https://online.moysklad.ru/api/remap/1.2/entity/product/${value.id}`,
                        type: "product",
                        mediaType: "application/json"
                    }
                },
                reserve: 0
            }));
        },
        async Checkout() {
            const roots = this.rootsObjectValues(this.card);
            var positions = {
                positions: roots
            };
            this.сheckout = positions
            localStorage.setItem('сheckout', JSON.stringify(positions));
        },
        removeCart(x) {
            this.card.splice(x, 1);
            this.saveCart();
            if(this.card.length === 0) {
                localStorage.removeItem('сheckout');
                window.location.assign('/products/mersedes-benz');
            }
        },
        saveCart() {
            const parsed = JSON.stringify(this.card);
            localStorage.setItem('cart', parsed); 
        },
        getApproveCookie() {
            this.cookie = false
            localStorage.setItem('cookie', JSON.stringify('false'));
        }
    }
});

var scroll_position = 0;
window.addEventListener('scroll', function () {
    scroll_position = window.scrollY;
    //console.log('scroll position', window.scrollY);
});

const smoothLinks = document.querySelectorAll('a[href^="#"]');
for (let smoothLink of smoothLinks) {
    smoothLink.addEventListener('click', function (e) {
        e.preventDefault();
        const id = smoothLink.getAttribute('href');

        document.querySelector(id).scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    });
};

const links = document.querySelectorAll('.nav-link');

for (let link of links) {
    link.addEventListener('click', () => {
        let activeLink = document.querySelector('.nav-link.active');
        if (activeLink) {
            activeLink.classList.remove('active');
        }
        link.classList.add('active');
    })
}


function changeTotal(value) {
    var count = document.getElementById('count');
    var quantity = document.getElementById('quantity');
    var total = document.getElementById('total');
    var remove = document.getElementById('remove');
    count.innerText === total.innerText || count.innerText === 1 ? 
        remove.disabled = true : remove.disabled = false;  
    console.log('summa', summa.innerText );      
    if(value === 'add') {
        count.innerText > 1 ? remove.disabled = true : remove.disabled = false;
        summa.innerText = parseFloat(price.innerText)*(Number(count.innerText)+1);
        total.innerText === count.innerText ? count.innerText = total.innerText : count.innerText++
        quantity.innerText <= 0 ? quantity.innerText = 'больше нет' : quantity.innerText--
    } else {
        summa.innerText = price.innerText === summa.innerText ? 
            price.innerText : 
            summa.innerText-parseFloat(price.innerText);
        
        quantity.innerText <= 0 ? quantity.innerText-- : quantity.innerText++
        count.innerText <= 1 ? count.innerText = 1 : count.innerText--
    } 
}
//summa.innerHTML = parseInt(summa.innerText).toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");


let modal = new bootstrap.Modal(document.querySelector('#searchForm'));
let input = document.querySelector('input[type="search"]');

var loadingpage = document.getElementById('loadingpage');
const loaderText = `<span class="spin"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" width="20" height="20"><path d="M196 725q-20-36-28-72.5t-8-74.5q0-131 94.5-225.5T480 258h43l-80-80 39-39 149 149-149 149-40-40 79-79h-41q-107 0-183.5 76.5T220 578q0 29 5.5 55t13.5 49l-43 43Zm280 291L327 867l149-149 39 39-80 80h45q107 0 183.5-76.5T740 577q0-29-5-55t-15-49l43-43q20 36 28.5 72.5T800 577q0 131-94.5 225.5T480 897h-45l80 80-39 39Z"/></svg></span> Ищем деталь...`;
function move() {
    var elem = document.getElementById("progressbar");
    document.querySelector('.progress').style.display = 'block';
    var width = 0;
    var id = setInterval(frame, 300);
    function frame() {
        if (width >= 100) {
            clearInterval(id);
        } else {
            width++;
            elem.style.width = width + '%';
        }
    }
}
function loadingPage() {
    // if (document.readyState === "complete") {
    //     console.log('Страница загрузилась');
    // }
    move();
    if(loadingpage) loadingpage.innerHTML = loaderText;
}
document.querySelectorAll('input[list]').forEach( (formfield) => {
    var datalist = document.getElementById(formfield.getAttribute('list'));
    var lastlength = formfield.value.length;
    var checkInputValue = function (inputValue) {
        if (inputValue.length - lastlength > 1) {
            datalist.querySelectorAll('option').forEach( function (item) {
            if (item.value === inputValue) {
                move();
                if(loadingpage) loadingpage.innerHTML = loaderText;
                formfield.form.submit();
            }
            });
        }
        lastlength = inputValue.length;
    };
    formfield.addEventListener('input', function () {
        checkInputValue(this.value);
    }, false);
});
function getResult()
{
    move();
    if(loadingpage) loadingpage.innerHTML = loaderText;
    document.querySelector('#sendForm').submit()
}


//var clearmenu = document.querySelector('.nocontext');
// var contextmenu = document.getElementById('contextmenu');
// var menu = document.getElementById('shop');

// menu.oncontextmenu = function (e) { 
//     e.preventDefault();
//     const res = {
//         position: 'absolute',
//         display: 'block',
//         top: e.clientY+'px',
//         left: e.clientX+'px'
//     }
//     if(e.button === 2){
//         // console.log('res:', `
//         // Screen X/Y: ${e.screenX}, ${e.screenY}
//         // Client X/Y: ${e.clientX}, ${e.clientY}`)
//         contextmenu.style.cssText = Object.entries(res)
//             .map(([k, v]) => k + ':' + v)
//             .join(';');
//     }
//     return false;
// };

// function noPrintMenu()
// {
//     menu.oncontextmenu = function (e) { 
//         return false;
//     }
// }


// document.addEventListener('mouseup', function(e) {
//     contextmenu.style.display = '';
//     if (!menu.contains(e.target)) {
//         //console.log('target:', e.target)
//     }
// });

window.addEventListener('keydown', (e) => {
    if (e.code == 'KeyX' && (e.ctrlKey || e.metaKey)) { //  || e.shiftKey
        modal.hide();
        e.preventDefault();
    }
});

document.addEventListener('keydown', (event) => {
    if (event.code == 'KeyF' && (event.ctrlKey || event.metaKey)) { //  || event.shiftKey
        modal.show();
        event.preventDefault();
    }
});

document.addEventListener('keydown', (event) => {
    if (event.code == 'KeyS' && (event.ctrlKey || event.metaKey)) {
        let confirmAction = confirm('Хотите распечатать страницу ?');
        confirmAction ? window.print() : '';
        event.preventDefault();
    }
});

function isError()
{
    Swal.fire({
        title: 'Материал временно не доступен',
        text: 'Ведутся технические работы.',
        icon: 'warning',
        confirmButtonColor: '#8630a3',
        confirmButtonText: 'Закрыть'
    })
}

function getReviewYandex()
{
    Swal.fire({
        title: 'Отзыв о товаре',
        html: `Для того чтобы отзывы были достоверными, 
        мы предлагаем отставлять их в "Яндекс.Картах", нам важно ваше мнение.`,
        icon: false,
        showCancelButton: true,
        confirmButtonText: '✎ Написать отзыв',
        cancelButtonText: '✖ Закрыть',
        confirmButtonColor: '#8630a3',
        cancelButtonColor: '#111',
        allowOutsideClick: false,
        customClass: {
            title: 'text-dark',
            cancelButton: ['d-flex', 'align-items-center', 'gap-2'],
            confirmButton: ['d-flex', 'align-items-center', 'gap-2'],
            htmlContainer: 'text'
        }
    }).then((result) => {
        if (result.isConfirmed) {
            window.open(
                'https://yandex.ru/profile/8347363005?intent=reviews&utm_source=badge&utm_medium=rating&utm_campaign=v1',
                '_blank'
            );
        }
    });
}

async function isUserSubscribe()
{
    const { value: email } = await Swal.fire({
        title: 'Данной запчасти нет в наличии',
        html: `Вы можете подписаться, чтобы первыми узнать о поступлении товара, 
        либо связаться с нашим менеджером 
        <br /><a href="tel:89017331866" class="text-decoration-none fw-bold">+7 (901) 733-18-66</a>`,
        input: 'email',
        inputPlaceholder: 'Укажите ваш e-mail...',
        showCancelButton: true,
        confirmButtonText: '✎ Подписаться',
        cancelButtonText: '✖ Отмена',
        confirmButtonColor: '#8630a3',
        cancelButtonColor: '#111',
        allowOutsideClick: false,
        customClass: {
            icon: ['text-danger', 'border-danger'],
            title: 'text-dark',
            cancelButton: ['d-flex', 'align-items-center', 'gap-2'],
            confirmButton: ['d-flex', 'align-items-center', 'gap-2'],
            htmlContainer: 'text'
        }
        // inputValidator: (value) => {
        //     if (!value) {
        //         return 'Неверный адрес электронной почты !'
        //     }
        // }
    });
    if (email) {
        Swal.fire(`Entered email: ${email}`)
    }
}

function isNotSignUp()
{
    Swal.fire({
        title: 'Товара нет в наличии',
        html: `Вы можете связаться с нашим менеджером чтобы оформить предзаказ, или зарегистрироваться.
        <br /><a href="tel:89017331866" class="text-decoration-none fw-bold">+7 (901) 733-18-66</a>`,
        icon: false,
        iconHtml: `
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" width="48" height="48">
            <path fill="#dc3545" d="M289.788 976Q260 976 239 954.788q-21-21.213-21-51Q218 874 239.212 853q21.213-21 51-21Q320 832 341 853.212q21 21.213 21 51Q362 934 340.788 955q-21.213 21-51 21Zm404 0Q664 976 643 954.788q-21-21.213-21-51Q622 874 643.212 853q21.213-21 51-21Q724 832 745 853.212q21 21.213 21 51Q766 934 744.788 955q-21.213 21-51 21ZM480 472q-14.45 0-24.225-9.775Q446 452.45 446 438q0-14.45 9.775-24.225Q465.55 404 480 404q14.45 0 24.225 9.775Q514 423.55 514 438q0 14.45-9.775 24.225Q494.45 472 480 472Zm-30-136V136h60v200h-60ZM290 769q-42 0-61.5-34t.5-69l61-111-150-319H62v-60h116l170 364h292l156-280 52 28-153 277q-9.362 16.667-24.681 25.833Q655 600 634 600H334l-62 109h494v60H290Z"/>
        </svg>
        `,
        showCancelButton: true,
        confirmButtonText: '✎ Регистрация',
        cancelButtonText: '✖ Закрыть',
        confirmButtonColor: '#8630a3',
        cancelButtonColor: '#111',
        allowOutsideClick: false,
        customClass: {
            icon: ['text-danger', 'border-danger'],
            title: 'text-dark',
            cancelButton: ['d-flex', 'align-items-center', 'gap-2'],
            confirmButton: ['d-flex', 'align-items-center', 'gap-2'],
            htmlContainer: 'text'
        }
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.assign('/signup');
        }
    });
}

function startGoods()
{
    window.location.assign('/products/mersedes-benz');
}

var searchModal = document.getElementById('searchForm')
var searchInput = document.getElementById('search')
searchInput.focus()

searchModal.addEventListener('shown.bs.modal', function () {
    searchInput.focus()
});

function selectOffset() {
    var url = document.getElementById("selectOffset").value;
    window.location.assign(url);
}

const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));