<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./assets/style/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <script src="jquery-3.7.1.min.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <title>Premium Teas - Accueil</title>
</head>
<body>
    <header>
        <div class="header_top"><h1>PREMIUM TEAS</h1></div>
        <div class="header_middle">
            <div class="header_middle_empty"></div>
            <div class="header_middle_title"><h2>UNIQUE TEA EXPERIENCE</h2><img src="./assets/img/Flag_of_Canada.svg.png" alt="Drapeau du Canada"></div>
            <div class="header_middle_right">
                <div class="header_middle_right_box">
                    <box-icon name='twitter' type='logo' color='#fff' class="header_middle_right_button"></box-icon>
                    <box-icon name='instagram' type='logo' color='#fff' class="header_middle_right_button"></box-icon>
                    <box-icon name='facebook' type='logo' color='#fff' class="header_middle_right_button"></box-icon>
                </div>
            </div>
        </div>

        <nav>
            <div class="header_nav_box">

                <a href="#">BLACK TEA</a>
                <a href="#">GREEN TEA</a>
                <a href="#">HERBAL</a>
                <a href="#">1LB BAGS</a>
                <a href="#">DECAF</a>
                <a href="#">COLLECTIONS</a>
                <a href="#">FALL TEA</a>
                <a href="#">GIFTS</a>
                <a href="#">MORE</a>
                <a href="#">SALE</a>

                <div class="header_nav_search">
                    <input type="search" name="recherche" id="recherche" placeholder="Search">
                    <box-icon name='search-alt' color='#cecece'></box-icon>
                </div>
                
            </div>
        </nav>
    </header>

    <main>
        <div class="carousel">
            <a href="#" class="slide"><img src="./assets/img/tea1.webp" alt="#"></a>
            <a href="#" class="slide"><img src="./assets/img/tea2.webp" alt="#"></a>
            <a href="#" class="slide"><img src="./assets/img/tea3.webp" alt="#"></a>
            <a href="#" class="slide"><img src="./assets/img/tea4.webp" alt="#"></a>
            <a href="#" class="slide"><img src="./assets/img/tea5.webp" alt="#"></a>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="./assets/script/carousel.js"></script>
    </main>
    
</body>
</html>