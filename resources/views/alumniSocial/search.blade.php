@extends('alumniSocial.master')

@section('mainContent')
    <div class="col-lg-6">
        <div class="central-meta">
            <div class="frnds">
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="active" href="#" data-toggle="tab">All Alumni Members</a> </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active fade show " id="frends" >
                        <ul class="nearby-contct">
                            @foreach($searchs as $friend)
                                <li>
                                    <div class="nearly-pepls">
                                        <figure>
                                            <a href="{{ URL::to('social/search-profile/'.$friend->iduser) }}" title=""><img src="{{ asset('/').$friend->image }}" alt=""></a>
                                        </figure>
                                        <div class="pepl-info">
                                            <h4><a href="{{ URL::to('social/search-profile/'.$friend->iduser) }}" title="">{{ $friend->name }}</a></h4>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection