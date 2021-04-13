# API REST Full - Recrutamento Inteligente

# Introduction
Esse repositório contém os códigos para criação de uma API RestFull, por meio do framework Laravel, de disponibilização de vagas para o Recrutamento Inteligente.

# Overview
A API permite:
    <br>
    <ul>
       <li>Cadastrar vagas em um banco de dados MySQL</li>
       <li>Consultar todas as vagas cadastradas</li>
       <li>Consultar vagas específicas</li>
       <li>Adicionar curtidas de usuários às vagas</li>
    </ul>
# Authentication
<h4>Pré-Requisitos:</h4>
   <ul>
      <li>PHP 7.4+</li>
      <li>Banco de dados MySQL 8.0+</li>
      <li>Laravel 8</li>
   </ul>

<h4>Dados de teste:</h4>
   <ul>
     <li>Base de dados: api_vagas</li>
     <li>Tabela: vagas</li>
   </ul>

<h4>Pré-processamento:</h4>
   <ul>
      <li>
         1) Criar base de dados api_vagas
         <p>OBS: alterar configurações do banco no arquivo .env do projeto</p>
      </li>    
      <li>
          2) Para criar o arquivo de migration, execute:<br>
          <p>php artisan make:migration create_table_vagas --create=vagas</p>
          <p>OBS: no arquivo de migration, acrescentar as colunas: vaga(string), descricao(text), curtidas(integer)</p>
      </li>
      <li>
          3) Para executar a migration, execute:<br>
          <p>php artisan make:migration</p>
      </li>
      <li>
          3) Para alimentar a tabela com registros fakes para testar a API, execute:<br>
          <p>php artisan db:seed</p>
      </li>
   </ul>
   
# Error Codes
<ul>
    <li>404: Vaga não encontrada</li>
    <li>1010: Exception lançada ao cadastrar vaga</li>
    <li>1011: Exception lançada ao curtir vaga<li>
</ul>

# Documentação e rotas geradas pelo Postman

A documentação do projeto API REST Full - Recrutamento Inteligente, bem como as rotas geradas pelo Postman, 
estão disponíveis no link a seguir:

https://documenter.getpostman.com/view/15368874/TzJpgeqx
