
    // import { province_list } from './js/area';
let vm = new Vue({
    el: "#clform",
    data() {
        return {
            // areaList: province_list,
            form: {
                name: '',
                product: '',
                quan: '',
                price: '',
                areaDetail: '',
                email: '',
                words:'',
                phonNumber: ''
            },
            socket: '',
            a1: '',
            a2: '',
            a3: ''
        }
    },
    mounted() {
        this.socket = io.connect('http://127.0.0.1:8081');

    },
    methods: {
        checkForm() {
            let data = [];
            console.log(`data is `);
            data.push(this.form);
            console.log(`data is `, JSON.stringify(data));
            this.socket.emit('product', data);
        }
        
    }
})