Javascript

"Javascript Output"

	* Writing into an alert box, using window.alert().
	* Writing into the HTML output using document.write().
	* Writing into an HTML element, using innerHTML.
	* Writing into the browser console, using console.log().

"Variable naming rules."

	*      A variable may include only the letters a-z, A-Z, 0-9, the $ symbol and the underscore.
	*      No other characters, such as spaces or punctuation, are allowed in a variable name.
	*      Are case-sensitive.
	*      There is no set limit on variable name lengths.

"Declare many variables in one statement."
	var person = "John Doe", carName = "Volvo", price = 200;

"String concatenation"
	document.write("You have " + messages + "messages.");

	name= "James";
	name += "Dean";

"JavaScript Function Syntax"

	function name(parameter1, parameter2, parameter3) {
	    code to be executed
	}

	* Function parameters are the names listed in the function definition.
	* Function arguments are the real values received by the function when it is invoked.
	* Inside the function, the arguments are used as local variables.

	Function Scope Defining what is accesible in code and where.

"Variable Scope"

	function test()
	{
	     a = 123          // global scope
	     var b = 456     // local scope
	     if (a == 123) var c = 789     // local scope 
	}


"Scope" 
	var x = 2000;

	function someFunc() {
		var y = 12;
		return y;
	}

	var z = x + y; // Invalid use of y

	var x = x + someFunc(); // z == 2012


"Functions in Functions"
	function outerFunction(n) {
		function innerFunction() {
			return n * n;
		}
		return innerFunction();
	}

	var x = outerFunction(4); // x == 16

	// innerFunction cannot be called directly


"Immediate Functions"
	(function() {...} ());
	or
	(function() {...} )();


"Module Pattern"
	var mod = (function() {
		var m = 2000, c = 0, d = 10, y = 2;
		return {
			getHiddenYear : function() {
				return m + c + d + y;
			}
		}
	}());
	var x = mod.getHiddenYear(); // x == 2012


"With"

	string = "The quick brown fox jumps over the lazy dog";

	with (string) 
	{ 
	     document.write("The string is " + length + " characters<br>");      
	     document.writeln("In uppercase it's: " + toUpperCase()) 
	}


"Functions - The arguments array" 

	* Pass more than n items to the function:

	displayItems("oso", "perro", "gato");

	function displayItems() 
	{ 
	     for (j=0; j < displayItems.arguments.length; ++j) 
	     { 
	          document.write(displayItems.arguments[j] + "<br>") 
	     } 
	}


	* Cleaning up a full name:

	function fixNames("tHE", "dAllAs", "coWBoys");

	function fixNames()
	{
	     var s = ""; 
	     for (j=0; j < fixNames.arguments.length; ++j) 
	          s += fixNames.arguments[j].charAt(0).toUpperCase() + fixNames.arguments[j].substr(1).toLowerCase() + " "; 
	          return s.substr(0, s.length - 1) 
	}


"Arrays"

	toys = ['bat', 'ball', 'puzzle']; 
	toys = Array('bat', 'ball', 'puzzle');

	arrayName = new Array();

	arrayName = [];

	arrayName.push("Element 1")
	arrayName.push("Element 2")

	arrayName[0] = "Element 1"
	arrayName[1] = "Element 2"

	// Creating, building and printing an array
	numbers = []

	numbers.push("One")
	numbers.push("Two")
	numbers.push("Three")

	for(j = 0; j < numbers.length; ++j) { document.write("Element " + j + " = " + numbers[j] + "<br>")}


"Associative Arrays"

	// Creating
	balls = {"golf":"Golf balls, 6", "tennis":"Tennis balls, 3", "soccer":"Soccer ball, 1", "ping":"Ping Pong balls, 1 doz"}

	// Displaying
	for(ball in balls){document.write(ball + " = " + balls[ball] + "<br>")}


"Array Methods"

	* concat
		fruit = ['banana', 'apple', 'grapes']
		veg = ['onion', 'tomato', 'avocado']

		document.write(fruit.concat(veg));
		list = fruit.concat(veg);

	* join
		pets = ['cat', 'dog', 'rabbit', 'hamster']

		document.write(pets.join() + "<br>"); 
		document.write(pets.join(' ') + '<br>');
		document.write(pets.join(':') + "<br>");

	* pop and push
		sports = ['football', 'hockey', 'basketball']
		sports.push('baseball')
		sports.pop()   // Removes the last element

	* reverse()

	* sort()    // Alphabetical sort
		console.log(fruit.sort());

	* sort.reverse()

	* sort numeric values
		numbers.sort( function(a,b){return a - b} );
		numbers.sort( function(a,b){return b - a} );      // Descending

	* slice
		fruit = fruit.slice(0,2);     // ["apple", "banana"]

	* splice
       fruit = fruit.splice(1, 2, "melon","grape");
       console.log(fruit);

	* map
		fruit = fruit.map(function (i) { return i.toUpperCase() });     // convert all letters in upercase

	* filter
		fruit = fruit.filter(function (i) {return i[0] === "a"; });     // apple

	* every
		console.log(fruit.every( function (i) { return i[0] === "a"; }));     // returns False. It checks that Every element begins with a "a" letter.
		console.log(fruit.every( function (i) { return i.length > 0; }));     // returns True. 

	* some
        console.log(fruit.every( function (i) { return i[0] === "a"; }));     // returns True. 

	* forEach
		fruit.forEach(function (i) {
		     ...
		}


"Methods"
     
	var ops = {
	     add : function addNumbers(n1, n2) {
	          return n1 + n2;
	     }
	};

	var x = ops.add(23,12);     // x = 35

"Objects"
	Instantiate an object

		* "Object Initializer syntax | Object literal"		

			var car = {type:"Fiat", model:500, color:"white"};

			Accessing Object Properties:
				car.type;
				car[model];

			var dog = {
				breed: 	"German Shepherd",
				bark: 	function() { console.log("woof"); }
			};

			dog.bark();


		* "JSON object notation"
			var dog = {};
			dog.breed = "German Shepherd";
			dog.bark = function() { console.log("woof"); };










	