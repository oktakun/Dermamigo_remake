@extends('admin.layout.home')
@section('title', "Product")
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
                                    <th style="width:30ex">Produk</th>
                                    <th>Product Name</th>
                                    <th class="text-right">Option
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($listproduct as $data)
                                <tr>
                                    <td>
                                        <img src="{{ asset('public/images/'.$data->image_url) }}" width="125" height="75">
                                    </td>
                                    <td>
                                        {{ $data->name }}
                                    </td>
                                    <td class="text-right">
                                        <button class="btn btn-primary btn-sm" title="view product"><span class="fa fa-eye"></span></button>
                                        <button class="btn btn-success btn-sm" title="edit product"><span class="fa fa-pencil"></span></button>
                                        <button class="btn btn-danger btn-sm" title="delete product"><span class="fa fa-trash"></span></button>
                                    </td>
                                </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


@stop