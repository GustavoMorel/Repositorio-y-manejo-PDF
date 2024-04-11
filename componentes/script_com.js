
document.getElementById("myForm").addEventListener("submit", function(event) {
  var opcion1 = document.getElementById("opcion1");
  var opcion1_valor = opcion1.value;
  var opcion1_texto = opcion1.options[opcion1.selectedIndex].text;
  
  var opcion2 = document.getElementById("opcion2");
  var opcion2_valor = opcion2.value;
  var opcion2_texto = opcion2.options[opcion2.selectedIndex].text;
  
  // Añade campos ocultos al formulario con los valores y textos seleccionados
  var hidden1 = document.createElement("input");
  hidden1.setAttribute("type", "hidden");
  hidden1.setAttribute("name", "opcion1_valor");
  hidden1.setAttribute("value", opcion1_valor);
  this.appendChild(hidden1);
  
  var hidden2 = document.createElement("input");
  hidden2.setAttribute("type", "hidden");
  hidden2.setAttribute("name", "opcion1_texto");
  hidden2.setAttribute("value", opcion1_texto);
  this.appendChild(hidden2);
  
  var hidden3 = document.createElement("input");
  hidden3.setAttribute("type", "hidden");
  hidden3.setAttribute("name", "opcion2_valor");
  hidden3.setAttribute("value", opcion2_valor);
  this.appendChild(hidden3);
  
  var hidden4 = document.createElement("input");
  hidden4.setAttribute("type", "hidden");
  hidden4.setAttribute("name", "opcion2_texto");
  hidden4.setAttribute("value", opcion2_texto);
  this.appendChild(hidden4);
});
