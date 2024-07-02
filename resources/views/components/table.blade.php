@props(['headers', 'properties', 'list', 'editRouteName'])

<table class="table table-bordered">
  <thead>
      <tr>
        @foreach ($headers as $header)
          <th>{{ $header }}</th>
        @endforeach    
        <th>Actions</th>
      </tr>
  </thead>

  <tbody>
      @foreach ($list as $item)
          <tr>
              @foreach ($properties as $property)
                <td>{{ $item->$property }}</td>
              @endforeach
              <td>
                @if (!empty($editRouteName))
                  <a href="{{ route($editRouteName, $item->id) }}" class="btn btn-warning">Edit</a>  
                @endif
                <button class="btn btn-danger" 
                wire:confirm="Are you sure that you want to delete it?"
                wire:click="delete({{ $item->id }})">Delete</button>
              </td>
          </tr>
      @endforeach    
  </tbody>   
</table>