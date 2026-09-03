 <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <!-- Card do Formulário -->
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-success text-white py-3 text-center">
                        <h4 class="mb-0"><i class="bi bi-tree-fill me-2"></i>Cadastrar Nova Planta</h4>
                    </div>
                    <div class="card-body p-4">
                        <form action="#" method="POST">
                            
                            <!-- Nome Popular e Científico -->
                            <div class="row g-3 mb-3">
                                <div class="col-md-6">
                                    <label for="nomePopular" class="form-label font-weight-bold">Nome Popular</label>
                                    <input type="text" class="form-index form-control" id="nomePopular" placeholder="Ex: Jiboia" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="nomeCientifico" class="form-label">Nome Científico</label>
                                    <input type="text" class="form-control" id="nomeCientifico" placeholder="Ex: Epipremnum aureum">
                                </div>
                            </div>

                            <!-- Categoria e Localização -->
                            <div class="row g-3 mb-3">
                                <div class="col-md-6">
                                    <label for="categoria" class="form-label">Categoria / Tipo</label>
                                    <select class="form-select" id="categoria" required>
                                        <option value="" selected disabled>Escolha uma opção</option>
                                        <option value="suculenta">Suculenta / Cacto</option>
                                        <option value="folhagem">Folhagem</option>
                                        <option value="flor">Florífera</option>
                                        <option value="horta">Horta / Erva</option>
                                        <option value="arvore">Árvore / Arbusto</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="localizacao" class="form-label">Ambiente Recomendado</label>
                                    <select class="form-select" id="localizacao" required>
                                        <option value="" selected disabled>Escolha uma opção</option>
                                        <option value="interno">Interno (Sombra/Luz difusa)</option>
                                        <option value="externo">Externo (Sol pleno)</option>
                                        <option value="meia-sombra">Meia-sombra</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Frequência de Rega e Data de Aquisição -->
                            <div class="row g-3 mb-3">
                                <div class="col-md-6">
                                    <label for="frequenciaRega" class="form-label">Frequência de Rega</label>
                                    <select class="form-select" id="frequenciaRega" required>
                                        <option value="" selected disabled>Escolha uma opção</option>
                                        <option value="diaria">Diária</option>
                                        <option value="2-3-vezes">2 a 3 vezes por semana</option>
                                        <option value="semanal">1 vez por semana</option>
                                        <option value="quinzenal">A cada 15 dias</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="dataAquisicao" class="form-label">Data de Aquisição</label>
                                    <input type="date" class="form-control" id="dataAquisicao">
                                </div>
                            </div>

                            <!-- Observações e Cuidados Especiais -->
                            <div class="mb-4">
                                <label for="observacoes" class="form-label">Notas e Cuidados Especiais</label>
                                <textarea class="form-control" id="observacoes" rows="3" placeholder="Ex: Tóxica para pets, necessita de adubação mensal no verão..."></textarea>
                            </div>

                            <!-- Botões de Ação -->
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button type="reset" class="btn btn-light me-md-2">Limpar</button>
                                <button type="submit" class="btn btn-success px-4">Salvar Planta</button>
                            </div>

                        </form>
                    </div>
                </div>
                <!-- Fim do Card -->
            </div>
        </div>
    </div>