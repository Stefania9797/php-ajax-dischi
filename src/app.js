const root = new Vue({
    el: '#root',
    data: {
      albums: null
    },
    methods: {
  
    },
    mounted() {
      axios.get('./api/albums.php')
        .then(resp => {
          console.log(resp);
          this.albums = resp.data
        }).catch(e => {
          console.log(e);
        })
    }
  })