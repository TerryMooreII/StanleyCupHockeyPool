 
$(".winnerSelect").children('select').change(function() {
      // save the field's new value
      $.post("_posts/roundWinningTeamPost.php", { fields: $(this).attr('id'), value: $(this).val() }, 
			function(data){
			    //alert("Response: " + data );
			    $("#statusMessage").html("<p>"+ data + "</p>");
			    $("#statusMessage").fadeIn("fast", function () {
			    $("#statusMessage").fadeOut(2000);
		    });
	    });
    });  	

  $(".pickSelect").children('select').change(function() {
  	
      // save the field's new value
      $.post("_posts/bracketPost.php", { fields: $(this).attr('id'), value: $(this).val() }, 
			 function(data){
          ////console.log(data);
          $("#statusMessage").html("<p>"+ data + "</p>");
          $("#statusMessage").fadeIn("fast", function () {
          $("#statusMessage").fadeOut(2000);
        });
      });
    });

/*    $("#WesternBracket").hide();
  	$(".tab").click(function() {
  		var tab = $(this).attr("title");
  		if (tab == "EasternBracket"){
  		  $("#EasternBracket").show();
  		  $("#WesternBracket").hide();
  		}else if (tab == "WesternBracket"){
  		  $("#EasternBracket").hide();
  		  $("#WesternBracket").show();
  		}
  	});
*/

  $("#WesternBracket").hide();
    $(".tab").click(function() {
      var tab = $(this).attr("title");
      if (tab == "EasternBracket"){
        $("#EasternBracket").fadeIn(500);
        $("#WesternBracket").hide();
      }else if (tab == "WesternBracket"){
        $("#WesternBracket").fadeIn(500);
        $("#EasternBracket").hide();  
      }
    });



	$('.pickClick').on('click', function(){
  	  $this = $(this);
    	var selectedTeam = $this.text().substr(3);
      var img = $this.children('img').attr('src');
      ////console.log(img);
      if (selectedTeam == "" ){
         return;
      }
     
  		bracketData = $this.data('bracket');
  		
  		winnerBracket = bracketData.substr(0,5);
  		////console.log("Winner: " + winnerBracket);
  		imgHtml = '<img class="bracketImg" src="' + img + '" />'; 
  		$this.parent().parent().find("[data-bracket='"+winnerBracket+"']").text(selectedTeam).prepend(imgHtml);
  		$.post('_posts/userPickPost.php', { team: selectedTeam, round: winnerBracket }, 
  			function(data){
          ////console.log(data);
          $("#statusMessage").html("<p>"+ data + "</p>");
          $("#statusMessage").fadeIn("fast", function () {
          $("#statusMessage").fadeOut(2000);
        });
      });
  	});


  	/* menu */
  	 
    $('#nav li').hover(
        function () {
            $(this).stop();
            //show its submenu
            $('ul', this).fadeIn(100);
 
        }, 
        function () {
           $(this).stop();
            //hide its submenu
            $('ul', this).fadeOut(100);         
        }
    );
     
     /*End Menu*/


  /*User Accounts Menu*/
    
  $("#submit").click(function() {
      // save the field's new value
      var $this = $(this);
      var id = $("#id").val();
      var userName = $("#userId").val().toLowerCase();
      var fullName = $("#fullName").val();
      var emailAddress = $("#emailAddress").val();
      var password = $("#password").val();
      var isAdmin = $('#isAdmin').is(':checked');
      var action = $('#action').val();

      if (! isAdmin){
         isAdmin = "FALSE";
      }else{
          isAdmin = "TRUE";
      }

      $.post("_posts/userPost.php", {a:action, id:id, userName:userName, fullName:fullName, emailAddress:emailAddress, password:password, isAdmin:isAdmin }, 
      function(data){
          $('#userForm').html(data);
          //console.log(data);
               setTimeout( function(){
                  $('#userForm').slideUp();
                  if ( window.location.pathname.indexOf("userAccounts.php") != -1) {
                    location.replace("userAccounts.php");
                  }
                }, 10);
          });
    });

  $(".deleteUser").click(function() {
      // save the field's new value
      var id = $(this).attr('id');
      
      $.post("_posts/userPost.php", { id:id, a:'d' }, 
      function(data){
          //alert("Response: " + data );
          $("#statusMessage").html("<p>User Deleted</p>");
          $("#statusMessage").fadeIn("fast", function () {
            $("#statusMessage").fadeOut(1000, function() {
            location.replace("userAccounts.php");
            });

          });
      });
    });
  /*End User Accounts*/

  $("#userId").on('blur', function(){
      self = $(this);
      val = self.val();
      $.post("_posts/doesUserIdExistsPost.php", 
        { 
          userid: val,    
        }, function(data){
          //console.log("data: " + data);

          if (data.indexOf("1") != -1 ){
            $(self).val('');
            $('.errMsg').html('<br /> User Id: ' + val + ' is already taken.<br />  '); 
            
          }else{
            $('.errMsg').text('');
          }
        });
  });

  
