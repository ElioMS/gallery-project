<!DOCTYPE html>
<html>
<head>
	<title> Vue JS</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<style type="text/css">
		.active {
			background-color: red;
		}
	</style>
</head>
<body>

<div id="app">
	<h2> Basic model binding </h2>
    <strong>v-model</strong> is only for inputs
	<input type="" id="input" v-model="message">

	<p> The input value : @{{ message }}</p>


	<h1> Laracast lesson 3 - 4 </h1>
	<h2> Arrays </h2>
	{{-- Manipulando arrays --}}
	<ul>
		{{-- <li v-for="letter in letters"> @{{ letter }}</li> --}}
			<li v-for="letter in letters" v-text="letter"></li>

			<input type="" name="" v-model='newLetter'>
			<button @click="addLetter"> Add name </button>
	</ul>

	<h2> Practicing with events </h2>

		<input type="text" name="" v-model='firstNumber'>
		<input type="text" name="" v-model='secondNumber'>

		<button @click='calculate'> Calculate </button>
		The result : <span v-text='result'></span>

	<h1> Laracast lesson 5 </h1>
	binding attributes of elements using <strong> v-bind or : </strong> directive <br>
	{{-- <input type="" name="" v-bind:value="message"> --}}
		<input type="" name="" :value="message">
		{{-- 'class' : conditional --}}
		<h1 :class="{ 'active' : isActive }"> Binding state !!! </h1>
		<button :class="className" @click='bindingState'> Binding class in button </button>

		<h2>practicing binding disable state</h2>
		<button class="btn btn-primary" @click='changeState' :disabled="state" v-text='buttonMesagge'>  </button>

	<h1> Laracast lesson 6 </h1>
 	{{-- Computed properties are used to make operations in methods not in the view and computed works with cache --}}
 	<h3>Reversed message </h3>
 	<p> @{{ reversedMessage }} </p>

 	<h3>example 2 : arrays </h3>
 	<ul>
 		<p> All tasks </p>
 		<li v-for="task in tasks" v-text='task.description'></li>
 	
 	</ul>

 	<ul>
 	     <p> Tasks with state true using <strong>v-if</strong> directive</p>
 		<li v-for="task in tasks" v-if='task.state' v-text='task.description'></li>
 	</ul>

 	<ul>
 	     <p> Tasks with state false using computed property </p>
 		<li v-for="task in tasksFalse" v-text='task.description'></li>
 	</ul>
</div>


<script src="https://unpkg.com/vue@2.2.4"></script>

<script type="text/javascript">
	var app = new Vue({
		el : '#app',
		data : {
			message : 'Hello World',
			letters : ['A' , 'B' , 'C'],
			newLetter : '',
			firstNumber : '',
			secondNumber: '',
			result : '',
			className : 'btn btn-primary',
			isActive : false,
			state: false,
			buttonMesagge: 'Click to disable',
			tasks : [
				{ description : 'Hello' ,  state : true },
				{ description : 'Hola' ,  state : true },
				{ description : 'Halo' ,  state : false },
				{ description : 'Ciao' ,  state : true },
				{ description : 'Aloha' ,  state : false },
			]
			
		},

		methods: {
			addLetter: function () {
				var array = this.letters;
				array.push(this.newLetter)
				this.newLetter = ''
			},

			calculate() {
				var firstNumber  = parseInt(this.firstNumber);
				var secondNumber = parseInt(this.secondNumber);
				
				this.result = firstNumber + secondNumber;
			},

			bindingState() {
				this.isActive = true
			},

			changeState: function () {
				this.state = true;
				this.buttonMesagge = 'Disabled button';
				// in setTimeout function this doesnt exists so we have to create a new object in
				// this case our new Vue object will be self
				var self = this;

				setTimeout( function () {
					self.state = false;
					self.buttonMesagge = 'Again click me'
				}, 5000);

			}
		},

		computed: {
			reversedMessage: function () {
				return this.message.split(' ').reverse().join()
			},
			tasksFalse () {
				return this.tasks.filter(task => !task.state)
			}
		}
	});

</script>

</body>
</html>