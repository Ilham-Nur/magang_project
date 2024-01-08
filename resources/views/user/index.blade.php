@extends('layout.header')

@section('title', 'User')

@section('main')

<div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">User</h5>
         {{-- Gadget --}}
         <div class="col-sm-12 mt-2 d-flex justify-content-between">
            <div class="d-flex gap-3">
                {{-- Search --}}
                <input id="txsearch" type="text" style="width: 250px;" class="form-control rounded-3" placeholder="Search">
            </div>
        </div>

        <div id="containerListEmployee" class="col-sm-12 mt-3">
            <table id="tablelistuser" class="table table-responsive table-hover">
                <thead>
                    <tr class="table-primary">
                        <th scope="col">No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Role</th>
                        <th scope="col">No Handphone</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="align-middle">
                        <td>1</td>
                        <td>NurHikmah</td>
                        <td>Jl. Ini itu dan sana blok kanan dan kiri</td>
                        <td>Admin</td>
                        <td>08125233654</td>
                        <td>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
                            </a>
                        </td>
                    </tr>
        </div>






      </div>
    </div>
</div>


@endsection


<script>


let table = new DataTable('#tablelistuser');


</script>




