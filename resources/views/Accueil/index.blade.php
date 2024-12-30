<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />

    <title>Web Design Mastery | RentalX</title>
</head>

<body>
    <header>
        <nav>
            <div class="nav__header">
                <div class="nav__logo">
                    <a href="#">RentalX</a>
                </div>
                <div class="nav__menu__btn" id="menu-btn">
                    <i class="ri-menu-line"></i>
                </div>
            </div>
            <ul class="nav__links" id="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#rent">Rent</a></li>
                <li><a href="#service">Services</a></li>
                <li><a href="#ride">Ride</a></li>
                <li><a href="#contact">Contact</a></li>
                <li class="nav__links__btn">
                    <button class="btn">Sign Up</button>
                </li>
                <li class="nav__links__btn">
                    <button class="btn">Sign In</button>
                </li>
            </ul>
            <div class="nav__btns">
                <button class="btn btn__primary" onclick="openModal('signupModal')">Sign Up</button>
                <button class="btn btn__secondary" onclick="openModal('signinModal')">Sign In</button>
            </div>

        </nav>
        <div class="section__container header__container" id="home">
            <div class="header__image">
                <img src="assets/header.png" alt="header" />
            </div>
            <div class="header__content">
                <h1>Looking to save more on your rental car?</h1>
                <p>
                    Discover RentalX car rental aoptions in India with Rent a Car Select
                    from a range of car options and local specials.
                </p>
                <div class="header__links">
                    <a href="#">
                        <img src="assets/store.jpg" alt="app store" />
                    </a>
                    <a href="#">
                        <img src="assets/play.png" alt="play" />
                    </a>
                </div>
            </div>
        </div>
    </header>


    <!-- Modal Sign Up -->

    <div class="modal" id="signupModal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('signupModal')">&times;</span>
            <h2>Sign Up</h2>
            <form method="POST" action="{{ route('user.register') }}">
                @csrf
                <input type="text" name="nom" placeholder="Nom" required />
                @error('nom')
                    {{ $message }}
                @enderror
                <input type="text" name="prenom" placeholder="Prenom" required />
                @error('prenom')
                    {{ $message }}
                @enderror
                <input type="email" name="email" placeholder="Email" required />
                @error('email')
                    {{ $message }}
                @enderror
                <input type="password" name="password" placeholder="Mot de passe" required />
                @error('password')
                    {{ $message }}
                @enderror
                <input type="password" id="password_confirmation" name="password_confirmation"
                    placeholder="Confirmer le mot de passe">
                <button type="submit" class="btn">Sign Up</button>
            </form>
        </div>
    </div>




    <div class="modal" id="signinModal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('signinModal')">&times;</span>
            <h2>Sign In</h2>
            <form method="POST" action="{{route('user.login')}}">
                @csrf
                <input type="email" name="email" placeholder="Email" required />
                @error('email')
                    {{ $message }}
                @enderror
                <input type="password" name="password" placeholder="Mot de passe" required />
                @error('password')
                    {{ $message }}
                @enderror
                <button type="submit" class="btn">Sign In</button>
            </form>
        </div>
    </div>





    <footer>
        <div class="section__container footer__container">

            <div class="footer__col">
                <h4>Our Products</h4>
                <ul class="footer__links">
                    <li><a href="#">Career</a></li>
                    <li><a href="#">Hotels</a></li>
                    <li><a href="#">Cars</a></li>
                    <li><a href="#">Packages</a></li>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Priceline</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4>About RentalX</h4>
                <ul class="footer__links">
                    <li><a href="#">Why RentalX</a></li>
                    <li><a href="#">Our Story</a></li>
                    <li><a href="#">Investors</a></li>
                    <li><a href="#">Press Centers</a></li>
                    <li><a href="#">Advertise</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4>Resources</h4>
                <ul class="footer__links">
                    <li><a href="#">Download</a></li>
                    <li><a href="#">Help Centers</a></li>
                    <li><a href="#">Guides</a></li>
                    <li><a href="#">Partner Network</a></li>
                    <li><a href="#">Mechanics</a></li>
                    <li><a href="#">Developer</a></li>
                </ul>
            </div>


            <div class="footer__col">
                <h4>Extras</h4>
                <ul class="footer__links">
                    <li><a href="#">Rental Deal</a></li>
                    <li><a href="#">Repair Shop</a></li>
                    <li><a href="#">View Booking</a></li>
                    <li><a href="#">Hire Companies</a></li>
                    <li><a href="#">New Offers</a></li>
                </ul>
            </div>


        </div>

        <div class="section__container footer__bar">
            <h4>RentalX</h4>
            <p>Copyright © 2024 Web Design Mastery. All rights reserved.</p>
            <ul class="footer__socials">
                <li>
                    <a href="#"><i class="ri-facebook-fill"></i></a>
                </li>
                <li>
                    <a href="#"><i class="ri-twitter-fill"></i></a>
                </li>
                <li>
                    <a href="#"><i class="ri-google-fill"></i></a>
                </li>
            </ul>
        </div>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>



