<div class="modal" id="insurances-create">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">
                    {{ __('cruds.insurances') }} | {{ __('handle.create') }}
                </h6>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('insurances.store') }}" method="POST" autocomplete="off">
                    @csrf

                    <div class="row mb-3">
                        <div class="col">
                            <label>{{ __('field.name') }}</label>
                            <input class="form-control" type="text"
                                name="name">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <label>{{ __('field.description') }}</label>
                            <textarea id="AboutMe" name="description" class="form-control" rows="3"></textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <label>{{ __('field.code') }}</label>
                            <input class="form-control" type="text" name="code">
                            @error('code')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col">
                            <label>{{ __('field.discount.percentage') }}</label>
                            <input class="form-control" type="number" min="0" max="100" name="discount_percentage">
                            @error('discount_percentage')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <button class="btn btn-main-primary pd-x-30 mg-r-5 mg-t-5">
                        {{ __('handle.create') }}
                    </button>
                    <button class="btn ripple btn-secondary pd-x-30 mg-r-5 mg-t-5" data-dismiss="modal" type="button">
                        {{ __('handle.close') }}
                    </button>
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
