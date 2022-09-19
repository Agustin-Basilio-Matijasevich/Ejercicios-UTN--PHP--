        function Vaciar_Tabla()
        {
          if (confirm("¿Desea vaciar la Lista?"))
          {
            location.href = "./index.php?tabla=290101";
          }
        }

        function Mostrar_Nombre ()
        {
          var nombre=$("#nombre").val();
          alert(nombre);
        }