<section class="section__container steps__container" id="rent">
    <p class="section__subheader">HOW IT WORKS</p>
    <h2 class="section__header">Rentgo following 3 working steps</h2>
    <div class="steps__grid">
        <div class="steps__card">
            <span><i class="ri-map-pin-fill"></i></span>
            <h4>Choose a location</h4>
            <p>
                Select your desired rental location from our extensive network of
                car rental spots.
            </p>
        </div>
        <div class="steps__card">
            <span><i class="ri-calendar-check-fill"></i></span>
            <h4>Pick-up date</h4>
            <p>
                Specify the date and time you wish to pick up your car with flexible
                scheduling options.
            </p>
        </div>
        <div class="steps__card">
            <span><i class="ri-bookmark-3-fill"></i></span>
            <h4>Book your car</h4>
            <p>
                Browse through our wide range of vehicles and choose the one that
                best suits your needs.
            </p>
        </div>
    </div>
</section>

<section class="section__container service__container" id="service">
    <div class="service__image">
        <img src="assets/service.png" alt="service" />
    </div>
    <div class="service__content">
        <p class="section__subheader">BEST SERVICES</p>
        <h2 class="section__header">
            Feel the best experience with our rental deals
        </h2>
        <ul class="service__list">
            <li>
                <span><i class="ri-price-tag-3-fill"></i></span>
                <div>
                    <h4>Deals for every budget</h4>
                    <p>
                        From economy cars to luxury vehicles, we have something for
                        everyone, ensuring you get the best value for your money.
                    </p>
                </div>
            </li>
            <li>
                <span><i class="ri-wallet-fill"></i></span>
                <div>
                    <h4>Best price guarantee</h4>
                    <p>
                        We ensure you get competitive rates in the market, so you can
                        book with confidence knowing you're getting the best deal.
                    </p>
                </div>
            </li>
            <li>
                <span><i class="ri-customer-service-fill"></i></span>
                <div>
                    <h4>Support 24/7</h4>
                    <p>
                        Our dedicated team is available 24/7 to assist you with any
                        questions or concerns, ensuring a smooth rental experience.
                    </p>
                </div>
            </li>
        </ul>
    </div>
</section>

<section class="section__container experience__container" id="ride">
    <p class="section__subheader">CUSTOMER EXPERIENCE</p>
    <h2 class="section__header">
        We are ensuring the best customer experience
    </h2>
    <div class="experience__content">
        <div class="experience__card">
            <span><i class="ri-price-tag-3-fill"></i></span>
            <h4>Competitive pricing</h4>
        </div>
        <div class="experience__card">
            <span><i class="ri-money-rupee-circle-fill"></i></span>
            <h4>Easier Rent On Your Budget</h4>
        </div>
        <div class="experience__card">
            <span><i class="ri-bank-card-fill"></i></span>
            <h4>Most Felxible Payment Plans</h4>
        </div>
        <div class="experience__card">
            <span><i class="ri-award-fill"></i></span>
            <h4>The Best Extended Auto Warranties</h4>
        </div>
        <div class="experience__card">
            <span><i class="ri-customer-service-2-fill"></i></span>
            <h4>Roadside Assistance 24/7</h4>
        </div>
        <div class="experience__card">
            <span><i class="ri-car-fill"></i></span>
            <h4>Your Choice Of Mechanic</h4>
        </div>
        <img src="assets/experience.png" alt="experience" />
    </div>
</section>

<section class="section__container download__container" id="contact">
    <div class="download__grid">
        <div class="download__content">
            <h2 class="section__header">Download the free RentalX app</h2>
            <p>
                Download the RentalX app to manage your bookings, find exclusive
                deals, and access 24/7 support, all from your mobile device.
            </p>
            <div class="download__links">
                <a href="#">
                    <img src="assets/store.jpg" alt="app store" />
                </a>
                <a href="#">
                    <img src="assets/play.png" alt="play" />
                </a>
            </div>
        </div>
        <div class="download__image">
            <img src="assets/download.png" alt="download" />
        </div>
    </div>
</section>