$("#loginBtn").on('click', function(e){

  $.post("_posts/loginPost.php", 
    { 
      userName: $('#userName').val().toLowerCase(), 
      password: $('#password').val() 
    },
    function( data ){
      var errMsg = "";
      if ( data == 0){
        window.location.replace("viewStandings.php");
      }else if( data == 1){
        errMsg = "Error: Please enter both user name and password";
      }else if ( data == 2 ){
        errMsg = "Error: Invalid user name or password.";
      }
      $(".error").text(errMsg).show();
    }
  )
  
  e.preventDefault()
});



$("#lockoutDateBtn").click(function() {
      
      input = $('#date');
      
      date = $('#date').val();
      hour = $('#hours').val();
      min = $('#min').val();
      ampm = $('#ampm').val();
      if ( ampm == 'PM'){
        hour = parseInt( hour ) + 12;
      }
    
      dateTime = date + " " + hour + ":" + min + ":00";

      $.post("_posts/setBracketLockDatePost.php", { date: dateTime, round:input.data('round') }, 
      function(data){
          //console.log(data);
          $("#statusMessage").html("<p>"+ data + "</p>");
          $("#statusMessage").fadeIn("fast", function () {
          $("#statusMessage").fadeOut(1000, function() {
          });

        });
    });
  });


$('#tieBreaker').on('blur', function(){
  var $this = $(this);
  var table = $this.data('table');
  var val = $this.val();  
  //console.log(table);
  //console.log(val);
  $.post('_posts/tieBreakerPost.php', 
    { 
      query: table, 
      total: val 
    }, function(data){
      //console.log(data);
      $('#pickagain').text(data);    
    })

});


$('#submitPointsPerRound').on('click', function(){
  r1 = $('#Round1').val(); 
  r2 = $('#Round2').val();
  r3 = $('#Round3').val();
  r4 = $('#Round4').val();
  
  if ( r1 != '' && r2 != '' && r3 != '' && r4 != '' ){
    $.post('_posts/pointPerRoundPost.php',
     {
      r1:r1,
      r2:r2,
      r3:r3,
      r4:r4
    }, function(data){
      //console.log(data);
      $('#msg').text(data).fadeOut(2000); 
    });

  }else{
    //console.log('error');
    $('#msg').text("Enter a value in all fields.").addClass("error");
  }
});


$('.editUser').on('click', function(e){
  var id = $(this).data('edit');
  var b =  $(this).data('label');
   //console.log (b) 
 $.get( "userAccountForm.php", {id:id}, function(data){
      $('#userForm').html('<div id="close"><img src="img/black_close.gif" alt="X" style="height:20px;width:20px;opacity:.5"/></div>' + data).slideDown();
      $("#submit").val( b); 
      $('#close').on('click', function(){
          $('#userForm').slideUp();
       });
  });
   $('#userForm').slideDown();
  e.preventDefault();
});


$('#topMenu').children('ul').children('li').on('click', function(){
  $.get( "userAccountForm.php", function(data){
        $('#userForm').html('<div id="close">X</div>' + data).slideDown();
         $('#close').on('click', function(){
          $('#userForm').slideUp();
        });
  });
 

});

$(".nameBox").on('mouseenter', function(e){
    var x = e.pageX ;
    var y = e.pageY ;
    var name = $(this).data('team');
    $('#showTeamName').css('top',y + 'px').css('left', x + 'px').html('<p>' + name + '</p>').show();
  }).on('mouseleave', function(){
    $('#showTeamName').hide();  
  });
