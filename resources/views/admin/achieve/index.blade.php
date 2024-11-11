@extends('admin.layout.master')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ __('main.achievements') }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">{{ __('main.home') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('main.achievements') }}</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">{{ __('main.achievements') }}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="post" action="{{ route('admin.ach.update') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">

                        <div class="form-group">
                            <label for="years_exp">{{ __('main.years_of_experience') }}</label>
                            <input type="text" name="years_exp" class="form-control" id="years_exp" placeholder="{{ __('main.enter_years_experience') }}" value="{{ $achieve->years_exp }}">
                            @error('years_exp')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="number_of_clients">{{ __('main.number_of_clients') }}</label>
                            <input type="text" name="number_of_clients" class="form-control" id="number_of_clients" placeholder="{{ __('main.enter_number_of_clients') }}" value="{{ $achieve->number_of_clients }}">
                            @error('number_of_clients')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="number_of_deps">{{ __('main.number_of_departments') }}</label>
                            <input type="text" name="number_of_deps" class="form-control" id="number_of_deps" placeholder="{{ __('main.enter_number_of_departments') }}" value="{{ $achieve->number_of_deps }}">
                            @error('number_of_deps')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="number_of_products">{{ __('main.number_of_products') }}</label>
                            <input type="text" name="number_of_products" class="form-control" id="number_of_products" placeholder="{{ __('main.enter_number_of_products') }}" value="{{ $achieve->number_of_products }}">
                            @error('number_of_products')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="number_of_emps">{{ __('main.number_of_employees') }}</label>
                            <input type="text" name="number_of_emps" class="form-control" id="number_of_emps" placeholder="{{ __('main.enter_number_of_employees') }}" value="{{ $achieve->number_of_emps }}">
                            @error('number_of_emps')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        @for ($i = 1; $i <= 4; $i++)
                            <div class="form-group">
                                <label for="num{{ $i }}">{{ __('main.number_of_num' . $i) }}</label>
                                <input type="text" name="num{{ $i }}" class="form-control" id="num{{ $i }}" placeholder="{{ __('main.enter_number_of_num' . $i) }}" value="{{ $achieve->{'num'.$i} }}">
                                @error('num' . $i)
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        @endfor

                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">
                            <i class="nav-icon fas fa-paper-plane"></i> {{ __('main.update') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
