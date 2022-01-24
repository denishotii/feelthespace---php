
  
 var messagesRef = firebase.database().ref('messages');

 // Listen for form submit
 document.getElementById('contact-form').addEventListener('submit', submitForm);
 
 // Submit form
 function submitForm(e){
     e.preventDefault();
 
   // Get values
   var name = getInputVal('name');
   var email = getInputVal('email');
   var subject = "Pershendetje";
   var message = getInputVal('message');
 
   // Save message
   saveMessage(name, email, subject, message);
 
   // Show alert
   document.querySelector('.alert').style.display = 'block';
 
   // Hide alert after 3 seconds
   setTimeout(function(){
     document.querySelector('.alert').style.display = 'none';
   },3000);
 
   // Clear form
   document.getElementById('contact-form').reset();
 }
 
 // Function to get get form values
 function getInputVal(id){
   return document.getElementById(id).value;
 }
 
 // Add date and time
 var currentdate = new Date();
 var datetime = "Sent on: " + currentdate.getDate() + "/"
                 + (currentdate.getMonth()+1)  + "/" 
                 + currentdate.getFullYear() + " @ "  
                 + currentdate.getHours() + ":"  
                 + currentdate.getMinutes() + ":" 
                 + currentdate.getSeconds();
 
 // Save message to firebase
 function saveMessage(name, email, subject, message){
   var newMessageRef = messagesRef.push();
   newMessageRef.set({
     name: name,
     email:email,
     subject:subject,
     message:message,
     date:datetime
   });
 }