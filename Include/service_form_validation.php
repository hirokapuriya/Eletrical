<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		
		function str()
		{
			var str = /^[a-zA-Z\s]+$/;
			var eml = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
			var pas= /^[0-9a-zA-Z]+$/; 
			var pic= /(^|\s+).+\.(jpe?g|png|gif|tiff)(\s+|$)/;	
			
			
			if (document.hk.name.value=="")
			{
				alert("Plases Enter your name");
				document.hk.name.focus();
				return false;
			}
			if(!str.test(document.hk.name.value))
			{
				alert("Please Enter Charctor Value");
				document.hk.name.focus();
				return false;
			}
			/*if (document.hk.eml.value=="")
			{
				alert("Plases Enter your Email");
				document.hk.eml.focus();
				return false;
			}
			if(!eml.test(document.hk.eml.value))
			{
				alert("Plases Charect Your Email");
				document.hk.eml.focus();
				return false;
			}
			if (document.hk.pwd.value=="")
			{
				alert("Plases Enter your Password");
				document.hk.pwd.focus();
				return false;
			}
			if (document.hk.cpwd.value=="")
			{
				alert("Plases Enter your Confirm Password");
				document.hk.cpwd.focus();
				return false;
			}
			if(document.hk.pwd.value != document.hk.cpwd.value)
			{
				alert("Plases Enter Correct Password");
				document.hk.cpa.focus();
				return false;
			}
			if(document.hk.image.value=="")
			{
				alert("Please Enter your Image");
				document.hk.image.focus();
				return false;
			}
			if(!pic.test(document.hk.image.value))
			{
				alert("Please Select png,jpg,tiff file");
				document.hk.image.focus();
				return false;
			}*/
			return true();
		}
		//Basic Mathematics();
		//Basic Computer();
		
		
	</script>
</head>
<body>

</body>
</html>