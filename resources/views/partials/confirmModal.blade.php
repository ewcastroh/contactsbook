<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="contactModalLabel"><strong>{{ trans('messages.confirmTitle') }}</strong></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form" method="POST" action="#">
                    {{ csrf_field() }}
                    <div class="input-group">
                        {{ trans('messages.confirmMessageDelete') }}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('messages.no') }}</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal" id="btnDelete">{{ trans('messages.yes') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
