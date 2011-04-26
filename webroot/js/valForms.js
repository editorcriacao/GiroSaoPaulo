function checkMail(mail){
    var er = new RegExp(/^[A-Za-z0-9_\-\.]+@[A-Za-z0-9_\-\.]{2,}\.[A-Za-z0-9]{2,}(\.[A-Za-z0-9])?/);
    if(typeof(mail) == "string"){
        if(er.test(mail)){
            return true;
        }
    }else if(typeof(mail) == "object"){
        if(er.test(mail.value)){
            return true;
        }
    }else{
        return false;
    }
}


$(document).ready(function(){

    $("#cadastro input[type=text], #cadastro input[type=password]").focus(function(){
        $("#cadastro input[type=text], #cadastro input[type=password]").css("border", "1px solid #cecece");
        $("#cadastro #error-nome, #cadastro #error-email, #cadastro #error-login, #cadastro #error-senha, #cadastro #error-senha-2").hide();
    });

    var nome   = $("#nome"),
        email  = $("#email"),
        login  = $("#login"),
        senha  = $("#senha"),
        senha2 = $("#senha-2");
        

    $("#UsuarioCadastroForm").submit(function(){

        //Valida Campo Nome
        if(nome.val() == ''){
            $("#error-nome").show();
            $(nome).css("border", "1px solid #b73f3f");
            return false;
        }

        //Valida o campo e-mail
        if(email.val() == '' && checkMail(email)){
            $("#error-email").show();
            $(email).css("border", "1px solid #b73f3f");
            return false;
        }


        //valida login

        if(login.val() == ''){
            $("#error-login").show();
            $(login).css("border", "1px solid #b73f3f");
            return false;
        }

        var min = 6;
        if(senha.val() == '' || senha.val().length < min){
            $("#error-senha").show();
            $(senha).css("border", "1px solid #b73f3f");
            return false;
        }

        if(senha.val() != senha2.val()){
            $("#error-senha-2").show();
            $(senha).css("border", "1px solid #b73f3f");
            $(senha2).css("border", "1px solid #b73f3f");
            return false;
        }

    });

});