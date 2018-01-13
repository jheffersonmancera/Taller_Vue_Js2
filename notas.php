_______________________
|Instalacion de vue.js
https://vuejs.org/js/vue.js
https://vuejs.org/js/vue.min.js
________________________
|Instalación Bootstrap
Copiar css del CDN

-Agregar cuerpo al html
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
-*1 
index.html v-bind es ligar