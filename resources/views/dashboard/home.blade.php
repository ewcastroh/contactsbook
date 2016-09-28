@extends('templates.public')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading text-center"><h3><strong>{{ trans('messages.contactList') }}</strong></h3></div>

                <div class="panel-body">
                    <div class="form-group">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createContactModal">{{ trans('messages.addContact') }}</button>
                    </div>
                    @if(count($contacts) > 0)
                        <form class="navbar-form navbar-left" role="search" action="{{ url('') }}" method="get">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="{{ trans('messages.searchFor') }}" id="btn-data-search" name="btn-data-search">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                    </button>
                                </span>
                            </div>
                        </form>
                        <div class="col-md-8 col-md-offset-2">
                            <div class="panel panel-default">
                                <div class="panel-heading text-center"><strong>{{ trans('messages.contactList') }}</strong></div>
                                <div class="panel-body">
                                    <table class="table table-bordered table-hover" id="contactsTable">
                                        <thead>
                                            <th>{{ trans('messages.name') }}</th>
                                            <th>{{ trans('messages.surname') }}</th>
                                            <th>{{ trans('messages.email') }}</th>
                                            <th>{{ trans('messages.phone') }}</th>
                                            <th>{{ trans('messages.actions') }}</th>
                                        </thead>
                                        @foreach ($contacts as $contact)
                                        <tbody>
                                            <tr id="tr_{{ $contact->id }}" data-id="{{ $contact->id }}" class="find">
                                                <td id="name_{{ $contact->id }}">{{ $contact->name}}</td>
                                                <td id="surname_{{ $contact->id }}">{{ $contact->surname}}</td>
                                                <td id="email_{{ $contact->id }}">{{ $contact->email}}</td>
                                                <td id="phone_{{ $contact->id }}">{{ $contact->phone}}</td>
                                                <td>
                                                    <a href="#" class="btn btn-default btn-edit" data-toggle="modal" data-target="#editContactModal" id="btnEdit_{{ $contact->id }}">
                                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                                    </a>
                                                    <a href="#" class="btn btn-default btn-delete" id="btnDelete_{{ $contact->id }}">
                                                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="text-center">
                                        {{-- {{ $contacts->render() }} --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        {{ trans('messages.noContacts') }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@include('partials.createContactModal')
@include('partials.editContactModal')
@include('partials.confirmModal')

@endsection

@section('scripts')
    <script src="{{ asset('js/home.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.3.0/jquery.quicksearch.min.js"></script>
@endsection
