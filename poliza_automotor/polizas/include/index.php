<html>  
    <head>  
        <title></title>  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    </head>  
    <body>  
        <div class="container">  
            <br />  
            <br />
			<br />
			<div class="table-responsive">  
<br />
				<span id="result"></span>
				<div id="live_data"></div>                 
			</div>  
		</div>
    </body>  
</html>  
<script>  
$(document).ready(function(){  
    function fetch_data()  
    {  
        $.ajax({  
            url:"select.php",  
            method:"POST",  
            success:function(data){  
				$('#live_data').html(data);  
            }  
        });  
    }  
    fetch_data();  
    $(document).on('click', '#btn_add', function(){  
        var suma_asegurada = $('#suma_asegurada').text();  
        var estado = $('#estado').text();  
        if(suma_asegurada == '')  
        {  
            alert("Enter First Name");  
            return false;  
        }  
        if(estado == '')  
        {  
            alert("Enter Last Name");  
            return false;  
        }  
        $.ajax({  
            url:"insert.php",  
            method:"POST",  
            data:{suma_asegurada:suma_asegurada, estado:estado},  
            dataType:"text",  
            success:function(data)  
            {  
                alert(data);  
                fetch_data();  
            }  
        })  
    });  
    
	function edit_data(id_respciv, text, column_name)  
    {  
        $.ajax({  
            url:"edit.php",  
            method:"POST",  
            data:{id_respciv:id_respciv, text:text, column_name:column_name},  
            dataType:"text",  
            success:function(data){  
                //alert(data);
				$('#result').html("<div class='alert alert-success'>"+data+"</div>");
            }  
        });  
    }  
    $(document).on('blur', '.suma_asegurada', function(){  
        var id_respciv = $(this).data("id1");  
        var suma_asegurada = $(this).text();  
        edit_data(id_respciv, suma_asegurada, "suma_asegurada");  
    });  
    $(document).on('blur', '.estado', function(){  
        var id_respciv = $(this).data("id2");  
        var estado = $(this).text();  
        edit_data(id_respciv,estado, "estado");  
    });  
    
    $(document).on('click', '.btn_delete', function(){  
        var id_respciv=$(this).data("id3");
        if(confirm("Esta seguro de eliminar el registro?"))  
        {  
            $.ajax({  
                url:"delete.php",  
                method:"POST",  
                data:{id_respciv:id_respciv},  
                dataType:"text",  
                success:function(data){  
                    alert(data);  
                    fetch_data();  
                }  
            });  
        }  
    });  
});  
</script>