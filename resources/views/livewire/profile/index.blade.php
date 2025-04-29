<div>
    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-12 mb-4">

            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">ข้อมูลส่วนตัว</h6>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tbody>
                          <tr>
                            <td scope="row">ชื่อ</td>
                            <td>{{ auth()->user()->name }}</td>
                          </tr>
                          <tr>
                            <td scope="row">email</td>
                            <td>{{ auth()->user()->email }}</td>
                          </tr>
                          <tr>
                            <td scope="row">hcode</td>
                            <td>{{ auth()->user()->hcode }}</td>
                          </tr>
                          <tr>
                            <td scope="row">hname</td>
                            <td>{{ auth()->user()->hname }}</td>
                          </tr>
                        </tbody>
                      </table>
                    
                </div>
            </div>

 

        </div>
    </div>
</div>
