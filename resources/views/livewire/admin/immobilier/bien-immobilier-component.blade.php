<div>
    <div class="container-fluid">
            <h1 class="h3 mb-4 text-gray-800">Dashboard - Les Biens immobiliers</h1> 
    </div>
    <div class="row">
        @php
            $i = 0;
        @endphp
        @foreach ($biens as $bien)
            <div class="col-xl-6 col-md-6">
                <div class="cardbox reader-block">
                    <div class="cardbox-heading">
                        <!-- START dropdown-->
                        <div class="float-right dropdown">
                            <a href="#basic{{$bien->id}}" class="" style="text-decoration: none;" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="basic{{$bien->id}}">
                                <span class="float-right ion-md-arrow-dropdown"></span>
                            </a>
                        {{-- <button class="btn btn-secondary btn-flat btn-flat-icon" type="button" data-toggle="dropdown"><em class="ion-ios-more"></em></button>
                        <div class="dropdown-menu dropdown-scale dropdown-menu-right" role="menu"><a class="dropdown-item" href="#">Hide post</a><a class="dropdown-item" href="#">Stop following</a>
                            <div class="dropdown-divider" role="separator"></div><a class="dropdown-item" href="#">Report</a>
                        </div> --}}
                        </div>
                        <!-- END dropdown-->
                        <div class="collapse show" id="basic{{$bien->id}}">
                            <div class="media m-0">
                            <div class="d-flex mr-3"><a href="#">{{--<img class="rounded-circle thumb48" src="img/user/06.jpg" alt="User"></a>--}}</div>
                            <div class="media-body p-2">
                                <p class="m-0 text-bold">{{$bien->reference}} <small> posté par {{$users[$i]}}</small></p><small class="text-muted"><em class="ion-ios-timer text-muted mr-2"></em><span>{{$bien->created_at}}</span></small>
                            </div>
                            </div>
                            <div class="p">
                            <a href="#"><img class="mr-2 thumb48" src="img/pic1.jpg" alt="Pic"></a><a href="#"><img class="mr-2 thumb48" src="img/pic2.jpg" alt="Pic"></a><a href="#"><img class="mr-2 thumb48" src="img/pic3.jpg" alt="Pic"></a><a href="#"><img class="mr-2 thumb48" src="img/pic4.jpg" alt="Pic"></a>
                            <div class="mb-3">Donec a purus auctor dui hendrerit accumsan non quis augue nisl sed iaculis.</div>
                            </div>
                        </div>
                    </div>
                    <div class="cardbox-footer">
                        <button class="btn btn-flat btn-info" type="button"><em class="ion-md-mail icon-lg"></em></button>
                        <button class="btn btn-flat btn-success" type="button"><em class="ion-md-checkmark icon-lg"></em></button>
                        <button class="btn btn-flat btn-danger" type="button"><em class="ion-md-trash icon-lg"></em></button>
                        <button class="btn btn-flat btn-primary" type="button"><em class="ion-md-create icon-lg"></em></button>
                    </div>
                </div>
            </div>
        @php
            $i++;
        @endphp
        @endforeach
    </div>
</div>