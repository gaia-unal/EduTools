@if(Session::has('message-destroy'))
    <div class="alert alert-warning alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;
            </span>
        </button>
        {{Session::get('message-destroy')}}
    </div>
@endif