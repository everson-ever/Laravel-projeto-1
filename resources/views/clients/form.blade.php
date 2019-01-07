'''<div class="form-group">
    <label for="name" class="col-sm-2 control-label">Nome</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="name" name="name" value="{{ @$client->name }}" placeholder="Nome">
    </div>
</div>
<div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
    <input type="email" class="form-control" id="email" name="email" value="{{ @$client->email }}" placeholder="Email">
    </div>
</div>

<div class="form-group">
    <label for="age" class="col-sm-2 control-label">Idade</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="age" name="age" value="{{ @$client->age }}" placeholder="Idade">
    </div>
</div>

<div class="form-group">
    <label for="photo" class="col-sm-2 control-label">Idade</label>
    <div class="col-sm-10">
    <input type="file" class="form-control" id="age" name="photo">
    </div>
</div>
    
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    <button type="submit" class="btn btn-default">Salva</button>
    </div>
</div>
