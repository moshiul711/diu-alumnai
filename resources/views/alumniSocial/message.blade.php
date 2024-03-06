@extends('alumniSocial.master')

@section('mainContent')
    <div class="col-lg-6">
        <div class="central-meta">
            <div class="messages">
                <h5 class="f-title"><i class="ti-bell"></i>All Messages <span class="more-options"><i class="fa fa-ellipsis-h"></i></span></h5>
                <div class="message-box">

                    <div class="peoples-mesg-box">
                        <div class="conversation-head">
                            <figure><img src="{{ asset('/'.$chat_name->image) }}" alt=""></figure>
                            <span>{{ $chat_name->name }}</span>
                        </div>
                        <ul class="chatting-area">
                            @foreach($me as $sender)
                                @if($sender->from_user_id == Session::get('user_id'))
                            <li class="you">
                                <figure><img src="{{ asset('/').$image->image }}" alt=""></figure>
                                <p>{{ $sender->message }}</p>
                            </li>
                                    @else
                                    <li class="me">
                                        <figure><img src="{{ asset('/').$image1->image }}" alt=""></figure>
                                        <p>{{ $sender->message }}</p>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                        <div class="message-text-container">
                            <form method="post" action="{{ url('/message/store/'.$chatid) }}">
                                {{ csrf_field() }}
                                <textarea name="message"></textarea>
                                <button title="send"><i class="fa fa-paper-plane"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script type="text/javascript">
    setTimeout(function(){
        location.reload();
    },30000);
</script>