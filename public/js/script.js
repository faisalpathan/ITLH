$(document).ready(function() 
{
		$("#mfimg1").hover(function()
		{ 	
            $(this).css("src", "images/mfimg1.jpg");
        },function()
		{
           $(this).css("src", "images/mfimg1(1).jpg");
        });
});