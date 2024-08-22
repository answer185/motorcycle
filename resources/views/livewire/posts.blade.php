<div>
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @else
    <div>no status</div>
    @endif
</div>
