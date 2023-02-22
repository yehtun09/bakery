<script src="js/sweetalert.min.js"></script>
<?php
echo "<script>
swal({
        title: 'Are you sure?',
        text: 'Once deleted, you will not be able to recover this imaginary file!',
        icon: 'warning',
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
        if (willDelete) {
            swal('Poof! Your imaginary file has been deleted!', {
                icon: 'success',
            });
        } else {
            swal('Your imaginary file is safe!');
        }
    });
    </script>";
?>

else {
echo "<h2>Making your life sweeter one bite at a time!</h2>";
}