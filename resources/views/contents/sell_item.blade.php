@extends('templates/index')

@section('content')
<section class="wrapper">
    <div class="col-lg-12">
        <h4 class="page-header"><i class="fa fa-files-o"></i> លក់ទំនិញ</h4>
    </div>
    <!-- Form validations -->
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    ព័តមានអំពីអ្នកទិញ
                </header>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="col-lg-6">
                            <label class="control-label col-lg-3" for="inputSuccess">ឈ្មោះ</label>
                            <div class="col-lg-7">
                                <select class="form-control m-bot15">
                                    <option>សុខ សាម៉ាវ</option>
                                    <option>មាន ត្រង៉ែន</option>
                                    <option>ស្រូវ សាឡី</option>
                                </select>
                            </div>
                            <div class="col-lg-2">
                                <a class="btn btn-danger" href="" title="Bootstrap 3 themes generator">អតិថិជនថ្មី</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="control-label col-lg-4" for="inputSuccess">អាស័យដ្ឋាន</label>
                            <div class="col-lg-8">
                                St.1986, #AZ4, Phnom Penh, Cambodia St.1986, #AZ4, Phnom Penh, Cambodia
                                St.1986, #AZ4, Phnom Penh, Cambodia
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    ព័តមានអំពី ទំនិញ
                </header>
                <div class="panel-body">

                    <form role="form">
                        <div class="form-group col-lg-6">
                            <label for="exampleInputEmail1">ឈ្មោះទំនិញ(Item description)</label>
                            <select class="form-control m-bot15">
                                <option>Honda dream 015</option>
                                <option>Honda wave 015</option>
                                <option>Honda click 015</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="exampleInputEmail1">ប្រភេទ (Model)</label>
                            <select class="form-control m-bot15">
                                <option>ស្រី, female</option>
                                <option>ប្រុស, male</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="exampleInputEmail1">ពណ៌ (Color)</label>
                            <select class="form-control m-bot15">
                                <option>ខ្មៅ, black</option>
                                <option>ក្រហម, red</option>
                                <option>ខៀវ, blue</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="exampleInputEmail1">លេខតួរ (Frame no)</label>
                            <select class="form-control m-bot15">
                                <option>NH19038-938244</option>
                                <option>J990909-234454</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="exampleInputEmail1">លេខម៉ាស៊ីន (Engine no)</label>
                            <select class="form-control m-bot15">
                                <option>J990909-234454</option>
                                <option>J990909-234454</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-12">
                            <button type="submit" class="btn btn-primary col-lg-12">បញ្ចូលក្នុងបញ្ជី បញ្ជាទិញ</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
    <!--table -->
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    បញ្ជីទំនិញ បញ្ជាទិញ
                </header>

                <table class="table table-striped table-advance table-hover">
                    <tbody>
                    <tr>
                        <th><i class="icon_id"></i> #</th>
                        <th><i class="icon_profile"></i> ឈ្មោះទំនិញ</th>
                        <th><i class="icon_calendar"></i> ប្រភេទ</th>
                        <th><i class="icon_mail_alt"></i> ពណ៌</th>
                        <th><i class="icon_pin_alt"></i> លេខតួរ</th>
                        <th><i class="icon_mobile"></i> លេខម៉ាស៊ីន</th>
                        <th><i class="icon_house"></i>តម្លៃឯក្តា</th>
                        <th><i class="icon_cogs"></i>កែប្រែ</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Honda dream 014</td>
                        <td>ស្រី</td>
                        <td>ខ្មៅ</td>
                        <td>HR0987123-0877234</td>
                        <td>HR0987123-0877234</td>
                        <td>1700</td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-success" href="#"><i class="icon_pencil-edit_alt"></i></a>
                                <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Honda dream 014</td>
                        <td>ស្រី</td>
                        <td>ខ្មៅ</td>
                        <td>HR0987123-0877234</td>
                        <td>HR0987123-0877234</td>
                        <td>1700</td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-success" href="#"><i class="icon_pencil-edit_alt"></i></a>
                                <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Honda dream 014</td>
                        <td>ស្រី</td>
                        <td>ខ្មៅ</td>
                        <td>HR0987123-0877234</td>
                        <td>HR0987123-0877234</td>
                        <td>1700</td>
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

    <section class="panel">
        <div class="panel-body">
            <form class="form-horizontal " method="get">
                <div class="col-lg-6">
                    <img src="{{ asset('img/pricepromise.png') }}">
                </div>
                <div class="form-group col-lg-6">
                    <label class="control-label col-lg-6" for="inputSuccess">ទឹកប្រាក់សរុប (Total payment)</label>
                    <div class="col-lg-6">
                        <input class="form-control m-bot15" type="text" placeholder="Default input">
                    </div>
                    <label class="control-label col-lg-6" for="inputSuccess">ទឹកប្រាក់បង់រួច (Payment)</label>
                    <div class="col-lg-6">
                        <input class="form-control m-bot15" type="text" placeholder="Default input">
                    </div>
                    <label class="control-label col-lg-6" for="inputSuccess">ទឹកប្រាក់នៅសល់ (Loan)</label>
                    <div class="col-lg-6">
                        <input class="form-control m-bot15" type="text" placeholder="Default input">
                    </div>
                    <div class="col-lg-6">
                        <a class="btn btn-success col-lg-12" href="" title="Bootstrap 3 themes generator"><span class="icon_lightbulb_alt"></span> ពិនិត្យវិក័យបត្រ</a>
                    </div>
                    <div class="col-lg-6">
                        <a class="btn btn-primary col-lg-12" href="" title="Bootstrap 3 themes generator"><span class="icon_lightbulb_alt"></span> បញ្ជាទិញ</a>
                    </div>
                </div>
            </form>
        </div>
    </section>
</section>
@endsection