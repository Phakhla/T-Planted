<template>
    <v-app>
    <v-container fluid>
      <v-row dense>
        <v-col
          v-for="products in products"
          :key="products.id"
          :cols="4"
        >
          <v-card>
            <v-img
              
              class="white--text align-end"
              gradient="to bottom, rgba(0,0,0,.1), rgba(0,0,0,.5)"
              height="200px"
            >
              <v-card-title v-text="products.name" ></v-card-title>
            </v-img>

            <v-card-actions>
              <v-spacer></v-spacer>

              <v-btn icon>
                <v-icon>mdi-heart</v-icon>
              </v-btn>

              <v-btn icon>
                <v-icon>mdi-bookmark</v-icon>
              </v-btn>

              <v-btn icon>
                <v-icon>mdi-share-variant</v-icon>
              </v-btn>
            </v-card-actions>
          </v-card>
        </v-col>
      </v-row>
    </v-container>
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
