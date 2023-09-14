$(document).ready(function(){
    //ajax call from already exists email varification
    $('#stuemail').on("keypress blur",function(){
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
        var stuemail = $("#stuemail").val();

        $.ajax({
            url: 'Student/addstudent.php',
            method: 'POST',
            data:{
                checkemail: "checkmail",
                stuemail: stuemail,
            },
            success:function(data){
                // console.log(data);
                if(data != 0){
                    $("#statusMsg2").html('<small style= "color:red">Email id already used</small>');
                    $("#signup").attr("disabled", true);
                }else if(data == 0 && reg.test(stuemail)){
                    $("#statusMsg2").html('<small style= "color:green">There You go</small>');
                    $("#signup").attr("disabled", false);
                }else if (!reg.test(stuemail)){
                    $("#statusMsg2").html('<small style= "color:red">Please Enter valid email</small>');
                    $("#signup").attr("disabled", false);
                }
                if(stuemail == ""){
                    $("#statusMsg2").html('<small style= "color:red">Please Enter  email</small>');
                }
            },
        });
        
    });
});





function addStu(){
    //for email right way
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    //for email right way close
    var stuname = $("#stuname").val();
    var stuemail = $("#stuemail").val();
    var stupass = $("#stupass").val();
    // console.log(stuname);

    //checking form fiels on from submission
    if(stuname.trim() == ""){
        $("#statusMsg1").html('<small style= "color:red">Please Enter name</small>');
        $(stuname).focus();
        return false;
    }else if(stuemail.trim() == ""){
        $("#statusMsg2").html('<small style= "color:red">Please Enter Email<small>');
        $(stuemail).focus();
        return false;

    }else if(stuemail.trim() != "" && !reg.test(stuemail)){
        $("#statusMsg2").html('<small style= "color:red">Please Enter valid Email e.g. example@mail.com</small>');
        $(stuemail).focus();
        return false;
    }
    
    else if(stupass.trim() == ""){
        $("#statusMsg3").html('<small style= "color:red">Please Enter Password<small>');
        $(stupass).focus();
        return false;
    //checking form fiels on from submission End

    }else{
        $.ajax({
            url:'Student/addstudent.php',
            method: "POST",
            dataType: "json",
            data:{
                stusignup : "stusignup",
                stuname : stuname,
                stuemail : stuemail,
                stupass : stupass,
            },
            success:function(data){
                console.log(data);
                if(data == "OK"){
                    $('#successMsg').html('<span>Registration Successful</span>');
                clearStuRegField();

                }
                else if(data == "Faild") {
                    $('#successMsg').html('<span>Unable Registration</span>');
    
                }
    
            },
        });
    
    }
    }

    //empty all fields start

function clearStuRegField(){
    $("#stuRegForm").trigger("reset");
    $("#statusMsg1").html(" ");
    $("#statusMsg2").html(" ");
    $("#statusMsg3").html(" ");
}
    //empty all fields end



//     $.ajax({
//         url:'Student/addstudent.php',
//         method: "POST",
//         dataType: "json",
//         data:{
//             stusignup : "stusignup",
//             stuname : stuname,
//             stuemail : stuemail,
//             stupass : stupass,
//         },
//         success:function(data){
//             console.log(data);
//             if(data == "OK"){
//                 $('#successMsg').html('<span>Registration Successful</span>')
//             }else if(data == "Faild") {
//                 $('#successMsg').html('<span>Unable Registration</span>')

//             }

//         },
//     });

// }




// Ajax call for student login varification 

function checkStuLogin(){
    console.log("btn clicked");
    var stuLogEmail = $("#stuLogemail").val();
    var stuLogPass = $("#stuLogpass").val();
    $.ajax({
        url:'Student/addstudent.php',
        method: "POST",
        data:{
            checkLogemail : "checkLogmail",
            stuLogEmail : stuLogEmail,
            stuLogPass : stuLogPass,

        },
        success:function(data){
            // console.log(data);
            if (data == 0){
                $("#statusLogMsg").html('<small class= "alert alert-danger">Invalid Email Password</small>');
            }else if(data == 1){
              $("#statusLogMsg").html(
                // ('<small class= "alert-danger">you are welcome</small>');
                '<div class="spinner-border text-success" role="status"></div>'
              );
              
              setTimeout(()=>{
                window.location.href = "fst.php";
            }, 1000);
            }
        },

    });

}


