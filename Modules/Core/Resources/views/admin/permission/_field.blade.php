<div class="row">
    <div class="col-12">
        <x-form-input type="text" name="name" :item="$item" label="Name" required="true"></x-form-input>
        <x-form-textarea name="description" :item="$item" label="Description"></x-form-textarea>
    </div>
    <div class="col-12">
       <table class="table">
           <thead>
                <th>Name</th>
                @foreach($permissions['headers'] as $header)
                    <th>{{ $header }}</th>
                @endforeach
           </thead>
           <tbody>
           @foreach($permissions['body'] as $body)
                <tr>
                    <td>{{ $body['name'] }}</td>
                    @foreach($permissions['headers'] as $header)
                        @foreach($body['roles'] as $key => $role)
                            @if($header == $key)
                                @if($item)
                                    <td>
                                        <input
                                            {{ in_array($role, json_decode($item->permissions)) ? 'checked' : ''  }}
                                            type="checkbox" name="permissions[]" value="{{ $role }}">
                                    </td>
                                @else
                                    <td>
                                        <input type="checkbox" name="permissions[]" value="{{ $role }}">
                                    </td>
                                @endif
                            @endif
                        @endforeach
                    @endforeach
                </tr>
           @endforeach
           </tbody>
       </table>
    </div>
</div>
