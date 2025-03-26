@extends('_partials/main')

@section('conteudo')
<style>
      body {
        background-color: #C4EEF2; /* Cor de fundo da página */
      }
      .animal-details-header {
        background-color: #025159; /* Cor do cabeçalho */
        color: #FFFFFF;
        padding: 20px 0;
        text-align: center;
        margin-bottom: 30px;
      }
      .animal-details-header h1 {
        margin: 0;
        font-size: 2.5rem;
      }
      .animal-details-container {
        background-color: #FFFFFF;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin: 0 auto;
        max-width: 800px;
      }
      .animal-details-img {
        width: 100%;
        height: 300px;
        object-fit: cover;
        border-radius: 10px;
        margin-bottom: 20px;
      }
      .animal-details-title {
        color: #025159; /* Cor do título */
        font-size: 1.75rem;
        margin-bottom: 10px;
      }
      .animal-details-text {
        color: #3F858C; /* Cor do texto */
        font-size: 1rem;
        margin-bottom: 15px;
      }
      .animal-details-list {
        list-style-type: none;
        padding: 0;
      }
      .animal-details-list li {
        margin-bottom: 10px;
        color: #3F858C;
      }
      .btn-contact {
        background-color: #A67458; /* Cor do botão */
        border: none;
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        color: #FFFFFF;
        font-size: 16px;
        margin-top: 20px;
      }
      .btn-contact:hover {
        background-color: #7AB8BF; /* Cor do botão ao passar o mouse */
      }
</style>
    <!-- Cabeçalho -->
    <div class="animal-details-header">
      <h1>Detalhes do Animal</h1>
    </div>

    <!-- Container de Detalhes -->
    <div class="container">
      <div class="animal-details-container">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZ8PHVMZ5StJCLwGSunWEMbobwzNq324WB3Q&s" alt="Rex" class="animal-details-img">
        <h2 class="animal-details-title">Rex</h2>
        <p class="animal-details-text">Rex é um cachorro brincalhão e cheio de energia. Ele adora passeios ao ar livre, brincar com bolinhas e receber carinho. Rex é muito sociável e se dá bem com crianças e outros animais.</p>
        <ul class="animal-details-list">
          <li><strong>Idade:</strong> 2 anos</li>
          <li><strong>Porte:</strong> Médio</li>
          <li><strong>Temperamento:</strong> Ativo, carinhoso e brincalhão</li>
          <li><strong>Saúde:</strong> Vacinado e castrado</li>
          <li><strong>Localização:</strong> São Paulo, SP</li>
        </ul>
        <button class="btn btn-contact">Entrar em contato para adoção</button>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@endsection