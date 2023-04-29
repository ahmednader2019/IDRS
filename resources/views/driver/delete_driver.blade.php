
  <!-- Modal -->
  <div class="modal fade" id="delete_driver{{$id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{route('Driver.destroy',$id)}}" method="POST">
            @method('DELETE')
            @csrf
            <input type="hidden" name="id" value="{{$id}}">
            <div class="modal-body">
               Are you sure you want to delete the driver From IDRS ?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Delete</button>
              </div>
        </form>

      </div>
    </div>
  </div>
