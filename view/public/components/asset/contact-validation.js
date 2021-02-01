
function emailValidate() {
    let email_value = $('#email').val();
    let lastDotPosition = email_value.lastIndexOf('.');
    let positionOfAt = email_value.indexOf('@');
    let lengthOfEmail = email_value.length;
    if(email_value == ''){
        $("#email").attr('class','form-control is-invalid');
        $('#javascript-erroremail').text("Email address is required");
        // console.log(response);
       return false;
    }else if(lastDotPosition == -1 || positionOfAt == -1 || (lastDotPosition < positionOfAt) || (lengthOfEmail == lastDotPosition)){
        $("#email").attr('class','form-control is-invalid');
        $('#javascript-erroremail').text("invalid Email address");
        // console.log(response);
        return false;
     }//else if(this.searchforEmail(emailValue,email_value)){
    //     $("#email").attr('class','form-control is-invalid');
    //     $('#javascript-erroremail').text("this email is already taken");
    //     return false;}
    else{
        $("#email").attr('class','form-control is-valid');
        $('#javascript-erroremail').text("");
        // console.log(response);
       return true;
    }
}

function validateName(IdName) {
    let inputValue = $('#'+IdName).val();

    if(inputValue == ''){
        $('#'+IdName).attr('class',"form-control is-invalid");
        $('#error'+IdName).text('Name if Required');
        return false;
    }else{
        if(/[^a-zA-Z]/.test(inputValue)){
            $('#'+IdName).attr('class',"form-control is-invalid");
            $('#error'+IdName).text('Invalid Name');
            return false;
        }else{
            $('#error'+IdName).text('');
            $('#'+IdName).attr('class',"form-control is-valid");
            return true;
        }
    }
}

$(document).ready(function(){
    $('#form-submit').click(function(event){
        // event.preventDefault();
        if(validateName('fname') && validateName('mname') && validateName('lname') && emailValidate()){
            return true;
               
        }else{
            return false;
        }
    });
    // $('#theme').click(function(){
    //     // alert('clicked');
    //     let value = $('#theme').html(); 
    //     if (value == 'Night Mode') {
    //         $('#theme').html('Light Mode')
    //         $('#theme').attr('class','btn btn-sm btn-light mb-2')
    //         var date = new Date();
    //         date.setTime(date.getTime() + (3456*24*60*60*1000));
    //         console.log(date);
    //         console.log('====================');
    //         var expires = "expires=" + date.toUTCString();
    //         console.log(expires);
    //         console.log("=====================");
    //         document.cookie = "theme=night-mode; " + expires + "; path=/";
    //         console.log(document.cookie);
    //         // document.cookie = "username=John Smith; expires=Thu, 5 Jan 2021 12:00:00 UTC; path=/";
    //         // var x = decodeURIComponent(document.cookie);
            
    //         // console.log(x);
    //         // $('body').attr('class','bg-light');
    //         // $('#navBar-id').attr('class', 'navbar navbar-expand-lg navbar-light bg-light');
    //         // $('#card-id').attr('class','card bg-light');
    //         // $('p').removeAttr('class');
    //         // $('footer').attr('class','container bg-light mt-5');
    
    //     }
    
    //     else if (value == 'Light Mode') {
    //         $('#theme').html('Night Mode');
    //         $('#theme').attr('class','btn btn-sm btn-secondary mb-2');
            
    //         // $('body').attr('class','bg-secondary');
    //         // $('#navBar-id').attr('class', 'navbar navbar-expand-lg navbar-dark bg-dark');
    //         // $('#card-id').attr('class','card bg-secondary');
    //         // $('p').attr('class','class="text-white');
    //         // $('footer').attr('class','container bg-dark mt-5');
    //     }
    //     else{
    //         console.log('error is happend');
    //         console.log(value);
    //     }
    // });
})

