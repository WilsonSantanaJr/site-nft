<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- fonts play -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Play:wght@400;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="css/glider.min.css">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- fontawesome -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
    <?php include 'pages/header.php' ?>

    <main>
        <section class="section">
            <div class="container">
                <div class="home">
                    <div class="text">
                        <h2 class="title">Buy, sell and collect NFTS.</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed iaculis lobortis orci non tincidunt. Nunc congue lectus euismod, a sollicitudin metus semper.</p>
                        <div>
                            <a class="button" href="">Upload</a>
                            <a class="button" href="">Explore</a>
                        </div>
                    </div>
                    <div class="image">
                        <img src="assets/images/Monkey-NFTs.png" alt="NFTs de macacos como rei, estatua da liberdade e design">
                    </div>
                </div>
            </div>
        </section>
        
        <div class="ellipse">
            <img src="assets/images/ellipse01.svg">
        </div>

        <section class="section top-collections">
            <div class="container">
                <header>
                    <p>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing</p>
                    <h2>Top Collections over last 7 days</h2>
                </header>


                <div class="glider-contain to-hide-mobile">
                    <div class="c-carousel-slides glider">
                        <div class="c-carousel-slide">
                            <img src="assets/images/top-nfts-01.svg">
                        </div>
                        <div class="c-carousel-slide">
                            <img src="assets/images/top-nfts-01.svg">
                        </div>
                        <div class="c-carousel-slide">
                            <img src="assets/images/top-nfts-01.svg">
                        </div>
                        <div class="c-carousel-slide">
                            <img src="assets/images/top-nfts-01.svg">
                        </div>
                        <div class="c-carousel-slide">
                            <img src="assets/images/top-nfts-01.svg">
                        </div>
                        <div class="c-carousel-slide">
                            <img src="assets/images/top-nfts-01.svg">
                        </div>
                        <div class="c-carousel-slide">
                            <img src="assets/images/top-nfts-01.svg">
                        </div>
                    </div>
                </div>

                <div class="mobile-top-collections to-hide">
                    <div>
                        <img src="assets/images/top-nfts-01.png">
                    </div>
                    <div>
                        <img src="assets/images/top-nfts-02.png">
                    </div>
                    <div>
                        <img src="assets/images/top-nfts-03.png">
                    </div>
                    <div>
                        <img src="assets/images/top-nfts-04.png">
                    </div>
                    <div>
                        <img src="assets/images/top-nfts-05.png">
                    </div>
                    <div>
                        <img src="assets/images/top-nfts-01.png">
                    </div>
                    <div>
                        <img src="assets/images/top-nfts-07.png">
                    </div>
                </div>

                <div class="button-go-to-ranking">
                    <a class="button" href="">Go To Ranking</a>
                </div>
            </div>
        </section>

        <section class="section categories">
            <div class="container">
                <header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                    <h2>Trendin categories</h2>
                </header>

                <div class="to-hide-mobile">
                    <div class="filter-btn-box">
                        <ul class="main-btn button-filter" id="filter-btn-box">
                            <li class="button main-btn filter-btn active" id="all-btn">All</li>
                            <li class="button main-btn filter-btn" id="art-btn">
                                <span><i class="fa-solid fa-palette"></i></span>Art
                            </li>
                            <li class="button main-btn filter-btn" id="music-btn">
                                <span><i class="fa-solid fa-music"></i></span>Music
                            </li>
                            <li class="button main-btn filter-btn" id="photography-btn">
                                <span><i class="fa-solid fa-camera"></i></span>Photography
                            </li>
                            <li class="button main-btn filter-btn" id="collectibles-btn">
                                <span><i class="fa-solid fa-folder"></i></span>Collectibles
                            </li>
                            <li class="button main-btn filter-btn" id="domain-btn">
                                <span><i class="fa-solid fa-palette"></i></span>Domain
                            </li>
                        </ul>
                        <ul class="main-btn button-filter" id="filter-btn-box">
                            <li class="button main-btn filter-btn" id="added-btn">
                                <span><i class="fa-solid fa-arrow-down"></i></span> Recently Added
                            </li>
                        </ul>
                    </div>
                    <div class="cards dev">
                        <div class="card-categories filtr-item project-box art">
                            <div class="img-card-categories">
                                <div class="likes">
                                    <img class="img-fluid" src="assets/images/heart.svg">
                                    <p>322</p>
                                </div>
                                <img src="assets/images/categorie-img.png" alt="">
                            </div>
                            <div>
                                <div class="card-id">
                                    <div class="id-avatar">
                                        <div>
                                            <img src="assets/images/identity.svg" alt="identidade">
                                        </div>
                                        <div>
                                            <h3>Lorem ipsum ape</h3>
                                            <p>By @JSmith</p>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="">...</a>
                                    </div>
                                </div>
                                <div>
                                    <p>O.B ETH 1/1</p>
                                </div>
                                <div class="button-categorie">
                                    <a class="button" href="">buy now</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-categories filtr-item project-box art music">
                            <div class="img-card-categories">
                                <div class="likes">
                                    <img class="img-fluid" src="assets/images/heart.svg">
                                    <p>322</p>
                                </div>
                                <img src="assets/images/categorie-img.png" alt="">
                            </div>
                            <div>
                                <div class="card-id">
                                    <div class="id-avatar">
                                        <div>
                                            <img src="assets/images/identity.svg" alt="identidade">
                                        </div>
                                        <div>
                                            <h3>Lorem ipsum ape</h3>
                                            <p>By @JSmith</p>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="">...</a>
                                    </div>
                                </div>
                                <div>
                                    <p>O.B ETH 1/1</p>
                                </div>
                                <div class="button-categorie">
                                    <a class="button" href="">buy now</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-categories filtr-item project-box photography domain">
                            <div class="img-card-categories">
                                <div class="likes">
                                    <img class="img-fluid" src="assets/images/heart.svg">
                                    <p>322</p>
                                </div>
                                <img src="assets/images/categorie-img.png" alt="">
                            </div>
                            <div>
                                <div class="card-id">
                                    <div class="id-avatar">
                                        <div>
                                            <img src="assets/images/identity.svg" alt="identidade">
                                        </div>
                                        <div>
                                            <h3>Lorem ipsum ape</h3>
                                            <p>By @JSmith</p>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="">...</a>
                                    </div>
                                </div>
                                <div>
                                    <p>O.B ETH 1/1</p>
                                </div>
                                <div class="button-categorie">
                                    <a class="button" href="">buy now</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-categories filtr-item project-box photography collectibles">
                            <div class="img-card-categories">
                                <div class="likes">
                                    <img class="img-fluid" src="assets/images/heart.svg">
                                    <p>322</p>
                                </div>
                                <img src="assets/images/categorie-img.png" alt="">
                            </div>
                            <div>
                                <div class="card-id">
                                    <div class="id-avatar">
                                        <div>
                                            <img src="assets/images/identity.svg" alt="identidade">
                                        </div>
                                        <div>
                                            <h3>Lorem ipsum ape</h3>
                                            <p>By @JSmith</p>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="">...</a>
                                    </div>
                                </div>
                                <div>
                                    <p>O.B ETH 1/1</p>
                                </div>
                                <div class="button-categorie">
                                    <a class="button" href="">buy now</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-categories filtr-item project-box art photography collectibles">
                            <div class="img-card-categories">
                                <div class="likes">
                                    <img class="img-fluid" src="assets/images/heart.svg">
                                    <p>322</p>
                                </div>
                                <img src="assets/images/categorie-img.png" alt="">
                            </div>
                            <div>
                                <div class="card-id">
                                    <div class="id-avatar">
                                        <div>
                                            <img src="assets/images/identity.svg" alt="identidade">
                                        </div>
                                        <div>
                                            <h3>Lorem ipsum ape</h3>
                                            <p>By @JSmith</p>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="">...</a>
                                    </div>
                                </div>
                                <div>
                                    <p>O.B ETH 1/1</p>
                                </div>
                                <div class="button-categorie">
                                    <a class="button" href="">buy now</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-categories filtr-item project-box art photography domain">
                            <div class="img-card-categories">
                                <div class="likes">
                                    <img class="img-fluid" src="assets/images/heart.svg">
                                    <p>322</p>
                                </div>
                                <img src="assets/images/categorie-img.png" alt="">
                            </div>
                            <div>
                                <div class="card-id">
                                    <div class="id-avatar">
                                        <div>
                                            <img src="assets/images/identity.svg" alt="identidade">
                                        </div>
                                        <div>
                                            <h3>Lorem ipsum ape</h3>
                                            <p>By @JSmith</p>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="">...</a>
                                    </div>
                                </div>
                                <div>
                                    <p>O.B ETH 1/1</p>
                                </div>
                                <div class="button-categorie">
                                    <a class="button" href="">buy now</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-categories filtr-item project-box photography domain">
                            <div class="img-card-categories">
                                <div class="likes">
                                    <img class="img-fluid" src="assets/images/heart.svg">
                                    <p>322</p>
                                </div>
                                <img src="assets/images/categorie-img.png" alt="">
                            </div>
                            <div>
                                <div class="card-id">
                                    <div class="id-avatar">
                                        <div>
                                            <img src="assets/images/identity.svg" alt="identidade">
                                        </div>
                                        <div>
                                            <h3>Lorem ipsum ape</h3>
                                            <p>By @JSmith</p>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="">...</a>
                                    </div>
                                </div>
                                <div>
                                    <p>O.B ETH 1/1</p>
                                </div>
                                <div class="button-categorie">
                                    <a class="button" href="">buy now</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-categories filtr-item project-box domain music collectibles">
                            <div class="img-card-categories">
                                <div class="likes">
                                    <img class="img-fluid" src="assets/images/heart.svg">
                                    <p>322</p>
                                </div>
                                <img src="assets/images/categorie-img.png" alt="">
                            </div>
                            <div>
                                <div class="card-id">
                                    <div class="id-avatar">
                                        <div>
                                            <img src="assets/images/identity.svg" alt="identidade">
                                        </div>
                                        <div>
                                            <h3>Lorem ipsum ape</h3>
                                            <p>By @JSmith</p>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="">...</a>
                                    </div>
                                </div>
                                <div>
                                    <p>O.B ETH 1/1</p>
                                </div>
                                <div class="button-categorie">
                                    <a class="button" href="">buy now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="to-hide">
                    <div>
                        <a href="">
                            <img src="assets/images/card-img-mobile01.png" alt="">
                        </a>
                    </div>
                    <div>
                        <a href="">
                            <img src="assets/images/card-img-mobile02.png" alt="">
                        </a>
                    </div>
                    <div>
                        <a href="">
                            <img src="assets/images/card-img-mobile03.png" alt="">
                        </a>
                    </div>
                    <div>
                        <a href="">
                            <img src="assets/images/card-img-mobile04.png" alt="">
                        </a>
                    </div>
                    <div>
                        <a href="">
                            <img src="assets/images/card-img-mobile05.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <div class="ellipse">
            <img src="assets/images/ellipse02.svg">
        </div>

        <section class="section cearte-sell">
            <div class="container">
                <header>
                    <h2>Cearte and sell your NFTs</h2>
                </header>

                <div class="cearte-sell-your-nfts">
                    <div>
                        <img src="assets/images/wallet.svg" alt="">
                        <h3>Set up your wallet</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed iaculis lobortis orci non tincidunt.</p>
                    </div>
                    <img class="line01" src="assets/images/line.svg">
                    <div>
                        <img src="assets/images/folder.svg" alt="">
                        <h3>Create your collection</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed iaculis lobortis orci non tincidunt.</p>
                    </div>
                    <img class="line02" src="assets/images/line.svg">
                    <div>
                        <img src="assets/images/add-nfts.svg" alt="">
                        <h3>Add your NFTs</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed iaculis lobortis orci non tincidunt.</p>
                    </div>
                    <img class="line03" src="assets/images/line.svg">
                    <div>
                        <img src="assets/images/list.svg" alt="">
                        <h3>List them for sale</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed iaculis lobortis orci non tincidunt.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section email">
            <div class="container">
                <header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                </header>
                <form action="">
                    <input class="input-field" type="gmail" placeholder="info@gmail.com">
                    <button class="icon"><img src="assets/images/arrow.svg"></button>
                </form>
            </div>
        </section>
    </main>

    <?php include 'pages/footer.php' ?>

    <script src="js/glider.min.js"></script>
    
    <script src="js/jquery.min.js"></script>
    
    <script src="js/main.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <!-- fontawesome -->
    <script src="js/all.min.js"></script>
    <script src="js/fontawesome.min.js"></script>
</body>
</html>