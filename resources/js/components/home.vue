<template>
    <v-app>
      <v-row align="center" justify="space-around">
        <v-btn @click="redirect('/product')">
          จัดการสินค้า
        </v-btn>
      </v-row>
    </v-app>
</template>

<script>
export default {
    data() {
      return {
        products: [],
        product: null,
      };
    },

    mounted() {
      this.initialize();
      console.log("Initialized");
    },

    methods: {
      redirect(url){
        window.location.href = url
      },


      initialize() {
        axios
          .get("api/products")
          .then((response) => {
            if (response.data.success == true) {
              this.products = response.data.products;
            } else {
              console.log("fail");
            }
          })
          .catch((error) => {
            console.log("error");
          });
      },
    },
};
</script>
