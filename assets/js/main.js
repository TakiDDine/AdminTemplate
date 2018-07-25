$(document).ready(function(){
    $("#login").click(function(){
    var ResetSystem = $("#LoginForm").serialize();
        $.post('http://caynoon-preview.website/panel/core/operations.php',ResetSystem,function(data){
        $("#LoginResult").html(data);
        $(".alert").fadeOut(7000);
    });     
});
});

$(document).ready(function(){
    $("#Submit_Add_User").click(function(){
    var ResetSystem = $("#ADD_USER_FORM").serialize();
        $.post('http://caynoon-preview.website/panel/core/operations.php',ResetSystem,function(data){
        $("#alert-area").html(data);
        $(".alert").fadeOut(7000);
    });     
});
});


$(document).ready(function(){
    $("#add_categories").click(function(){
    var ResetSystem = $("#ADD_CAT_FORM").serialize();
        $.post('http://caynoon-preview.website/panel/core/operations.php',ResetSystem,function(data){
        $("#alert-area").html(data);
        $(".alert").fadeOut(7000);
    });     
});
});


$(document).ready(function(){
    $("#update-categories").click(function(){
    var ResetSystem = $("#EDIT_CAT_FORM").serialize();
        $.post('http://caynoon-preview.website/panel/core/operations.php',ResetSystem,function(data){
        $("#alert-area").html(data);
        $(".alert").fadeOut(7000);
    });     
});
});


$(document).ready(function(){
    $("#update-submit").click(function(){
    var ResetSystem = $("#EDIT_USER_FORM").serialize();
        $.post('http://caynoon-preview.website/panel/core/operations.php',ResetSystem,function(data){
        $("#alert-area").html(data);
        $(".alert").fadeOut(7000);
    });     
});
});






//Delete User From Table  -------------------------------------------------------
 $(function(){
    $(".DeleteUserAccount").click(function (e) { 
        e.preventDefault();
                   var param1 = $(this).attr("user-id-data");
            $.ajax({
              url: 'http://caynoon-preview.website/panel/core/operations.php',
              data: { userId: param1 , action: 'DeleteUser'  },
              success: function(result) {
                $("#alert-area").html(result);
                $(".alert").fadeOut(7000);
                  $("#user-"+param1).remove();
              }
            });   
    });
});


//  Block User From Table  -------------------------------------------------------
 $(function(){
    $(".BlockUserAccount").click(function (e) { 
        e.preventDefault();
         
          var param1 = $(this).attr("user-id-data");
        $.ajax({
          url: 'http://caynoon-preview.website/panel/core/operations.php',
          data: { userId: param1 , action: 'BlockUser'  },
          success: function(result) {
            $("#alert-area").html(result);
            $(".alert").fadeOut(7000);
          }
        });
        
    });
});




//  show comments From Table  -------------------------------------------------------
 $(function(){
    $(".show_cmt").click(function (e) { 
        e.preventDefault();
          var param1 = $(this).attr("cmt-id-data");
        $.ajax({
          url: 'http://caynoon-preview.website/panel/core/operations.php',
          data: { CommentID: param1 , action: 'ShowComment'  },
          success: function(result) {
            $("#alert-area").html(result);
            $(".alert").fadeOut(7000);
          }
        });
        
    });
});

//  Hide comments From Table  -------------------------------------------------------
 $(function(){
    $(".hide_cmt").click(function (e) { 
        e.preventDefault();
          var param1 = $(this).attr("cmt-id-data");
        $.ajax({
          url: 'http://caynoon-preview.website/panel/core/operations.php',
          data: { CommentID: param1 , action: 'HideComment'  },
          success: function(result) {
            $("#alert-area").html(result);
            $(".alert").fadeOut(7000);
          }
        });
        
    });
});

//  Delete comments From Table  -------------------------------------------------------
 $(function(){
    $(".delete_cmt").click(function (e) { 
        e.preventDefault();
          var param1 = $(this).attr("cmt-id-data");
        $.ajax({
          url: 'http://caynoon-preview.website/panel/core/operations.php',
          data: { CommentID: param1 , action: 'DeleteComment'  },
          success: function(result) {
            $("#alert-area").html(result);
            $(".alert").fadeOut(7000);
          }
        });
        
    });
});



















//  Activate User From Table  -------------------------------------------------------
 $(function(){
    $(".ActivateUserAccount").click(function (e) { 
        e.preventDefault();
        var param1 = $(this).attr("user-id-data");
        $.ajax({
          url: 'http://caynoon-preview.website/panel/core/operations.php',
          data: { userId: param1 , action: 'ActivateUser'  },
          success: function(result) {
            $("#alert-area").html(result);
            $(".alert").fadeOut(7000);
          }
        });
    });
});
















