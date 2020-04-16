
<div>
    
    <table>
        <tr>
            <td>
               <label>Valor:<input type="number" name="valor" id="valor"></label> 
            </td>
            <td>
                <label>Porcentaje:<input type="number" name="porcentaje" id="porcentaje"></label>
            </td>
            <td>
                <label>Total:<input type="number" name="total" id="total" readonly="readonly"></label>
            </td>
        </tr>
    </table>

</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
	        
            $(function() {

            $("#valor").change(function() {
            var rvalor = $(this).val();

            $("#porcentaje").change(function() {
                var rporcentaje = $(this).val();
                var interes = rvalor * (rporcentaje/100);
                
                $("#total").val(interes);
                //¿y cómo capturo el valor por las flechitas del input number?
            });

        });
   });

</script>