@include('djoz.layout.menu')
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Evenements</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Discography Section Begin -->
    <section class="discography spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <h2>Nos Evenements</h2>
                        <h1>Evticket</h1>
                    </div>
                </div>
            </div>
           {{-- <div class="row">
              
                    <div class="">
                        @foreach($events as $event)
                        <a href="{{route('event.detail',$event->titre)}}" style="cursor:pointer">
                                <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="event__item">
                                <div class="event__item__pic set-bg" data-setbg="{{asset('storage/' . $event->photo)}}">
                                    <div class="tag-date">
                                        <span>{{$event->date_debut}}</span>
                                    </div>
                                </div>
                                <div class="event__item__text">
                                    <h5 style="font-weight:800">{{$event->titre}}</h5>
                                    <p><i class="fa fa-map-marker"></i>{{$event->lieu}}</p>
                                </div>
                            </div>
                        </div>
                        </a>
                        @endforeach
                    </div>
              
            </div> --}}

            <div class="row">
                    @foreach($events as $event)
                    <a href="{{route('event.detail',$event->titre)}}" style="cursor:pointer">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="discography__item">
                            <div class="discography__item__pic">
                                <img src="{{asset('storage/' . $event->photo)}}" alt="">
                            </div>
                            <div class="discography__item__text">
                                <h4 style="font-weight:900">{{$event->titre}}</h4>
                                <span>{{$event->date_debut}}</span> || <span>{{$event->date_fin}}</span>
                               
                            </div>
                            <div style="display:flex; flex-direction:row; background-color:black; justify-content:space-between">
                               
                                    <h5 style="font-weight:600;color:white">
                                         <p style="color:#ffc107"><i class="fa fa-map-marker"></i>Lieu</p>
                                       &nbsp;&nbsp; {{$event->lieu}}
                                    </h5>
                                    <a type="submit" class="primary-btn"  style="font-weight:1000;color:white">{{$event->prix}} </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>

           {{$events->links('vendor.pagination.simple-default')}}
                {{-- <div class="col-lg-12">
                    <div class="pagination__links">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">suivant</a>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- Discography Section End -->

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