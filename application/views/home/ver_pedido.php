<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <!--<title>Login</title>-->
  <title>Pedido</title>

  <link rel="stylesheet" href="<?= base_url()?>static/dist/css/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/proy/static/dist/css/flat-ui.min.css">
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATCgCM_q1ygighDWdfD46pPasB2hSxYG0&callback=initMap" async defer></script>
  <script type="text/javascript">
  function confirmar()
  {
    if(confirm('¿Estas seguro de que deceas eliminar el producto'))
      return true;
    else
      return false;
  }
  </script>
</head>
<body>

          <center>
          <h2 align='center'>Pedidos</h2>

          <table border="3" align='center'>
            <tr>
              <td align="center"><h6>cantidad</h6></td>
              <td align="center"><h6>producto</h6></td>
              <!--<td align="center"><h6>Precio</h6></td>-->
              <td align="center"><h6>Fecha de entrega</h6></td>
              <td align="center"><h6>estado</h6></td>
              <!--<td align="center" colspan="3"><h6>destino</h6></td> -->
              <td align="center" colspan="3"><h6>Accion</h6></td>

            </tr>
            <?php

              $status1="Pendiente";
              $status2="En proceso";
              $status3="Entregado";

              if($enlaces!=false)
              {

                  foreach ($enlaces->result() as $row) {
                    echo "<tr>";
                    echo "<td align='center'>".$row->cantidad."</td>";
                    echo "<td align='center'>".$row->nombre."</td>";
                    echo "<td align='center'>".$row->hora_pedido."</td>";
                    if($row->estado== 0)
                    {
                      echo "<td align='center'>".$status1."</td>";
                    }elseif ($row->estado== 1) {
                      echo "<td align='center'>".$status2."</td>";
                    }else {
                        echo "<td align='center'>".$status3."</td>";
                    }

                    //echo "<td align='center' colspan='3'>".$row->destino."</td>";
                    echo "<td align='center'><FORM METHOD='LINK' ACTION=".base_url()."index.php/Pedido/editar/".$row->id_pedido."> <INPUT TYPE='submit' VALUE='Editar' class='btn btn-warning'> </FORM></td>";
                    echo "<td align='center'><FORM onsubmit='return confirmar()'  METHOD='LINK' ACTION=".base_url()."index.php/Pedido/eliminar/".$row->id_pedido."> <INPUT TYPE='submit' VALUE='Eliminar' class='btn btn-danger'> </FORM></td>";

                    echo "</tr>";



                  }

              }
              else {
                  echo "<h4>no hay datos</h4>";
              }
            ?>
          </table>
        </br>
      </br>

            <td align='center'><FORM METHOD='LINK' ACTION="<?php echo base_url()?>index.php/home"> <INPUT TYPE='submit' VALUE='Regresar' class='btn btn-primary'> </FORM>
          </center>
  </body>
</html>
