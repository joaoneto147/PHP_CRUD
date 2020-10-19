<?php
  $resultados = '';
  foreach($cadastros as $cadastro){
    $resultados .= 
      '<tr>
        <td>'.$cadastro->name.'</td>
        <td>'.$cadastro->email.'</td>
        <td>'.date('d/m/Y',strtotime($cadastro->brith)).'</td>
        <td>'.$cadastro->state.'</td>
        <td>'.$cadastro->adress.'</td>
        <td>'.($cadastro->gender == "M" ? 'Masculino': 'Feminino').'</td>
        <td>'.$cadastro->creditCard.'</td>        
        <td>
          <a href="editar.php?id='.$cadastro->id.'">
            <button type="button" class="btn btn-primary">Editar</button>
          </a>
          <a href="excluir.php?id='.$cadastro->id.'">
            <button type="button" class="btn btn-danger">Excluir</button>
          </a>
        </td>
      </tr>';
  }

  $resultados = strlen($resultados) 
    ? $resultados 
    :'<tr>
        <td colspan="6" class="text-center">
              Nenhuma cadastro encontrado
        </td>
      </tr>';
?>
<main>

  <section>
    <a href="cadastrar.php">
      <button class="btn btn-success">Nova Cadastro</button>
    </a>
  </section>

  <section>
    <table class="table bg-light mt-3">
        <thead>
          <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Data de nascimento</th>
            <th>Estado</th>
            <th>Endereço</th>
            <th>Sexo</th>
            <th>Cartão de crédito</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
            <?=$resultados?>
        </tbody>
    </table>

  </section>


</main>