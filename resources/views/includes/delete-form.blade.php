<a class="btn btn-danger" href="{{ route($route, $id) }}"
    onclick="event.preventDefault(); document.getElementById('delete-form').submit();">
    <i class="fa fa-trash"></i>
</a>

<form id="delete-form" action="{{ route($route, $id) }}" method="POST" style="display: none;">
    @method("DELETE")
    @csrf
</form>