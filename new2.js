  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyCKtyxFI3RaraOFRFGpYwCPco1LJnhxKcg",
    authDomain: "jfiddle-9dfef.firebaseapp.com",
    databaseURL: "https://jfiddle-9dfef.firebaseio.com",
    projectId: "jfiddle-9dfef",
    storageBucket: "jfiddle-9dfef.appspot.com",
    messagingSenderId: "528273465313",
    appId: "1:528273465313:web:c285738311f07784743ca0",
    measurementId: "G-74BS20YG7H"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);


  const auth = firebase.auth();


	function signUp(){

		var email = document.getElementById("email");
		var password = document.getElementById("password");

		const promise = auth.createUserWithEmailAndPassword(email.value, password.value);
		promise.catch(e => alert(e.message));

		alert("Signed Up");
	}



	function signIn(){

		var email = document.getElementById("email");
		var password = document.getElementById("password");


		const promise = auth.signInWithEmailAndPassword(email.value, password.value);
		promise.catch(e => alert(e.message));



	}


	function signOut(){

		auth.signOut();
		alert("Signed Out");

	}



	auth.onAuthStateChanged(function(user){

		if(user){

			var email = user.email;
			alert("Active User " + email);

			//Take user to a different or home page

			//is signed in

		}else{

			alert("No Active User");
			//no user is signed in
		}



	});



