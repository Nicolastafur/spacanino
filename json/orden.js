var contenido = document.querySelector("#contenido");
var url = "../json/ordenes.php";

fetch(url)
  .then((res) => res.json())
  .then((datos) => {
    console.log(datos);

    for (var valor of datos.ordenes) {
      contenido.innerHTML += `
  
  <tr>
  <td scope="row">${valor.OrdenN}</td>
  <td>${valor.cliente}</td>
  <td>${valor.auxiliar}</td>
  <td>${valor.recepcionista}</td>
  <td>${valor.total}</td>
  <td>${valor.fecha}</td>
  <td>${valor.estado == 2 ? "Desactivado" : "activado"}</td>
  <td><a href="delete.php?numero_orden=${valor.OrdenN}">eliminar</a></td>
  
  </tr>
  
  `;
    }
  });
