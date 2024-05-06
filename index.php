<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/vue@3"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
    <div id="app">
        <header>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="ms-box-logo">
                            <img class="img-fluid" src="https://m.media-amazon.com/images/I/51rttY7a+9L.png" alt="logo">
                        </div>
                    </div>
                    <div class="col-6">
                        <h1 class="text-white">Top album</h1>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <div class="container">
                <div class="row flex-wrap">
                    <div class="col-4" v-for="disco in dischi" :key="disco.title">
                        <div class="card-group mt-5 mb-5">
                            <div class="card me-4" >
                                <img class="card-img-top" :src="disco.poster" alt="{{ disco.title }}">
                                <div class="card-body text-white text-center">
                                    <h5 class="card-title">  {{ disco.title }} </h5>
                                    <p class="card-text"> {{ disco.author }} </p>
                                    <p class="card-text"><small> {{ disco.year }} </small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script type="text/javascript" src="./js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>