@extends('layouts.app')
@section('content')

    <div class="panel-body">

        <form action="{{ url('/dashboard/recipes/'.$r->id) }}" method="POST" class="form-horizontal">
            <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}
        <!-- Имя задачи -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label"></label>
                <div class="col-sm-6">
                    {{'Название :'. $r->name_recipe }}
                    <br>
                </div>
            </div>
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label"></label>
                <div class="col-sm-6">
                    {{'Описание : '. $r->description }}
                    <br>
                    {{'Ингридиенты :'.$r->RecipeToIngredient['name_product']}}
                </div>
            </div>
            <hr>

            <!-- Кнопка назад -->
            <div class="col-lg-12">

                <button class="btn btn-info">
                    <a href="#" onclick="history.back();return false;">Назад</a>
                </button>

            </div>

        </form>

    </div>
@endsection