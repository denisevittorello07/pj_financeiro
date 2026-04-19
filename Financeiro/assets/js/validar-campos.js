let msg = 'Preencher o campo obrigatório';

//Validar Campos: Tela de Login. 
function ValidarLogin(){
    if($("#email").val(). trim() == ""){
        alert(msg +"E-mail!");
        $("#email").focus();
        return false;
    }

    if($("#senha").val().trim()==""){
        alert("Preencher o campo obrigatório SENHA!");
        $("senha").focus();
        return false;

    }

     if($("#senha").val().trim().length < 6 || $ ("senha").val().trim().length > 8){
        alert("A SENHA deve conter entre 6 a 8 caracteres!");
        $("senha").focus();
        return false;

    }

//Validar Campos: Tela de cadastro de Usuário.
function ValidarCadastro(){
    if($("#nome").val(). trim() == ""){
        alert("Preencher o campo obrigatório NOME!");
        $("#nome").focus();
        return false;
    }
}

   if($("#email").val().trim()==""){
        alert("Preencher o campo obrigatório E-mail!");
        $("email").focus();
        return false;

}

   if($("#senha").val().trim()==""){
        alert("Preencher o campo obrigatório SENHA!");
        $("#senha").focus();
        return false;

   }

 if($("#repsenha").val().trim()==""){
        alert("Preencher o campo obrigatório REPETIR SENHA!");
        $("repsenha").focus();
        return false;

   }

    if($("#senha").val().trim().length < 6 || $ ("#senha").val().trim().length > 8){ 
        alert("A SENHA deve conter entre 6 a 8 caracteres!");
        $("#senha").focus();
        return false;

   }

   if($("#senha").val().trim()!=$ ("#repsenha").val().trim()){
        alert("As SENHA devem ser iguais!");
        $("#repsenha").focus();
        return false;
   }

}
// Validar Campos: Tela Meus Dados 
function ValidarMeusDados(){
    if($("#nome").val(). trim() == ""){
        alert("Preencher o campo obrigatório NOME!");
        $("#nome").focus();
        return false;

    }

if($("#email").val().trim()==""){
        alert("Preencher o campo obrigatório E-mail!");
        $("email").focus();
        return false;

}

}


// fazer a senha !!!! 