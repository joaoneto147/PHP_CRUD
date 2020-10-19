<main>
  <form method="post">
    <div class="form-group col-lg-100">
      <label>Nome completo</label>
      <input type="text" class="form-control" name="name" value="<?= $obCadastro->name ?>" required>
    </div>

    <div class="form-group  col-lg-100">
      <label>Email</label>
      <input type="email" class="form-control" name="email" value="<?= $obCadastro->email ?>" required>
    </div>        

    <div class="form-group  col-lg-100">
      <label>Data de nascimento</label>
      <input type="date" class="form-control" name="brith" value="<?php echo date_format(new DateTime($obCadastro->brith), 'Y-m-d'); ?>" required>
    </div>

    <div class="form-group col-lg-100">
      <label>Estado</label>
      <select class="custom-select" name=state required>
        <option value=""></option>
        <option value="PR" <?= $obCadastro->state == 'PR' ? 'selected' : '' ?>>Paraná</option>
        <option value="SC" <?= $obCadastro->state == 'SC' ? 'selected' : '' ?>>Santa Catarina</option>
        <option value="RS" <?= $obCadastro->state == 'RS' ? 'selected' : '' ?>>Rio Grande do Sul</option>
        <option value="ES" <?= $obCadastro->state == 'ES' ? 'selected' : '' ?>>Espírito Santo</option>
        <option value="MS" <?= $obCadastro->state == 'MS' ? 'selected' : '' ?>>Minas Gerais</option>
        <option value="RJ" <?= $obCadastro->state == 'RJ' ? 'selected' : '' ?>>Rio de Janeiro</option>
        <option value="SP" <?= $obCadastro->state == 'SP' ? 'selected' : '' ?>>São Paulo</option>
      </select>
    </div>

    <div class="form-group col-lg-100">
      <label>Endereço</label>
      <input type="text" class="form-control" name="adress" value="<?= $obCadastro->adress ?>" required>
    </div>

    <div class="form-group col-lg-100">
      <label>Sexo</label>
      <div>
        <div class="form-check form-check-inline">
          <label class="form-control">
            <input type="radio" value="M" name="gender" required <?= $obCadastro->gender == 'M' ? 'checked' : '' ?>> Masculino
          </label>
        </div>
        <div class="form-check form-check-inline">
          <label class="form-control">
            <input type="radio" value="F" name="gender" required <?= $obCadastro->gender == 'F' ? 'checked' : '' ?>> Feminino
          </label>
        </div>
      </div>
    </div>

    <div class="form-group col-lg-100">
      <label>Cartão de crédito</label>
      <div>
        <div class="form-check form-check-inline col-sm-3">
          <label class="form-control">
            <input type="radio" name="creditCard" value="Visa" <?= $obCadastro->creditCard == 'Visa' ? 'checked' : '' ?>> Visa
          </label>
        </div>
        <div class="form-check form-check-inline col-sm-4">
          <label class="form-control">
            <input type="radio" name="creditCard" value="Mastercard" <?= $obCadastro->creditCard == 'Mastercard' ? 'checked' : '' ?>> Mastercard
          </label>
        </div>
      </div>
      <div>
        <div class="form-check form-check-inline col-sm-3">
          <label class="form-control">
            <input type="radio" name="creditCard" value="Elo" <?= $obCadastro->creditCard == 'Elo' ? 'checked' : '' ?>> Elo
          </label>
        </div>
        <div class="form-check form-check-inline col-sm-4">
          <label class="form-control">
            <input type="radio" name="creditCard" value="Dinersclub" <?= $obCadastro->creditCard == 'Dinersclub' ? 'checked' : '' ?> required> Dinersclub
          </label>
        </div>
      </div>
    </div>

    <div class="form-group col-lg-100">
      <button type="submit" class="btn btn-success">Enviar</button>
      <button type="reset" class="btn btn-danger">Limpar</button>
    </div>
  </form>
</main>