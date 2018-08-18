@extends('admin.layout.home')
@section('title', "Category List")
@section('content')


<div class="row">
	<div class="col-lg-10">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5> Category List </h5>
                            <div class="ibox-tools">
                                <a href="/admin/product/add">
                                	<button class="btn btn-primary"><span class="fa fa-pencil"></span> Add Category</button>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">

                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Product Count</th>
                                    <th>Option</th>
                                </tr>
                                </thead>
                                <tbody>
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


@stop