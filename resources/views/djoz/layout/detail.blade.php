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

    <!-- Video Section Begin -->
    <section class="videos spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <h2>{{$event->titre}}</h2>
                        <h1>Evticket</h1>
                    </div>
                    {{-- <img src="{{asset('storage/' . $event->photo)}}" class="img-responsive" style="width:10vh" > --}}
                    <div class="videos__large__item set-bg" data-setbg="{{asset('storage/' . $event->photo)}}">
                        <div class="videos__large__item__text">
                        <h4>{{$event->sous_titre}}</h4>
                            <ul>
                                <li>{{$event->heure}}</li>
                                <li>{{$event->date_debut}}</li>
                            <li>
                                <form action="{{route('cart.store')}}" method="POST">
                                @csrf
                                    <input type="hidden" name="event_id" value="{{$event->id}}">
                                   
                                    <button type="submit" class="primary-btn">Ajouter au panier</button>
                                </form> 
                            </li>
                            </ul>
                        </div>
                    </div>
                   
                    <div class="col-lg-12">
                        <div class="blog__details__content">
                            {{-- <div class="blog__details__item">
                                <div class="blog__details__item__pic set-bg" data-setbg="img/blog/details/details-pic.jpg">
                                    <a href="#"><i class="fa fa-share-alt"></i></a>
                                </div>
                                <div class="blog__details__item__text">
                                    <span>Music festival</span>
                                    <h3>Guidelines for music festival event organisers: music festival harm reduction -
                                        December 2019</h3>
                                    <div class="blog__details__item__widget">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <ul>
                                                    <li>By <span>Erna O’Conner</span></li>
                                                    <li>Dec 17, 2019</li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6">
                                                <ul>
                                                    <li>230 Views</li>
                                                    <li>18 Comments</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="blog__details__desc">
                                <p>{{$event->description}}</p>
                              
                            </div>
                            {{-- <div class="blog__details__quote" >
                                <p>None of them will tell you that they will stay together forever because it’s easy. None
                                    of them will tell you that they pledged their life.</p>
                                <h6>OSCAR HUDSPETH</h6>
                                <i class="fa fa-quote-right" style="color:tomato;"></i>
                            </div> --}}
                            {{-- <div class="blog__details__desc">
                                <p>You are committing to someone’s whole self. You are not just committing to them under the
                                    condition that they stay young and beautiful — because they will not. And neither will
                                    you. You are not just committing to them until someone better comes along while neither
                                    they nor your relationship is perfect.</p>
                                <p>This is the person you want to be with. You are committing to their very being. To the
                                    idea that the two of you are</p>
                            </div> --}}
                            <div class="blog__details__tags">
                                <a href="#">Evenement</a>
                                <a href="#">{{$event->categ->nom}}</a>
                            </div>
                        
                            <div class="blog__details__services">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="blog__details__services__title">
                                            <h4>Evenements similaires</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    @foreach($event_details as $event_detail)
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="blog__details__services__item">
                                            <div class="blog__details__services__item__pic">
                                                <img src="{{asset('storage/' . $event_detail->photo)}}" alt="">
                                            </div>
                                            <div class="blog__details__services__item__text">
                                            <h6><a href="#">{{$event_detail->titre}}</a></h6>
                                            <span>{{$event_detail->date_debut}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="blog__details__form">
                                <div class="blog__details__form__title">
                                    <h4>Laisser un commenatire</h4>
                                </div>
                                <form action="#">
                                    <div class="input__list" style="display:flex;flex-direction:row;">
                                        <input type="text" placeholder="nom">
                                        <input type="text" placeholder="Adresse mail">                                    
                                    </div>
                                    <textarea placeholder="Commentaire"></textarea>
                                    <button type="submit" class="primary-btn container col-12">Envoyer votre message</button>
                                </form>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Video Section End -->

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