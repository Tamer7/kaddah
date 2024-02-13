<input @if($row->required == 1) required @endif type="text" class="form-control" name="{{ $row->field }}"
        placeholder="{{ old($row->field, $options->placeholder ?? $row->getTranslatedAttribute('display_name')) }}"
       {!! isBreadSlugAutoGenerator($options) !!}
       @if(isset($options->disabled)) disabled @endif
       value="{{ old($row->field, $dataTypeContent->{$row->field} ?? $options->default ?? '') }}">
