@extends('super_admin.layouts.layout')

@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-wallet icon-gradient bg-plum-plate">
                </i>
            </div>
            <div>Dashboard
            </div>
        </div>
     </div>
</div>

<div class="row">
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-midnight-bloom">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Principal</div>
                    <div class="widget-subheading">Number of Principals</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span>{{$principal->count()}}</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-happy-green">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Vice Pricipal</div>
                    <div class="widget-subheading"> Number of Vice-Principals</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span>{{$vp->count()}}</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-midnight-bloom">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Staffs</div>
                    <div class="widget-subheading">Total Number of Staffs</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span>{{$staff->count()}}</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-happy-green">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Teachers</div>
                    <div class="widget-subheading">Total Number of Teachers</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span>{{$teacher->count()}}</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-midnight-bloom">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Editors</div>
                    <div class="widget-subheading">Total Number of Editors</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span>{{$editor->count()}}</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-happy-green">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Students</div>
                    <div class="widget-subheading">Total Number of Student</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span>{{$students->count()}}</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content">
            <div class="widget-content-wrapper">
                <div class="widget-content-left">
                    <div class="widget-heading">Unclassified</div>
                    <div class="widget-subheading">People not placed</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-danger"><span>{{$others->count()}}</span></div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
