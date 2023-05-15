<li class="nav-item">
    <a href="{{ route('autosInformacions.index') }}"
       class="nav-link {{ Request::is('autosInformacions*') ? 'active' : '' }}">
        <p>Autos Informacions</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('cronogramas.index') }}"
       class="nav-link {{ Request::is('cronogramas*') ? 'active' : '' }}">
        <p>Cronogramas</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('ejecucions.index') }}"
       class="nav-link {{ Request::is('ejecucions*') ? 'active' : '' }}">
        <p>Ejecucions</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('empleadosOcupados.index') }}"
       class="nav-link {{ Request::is('empleadosOcupados*') ? 'active' : '' }}">
        <p>Empleados Ocupados</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('historicoCronogramas.index') }}"
       class="nav-link {{ Request::is('historicoCronogramas*') ? 'active' : '' }}">
        <p>Historico Cronogramas</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('historicoAutoInfos.index') }}"
       class="nav-link {{ Request::is('historicoAutoInfos*') ? 'active' : '' }}">
        <p>Historico Auto Infos</p>
    </a>
</li>


