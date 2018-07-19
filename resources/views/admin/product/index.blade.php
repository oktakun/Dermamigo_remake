@extends('admin.layout.home')
@section('title', "Dashboard Admin Deramigo")
@section('content')


<div class="row">
	<div class="col-lg-10">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5> Product List </h5>
                            <div class="ibox-tools">
                                <a href="/admin/product/add">
                                	<button class="btn btn-primary"><span class="fa fa-pencil"></span> Add Product</button>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">

                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Produk</th>
                                    <th>Product Name</th>
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