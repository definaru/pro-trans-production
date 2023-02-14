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