// Ajax call for admin login varification 

function checkAdminLogin(){
    console.log("btn clicked");
    var adminLogemail = $("#adminLogemail").val();
    var adminLogpass = $("#adminLogpass").val();
    $.ajax({
        url:'admin/admin.php',
        method: "POST",
        data:{
            checkLogemail : "checkLogmail",
            adminLogemail : adminLogemail,
            adminLogpass : adminLogpass,

        },
        success:function(data){
            // console.log(data);
            if (data == 0){
                $("#statusAdminLogMsg").html('<small class= "alert alert-danger">Invalid Email Password</small>');
            }else if(data == 1){
              $("#statusAdminLogMsg").html(
                '<small class= "alert alert-success">Success loading....</small>'
              );
              
              setTimeout(()=>{
                window.location.href = "admin/adminDashboard.php";
            }, 1000);
            }
        },

    });

}