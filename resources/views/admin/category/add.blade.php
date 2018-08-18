@extends('admin.layout.home')
@section('title', "Dashboard Admin Deramigo")
@section('content')

<div class="row">
                <div class="col-lg-10">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Create Product </h5>
                        </div>
                        <div class="ibox-content">
                            
                            	<form method="POST" class="form-horizontal" action="{{ url('/admin/product/add') }}" enctype="multipart/form-data">
                            		{{ csrf_field() }}
                                <div class="form-group">
                                	{{ Form::label('title', 'Nama Produk :' , array('class' => 'col-lg-2 control-label')) }}
                                    <div class="col-sm-10">
                                    	
                                    	{{ Form::text('name', null , array('class' => 'form-control' , 'required' , 'autofocus')) }}
                            			{{ Form::hidden('slug', null, array('minlength' => '5' , 'maxlength' => '191')) }}
                                    </div>
                                </div>

                                <div class="form-group">
                                	{{ Form::label('title', 'Category :' , array('class' => 'col-lg-2 control-label')) }}
                                    <div class="col-sm-10">
                                    	{{ Form::select('size', array('Kosmetik' => 'Kosmetik', 'Wajah' => 'Wajah'), NULL, array('class' => 'form-control')) }}
                                    </div>
                                </div>

                                <div class="form-group">
                        			{{ Form::label('title', 'SKU :' , array('class' => 'col-lg-2 control-label')) }}
                         			 <div class="col-sm-10">
                            			{{ Form::text('SKU', null , array('class' => 'form-control' , 'required')) }}
                          			</div>
                      			</div>

                      			<div class="form-group">
                        			{{ Form::label('title', 'Description :' , array('class' => 'col-lg-2 control-label')) }}
                          			<div class="col-sm-10">
                            			{{ Form::textarea('description', null , array('class' => 'summernote' , 'required')) }}
                          			</div>
                      			</div>

                      			<div class="form-group">
                        			{{ Form::label('title', 'Additional Info :' , array('class' => 'col-lg-2 control-label')) }}
                          			<div class="col-sm-10">
                            			{{ Form::textarea('add_info', null , array('class' => 'form-control' , 'required')) }}
                          			</div>
                      			</div>

                <div class="form-group">
                	{{ Form::label('title', 'Product Image :' , array('class' => 'col-lg-2 control-label')) }}
                	<div class="col-sm-10">
                      			<div class="input-group control-group increment ">
          								<input type="file" name="featured_image[]" class="form-control" multiple>
          							<div class="input-group-btn"> 
            							<button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
          							</div>
        						</div>
        
        						<div class="clone hide">
          							<div class="control-group input-group" style="margin-top:10px">
            							<input type="file" name="featured_image[]" class="form-control">
            						<div class="input-group-btn"> 
              							<button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
            						</div>
          						</div>
        						</div>
                		</div>
            	</div>

            	<div class="form-group">
                        {{ Form::label('title', 'Price :' , array('class' => 'col-lg-2 control-label')) }}
                          <div class="col-sm-5 input-group m-b">
                            <span class="input-group-addon">Rp </span>
                            {{ Form::text('price', null , array('class' => 'numberOnly form-control', 'required')) }}

                          </div>
                      </div>

                      <div class="form-group">
                        {{ Form::label('title', 'Sale :' , array('class' => 'col-lg-2 control-label')) }}
                          <div class="col-sm-5 input-group m-b">
                            <span class="input-group-addon">Rp </span>
                            {{ Form::text('sale', null , array('class' => 'numberOnly form-control','required')) }}

                          </div>
                      </div>

                      <div class="form-group">
                        {{ Form::label('title', 'Tax :' , array('class' => 'col-lg-2 control-label')) }}
                          <div class="col-sm-10">
                            <select name="tax_status" class="form-control">
                              <option selected disabled> - </option>
                              <option value="taxable"> taxable </option>
                              <option value="shiping"> shiping </option>
                              <option value="none"> none </option>
                            </select>
                          </div>
                      </div>

                      <div class="form-group">
                        {{ Form::label('title', 'Tax Class :' , array('class' => 'col-lg-2 control-label')) }}
                          <div class="col-sm-10">
                            <select name="tax" class="form-control">
                              <option selected disabled> - </option>
                              <option value="standard"> standard </option>
                              <option value="reduced"> reduced </option>
                              <option value="zero"> zero </option>
                            </select>
                          </div>
                      </div>

                      <div class="form-group">
                        {{ Form::label('title', 'Stock :' , array('class' => 'col-lg-2 control-label')) }}
                          <div class="col-sm-3">
                            {{ Form::text('stock', null , array('class' => 'form-control' , 'onkeypress' => 'return event.charCode >= 48 && event.charCode <= 57' , 'placeholder' => 'unit, etc', 'required')) }}
                          </div>
                      </div>

                      <div class="form-group">
                        {{ Form::label('title', 'Tags :' , array('class' => 'col-lg-2 control-label')) }}
                          <div class="col-sm-10">
                            
                            {{ Form::text('tags', null, array('class' => 'tagsinput form-control')) }}
                          </div>
                      </div>


                      <div class="form-group">
                        {{ Form::label('title', 'Featured :' , array('class' => 'col-lg-2 control-label')) }}
                          <div class="col-sm-5">
                            <select name="featured" class="form-control">
                              <option selected disabled> - </option>
                              <option value="on">on</option>
                              <option value="off">off</option>
                            </select>
                          </div>
                      </div>

                      <div class="form-group">
                        {{ Form::label('title', 'Status :' , array('class' => 'col-lg-2 control-label')) }}
                          <div class="col-sm-10">
                            <select name="status" class="form-control">
                              <option selected disabled> - </option>
                              <option value="available">available</option>
                              <option value="waiting">waiting confirmation</option>
                            </select>
                          </div>
                      </div>


                      <div class="hr-line-dashed"></div>
                      <div class="form-group">
                          <div class="col-sm-4 col-sm-offset-2">

                              {{ Form::submit('Daftarkan Produk', ['class' => 'btn btn-primary']) }}
                          </div>
                      </div>



                            </form>
                        </div>
                    </div>
                </div>
		</div>



@stop