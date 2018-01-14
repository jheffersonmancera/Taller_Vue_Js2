_______________________
|Instalacion de vue.js
//version de desarrollo
https://vuejs.org/js/vue.js
//version de producción
https://vuejs.org/js/vue.min.js
//se guarda la página completa para extraer el archivo js
-incluir el script de vue al final de la página index de la web.
-
________________________
|Instalación Bootstrap
Copiar css del CDN

-Agregar cuerpo al html
-incluir en una linea en el head del index

______________________
|index.html
Crear  de la maqueta de la lista html


________________________________
|SCRIPT.JS
//incluir este archivo en el index
-Agregar lista vue al script 
new Vue({
	el: '#appVue',
	data:{
		lists:[
			{keep: 'uno1', completed: false},
			{keep: 'dos', completed: true},
			{keep: 'tres', completed: false},
			{keep: 'cuatro', completed: true},	
		],
	}
});
____________________________________
|index.html
*1 index.html v-bind es ligar
-en el <li></li> se agrega un v-for <li v-for></li>
-agregar <li v-bind-class></li>
-imprimir el valor que queremos traer de la lista 
<li>{{item.keep}}</li>
en el <input> agregamos el v-model para 
*2 relacionarla con vue <input v-model="newKeep">
______________________________________
|script.js
*2 hace el vinculo con el v-model en el index
____________________________________
|index.html
-Crear método para agregar elementos
*3 cuando se suelta la tecla enter se ejecuta el método addKeep

______________________________________
|script.js
*3 se agrega el metodo usado en el index para agregar la nota
*4 vamos a empujar los datos desde la caja de texto hacia el arraylist
---------------------------------------------------------------
|MARCAR Y DESMARCAR
____________________________________
|index.html
*4 <li @click="item.completed == ! item.completed"></li>
al hacer click en el item su propiedad completed se invierte de true a false y de false a true
*5 <h1 v-if="lists.length > 0"></h1> si la longitud del elemento 
   <h1 v-else="lists"></h1>	

   