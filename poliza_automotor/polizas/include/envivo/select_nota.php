<?php  
 $connect = mysqli_connect("localhost", "root", "", "unibienes");  
 $output = '';  
 $sql = "SELECT * FROM respon_civil_auto_pol ORDER BY id_respciv DESC";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="10%">Id</th>  
                     <th width="40%">Suma Asegurada</th>  
                     <th width="40%">Estado</th>  
                     <th width="10%">Eliminar</th>  
                </tr>';  
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
	  if($rows > 10)
	  {
		  $delete_records = $rows - 10;
		  $delete_sql = "DELETE FROM respon_civil_auto_pol LIMIT $delete_records";
		  mysqli_query($connect, $delete_sql);
	  }
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["id_respciv"].'</td>  
                     <td class="suma_asegurada" data-id1="'.$row["id_respciv"].'" contenteditable>'.$row["suma_asegurada"].'</td>
                     <td class="estado" data-id2="'.$row["id_respciv"].'" contenteditable>'.$row["estado"].'</td>
                     <td><button type="button" name="delete_btn" data-id3="'.$row["id_respciv"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="suma_asegurada" contenteditable></td>
                <td id="estado" contenteditable></td>
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '
				<tr>  
					<td></td>  
					<td id="suma_asegurada" contenteditable></td> 
                    <td id="estado" contenteditable></td> 
					<td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
			   </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>