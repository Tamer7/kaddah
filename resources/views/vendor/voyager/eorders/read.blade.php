@php
$edit = !is_null($dataTypeContent->getKey());
$add = is_null($dataTypeContent->getKey());
@endphp

@extends('voyager::master')

@section('page_title', __('voyager::generic.view').' '.$dataType->getTranslatedAttribute('display_name_singular'))

@section('page_header')
<h1 class="page-title">
    <i class="{{ $dataType->icon }}"></i> {{ __('voyager::generic.viewing') }} {{ ucfirst($dataType->getTranslatedAttribute('display_name_singular')) }} &nbsp;

    @can('edit', $dataTypeContent)
    <a href="{{ route('voyager.'.$dataType->slug.'.edit', $dataTypeContent->getKey()) }}" class="btn btn-info">
        <span class="glyphicon glyphicon-pencil"></span>&nbsp;
        {{ __('voyager::generic.edit') }}
    </a>
    @endcan
    @can('delete', $dataTypeContent)
    @if($isSoftDeleted)
    <a href="{{ route('voyager.'.$dataType->slug.'.restore', $dataTypeContent->getKey()) }}" title="{{ __('voyager::generic.restore') }}" class="btn btn-default restore" data-id="{{ $dataTypeContent->getKey() }}" id="restore-{{ $dataTypeContent->getKey() }}">
        <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">{{ __('voyager::generic.restore') }}</span>
    </a>
    @else
    <a href="javascript:;" title="{{ __('voyager::generic.delete') }}" class="btn btn-danger delete" data-id="{{ $dataTypeContent->getKey() }}" id="delete-{{ $dataTypeContent->getKey() }}">
        <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">{{ __('voyager::generic.delete') }}</span>
    </a>
    @endif
    @endcan

    <a href="{{ route('voyager.'.$dataType->slug.'.index') }}" class="btn btn-warning">
        <span class="glyphicon glyphicon-list"></span>&nbsp;
        {{ __('voyager::generic.return_to_list') }}
    </a>
</h1>
@include('voyager::multilingual.language-selector')
@stop

