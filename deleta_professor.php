<?php

include 'db.php';
$id_professor = $_GET['id_professor']; 

$query = "DELETE FROM PROFESSOR WHERE ID_PROFESSOR = $id_professor";

mysqli_query($conexao, $query);

header('location:index.php?pagina=professor');
