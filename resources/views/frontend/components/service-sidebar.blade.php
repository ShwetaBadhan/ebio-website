<ul>
    <li class="{{ request()->routeIs('autism') ? 'current' : '' }}">
        <a href="{{ route('autism') }}"><i class="fas fa-angle-right"></i><span>Autism</span></a>
    </li>
        <li class="{{ request()->routeIs('adhd') ? 'current' : '' }}">
        <a href="{{ route('adhd') }}"><i class="fas fa-angle-right"></i><span>ADHD</span></a>
    </li>
         <li class="{{ request()->routeIs('speech-disorder') ? 'current' : '' }}">
        <a href="{{ route('speech-disorder') }}"><i class="fas fa-angle-right"></i><span>Speech Disorder</span></a>
    </li>  
     <li class="{{ request()->routeIs('behaviour-disorder') ? 'current' : '' }}">
        <a href="{{ route('behaviour-disorder') }}"><i class="fas fa-angle-right"></i><span>Behaviour Disorder</span></a>
    </li> 
    <li class="{{ request()->routeIs('cerebral-palsy') ? 'current' : '' }}">
        <a href="{{ route('cerebral-palsy') }}"><i class="fas fa-angle-right"></i><span>Cerebral Palsy</span></a>
    </li>
  
  
    <li class="{{ request()->routeIs('paralysis') ? 'current' : '' }}">
        <a href="{{ route('paralysis') }}"><i class="fas fa-angle-right"></i><span>Paralysis</span></a>
    </li>
    <li class="{{ request()->routeIs('diabetes') ? 'current' : '' }}">
        <a href="{{ route('diabetes') }}"><i class="fas fa-angle-right"></i><span>Diabetes</span></a>
    </li>
    <li class="{{ request()->routeIs('lung-diseases') ? 'current' : '' }}">
        <a href="{{ route('lung-diseases') }}"><i class="fas fa-angle-right"></i><span>Lung Diseases</span></a>
    </li>
      <li class="{{ request()->routeIs('cancer-treatment') ? 'current' : '' }}">
        <a href="{{ route('cancer-treatment') }}"><i class="fas fa-angle-right"></i><span>Cancer Treatment</span></a>
    </li>
</ul>