@include('djoz.layout.menu')
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Skills Section Begin -->
    <section class="skills spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="skills__content">
                        <div class="section-title">
                            <h2>A propos de nous</h2>
                            <h1>Evticket</h1>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                             Ratione aspernatur nemo blanditiis veniam quam! Nostrum fugit.</p>
                        <div class="skill__bar__item">
                            <p>Visibilité</p>
                            <div id="bar1" class="barfiller">
                                <span class="tip"></span>
                                <span class="fill" data-percentage="95"></span>
                            </div>
                        </div>
                        <div class="skill__bar__item">
                            <p>Performance</p>
                            <div id="bar2" class="barfiller">
                                <span class="tip"></span>
                                <span class="fill" data-percentage="85"></span>
                            </div>
                        </div>
                        <div class="skill__bar__item">
                            <p>Creativite</p>
                            <div id="bar3" class="barfiller">
                                <span class="tip"></span>
                                <span class="fill" data-percentage="98"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="skills__video set-bg" data-setbg="{{asset('assets/img/illlus/mobile.png')}}">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Skills Section End -->

    <!-- About Section Begin -->
    <section class="about about--page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about__pic">
                        <img src="{{asset('assets/img/illlus/invest.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__text">
                        <div class="section-title">
                            <h2>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h2>
                        </div>
                        <p>At vero eos et accusamus et iusto odi odgnissimos ducimus qui blanditiis praesentium volup
                            tatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                            cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi quod
                            justo pro an.</p>
                    </div>
                </div> 
                <div class="col-lg-6">
                        <div class="about__text">
                                <div class="section-title">
                                    <h2>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h2>
                                </div>
                                <p>At vero eos et accusamus et iusto odi odgnissimos ducimus qui blanditiis praesentium volup
                                    tatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                                    cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi quod
                                    justo pro an.</p>
                            </div>
                    </div>
                    <div class="col-lg-6">
                       
                        <div class="about__pic">
                                <img src="{{asset('assets/img/illlus/team.png')}}" alt="">
                            </div>
                    </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    
  

    <!-- About Services Section Begin -->
    <section class="about-services spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <h2>Nos Couvertures</h2>
                        <h1>Evticket</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="about__services__item">
                        <div class="about__services__item__pic set-bg" data-setbg="{{asset('assets/img/illlus/cards.png')}}">
                            <div class="icon">
                                <img src="{{asset('assets/img/services/as-icon-1.png')}}" alt="">
                            </div>
                        </div>
                        <div class="about__services__item__text">
                            <h4>Festivites</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="about__services__item">
                        <div class="about__services__item__pic set-bg" data-setbg="{{asset('assets/img/illlus/candidat.png')}}">
                            <div class="icon">
                                <img src="{{asset('assets/img/services/as-icon-2.png')}}" alt="">
                            </div>
                        </div>
                        <div class="about__services__item__text">
                            <h4>Rencontres et Ateliers</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="about__services__item">
                        <div class="about__services__item__pic set-bg" data-setbg="{{asset('assets/img/illlus/schedule.png')}}">
                            <div class="icon">
                                <img src="{{asset('assets/img/services/as-icon-3.png')}}" alt="">
                            </div>
                        </div>
                        <div class="about__services__item__text">
                            <h4>Planification d'evenements</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Services Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer footer--normal spad set-bg" data-setbg="{{asset('assets/img/footer-bg.png')}}">
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
                <div class="footer__copyright__text">
                        <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved
                             | Ce site a été concu avec <i class="fa fa-heart" aria-hidden="true"></i> par toute l'equipe de EVTICKET  
                            </p>
                    </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    @include('djoz.layout.script')
</body>

</html>