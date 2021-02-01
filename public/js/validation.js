
function validateTitle(title){
    if (title.trim() == '') {
        
        $('#title').addClass('is-invalid');
        return false;
    }else{
        // console.log('success');
        console.log(title.length);
        $('#title').removeClass('is-invalid');
        return true;
    }
}

function validateContent(content){
    if (content.length == '') {
        $('#content').addClass('is-invalid');
        return false;
    }else{
        $('#content').removeClass('is-invalid');
        return true;
    }
}

function validateEmail(email){

    // let email_value = $('#email').val();
    let lastDotPosition = email.lastIndexOf('.');
    let positionOfAt = email.indexOf('@');
    let lengthOfEmail = email.length;
    if(email == ''){
        $("#email").attr('class','form-control is-invalid');
        // $('#javascript-erroremail').text("Email address is required");
        // console.log(response);
       return false;
    }else if(lastDotPosition == -1 || positionOfAt == -1 || (lastDotPosition < positionOfAt) || (lengthOfEmail == lastDotPosition)){
        $("#email").attr('class','form-control is-invalid');
        // $('#javascript-erroremail').text("invalid Email address");
        // console.log(response);
        return false;
     }//else if(this.searchforEmail(emailValue,email_value)){
    //     $("#email").attr('class','form-control is-invalid');
    //     $('#javascript-erroremail').text("this email is already taken");
    //     return false;}
    else{
        $("#email").attr('class','form-control is-valid');
        // $('#javascript-erroremail').text("");
        // console.log(response);
       return true;
    }

}

function validatePasswrod(password){
    let pass = $("#pass").val();
    let lengthOfPass = pass.length;
    if (lengthOfPass < 7) {
        $("#pass").attr('class','form-control is-invalid');
        // $('#javascript-errorpassword').text('Your password must be greater than 8 character');
        return false;
    } else {
        $("#pass").attr('class','form-control is-valid');
        // $('#javascript-errorpassword').text('');
        return true;
    }
}

function validateImage(image,id_name=''){
    // let file = $('#picture');
        let length_of_file = image.length;
        let last_index_of_dot = image.lastIndexOf('.');

        let extension = image.slice(last_index_of_dot,length_of_file);
        if (extension =='.jpg' || extension =='.jpeg' || extension =='.gif' || extension =='.png') {
            // $('#picture-error').text('');
            $('#picture').attr('class','form-control');

            // $('#'+id_name).attr('href',picture_to_display);
            return true;
        }else if(extension == ''){
            // $('#picture-error').text('Picture is Required');
            $('#picture').attr('class','form-control is-invalid');
            return false;
        }
        else{
            // $('#picture-error').text('Invalid Image format');
            $('#picture').attr('class','form-control is-invalid');
        }
}

function validateCatagory(catagory){
    if (catagory == null) {
        $('#catagory').addClass('is-invalid');
        return false;
    }else{
        // var a = Number(catagory);
        // console.log("======="+catagory+"-------");
        $('#catagory').removeClass('is-invalid');
        return true;
    }
}

$(document).ready(function(){

    // $('#secret-submit').submit(function(e){
    //     e.preventDefault();
    //     var picture = $('#picture').val();
    //     var title = $('#title').val();
    //     var content = $('#content').val();
    //     var catagory = $('#catagory').val();
        
    //     if( validateImage(picture) && validateCatagory(catagory) && validateTitle(title) && validateContent(content) ){
    //         return true;
    //     }else{
    //         return false;
    //     }
    // });


    $('#post-dashboard').submit(function(e){
        // e.preventDefault();
        var title = $('#title').val();
        var content = $('#content').val();
        var image = $('#picture').val();
        var catagory = $('#catagory').val();
        // console.log(title+'  '+content+'  '+image+'  '+catagory);
        if( validateImage(image) && validateCatagory(catagory) && validateTitle(title) && validateContent(content) ){
            return true;
        }else{
            return false;
        }
    });

    
    $('#update-post').submit(function(e){
        e.preventDefault();
        var title = $('#title').val();
        var content = $('#content').val();
        var image = $('#picture').val();
        var catagory = $('#catagory').val();
        console.log(title+'===='+content+'===='+image+'====='+catagory);
        if(validateCatagory(catagory) && validateTitle(title) && validateContent(content) ){
            return false;
        }else{
            return false;
        }
    });
});