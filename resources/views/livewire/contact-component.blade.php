<div class="contact-section">
    <section class=" container align-items-center">
        <div class="row mt-4">
            <div class="col-md-6">
                <h1 class="text-light mt-lg-5">Nos contacts</h1>
                <div class="row-fluid">
                    <div class="location contact-elements  mt-4">
                        <i class="fa-solid fa-location-dot p-1"></i>
                        <p class="text-light">MARCHE DE l’IMMOBILIER</p>
                    </div>

                    <div class="mail-box contact-elements  mt-4">
                        <img class="p-1" src="images/mailbox.svg" alt="">
                        <p class="text-light">  04 BP : 0338 Cotonou</p>
                    </div>
                <div class="phone contact-elements mt-4">
                    <i class="fa-solid fa-phone p-1"></i>
                    Tél :<a class="text-light" style="text-decoration: none" href="tel:+229 57 69 69 99" > (229) 62 52 52 52</a>
                </div>
                <div class="mail contact-elements  mt-4">
                    <i class="fa-solid fa-envelope p-1"></i>
                    Email : <a href="mailto:erebisci@gmail.com" style="text-decoration: none" class="text-light">contacts@marchedelimmobilier.bj</a>
                </div>
                <div class="mail contact-elements  mt-4">
                    <i class="fa-solid fa-globe p-1"></i>
                    Site web : <a href="www.marchedelimmobilier.bj" style="text-decoration: none" class="text-light">www.marchedelimmobilier.bj </a>
                </div>

                <div class="mail-box contact-elements  mt-4">
                    <img src="images/mailbox.svg" alt="">
                    <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contact_form float-end">
                    {{-- <div class="container"><h2 class="h2 title" style="color: white; margin-top: 3vh;">Remplissez ce formulaire pour nous contacter</h2></div><br> --}}
                    <div class=""><h2 class="h2 title" style="color: white; margin-top: 3vh; margin-left: 8px; margin-right: 8px;">Remplissez ce formulaire pour nous contacter</h2></div><br>
                    <form id="" class="row" action="" wire:submit.prevent='sendMessage' name="contactform" method="post">
                        @csrf
                        @method('post')
                        <!-- <fieldset class="row-fluid"> -->
                            {{-- <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div> --}}
                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-sm-offset-1 col-xs-offset-1 col-md-offset-1 col-lg-offset-1">
                                <input type="text" wire:model='first_name' name="first_name" id="first_name" class="form-control" placeholder="Votre nom">
                                @error('first_name') <span class="error">{{ $message }}</span> @enderror
                                <br>
                            </div><div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-sm-offset-1 col-xs-offset-1 col-md-offset-1 col-lg-offset-1">
                                <input type="text" wire:model='surname' name="first_name" id="first_name" class="form-control" placeholder="Votre prénom">
                                @error('surname') <span class="error">{{ $message }}</span> @enderror
                                <br>
                            </div><div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                            {{-- <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div> --}}
                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-sm-offset-1 col-xs-offset-1 col-md-offset-1 col-lg-offset-1">
                                <input type="email" wire:model='email' name="email" id="email" class="form-control" placeholder="Votre Email">
                                @error('email') <span class="error">{{ $message }}</span> @enderror
                                <br>
                            </div><div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                            {{-- <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div> --}}
                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-sm-offset-1 col-xs-offset-1 col-md-offset-1 col-lg-offset-1">
                                <input type="text" wire:model='phone' name="phone" id="phone" class="form-control" placeholder="Votre téléphone">
                                @error('phone') <span class="error">{{ $message }}</span> @enderror
                                <br>
                            </div><div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                            {{-- <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div> --}}
                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-sm-offset-1 col-xs-offset-1 col-md-offset-1 col-lg-offset-1">
                                <textarea class="form-control" wire:model='comments' name="comments" id="comments" rows="6"
                                    placeholder="Tapez votre message"></textarea>
                                    @error('comments') <span class="error">{{ $message }}</span> @enderror
                            </div><div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="padding: 5vh;">
                                <button type="submit" id="submit"
                                    class="btn btn-custom" style="color: white; font-weight: bold;" >Envoyer le message</button>
                            </div>
                        <!-- </fieldset> -->
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div class="container " >
        <a  class="position-fixed " href="{{route('offre-premium')}}">
            <span class="text-danger position-fixed h-auto w-auto" style="bottom:0;right:5%;animation: blink 1s infinite; font-size:7em;" >
                &#9733;
            </span>
            <span class="position-fixed text-warning" style="bottom:0;right:5%;animation: blink 1s infinite 0.5s; font-size:7em;">
                &#9733;
            </span>
            <span class="text-uppercase text-danger font-weight-bold position-fixed"
                style="white-space: pre-wrap; -webkit-text-stroke-color: white;right:6%;bottom:52px;font-size:16px;">  offres <br> premium</span>
        </a>
    </div>
</div>
