$(document).ready(function(){
    $('#add_button').click(function(){
        $('#user_form')[0].reset();
        $('.modal-title').text('Add User');
        $('#action').val('Add');
        $('#operation').val('Add');
        $('#user_uploaded_image').html('');
    });

    var dataTable = $('#user_data').DataTable({
        "processing": true,
        "serverSide": true,
        "order": [],
        "ajax": {
            url: "fetch.php",
            method: "POST"
        },
        "columnDefs": [
            {
                "targets": [0, 3, 4],
                "orderable": false
            },
        ],
    });

    $(document).on('submit', '#user_form', function(event){
        event.preventDefault();
        var firstName = $('#first_name').val();
        var lastName = $('#last_name').val();
        var extension = $('#user_image').val().split('.').pop().toLowerCase();
        if(extension != '') {
            if(jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                alert("Invalid Image File");
                $('#user_image').val('');
                return false;
            }
        }

        if(firstName != '' && lastName != '') {
            $.ajax({
                url:"insert.php",
                method:"POST",
                data: new FormData(this),
                contentType: false,
                processData: false,
                success: function(data) {
                    alert(data);
                    $('#user_form')[0].reset();
                    $('#userModal').modal('hide');
                    dataTable.ajax.reload();
                }
            });
        } else {
            alert("Ambos os campos são obrigatórios.")
        }
    });
});