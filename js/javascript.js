$(document).ready(function(){
	$("#btn1").click(function(){
		$(this).hide();
		$("#signin_panel").css("display","block");
		

	});
		$("#create").click(function(){
		$("#signin_panel").css("display","none");
		$("#signup_panel").css("display","block");

		});

    $("#logout").click(function (e) {
        $("#signout_panel").toggle();
        e.preventDefault();
    });
    $(document).click(function(e){
        if(!$(e.target).closest('#logout, #signout_panel').length){
            $("#signout_panel").hide();
        }
    });

	
	  $("#compose").click(function (e) {
        $("#returnTicket").toggle();
        e.preventDefault();
    });
    $(document).click(function(e){
        if(!$(e.target).closest('#compose, #returnTicket').length){
            $("#returnTicket").hide();
        }
    });

     $("#cancel").click(function (e) {
        $("#returnTicket").hide();
        e.preventDefault();
    });
     $("#selectStatus").change(function(){
       console.log("Harare")

     });

    


});

 function ajax(){

        var req = new XMLHttpRequest();
        req.onreadystatechange = function(){
          if(req.readyState == 4 && req.status == 200){
            document.getElementById('centerbar').innerHTML =  req.responseText;
          }
        }
        req.open('GET','chat.php',true);
        req.send();
 }

function showMessages(){
   var x = document.getElementById('centerbar');

      var y = x.getElementsByClassName("listTicket");
      // console.log(y);
      


      for(let i = 0; i < y.length; i++){
          y[i].addEventListener('click', function() {
     
     var z = y[i].lastElementChild;
     // console.log(z);
               
document.getElementById("centerbar").innerHTML = z.innerHTML;
     

          });
      }
    }

       function viewOutBox(){

        var req = new XMLHttpRequest();
        req.onreadystatechange = function(){
          if(req.readyState == 4 && req.status == 200){
            document.getElementById('centerbar').innerHTML =  req.responseText;
          }
        }
        req.open('GET','outbox.php',true);
        req.send();
 }

      function viewInbox(){

        var req = new XMLHttpRequest();
        req.onreadystatechange = function(){
          if(req.readyState == 4 && req.status == 200){
            document.getElementById('centerbar').innerHTML =  req.responseText;
          }
        }
        req.open('GET','userinbox.php',true);
        req.send();
 }

    function adminReply(){

        var req = new XMLHttpRequest();
        req.onreadystatechange = function(){
          if(req.readyState == 4 && req.status == 200){
            document.getElementById('centerbar').innerHTML =  req.responseText;
          }
        }
        req.open('GET','viewAdminReply.php',true);
        req.send();
 }

 function replyFunction(){
    var x = document.getElementById('reply').parentElement.parentElement;
   var y = document.getElementById("emailUser").value;
     var a = document.getElementById("subjectUser").value;
   var z = document.getElementById('replyTicket');
   

 

 
   document.getElementById('centerbar').innerHTML = z.innerHTML;

   document.getElementById("requestor").placeholder = y;
    document.getElementById("requestor").value = y;

    document.getElementById("subject").placeholder = a;
    document.getElementById("subject").value = a;
   



 }

function myInbox(){
 //      alert("Hie");

 // var req = new XMLHttpRequest();
 // req.onreadystatechange = function(){
 // if(req.readyState == 4 && req.status == 200){
 //  document.getElementById('numInbox').innerHTML =  req.responseText;
 // }
 // }
 //  req.open('GET','unReady.php',true);
 //       req.send();
}
function updateStatus(id,email){
  //console.log(id);
  //console.log(email)
  $(function(){
    $.ajax({
      type: "POST",
      url: 'updateStatus.php',
      data: ({uid:id, uemail:email}),
      success: function(data) {
       console.log(data);
      }
    });
  });
   

}

function updateAdminStatus(id,email){
  //console.log(id);
  //console.log(email)
  $(function(){
    $.ajax({
      type: "POST",
      url: 'updateAdminStatus.php',
      data: ({uid:id, uemail:email}),
      success: function(data) {
       console.log(data);
      }
    });
  });
   

}

function validate(){
  var a = document.getElementById("password").value;
  var b = document.getElementById("passconfirm").value;
  var p = document.getElementById("result");

  if(a != b){
    p.textContent = "Password did not match"
    return false;
  }
  else{
    return true;
  }

}
// function selectStatus(){
//   var x = document.getElementById("btnProgress");
//   x.style.display = "block";
// }
// function progressStatus(){
//   alert("What the fuck");

// }

 

 


       
        


  



