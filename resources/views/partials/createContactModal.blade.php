<div class="modal fade" id="createContactModal" tabindex="-1" role="dialog" aria-labelledby="createContactModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="createContactModalLabel"><strong>{{ trans('messages.newContact') }}</strong></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ route('dashboard.contact.store') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name" class="control-label col-sm-2">{{ trans('messages.name') }}</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="modal_create_name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="surname" class="control-label col-sm-2">{{ trans('messages.surname') }}</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="modal_create_surname">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="control-label col-sm-2">{{ trans('messages.email') }}</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="modal_create_email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="control-label col-sm-2">{{ trans('messages.phone') }}</label>
                            <div class="col-sm-10">
                        <input type="text" class="form-control" id="modal_create_phone">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('messages.close') }}</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal" id="btnSave">{{ trans('messages.save') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
