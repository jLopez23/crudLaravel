<div class="modal" id="modalRoles-{{$user->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Gestionar Roles</h4>
            </div>
            <div class="modal-body">
                <label>ID</label>
                <input type="text" name="id" id="id" value="{{ $user->id }}" class="form-control" disabled>
                <label>Name</label>
                <input type="text" name="name" id="name" value="{{ $user->name }}" class="form-control" disabled>
                <br>
                <select id="select-permisos" class="form-control" multiple="multiple">
                    @if(isset($roles))
                    @foreach($roles as $rol)
                    <option value="{{ $rol->id }}">{{ $rol->display_name }}</option>
                    @endforeach
                    @endif
                </select>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-inverse">Save</button>
            </div>
        </div>
    </div>
</div>