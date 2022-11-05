<template>
    <div>
    <star-rating
      @rating-selected ="setRating"
      v-bind:increment="1"
      v-bind:max-rating="5"
      inactive-color="#000"
      active-color="rgb(211, 247, 10)"
      v-bind:star-size="50"
      :show-rating="false"
      :rating="this.score"
    ></star-rating>
   
    //このinputに評価の値を入れる
    <input type="hidden" name="rating" :value="this.rating" />
  </div>
</template>

<sytle>
    
</sytle>

<sctipt>
    export default {
  props: [],
  data: function () {
    return {
      rating: 0,
    };
  },
  methods: {
    setRating: function (rating) {
      this.rating = rating;
    },
   
  },
 
 
};
</sctipt>