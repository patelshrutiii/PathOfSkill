function dropdownfill(wat, id) {

    $.ajax({
        url: 'miss.php?wat=' + wat + '&id=' + id,
        type: 'POST',
        success: function(data) {
            alert("hello inside ajax");
            alert(data);
            alert(wat);
            alert(id);
            $("#" + wat).html(data);

        }
    });
}