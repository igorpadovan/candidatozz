<!DOCTYPE html>
<html>
<head>
  <title>Candidatozz</title>
  <link href=/css/bootstrap.min.css rel=stylesheet>
</head>
<body>
  <div class="container" id="candidatozz">
    <div class="col-md-8 col-md-offset-2">
      <div class="jumbotron">
        <h2>Candidatozz</h2>
      </div>

      <form v-on:submit="onCreate">
        <div class="form-group">
          <input type="text" class="form-control input-sm" name="name" v-model="name" placeholder="Nome">
        </div>

        <div class="form-group">
          <input type="text" class="form-control input-sm" name="phone" v-model="phone" placeholder="Telefone">
        </div>

        <div class="form-group">
          <input type="text" class="form-control input-sm" name="city" v-model="city" placeholder="Cidade">
        </div>

        <div class="form-group">
          <input type="text" class="form-control input-sm" name="state" v-model="state" placeholder="Estado">
        </div>

        <div class="form-group text-right">
          <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
        </div>
      </form>

      <div class="col-md-4 candidates" v-for="candidate in candidates">
        <h3>{{ candidate.name }}</h3>
        <p>{{ candidate.phone }}</p>
        <p>{{ candidate.city }}</p>
        <p>{{ candidate.state }}</p>
        <p><span class="btn btn-primary text-muted" v-on:click="onDelete(candidate)">Delete</span></p>
      </div>
    </div>
</div>

<script src="/js/jquery-3.2.1.min.js"></script>
<script src="/js/vue.js"></script>
<script src="/js/candidatozz.js"></script>
</html>

