<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">

        <script src="js0/vendor/modernizr-2.8.3.min.js"></script>
        <script src="js0/vendor/jquery-1.12.0.min.js"></script>


  <link rel="stylesheet" type="text/css" href="compilers/style.css">
    <title>Fiddle Compiler</title>
  </head>
  <body>

<!--Navbar starts-->

<nav class="navbar navbar-expand-sm bg-dark navbar-dark" id="navbar-custom">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" ><input type="submit" id="st" class="btn btn-success" value="Run Code"> <span class="sr-only">(current)</span></a>
      </li>
      
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
     
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<!--Navbar ends-->

<div class="row">
  <div class="col-sm-1">
 
   <h1 style="font-size:1vw;" align="center">Quick Pallete</h1><br><br>
   <button type="button" class="btn btn-primary"  id="scanne">Scanner</button>
   <br><br>
   <button type="button" class="btn btn-primary"  id="foloop">For Loop</button>
   <br><br>
   <button type="button" class="btn btn-primary"  id="outpu">Output</button>
   <br><br>
   <button type="button" class="btn btn-primary"  id="arra">Array</button>
  </div>





  <div class="col-sm-11">
<form action="/compilers/java.php" id="form" name="f2" method="POST" >
<textarea class="form-control" name="code" rows="20" cols="50" id="ta1" contenteditable="true" >
  class Main{
    public static void main(String [] abc){
      System.out.println("hello java");
    }
  }
</textarea>
<hr id="hr1">
<div class="container-fluid">
  <div class="row" id="main2">
    <div class="col-sm-6">
      <label for="input" id="label1"> Enter your Input Here: </label>
      <textarea class="form-control" name="input" rows="5" id="input"></textarea>

    </div>
    <div class="col-sm-6">
      <label for="output" id="label1"> Output: </label>
      <textarea class="form-control" name="div" rows="5"  id="output"></textarea>
    </div>
  </div>

</form>
</div>
</div>





<!--code script-->


<script type="text/javascript">

  $(document).ready(function(){

     $("#st").click(function(){

           $("#output").html("Loading ......");
            $("#form").submit();


     });

  });


</script>

<script>
//wait for page load to initialize script
$(document).ready(function(){
    //listen for form submission
    $('form').on('submit', function(e){
      
      //prevent form from submitting and leaving page
      e.preventDefault();

      // AJAX
      $.ajax({
            type: "POST",
            cache: false, //important or else you might get wrong data returned to you
            // url: "compile.php", //destination
            url: "compilers/java.php",

            datatype: "html", //expected data format from process.php
            data: $('form').serialize(), //target your form's data and serialize for a POST
            success: function(result) { // data is the var which holds the output of your process.php

                $("#output").html(result);
            }
        });
    });
});
</script>
<!--code script ends-->




<--!color changer-->

<--!changer ends-->


<--!scanner-->
<script type="text/javascript">
 $( '#scanne' ).on('click', function(){
  //var impo='import java.util.*;'+'\n';
var valu='Scanner s=new Scanner(System.in);';
            var cursorPos = $('#ta1').prop('selectionStart');
            var v = $('#ta1').val();
            var textBefore = v.substring(0,  cursorPos );
            var textAfter  = v.substring( cursorPos, v.length );
            $('#ta1').val( textBefore+ valu +textAfter );
             //var newta=v.substring(0,v.length);
            // $('#ta1').val( impo+newta );

            //$('#ta1').focus();
            //$('#ta1').setCursorPosition(2);


        });
</script>
<!--scanner ens-->



<--!import-->
<script type="text/javascript">
 $( '#scanne' ).on('click', function(){
  var impo='import java.util.*;'+'\n';
//var valu='Scanner s=new Scanner(System.in);';
            var cursorPos = $('#ta1').prop('selectionStart');
            var v = $('#ta1').val();
            //var textBefore = v.substring(0,  cursorPos );
           // var textAfter  = v.substring( cursorPos, v.length );
            //$('#ta1').val( textBefore+ valu +textAfter );
             var newta=v.substring(0,v.length);
             $('#ta1').val( impo+newta );

            //$('#ta1').focus();
            //$('#ta1').setCursorPosition(2);


        });
</script>
<!--import end-->










<--!for loop-->
<script type="text/javascript">
 $( '#foloop' ).on('click', function(){
var valu='for(int i=0;i< ;i++)'+'\n'+'{}';
            var cursorPos = $('#ta1').prop('selectionStart');
            var v = $('#ta1').val();
            var textBefore = v.substring(0,  cursorPos );
            var textAfter  = v.substring( cursorPos, v.length );
            $('#ta1').val( textBefore+ valu +textAfter );
          //  $('#ta1').focus();
            //$('#ta1').setCursorPosition(9);
        });
</script>
<!--forloop end-->


<--!output-->
<script type="text/javascript">
 $( '#outpu' ).on('click', function(){
var valu='System.out.println();';
            var cursorPos = $('#ta1').prop('selectionStart');
            var v = $('#ta1').val();
            var textBefore = v.substring(0,  cursorPos );
            var textAfter  = v.substring( cursorPos, v.length );
            $('#ta1').val( textBefore+ valu +textAfter );
          //  $('#ta1').focus();
           // $('#ta1').setCursorPosition(9);
        });
</script>
<!--output end-->




<--!array-->
<script type="text/javascript">
 $( '#arra' ).on('click', function(){
var valu='int size= ;'+'\n'+'int ar[]=new int[size];'+'\n'+'for(int i=0;i<size;i++)'+'\n'+'{ar[i]=s.nextInt();}';
            var cursorPos = $('#ta1').prop('selectionStart');
            var v = $('#ta1').val();
            var textBefore = v.substring(0,  cursorPos );
            var textAfter  = v.substring( cursorPos, v.length );
            $('#ta1').val( textBefore+ valu +textAfter );
          //  $('#ta1').focus();
           // $('#ta1').setCursorPosition(9);
        });
</script>
<!--array end-->








    
<!--tabspace-->

<script type="text/javascript">
 $('#ta1').keypress(function (event) {
    if (event.keyCode == 17) {
      alert("pressed");
       event.preventDefault();
    }
});
</script>
<!--tabspace ends-->

    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>