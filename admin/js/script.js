
$('#delete_baker .delete').on('click', function () {

    //alert('Hello');
    let message = confirm('Are you sure to delete');
    if (message) {
        let tr = $(this).closest('td');
        let id = $(this).closest('td').attr("id");

        $.ajax({
            url: 'delete_baker.php',
            type: 'post',
            data: { id: id },
            success: function (response) {
                if (response == "success") {
                    console.log(response);
                }

            },
            error: function () {

            }
        })
        tr.closest('tr').fadeOut();
    }
});

$('#delete_promotion .delete').on('click', function () {

    //alert('Hello');
    let message = confirm('Are you sure to delete');
    if (message) {
        let tr = $(this).closest('td');
        let id = $(this).closest('td').attr("id");

        $.ajax({
            url: 'delete_promotion.php',
            type: 'post',
            data: { id: id },
            success: function (response) {
                console.log(response);

            },
            error: function () {

            }
        })
        tr.closest('tr').fadeOut();
    }
});

$('#delete_size .delete').on('click', function () {
    //alert('Hello');
    let message = confirm('Are you sure to delete');
    if (message) {
        let tr = $(this).closest('td');
        let id = $(this).closest('td').attr("id");

        $.ajax({
            url: 'delete_size.php',
            type: 'post',
            data: { id: id },
            success: function (response) {
                console.log(response);

            },
            error: function () {

            }
        })
        tr.closest('tr').fadeOut();
    }
});

$('#delete_cream .delete').on('click', function () {
    let message = confirm('Are you sure to delete?');
    if (message) {
        let tr = $(this).closest('td');
        let id = $(this).closest('td').attr('id');
        $.ajax({
            url: 'delete_cream.php',
            type: 'post',
            data: { id: id },
            success: function (response) {

            },
            error: function () {

            }
        })
        tr.closest('tr').fadeOut();
    }
});

$('#delete_doll .delete').on('click', function () {
    let message = confirm('Are you sure to delete?');
    if (message) {
        let tr = $(this).closest('td');
        let id = $(this).closest('td').attr('id');
        $.ajax({
            url: 'delete_doll.php',
            type: 'post',
            data: { id: id },
            success: function (response) {

            },
            error: function () {

            }
        })
        tr.closest('tr').fadeOut();
    }
});