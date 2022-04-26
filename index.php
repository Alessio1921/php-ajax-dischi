<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Dischi</title>
  </head>
  <body>
    <div id="app">
      <header>
        <nav class="navbar d-flex">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Spotify_logo_without_text.svg/300px-Spotify_logo_without_text.svg.png" alt="spotify logo" >
            </a>  
              <select class="form-select ms-2" @change="filterAlbulms" v-model="selectedGenre">
                <option value="all">All</option>
                <option :value="genre.toLowerCase()" v-for="genre in genres">
                  {{ genre }}
                </option>
              </select>
          </div>
        </nav>
      </header>
      <main>
        <div class="container">
          <div class="row row-cols-3 row-cols-md-4 row-cols-lg-5 ">
            <div class="col" v-for="element in filteredAlbums">
            <div class="card my-2 ">
              <img :src="element.img" class="card-img-top p-3 pb-0" alt="...">
              <div class="card-body text-center pt-0">
                <h5 class="card-title text-white">{{element.nameAlbum}}</h5>
                <p class="card-text">{{element.author}}</p>
                <p class="card-text">{{element.year}}</p>
              </div>
            </div>
            </div>
          </div>
        </div>
      </main>
    </div>
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>
