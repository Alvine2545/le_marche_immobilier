<div class="fh5co-page-title section1-home" style="height: 350px;">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div
                            class="col-md-12 col-sm-12 col-xs-12 text-center text-color">
                            <div class="row">
                                <h1></h1>
                                <h1></h1>
                            </div>
                            <div class="all-title-box">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12"
                                            style="margin: 2%; text-align: center;">

                                            <h2 class="h1 text-color">Bienvenue sur</h2>
                                            <h1 class="title h1 text-color"> LE MARCHE DE L'IMMOBILIER</h1>
                                            <h3 class=" text-black" style="font-size: 1.5rem; font-weight: bold;">Achetez, louez ou vendez un bien immobilier au Bénin</h3><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>

            <div id="">
                <div class="container"> 
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center animate-box" wire:ignore>
                            <h2 class="text-center text-color">Les actualiés</h2>

                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row row-bottom-padded-md">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto ipsum reprehenderit dolor totam quis molestias maxime voluptate deleniti cupiditate, fugit, quas odio! Consequuntur officiis unde temporibus quisquam, itaque possimus dolorem.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum iure dignissimos, amet eaque obcaecati delectus veniam, maxime neque iusto animi corporis ducimus error sequi quod libero alias ipsum, et perspiciatis?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima harum voluptate commodi expedita aut quaerat consectetur non reprehenderit cumque. Cupiditate ullam natus voluptates nobis sapiente reiciendis voluptatibus expedita animi dignissimos.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, voluptates corrupti nulla amet nihil nobis delectus vero eaque, deleniti at consequatur magni ducimus cum repellat reprehenderit, odio ipsa minima vitae.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus totam soluta temporibus exercitationem cupiditate quam, nostrum earum assumenda accusantium animi consequuntur quis aperiam odio atque reiciendis? Voluptatibus consequatur odit voluptatem!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis quisquam, doloremque consectetur quas iste ipsa dolorem illum dolore non deleniti id velit nihil cum quibusdam! Sequi quasi facere aliquid itaque.
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas dolor eligendi earum saepe nobis nostrum itaque temporibus, a maiores porro consequuntur doloribus, numquam mollitia, iusto quas ipsa voluptatem exercitationem in.
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. In totam ex nemo doloremque dignissimos numquam, illo temporibus accusamus unde voluptatum excepturi expedita recusandae. Architecto totam beatae at voluptatem sunt dolor.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, ducimus. Placeat eveniet quaerat a dolorum ut. Animi explicabo, omnis corporis fugiat iure vitae obcaecati maiores pariatur aut error porro minima?
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus laboriosam accusamus enim unde voluptates porro accusantium corporis officia placeat itaque, voluptatum harum, libero, nihil expedita quasi fugiat aperiam inventore. Eius.

                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore, omnis. Mollitia repellat quasi facere iusto laudantium. Quis at placeat earum fugiat, numquam laudantium eos esse beatae cumque, ipsam aliquid non.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quos ducimus quidem eius explicabo provident nesciunt neque accusantium hic quasi sint, obcaecati similique consectetur commodi consequuntur accusamus iure magni minima.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum laborum temporibus, asperiores a debitis porro fugiat voluptatum molestias quidem ipsam doloribus atque veniam iure expedita molestiae, repudiandae consectetur, vero provident.
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam, ipsum quis praesentium accusantium aperiam facilis ea at autem inventore dolore ratione quas impedit nostrum aliquid ullam ipsam eos suscipit porro!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste labore doloremque asperiores voluptates numquam at alias suscipit. Ipsam eveniet pariatur praesentium corporis suscipit cumque veniam sapiente ea exercitationem, numquam provident?
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum temporibus officia atque, quam fugit explicabo id! Odit iusto itaque quia modi facilis quam architecto error. Eos natus voluptas non facilis?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex cupiditate quis quas est tenetur nulla consequatur officiis fuga soluta optio. Voluptas id dolorum quos minima sint sed, praesentium non suscipit.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, eius! Nobis quam eaque maiores beatae ipsa eos, rem veritatis? Numquam dolores ab officiis quia esse explicabo veritatis odio illum cumque!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam odit quibusdam sunt consectetur! Accusamus quis voluptate omnis, autem similique repudiandae enim quas. Minima quae amet at nam voluptatum, rem id?
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                        @foreach ($actualites as $actualite)    
                            <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9" id="{{$actualite->id}}">               
                                <h3 class="title" style="color: black; text-center">{{$actualite->reference}}</h3>
                                <div class="col-md-12">
                                    <img src="../storage/{{$actualite->photo}}" class="img-fluid" alt="" style="margin: auto; ">
                                </div><br>
                                <div class="col-md-8 col-sm-8 col-xs-8 ">
                                    <p style="font-size: 11px; font-weight: bold; text-align: center;" >
                                        @php
                                            echo $actualite->description;
                                        @endphp
                                    </p>
                                </div>
                                <div>

                            </div>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto ipsum reprehenderit dolor totam quis molestias maxime voluptate deleniti cupiditate, fugit, quas odio! Consequuntur officiis unde temporibus quisquam, itaque possimus dolorem.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum iure dignissimos, amet eaque obcaecati delectus veniam, maxime neque iusto animi corporis ducimus error sequi quod libero alias ipsum, et perspiciatis?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima harum voluptate commodi expedita aut quaerat consectetur non reprehenderit cumque. Cupiditate ullam natus voluptates nobis sapiente reiciendis voluptatibus expedita animi dignissimos.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, voluptates corrupti nulla amet nihil nobis delectus vero eaque, deleniti at consequatur magni ducimus cum repellat reprehenderit, odio ipsa minima vitae.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus totam soluta temporibus exercitationem cupiditate quam, nostrum earum assumenda accusantium animi consequuntur quis aperiam odio atque reiciendis? Voluptatibus consequatur odit voluptatem!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis quisquam, doloremque consectetur quas iste ipsa dolorem illum dolore non deleniti id velit nihil cum quibusdam! Sequi quasi facere aliquid itaque.
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas dolor eligendi earum saepe nobis nostrum itaque temporibus, a maiores porro consequuntur doloribus, numquam mollitia, iusto quas ipsa voluptatem exercitationem in.
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. In totam ex nemo doloremque dignissimos numquam, illo temporibus accusamus unde voluptatum excepturi expedita recusandae. Architecto totam beatae at voluptatem sunt dolor.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, ducimus. Placeat eveniet quaerat a dolorum ut. Animi explicabo, omnis corporis fugiat iure vitae obcaecati maiores pariatur aut error porro minima?
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus laboriosam accusamus enim unde voluptates porro accusantium corporis officia placeat itaque, voluptatum harum, libero, nihil expedita quasi fugiat aperiam inventore. Eius.

                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, doloribus tenetur et voluptas voluptates omnis nisi ut unde blanditiis esse debitis! Ullam neque quam tempora, quia inventore ratione maiores deserunt!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit dignissimos, nobis libero, et pariatur expedita eos molestiae illo tenetur totam optio, quidem officia ab non laboriosam aliquid cumque adipisci odio.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi voluptates alias possimus nesciunt atque quis error eius sunt hic labore. Neque dolorem illum asperiores fuga assumenda non provident magni repellendus.
                        @endforeach
                        <!-- <div class="clearfix visible-md-block"></div> -->
                    </div>
                </div>
            </div>
            <div id="">
                <h3></h3>
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
                <footer class="container-fluid mt-5">
                    <div class="row pt-5">
                        <div class="col-md-3"></div>
                        <div class="col-md-6 separator"></div>
                        <div class="col-md-3"></div>
                    </div>
                    <div class="row p-3">
                        <div class="col-md-4"></div>
                        <div class="col-md-4 social-media text-center">
                            <i class="fa-brands fa-facebook p-1"></i>
                            <i class="fa-brands fa-instagram p-1"></i>
                            <i class="fa-brands fa-linkedin p-1"></i>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                    <div class="row">
                        <p class="text-light text-center">© Tout droit réservé EREBI SCI 2022</p>
                    </div>
                </footer>
                        
@push('scripts')
                            <script>
                                alert('nnbg');
                            //     Livewire.on('scrollToElement', function() {
                            //     var element = document.getElementById('elementId');
                            //     if (element) {
                            //         console.log("ggf");
                            //         element.scrollIntoView({ behavior: 'smooth', block: 'start' });
                            //     }else{
                            //         console.log("aaaa");
                            //     }
                            // });

                            window.addEventListener('DOMContentLoaded', function() {
                            @if ($selectedNewsId)
                            console.log('gf');
                                var element = document.getElementById('{{ $selectedNewsId }}');
                                if (element) {
                                    element.scrollIntoView({ behavior: 'smooth' });
                                }
                            @endif
                        });
                            </script>

                        @endpush
