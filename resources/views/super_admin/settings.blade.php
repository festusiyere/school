@extends('super_admin.layouts.layout')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Change Password</h5>
                <form action="" method="post" id="change password">
                    @csrf
                    <div class="position-relative form-group"><label for="exampleEmail" class="">Email</label>
                        <input name="email" id="exampleEmail" placeholder="with a placeholder" type="email" class="form-control">
                    </div>
                    <div class="position-relative form-group">
                        <label for="examplePassword" class="">Password</label>
                        <input name="password" id="examplePassword" placeholder="password placeholder" type="password" class="form-control">
                    </div>
                    {{-- <button type="button" class="btn mr-2 mb-2 btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">Submit</button> --}}
                    <button class="mt-1 btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <button class="mb-2 mr-2 btn btn-primary btn-lg btn-block" data-toggle="modal" data-target=".bd-example-modal-sm">Delete Account</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete your Account</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="button" class="btn btn-primary" >Yes</button>
            </div>
        </div>
    </div>
</div>
@endsection
