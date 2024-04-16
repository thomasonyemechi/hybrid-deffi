@extends('layout.admin')
@section('page_content')
    <div class="container-fluid p-4">
        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12 col-md-12 col-12">
                <div class="mb-4 d-flex justify-content-between align-items-center">
                    <div class="mb-2 mb-lg-0">
                        <h1 class="mb-1 h2 fw-bold">
                            All Users
                            <span class="fs-5 text-muted">(12,105)</span>
                        </h1>
                        <!-- Breadcrumb  -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/admin/dashboard">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Users</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Tab -->
                <div class="tab-content">

                    <div class="tab-pane show active fade" id="tabPaneList" role="tabpanel" aria-labelledby="tabPaneList">
                        <!-- card -->
                        <div class="card">
                            <!-- card header -->
                            <div class="card-header">
                                <input type="search" class="form-control" placeholder="Search User" />
                            </div>
                            <!-- table -->
                            <div class="table-responsive">
                                <table class="table mb-0 text-nowrap">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col" class="border-0">Username</th>
                                            <th scope="col" class="border-0">Sponsor</th>
                                            <th scope="col" class="border-0">
                                                Joined
                                            </th>
                                            <th scope="col" class="border-0">
                                                Last Active
                                            </th>
                                            <th scope="col" class="border-0"></th>
                                            <th scope="col" class="border-0"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="align-middle border-top-0">
                                                <div class="d-flex align-items-center">
                                                    <h5 class="mb-0">Guy Hawkins</h5>
                                                </div>
                                            </td>
                                            <td class="align-middle border-top-0">
                                                Engineering Architect
                                            </td>
                                            <td class="align-middle border-top-0">
                                                7 July, 2020
                                            </td>
                                            <td class="align-middle border-top-0">
                                                {{ date('Y M D ') }}
                                            </td>
                                            <td class="align-middle border-top-0">
                                                <span class="badge bg-success ms-2">Active</span>
                                            </td>
                                            <td class="text-muted px-4 py-3 align-middle border-top-0">
                                                <span class="dropdown dropstart">
                                                    <a class="text-muted text-decoration-none" href="#" role="button"
                                                        id="courseDropdown" data-bs-toggle="dropdown"
                                                        data-bs-offset="-20,20" aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i></a>
                                                    <span class="dropdown-menu" aria-labelledby="courseDropdown"><span
                                                            class="dropdown-header">Settings</span>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fe fe-trash dropdown-item-icon"></i>Remove</a>
                                                    </span>
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- Pagination -->
                                <div class="pb-4 pt-4">
                               
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
