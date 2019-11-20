@extends('layouts.app')
@section('content')
    <!-- Форма создания задачи... -->
    <div class="panel-body">
        <!-- Отображение ошибок проверки ввода -->
    {{--    @include('common.errors')--}}

    <!-- Форма новой задачи -->
        <center>
            <form action="{{ url('/dashboard/recipes/'.$p->id.'/update') }}" method="POST" class="form-horizontal">
                <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}
            <!-- Имя задачи -->
                <div class="form-group">
                    <label for="task" class="col-sm-3 control-label">Название</label>
                    <div class="col-sm-6">
                        <input type="text" name="name_recipe" id="name_recipe" value="{{ $p->name_recipe }}"
                               class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="task" class="col-sm-3 control-label">Описание</label>
                    <div class="col-sm-6">
                        <input type="text" name="description" id="description" value="{{ $p->description }}"
                               class="form-control">
                    </div>
                </div>
                <hr>

                <!-- Кнопка добавления задачи -->
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                        <button type="submit" class="btn btn-default">
                            <i class="fa fa-save"></i> Save
                        </button>
                    </div>
                </div>
            </form>
        </center>
    </div>
@endsection