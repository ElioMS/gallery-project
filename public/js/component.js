Vue.component('tasklist' , {
	template : '<div> <p v-for="task in tasks"> {{ task.name }} </p> </div>',

	data() {
		return {
			tasks : [
				{name: 'Go to the store', state: true},
				{name: 'Go to the mall', state: true},
				{name: 'Go to the cinema', state: true},
				{name: 'Go to the farm', state: true},
			]
		}
	}
});

Vue.component('message', {

	props: ['title' , 'body'], 

	data(){
		return {
			visible: true,
			clase : 'button is-danger',
			toHide : 'not',
		}
		
	},

	template : `
		<div>
		<article class="message" v-show="visible">
	      	<div class="message-header">
	      		{{ title }}
	      	</div>

	      	<div class="message-body">
	  			{{ body }}
	      	</div>

	      	
	    </article>
	    <button :class="clase" @click='visible = false'> Close </button>
	    </div>`,

	 // methods: {
	 // 	closeMessage: function () {
	 // 		this.visible = false;
	 // 	},

	 // },

});

Vue.component('task' , {
	template : '<button @click="alertMessage"> {{ message }}  </button>',

	data() {
		return {
			message : 'Foobar'
		}
	},

	methods : {
		alertMessage : function () {
			alert('Hey component')
		}
	}
});


var app = new Vue({
	el : '#root',
})		