<div>
    <table>
    @foreach ($items as $item)
        <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->mail}}</td>
        <td>{{$item->age}}</td>
        </tr>
    @endforeach
    </table>
</div>
