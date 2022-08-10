<?php
session_start();
include 'assets/controllers/config.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <script src='assets/js/block.js'></script>
        <meta charset='utf-8' />
        <link href='css/core/main.min.css' rel='stylesheet' />
        <link href='css/daygrid/main.min.css' rel='stylesheet' />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/personalizado.css">
        <script src='js/core/main.min.js'></script>
        <script src='js/interaction/main.min.js'></script>
        <script src='js/daygrid/main.min.js'></script>
        <script src='js/core/locales/pt-br.js'></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="js/personalizado.js"></script>
        
    </head>
    <body>
        <?php
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
        <!-- RENDERIZADO CALENDARIO-->
        <div id='calendar'></div>

        <!-- RENDERIZADO CALENDARIO-->
        <div class="modal fade" id="visualizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detalhes do Evento</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="visevent">
                            <dl class="row">

                                <dt  class="col-sm-3">id evento</dt>
                                <dd  class="col-sm-9" id="id"></dd>

                                <dt hidden class="col-sm-3">id paciente</dt>
                                <dd hidden class="col-sm-9" id="id_pac"></dd>

                                <dt hidden class="col-sm-3">id profssional </dt>
                                <dd hidden class="col-sm-9" id="id_profissional"></dd>

                                <dt class="col-sm-3">Início do evento</dt>
                                <dd class="col-sm-9" id="start"></dd>

                                <dt class="col-sm-3">Fim do evento</dt>
                                <dd class="col-sm-9" id="end"></dd>

                                <dt class="col-sm-3">Nome do Paciente</dt>
                                <dd class="col-sm-9" id="nome_paciente"></dd>

                                <dt class="col-sm-3">Nome do Profissional</dt>
                                <dd class="col-sm-9" id="nome_profissional"></dd>

                            </dl>
                            <button class="btn btn-warning btn-canc-vis">Editar</button>
                            <a href="" id="apagar_evento" class="btn btn-danger">Apagar</a>
                            <form id="formAPI" method="get" action="evoluir.php?id_paciente">
                            <input type="text" name="id_pac" id="id_paciente" onchange="ipChange(this)">
                            <button type="submit" class="btn btn-success">Evoluir</button>
                            </form>
                        </div>
                        <script>
                            function ipChange(elementoIp){
                            let urlApi = 'evoluir.php?id_paciente';
                            let elementoForm = document.querySelector('#formAPI');
                            elementoForm.action = urlApi + elementoIp.value;
                            }
                        </script>
                        <div class="formedit">
                            <span id="msg-edit"></span>
                            <form id="editevent" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id" id="id" >
                                <input type="hidden" name="id_paciente" id="id_paciente" >
                                <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Profissional</label>
                                <div class="col-sm-10">
                                    <select name="nome_profissional" class="form-control">
                                        <option id="nome_profissional" value="">Selecione</option>			
                                        <?php
                                            $sql = $pdo->prepare("SELECT * FROM profissionais ORDER BY nome_profissional");
                                            $sql->execute();
                                            $fetchAll = $sql->fetchAll();
                                            foreach ($fetchAll as $row) {
                                                echo '<option value="'.$row['id_profissional'].'">'.$row['nome_profissional'].'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Paciente</label>
                                <div class="col-sm-10">
                                    <select name="nome_paciente" class="form-control">
                                        <option id="nome_paciente" value="">Selecione</option>			
                                        <?php
                                            $sql = $pdo->prepare("SELECT * FROM pacientes ORDER BY nome_paciente");
                                            $sql->execute();
                                            $fetchAll = $sql->fetchAll();
                                            foreach ($fetchAll as $row) {
                                                echo '<option value="'.$row['id_paciente'].'">'.$row['nome_paciente'].'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Color</label>
                                    <div class="col-sm-10">
                                        <select name="color" class="form-control" id="color">
                                            <option value="">Selecione</option>			
                                            <option style="color:#FFD700;" value="#FFD700">Falta com Justificativa</option>
                                            <option style="color:#0071c5;" value="#0071c5">Falta Sem Justificativa</option>
                                            <option style="color:#FF4500;" value="#FF4500">Substituição</option>
                                            <option style="color:#8B4513;" value="#8B4513">Marrom</option>	
                                            <option style="color:#1C1C1C;" value="#1C1C1C">Preto</option>
                                            <option style="color:#436EEE;" value="#436EEE">Royal Blue</option>
                                            <option style="color:#A020F0;" value="#A020F0">Roxo</option>
                                            <option style="color:#40E0D0;" value="#40E0D0">Turquesa</option>
                                            <option style="color:#228B22;" value="#228B22">Verde</option>
                                            <option style="color:#8B0000;" value="#8B0000">Vermelho</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Início do evento</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="start" class="form-control" id="start">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Final do evento</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="end" class="form-control" id="end">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="button" class="btn btn-primary btn-canc-edit">Cancelar</button>
                                        <button type="submit" name="CadEvent" id="CadEvent" value="CadEvent" class="btn btn-warning">Salvar</button>                                    
                                    </div>
                                </div>
                            </form>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>                                    
        <!-- MODAL PARA CADASTRAR AGENDA-->
        <div class="modal fade" id="cadastrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cadastrar Evento</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <span id="msg-cad"></span>
                        <form id="addevent" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Profissional</label>
                                <div class="col-sm-10">
                                    <select name="id_profissional" class="form-control" id="color">
                                        <option value="">Selecione</option>			
                                        <?php
                                            $sql = $pdo->prepare("SELECT * FROM profissionais ORDER BY nome_profissional");
                                            $sql->execute();
                                            $fetchAll = $sql->fetchAll();
                                            foreach ($fetchAll as $row) {
                                                echo '<option value="'.$row['id_profissional'].'">'.$row['nome_profissional'].'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Paciente</label>
                                <div class="col-sm-10">
                                    <select name="id_paciente" class="form-control" id="color">
                                        <option value="">Selecione</option>			
                                        <?php
                                            $sql = $pdo->prepare("SELECT * FROM pacientes ORDER BY nome_paciente");
                                            $sql->execute();
                                            $fetchAll = $sql->fetchAll();
                                            foreach ($fetchAll as $row) {
                                                echo '<option value="'.$row['id_paciente'].'">'.$row['nome_paciente'].'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Color</label>
                                <div class="col-sm-10">
                                    <select name="color" class="form-control" id="color">
                                        <option value="">Selecione</option>			
                                        <option style="color:#FFD700;" value="#FFD700">Amarelo</option>
                                        <option style="color:#0071c5;" value="#0071c5">Azul Turquesa</option>
                                        <option style="color:#FF4500;" value="#FF4500">Laranja</option>
                                        <option style="color:#8B4513;" value="#8B4513">Marrom</option>	
                                        <option style="color:#1C1C1C;" value="#1C1C1C">Preto</option>
                                        <option style="color:#436EEE;" value="#436EEE">Royal Blue</option>
                                        <option style="color:#A020F0;" value="#A020F0">Roxo</option>
                                        <option style="color:#40E0D0;" value="#40E0D0">Turquesa</option>
                                        <option style="color:#228B22;" value="#228B22">Verde</option>
                                        <option style="color:#8B0000;" value="#8B0000">Vermelho</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Início do evento</label>
                                <div class="col-sm-10">
                                    <input type="datetime-local" name="start" class="form-control" id="start">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Final do evento</label>
                                <div class="col-sm-10">
                                    <input type="datetime-local" name="end" class="form-control" id="end">

                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" name="CadEvent" id="CadEvent" value="CadEvent" class="btn btn-success">Cadastrar</button>                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
