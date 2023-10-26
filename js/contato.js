"use strict";
const formulario=document.querySelector("form");
const campoCep=formulario.querySelector("#cep");
const campoEndereco=formulario.querySelector("#endereco");
const campoBairro=formulario.querySelector("#bairro");
const campoCidade=formulario.querySelector("#cidade");
const campoEstado=formulario.querySelector("#estado");
const botaoBuscar=formulario.querySelector("#buscar");
const mensagem=formulario.querySelector("#status");

const campoTelefone=formulario.querySelector("#telefone");
$(campoTelefone).mask("(00)0000-0000");
$(campoCep).mask("00000-000");

botaoBuscar.addEventListener("click", async function(event){
event.preventDefault();
let cep;

if(campoCep.value.length !==9){
mensagem.textContent = "Digite um cep válido!";
mensagem.style.color = "purple";
return;
}else{
cep=campoCep.value;
}
const url=`http://viacep.com.br/ws/${cep}/json/`;
const resposta = await fetch(url);
const dados = await resposta.json();

if("erro" in dados){
    mensagem.textContent="Cep inexistente!";
    mensagem.style.color="red";
}else{
    mensagem.textContent="Cep encontrado!";
    mensagem.style.color="green";
  
    campoEndereco.value=dados.logradouro;
    campoBairro.value=dados.bairro;
    campoCidade.value=dados.localidade;
    campoEstado.value=dados.uf;
}
});
