<?php
/* Smarty version 4.4.1, created on 2024-03-19 11:51:26
  from 'C:\xampp\htdocs\expennies-P0_Start\resources\css\app.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f96e2e0e3a87_51679130',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ba249f4c0612f92a10f8793c4ea5e804aecbe05' => 
    array (
      0 => 'C:\\xampp\\htdocs\\expennies-P0_Start\\resources\\css\\app.scss',
      1 => 1710404734,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f96e2e0e3a87_51679130 (Smarty_Internal_Template $_smarty_tpl) {
?>@import "./variables.scss";
@import "~bootstrap/scss/bootstrap";
@import "~bootstrap-icons/font/bootstrap-icons";
@import "~datatables.net-dt/css/jquery.dataTables.css";

* {
  font-family: 'Roboto', sans-serif !important;
}

body {
  background-color: #e7ebee;
}

svg.icon {
  width: 25px;
  height: 25px;
}

.nav-link {
  color: #9aa0a9;

  &.active {
    background-color: inherit !important;
    color: #57585A !important;
  }

  &:hover, &:focus {
    color: #57585A !important;
  }
}

.content-body {
  background-color: #FEFEFF;
  min-height: 500px;
  border-radius: 1rem;
  padding: 20px 25px 25px;
}<?php }
}
