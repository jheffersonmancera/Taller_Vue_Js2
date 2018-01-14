new Vue({
	el: '#app',//aqui se coloca un id, una clase o una etiqueta. 
	data:{
		lists:[//todos los datos se deben manejar dentro de la llave data
			/*{keep: 'uno1', completed: false},
			{keep: 'dos', completed: true},
			{keep: 'tres', completed: false},
			{keep: 'cuatro', completed: true},*/		
		],
		//newKeep: ''
		//*2
	},
	methods: {
		addKeep: function() {
			this.lists.push({ keep: this.newKeep, completed: false});
			this.newKeep = '';
		}
	}
});