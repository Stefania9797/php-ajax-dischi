<?php 
require __DIR__ . '/templates/head.php';
?>

<body>
<div id="root">
        <header>
            <img src="./dist/img/logo-small.svg" alt="">
        </header>
        <div class="container">
            <div class="card"
            v-for="album in albums">
                <div class="cover">
                    <img :src="album.poster">
                </div>
                <div class="info">
                    <h3>{{album.title}}</h3>
                    <h5>{{album.author}}</h5>
                    <h5>{{album.year}}</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- vue -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <!-- js -->
    <script src="./dist/js/app.js"></script>
</body>
</html>
