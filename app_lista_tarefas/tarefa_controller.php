<?php

	//CONECTANDO TODOS OS ARQUIVOS

	require "app_lista_tarefas/tarefa.model.php";
	require "app_lista_tarefas/tarefa.service.php";
	require "app_lista_tarefas/conexao.php";

	$tarefa = new Tarefa();
	$tarefa->__set('tarefa', $_POST['tarefa']);

	$conexao = new Conexao();

	$tarefaService = new TarefaService($conexao, $tarefa);
	$tarefaService->inserir();

	//Quando a tarefa for inserida, ele irá modificar a URL ocasionando na mensagem que está programada em outra página
	header('Location: nova_tarefa.php?inclusao=1');

?>