@extends('layouts.app')
@section('content')
    <!-- Форма создания задачи... -->
    <div class="panel-body">
        <!-- Отображение ошибок проверки ввода -->
    {{--    @include('common.errors')--}}

    <!-- Форма новой задачи -->
        <center>
            <div class="row">
                <div class="col-lg-10">
                    <div class="panel-body">
                        <!-- Форма новой задачи -->
                        <form action="{{ url('/dashboard/ingredients/create/') }}" method="POST" class="form-horizontal">
                            <input type="hidden" name="_method" value="PUT">
                        {{ csrf_field() }}
                        <!-- Имя задачи -->
                            <div class="form-group">
                                <label for="task" class="col-sm-3 control-label">Название ингридиента</label>
                                <div class="col-sm-6">
                                    <input type="text" name="name_product" id="name_product" value="{{$objing->name_product}}"
                                           class="form-control">
                                </div>
                            </div>

                            <!-- Кнопка добавления задачи -->
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fa fa-save"></i> Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


                <!-- /.col-lg-12 -->
            </div>
        </center>
    </div>
@endsection