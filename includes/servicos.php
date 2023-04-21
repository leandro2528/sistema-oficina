<div class="servico-table p-2" id="servicoTable">
    <button id="btn-new-servico" class="btn btn-success btn-sm my-3">Novo Serviço</button>

    <div id="form-new-servicos">
        <form action="" class="form-boxs-servicos">

        <h5>CADASTRO DE SERVIÇOS</h5>

            <div class="form-box-item">

                <div class="form-left col-6">

                    <div class="mt-2 box-form">
                        <label for="">Nome:</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Preço:</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Descrição:</label>
                        <input type="text" class="form-control">
                    </div>

                </div>

            </div>

            <div class="btn-form my-5">
                <button class="btn btn-primary btn-sm me-5">Salvar Serviços</button>
                <button class="btn btn-warning btn-sm">Voltar</button>
            </div>
            
        </form>
    </div>

    <h5 id="title-servico">Serviços</h5>

    <table id="new-table-servico" class="table table-hover table-striped table-bordered">
        <thead>
            <tr>
                <th>N°</th>
                <th>Código de barro</th>
                <th>Nome</th>
                <th>Estoque</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
    </table>
</div>