<button type="button" onclick="document.getElementById('myModal').style.display='block'"
    class="btn btn-primary position-relative" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <i class="fa-regular fa-bell"></i>
    <span class="position-absolute  badge rounded-pill bg-danger">
        {{ $count = auth()->user()->unreadNotifications->count() }}
        <span class="visually-hidden">unread messages</span>
    </span>
</button>


<div class="modal-dialog modal-dialog-scrollable " id="notificationModal" tabindex="2" role="dialog"
    aria-labelledby="notificationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="notificationModalLabel">Notifications</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="list-group">
                    @foreach (auth()->user()->notifications as $notification)
                        <li class="list-group-item {{ $notification->read_at ? '' : 'list-group-item-info' }}">
                            {{ $notification->data['message'] }}
                            <small class="text-muted">{{ $notification->created_at->diffForHumans() }}</small>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"
                    onclick="document.getElementById('myModal').style.display='none'">Close</button>
            </div>
        </div>
    </div>
</div>



<script>
    var modal = document.getElementById('myModal');

    modal.addEventListener('click', function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    });
</script>

<script>
    var modal = document.getElementById('myModal');

    modal.addEventListener('click', function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
</script>
