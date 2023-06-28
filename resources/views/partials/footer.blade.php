<footer>
    <section class="container bg-primary">

        <div class="row text-light justify-content-center p-4">
            <!--sezione blu non riesco a ciclare su img passando $icon['icon']-->
            @foreach($footerBlue as $icon)
                <section class="d-flex align-items-center col-2 p-2">
                    <img class="col-2" src= "{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="icon">
                    <p class="col mt-3">{{ $icon['text'] }}</p>
                </section>
            @endforeach
        </div>
    </section>
    <section class="container my-section">
        <div class="row text-light align-self-stretch ">
            <div class="col-6 d-flex justify-content-around">
                <div class="d-flex flex-wrap">

                    @foreach($SectionStringFooter as $oggetto)
                        <div class="col-4">
                            <p class="mt-2">{{ $oggetto['title']}}</p>
                            <ul>
                                @foreach ($oggetto['listFooter'] as $item)
                                     <li>{{$item}}</li> 
                                @endforeach
                              
                            </ul>
                        </div>
                    @endforeach
                    
                    
                </div>
            </div>
            <div class="col-6 d-flex justify-content-center my-bg"></div>
        </div>
    </section>

</footer>