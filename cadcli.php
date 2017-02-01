<?php
include("classes/menu-user-class.php");
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="pt-br"> <!--<![endif]-->
    <html>
        <head>
            <meta charset='UTF-8'>
            <!--<meta HTTP-EQUIV='refresh' CONTENT='30'>-->
            <link href='css/bootstrap-reboot.min.css' rel='stylesheet' type='text/css' />
            <link href='css/bootstrap-grid.css' rel='stylesheet' type='text/css' />
            <link href='css/bootstrap.min.css' rel='stylesheet' type='text/css' />
            <link href='css/form.css' rel='stylesheet' type='text/css' />
            <script type='text/javascript' src='js/formulario.js'></script>

            <!-- Mobile Specific Metas -->
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
            <!-- Fonts -->
            <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
            <!-- CSS -->

            <!--[if lt IE 9]>
                            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <![endif]-->
            <meta charset='UTF-8'>
            <!--<meta HTTP-EQUIV='refresh' CONTENT='30'>-->
            <link href='css/menu-user.css' rel='stylesheet' type='text/css' />
            <script type='text/javascript' src='js/menu-user.js'></script>

            <title>Sistema de Gerenciamento ED1 - Cine Video</title>
        </head>
        <HTML>
            <BODY>
                <div class="container">
                    <div class="row centered-form">
                        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Cadastro de Clientes</h3>
                                </div>
                                <div class="panel-body">
                                    <form role="form" action="controle/cadastro.php" method="POST">
                                        <div class="row">
                                            <div class="col-xs-5 col-sm-5 col-md-5">
                                                <div class="form-group">
                                                    <input type="text" name="id" id="first_name" class="form-control input-sm" placeholder="id" size="10" maxlength="10" disabled>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="nome" id="last_name" class="form-control input-sm" placeholder="Nome">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="end" id="email" class="form-control input-sm" placeholder="Endereço">
                                        </div>

                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="telefone" id="password" class="form-control input-sm" placeholder="Telefone">
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="cpf" id="password_confirmation" class="form-control input-sm" placeholder="CPF">
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <select name="hospital" class="form-control input-group-addon" >
                                                        <option >Escolha Hospital</option>
                                                        <option value="bota">Botafogo</option>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <input type="submit" name="botao" value="cadastrar" class="btn btn-info btn-block">

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <hr>
                    <div class="row centered-form">
                        <div class="panel-body">
                             <center> <h3> <p class="alert alert-danger">Somente após o cadastro do cliente, </br>será possivel cadastrar o parto</p></h3></center>
                            
                        </div>

                    </div>


                </div>
            </BODY>
        </HTML>