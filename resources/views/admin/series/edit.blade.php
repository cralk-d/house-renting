<div class="modal fade" id="modal-edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('admin.series.update', $serie->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h4 class="modal-title">UPDATE SERIE HERE</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label> Name</label>
                    <input type="text" name="prefix" class="form-control @error('prefix') is-invalid @enderror"
                           value="{{ $serie->prefix }}">
                    @error('prefix')
                    <span class="invalid-feedback">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle"></i> Close</button>
                    <button type="submit" class="btn btn-info swalDefaultSuccess"><i class="fa fa-check"></i> Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>