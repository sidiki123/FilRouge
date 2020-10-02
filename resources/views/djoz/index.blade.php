@include('djoz.layout.menu')
    <!-- Hero Section Begin -->
    <section class="hero spad set-bg" data-setbg="{{asset('assets/img/concert.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero__text">
                        <span>EVTICKET</span>
                        <h1>Pateforme Evenementielle</h1>
                        <p>Acheter et reserver vos tickets pour les evenemenements de prestige  <br /> ou
                        devenez membre afin d'accroitre a visibiité de vos evenements </p>
                        {{-- <a href="https://www.youtube.com/watch?v=K4DyBUG242c" class="play-btn video-popup"><i class="fa fa-play"></i></a> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="linear__icon">
            <i class="fa fa-angle-double-down"></i>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Event Section Begin -->
    <section class="event spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>A venir</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="event__slider owl-carousel">
                        <div class="col-lg-4">
                            <div class="event__item">
                                <div class="event__item__pic set-bg" data-setbg="{{asset('assets/img/real/woman.jpg')}}">
                                    <div class="tag-date">
                                        <span>02 Aout 2021</span>
                                    </div>
                                </div>
                                <div class="event__item__text">
                                    <h4>Semaine Nationale de la culture(SNC) </h4>
                                    <p><i class="fa fa-map-marker"></i>Palais de la culture, Bobo Dioulasso, Burkina</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="event__item">
                                <div class="event__item__pic set-bg" data-setbg="assets/img/real/woman.jpg">
                                    <div class="tag-date">
                                        <span>27 Mars 2021</span>
                                    </div>
                                </div>
                                <div class="event__item__text">
                                    <h4>Nuit Httypique de koudougou(NAK)</h4>
                                    <p><i class="fa fa-map-marker"></i> Maison du peuple, Koudougou, Burkina</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="event__item">
                                <div class="event__item__pic set-bg" data-setbg="assets/img/real/orphan.jpg">
                                    <div class="tag-date">
                                        <span>15 Decembre 2020 à 10h00</span>
                                    </div>
                                </div>
                                <div class="event__item__text">
                                    <h4>BF1 Freestyle</h4>
                                    <p><i class="fa fa-map-marker"></i> Cenasa, ouagadougou, Burkina</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="event__item">
                                <div class="event__item__pic set-bg" data-setbg="assets/img/real/angola.jpg">
                                    <div class="tag-date">
                                        <span>5 Decembre 2020 à 14h00</span>
                                    </div>
                                </div>
                                <div class="event__item__text">
                                    <h4>Fespaco</h4>
                                    <p><i class="fa fa-map-marker"></i> Maison du peuple, ouagadougou, Burkina</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- Event Section End -->

     <!-- Event Section Begin -->
     <section class="event spad">
        <div class="container">
                <div class="row" style="text-align:center; padding-bottom:10px;">
                        <div class="col-lg-12">
                            <div class="section-title">
                                <h2>La une des evenements par categorie</h2>
                                <h1></h1>
                            </div>
                        </div>
                </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>A la une des Concerts</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="event__slider owl-carousel">
                    <div class="col-lg-4">
                        <div class="event__item">
                            <div class="event__item__pic set-bg" data-setbg="{{asset('assets/img/real/adorable.jpg')}}">
                                <div class="tag-date">
                                    <span>02 Aout 2021</span>
                                </div>
                            </div>
                            <div class="event__item__text">
                                <h4>Semaine Nationale de la culture(SNC) </h4>
                                <p><i class="fa fa-map-marker"></i>Palais de la culture, Bobo Dioulasso, Burkina</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="event__item">
                            <div class="event__item__pic set-bg" data-setbg="assets/img/real/african-american.jpg">
                                <div class="tag-date">
                                    <span>27 Mars 2021</span>
                                </div>
                            </div>
                            <div class="event__item__text">
                                <h4>Nuit Httypique de koudougou(NAK)</h4>
                                <p><i class="fa fa-map-marker"></i> Maison du peuple, Koudougou, Burkina</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="event__item">
                            <div class="event__item__pic set-bg" data-setbg="assets/img/real/african.jpg">
                                <div class="tag-date">
                                    <span>15 Decembre 2020 à 10h00</span>
                                </div>
                            </div>
                            <div class="event__item__text">
                                <h4>BF1 Freestyle</h4>
                                <p><i class="fa fa-map-marker"></i> Cenasa, ouagadougou, Burkina</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="event__item">
                            <div class="event__item__pic set-bg" data-setbg="assets/img/real/audio.jpg">
                                <div class="tag-date">
                                    <span>5 Decembre 2020 à 14h00</span>
                                </div>
                            </div>
                            <div class="event__item__text">
                                <h4>Fespaco</h4>
                                <p><i class="fa fa-map-marker"></i> Maison du peuple, ouagadougou, Burkina</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Event Section End -->

 <!-- Event Section Begin -->
 <section class="event spad">
    <div class="container">
          
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>A la une des Festivals</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="event__slider owl-carousel">
                <div class="col-lg-4">
                    <div class="event__item">
                        <div class="event__item__pic set-bg" data-setbg="{{asset('assets/img/real/audio.jpg')}}">
                            <div class="tag-date">
                                <span>02 Aout 2021</span>
                            </div>
                        </div>
                        <div class="event__item__text">
                            <h4>Semaine Nationale de la culture(SNC) </h4>
                            <p><i class="fa fa-map-marker"></i>Palais de la culture, Bobo Dioulasso, Burkina</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="event__item">
                        <div class="event__item__pic set-bg" data-setbg="{{asset('assets/img/real/children.jpg')}}">
                            <div class="tag-date">
                                <span>27 Mars 2021</span>
                            </div>
                        </div>
                        <div class="event__item__text">
                            <h4>Nuit Httypique de koudougou(NAK)</h4>
                            <p><i class="fa fa-map-marker"></i> Maison du peuple, Koudougou, Burkina</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="event__item">
                        <div class="event__item__pic set-bg" data-setbg="{{asset('assets/img/real/couple.jpg')}}">
                            <div class="tag-date">
                                <span>15 Decembre 2020 à 10h00</span>
                            </div>
                        </div>
                        <div class="event__item__text">
                            <h4>BF1 Freestyle</h4>
                            <p><i class="fa fa-map-marker"></i> Cenasa, ouagadougou, Burkina</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="event__item">
                        <div class="event__item__pic set-bg" data-setbg="{{asset('assets/img/real/lady.jpg')}}">
                            <div class="tag-date">
                                <span>5 Decembre 2020 à 14h00</span>
                            </div>
                        </div>
                        <div class="event__item__text">
                            <h4>Fespaco</h4>
                            <p><i class="fa fa-map-marker"></i> Maison du peuple, ouagadougou, Burkina</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Event Section End -->

 <!-- Event Section Begin -->
 <section class="event spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>A la une des Rencontres et conferences</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="event__slider owl-carousel">
                <div class="col-lg-4">
                    <div class="event__item">
                        <div class="event__item__pic set-bg" data-setbg="{{asset('assets/img/real/memorial.jpg')}}">
                            <div class="tag-date">
                                <span>02 Aout 2021</span>
                            </div>
                        </div>
                        <div class="event__item__text">
                            <h4>Semaine Nationale de la culture(SNC) </h4>
                            <p><i class="fa fa-map-marker"></i>Palais de la culture, Bobo Dioulasso, Burkina</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="event__item">
                        <div class="event__item__pic set-bg" data-setbg="{{asset('assets/img/real/audio.jpg')}}">
                            <div class="tag-date">
                                <span>27 Mars 2021</span>
                            </div>
                        </div>
                        <div class="event__item__text">
                            <h4>Nuit Httypique de koudougou(NAK)</h4>
                            <p><i class="fa fa-map-marker"></i> Maison du peuple, Koudougou, Burkina</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="event__item">
                        <div class="event__item__pic set-bg" data-setbg="{{asset('assets/img/real/orphan.jpg')}}">
                            <div class="tag-date">
                                <span>15 Decembre 2020 à 10h00</span>
                            </div>
                        </div>
                        <div class="event__item__text">
                            <h4>BF1 Freestyle</h4>
                            <p><i class="fa fa-map-marker"></i> Cenasa, ouagadougou, Burkina</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="event__item">
                        <div class="event__item__pic set-bg" data-setbg="{{asset('assets/img/real/smile.jpg')}}">
                            <div class="tag-date">
                                <span>5 Decembre 2020 à 14h00</span>
                            </div>
                        </div>
                        <div class="event__item__text">
                            <h4>Fespaco</h4>
                            <p><i class="fa fa-map-marker"></i> Maison du peuple, ouagadougou, Burkina</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Event Section End -->

 <!-- Event Section Begin -->
 <section class="event spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Autres</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="event__slider owl-carousel">
                <div class="col-lg-4">
                    <div class="event__item">
                        <div class="event__item__pic set-bg" data-setbg="{{asset('assets/img/events/event-1.jpg')}}">
                            <div class="tag-date">
                                <span>02 Aout 2021</span>
                            </div>
                        </div>
                        <div class="event__item__text">
                            <h4>Semaine Nationale de la culture(SNC) </h4>
                            <p><i class="fa fa-map-marker"></i>Palais de la culture, Bobo Dioulasso, Burkina</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="event__item">
                        <div class="event__item__pic set-bg" data-setbg="assets/img/events/event-2.jpg">
                            <div class="tag-date">
                                <span>27 Mars 2021</span>
                            </div>
                        </div>
                        <div class="event__item__text">
                            <h4>Nuit Httypique de koudougou(NAK)</h4>
                            <p><i class="fa fa-map-marker"></i> Maison du peuple, Koudougou, Burkina</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="event__item">
                        <div class="event__item__pic set-bg" data-setbg="assets/img/events/event-3.jpg">
                            <div class="tag-date">
                                <span>15 Decembre 2020 à 10h00</span>
                            </div>
                        </div>
                        <div class="event__item__text">
                            <h4>BF1 Freestyle</h4>
                            <p><i class="fa fa-map-marker"></i> Cenasa, ouagadougou, Burkina</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="event__item">
                        <div class="event__item__pic set-bg" data-setbg="assets/img/events/event-2.jpg">
                            <div class="tag-date">
                                <span>5 Decembre 2020 à 14h00</span>
                            </div>
                        </div>
                        <div class="event__item__text">
                            <h4>Fespaco</h4>
                            <p><i class="fa fa-map-marker"></i> Maison du peuple, ouagadougou, Burkina</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Event Section End -->

    <!-- About Section Begin -->
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about__pic">
                        {{-- <img src="img/about/about.png" alt=""> --}}
                        <img src="{{asset('assets/img/about/fete.png')}}">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__text">
                        <div class="section-title">
                            <h2>Voulez publier vos evenenements sur EVTICKET?</h2>
                            <h1></h1>
                        </div>
                        <p>Eh bien c'est bien, c'est possible!  Nous vous offrons la possibilite de publier vosevenements sur EVTICKET. Commencez a creer un compte et vous receverez une notification pour la validaton de vos donnees</p>
                        <a href="#" class="primary-btn">Creer un compte AGENCE</a>
                      
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Services Section Begin -->
    <section class="services">
        <div class="container-fluid">
                <div class="row" style="text-align:center">
                        <div class="col-lg-12">
                            <div class="section-title">
                                <h2>Nos categories d'évenements</h2>
                                <h1></h1>
                            </div>
                        </div>
                </div>
            <div class="row">
                   
                <div class="col-lg-6 p-0">
                        <img src="{{asset('assets/img/services/special.png')}}">
                </div>
                <div class="col-lg-6 p-0">
                    <div class="row services__list">
                        <div class="col-lg-6 p-0 order-lg-1 col-md-6 order-md-1">
                            <div class="service__item deep-bg">
                                {{-- <img src="img/services/service-1.png" alt=""> --}}
                            <img src="{{asset('assets/img/services/service-1.png')}}" alt="" srcset="">
                                <h4>Concerts</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 p-0 order-lg-2 col-md-6 order-md-2">
                            <div class="service__item">
                                {{-- <img src="img/services/service-2.png" alt=""> --}}
                                <img src="{{asset('assets/img/services/service-2.png')}}" alt="" srcset="">
                                <h4>Rencontreset conferences</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 p-0 order-lg-4 col-md-6 order-md-4">
                            <div class="service__item deep-bg">
                                {{-- <img src="img/services/service-4.png" alt=""> --}}
                                <img src="{{asset('assets/img/services/service-4.png')}}" alt="" srcset="">
                                <h4>Festivites</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 p-0 order-lg-3 col-md-6 order-md-3">
                            <div class="service__item">
                                {{-- <img src="img/services/service-3.png" alt=""> --}}
                                <img src="{{asset('assets/img/services/service-3.png')}}" alt="" srcset="">
                                <h4>Et plus</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Track Section Begin -->
    <section class="track spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="section-title">
                        <h2>Tous nos evenements</h2>
                        <h1></h1>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="track__all">
                        <a href="#" class="primary-btn">Voir tous nos evenenements</a>
                    </div>
                </div>
            </div>
           
        </div>
    </section>
    <!-- Track Section End -->

    <!-- Youtube Section Begin -->
   
    <!-- Youtube Section End -->

    <!-- Countdown Section Begin -->
    <section class="countdown spad set-bg" data-setbg="{{asset('assets/img/countdown-bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="countdown__text">
                        <h1>Prom'tickets</h1>
                        <h4>Fin de la promo dans:</h4>
                    </div>
                    <div class="countdown__timer" id="countdown-time">
                        <div class="countdown__item">
                            <span>20</span>
                            <p>Jours</p>
                        </div>
                        <div class="countdown__item">
                            <span>15</span>
                            <p>Heures</p>
                        </div>
                        <div class="countdown__item">
                            <span>18</span>
                            <p>minutes</p>
                        </div>
                        <div class="countdown__item">
                            <span>09</span>
                            <p>secondes</p>
                        </div>
                    </div>
                    <div class="buy__tickets">
                        <a href="#" class="primary-btn">Acheter Vos tickets</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Countdown Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad set-bg" data-setbg="{{asset('assets/img/footer-bg.png')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer__address">
                        <ul>
                            <li>
                                <i class="fa fa-phone"></i>
                                <p>Telephone</p>
                                <h6>+226 73796245</h6>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <p>Email</p>
                                <h6>Sidikiouedraogo2000@gmail.com</h6>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 col-md-6">
                    <div class="footer__social">
                        <h2>EVTICKET</h2>
                        <div class="footer__social__links">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6">
                    <div class="footer__newslatter">
                        <h4>Envoyer nous un mail</h4>
                        <form action="#">
                            <input type="text" placeholder="Email">
                            <button type="submit"><i class="fa fa-send-o"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			<div class="footer__copyright__text">
                <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved
                     | Ce site a été concu avec <i class="fa fa-heart" aria-hidden="true"></i> par toute l'equipe de EVTICKET  
                    </p>
			</div>
			<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
  
    @include('djoz.layout.script')

</body>

</html>