@extends('admin.master.main')
@section('content')




    <div class="container mt-5">
        <h2 style="text-align: center">Axborot vositalarini biriktirish ro'yxati</h2>
        <a href="{{route('admin.technology.create')}}" class="btn rounded-pill btn-success">Axborot vositalarini kiritish</a>
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Kerakli qurilmani qidirish!" title="Type in a name" style="display: block;margin: 30px 0;padding: 6px 8px;width: 300px;border: 3px solid blue;border-radius: 8px;font-size: 19px;">
        <table class="table table-striped table-bordered table-hover mt-3" id="tblexportData1">
            <thead>
            <tr id="myUL">
                <th scope="col">ID</th>
                <th scope="col">Boshqarma id</th>
                <th scope="col">Qurilma nomi</th>
                <th scope="col">Formulyar raqami</th>
                <th scope="col">Modeli</th>
                <th scope="col">Seriya nomeri</th>
                <th scope="col">OZU hajmi</th>
                <th scope="col">QMD model</th>
                <th scope="col">QMD seria</th>
                <th scope="col">SSD model</th>
                <th scope="col">SSD seriya</th>
                <th scope="col">Monitor1 model</th>
                <th scope="col">Monitor1 nomeri</th>
                <th scope="col">Monitor2 model</th>
                <th scope="col">Monitor2 nomeri</th>
                <th scope="col">Ishlab chiqarilgan sana</th>
                <th scope="col">Hisobga olingan sana</th>
                <th scope="col">Olindi</th>
                <th scope="col">Topshirildi</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($technology as $tech)
                <tr>
                    <td>{{$t++}}</td>
                    <td>{{$tech->boshqarma->name}}</td>
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

                    <form action="{{route('admin.technology.destroy',$tech)}}" method="POST">
                        @csrf
                        @method('delete')
                        <td >
                            <a href="{{route('admin.technology.edit',$tech)}}" class="btn rounded-pill btn-success" style="margin: 15px 0">O'zgartirish</a>

                            <button type="submit" class="btn rounded-pill btn-danger">Delete</button>
                        </td>

                    </form>
                </tr>
            @endforeach
            </tbody>
        </table>
        <button type="button" class="btn btn-dark" onclick="exportToExcel1('tblexportData1', 'user-data')" style="float: right">Excelga ko'chirish

                <script type="text/javascript">
                    function exportToExcel1(tableID1, filename = ''){
                        var downloadurl;
                        var dataFileType = 'application/vnd.ms-excel';
                        var tableSelect = document.getElementById(tableID1);
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

                    function myFunction() {
                        var input, filter, table, tr, td, i, txtValue;
                        input = document.getElementById("myInput");
                        filter = input.value.toUpperCase();
                        table = document.getElementById("tblexportData1");
                        tr = table.getElementsByTagName("tr");
                        for (i = 0; i < tr.length; i++) {
                            td = tr[i].getElementsByTagName("td")[5];
                            if (td) {
                                txtValue = td.textContent || td.innerText;
                                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                    tr[i].style.display = "";
                                } else {
                                    tr[i].style.display = "none";
                                }
                            }
                        }
                    }
                </script>
    </div>

@endsection
