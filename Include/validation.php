<!DOCTYPE html>
<html>
<head>
    <title></title>
<script type="text/javascript">
 $('#email_address').on('keypress', function() {
    var email = /([A-Z0-9a-z_-][^@])+?@[^$#<>?]+?\.[\w]{2,4}/.test(this.value);
    if(!email) {
        $('#error_email').show();
    } else {
        $('#error_email').hide();
    }
  });
  $('#name').on('keypress', function() {
    var name = /^[a-zA-Z\s]+$/.test(this.value);
    if(!name) {
        $('#error_name').show();
    } else {
        $('#error_name').hide();
    }
 })
  $('#phone').keypress(function (event) {
    var keycode = event.which;
    if (!(event.shiftKey == false && (keycode == 46 || keycode == 8 || keycode == 37 || keycode == 39 || (keycode >= 48 && keycode <= 57)))) {
        event.preventDefault();
    }
  });
  $("#phone").bind("keyup keydown", function() {    
    var amount = parseFloat($(this).val());
    if (amount) {
        if (amount > 0 || amount < 10) {
            $("#phonealert").html("Your number must be between 0 and 10");
        } else
    if(amount < 10) {
            $("#phonealert").html("valid phone number");
        }
    } else {
        $("#phonealert").html("Enter numbers only");
    }
});
</script>
</head>
<body>

</body>
</html>