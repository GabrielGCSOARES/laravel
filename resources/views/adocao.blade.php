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
        <form action="{{route('adocao')}}" method="POST">
        @csrf
          <div class="mb-3">
            <label for="animal-name" class="form-label">Nome do Animal</label>
            <input type="text" class="form-control" id="animal-name" name="nome" placeholder="Digite o nome do animal" required>
          </div>
          <div class="mb-3">
            <label for="animal-name" class="form-label">Cor do Animal</label>
            <input type="text" class="form-control" id="animal-color" name="cor" placeholder="Digite a cor do animal" required>
          </div>
          <div class="mb-3">
            <label for="animal-age" class="form-label">Peso</label>
            <input type="number" class="form-control" id="animal-height" name="peso" placeholder="Digite o peso do animal" required>
          </div>
          <div class="mb-3">
            <label for="animal-age" class="form-label">Idade</label>
            <input type="number" class="form-control" id="animal-age" name="idade" placeholder="Digite a idade do animal" required>
          </div>
          <div class="mb-3">
            <label for="animal-age" class="form-label">Especie</label>
            <input type="text" class="form-control" id="animal-specie" name="especie" placeholder="Digite a especie do animal" required>
          </div>
          <div class="mb-3">
            <label for="animal-age" class="form-label">Raça</label>
            <input type="text" class="form-control" id="animal-race" name="raca" placeholder="Digite a raça do animal" required>
          </div>

          <!-- <div class="mb-3">
            <label for="animal-description" class="form-label">Descrição</label>
            <textarea class="form-control" id="animal-description" rows="4" placeholder="Descreva o animal (temperamento, saúde, etc.)" required></textarea>
          </div>
          <div class="mb-3">
            <label for="animal-photo" class="form-label">Foto do Animal</label>
            <input type="file" class="form-control" id="animal-photo" accept="image/*" required>
          </div> -->
          <button type="submit" class="btn btn-register-animal">Registrar Animal</button>
        </form>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    @endsection