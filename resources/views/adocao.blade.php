@extends('_partials/main')

@section('conteudo')
<style>
  .register-animal-header{
    border-top: 0.5px solid black;
  }
</style>
    <!-- Cabeçalho -->
    <div class="register-animal-header">
      <h1>Registrar Novo Animal</h1>
    </div>

    <!-- Formulário de Registro -->
    <div class="container">
      <div class="register-animal-container">
        <form>
          <div class="mb-3">
            <label for="animal-name" class="form-label">Nome do Animal</label>
            <input type="text" class="form-control" id="animal-name" placeholder="Digite o nome do animal" required>
          </div>
          <div class="mb-3">
            <label for="animal-species" class="form-label">Espécie</label>
            <select class="form-control" id="animal-species" required>
              <option value="">Selecione a espécie</option>
              <option value="cachorro">Cachorro</option>
              <option value="gato">Gato</option>
              <option value="coelho">Coelho</option>
              <option value="outro">Outro</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="animal-age" class="form-label">Idade</label>
            <input type="number" class="form-control" id="animal-age" placeholder="Digite a idade do animal" required>
          </div>
          <div class="mb-3">
            <label for="animal-size" class="form-label">Porte</label>
            <select class="form-control" id="animal-size" required>
              <option value="">Selecione o porte</option>
              <option value="pequeno">Pequeno</option>
              <option value="medio">Médio</option>
              <option value="grande">Grande</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="animal-description" class="form-label">Descrição</label>
            <textarea class="form-control" id="animal-description" rows="4" placeholder="Descreva o animal (temperamento, saúde, etc.)" required></textarea>
          </div>
          <div class="mb-3">
            <label for="animal-photo" class="form-label">Foto do Animal</label>
            <input type="file" class="form-control" id="animal-photo" accept="image/*" required>
          </div>
          <button type="submit" class="btn btn-register-animal">Registrar Animal</button>
        </form>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    @endsection