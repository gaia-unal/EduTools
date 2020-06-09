@if(Session::has('user-registry'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;
            </span>
        </button>
        {{Session::get('user-registry')}}
    </div>
@endif
