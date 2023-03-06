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
    el: '#order',
    data: {
        header: 'Обратная связь',
        name: '',
        phone: '',
        email: '',
        message: '',
        send: false,
        loading: false,
        error_phone: false,
        error_email: false,
        error_names: false,
        error_agree: false,
        error_message: false,
        email_invalid: false,
    },
    computed: {
        isValid () {
            return this.name && this.phone && this.email && this.message
        }
    },
    methods: {
        validEmail() {
            var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(this.email);
        },
        Send() {
            if (this.isValid) {
                setTimeout(function () {
                    this.send = true
                }.bind(this), 1000)
            }
            if(!this.name) {
                this.error_names = true;
            } 
            if(!this.phone) {
                this.error_phone = true;
            }
            if(!this.message) {
                this.error_message = true;
            }
            if(!this.email) {
                this.error_email = true;
            }
            if (this.email !== '' && this.validEmail()) {
                this.email_invalid = true;
            }
        },
        onSubmit() {
            if (!this.isValid) return false;
            alert('Достал!');
            this.loading = true;
            var formdata = new FormData();
            formdata.append('name', this.name);
            formdata.append('email', this.email);
            formdata.append('phone', this.phone);
            formdata.append('message', this.message);
            
            console.log('data:', formdata);
            this.loading = false;
        }
    }
});

let modal = new bootstrap.Modal(document.querySelector('#searchForm'));
let input = document.querySelector('input[type="search"]');
//let searchlist = document.getElementById('searchlist');
// document.getElementById('searchForm').addEventListener('keydown', function () {
//     input.focus();
// })
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