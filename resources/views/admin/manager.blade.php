@extends('layouts.admin')

@section('title', 'Página de Gerenciamento')

@section('content')
<section class="content">
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>{{ $total[0]->total_cursos }}</h3>
                    <p>Cursos cadastrados</p>
                </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="/manager/curso" class="small-box-footer">Saiba mais <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        <!-- ./col -->
        </div>
    </div>
</section>
@endsection

@section('script')
@endsection