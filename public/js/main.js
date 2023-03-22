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

new Vue({
    el: '#shop', 
    data: {
        card: 0
    }
});



let modal = new bootstrap.Modal(document.querySelector('#searchForm'));
let input = document.querySelector('input[type="search"]');

function getResult()
{
    document.querySelector('#sendForm').submit()
}

document.querySelectorAll('input[list]').forEach( (formfield) => {
    var datalist = document.getElementById(formfield.getAttribute('list'));
    var lastlength = formfield.value.length;
    var checkInputValue = function (inputValue) {
        if (inputValue.length - lastlength > 1) {
            datalist.querySelectorAll('option').forEach( function (item) {
            if (item.value === inputValue) {
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

var contextmenu = document.getElementById('contextmenu');
var menu = document.getElementById('shop');
menu.oncontextmenu = function (e) { 
    e.preventDefault();
    const res = {
        position: 'absolute',
        display: 'block',
        top: e.clientY+'px',
        left: e.clientX+'px'
    }
    if(e.button === 2){
        // console.log('res:', `
        // Screen X/Y: ${e.screenX}, ${e.screenY}
        // Client X/Y: ${e.clientX}, ${e.clientY}`)
        contextmenu.style.cssText = Object.entries(res)
            .map(([k, v]) => k + ':' + v)
            .join(';');
    }
    return false;
};

document.addEventListener('mouseup', function(e) {
    
    contextmenu.style.display = '';
    if (!menu.contains(e.target)) {
        //console.log('target:', e.target)
    }
});

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
        title: 'Подписка на запчасть',
        text: 'Данной запчасти нет в наличии, поэтому, вы можете подписаться, чтобы первыми узнать о поступлении товара в наш интернет магазин.',
        input: 'email',
        //inputLabel: 'Your email address',
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
            container: 'text'
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
        html: 'Не зарегистрированные пользователи<br /> не могут оформить предзаказ.',
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

function addInCard()
{
    toastr.success('Маслянный фмльтр', 'Товар добавлен в карзину', {
        positionClass:"toast-bottom-left",
        containerId:"toast-bottom-left"
    });
}