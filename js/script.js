const app = new Vue({
  el: "#app",
  data:{
    albums:[],
  },
  created(){
    console.log("ciao");
    axios.get("http://localhost:8888/04-22%20php%20ajax/php-ajax-dischi/server/controller.php")
    .then(response =>{
      this.albums=response.data;
    })
    .catch(error=>{
      console.log(error);
    })
  }
})