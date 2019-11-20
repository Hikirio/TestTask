<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.8.2/css/all.css')}}">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{asset('css/mdb.min.css')}}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{asset('css/plugins/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="{{asset('css/plugins/timeline.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{asset('css/plugins/morris.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('font-awesome-4.1.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

</head>

<body class="grey lighten-3">


<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Книга рецептов</a>
        </div>
        <!-- /.navbar-header -->
        {{--        Шапка       --}}

        <ul class="nav navbar-top-links navbar-right">

            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
        </ul>
        <!-- /.navbar-top-links -->

        {{--Левая боковая панель--}}

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a class="active" href="{{url('/dashboard')}}"><i class="fa fa-dashboard fa-fw"></i> Главная
                            страница </a>
                    </li>
                    <li>
                        <a href="{{url('dashboard/recipes')}}"><i class="fa fa-table fa-fw"></i>Мои Рецепты</a>
                    </li>
                    <li>
                        <a href="{{url('dashboard/ingredients')}}"><i class="fa fa-table fa-fw"></i>Мои Ингредиенты</a>
                    </li>

                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Мои ингридиенты</h1>
            </div>
            <div class="col-lg-12">
                <form action="{{url('/dashboard/ingredients/create')}}">
                    <button class="btn btn-info">Добавить ингридиент</button>
                </form>
            </div>

        </div>
        <!-- /.row -->
        <br>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Все ваши ингридиенты
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Название</th>
                                    <th>Дата создания</th>
                                    <th>Дата изменения</th>
                                    <th>Действия</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach ($ingredient as $ing)


                                    <tr class="gradeA">

                                        <td>{{$ing->id}}</td>
                                        <td>{{$ing->name_product}}</td>
                                        <td>{{$ing->created_at}}</td>
                                        <td>{{$ing->updated_at}}</td>

                                        <td>
                                            <form action="{{ url('/dashboard/ingredients/'.$ing->id.'/edit') }}" method="GET">
                                                {{ csrf_field() }}
                                                {{ method_field('EDIT') }}
                                                <button type="submit" id="edit-task-{{ $ing->id }}"
                                                        class="btn btn-primary">
                                                    <i class="fa fa-btn fa-edit"></i>
                                                </button>
                                            </form>
                                            <form action="{{ url('/dashboard/ingredients/'.$ing->id) }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type="submit" id="delete-task-{{ $ing->id }}"
                                                        class="btn btn-danger"><i
                                                            class="fa fa-btn fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>

                                    </tr>

                                </tbody>

                                @endforeach
                            </table>
                        </div>

                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/sb-admin-2.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<script src="{{asset('js/plugins/metisMenu/metisMenu.min.js')}}"></script>

<script src="{{asset('js/plugins/morris/raphael.min.js')}}"></script>
<script src="{{asset('js/plugins/morris/morris.min.js')}}"></script>
<script src="{{asset('js/plugins/morris/morris-data.js')}}"></script>


<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>

<script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
</body>

</html>

