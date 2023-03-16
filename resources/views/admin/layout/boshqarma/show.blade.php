@extends('admin.master.main')
@section('content')

    <div class="container mt-5 ">
        <h2>{{$bosh_nomi}}
        <h3 style="text-align: center">Axborot vositalari ro'yxati</h3>
            <table class="table table-striped table-bordered table-hover mt-3" id="tblexportData">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Qurilma nomi</th>
                    <th scope="col">Formulyar raqami</th>
                    <th scope="col">Modeli</th>
                    <th scope="col">Seria nomeri</th>
                    <th scope="col">OZU hajmi</th>
                    <th scope="col">QMD model</th>
                    <th scope="col">QMD seria</th>
                    <th scope="col">SSD model</th>
                    <th scope="col">SSD seria</th>
                    <th scope="col">Monitor1 model</th>
                    <th scope="col">Monitor1 nomeri</th>
                    <th scope="col">Monitor2 model</th>
                    <th scope="col">Monitor2 nomeri</th>
                    <th scope="col">Ishlab chiqarilgan sana</th>
                    <th scope="col">Hisob olingan sana</th>
                    <th scope="col">Olindi</th>
                    <th scope="col">Topshirildi</th>
                </tr>
                </thead>
                <tbody>
                @foreach($technology as $tech)
                    <tr>
                        <td>{{$b++}}</td>
                        <td>{{$tech->qurilma_nomi}}</td>
                        <td>{{$tech->formulyar_raqami}}</td>
                        <td>{{$tech->model}}</td>
                        <td>{{$tech->seria_nomer}}</td>
                        <td>{{$tech->ozu_hajmi}}</td>
                        <td>{{$tech->qmd_model}}</td>
                        <td>{{$tech->qmd_nomer}}</td>
                        <td>{{$tech->ssd_model}}</td>
                        <td>{{$tech->ssd_nomer}}</td>
                        <td>{{$tech->monitor1_model}}</td>
                        <td>{{$tech->monitor1_nomer}}</td>
                        <td>{{$tech->monitor2_model}}</td>
                        <td>{{$tech->monitor2_nomer}}</td>
                        <td>{{$tech->ishlabchiqarilgan_sana}}</td>
                        <td>{{$tech->hisobgaolingan_sana}}</td>
                        <td>{{$tech->olindi}}</td>
                        <td>{{$tech->topshirildi}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <a href="{{route('admin.boshqarma.index')}}" class="btn  btn-dark">ortga qaytish</a>
            <button type="button" class="btn btn-dark" onclick="exportToExcel('tblexportData', 'user-data')" style="float: right">Excelga ko'chirish
                <script type="text/javascript">
                    function exportToExcel(tableID, filename = ''){
                        var downloadurl;
                        var dataFileType = 'application/vnd.ms-excel';
                        var tableSelect = document.getElementById(tableID);
                        var tableHTMLData = tableSelect.outerHTML.replace(/ /g, '%20');

                        // Specify file name
                        filename = filename?filename+'.xls':'export_excel_data.xls';

                        // Create download link element
                        downloadurl = document.createElement("a");

                        document.body.appendChild(downloadurl);

                        if(navigator.msSaveOrOpenBlob){
                            var blob = new Blob(['\ufeff', tableHTMLData], {
                                type: dataFileType
                            });
                            navigator.msSaveOrOpenBlob( blob, filename);
                        }else{
                            // Create a link to the file
                            downloadurl.href = 'data:' + dataFileType + ', ' + tableHTMLData;

                            // Setting the file name
                            downloadurl.download = filename;

                            //triggering the function
                            downloadurl.click();
                        }
                    }

                </script>

    </div>

@endsection
