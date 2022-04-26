const app = new Vue({
  el: "#app",
  data:{
    albums:[],
    filteredAlbums:[],
    selectedGenre : '',
    genres:[]
  },
  created(){
    axios.get("http://localhost:8888/04-22%20php%20ajax/php-ajax-dischi/server/controller.php")
    .then(response =>{
      this.albums=response.data;
      this.filteredAlbums=this.albums
    })
    .catch(error=>{
      console.log(error);
    });

    axios.get("http://localhost:8888/04-22%20php%20ajax/php-ajax-dischi/server/controllerGenres.php")
      .then((response)=>{
        console.log(response);
        this.genres = response.data;
      })
      .catch((error) => {
        console.log(error);
    });
  },
  methods:{
    filterAlbulms(){
      if (this.selectedGenre == 'all'){
          this.filteredAlbums = this.albums;
      } else {
          this.filteredAlbums = this.albums.filter((album) => album.genre.toLowerCase() == this.selectedGenre.toLowerCase());
      }
    }
  },
})