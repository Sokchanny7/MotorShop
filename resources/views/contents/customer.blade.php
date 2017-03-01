@extends('templates/index')

@section('content')
<section class="wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i> អតិថិជន</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    ព័តមានអំពី អតិថិជន
                </header>
                <div class="panel-body">
                    <form role="form">
                        <div class="col-lg-8">
                            <div class="col-sm-6">
                                <label for="">នាមត្រគោល</label>
                                <input id="" type="text" value="" size="16" class="form-control">
                            </div>
                            <div class="col-sm-6">
                                <label for="">នាមខ្លួន</label>
                                <input id="" type="text" value="" size="16" class="form-control">
                            </div>
                            <div class="col-lg-11">
                                <label for="">លេខទូរស័ព្ទ</label>
                                <input id="" type="text" value="" size="16" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="col-sm-6">
                                <label for="">ភេទ</label>
                                <select class="form-control m-bot15" style="margin-bottom: 0">
                                    <option>ប្រុស</option>
                                    <option>ស្រី</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <label for="">អាយុ</label>
                                <input id="" type="text" value="" size="16" class="form-control">
                            </div>
                            <div class="col-lg-10">
                                <label for="">កាលបរិឆ្ឆេត</label>
                                <input id="" type="text" value="" size="16" class="form-control">
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    ព័តមានអំពី អាស័យដ្ឋាន
                </header>
                <div class="panel-body">
                    <form role="form">
                        <label class="col-lg-12">សូមធ្វើការ ជ្រើសរើសយកពីខេត្តរហូតដល់ភូមិ!</label>
                        <div class="col-sm-2">
                            <label for="">លេខផ្លូវ</label>
                            <input id="" type="text" value="111" size="16" class="form-control">
                        </div>
                        <div class="col-sm-2">
                            <label for="">លេខផ្ទះ</label>
                            <input id="" type="text" value="111" size="16" class="form-control">
                        </div>
                        <div class="form-group col-lg-2">
                            <label for="">ខេត្ត/ក្រុង</label>
                            <select class="form-control m-bot15">
                                <option>បាត់ដំបង</option>
                                <option>ប៉ៃលិន</option>
                                <option>សៀមរាប</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-2">
                            <label for="">ស្រុក/ខ័ណ្ឌ</label>
                            <select class="form-control m-bot15">
                                <option>មុខកំពូល</option>
                                <option>ភ្នំស្រួច</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-2">
                            <label for="">ឃុំ/សង្កាត់</label>
                            <select class="form-control m-bot15">
                                <option>បយ៉ាខា</option>
                                <option>អូរតាវ៉ៅ</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-2">
                            <label for="exampleInputEmail1">ភូមិ</label>
                            <select class="form-control m-bot15">
                                <option>អូរច្រា</option>
                                <option>ទួលល្លា</option>
                            </select>
                        </div>
                        <span class="form-group col-lg-12">
                            <label>បាត់ដំបង/មុខកំពូល/បាត់ដំបង/មុខកំពូល/បាត់ដំបង/មុខកំពូល</label>
                        </span>
                    </form>
                </div>
            </section>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    បញ្ជីឈ្មោះអ្នកផ្គត់ផ្គង់
                </header>

                <table class="table table-striped table-advance table-hover">
                    <tbody>
                    <tr>
                        <th><i class="icon_id"></i> #</th>
                        <th><i class="icon_profile"></i> ឈ្មោះ</th>
                        <th><i class="icon_calendar"></i> ភេទ</th>
                        <th><i class="icon_calendar"></i> អាយុ</th>
                        <th><i class="icon_mail_alt"></i> លេខទូរស័ព្ទ</th>
                        <th><i class="icon_cogs"></i> អាស័យដ្ឋាន</th>
                        <th><i class="icon_cogs"></i> កែប្រែ</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Yai</td>
                        <td>ស្រី</td>
                        <td>45</td>
                        <td>08665 1444</td>
                        <td>
                            St.1986, #AZ4, Phnom Penh, Cambodia St.1986,
                        </td>
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