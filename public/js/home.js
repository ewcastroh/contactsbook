$(document).ready(function() {

    initSearch();

    $('#btnSave').click(function(e) {
        e.preventDefault();
        var name = $("#modal_create_name").val();
        var surname = $("#modal_create_surname").val();
        var email = $("#modal_create_email").val();
        var phone = $("#modal_create_phone").val();

        $.ajax({
            url:        '/dashboard/contact',
            headers:    {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type:       'post',
            dataType:   'json',
            data:       {
                            name:       name,
                            surname:    surname,
                            email:      email,
                            phone:      phone
                        }
                }
        ).done(function(data) {
            $("#modal_edit_name").val('');
            $("#modal_edit_surname").val('');
            $("#modal_edit_email").val('');
            $("#modal_edit_phone").val('');

            var row = "<tr id='tr_" + data.id + "' data-id='" + data.id + "' class='find'><td>" + name + "</td><td>" + surname + "</td><td>" + email + "</td><td>" + phone + "</td>";
            row += "<td><a href='#' class='btn btn-default btn-edit' data-toggle='modal' data-target='#contactModal' id='btnEdit_{{ $contact->id }}'>";
            row += "<span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a>";
            row += "<a href='#' class='btn btn-default btn-delete' id='btnDelete_{{ $contact->id }}'>";
            row += "<span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a></td></tr>";
            $('#contactsTable').append(row);

        });
    });

    $(".btn-delete").click(function(e) {
        // e.preventDefault();
        var row = $(this).parents('tr');
        var id = row.data('id');

        // $('#confirmModal').modal({ backdrop: 'static', keyboard: false })
        //     .one('click', '#btnDelete_' + id, function (e) {
                console.log('hola');
                $.ajax({
                    type:       'delete',
                    url:        '/dashboard/contact/' + id,
                    headers:    {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    dataType:   'json',
                    data: { id:id }
                }).done(function(data){
                    $("#tr_" + id).remove();
                });
            // });
    });

    $(".btn-edit").click(function(e) {
        e.preventDefault();
        var row = $(this).parents('tr');
        var id = row.data('id');
        var name = $("#name_" + id).html();
        var surname = $("#surname_" + id).html();
        var email = $("#email_" + id).html();
        var phone = $("#phone_" + id).html();
        $("#modal_edit_id").val(id);
        $("#modal_edit_name").val(name);
        $("#modal_edit_surname").val(surname);
        $("#modal_edit_email").val(email);
        $("#modal_edit_phone").val(phone);
    });

    $('#btnUpdate').click(function(e) {
        e.preventDefault();
        var id = $("#modal_edit_id").val();
        var name = $("#modal_edit_name").val();
        var surname = $("#modal_edit_surname").val();
        var email = $("#modal_edit_email").val();
        var phone = $("#modal_edit_phone").val();

        $.ajax({
            url:        '/dashboard/contact/' + id,
            headers:    {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type:       'put',
            dataType:   'json',
            data:       {
                            id:         id,
                            name:       name,
                            surname:    surname,
                            email:      email,
                            phone:      phone
                        }
                }
        ).done(function(data) {
            $("#name_" + id).html(name);
            $("#surname_" + id).html(surname);
            $("#email_" + id).html(email);
            $("#phone_" + id).html(phone);

            $("#modal_edit_name").val('');
            $("#modal_edit_surname").val('');
            $("#modal_edit_email").val('');
            $("#modal_edit_phone").val('');

        });
    });
});

function initSearch()
{
    $('#btn-data-search').quicksearch('#contactsTable .find');
}
