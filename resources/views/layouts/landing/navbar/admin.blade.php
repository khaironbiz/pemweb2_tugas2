<div class="card p-2 w-100">
    <div class="card p-2">
        <div class="card-header">
            <a href="{{route('admin')}}"><b>{{$title}}</b></a>
        </div>
        <ul class="list-group list-group-flush">
            <a href="{{route('education.type')}}">
                <li class="list-group-item @if($class=='education') active @endif ">Pendidikan</li>
            </a>
            <li class="list-group-item">Profesi</li>
            <li class="list-group-item">PKB</li>
            <li class="list-group-item">Admin Area</li>
        </ul>
    </div>
</div>
