<?php

$sevidor = "localhost";
$usuario = "aplicacao";
$senha = "123456";
$db = "escola_peak";

$conexao = mysqli_connect($sevidor, $usuario, $senha, $db);


$query = "SELECT curso.id_curso, curso.nome_curso, professor.nome_professor, curso.data_criacao
			 FROM CURSO, PROFESSOR
			 WHERE curso.id_professor = professor.id_professor";
$consulta_curso = mysqli_query($conexao, $query);

$query = "SELECT aluno.id_aluno, aluno.nome_aluno, aluno.data_nascimento, aluno.logradouro, aluno.numero, aluno.bairro, aluno.cidade, aluno.estado, aluno.cep, aluno.data_criacao, curso.nome_curso
			 FROM ALUNO, CURSO
			 WHERE aluno.id_curso = curso.id_curso";
$consulta_aluno = mysqli_query($conexao, $query);

$query = "SELECT * FROM PROFESSOR";
$consulta_professor = mysqli_query($conexao, $query);

$query = "SELECT aluno.id_aluno, aluno.nome_aluno, curso.nome_curso, professor.nome_professor 
			FROM ALUNO, CURSO, PROFESSOR
			WHERE aluno.id_curso = curso.id_curso
			AND curso.id_professor = professor.id_professor";
$consulta_matricula = mysqli_query($conexao, $query);
