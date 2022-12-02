<template>
    <div class="row card">
        <div class="row hide" v-bind:class="{ show: category !== 'men\'s clothing' && category !== 'women\'s clothing', card_background: true }">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <span class="u-align--center hide_button"
                        v-bind:class="{ show_button: category !== 'men\'s clothing' && category !== 'women\'s clothing' }">This product
                        is unavailable to show</span>
                    <button v-on:click="increment" class="hide_button"
                        v-bind:class="{ show_button: category !== 'men\'s clothing' && category !== 'women\'s clothing' }">Next
                        Product</button>
                </div>
            </div>
        </div>
        
        <div class="col-small-3 col-medium-3 col-5" v-bind:class="{ hide: category !== 'men\'s clothing' && category !== 'women\'s clothing' }">
            <img class="p-image u-align--center" v-bind:src="image" alt="" v-bind:class="{ hide_button: category !== 'men\'s clothing' && category !== 'women\'s clothing' }">
        </div>
        <div class="col-small-1 col-medium-3 col-6"  v-bind:class="{ hide: category !== 'men\'s clothing' && category !== 'women\'s clothing' }">
            <div class="row p-divider u-align-text--left">
                <div class="col-6">
                    <h2 id="title" v-bind:class="{ pria_text: category === 'men\'s clothing', wanita_text: category === 'women\'s clothing', hide_button: category !== 'men\'s clothing' && category !== 'women\'s clothing' }">{{ title }}</h2>
                    <div class="row">
                        <div class="col-3">
                            <p id="category">{{ category }}</p>
                        </div>
                        <div class="col-3 u-align-text--right">
                            <p>{{ rate }}/5</p>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="col-6 u-sv3">
                    <p>{{ description }}</p>
                    <hr>
                </div>
                <div class="col-6">
                    <h2 id="price" v-bind:class="{ pria_text: category === 'men\'s clothing', wanita_text: category === 'women\'s clothing', hide_button: category !== 'men\'s clothing' && category !== 'women\'s clothing' }">${{ price }}</h2>
                    <div class="row">
                        <div class="col-3 u-align--center button">
                            <button id="buy" v-bind:class="{ pria_button: category === 'men\'s clothing', wanita_button: category === 'women\'s clothing', hide_button: category !== 'men\'s clothing' && category !== 'women\'s clothing' }">Buy Now</button>
                        </div>
                        <div class="col-3 u-align--center button">
                            <button v-on:click="increment" id="next" v-bind:class="{ pria_border: category === 'men\'s clothing', wanita_border: category === 'women\'s clothing', hide_button: category !== 'men\'s clothing' && category !== 'women\'s clothing' }">Next Product</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-small-1 col-medium-3 col-1" v-bind:class="{ hide: category !== 'men\'s clothing' && category !== 'women\'s clothing', hide_button: category !== 'men\'s clothing' && category !== 'women\'s clothing' }">
        </div>
    </div>
</template>

<script>

import axios from 'axios'

export default {
    name: 'ProductDisplay',
    data() {
        return {
            list: undefined,
            image: "",
            title: "",
            category: "",
            rate: "",
            description: "",
            price: "",
            count: 0,
        }
    }, 
    methods: {
        getData(){
            axios.get('https://fakestoreapi.com/products/')
                .then((resp) => {
                    this.list = resp.data[this.count];
                    this.image = this.list['image'];
                    this.title = this.list['title'];
                    this.category = this.list['category'];
                    this.rate = this.list['rating']['rate'];
                    this.description = this.list['description'];
                    this.price = this.list['price'];
                    this.bodyBackground(this.category);
                })
        },
        increment() {
            if (this.count <= 18) {
                this.count++
                this.getData();
            } else{
                this.count = 0;
                this.getData();
            }
        },
        bodyBackground() {
            if (this.category == "men's clothing") {
                document.body.classList.remove('body_background_wanita');
                document.body.classList.remove('body_background_lain');
                document.body.classList.add('body_background_pria');
            } else if (this.category == "women's clothing") {
                document.body.classList.remove('body_background_pria');
                document.body.classList.remove('body_background_lain');
                document.body.classList.add('body_background_wanita');
            } else {
                document.body.classList.remove('body_background_pria');
                document.body.classList.remove('body_background_wanita');
                document.body.classList.add('body_background_lain');
            }
        },
    },
    mounted(){
        axios.get('https://fakestoreapi.com/products/')
            .then((resp) => {
                this.list = resp.data[this.count];
                this.image = this.list['image'];
                this.title = this.list['title'];
                this.category = this.list['category'];
                this.rate = this.list['rating']['rate'];
                this.description = this.list['description'];
                this.price = this.list['price'];
                this.bodyBackground(this.category);
            });
    },
}
</script>