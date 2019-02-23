<div class="sidebar">
  
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="javascript:void(0)" class="simple-text logo-normal">
                Ong
            </a>
        </div>
        <ul class="nav">
            <li @if(!isset(explode('/', Request::url())[4]) ) class="active"  @endif>
                <a href="{{ route('index.admin') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>Dashboard</p>
                </a>
            </li>

            <li @isset(explode('/', Request::url())[4]) @if(explode('/', Request::url())[4] == 'parceiros') class="active" @endif @endisset >
                <a href="{{ route('parceiros.admin') }}">
                    <i class="fas fa-handshake"></i>
                    <p> Parceiros </p>
                </a>
            </li>

             <li @isset(explode('/', Request::url())[4]) @if(explode('/', Request::url())[4] == 'projetos') class="active" @endif @endisset >
                <a href="{{ route('projetos.admin') }}">
                    <i class="fas fa-handshake"></i>
                    <p> Projetos </p>
                </a>
            </li>
        </ul>
    </div>
</div>