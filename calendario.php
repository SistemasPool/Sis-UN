<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
        <script src="http://momentjs.com/downloads/moment.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script type="text/javascript">
        $(function() {
            $("#check_in").datepicker({ dateFormat: 'yy-mm-dd' });
            $("#check_in").datepicker({
                onSelect: function(dateStr) {
                    var minDate = $(this).datepicker('getDate');
                    if (minDate) { 
                        minDate.setDate(minDate.getDate() + 1);
                    }
                }
            });
        });
        </script>
        <script type="text/javascript">
        $(function() {
            $("#check_out").datepicker({ dateFormat: 'yy-mm-dd' });
            $("#check_out").datepicker({
                onSelect: function(dateStr) {
                    var minDate = $(this).datepicker('getDate');
                    if (minDate) { 
                        minDate.setDate(minDate.getDate() + 1);
                    }
                }
            });
        });
        </script>
    </head>
    <body>
        <form action="recibe_calendario.php" method="POST">
            <label for="check_in">Entrada:</label>
            <input type="text" placeholder="Fecha de entrada" name="check_in" id="check_in">
            <label for="check_in">Entrada:</label>
            <input type="text" placeholder="Fecha de entrada" name="check_out" id="check_out">
            <input type="submit" value="Enviar"> 
        </form>
    </body>
</html>