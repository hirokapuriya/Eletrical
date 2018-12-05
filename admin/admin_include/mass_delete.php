<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script type="text/javascript">
        $(document).ready(function()
        {
            $('#select_all').on('click',function(){
                if(this.checked){
                    $('.checkbox').each(function(){
                        this.checked = true;
                    });
                }else{
                     $('.checkbox').each(function(){
                        this.checked = false;
                    });
                }
            });
    
            $('.checkbox').on('click',function(){
                if($('.checkbox:checked').length == $('.checkbox').length){
                    $('#select_all').prop('checked',true);
                }else{
                    $('#select_all').prop('checked',false);
                }
            });
            //$("#select_count").html($("input.emp_checkbox:checked").length+" Selected");
        });

        function delete_confirm()
        {
            if($('.checkbox:checked').length > 0){
                var result = confirm("Are you sure to delete selected users?");
                if(result){
                    return true;
                }else{
                    return false;
                }
            }else{
                alert('Select at least 1 record to delete.');
                return false;
            }
        }
    </script>
</head>
<body>

</body>
</html>