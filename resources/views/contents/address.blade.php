@extends('templates/index')

@section('content')

<section class="wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i> Table</h3>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="index.html">ខេត្ត/ក្រុង</a></li>
                <li><i class="fa fa-table"></i><a href="index.html">ស្រុក/ខ័ណ្ឌ</a></li>
                <li><i class="fa fa-th-list"></i><a href="index.html">ឃុំ/សង្កាត់</a></li>
                <li><i class="fa fa-th-list"></i><a href="index.html">ភូមិ</a></li>
            </ol>
        </div>
    </div>
    <!-- page start-->
    <div class="row">
        <!--province-->
        <div class="col-sm-6">
            <section class="panel">
                <header class="panel-heading">
                    ខេត្ត
                </header>
                <table class="table table-striped table-advance table-hover">
                    <thead>
                    <tr>
                        <th class="col-lg-2">#</th>
                        <th class="col-lg-7">ឈ្មោះ ខេត្ត/ក្រុង</th>
                        <td class="col-lg-3"><i class="icon_tool"></i></td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>បាត់ដំបង</td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-success" href="#"><i class="icon_pencil-edit_alt"></i></a>
                                <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>ពោសាធ</td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-success" href="#"><i class="icon_pencil-edit_alt"></i></a>
                                <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>សៀមរាប</td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-success" href="#"><i class="icon_pencil-edit_alt"></i></a>
                                <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>សៀមរាប</td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-success" href="#"><i class="icon_pencil-edit_alt"></i></a>
                                <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>សៀមរាប</td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-success" href="#"><i class="icon_pencil-edit_alt"></i></a>
                                <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>សៀមរាប</td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-success" href="#"><i class="icon_pencil-edit_alt"></i></a>
                                <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>សៀមរាប</td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-success" href="#"><i class="icon_pencil-edit_alt"></i></a>
                                <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </section>
        </div>
        <!--district-->
        <div class="col-sm-6">
            <section class="panel">
                <header class="panel-heading">
                    ស្រុក/ខ័ណ្ឌ ដែលស្ថិតនៅក្នុង ខេត្ត/ក្រុង បាត់ដំបង
                </header>
                <table class="table table-striped table-advance table-hover">
                    <thead>
                    <tr>
                        <th class="col-lg-2">#</th>
                        <th class="col-lg-7">ឈ្មោះ ស្រុក/ខ័ណ្ឌ</th>
                        <td class="col-lg-3"><i class="icon_tool"></i></td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>បាត់ដំបង</td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-success" href="#"><i class="icon_pencil-edit_alt"></i></a>
                                <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>ពោសាធ</td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-success" href="#"><i class="icon_pencil-edit_alt"></i></a>
                                <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>សៀមរាប</td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-success" href="#"><i class="icon_pencil-edit_alt"></i></a>
                                <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </section>
        </div>
        <!--commune-->
        <div class="col-sm-6">
            <section class="panel">
                <header class="panel-heading">
                    ឃុំ/សង្កាត់ ដែលស្ថិតក្នុង ស្រុក/ខ័ណ្ឌ ស្វាយចេក
                </header>
                <table class="table table-striped table-advance table-hover">
                    <thead>
                    <tr>
                        <th class="col-lg-2">#</th>
                        <th class="col-lg-7">ឈ្មោះ ឃុំ/សង្កាត់</th>
                        <td class="col-lg-3"><i class="icon_tool"></i></td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>បាត់ដំបង</td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-success" href="#"><i class="icon_pencil-edit_alt"></i></a>
                                <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>ពោសាធ</td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-success" href="#"><i class="icon_pencil-edit_alt"></i></a>
                                <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>សៀមរាប</td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-success" href="#"><i class="icon_pencil-edit_alt"></i></a>
                                <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </section>
        </div>
        <!--village-->
        <div class="col-sm-6">
            <section class="panel">
                <header class="panel-heading">
                    ភូមិ ដែលស្ថិតក្នុង ឃុំ/សង្កាត់ មិត្តភាព
                </header>
                <table class="table table-striped table-advance table-hover">
                    <thead>
                    <tr>
                        <th class="col-lg-2">#</th>
                        <th class="col-lg-7">ឈ្មោះ ភូមិ</th>
                        <td class="col-lg-3"><i class="icon_tool"></i></td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>បាត់ដំបង</td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-success" href="#"><i class="icon_pencil-edit_alt"></i></a>
                                <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>ពោសាធ</td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-success" href="#"><i class="icon_pencil-edit_alt"></i></a>
                                <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>សៀមរាប</td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-success" href="#"><i class="icon_pencil-edit_alt"></i></a>
                                <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>សៀមរាប</td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-success" href="#"><i class="icon_pencil-edit_alt"></i></a>
                                <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>សៀមរាប</td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-success" href="#"><i class="icon_pencil-edit_alt"></i></a>
                                <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </section>
        </div>
    </div>
</section>
@endsection