new Vue({
    el: '#shop', 
    data: {
        card: [],
        сheckout: [],
        loading: true,
        cookie: true,
        amount: 0,
        totalsumma: 0,
        name: '',
        phone: '',
        email: '',
        address: ''
    },
    computed: {
        totalSum: function () {
            var sum = this.card.reduce(
                (acc, current) => acc + Number(current.summa), 0
            );
            this.totalsumma = sum        
        },
        totalAmount: function () {
            var value = this.card.reduce(
                (acc, current) => acc + Number(current.count), 0
            );
            this.amount = value;
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
        inCrement(id) {
            var item = this.card.find(item => item.id === id);
            item.count++;
            item.summa = parseFloat(item.summa)*Number(item.count);
            this.saveCart();
        },
        deCrement(id) {
            var item = this.card.find(item => item.id === id);
            if(item.count = 1) {
                item.count = 1
                item.summa = parseFloat(item.summa)/2;
            } else {
                item.count--;
                item.summa = parseFloat(item.summa)/item.count;                
            }
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
                summa: card[5]
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
        async Checkout(x) {

            const roots = this.rootsObjectValues(this.card);
            
            var cart = {
                organization: {
                    meta: {
                        href: 'https://online.moysklad.ru/api/remap/1.2/entity/organization/218c26ab-33fe-11ed-0a80-0285001db7b3',
                        type: 'organization',
                        mediaType: 'application/json'
                    }
                },
                agent: {
                    meta: {
                        href: `https://online.moysklad.ru/api/remap/1.2/entity/counterparty/${x}`,
                        type: 'counterparty',
                        mediaType: 'application/json'
                    }
                },
            };
            var positions = {
                positions: roots
            };
            this.сheckout = positions
            localStorage.setItem('сheckout', JSON.stringify(positions));
            // btoa(encodeURIComponent(JSON.stringify(positions)))
            
            // 
            // Object.assign({}, cart, positions);
            // setTimeout(function () {

            //     toastr.success('Ваш заказ получен.', 'Успешно', {
            //         positionClass:"toast-bottom-left",
            //         containerId:"toast-bottom-left"
            //     });
            //     window.location.assign(`/checkout/${this.сheckout}`);
            //     //localStorage.removeItem('cart');
            // }.bind(this), 1000);
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


var price = document.getElementById("price");
var summa = document.getElementById("summa");
//console.log('price', price.innerText );


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
const loaderText = '<span class="material-symbols-outlined spin">autorenew</span> Ищем деталь...';
function move() {
    var elem = document.getElementById("progressbar");
    document.querySelector('.progress').style.display = 'block';
    var width = 0;
    var id = setInterval(frame, 100);
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
    if (e.code == 'KeyX' && (e.ctrlKey || e.shiftKey || e.metaKey)) {
        modal.hide();
        e.preventDefault();
    }
});

document.addEventListener('keydown', (event) => {
    if (event.code == 'KeyF' && (event.ctrlKey || event.shiftKey || event.metaKey)) {
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
        confirmButtonText: '<span class="material-symbols-outlined">edit_note</span>Подписаться',
        cancelButtonText: '<span class="material-symbols-outlined">close</span>Отмена',
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
        iconHtml: '<span class="material-symbols-outlined">production_quantity_limits</span>',
        showCancelButton: true,
        confirmButtonText: '<span class="material-symbols-outlined">edit_note</span>Регистрация',
        cancelButtonText: '<span class="material-symbols-outlined">close</span>Закрыть',
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