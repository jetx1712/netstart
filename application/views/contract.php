<?php $this->load->view('elements/header'); ?>
<?php $this->load->view('elements/sidebar'); ?>
<style>
  .choice-body {
    min-height: 635px;
    height: 100% !important;
  }

  .title-contract {
    margin: 56px 0 24px 0;
    text-align: center;
    text-transform: uppercase;
    color: #690675;
  }
</style>
<div class="container anime">
  <form action="<?php echo base_url() ?>my_email/contract" id="formContract" method="post">
    <!-- <form action="<?php echo base_url() ?>hubsoft/contract" id="formContract" method="post"> -->
    <div class="row contract-container">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-12">
          <h2 class="title-contract text-center">Informações</h2>
        </div>
        </div>
        <div class="row">
          <div class="col-md-4 contract-individual-box">
            <p class="contract-inner-title">Dados pessoais</p>
            <div class="form-group">
              <label class="label-contract" for="name">Nome</label>
              <span class="span-warning hidden" id="warning_name">O campo Nome é obrigatório</span>
              <input class="input-contract" name="name" id="name" type="text">
            </div>
            <div class="form-group">
              <label class="label-contract" for="cpf">CPF</label>
              <span class="span-warning hidden" id="warning_cpf">O campo CPF é obrigatório</span>
              <input class="input-contract cpf" name="cpf" id="cpf" type="text">
            </div>
            <div class="form-group">
              <label class="label-contract" for="phone">Celular</label>
              <span class="span-warning hidden" id="warning_phone">O campo Celular é obrigatório</span>
              <input class="input-contract telefone" name="phone" id="phone" type="text">
            </div>
            <div class="form-group">
              <label class="label-contract" for="email">E-mail</label>
              <span class="span-warning hidden" id="warning_email">O campo E-mail é obrigatório</span>
              <input class="input-contract" name="email" id="email" type="text">
            </div>
          </div>
          <div class="col-md-4 contract-individual-box">
            <p class="contract-inner-title">Endereço de instalação</p>
            <div class="form-group">
              <label class="label-contract" for="cep">CEP</label>
              <span class="span-warning hidden" id="warning_cep">O campo CEP é obrigatório</span>
              <input class="input-contract cep" id="cep" name="cep" type="text" data-logradouro="street" data-complemento="complement" data-bairro="neighborhood" data-localidade="city" data-uf="uf">
            </div>
            <div class="form-group">
              <span class="span-warning hidden" id="warning_street">O campo Endereço é obrigatório</span>
              <label class="label-contract" for="street">Endereço</label>
              <input class="input-contract" id="street" name="street" type="text">
            </div>
            <div class="row">
              <div class="col-md-12 hidden" id="warning_container_number">
                <span class="span-warning hidden" id="warning_number">O campo Número é obrigatório</span>
                <br>
                <span class="span-warning hidden" id="warning_complement">O campo Complemento é obrigatório</span>
              </div>
              <div class="col-4 pr-1">
                <div class="form-group">
                  <label class="label-contract" for="number">Número</label>
                  <input class="input-contract numero" id="number" name="number" type="text" maxlength="5" data-warning="warning_container_number">
                </div>
              </div>
              <div class="col-8 pl-1">
                <div class="form-group">
                  <label class="label-contract" for="complement">Complemento</label>
                  <input class="input-contract optional" id="complement" name="complement" type="text" data-warning="warning_container_number">
                </div>
              </div>
            </div>
            <div class="form-group">
              <span class="span-warning hidden" id="warning_neighborhood">O campo Bairro é obrigatório</span>
              <label class="label-contract" for="neighborhood">Bairro</label>
              <input class="input-contract" name="neighborhood" id="neighborhood" type="text">
            </div>
            <div class="row">
              <div class="col-md-12 hidden" id="warning_container_city">
                <span class="span-warning hidden" id="warning_city">O campo Cidade é obrigatório</span>
                <br>
                <span class="span-warning hidden" id="warning_uf">O campo UF é obrigatório</span>
              </div>
              <div class="col-6 pr-1">
                <div class="form-group">
                  <label class="label-contract" for="city">Cidade</label>
                  <input class="input-contract inline" id="city" name="city" type="text" data-warning="warning_container_city">
                </div>
              </div>
              <div class="col-6 pl-1">
                <div class="form-group">
                  <label class="label-contract" for="uf">UF</label>
                  <input class="input-contract inline" id="uf" name="uf" type="text" data-warning="warning_container_city">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 contract-individual-box">
            <p class="contract-inner-title">Mensalidade</p>
            <div class="form-group">
              <span class="span-warning hidden" id="warning_payment_method">Selecione um meio de pagamento</span>
              <label class="label-contract" for="payment_method">Meio de pagamento</label>
              <select class="input-contract" name="payment_method" id="payment_method">
                <option selected disabled> </option>
                <option>Boleto Bancário</option>
              </select>
            </div>
            <div class="form-group">
              <span class="span-warning hidden" id="warning_expiration_day">Selecione a data de vencimento</span>
              <label class="label-contract" for="expiration_day">Melhor dia para o vencimento</label>
              <select class="input-contract" name="expiration_day" id="expiration_day">
                <option selected disabled> </option>
                <option>Dia 10</option>
                <option>Dia 20</option>
                <option>Último dia de cada mês</option>
              </select>
            </div>
            <p class="contract-inner-title">Mensalidade</p>
            <p class="contract-disclaimer">Ao preencher esse formulário, iremos verificar a disponibilidade técnica e um dos nossos vendedores entrará em contato para finalizar a venda.</p>
          </div>
        </div>
        <div class="row your-choice-container anime">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12">
                <h2 class="choice-outer-title">Sua escolha</h2>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="choice-card-unique">
                <div class="choice-box">
                  <div class="choice-title-box">
                    <span class="choice-title">Características</span>
                  </div>
                  <div class="choice-body">
                    <div class="choice-info-box">
                      <span class="choice-info-title">Download</span>
                      <span class="choice-info-value">
                        <?php echo $plans->speed ?></span>
                    </div>
                    <div class="choice-info-box">
                      <span class="choice-info-title">Upload</span>
                      <span class="choice-info-value"><?php echo $plans->upload ?></span>
                    </div>
                    <div class="choice-info-box">
                      <span class="choice-info-title">Fidelidade</span>
                      <span class="choice-info-value">12 Meses</span>
                    </div>
                    <div class="choice-info-box">
                      <span class="choice-info-title">Garantia de banda</span>
                      <span class="choice-info-value">80%</span>
                    </div>
                    <div class="choice-info-box">
                      <span class="choice-info-title">Tempo médio para confirmação da instalação</span>
                      <span class="choice-info-value pt-2">1 Dia útil</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="choice-card-unique">
                <div class="choice-box">
                  <div class="choice-title-box">
                    <span class="choice-title">Ativação de serviço</span>
                  </div>
                  <div class="choice-body">
                    <div class="choice-info-box">
                      <span class="choice-info-title">Taxa de Habilitação</span>
                      <span class="choice-info-value">R$ 500,00</span>
                    </div>
                    <div class="choice-info-box">
                      <span class="choice-info-title">Desconto de fidelidade</span>
                      <span class="choice-info-value">R$ 500,00</span>
                    </div>
                    <div class="choice-info-box">
                      <span class="choice-info-title">Valor total a pagar na instalação</span>
                      <span class="choice-info-value">R$ 0,00</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="choice-card-unique">
                <div class="choice-box">
                  <div class="choice-title-box">
                    <span class="choice-title">Descrição da fatura mensal</span>
                  </div>
                  <div class="choice-body">
                    <div class="choice-info-box">
                      <span class="choice-info-title">Assinatura Mensal (Sem Fidelidade)</span>
                      <span class="choice-info-value"><?php $price = $plans->amount + $plans->loyalty_discount; ?>
                        R$<?php echo number_format($price, 2, '.', ','); ?></span>
                    </div>
                    <div class="choice-info-box">
                      <span class="choice-info-title">Desconto de fidelidade</span>
                      <span class="choice-info-value">R$ <?php echo number_format($plans->loyalty_discount, 2, '.', ','); ?></span>
                    </div>
                    <div class="choice-info-box">
                      <span class="choice-info-title">Valor total mensal</span>
                      <span class="choice-info-value"><?php $priceTotal = $plans->amount; ?>R$ <?php echo number_format($priceTotal, 2, '.', ','); ?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row contract-footer">
          <div class="col-md-6 contract-footer-inner-container container-left">
            <a class="footer-btn" href="<?php echo base_url(); ?>faleConosco">Tire suas dúvidas</a>
          </div>
          <div class="col-md-6 contract-footer-inner-container container-right">
            <input type="hidden" name="price" value="<?php echo $priceTotal ?>">
            <input type="hidden" name="plan_choiced" value="<?php echo $plans->speed ?>MB">
            <input class="footer-btn" type="submit" name="contract" value="Finalizar escolha" id="submitContract">
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="contractCheckbox">
              <label class="form-check-label" id="" for="contractCheckbox">Eu aceito os <a class="term-link" href="https://conectafibra.com.br/assets/build/Contrato-Conecta.pdf" target="_blank" rel="noopener noreferrer">Termos e condições</a></label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>



<?php $this->load->view('elements/footer'); ?>