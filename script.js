
var app = new Vue({
  el: '#app',
  data: {
    items: [{
        product: 'Green Tea',
        quantity: 3,
        price: 2,
        done: false,
        image: null
      },
      {
        product: 'Kinder Eggs',
        quantity: 10,
        price: 0.5,
        done: false,
        image: null
      },

    ],
    addingProduct: false,
    price: 0,
    quantity: 0,
  },

  computed: {
    subtotal() {
      return this.items.map((item) => {
        return Number(item.quantity * item.price).toFixed(2)
      });
    },
    total() {
      return this.items.reduce((total, item) => {
        return (total + item.quantity * item.price)
      }, 0).toFixed(2);
    },
  },
  methods: {

    addNewProduct: function () {
      this.items.push({
        product: this.product,
        quantity: this.quantity,
        price: this.price,
        done: false
      });

    },
    removeProduct(index) {
      this.items.splice(index, 1);
    },
    editProduct() {
      this.addingProduct = true;
    },
    uneditProduct() {
      this.addingProduct = false;
    },
    itemBought(item) {
      const boughtIndex = this.items.indexOf(item);
      this.items[boughtIndex].done = true;
    },
  },
});