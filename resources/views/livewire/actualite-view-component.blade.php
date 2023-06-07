<div id="">
    <h3></h3>
    <div class="container">
        <h2 wire:ignore class="text-center text-color">Toutes les actualités</h2>
        <div class="row">
            <div class="col-md-12 animate-box" wire:ignore>
                <div class="row" wire:scroll="scrollToArticle('{{$actu->id}}')"> 
                    @foreach ($actualites as $actualite)
                        <div id="{{ $actualite->id }}" class="col-md-10 col-sm-10 col-xs-10 div-form" style="margin-right: 4rem; margin-bottom:1rem;">
                            <h3 class="title" style="color: black;">{{$actualite->reference}}</h3>
                            <div class="" style="margin-left: -5rem; margin-top: -15px; ">
                                <div class="row">
                                    <div class="col-md-11 col-sm-11 col-xs-11" >
                                        <img src="storage/{{$actualite->photo}}" alt="" style="height: 150px !important;" class="icon-custom img-responsive">
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-md-8 col-sm-8 col-xs-8 ">
                                    <h3 class="title" style="color: black;">{{$actualite->reference}}</h3>
                                    <p style="font-size: 11px; font-weight: bold;">
                                        @php
                                            echo explode('.', $actualite->description)[0];
                                        @endphp
                                    </p>
                                    <a style="color: black; font-weight: bold;" href="">Voir plus</a>
                                </div></div>
                            </div>
                        </div>
                        <hr style="border: solid rgb(243, 239, 8) 3px; height: 5px;">
                    @endforeach
                </div>
                                
            </div>
        </div><br><br>
    </div>
</div>
