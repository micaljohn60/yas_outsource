@extends('layouts.sidebar')

@section('dashboard_content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3">
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title display-5">Total Biz</h5>
                    <p class="card-text text-white display-6">{{count($bizs)}}</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title display-5">Remaining Biz</h5>
                    <p class="card-text text-white display-6"></p>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title display-5">Success Sell</h5>
                    <p class="card-text text-white display-6"></p>
                </div>
            </div>
        </div>
    </div>

    <h3 class="font-weight-bold">My Bizs</h3>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>NO</th>
                <th>Biz ID</th>
                <th>Biz Name</th>
                <th>BIz Type</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($bizs as $key => $biz)
            <tr>
                <td>{{$key + 1}}</td>
                <td>{{$biz->name}}</td>
                <td>{{$biz->name}}</td>
                <td>{{$biz->address}}</td>
               

                <td>
                    <button type="button" class="btn btn-link text-decoration-none">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </button>
                    <button type="button" class="btn btn-link text-decoration-none">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </td>
            </tr>
                
            @endforeach
            
            
        </tbody>

    </table>

    <h3 class="font-weight-bold">Proposals</h3>
    <table id="proposal" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011-04-25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011-07-25</td>
                <td>$170,750</td>
            </tr>
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009-01-12</td>
                <td>$86,000</td>
            </tr>
            <tr>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012-03-29</td>
                <td>$433,060</td>
            </tr>
        </tbody>

    </table>
</div>

@endsection