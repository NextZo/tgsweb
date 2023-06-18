@extends('template')
@section('main')
    <section id="jumbotron">
        <div class="jumbotron">
            <h1 class="jumbotron-title">
                Get Your dreams Outfits here!
            </h1>
            <div class="header-flex">
                <div>
                    <h1 class="jumbotron-text" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="2500"
                        data-aos-once="true">
                        E-Shop
                        <br />
                        Come and see our products! <br />
                        <span style="color: #f4a261">LIMITED DISCOUNT!</span>
                    </h1>
                    <div class="mini-text-flex">
                        <p class="mini-text">Discover now!</p>
                        <button id="icon-up" onclick="changeText()">
                            <i class="far fa-hand-point-up"></i>
                        </button>
                        <button id="icon-down" class="icon-down">
                            <i class="far fa-hand-point-down"></i>
                        </button>
                    </div>
                </div>
                <div>
                    <img onmouseover="changeImage(this)" onmouseout="changeImageBack(this)" class="jumbotron-img"
                        src="assets/HEADER1.png" alt="" width="700" height="auto" data-aos="fade-down"
                        data-aos-duration="2000" data-aos-delay="2500" />
                </div>
            </div>
        </div>
    </section>

    <svg class="wave1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#7c8d94" fill-opacity="1"
            d="M0,96L80,90.7C160,85,320,75,480,96C640,117,800,171,960,181.3C1120,192,1280,160,1360,144L1440,128L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
        </path>
    </svg>
    <svg class="wave2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffffff" fill-opacity="1"
            d="M0,96L80,90.7C160,85,320,75,480,96C640,117,800,171,960,181.3C1120,192,1280,160,1360,144L1440,128L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
        </path>
    </svg>

    <section id="slider" class="section-slider">
        <div class="image-slider">
            <div class="slide active">
                <img src="assets/tshirt.png" alt="" />
                <div class="slide-text">
                    <h2>Baju kaos</h2>
                    <p>Simple.Cool.Berkualitas</p>
                </div>
            </div>
            <div class="slide">
                <img src="assets/shirt.png" alt="" />
                <div class="slide-text">
                    <h2>Kemeja</h2>
                    <p>
                        Kemeja sangat cocok untuk dipakai ke
                        berbagai acara!
                    </p>
                </div>
            </div>
            <div class="slide">
                <img src="assets/hoddie.png" alt="" />
                <div class="slide-text">
                    <h2>Hoddie</h2>
                    <p>Stylish dan cocok untuk musim dingin.</p>
                </div>
            </div>
            <div class="slide">
                <img src="assets/Suit.png" alt="" />
                <div class="slide-text">
                    <h2>Jas</h2>
                    <p>
                        Elegant,cocok digunakan untuk acara
                        penting
                    </p>
                </div>
            </div>
            <div class="slide">
                <img src="assets/sweater.png" alt="" />
                <div class="slide-text">
                    <h2>Sweater</h2>
                    <p>
                        Stylish,cocok digunakan saat musim
                        dingin karena memiliki lengan yang
                        panjang
                    </p>
                </div>
            </div>

            <div class="navigation">
                <div class="slider-btn active"></div>
                <div class="slider-btn"></div>
                <div class="slider-btn"></div>
                <div class="slider-btn"></div>
                <div class="slider-btn"></div>
            </div>
        </div>
    </section>

    <div class="main-content">
        <div class="content">
            <article id="my-project">
                <h3 class="article-title">Product</h3>
                <div class="project-container">
                    <div class="project">
                        <img src="assets/desert-rally.png" alt="" width="300px" height="210px" />
                        <h4 class="project-title">
                            Desert Rally
                        </h4>
                        <p class="project-description">
                            Desert Rally Game is using Scratch
                            3 as a platform
                        </p>
                    </div>
                    <div class="project">
                        <img src="assets/memory-game.png" alt="" width="300px" height="210px" />
                        <h4 class="project-title">
                            Memory Game
                        </h4>
                        <p class="project-description">
                            Memory Game is using Phaser as a
                            Javascript Framework
                        </p>
                    </div>
                </div>
                <div class="project-container">
                    <div class="project">
                        <img src="assets/platformer.png" alt="" width="450px" height="210px" />
                        <h4 class="project-title">
                            Platformer
                        </h4>
                        <p class="project-description">
                            Platformer Game is using Construct
                            3 as a platform
                        </p>
                    </div>
                    <div class="project">
                        <img src="assets/florist-shop.png" alt="" width="450px" height="210px" />
                        <h4 class="project-title">
                            Flower Shop Website
                        </h4>
                        <p class="project-description">
                            E-commerce Website for Flowers and
                            Bouquet Shop
                        </p>
                    </div>
                </div>
            </article>
            <article id="video"></article>
            <article id="maps">
                <div class="maps">
                    <h3 class="article-title">Location</h3>
                    <div class="location">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.938228493087!2d107.64282637497075!3d-6.89799176750419!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e797d4ff9d55%3A0x7255df8d69db4d3a!2sUniversitas%20Widyatama!5e0!3m2!1sid!2sid!4v1687083183505!5m2!1sid!2sid"
                            width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                            width="500" height="350"
                            style="border: 0"
                            allowfullscreen="" loading="lazy"
                            ></iframe>
                        <div class="maps-text">
                            <!-- <h3>Timedoor Coding Academy</h3>
                            <p>Timedoor Coding Academy adalah bagian dari PT Timedoor Indonesia, <br>
                            tempat penulis belajar konsep programming sehingga bisa membuat Blog ini.</p> -->
                        </div>
                    </div>
                </div>
            </article>
            <div class="audio">
                <audio controls>
                    <source src="" />
                </audio>
            </div>
        </div>
        <!-- <aside>
            <div>
                <h3>What is Coding?</h3>
                <iframe class="video" width="200" height="auto" src="https://www.youtube.com/embed/XMZFUnAgOqs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h3>Coding is Not Difficult !</h3>
                <iframe width="200" height="auto" src="https://www.youtube.com/embed/hb7Q33ysCwI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </aside> -->
    </div>
@endsection