@section('content')
<div class="page-content read container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-bordered" style="padding-bottom:5px;">
                
                <!-- form start -->
                <div>
                    <form role="form" class="form-edit-add" action="{{ route('voyager.'.$dataType->slug.'.update', $dataTypeContent->getKey()) }}" method="POST" enctype="multipart/form-data">

                        {{ method_field("PUT") }}

                        {{ csrf_field() }}

                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        
                        <div class="panel-body" style="padding-top:20px;">
                            @foreach($dataType->readRows as $row)
                                @if($row->type == 'relationship')
                                    @if ($row->display_name == 'Order Products')
                                    <div class="col-sm-6">
                                        <h4>Products Ordered</h4>
                                        <table class="table table-borderless">
                                        
                                            <thead>
                                                <tr>
                                                    <th scope="col">Product Code</th>
                                                    <th scope="col">Image</th>
                                                    <th scope="col">Order Details</th>
                                                    <th scope="col">Quantity</th>
                                                </tr>
                                            </thead>
                                            <tbody> 
                                                @foreach($products as $index => $product)
                                                <tr>
                                                    <th>{{ $product->code }}</th>
                                                    <th>
                                                        @if($product->pivot->color)
                                                        <img src=" {{productImage($product->pivot->color)}} "  width="70" height="70" onclick="document.getElementById('file{{$index}}').click()" />
                                                        @else
                                                        <img src="{{ productImage($product->image) }}" width="70" height="70" onclick="document.getElementById('file{{$index}}').click()" />
                                                        @endif
                                                        <input type="file" name="img[{{$product->id}}]" id="file{{$index}}" style="display:none;" />
                                                    </th>
                                                    
                                                    <th>
                                                        @if(empty($product->pivot->capacity || $product->pivot->dimension))
                                                        {{$product->name}}
                                                        @endif
                                                        @if($product->pivot->capacity) 
                                                        <input type="text" value="{{$product->pivot->capacity}}" class="form-control" name="cap[{{$product->id}}]" style="width:70px;float:left;">
                                                         @endif
                                                        @if($product->pivot->dimension)
                                                        <input type="text" value="{{$product->pivot->dimension}}" class="form-control" name="di[{{$product->id}}]" style="width:200px;float:left;margin-left:15px;">
                                                        @endif
                                                    </th>
                                                    <td> <input type="text" value="{{$product->pivot->quantity}}" class="form-control" name="eproduct[{{$product->id}}]"></td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                    @endif
                                    @if ($row->display_name == 'Order Specials')
                                    <div class="col-sm-6">
                                        <h4>Specials Ordered</h4>
                                        <table class="table table-borderless">
                                        
                                            <thead>
                                                <tr>
                                                    <th scope="col">Special Code</th>
                                                    <th scope="col">Image</th>
                                                    <th scope="col">Quantity</th>
                                                </tr>
                                            </thead>
                                            <tbody> 
                                                @foreach($specials as $special)
                                                <tr>
                                                    <th>{{ $special->code }}</th>
                                                    <th><img src="{{ asset('storage/'.$special->image)}}" width="250" height="70"></th>
                                                    <td>{{ $special->pivot->quantity }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    @endif
                                    
                                    
                                @endif
                                
                            @endforeach
                        </div>

                        @php
                        $dataTypeRows = $dataType->{($edit ? 'editRows' : 'addRows' )};
                        @endphp
                        <div class="panel-body">
                            <h3>{{$dataTypeContent->tracking_id}}</h3>
                            @foreach($dataTypeRows as $row)
                            <!-- GET THE DISPLAY OPTIONS -->
                                @php
                                    $display_options = $row->details->display ?? NULL;
                                    if ($dataTypeContent->{$row->field.'_'.($edit ? 'edit' : 'add')}) {
                                    $dataTypeContent->{$row->field} = $dataTypeContent->{$row->field.'_'.($edit ? 'edit' : 'add')};
                                    }
                                @endphp
                                @if (isset($row->details->legend) && isset($row->details->legend->text))
                                    <legend class="text-{{ $row->details->legend->align ?? 'center' }}" style="background-color: {{ $row->details->legend->bgcolor ?? '#f0f0f0' }};padding: 5px;">{{ $row->details->legend->text }}</legend>
                                @endif
                                
                                <div class="form-group @if($row->type == 'hidden') hidden @endif col-md-{{ $display_options->width ?? 12 }} {{ $errors->has($row->field) ? 'has-error' : '' }}" @if(isset($display_options->id)){{ "id=$display_options->id" }}@endif>
                                    {{ $row->slugify }}
                                    <label class="control-label" for="name">{{ $row->getTranslatedAttribute('display_name') }}</label>
                                        @include('voyager::multilingual.input-hidden-bread-edit-add')
                                    @if (isset($row->details->view))
                                        @include($row->details->view, ['row' => $row, 'dataType' => $dataType, 'dataTypeContent' => $dataTypeContent, 'content' => $dataTypeContent->{$row->field}, 'action' => ($edit ? 'edit' : 'add'), 'view' => ($edit ? 'edit' : 'add'), 'options' => $row->details])
                                    
                                    @elseif ($row->type == 'relationship')
                                        @include('voyager::formfields.relationship', ['options' => $row->details])
                                    @else
                                        {!! app('voyager')->formField($row, $dataType, $dataTypeContent) !!}
                                    @endif

                                    @foreach (app('voyager')->afterFormFields($row, $dataType, $dataTypeContent) as $after)
                                        {!! $after->handle($row, $dataType, $dataTypeContent) !!}
                                    @endforeach
                                    @if ($errors->has($row->field))
                                        @foreach ($errors->get($row->field) as $error)
                                        <span class="help-block">{{ $error }}</span>
                                        @endforeach
                                    @endif
                                </div>
                            @endforeach
                        </div>
                        <div class="panel-footer">
                            @section('submit-buttons')
                            <button type="submit" name="save" id="save" class="btn btn-primary save">{{ __('voyager::generic.save') }}</button>
                            @stop
                            @yield('submit-buttons')
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>

    {{-- Single delete modal --}}
    <div class="modal modal-danger fade" tabindex="-1" id="delete_modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('voyager::generic.close') }}"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><i class="voyager-trash"></i> {{ __('voyager::generic.delete_question') }} {{ strtolower($dataType->getTranslatedAttribute('display_name_singular')) }}?</h4>
                </div>
                <div class="modal-footer">
                    <form action="{{ route('voyager.'.$dataType->slug.'.index') }}" id="delete_form" method="POST">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-danger pull-right delete-confirm" value="{{ __('voyager::generic.delete_confirm') }} {{ strtolower($dataType->getTranslatedAttribute('display_name_singular')) }}">
                    </form>

                    <button type="button" class="btn btn-default pull-right" data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    @stop

    @section('javascript')
    @if ($isModelTranslatable)
    <script>
        $(document).ready(function() {
            $('.side-body').multilingual();
        });
    </script>
    @endif
    <script>
        var deleteFormAction;
        $('.delete').on('click', function(e) {
            var form = $('#delete_form')[0];

            if (!deleteFormAction) {
                // Save form action initial value
                deleteFormAction = form.action;
            }

            form.action = deleteFormAction.match(/\/[0-9]+$/) ?
                deleteFormAction.replace(/([0-9]+$)/, $(this).data('id')) :
                deleteFormAction + '/' + $(this).data('id');

            $('#delete_modal').modal('show');
        });
        for(var i = {{$index}} ; i < 10 ; i++) {
            $("#img"+i).on('click', function() {
                $("#file"+i).trigger('click');
            });
            i++;
        }
        
    </script>
    @stop