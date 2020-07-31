<!-- Modal Insert Tarefa -->
<div class="modal fade" id="tarefaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Adicionar Tarefa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="insertTodo">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="titulo">Titulo</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Digite um titulo para a tarefa" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Descrição</label>
                        <textarea class="form-control" name="description" id="description" rows="3" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" id="cadastrar" class="btn btn-primary">Criar Tarefa</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal Confirm DELETE -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">REMOVER TAREFA</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 id="messageTarefa">Tem certeza que deseja remover essa tarefa?</h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" id="confirmDelete" class="btn btn-danger">Remover Tarefa</button>
            </div>
        </div>
    </div>
</div>
